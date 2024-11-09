<?php

namespace App\Filament\Resources\Section;

use App\Filament\Resources\Section\FeaturedArticlesSectionResource\Pages;
use App\Models\Sections\FeaturedArticlesSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class FeaturedArticlesSectionResource extends Resource
{
    protected static ?string $model = FeaturedArticlesSection::class;
    protected static ?string $navigationGroup = 'Section';

    protected static ?string $navigationIcon = 'heroicon-o-document';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),

                // Type selection dropdown
                Forms\Components\Select::make('type')
                    ->label('Content Type')
                    ->options([
                        'video' => 'video',
                        'photos' => 'Photo on how a client enjoyed our services',
                        'news' => 'News on how clients love our serves',
                    ])
                    ->required()
                    ->reactive(), // Makes the form re-render when changed

                // Conditional inputs based on selected type
                Forms\Components\TextInput::make('content')
                    ->label('News Content or YouTube Link')
                    ->visible(fn($get) => $get('type') === 'news' || $get('type') === 'video')
                    ->placeholder('Enter news content or YouTube link if video type'),

                // Upload video or photo
                Forms\Components\FileUpload::make('content')
                    ->label('Upload Video or Photo')
                    ->directory('uploads')
                    ->acceptedFileTypes(['video/*', 'image/*'])
                    ->visible(fn($get) => $get('type') === 'video' || $get('type') === 'photos' || $get('type') === 'news')
                    ->reactive(), // Makes the form re-render when changed

                // Toggle for featured status

                Forms\Components\Toggle::make('is_featured')
                    ->label('Featured')
                    ->default(false),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('Title (News)'),
                Tables\Columns\TextColumn::make('title2')->label('Title (Video)'),
                Tables\Columns\TextColumn::make('title3')->label('Title (Photo)'),
                Tables\Columns\TextColumn::make('type')->label('Type'),
                Tables\Columns\BooleanColumn::make('is_featured')->label('Featured'),
                Tables\Columns\TextColumn::make('created_at')->label('Created At')->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')->label('Updated At')->dateTime(),
            ])
            ->filters([
                // Optional filters
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFeaturedArticlesSections::route('/'),
            'create' => Pages\CreateFeaturedArticlesSection::route('/create'),
            'edit' => Pages\EditFeaturedArticlesSection::route('/{record}/edit'),
        ];
    }
}

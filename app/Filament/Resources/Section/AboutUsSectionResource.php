<?php

namespace App\Filament\Resources\Section;

use App\Filament\Resources\Section\AboutUsSectionResource\Pages;
use App\Filament\Resources\Section\AboutUsSectionResource\RelationManagers;
use App\Models\Sections\AboutUsSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AboutUsSectionResource extends Resource
{
    protected static ?string $model = AboutUsSection::class;
    protected static ?string $navigationGroup = 'Section';

    protected static ?string $navigationIcon = 'heroicon-c-clipboard-document-list';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\TextInput::make('title')
                    ->maxLength(255)
                    ->required()
                    ->label('Title'),
                Forms\Components\RichEditor::make('description')
                    ->required()
                    ->columnSpan('full')
                    ->label('Description'),
                Forms\Components\TextInput::make('button_url')
                    ->maxLength(255)
                    ->required()
                    ->label('Button Url'),
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->columnSpan('full')
                    ->label('Image')
                    ->required(),
                Forms\Components\TextInput::make('button_text')
                    ->required()
                    ->label('Button Text'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Title'),
                Tables\Columns\TextColumn::make('description')
                    ->searchable()
                    ->sortable()
                    ->label('Description'),
                Tables\Columns\TextColumn::make('button_text')
                    ->label('Button Text'),
                Tables\Columns\TextColumn::make('button_url')
                    ->searchable()
                    ->sortable()
                    ->label('Button Url'),
                Tables\Columns\ImageColumn::make('image')
                    ->searchable()
                    ->sortable()
                    ->label('Image'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAboutUsSections::route('/'),
            'create' => Pages\CreateAboutUsSection::route('/create'),
            'edit' => Pages\EditAboutUsSection::route('/{record}/edit'),
        ];
    }
}

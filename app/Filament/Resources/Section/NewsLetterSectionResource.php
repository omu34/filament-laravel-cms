<?php

namespace App\Filament\Resources\Section;

use App\Filament\Resources\Section\NewsLetterSectionResource\Pages;
use App\Filament\Resources\Section\NewsLetterSectionResource\RelationManagers;
use App\Models\Sections\NewsLetterSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NewsLetterSectionResource extends Resource
{
    protected static ?string $model = NewsLetterSection::class;
    protected static ?string $navigationGroup = 'Section';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->maxLength(255)
                    ->required()
                    ->label('Title'),
                Forms\Components\RichEditor::make('description')
                    ->columnSpan('full')
                    ->required()
                    ->label('description'),
                Forms\Components\TextInput::make('button_text')
                    ->maxLength(255)
                    ->required()
                    ->label('Button Text'),
                Forms\Components\TextInput::make('bottom')
                    ->maxLength(255)
                    ->required()
                    ->label('Bottom Line'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->label(' Title'),
                Tables\Columns\TextColumn::make('description')
                    ->searchable()
                    ->sortable()
                    ->label('Description'),
                Tables\Columns\TextColumn::make('button_text')
                    ->searchable()
                    ->sortable()
                    ->label('Button Text'),
                Tables\Columns\TextColumn::make('bottom')
                    ->searchable()
                    ->sortable()
                    ->label('Bottom Line'),
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
            'index' => Pages\ListNewsLetterSections::route('/'),
            'create' => Pages\CreateNewsLetterSection::route('/create'),
            'edit' => Pages\EditNewsLetterSection::route('/{record}/edit'),
        ];
    }
}

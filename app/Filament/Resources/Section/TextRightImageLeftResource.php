<?php

namespace App\Filament\Resources\Section;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Sections\TextRightImageLeft;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\Section\TextRightImageLeftResource\Pages;
use App\Filament\Resources\Section\TextRightImageLeftResource\RelationManagers;

class TextRightImageLeftResource extends Resource
{
    protected static ?string $model = TextRightImageLeft::class;
    protected static ?string $navigationGroup = 'Section';
    protected static ?string $navigationIcon = 'heroicon-c-clipboard-document-list';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->label('Image')
                    ->required(),
                Forms\Components\TextInput::make('title')
                    ->maxLength(255)
                    ->required()
                    ->label('Title'),
                Forms\Components\RichEditor::make('description')
                    ->required()
                    ->columnSpan('full')
                    ->label('Description'),                 
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Image'),
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->label('Title'),                 
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListTextRightImageLefts::route('/'),
            'create' => Pages\CreateTextRightImageLeft::route('/create'),
            'view' => Pages\ViewTextRightImageLeft::route('/{record}'),
            'edit' => Pages\EditTextRightImageLeft::route('/{record}/edit'),
        ];
    }
}

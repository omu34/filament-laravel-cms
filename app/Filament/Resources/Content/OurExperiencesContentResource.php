<?php

namespace App\Filament\Resources\Content;

use App\Filament\Resources\Content\OurExperiencesContentResource\Pages;
use App\Filament\Resources\Content\OurExperiencesContentResource\RelationManagers;
use App\Models\Content\OurExperiencesContent;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OurExperiencesContentResource extends Resource
{
    protected static ?string $model = OurExperiencesContent::class;
    protected static ?string $navigationGroup = 'Content';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('image')
                    ->label('Case Image')
                    ->columnSpanFull()
                    ->required(),
                Forms\Components\TextInput::make('name')
                    ->label('Case Type')
                    ->maxLength(255)
                    ->required(),
                Forms\Components\TextInput::make('button_text')
                    ->label('Button Text')
                    ->maxLength(255)
                    ->required(),
                Forms\Components\TextInput::make('url')
                    ->label('URL')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Case Image'),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->label('Case Type'),
                Tables\Columns\TextColumn::make('button_text')
                    ->searchable()
                    ->sortable()
                    ->label('Button Text'),
                Tables\Columns\TextColumn::make('url')
                    ->searchable()
                    ->sortable()
                    ->label(' URL'),
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
            'index' => Pages\ListOurExperiencesContents::route('/'),
            'create' => Pages\CreateOurExperiencesContent::route('/create'),
            'edit' => Pages\EditOurExperiencesContent::route('/{record}/edit'),
        ];
    }
}

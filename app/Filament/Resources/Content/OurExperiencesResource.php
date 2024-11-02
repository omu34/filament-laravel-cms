<?php

namespace App\Filament\Resources\Content;

use App\Filament\Resources\Content\OurExperiencesResource\Pages;
use App\Filament\Resources\Content\OurExperiencesResource\RelationManagers;
use App\Models\Content\OurExperience;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OurExperiencesResource extends Resource
{
    protected static ?string $model = OurExperience::class;

    protected static ?string $navigationIcon = 'heroicon-m-cube';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Case Type')
                    ->maxLength(255)
                    ->required(),
                Forms\Components\TextInput::make('button_url')
                    ->label('Button URL')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('button_text')
                    ->label('Button Text')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('image')
                    ->label('Case Image')
                    ->required()
                    ->image()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->label('Case Name'),
                Tables\Columns\TextColumn::make('button_url')
                    ->searchable()
                    ->sortable()
                    ->label('Button URL'),
                Tables\Columns\TextColumn::make('button_text')
                    ->searchable()
                    ->sortable()
                    ->label('Button Text'),
                Tables\Columns\ImageColumn::make('image')
                    ->searchable()
                    ->sortable()
                    ->label('Case Image')
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
            'index' => Pages\ListOurExperiences::route('/'),
            'create' => Pages\CreateOurExperiences::route('/create'),
            'edit' => Pages\EditOurExperiences::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources\Section;

use App\Filament\Resources\Section\FeaturedArticlesSectionResource\Pages;
use App\Filament\Resources\Section\FeaturedArticlesSectionResource\RelationManagers;
use App\Models\Sections\FeaturedArticlesSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FeaturedArticlesSectionResource extends Resource
{
    protected static ?string $model = FeaturedArticlesSection::class;

    protected static ?string $navigationIcon = 'heroicon-c-tag';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListFeaturedArticlesSections::route('/'),
            'create' => Pages\CreateFeaturedArticlesSection::route('/create'),
            'edit' => Pages\EditFeaturedArticlesSection::route('/{record}/edit'),
        ];
    }
}

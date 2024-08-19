<?php

namespace App\Filament\Resources\Section;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Sections\RecommendedProduct;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\Section\RecommendedProductResource\Pages;
use App\Filament\Resources\Section\RecommendedProductResource\RelationManagers;

class RecommendedProductResource extends Resource
{
    protected static ?string $model = RecommendedProduct::class;
    protected static ?string $navigationGroup = 'Section';
    protected static ?string $navigationIcon = 'heroicon-c-tag';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->maxLength(255)
                    ->required()
                    ->label('Recommended Product Title'),
                Forms\Components\RichEditor::make('description')
                    ->required()
                    ->columnSpan('full')
                    ->label('Recommended Product Description'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->label('Recommended Product Title'),    
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
            'index' => Pages\ListRecommendedProducts::route('/'),
            'create' => Pages\CreateRecommendedProduct::route('/create'),
            'view' => Pages\ViewRecommendedProduct::route('/{record}'),
            'edit' => Pages\EditRecommendedProduct::route('/{record}/edit'),
        ];
    }
}

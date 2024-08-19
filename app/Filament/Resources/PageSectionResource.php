<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Models\Pages\PageSection;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PageSectionResource\Pages;
use App\Filament\Resources\PageSectionResource\RelationManagers;

class PageSectionResource extends Resource
{
    protected static ?string $model = PageSection::class;

    protected static ?string $navigationIcon = 'heroicon-m-view-columns';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('page_id')
                    ->label('Page Id')
                    ->required(),
                Forms\Components\TextInput::make('section_id')
                    ->label('Section Id')
                    ->required(),
                Forms\Components\TextInput::make('order')
                    ->label('Order')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('page_id')
                    ->searchable()
                    ->sortable()
                    ->label('Page Id'),
                Tables\Columns\TextColumn::make('section_id')
                    ->searchable()
                    ->sortable()
                    ->label('Section Id'),
                Tables\Columns\TextColumn::make('order')
                    ->searchable()
                    ->sortable()
                    ->label('Order'),
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
            'index' => Pages\ListPageSections::route('/'),
            'create' => Pages\CreatePageSection::route('/create'),
            'view' => Pages\ViewPageSection::route('/{record}'),
            'edit' => Pages\EditPageSection::route('/{record}/edit'),
        ];
    }
}

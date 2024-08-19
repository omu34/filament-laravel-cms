<?php

namespace App\Filament\Resources\Content;

use App\Filament\Resources\Content\FooterLinkResource\Pages;
use App\Filament\Resources\Content\FooterLinkResource\RelationManagers;
use App\Models\Content\FooterLink;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FooterLinkResource extends Resource
{
    protected static ?string $model = FooterLink::class;
    protected static ?string $navigationGroup = 'Content';
    protected static ?string $navigationIcon = 'heroicon-c-link';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Link Title')
                    ->maxLength(255)
                    ->required(),
                Forms\Components\TextInput::make('url')
                    ->label('Link URL')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->label('Link Name'),
                Tables\Columns\TextColumn::make('url')
                    ->searchable()
                    ->sortable()
                    ->label('Link URL'),
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
            'index' => Pages\ListFooterLinks::route('/'),
            'create' => Pages\CreateFooterLink::route('/create'),
            'view' => Pages\ViewFooterLink::route('/{record}'),
            'edit' => Pages\EditFooterLink::route('/{record}/edit'),
        ];
    }
}

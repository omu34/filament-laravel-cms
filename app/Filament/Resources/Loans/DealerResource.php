<?php

namespace App\Filament\Resources\Loans;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Loans\Dealer;
use Filament\Resources\Resource;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\Loans\DealerResource\Pages;
use App\Filament\Resources\Loans\DealerResource\RelationManagers;

class DealerResource extends Resource
{
    protected static ?string $model = Dealer::class;
    protected static ?string $navigationGroup = 'Loans';
    protected static ?string $navigationIcon = 'heroicon-s-identification';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Forms\Components\TextInput::make('user_id')
                //     ->maxLength(255)
                //     ->required()
                //     ->label('User ID'),
                Forms\Components\TextInput::make('company_name')
                    ->maxLength(255)
                    ->required()
                    ->label('Company Name'),
                Forms\Components\TextInput::make('location')
                    ->maxLength(255)
                    ->required()
                    ->label('Location'),
                Forms\Components\Toggle::make('is_approved')
                    ->label('Dealer Status'),
                // ->default(false),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Tables\Columns\TextColumn::make('user_id')
                //     ->searchable()
                //     ->sortable()
                //     ->label('User ID'),
                TextColumn::make('company_name')
                    ->searchable()
                    ->sortable()
                    ->label('Company Name'),
                TextColumn::make('location')
                    ->searchable()
                    ->sortable()
                    ->label('Location'),
                IconColumn::make('is_approved')
                    ->boolean()
                    ->trueIcon('heroicon-o-check-badge')
                    ->falseIcon('heroicon-o-x-mark')
                    ->label('Dealer Status')
                // Tables\Columns\TextColumn::make('is_approved')
                //     ->searchable()
                //     ->sortable()
                //     ->label('Dealer Status'),
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
            'index' => Pages\ListDealers::route('/'),
            'create' => Pages\CreateDealer::route('/create'),
            'view' => Pages\ViewDealer::route('/{record}'),
            'edit' => Pages\EditDealer::route('/{record}/edit'),
        ];
    }
}

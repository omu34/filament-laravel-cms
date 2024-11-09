<?php

namespace App\Filament\Resources\Section;

use App\Filament\Resources\Section\SubscriptionResource\Pages;
use App\Filament\Resources\Section\SubscriptionResource\RelationManagers;
use App\Filament\Resources\Section\TextColumn;
use App\Models\Sections\Subscription;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SubscriptionResource extends Resource
{
    protected static ?string $model = Subscription::class;
    protected static ?string $navigationGroup = 'Views';
    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    protected static ?string $navigationLabel = 'Subscribers';
    protected static ?string $pluralModelLabel = 'Subscribed Users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->required(),

            ]);
    }
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('email')->label('Email Address')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('created_at')->label('Subscribed On')->sortable()->dateTime(),
            ])
            ->filters([]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSubscriptions::route('/'),
        ];
    }


    public static function getRelations(): array
    {
        return [
            //
        ];
    }
}

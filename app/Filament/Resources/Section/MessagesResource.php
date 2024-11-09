<?php

namespace App\Filament\Resources\Section;

use App\Filament\Resources\Section\MessagesResource\Pages;
use App\Filament\Resources\Section\MessagesResource\RelationManagers;
use App\Models\Sections\Messages;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MessagesResource extends Resource
{
    protected static ?string $model = Messages::class;
    protected static ?string $navigationLabel = 'Client Messages';
    protected static ?string $navigationGroup = 'Views';
    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Name')
                    ->required(),
                Forms\Components\TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->required(),
                Forms\Components\RichEditor::make('texts')
                    ->label('Message')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Name')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('texts')
                    ->label('Message')
                    ->limit(50), // Limits displayed text in the table
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Received At')
                    ->sortable()
                    ->dateTime(),
            ])
            ->filters([]);
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
            'index' => Pages\ListMessages::route('/'),
        ];
    }
}

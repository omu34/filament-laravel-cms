<?php

namespace App\Filament\Resources\Section;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Sections\Footer;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\Section\FooterResource\Pages;
use App\Filament\Resources\Section\FooterResource\RelationManagers;

class FooterResource extends Resource
{
    protected static ?string $model = Footer::class;
    protected static ?string $navigationGroup = 'Section';
    protected static ?string $navigationIcon = 'heroicon-m-book-open';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('logo')
                    ->image()
                    ->label('Logo')
                    ->required(),
                Forms\Components\RichEditor::make('description')
                    ->required()
                    ->columnSpan('full')
                    ->label('Description'),
                Forms\Components\TextInput::make('phone_title')
                    ->maxLength(255)
                    ->required()
                    ->label('Phone Title'),
                Forms\Components\TextInput::make('phone')
                    ->tel()
                    ->required()
                    ->label('Phone Number'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('logo')
                    ->label('Logo'),
                Tables\Columns\TextColumn::make('description')
                    ->searchable()
                    ->sortable()
                    ->label('Description'),
                Tables\Columns\TextColumn::make('phone_title')
                    ->searchable()
                    ->sortable()
                    ->label('Phone Title'),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable()
                    ->sortable()
                    ->label('Phone Number'),
            Tables\Columns\TextColumn::make('created_at')
                ->dateTime(),
            Tables\Columns\TextColumn::make('updated_at')
                ->dateTime(),
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
            'index' => Pages\ListFooters::route('/'),
            'create' => Pages\CreateFooter::route('/create'),
            'view' => Pages\ViewFooter::route('/{record}'),
            'edit' => Pages\EditFooter::route('/{record}/edit'),
        ];
    }
}

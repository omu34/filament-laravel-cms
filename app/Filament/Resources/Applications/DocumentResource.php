<?php

namespace App\Filament\Resources\Applications;

use App\Filament\Resources\Applications\DocumentResource\Pages;
use App\Filament\Resources\Applications\DocumentResource\RelationManagers;
use App\Models\Loans\Document;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DocumentResource extends Resource
{
    protected static ?string $model = Document::class;
    protected static ?string $navigationGroup = 'Applicants';
    protected static ?string $navigationIcon = 'heroicon-m-folder-plus';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->maxLength(255)
                    ->required()
                    ->label('Document Name'),
                Forms\Components\Select::make('income_source')
                    ->options([
                        'salary' => 'Salary',
                        'business' => 'Business',
                    ]),
                Forms\Components\Select::make('business_type')
                    ->options([
                        'partnership' => 'Partnership',
                        'company' => 'Company',
                    ]),
                // Forms\Components\TextInput::make('income_source')
                //     ->maxLength(255)
                //     ->required()
                //     ->label('Income Source'),
                // Forms\Components\TextInput::make('business_type')
                //     ->maxLength(255)
                //     ->required()
                //     ->label('Business Type'),
                // Forms\Components\Select::make('income_source')
                //     ->label('Income Source')
                //     ->options(Document::all()->filter(function ($document) {
                //         return !is_null($document->income_source);
                //     })->pluck('income_source', 'id'))
                //     ->searchable(),
                // Forms\Components\ToggleButtons::make('income_source')
                //     ->inline()
                //     ->options(Document::class)
                //     ->required()
                //     ->label('Income Source'),
                // Forms\Components\ToggleButtons::make('business_type')
                //     ->inline()
                //     ->options(Document::class)
                //     ->required()
                //     ->label('Business Type'),
                Forms\Components\Toggle::make('is_required')
                    ->label('Required Document'),
                // ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->label('Document Name'),
                Tables\Columns\TextColumn::make('income_source')
                    ->badge()
                    ->label('Income Source'),
                Tables\Columns\TextColumn::make('business_type')
                    ->badge()
                    ->label('Business Type'),
                Tables\Columns\TextColumn::make('is_required')
                    ->searchable()
                    ->sortable()
                    ->label('Required Document'),
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
            'index' => Pages\ListDocuments::route('/'),
            'create' => Pages\CreateDocument::route('/create'),
            'view' => Pages\ViewDocument::route('/{record}'),
            'edit' => Pages\EditDocument::route('/{record}/edit'),
        ];
    }
}

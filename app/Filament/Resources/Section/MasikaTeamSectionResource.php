<?php

namespace App\Filament\Resources\Section;

use App\Filament\Resources\Section\MasikaTeamSectionResource\Pages;
use App\Filament\Resources\Section\MasikaTeamSectionResource\RelationManagers;
use App\Models\Sections\MasikaTeamSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MasikaTeamSectionResource extends Resource
{
    protected static ?string $model = MasikaTeamSection::class;
    protected static ?string $navigationGroup = 'Section';

    protected static ?string $navigationIcon = 'heroicon-s-bars-3';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->maxLength(255)
                    ->required()
                    ->label('Title'),
                Forms\Components\RichEditor::make('description')
                    ->columnSpan('full')
                    ->required()
                    ->label('description'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->label(' Title'),
                Tables\Columns\TextColumn::make('description')
                    ->searchable()
                    ->sortable()
                    ->label('Description'),
            Tables\Columns\TextColumn::make('created_at')
                ->dateTime(),
            Tables\Columns\TextColumn::make('updated_at')
                ->dateTime(),
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
            'index' => Pages\ListMasikaTeamSections::route('/'),
            'create' => Pages\CreateMasikaTeamSection::route('/create'),
            'edit' => Pages\EditMasikaTeamSection::route('/{record}/edit'),
        ];
    }
}

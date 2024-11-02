<?php

namespace App\Filament\Resources\Content;

use App\Filament\Resources\Content\MasikaTeamContentResource\Pages;
use App\Filament\Resources\Content\MasikaTeamContentResource\RelationManagers;
use App\Models\Content\MasikaTeamContent;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MasikaTeamContentResource extends Resource
{
    protected static ?string $model = MasikaTeamContent::class;

    protected static ?string $navigationIcon = 'heroicon-c-square-3-stack-3d';

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
            'index' => Pages\ListMasikaTeamContents::route('/'),
            'create' => Pages\CreateMasikaTeamContent::route('/create'),
            'edit' => Pages\EditMasikaTeamContent::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources\Section;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Models\Sections\CenteredCtaText;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\Section\CenteredCtaTextResource\Pages;
use App\Filament\Resources\Section\CenteredCtaTextResource\RelationManagers;

class CenteredCtaTextResource extends Resource
{
    protected static ?string $model = CenteredCtaText::class;
    protected static ?string $navigationGroup = 'Section';
    protected static ?string $navigationIcon = 'heroicon-s-bars-3';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->maxLength(255)
                    ->required()
                    ->label('CTA Title'),
                Forms\Components\RichEditor::make('description')
                    ->required()
                    ->columnSpan('full')
                    ->label('CTA Description'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->label('CTA Title'),                
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
            'index' => Pages\ListCenteredCtaTexts::route('/'),
            'create' => Pages\CreateCenteredCtaText::route('/create'),
            'view' => Pages\ViewCenteredCtaText::route('/{record}'),
            'edit' => Pages\EditCenteredCtaText::route('/{record}/edit'),
        ];
    }
}

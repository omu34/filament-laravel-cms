<?php

namespace App\Filament\Resources\Section;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Models\Sections\FaqsContent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\Section\FaqsContentResource\Pages;
use App\Filament\Resources\Section\FaqsContentResource\RelationManagers;

class FaqsContentResource extends Resource
{
    protected static ?string $model = FaqsContent::class;
    protected static ?string $navigationGroup = 'Section';
    protected static ?string $navigationIcon = 'heroicon-c-question-mark-circle';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->maxLength(255)
                    ->required()
                    ->label('Faqs Section Title'),
                Forms\Components\RichEditor::make('description')
                    ->required()
                    ->columnSpan('full')
                    ->label('Faqs Section Description'),   
                // Forms\Components\Select::make('page_section_id')
                //     ->relationship('parent', 'name')
                //     ->required(),                                 
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->label('Faqs Section Title'), 
                Tables\Columns\TextColumn::make('description')
                    ->searchable()
                    ->sortable()
                    ->label('Faqs Section Description'),
                // Tables\Columns\TextColumn::make('page_section_id')
                //     ->searchable()
                //     ->sortable()
                //     ->label('Page'),
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
            'index' => Pages\ListFaqsContents::route('/'),
            'create' => Pages\CreateFaqsContent::route('/create'),
            'view' => Pages\ViewFaqsContent::route('/{record}'),
            'edit' => Pages\EditFaqsContent::route('/{record}/edit'),
        ];
    }
}

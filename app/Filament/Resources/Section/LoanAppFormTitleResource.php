<?php

namespace App\Filament\Resources\Section;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Models\Sections\LoanAppForm;
use App\Models\Section\LoanAppFormTitle;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\Section\LoanAppFormTitleResource\Pages;
use App\Filament\Resources\Section\LoanAppFormTitleResource\RelationManagers;

class LoanAppFormTitleResource extends Resource
{
    protected static ?string $model = LoanAppForm::class;
    protected static ?string $navigationGroup = 'Section';
    protected static ?string $navigationIcon = 'heroicon-c-square-3-stack-3d';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('first_step_title')
                    ->maxLength(255)
                    ->required()
                    ->label('First Step Title'),  
                Forms\Components\TextInput::make('second_step_title')
                    ->maxLength(255)
                    ->required()
                    ->label('Second Step Title'),
                Forms\Components\TextInput::make('third_step_title')
                    ->maxLength(255)
                    ->required()
                    ->label('Third Step Title'),
                Forms\Components\TextInput::make('fourth_step_title')
                    ->maxLength(255)
                    ->required()
                    ->label('Fourth Step Title'),             
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('first_step_title')
                    ->searchable()
                    ->sortable()
                    ->label('First Step Title'),
                Tables\Columns\TextColumn::make('second_step_title')
                    ->searchable()
                    ->sortable()
                    ->label('Second Step Title'),
                Tables\Columns\TextColumn::make('third_step_title')
                    ->searchable()
                    ->sortable()
                    ->label('Third Step Title'),
                Tables\Columns\TextColumn::make('fourth_step_title')
                    ->searchable()
                    ->sortable()
                    ->label('Fourth Step Title'),
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
            'index' => Pages\ListLoanAppFormTitles::route('/'),
            'create' => Pages\CreateLoanAppFormTitle::route('/create'),
            'view' => Pages\ViewLoanAppFormTitle::route('/{record}'),
            'edit' => Pages\EditLoanAppFormTitle::route('/{record}/edit'),
        ];
    }
}

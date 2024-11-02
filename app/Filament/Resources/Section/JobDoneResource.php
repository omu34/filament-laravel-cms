<?php

namespace App\Filament\Resources\Section;

use App\Filament\Resources\Section\JobDoneResource\Pages;
use App\Filament\Resources\Section\JobDoneResource\RelationManagers;
use App\Models\Sections\JobDone;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JobDoneResource extends Resource
{
    protected static ?string $model = JobDone::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('main_title')
                    ->maxLength(255)
                    ->required()
                    ->label('Title'),
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->required()
                    ->columnSpan('full')
                    ->label('Background Image'),
                Forms\Components\TextInput::make('subtitle1')
                    ->maxLength(255)
                    ->required()
                    ->label('Satisfied Clients'),
                Forms\Components\TextInput::make('subtitle2')
                    ->maxLength(255)
                    ->required()
                    ->label('Successful Cases'),
                Forms\Components\TextInput::make('subtitle3')
                    ->maxLength(255)
                    ->required()
                    ->label('Job Done'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('main_title')
                    ->searchable()
                    ->sortable()
                    ->label(' Title'),
                Tables\Columns\ImageColumn::make('image')
                    ->searchable()
                    ->sortable()
                    ->label('Background Image'),
                Tables\Columns\TextColumn::make('subtitle1')
                    ->searchable()
                    ->sortable()
                    ->label('Satisfied Clients'),
                Tables\Columns\TextColumn::make('subtitle2')
                    ->searchable()
                    ->sortable()
                    ->label('Successful Cases'),
                Tables\Columns\TextColumn::make('subtitle3')
                    ->searchable()
                    ->sortable()
                    ->label('Jobs Done'),
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
            'index' => Pages\ListJobDones::route('/'),
            'create' => Pages\CreateJobDone::route('/create'),
            'edit' => Pages\EditJobDone::route('/{record}/edit'),
        ];
    }
}

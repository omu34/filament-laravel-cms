<?php

namespace App\Filament\Resources\Section;

use App\Filament\Resources\Section\ContactUsSectionResource\Pages;
use App\Filament\Resources\Section\ContactUsSectionResource\RelationManagers;
use App\Models\Sections\ContactUsSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContactUsSectionResource extends Resource
{
    protected static ?string $model = ContactUsSection::class;
    protected static ?string $navigationGroup = 'Section';

    protected static ?string $navigationIcon = 'heroicon-c-clipboard-document-list';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\TextInput::make('title')
                    ->maxLength(255)
                    ->required()
                    ->label('Title'),
                Forms\Components\RichEditor::make('description')
                    ->maxLength(255)
                    ->required()
                    ->columnSpan('full')
                    ->label('description'),
                Forms\Components\TextInput::make('hour_title')
                    ->maxLength(255)
                    ->required()
                    ->label('Hours '),
                Forms\Components\TextInput::make('hour_subtitle')
                    ->maxLength(255)
                    ->required()
                    ->label('Office Hours'),
                Forms\Components\TextInput::make('address_title')
                    ->maxLength(255)
                    ->required()
                    ->label('Addresses Title'),
                Forms\Components\TextInput::make('address_subtitle')
                    ->maxLength(255)
                    ->required()
                    ->label('Our Addresses'),
                Forms\Components\TextInput::make('contact_title')
                    ->maxLength(255)
                    ->required()
                    ->label('Contact Title'),
                Forms\Components\TextInput::make('contact_title')
                    ->maxLength(255)
                    ->required()
                    ->label('Our Contacts'),
                Forms\Components\TextInput::make('form_title')
                    ->maxLength(255)
                    ->required()
                    ->label('Form Title'),
                Forms\Components\TextInput::make('button_text')
                    ->maxLength(255)
                    ->required()
                    ->label('Button Text'),
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
                Tables\Columns\TextColumn::make('hour_title')
                    ->searchable()
                    ->sortable()
                    ->label('Hour Title'),
                Tables\Columns\TextColumn::make('hour_subtitle')
                    ->searchable()
                    ->sortable()
                    ->label('Office Hours'),
                Tables\Columns\TextColumn::make('address_title')
                    ->searchable()
                    ->sortable()
                    ->label('Address Title'),
                Tables\Columns\TextColumn::make('address_subtitle')
                    ->searchable()
                    ->sortable()
                    ->label('Our Addresses'),
                Tables\Columns\TextColumn::make('contact_title')
                    ->searchable()
                    ->sortable()
                    ->label('Contact Title'),
                Tables\Columns\TextColumn::make('contact_subtitle')
                    ->searchable()
                    ->sortable()
                    ->label('Our Contacts'),
                Tables\Columns\TextColumn::make('form_title')
                    ->searchable()
                    ->sortable()
                    ->label('Form Title'),

                Tables\Columns\TextColumn::make('button_text')
                    ->searchable()
                    ->sortable()
                    ->label('Button Text'),
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
            'index' => Pages\ListContactUsSections::route('/'),
            'create' => Pages\CreateContactUsSection::route('/create'),
            'edit' => Pages\EditContactUsSection::route('/{record}/edit'),
        ];
    }
}

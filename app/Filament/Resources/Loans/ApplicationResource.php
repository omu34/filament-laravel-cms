<?php

namespace App\Filament\Resources\Loans;

use Filament\Forms;
use Filament\Tables;
use Filament\Infolists;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use App\Models\Loans\Application;
use Filament\Infolists\Components;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\KeyValueEntry;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\Loans\ApplicationResource\Pages;
use App\Filament\Resources\Loans\ApplicationResource\RelationManagers;

class ApplicationResource extends Resource
{
    protected static ?string $model = Application::class;
    protected static ?string $navigationGroup = 'Loans';
    protected static ?string $navigationIcon = 'heroicon-m-clipboard-document-check';

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
                TextColumn::make('reference_number')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('customer.user.full_name')
                    ->searchable()
                    ->sortable()
                    ->label('Customer'),
                TextColumn::make('created_at')
                    ->date('Y-m-d')
                    ->label('Application Date'),
                TextColumn::make('amount')
                    ->money('KES'),
                TextColumn::make('dealer.company_name')
                    ->searchable()
                    ->sortable()
                    ->label('Dealer'),
                TextColumn::make('agent.user.full_name')
                    ->searchable()
                    ->sortable()
                    ->label('Agent'),
                TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'pending' => 'warning',
                        'approved' => 'success',
                        'denied' => 'danger',
                        default => 'gray',
                    }),
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
            'index' => Pages\ListApplications::route('/'),
            'create' => Pages\CreateApplication::route('/create'),
            'view' => Pages\ViewApplication::route('/{record}'),
            'edit' => Pages\EditApplication::route('/{record}/edit'),
        ];
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Components\Section::make()
                    ->schema([
                        Components\Split::make([
                            Components\Grid::make(2)
                                ->schema([
                                    //name,email, phone, id_numner/ passport,
                                    TextEntry::make('reference_number'),
                                    TextEntry::make('customer.user.full_name')
                                        ->label('Name'),
                                    TextEntry::make('customer.user.email')
                                        ->label('Email'),
                                    TextEntry::make('customer.user.phone')
                                        ->label('Phone'),
                                    TextEntry::make('customer.id_number')
                                        ->label('ID Number'),
                                    // TextEntry::make('customer.passport_number')
                                    //     ->label('Passport Number'),
                                    TextEntry::make('customer.kra_pin')
                                        ->label('KRA PIN'),
                                ]),
                        ])->from('lg'),
                    ]),
                Components\Section::make('Financial Details')
                    ->schema([
                        Components\Split::make([
                            Components\Grid::make(2)
                                ->schema([
                                    //existing, amount, status, dealer, agent
                                    TextEntry::make('created_at')
                                        ->date('Y-m-d')
                                        ->label('Application Date'),
                                    TextEntry::make('dealer.company_name')
                                        ->label('Dealer'),
                                    TextEntry::make('agent.user.full_name')
                                        ->label('Agent'),
                                    TextEntry::make('amount')
                                        ->money('KES'),
                                    TextEntry::make('status')
                                        ->badge()
                                        ->color(fn (string $state): string => match ($state) {
                                            'pending' => 'warning',
                                            'approved' => 'success',
                                            'denied' => 'danger',
                                            default => 'gray',
                                        }),
                                ]),
                        ])->from('lg'),
                    ])->collapsible(),
                // Components\Section::make('Income Details')
                //     ->schema([
                //         Components\Split::make([
                //             Components\Grid::make(2)
                //                 ->schema([
                //                     //source of income, other income, loop of income
                //                     TextEntry::make('reference_number'),
                //                     TextEntry::make('customer.user.full_name')
                //                         ->label('Customer'),
                //                     TextEntry::make('created_at')
                //                         ->date('Y-m-d')
                //                         ->label('Application Date'),
                //                     TextEntry::make('amount')
                //                         ->money('KES'),
                //                     TextEntry::make('dealer.company_name')
                //                         ->label('Dealer'),
                //                     TextEntry::make('agent.user.full_name')
                //                         ->label('Agent'),
                //                     TextEntry::make('status')
                //                         ->badge()
                //                         ->color(fn (string $state): string => match ($state) {
                //                             'pending' => 'warning',
                //                             'approved' => 'success',
                //                             'denied' => 'danger',
                //                             default => 'gray',
                //                         }),
                //                 ]),
                //         ])->from('lg'),
                //     ])->collapsible(),
                // Components\Section::make('Uploaded Documents')
                //     ->schema([
                //         Components\Split::make([
                //             Components\Grid::make(2)
                //                 ->schema([
                //                     //loop of uploaded documents
                //                     KeyValueEntry::make('customer.documents')
                //                         ->keyLabel('Document')
                //                         ->valueLabel('Url')
                //                 ]),
                //         ])->from('lg'),
                //     ])->collapsible(),
            ]);
    }
}

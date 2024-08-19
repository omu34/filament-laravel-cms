<?php

namespace App\Filament\Resources\Section\LoanCalculatorResource\Pages;

use App\Filament\Resources\Section\LoanCalculatorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLoanCalculator extends EditRecord
{
    protected static string $resource = LoanCalculatorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}

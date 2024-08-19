<?php

namespace App\Filament\Resources\Section\LoanAppFormTitleResource\Pages;

use App\Filament\Resources\Section\LoanAppFormTitleResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewLoanAppFormTitle extends ViewRecord
{
    protected static string $resource = LoanAppFormTitleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

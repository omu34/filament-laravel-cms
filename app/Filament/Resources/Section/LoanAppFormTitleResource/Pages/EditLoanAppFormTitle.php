<?php

namespace App\Filament\Resources\Section\LoanAppFormTitleResource\Pages;

use App\Filament\Resources\Section\LoanAppFormTitleResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLoanAppFormTitle extends EditRecord
{
    protected static string $resource = LoanAppFormTitleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}

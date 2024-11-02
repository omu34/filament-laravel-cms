<?php

namespace App\Filament\Resources\Section\NewsLetterSectionResource\Pages;

use App\Filament\Resources\Section\NewsLetterSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNewsLetterSection extends EditRecord
{
    protected static string $resource = NewsLetterSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

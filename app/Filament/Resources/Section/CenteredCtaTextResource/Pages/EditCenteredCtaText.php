<?php

namespace App\Filament\Resources\Section\CenteredCtaTextResource\Pages;

use App\Filament\Resources\Section\CenteredCtaTextResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCenteredCtaText extends EditRecord
{
    protected static string $resource = CenteredCtaTextResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}

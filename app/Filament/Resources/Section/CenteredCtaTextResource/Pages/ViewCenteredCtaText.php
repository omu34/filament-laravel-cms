<?php

namespace App\Filament\Resources\Section\CenteredCtaTextResource\Pages;

use App\Filament\Resources\Section\CenteredCtaTextResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewCenteredCtaText extends ViewRecord
{
    protected static string $resource = CenteredCtaTextResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

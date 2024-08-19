<?php

namespace App\Filament\Resources\Section\CenteredCtaTextResource\Pages;

use App\Filament\Resources\Section\CenteredCtaTextResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCenteredCtaTexts extends ListRecords
{
    protected static string $resource = CenteredCtaTextResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\Section\OurExperienceSectionResource\Pages;

use App\Filament\Resources\Section\OurExperienceSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOurExperienceSections extends ListRecords
{
    protected static string $resource = OurExperienceSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

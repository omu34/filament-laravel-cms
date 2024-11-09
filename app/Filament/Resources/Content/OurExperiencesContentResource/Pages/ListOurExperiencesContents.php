<?php

namespace App\Filament\Resources\Content\OurExperiencesContentResource\Pages;

use App\Filament\Resources\Content\OurExperiencesContentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOurExperiencesContents extends ListRecords
{
    protected static string $resource = OurExperiencesContentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

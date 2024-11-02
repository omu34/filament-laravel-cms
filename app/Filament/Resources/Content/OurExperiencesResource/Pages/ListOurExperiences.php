<?php

namespace App\Filament\Resources\Content\OurExperiencesResource\Pages;

use App\Filament\Resources\Content\OurExperiencesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOurExperiences extends ListRecords
{
    protected static string $resource = OurExperiencesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

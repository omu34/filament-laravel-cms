<?php

namespace App\Filament\Resources\Content\OurExperiencesResource\Pages;

use App\Filament\Resources\Content\OurExperiencesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOurExperiences extends EditRecord
{
    protected static string $resource = OurExperiencesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

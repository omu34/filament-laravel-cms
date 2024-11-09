<?php

namespace App\Filament\Resources\Content\OurExperiencesContentResource\Pages;

use App\Filament\Resources\Content\OurExperiencesContentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOurExperiencesContent extends EditRecord
{
    protected static string $resource = OurExperiencesContentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

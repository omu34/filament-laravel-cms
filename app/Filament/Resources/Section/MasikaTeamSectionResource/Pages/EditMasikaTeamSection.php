<?php

namespace App\Filament\Resources\Section\MasikaTeamSectionResource\Pages;

use App\Filament\Resources\Section\MasikaTeamSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMasikaTeamSection extends EditRecord
{
    protected static string $resource = MasikaTeamSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

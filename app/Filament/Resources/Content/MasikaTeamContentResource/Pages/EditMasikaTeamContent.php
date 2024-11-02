<?php

namespace App\Filament\Resources\Content\MasikaTeamContentResource\Pages;

use App\Filament\Resources\Content\MasikaTeamContentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMasikaTeamContent extends EditRecord
{
    protected static string $resource = MasikaTeamContentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

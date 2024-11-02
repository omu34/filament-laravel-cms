<?php

namespace App\Filament\Resources\Content\MasikaTeamContentResource\Pages;

use App\Filament\Resources\Content\MasikaTeamContentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMasikaTeamContents extends ListRecords
{
    protected static string $resource = MasikaTeamContentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

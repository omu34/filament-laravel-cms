<?php

namespace App\Filament\Resources\Applications\DealerResource\Pages;

use App\Filament\Resources\Applications\DealerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDealers extends ListRecords
{
    protected static string $resource = DealerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

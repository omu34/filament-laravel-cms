<?php

namespace App\Filament\Resources\Applications\DealerResource\Pages;

use App\Filament\Resources\Applications\DealerResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewDealer extends ViewRecord
{
    protected static string $resource = DealerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

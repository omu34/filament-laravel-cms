<?php

namespace App\Filament\Resources\Applications\DealerResource\Pages;

use App\Filament\Resources\Applications\DealerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDealer extends EditRecord
{
    protected static string $resource = DealerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}

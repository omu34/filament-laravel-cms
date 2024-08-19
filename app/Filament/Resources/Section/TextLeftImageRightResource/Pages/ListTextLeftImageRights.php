<?php

namespace App\Filament\Resources\Section\TextLeftImageRightResource\Pages;

use App\Filament\Resources\Section\TextLeftImageRightResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTextLeftImageRights extends ListRecords
{
    protected static string $resource = TextLeftImageRightResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

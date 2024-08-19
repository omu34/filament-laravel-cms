<?php

namespace App\Filament\Resources\Section\TextLeftImageRightResource\Pages;

use App\Filament\Resources\Section\TextLeftImageRightResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewTextLeftImageRight extends ViewRecord
{
    protected static string $resource = TextLeftImageRightResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

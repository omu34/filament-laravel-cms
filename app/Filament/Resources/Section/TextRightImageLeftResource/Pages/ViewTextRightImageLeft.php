<?php

namespace App\Filament\Resources\Section\TextRightImageLeftResource\Pages;

use App\Filament\Resources\Section\TextRightImageLeftResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewTextRightImageLeft extends ViewRecord
{
    protected static string $resource = TextRightImageLeftResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

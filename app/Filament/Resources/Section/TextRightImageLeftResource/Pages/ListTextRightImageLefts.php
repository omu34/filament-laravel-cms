<?php

namespace App\Filament\Resources\Section\TextRightImageLeftResource\Pages;

use App\Filament\Resources\Section\TextRightImageLeftResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTextRightImageLefts extends ListRecords
{
    protected static string $resource = TextRightImageLeftResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

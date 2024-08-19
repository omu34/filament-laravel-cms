<?php

namespace App\Filament\Resources\Section\FaqsContentResource\Pages;

use App\Filament\Resources\Section\FaqsContentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFaqsContents extends ListRecords
{
    protected static string $resource = FaqsContentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

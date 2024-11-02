<?php

namespace App\Filament\Resources\Section\AboutUsSectionResource\Pages;

use App\Filament\Resources\Section\AboutUsSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAboutUsSections extends ListRecords
{
    protected static string $resource = AboutUsSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

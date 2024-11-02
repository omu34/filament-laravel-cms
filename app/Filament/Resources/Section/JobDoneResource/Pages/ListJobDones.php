<?php

namespace App\Filament\Resources\Section\JobDoneResource\Pages;

use App\Filament\Resources\Section\JobDoneResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJobDones extends ListRecords
{
    protected static string $resource = JobDoneResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

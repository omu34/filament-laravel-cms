<?php

namespace App\Filament\Resources\Section\JobDoneResource\Pages;

use App\Filament\Resources\Section\JobDoneResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJobDone extends EditRecord
{
    protected static string $resource = JobDoneResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

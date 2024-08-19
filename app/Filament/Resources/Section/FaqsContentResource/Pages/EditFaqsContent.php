<?php

namespace App\Filament\Resources\Section\FaqsContentResource\Pages;

use App\Filament\Resources\Section\FaqsContentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFaqsContent extends EditRecord
{
    protected static string $resource = FaqsContentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}

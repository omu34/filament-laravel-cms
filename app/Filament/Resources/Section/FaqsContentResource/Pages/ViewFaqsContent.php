<?php

namespace App\Filament\Resources\Section\FaqsContentResource\Pages;

use App\Filament\Resources\Section\FaqsContentResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewFaqsContent extends ViewRecord
{
    protected static string $resource = FaqsContentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

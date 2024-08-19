<?php

namespace App\Filament\Resources\Content\FaqsResource\Pages;

use App\Filament\Resources\Content\FaqsResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewFaqs extends ViewRecord
{
    protected static string $resource = FaqsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\Content\FaqsResource\Pages;

use App\Filament\Resources\Content\FaqsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFaqs extends EditRecord
{
    protected static string $resource = FaqsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}

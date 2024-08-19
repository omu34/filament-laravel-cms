<?php

namespace App\Filament\Resources\Section\TextRightImageLeftResource\Pages;

use App\Filament\Resources\Section\TextRightImageLeftResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTextRightImageLeft extends EditRecord
{
    protected static string $resource = TextRightImageLeftResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}

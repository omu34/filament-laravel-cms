<?php

namespace App\Filament\Resources\Section\TextLeftImageRightResource\Pages;

use App\Filament\Resources\Section\TextLeftImageRightResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTextLeftImageRight extends EditRecord
{
    protected static string $resource = TextLeftImageRightResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\Content\FooterLinkResource\Pages;

use App\Filament\Resources\Content\FooterLinkResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFooterLink extends EditRecord
{
    protected static string $resource = FooterLinkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}

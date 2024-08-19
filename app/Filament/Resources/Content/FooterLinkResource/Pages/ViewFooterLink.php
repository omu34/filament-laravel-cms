<?php

namespace App\Filament\Resources\Content\FooterLinkResource\Pages;

use App\Filament\Resources\Content\FooterLinkResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewFooterLink extends ViewRecord
{
    protected static string $resource = FooterLinkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

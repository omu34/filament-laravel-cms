<?php

namespace App\Filament\Resources\Content\SocialResource\Pages;

use App\Filament\Resources\Content\SocialResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewSocial extends ViewRecord
{
    protected static string $resource = SocialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

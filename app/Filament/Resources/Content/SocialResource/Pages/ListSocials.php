<?php

namespace App\Filament\Resources\Content\SocialResource\Pages;

use App\Filament\Resources\Content\SocialResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSocials extends ListRecords
{
    protected static string $resource = SocialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

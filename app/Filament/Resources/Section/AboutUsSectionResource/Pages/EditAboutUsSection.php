<?php

namespace App\Filament\Resources\Section\AboutUsSectionResource\Pages;

use App\Filament\Resources\Section\AboutUsSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAboutUsSection extends EditRecord
{
    protected static string $resource = AboutUsSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

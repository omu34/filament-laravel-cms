<?php

namespace App\Filament\Resources\Section\RecommendedProductResource\Pages;

use App\Filament\Resources\Section\RecommendedProductResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRecommendedProduct extends EditRecord
{
    protected static string $resource = RecommendedProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}

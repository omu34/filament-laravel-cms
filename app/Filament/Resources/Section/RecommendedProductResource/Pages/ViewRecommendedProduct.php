<?php

namespace App\Filament\Resources\Section\RecommendedProductResource\Pages;

use App\Filament\Resources\Section\RecommendedProductResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewRecommendedProduct extends ViewRecord
{
    protected static string $resource = RecommendedProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

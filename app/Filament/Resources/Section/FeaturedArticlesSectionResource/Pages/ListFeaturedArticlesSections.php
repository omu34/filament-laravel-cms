<?php

namespace App\Filament\Resources\Section\FeaturedArticlesSectionResource\Pages;

use App\Filament\Resources\Section\FeaturedArticlesSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFeaturedArticlesSections extends ListRecords
{
    protected static string $resource = FeaturedArticlesSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

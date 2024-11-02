<?php

namespace App\Filament\Resources\Section\FeaturedArticlesSectionResource\Pages;

use App\Filament\Resources\Section\FeaturedArticlesSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFeaturedArticlesSection extends EditRecord
{
    protected static string $resource = FeaturedArticlesSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\Section\FeaturedArticlesSectionResource\Pages;

use App\Filament\Resources\Section\FeaturedArticlesSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFeaturedArticlesSection extends CreateRecord
{
    protected static string $resource = FeaturedArticlesSectionResource::class;
}

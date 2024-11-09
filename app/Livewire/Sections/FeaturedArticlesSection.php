<?php

namespace App\Livewire\Sections;

use App\Models\Sections\FeaturedArticlesSection as Article;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class FeaturedArticlesSection extends Component
{
    // public $articles;

    // protected $listeners = ['toggleFeatured' => 'updateFeaturedStatus'];

    // public function mount()
    // {
    //     // Fetch only the articles needed for display (featured or latest as required)
    //     $this->articles = Featured::latest()->take(3)->get();
    // }

    // public function updateFeaturedStatus($articleId)
    // {
    //     $article = Featured::findOrFail($articleId);
    //     $article->is_featured = !$article->is_featured;
    //     $article->save();

    //     // Re-fetch the articles to reflect changes
    //     $this->articles = Featured::latest()->take(3)->get();
    // }

    // public function getYoutubeId($url)
    // {
    //     // Extract YouTube video ID from URL
    //     preg_match("/(youtu\.be\/|youtube\.com\/(watch\?(.*&)?v=|(embed|v|vi)\/))([^\?&\"'>]+)/", $url, $matches);
    //     return $matches[5] ?? null;
    // }

    // public function render()
    // {
    //     return view('livewire.sections.featured-articles-section', [
    //         'articles' => $this->articles,
    //     ]);
    // }

    // public $sectiondata;
    // public $articles;


    // public function mount()
    // {
    //     // Load the articles initially
    //     $this->loadArticles();
    // }

    // public function loadArticles()
    // {
    //     // Get articles marked as "featured" or adjust as needed for initial data load
    //     $this->articles = Article::where('is_featured', true)->orWhere('is_featured', false)->latest()->take(3)->get();
    //     $this->sectiondata = Article::latest()->first();
    // }

    // public function toggleFeatured($articleId)
    // {
    //     // Toggle the featured status
    //     $article = Article::findOrFail($articleId);
    //     $article->is_featured = !$article->is_featured;
    //     $article->save();

    //     // Reload the articles list
    //     $this->loadArticles();
    // }

    // public function getYoutubeId($url)
    // {
    //     // Extract YouTube video ID from URL
    //     preg_match("/(youtu\.be\/|youtube\.com\/(watch\?(.*&)?v=|(embed|v|vi)\/))([^\?&\"'>]+)/", $url, $matches);
    //     return $matches[5] ?? null;
    // }

    // public function render()
    // {
    //     return view('livewire.sections.featured-articles-section', [
    //         'sectiondata' => $this->sectiondata
    //     ]);
    // }



    public $sectiondata;

    public $articles;

    protected $listeners = ['articleUpdated' => 'fetchArticles'];

    public function mount()
    {
        $this->fetchArticles();
    }

    public function fetchArticles()
    {
        $this->articles = Article::where('is_featured', true)->orWhere('is_featured', false)->latest()->take(3)->get();
        $this->sectiondata = Article::latest()->first();
    }

    public function toggleFeatured($articleId)
    {
        $article = FeaturedArticlesSection::find($articleId);
        if ($article) {
            $article->is_featured = !$article->is_featured;
            $article->save();
            $this->emit('articleUpdated'); // Trigger real-time update in the Filament resource as well
        }
    }

    public function getYoutubeId($url)
    {
        // Extract YouTube video ID from URL
        preg_match("/(youtu\.be\/|youtube\.com\/(watch\?(.*&)?v=|(embed|v|vi)\/))([^\?&\"'>]+)/", $url, $matches);
        return $matches[5] ?? null;
    }

    public function render()
    {
        return view('livewire.sections.featured-articles-section', [
            'articles' => $this->articles,
            'sectiondata' => $this->sectiondata
        ]);
    }
}

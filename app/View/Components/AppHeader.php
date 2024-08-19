<?php

namespace App\View\Components;

use Closure;
use App\Models\Pages\Page;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class AppHeader extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $pages = Page::where('in_top_nav', true)->orderBy('order', 'ASC')->tree()->get()->toTree();

        return view('components.app-header', compact('pages'));
    }
}

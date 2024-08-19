<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use App\Models\Content\Socials;
use App\Models\Sections\Footer;
use App\Models\Content\FooterLink;
use Illuminate\Contracts\View\View;

class AppFooter extends Component
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
        // Make sure you compact
        $footer = Footer::get();
        $socials = Socials::get();
        $footerlinks = FooterLink::orderBy('id', 'ASC')->tree()->get()->toTree();
        return view('components.app-footer', compact('footer', 'socials', 'footerlinks'));
    }
}

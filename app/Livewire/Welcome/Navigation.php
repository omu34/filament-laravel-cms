<?php

namespace App\Livewire\Welcome;

use Livewire\Component;
use App\Models\Pages\Page;
use App\Livewire\Actions\Logout;

class Navigation extends Component
{
    public $pages;

    public function mount()
    {
        $this->pages = Page::where('in_top_nav', true)->orderBy('order', 'ASC')->tree()->get()->toTree();
    }

    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }

    public function render()
    {
        return view('livewire.welcome.navigation', [
            'pages' => $this->pages
        ]);
    }
}

<?php

namespace App\Livewire\Sections;

use Livewire\Component;
use App\Models\Content\Product;

class RecommendedProducts extends Component
{
    public $products;
    public $sectiondata;

    public function mount()
    {
        $this->products = Product::all();
    }

    public function render()
    {
        return view('livewire.sections.recommended-products', [
            'products' => $this->products,
            'sectiondata' => $this->sectiondata
        ]);
    }
}

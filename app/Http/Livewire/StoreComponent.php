<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class StoreComponent extends Component
{
    public function render()
    {
        $products = Product::paginate(12);
        $categories = Category::orderBy('name','ASC')->get();
        return view('livewire.store-component', ['products' => $products,'categories'=>$categories]);
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryComponent extends Component
{
    use WithPagination;
    public $customId;

    public function mount($id){
        $this->customId = $id;
    }

    public function render()
    {

        $category = Category::where('id',$this->customId)->first();
        $category_id = $category->id ;
        $category_name = $category->name;

        $products = Product::where('category_id',$category_id)->paginate(12);
        $categories = Category::orderBy('name','ASC')->get();
        return view('livewire.category-component', ['products' => $products,'categories'=>$categories,'category_name'=>$category_name]);
    }
}

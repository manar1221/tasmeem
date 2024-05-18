<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class AdminProductComponent extends Component
{
    use WithPagination;
    public $product_id;

    public function deleteproduct()
    {
        $product = Product::find($this->product_id);
        unlink('images/products/'.$product->image);
        $product->delete();
        session()->flash('message',' تم حذف المنتج بنجاح ');
    }

    public function render()
    {
        $products = Product::orderBy('created_at','DESC')->paginate(150);
        return view('livewire.admin.admin-product-component',['products'=>$products]);
    }
}

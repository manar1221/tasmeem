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

    if ($product) {
        $imagePath = 'images/products/' . $product->image;

        if (file_exists($imagePath)) {
            unlink($imagePath);
        } else {
            session()->flash('message', 'الملف غير موجود');
        }

        $product->delete();
        session()->flash('message', 'تم حذف المنتج بنجاح');

    } else {
        session()->flash('message', 'المنتج غير موجود');
    }
}

    public function render()
    {
        $products = Product::orderBy('created_at','DESC')->paginate(200);
        return view('livewire.admin.admin-product-component',['products'=>$products]);
    }
}

<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminEditProductComponent extends Component
{
    use WithFileUploads;
    public $product_id;
    public $name;
    public $price;
    public $category_id;
    public $description;
    public $image;
    public $newimage;
    public $image1;
    public $newimage1;
    public $image2;
    public $newimage2;
    public $image3;
    public $newimage3;
    public $image4;
    public $newimage4;
    public $image5;
    public $newimage5;


    public function mount($product_id)
    {
        $product = Product::find($product_id);
        $this->product_id = $product->id;
        $this->name = $product->name;
        $this->description = $product->description;
        $this->price = $product->price;
        $this->category_id = $product->category_id;
        $this->image = $product->image;
        $this->image1 = $product->image1;
        $this->image2 = $product->image2;
        $this->image3 = $product->image3;
        $this->image4 = $product->image4;
        $this->image5 = $product->image5;
    }


    public function updateProduct()
    {
        $this->validate([
            'name' => 'required',
            'price' => 'required',
            'image' => 'required',
            'category_id' => 'required',
        ]);
        $product = Product::find($this->product_id);
        $product->name = $this->name;
        $product->description = $this->description;
        $product->price = $this->price;

        if ($this->newimage) {
            if ($product->image) {
                unlink('assets/images/products/' . $product->image);
            }
            $imageName = $this->newimage->getClientOriginalName();
            $this->newimage->storeAs('products', $imageName);
            $product->image = $imageName;
        }

        for ($i = 1; $i <= 5; $i++) {
            $propertyName = "image$i";
            $newImageProperty = "newimage$i";

            if ($this->{$newImageProperty}) {
                if ($product->{$propertyName}) {
                    unlink('assets/images/products/' . $product->{$propertyName});
                }
                $imageName = $this->{$newImageProperty}->getClientOriginalName();
                $this->{$newImageProperty}->storeAs('products', $imageName);
                $product->{$propertyName} = $imageName;
            }
        }

        $product->category_id = $this->category_id;
        $product->save();
        session()->flash('message', ' تم تعديل المنتج بنجاح ');
        return redirect()->route('admin.products');
    }

    public function render()
    {
        $categories = Category::orderBy('name', 'ASC')->get();
        return view('livewire.admin.admin-edit-product-component', ['categories' => $categories]);
    }
}

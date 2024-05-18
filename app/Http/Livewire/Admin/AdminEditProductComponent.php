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
            unlink('assets/images/products/' . $product->image);
            $imageName = Carbon::now()->timestamp . '.' . $this->newimage->extension();
            $this->newimage->storeAs('products', $imageName);
            $product->image = $imageName;
        }

        if ($this->newimage1) {
            if ($this->image1) {
                unlink('assets/images/products/' . $product->image1);
            }
            $image1Name = Carbon::now()->timestamp . '.' . $this->newimage1->extension();
            $this->newimage1->storeAs('products', $image1Name);
            $product->image1 = $image1Name;
        }

        if ($this->newimage2) {
            if ($this->image2) {
                unlink('assets/images/products/' . $product->image2);
            }
            $image2Name = Carbon::now()->timestamp . '.' . $this->newimage2->extension();
            $this->newimage2->storeAs('products', $image2Name);
            $product->image2 = $image2Name;
        }

        if ($this->newimage3) {
            if ($this->image3) {
                unlink('assets/images/products/' . $product->image3);
            }
            $image3Name = Carbon::now()->timestamp . '.' . $this->newimage3->extension();
            $this->newimage3->storeAs('products', $image3Name);
            $product->image3 = $image3Name;
        }

        if ($this->newimage4) {
            if ($this->image4) {
                unlink('assets/images/products/' . $product->image4);
            }
            $image4Name = Carbon::now()->timestamp . '.' . $this->newimage4->extension();
            $this->newimage4->storeAs('products', $image4Name);
            $product->image4 = $image4Name;
        }

        if ($this->newimage5) {
            if ($this->image5) {
                unlink('assets/images/products/' . $product->image5);
            }
            $image5Name = Carbon::now()->timestamp . '.' . $this->newimage5->extension();
            $this->newimage5->storeAs('products', $image5Name);
            $product->image5 = $image5Name;
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

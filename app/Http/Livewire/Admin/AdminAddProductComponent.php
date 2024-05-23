<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddProductComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $price;
    public $image;
    public $category_id;
    public $description;
    public $image1;
    public $image2;
    public $image3;
    public $image4;
    public $image5;

    public function addProduct()
    {
        $this->validate([
            'name'=>'required',
            'price' => 'required',
            'image' => 'required',
            'category_id' => 'required',
        ]);
        $product = new Product();
        $product->name =$this->name ;
        $product->description =$this->description ;
        $product->price =$this->price ;

        $imageName = $this->image->getClientOriginalName();
        $this->image->storeAs('products',$imageName);
        $product->image =$imageName;

        $additionalImages = [$this->image1, $this->image2, $this->image3, $this->image4, $this->image5];
        foreach ($additionalImages as $index => $image) {
            if ($image) {
                $imageName = $image->getClientOriginalName(); // Get the original name of the image
                $image->storeAs('products', $imageName);
                $product->{"image" . ($index + 1)} = $imageName;
            }
        }

        $product->category_id =$this->category_id ;
        $product->save();
        session()->flash('message',' تم اضافة المنتج بنجاح ');
        return redirect()->route('admin.products');
    }

    public function render()
    {
        $categories = Category::orderBy('name','ASC')->get();
        return view('livewire.admin.admin-add-product-component',['categories'=>$categories]);
    }
}

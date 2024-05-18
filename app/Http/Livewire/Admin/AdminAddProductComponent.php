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

        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('products',$imageName);
        $product->image =$imageName;

        if ($this->image1) {
            $image1Name = Carbon::now()->timestamp . '.' . $this->image1->extension();
            $this->image1->storeAs('products', $image1Name);
            $product->image1 = $image1Name;
        }

        if ($this->image2) {
            $image2Name = Carbon::now()->timestamp . '.' . $this->image2->extension();
            $this->image2->storeAs('products', $image2Name);
            $product->image2 = $image2Name;
        }

        if ($this->image3) {
            $image3Name = Carbon::now()->timestamp . '.' . $this->image3->extension();
            $this->image3->storeAs('products', $image3Name);
            $product->image3 = $image3Name;
        }

        if ($this->image4) {
            $image4Name = Carbon::now()->timestamp . '.' . $this->image4->extension();
            $this->image4->storeAs('products', $image4Name);
            $product->image4 = $image4Name;
        }

        if ($this->image5) {
            $image5Name = Carbon::now()->timestamp . '.' . $this->image5->extension();
            $this->image5->storeAs('products', $image5Name);
            $product->image5 = $image5Name;
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

<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddCategoriesComponent extends Component
{
    use WithFileUploads;
    public $name;

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name'=>'required',
        ]);
    }

    public function storeCategory()
    {
        $this->validate([
            'name'=>'required',
        ]);
        $category = new Category();
        $category->name =$this->name;
        $category->save();
        session()->flash('message',' تم اضافة الفئة بنجاح ');
        return redirect()->route('admin.categories');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-categories-component');
    }
}

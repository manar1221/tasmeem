<?php

namespace App\Http\Livewire\Admin;

use App\Models\Blog;
use App\Models\Category;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddBlogComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $image;
    public $short_description;
    public $long_description;

    public function addblog()
    {
        $this->validate([
            'name'=>'required',
            'image' => 'required',
        ]);
        $blog = new Blog();
        $blog->name =$this->name ;
        $blog->short_description =$this->short_description ;
        $blog->long_description =$this->long_description ;

        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('blogs',$imageName);
        $blog->image =$imageName;

        $blog->save();
        session()->flash('message',' تم اضافة الخبر بنجاح ');
        return redirect()->route('admin.blogs');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-blog-component');
    }
}

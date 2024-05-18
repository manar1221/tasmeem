<?php

namespace App\Http\Livewire\Admin;

use App\Models\Blog;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminEditBlogComponent extends Component
{
    use WithFileUploads;
    public $blog_id;
    public $name;
    public $image;
    public $newimage;
    public $short_description;
    public $long_description;


    public function mount($blog_id)
    {
        $blog = Blog::find($blog_id);
        $this->blog_id = $blog->id;
        $this->name = $blog->name;
        $this->short_description = $blog->short_description;
        $this->long_description = $blog->long_description;
        $this->image = $blog->image;
    }


    public function updateblog()
    {
        $this->validate([
            'name' => 'required',
            'image' => 'required',
        ]);
        $blog = blog::find($this->blog_id);
        $blog->name = $this->name;
        $blog->short_description = $this->short_description;
        $blog->long_description = $this->long_description;

        if ($this->newimage) {
            unlink('assets/images/blogs/' . $blog->image);
            $imageName = Carbon::now()->timestamp . '.' . $this->newimage->extension();
            $this->newimage->storeAs('blogs', $imageName);
            $blog->image = $imageName;
        }

        $blog->save();
        session()->flash('message', ' تم تعديل الخبر بنجاح ');
        return redirect()->route('admin.blogs');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-blog-component');
    }
}

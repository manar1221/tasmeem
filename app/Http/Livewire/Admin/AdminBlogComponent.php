<?php

namespace App\Http\Livewire\Admin;

use App\Models\Blog;
use Livewire\Component;
use Livewire\WithPagination;

class AdminBlogComponent extends Component
{
    use WithPagination;
    public $blog_id;

    public function deleteblog()
    {
        $blog = Blog::find($this->blog_id);
        unlink('images/blogs/'.$blog->image);
        $blog->delete();
        session()->flash('message',' تم حذف المنتج بنجاح ');
    }

    public function render()
    {
        $blogs = Blog::orderBy('created_at','DESC')->paginate(150);
        return view('livewire.admin.admin-blog-component',['blogs'=>$blogs]);
    }
}

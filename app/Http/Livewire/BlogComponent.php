<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Livewire\Component;

class BlogComponent extends Component
{
    public function render()
    {
        $blogs = Blog::paginate(120);
        return view('livewire.blog-component', ['blogs' => $blogs]);
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Livewire\Component;

class BlogDetailsComponent extends Component
{
    public $customId;

    public function mount($id){
        $this->customId = $id;
    }

    public function render()
    {
        $blog = Blog::where('id',$this->customId)->first();
        return view('livewire.blog-details-component',['blog' => $blog]);
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class DetailsComponent extends Component
{
    public $customId;

    public function mount($id){
        $this->customId = $id;
    }

    public function render()
    {
        $product = Product::where('id',$this->customId)->first();
        return view('livewire.details-component',['product' => $product]);
    }
}

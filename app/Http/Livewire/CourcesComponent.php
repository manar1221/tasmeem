<?php

namespace App\Http\Livewire;

use App\Models\Course;
use Livewire\Component;

class CourcesComponent extends Component
{
    public function render()
    {
        $courses = Course::paginate(12);
        return view('livewire.cources-component', ['courses' => $courses]);
    }
}

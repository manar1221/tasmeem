<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Course;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddCourseComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $image;
    public $price;
    public $description;

    public function addcourse()
    {
        $this->validate([
            'name'=>'required',
            'price'=>'required',
            'image' => 'required',
        ]);
        $course = new Course();
        $course->name =$this->name ;
        $course->description =$this->description ;
        $course->price =$this->price ;

        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('courses',$imageName);
        $course->image =$imageName;

        $course->save();
        session()->flash('message',' تم اضافة الكورس بنجاح ');
        return redirect()->route('admin.courses');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-course-component');
    }
}

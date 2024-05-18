<?php

namespace App\Http\Livewire\Admin;

use App\Models\Course;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminEditCourseComponent extends Component
{
    use WithFileUploads;
    public $course_id;
    public $name;
    public $image;
    public $newimage;
    public $price;
    public $description;


    public function mount($course_id)
    {
        $course = Course::find($course_id);
        $this->course_id = $course->id;
        $this->name = $course->name;
        $this->price = $course->price;
        $this->description = $course->description;
        $this->image = $course->image;
    }


    public function updatecourse()
    {
        $this->validate([
            'name' => 'required',
            'price'=>'required',
            'image' => 'required',
        ]);
        $course = course::find($this->course_id);
        $course->name =$this->name ;
        $course->description =$this->description ;
        $course->price =$this->price ;

        if ($this->newimage) {
            unlink('assets/images/courses/' . $course->image);
            $imageName = Carbon::now()->timestamp . '.' . $this->newimage->extension();
            $this->newimage->storeAs('courses', $imageName);
            $course->image = $imageName;
        }

        $course->save();
        session()->flash('message', ' تم تعديل الخبر بنجاح ');
        return redirect()->route('admin.courses');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-course-component');
    }
}

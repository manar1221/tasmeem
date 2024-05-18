<?php

namespace App\Http\Livewire\Admin;

use App\Models\Course;
use Livewire\Component;
use Livewire\WithPagination;

class AdminCourseComponent extends Component
{
    use WithPagination;
    public $course_id;

    public function deletecourse()
    {
        $course = Course::find($this->course_id);
        // unlink('assets/imgs/courses/'.$course->newimage);
        $course->delete();
        session()->flash('message',' تم حذف الكورس بنجاح ');
    }

    public function render()
    {
        $courses =Course::orderBy('name','ASC')->paginate(100);
        return view('livewire.admin.admin-course-component',['courses'=>$courses]);
    }
}

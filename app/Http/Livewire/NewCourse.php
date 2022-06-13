<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Course;

class NewCourse extends Component
{
    public $name;

    public function store()
    {
       // throw new \Exception;
        $cor = new Course;
        $cor->name = $this->name;
        $cor->save();
        return redirect('/');

    }
    public function home()
    {
        return redirect('/');
    }
    public function render()
    {
        return view('livewire.new-course');
    }
}

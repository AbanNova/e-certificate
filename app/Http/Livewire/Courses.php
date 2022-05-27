<?php

namespace App\Http\Livewire;

use App\Models\Course;
use Livewire\Component;
use Livewire\WithPagination;

class Courses extends Component
{
    use WithPagination;

    public $search;

    protected $queryString = ['search'];
    public function delete($id)
    {
        Course::find($id)->delete();
    }
    public function render()
    {
        return view('livewire.courses',['courses' => Course::where('name', 'like', '%'.$this->search.'%')->paginate(10)]);
    }
}

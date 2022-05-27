<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Certificate;
use Livewire\WithPagination;

class Certificates extends Component
{
    use WithPagination;

    public $search;

    protected $queryString = ['search'];
    public function delete($id)
    {
        Certificate::find($id)->delete();
    }
    public function render()
    {
        return view('livewire.certificates', ['certificates' => Certificate::with('course')->where('sn', 'like', '%'.$this->search.'%')->paginate(10)]);
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\DeviceCertificate;
use Livewire\WithPagination;

class DCertificates extends Component
{
    use WithPagination;

    public $search;

    protected $queryString = ['search'];
    public function delete($id)
    {
        DeviceCertificate::find($id)->delete();
    }
    public function render()
    {
        return view('livewire.dcertificates', ['certificates' => DeviceCertificate::where('sn', 'like', '%'.$this->search.'%')->paginate(10)]);
    }
}

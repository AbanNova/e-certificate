<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\DeviceCertificate;
use Livewire\WithPagination;

class DeviceCertificates extends Component
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
        return view('livewire.device-certificates', ['certificates' => DeviceCertificate::where('sn', 'like', '%'.$this->search.'%')->paginate(10)]);
    }
}

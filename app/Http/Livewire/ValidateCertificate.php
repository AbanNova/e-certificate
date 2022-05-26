<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Certificate;
use Illuminate\Support\Facades\Session;

class ValidateCertificate extends Component
{

    public $sn;
    public function findBySN()
    {
        $cer=Certificate::where('sn',$this->sn)->first();
        if (null !== ($cer)) {
            Session::flash('msg', 'This Certificate is Valid');
            Session::flash('img',"data:image/png;base64,".$cer->qrcode );
        } else {
            Session::flash('err', 'soory there is no cetificate like this !');
        }
        return redirect()->back();
    }
    public function findByQR()
    {
        return redirect('/qr');
    }
    public function render()
    {
        return view('livewire.validate-certificate');
    }
}

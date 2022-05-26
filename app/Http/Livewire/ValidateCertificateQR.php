<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Certificate;
use Illuminate\Support\Facades\Session;

class ValidateCertificateQR extends Component
{
    protected $listeners = ['scanning' => 'scanned'];
    public function render()
    {
        return view('livewire.validate-certificate-qr');
    }

    public function scanned($sn)
    {
        $this->findBySN($sn);
        return redirect('/');
    }
    public function findBySN($SN)
    {
        $cer = Certificate::where('sn', $SN)->first();
        if (null !== ($cer)) {
            Session::flash('msg', 'This Certificate is Valid');
            Session::flash('img', "data:image/png;base64," . $cer->qrcode);
        } else {
            Session::flash('err', 'soory there is no cetificate like this !');
        }
    }
}

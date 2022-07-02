<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\DeviceCertificate;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class NewDeviceCertificate extends Component
{
    public function render()
    {
        return view('livewire.new-device-certificate');
    }

    public $name;
    public $sn;
    public $company;
    public $details;
    public $end_at;
    public $model;
    public $qr = null;



    public function home()
    {
        return redirect('/');
    }
    public function store()
    {
        $cer = new DeviceCertificate;
        $cer->name = $this->name;
        $cer->sn = $this->sn;
        $cer->model = $this->model;
        $cer->end_at = $this->end_at;
        $cer->company = $this->company;
        $cer->details = $this->details;
        $cer->qrcode = $this->generateNewQR();
        $cer->save();
        $this->qr = $cer->qrcode;
    }

    public function generateNewQR()
    {
        $qrcode = QrCode::size(300)->backgroundColor(255, 55, 0)
            ->generate($this->sn ?? Str::random(12));
        /*
            $svgTemplate = new \SimpleXMLElement($qrcode);
            $svgTemplate->registerXPathNamespace('svg', 'http://www.w3.org/2000/svg');
            $svgTemplate->rect->addAttribute('fill-opacity', 0);
            $image = $svgTemplate->asXML();
*/

        return (string)$qrcode;
    }


}

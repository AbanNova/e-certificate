<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Certificate;
use App\Models\Course;
use Illuminate\Support\Str;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class NewCertificate extends Component
{
    public $name;
    public $sn;
    public $course_id;
    public $qr = null;



    public function home()
    {
        return redirect('/');
    }
    public function store()
    {
        $cer = new Certificate;
        $cer->name = $this->name;
        $cer->sn = $this->sn;
        $cer->course_id = $this->course_id;
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

    public function render()
    {
        return view('livewire.new-certificate', ['courses' => Course::all()]);
    }
}

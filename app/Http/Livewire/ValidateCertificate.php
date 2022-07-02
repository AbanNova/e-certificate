<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Certificate;
use App\Models\DeviceCertificate;
use Illuminate\Support\Facades\Session;

class ValidateCertificate extends Component
{

    public $sn;

    public function findBySN(){

      return  $this->findBySN_fun($this->sn);
    }
    public function findBySN_fun($sn)
    {
        $cer=Certificate::where('sn',$sn)->first();
        $dcer=DeviceCertificate::where('sn',$sn)->first();
        if (null !== ($cer)) {
         //   dd($cer);
            Session::flash('msg', 'This Certificate is Valid');
            Session::flash('data', [
                'name' => $cer->name ?? 'N/A',
                'sn' => $cer->sn ?? 'N/A' ,
                'start' => $cer->updated_at ?? 'N/A',
                'end' => $cer->end_at ?? 'Not End',
            ]);
            Session::flash('img',"data:image/png;base64,".$cer->qrcode );
        }elseif(null !== ($dcer)){
           // dd($dcer);
            Session::flash('msg', 'This Certificate is Valid');
            Session::flash('data', [
                'name' => $dcer->name ?? 'N/A',
                'sn' => $dcer->sn ?? 'N/A' ,
                'model' => $dcer->model ?? 'N/A',
                'company' => $dcer->company ?? 'N/A',
                'start' => $dcer->updated_at ?? 'N/A',
                'end' => $dcer->end_at ?? 'Not End',
            ]);
            Session::flash('img',"data:image/png;base64,".$dcer->qrcode );
        } else {
            Session::flash('err', 'soory there is no cetificate like this !');
        }
        return redirect()->back();
    }
    public function findByQR()
    {
        return redirect('/qr');
    }
    public function newCertificate()
    {
        return redirect('/new_certificate');
    }
    public function newDCertificate()
    {
        return redirect('/new_dcertificate');
    }
    public function newCourse()
    {
        return redirect('/new_course');
    }
    public function allCertificates()
    {
        return redirect('/certificates');
    }
    public function allDCertificates()
    {
        return redirect('/dcertificates');
    }
    public function allCourses()
    {
        return redirect('/courses');
    }
    public function render()
    {
        return view('livewire.validate-certificate');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Donations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class DonationController extends Controller
{
    /*
    * CDM Donation Form
    */
    public function cdm()
    {
        return view('donations.cdm');
    }

    public function save(Request $request) 
    {
        $form = $request->except('_token');
        $form['type'] = 0; //CDM Donation

        $donations  = Donations::create($form);
        $encrypt_id = Crypt::encryptString($donations->id);
        return redirect()->route('donations.certificate', ['id' => $encrypt_id ]);
    }

    public function certificate($id) {

        $decrypt_id = Crypt::decryptString($id);
        $donation = Donations::find($decrypt_id);

        if($donation == "") {
            return "ERROR";
        }
 
        $certificate_url = route('donations.confirm', ['id' => $id ]);
        $qr_code = QrCode::size('200')->format('svg')->generate($id);
        return view('donations.complete', compact('qr_code', 'id', 'certificate_url'));
    }
}

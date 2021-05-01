<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Donations;
use Crypt;
use Mail;

class CertificateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $donations = Donations::all();
        $donation_type = config('constants.donation_type');
        return view('webctrl.certificate.certificate', compact('donations', 'donation_type'));
    }

    public function confirm($id)
    {
        $decrypt_id = Crypt::decryptString($id);
        $donation = Donations::find($decrypt_id);
        $donation_type = config('constants.donation_type');
        return view('webctrl.certificate.confirm', compact('donation', 'donation_type', 'id'));
    }

    public function show($donation_id)
    {
        $id = Crypt::encryptString($donation_id);
        $donation = Donations::find($donation_id);
        $donation_type = config('constants.donation_type');
        return view('webctrl.certificate.confirm', compact('donation', 'donation_type', 'id'));
    }

    public function finish($id)
    {
        $decrypt_id = Crypt::decryptString($id);
        $updateParam = [];
        $updateParam["confirm_flg"] = 1;
        $updateParam["confirm_id"] = auth()->user()->id;
        $donation = Donations::find($decrypt_id);
        $donation->update($updateParam);

        $mail_to = $donation->email;
        $mail_subject = "Donation Testing";

        // Mail::send([], [], function ($message) use ($mail_to, $mail_subject) {
        //     $message->to($mail_to)
        //         ->subject($mail_subject)
        //         ->setBody('Hi, welcome user!'); // assuming text/plain
        //     //->setBody('<h1>Hi, welcome user!</h1>', 'text/html'); // for HTML rich messages
        // });

        return redirect()->back()->with('msg', 'Confirm is completed');
    }

    public function delete($id)
    {
        $donation = Donations::find($id);
        $donation->delete();
        return redirect()->back();
    }
}

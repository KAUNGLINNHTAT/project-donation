<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
    public function index() {
        return view('index');
    }

    public function gallery() {
        return view('gallery');
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }

    public function apply() {
        return view('apply');
    }

    public function translate(Request $request) {
        $locale = $request->get('locale');
        $support_language = config('constants.support_language');
        $default_language = config('constants.default_language');
        $translate_to     = in_array($locale, $support_language) ? $locale:$default_language;

        Session::put('locale', $translate_to);
        config('app.locale', $translate_to);
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\ChartDepartment;

class IndexController extends Controller
{

    public function index()
    {
        $chartDptModel = new ChartDepartment();
        $chart_departments = $chartDptModel->chartDepartList();

        $arr_chart_title = $arr_chart_data = $arr_chart_color =  [];
        foreach ($chart_departments as $department) {
            if (config('app.locale') == 'mm')
                $title = $department->chart_name_mm;
            elseif (config('app.locale') == 'ja-jp')
                $title = $department->chart_name_jp;
            else
                $title = $department->chart_name_en;
            $arr_chart_title[] = $title;
            $arr_chart_data[]  = $department->chart_percentage;
            $arr_chart_color[] = $department->chart_color;
        }
        return view('index', compact(['chart_departments', 'arr_chart_title', 'arr_chart_data', 'arr_chart_color']));
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function apply()
    {
        return view('apply');
    }

    public function translate(Request $request)
    {
        $locale = $request->get('locale');
        $support_language = config('constants.support_language');
        $default_language = config('constants.default_language');
        $translate_to     = in_array($locale, $support_language) ? $locale : $default_language;

        Session::put('locale', $translate_to);
        config('app.locale', $translate_to);
        return redirect()->back();
    }
}

<?php

namespace Sunnyday\BMI\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BMIController extends Controller
{

    public function index(Request $request)
    {
        if ($request->has('w') && $request->has('h')) {

            $w = $request->get('w');
            $h = $request->get('h');

            $bmi = round($w / ($h * $h), 1);
        }

        return view('bmi::index', compact('bmi'));
    }
}
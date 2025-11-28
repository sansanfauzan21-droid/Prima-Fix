<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class ServicesController extends Controller
{
    public function index()
    {
        $title = 'Pelayanan Kami';

        return view('frontend.services.index', compact('title'));
    }

    public function slo()
    {
        $title = 'Sertifikasi Laik Operasi (SLO)';

        return view('frontend.services.slo', compact('title'));
    }
}

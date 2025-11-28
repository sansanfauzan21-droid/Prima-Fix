<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Regulation;

class RegulasiController extends Controller
{
    public function index()
    {
        $title = 'Regulasi Perusahaan';
        $regulations = Regulation::all();

        return view('frontend.legalitas.regulasi', compact('title', 'regulations'));
    }
}

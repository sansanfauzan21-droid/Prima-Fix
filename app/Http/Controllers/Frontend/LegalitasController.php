<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class LegalitasController extends Controller
{
    public function index()
    {
        $title = 'Legalitas Perusahaan';

        return view('frontend.legalitas.index', compact('title'));
    }
}

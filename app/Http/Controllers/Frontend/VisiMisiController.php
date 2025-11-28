<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Feature\Feature;
use Illuminate\Http\Request;

class VisiMisiController extends Controller
{
    public function index()
    {
        $title = 'Visi dan Misi';
        $feature = Feature::latest()->where('status', true)->get();

        return view('frontend.visimisi.index', compact('title', 'feature'));
    }
}

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Home\About;
use App\Models\Backend\Home\Hero;
use App\Models\Backend\Home\HomeContent;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'Home';

        // Fetch dynamic content from database (get latest updated active content)
        $heroTitle = HomeContent::where('section', 'hero_title')->where('status', true)->orderBy('updated_at', 'desc')->first();
        $heroSubtitle = HomeContent::where('section', 'hero_subtitle')->where('status', true)->orderBy('updated_at', 'desc')->first();
        $aboutTitle = HomeContent::where('section', 'about_title')->where('status', true)->orderBy('updated_at', 'desc')->first();
        $aboutDescription = HomeContent::where('section', 'about_description')->where('status', true)->orderBy('updated_at', 'desc')->first();
        $commitmentTitle = HomeContent::where('section', 'commitment_title')->where('status', true)->orderBy('updated_at', 'desc')->first();
        $commitmentDescription = HomeContent::where('section', 'commitment_description')->where('status', true)->orderBy('updated_at', 'desc')->first();
        $servicesTitle = HomeContent::where('section', 'services_title')->where('status', true)->orderBy('updated_at', 'desc')->first();
        $servicesList = HomeContent::where('section', 'services_list')->where('status', true)->orderBy('updated_at', 'desc')->first();
        $certificateTitle = HomeContent::where('section', 'certificate_title')->where('status', true)->orderBy('updated_at', 'desc')->first();
        $commitmentItems = HomeContent::where('section', 'commitment_items')->where('status', true)->orderBy('updated_at', 'desc')->first();
        $sbuImages = \App\Models\Backend\Home\SbuImage::where('status', true)->orderBy('sort_order')->get();

        return view('frontend.home.index', compact(
            'title',
            'heroTitle',
            'heroSubtitle',
            'aboutTitle',
            'aboutDescription',
            'commitmentTitle',
            'commitmentDescription',
            'commitmentItems',
            'servicesTitle',
            'servicesList',
            'certificateTitle',
            'sbuImages'
        ));
    }

    public function logo()
    {
        $title = 'Arti Logo';

        return view('frontend.artilogo', compact('title'));
    }

    public function culture()
    {
        $title = 'Budaya Perusahaan';

        return view('frontend.budayaperusahaan', compact('title'));
    }

    public function organization()
    {
        $title = 'Struktur Organisasi';

        return view('frontend.strukturorganisasi', compact('title'));
    }
}

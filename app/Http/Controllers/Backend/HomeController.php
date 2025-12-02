<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\StoreFileHelper;
use App\Http\Controllers\Controller;
use App\Models\Backend\Home\About;
use App\Models\Backend\Home\Hero;
use App\Models\Backend\Home\Highlight;
use App\Models\Backend\Home\HomeContent;
use App\Models\Backend\Home\SbuImage;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /* Hero */
    public function heroIndex()
    {
        $title = 'Hero';
        $hero = Hero::all()->first();

        return view('backend.home.hero.index', compact('title', 'hero'));
    }

    public function heroUpdate(Request $request)
    {
        $rule = [
            'title' => 'required',
            'subtitle' => 'required|max:100',
            'image' => 'nullable|max:2040',
        ];

        $request->validate($rule);

        DB::beginTransaction();
        try {
            $findHero = Hero::all()->first();

            if ($findHero == null) {
                $hero = new Hero;
                $hero->title = $request->title;
                $hero->subtitle = $request->subtitle;
                if ($request->hasFile('image')) {
                    $image = $request->file('image');
                    $imageName = $request->title . "-" . Str::random(5);
                    $storeHeroImage = StoreFileHelper::storeHeroImage($imageName, $image->getClientOriginalExtension());

                    $hero->image = $image->storeAs($storeHeroImage);
                }
                $hero->save();
            } else {
                $hero = $findHero;
                $hero->title = $request->title;
                $hero->subtitle = $request->subtitle;
                if ($request->hasFile('image')) {
                    if ($hero->image !== null) {
                        Storage::delete($hero->image);
                    }
                    $image = $request->file('image');
                    $imageName = $request->title . "-" . Str::random(5);
                    $storeHeroImage = StoreFileHelper::storeHeroImage($imageName, $image->getClientOriginalExtension());

                    $hero->image = $image->storeAs($storeHeroImage);
                    
                }
                $hero->save();
            }

            DB::commit();

            return redirect(route('home.hero.index'))->with('success', 'Success!');
        } catch (\Throwable $th) {
            DB::rollBack();

            return redirect()->back()->with('error', 'Error : ' . $th->getMessage());
        }
    }



    /* Highlight */
    public function highlightIndex()
    {
        $title = 'Highlight';
        $highlight = Highlight::latest()->paginate(10)->withQueryString();

        return view('backend.home.highlight.index', compact('title', 'highlight'));
    }

    public function highlightStore(Request $request)
    {
        $rule = [
            'title' => ['required'],
            'subtitle' => ['required'],
            'icon' => ['required'],
        ];

        $request->validate($rule);

        if ($request->status) {
            $getHighlight = Highlight::all()->where('status', true);
            if ($getHighlight->count() >= 3) {
                return back()->with('error', 'Active status for the "Highlight" section is limited to three (3) options.');
            }
        }

        DB::beginTransaction();
        try {
            $highlight = new Highlight;
            $highlight->title = $request->title;
            $highlight->subtitle = $request->subtitle;
            $highlight->icon = $request->icon;
            if ($request->status) {
                $highlight->status = true;
            } else {
                $highlight->status = false;
            }
            $highlight->save();

            DB::commit();

            return redirect(route('home.highlight.index'))->with('success', 'Success!');
        } catch (\Throwable $th) {
            DB::rollBack();

            return redirect()->back()->with('error', 'Error : ' . $th->getMessage());
        }
    }

    public function highlightUpdate(Highlight $highlight, Request $request)
    {
        $rule = [
            'title' => ['required'],
            'subtitle' => ['required'],
            'icon' => ['required'],
        ];

        $request->validate($rule);

        if ($request->status) {
            $status = 1;
            if ($highlight->status !== $status) {
                $getHighlight = Highlight::all()->where('status', true);
                if ($getHighlight->count() >= 3) {
                    return back()->with('error', 'Active status for the "Highlight" section is limited to three (3) options.');
                }
            }
        }

        DB::beginTransaction();
        try {
            $highlight->title = $request->title;
            $highlight->subtitle = $request->subtitle;
            $highlight->icon = $request->icon;
            if ($request->status) {
                $highlight->status = true;
            } else {
                $highlight->status = false;
            }
            $highlight->save();

            DB::commit();

            return redirect(route('home.highlight.index'))->with('success', 'Success!');
        } catch (\Throwable $th) {
            DB::rollBack();

            return redirect()->back()->with('error', 'Error : ' . $th->getMessage());
        }
    }

    public function highlightDestroy(Highlight $highlight)
    {
        Highlight::destroy($highlight->id);

        return redirect(route('home.highlight.index'))->with('success', 'Success!');
    }

    /* Home Content (FIXED: Logic untuk Section-Based) */

    public function contentIndex()
    {
        $title = 'Home Content Sections';
        
        // Daftar semua section yang digunakan oleh frontend
        $sections = [
            'hero_title',
            'hero_subtitle',
            'about_title',
            'about_description',
            'commitment_title',
            'commitment_description',
            'commitment_items', // Items untuk komitmen (AMAN, ANDAL, AKRAB RAMAH LINGKUNGAN)
            'services_title',
            'services_list',
            'certificate_title'
        ];
        
        // 1. Ambil data dari tabel HomeContent (sumber umum)
        $contents = HomeContent::whereIn('section', $sections)->get()->keyBy('section');

        // 2. Ambil data dari model Hero (sumber khusus Hero)
        $heroData = Hero::all()->first();

        // 3. Suntikkan/Timpa data Hero ke dalam koleksi $contents
        if ($heroData) {
            
            // Masukkan Hero Title
            if (in_array('hero_title', $sections)) {
                $contents['hero_title'] = (object)[
                    'content' => $heroData->title,
                    'status' => true, // Dianggap aktif jika ada di tabel Hero
                    'section' => 'hero_title'
                ];
            }

            // Masukkan Hero Subtitle
            if (in_array('hero_subtitle', $sections)) {
                $contents['hero_subtitle'] = (object)[
                    'content' => $heroData->subtitle,
                    'status' => true,
                    'section' => 'hero_subtitle'
                ];
            }
        }
        
        // Sekarang $contents berisi gabungan data dari HomeContent dan Hero

        return view('backend.home.content.index', compact('title', 'sections', 'contents'));
    }

    public function contentEditSection($section_name)
    {
        $humanReadableTitle = Str::title(str_replace('_', ' ', $section_name));
        $title = 'Edit ' . $humanReadableTitle;
        $isHeroSection = false; // Flag untuk view edit

        // Cek apakah section berasal dari model Hero
        if (in_array($section_name, ['hero_title', 'hero_subtitle'])) {
            $hero = Hero::all()->first();
            $isHeroSection = true;

            // Buat objek konten sementara dari data Hero
            $content = (object) [
                'section' => $section_name,
                'content' => $section_name === 'hero_title' ? optional($hero)->title : optional($hero)->subtitle,
                'status' => true, // Dianggap selalu aktif
            ];
            
        } else {
             // Jika section umum, ambil dari HomeContent
            $content = HomeContent::firstOrNew(['section' => $section_name]);
        }

        return view('backend.home.content.edit', compact('title', 'content', 'humanReadableTitle', 'isHeroSection'));
    }

    public function contentUpdateSection(Request $request, $section_name)
    {
        $request->validate(['content' => 'required']);
        
        DB::beginTransaction();
        try {
            // Cek jika ini adalah Hero section
            if (in_array($section_name, ['hero_title', 'hero_subtitle'])) {
                $hero = Hero::all()->first();
                
                // Jika Hero belum ada, buat Hero baru
                if (!$hero) {
                     $hero = new Hero;
                     // Set nilai default untuk kolom yang tidak diedit saat ini
                     $hero->title = ($section_name === 'hero_title') ? $request->content : 'Default Title';
                     $hero->subtitle = ($section_name === 'hero_subtitle') ? $request->content : 'Default Subtitle';
                     $hero->save();
                     
                } else {
                     // Hero sudah ada, update kolom yang sesuai
                    if ($section_name === 'hero_title') {
                        $hero->title = $request->content;
                    } else {
                        $hero->subtitle = $request->content;
                    }
                    $hero->save();
                }
            } else {
                 // Untuk section umum, update/create di HomeContent
                HomeContent::updateOrCreate(
                    ['section' => $section_name],
                    [
                        'content' => $request->content,
                        'status' => $request->status ? true : false,
                    ]
                );
            }
            
            DB::commit();
            
            $humanReadableTitle = Str::title(str_replace('_', ' ', $section_name));
            return redirect(route('home.content.index'))->with('success', $humanReadableTitle . ' berhasil diperbarui!');
            
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Error: ' . $th->getMessage());
        }
    }
    
    public function contentDestroy(HomeContent $content)
    {
        HomeContent::destroy($content->id);

        return redirect(route('home.content.index'))->with('success', 'Content deleted successfully!');
    }


    /* SBU Images */
    public function sbuImageIndex()
    {
        $title = 'SBU Images';
        $images = SbuImage::orderBy('sort_order')->paginate(10)->withQueryString();

        return view('backend.home.sbu-image.index', compact('title', 'images'));
    }

    public function sbuImageCreate()
    {
        $title = 'Create SBU Image';

        return view('backend.home.sbu-image.create', compact('title'));
    }

    public function sbuImageStore(Request $request)
    {
        $rule = [
            'image' => 'required|image|max:2048',
            'alt_text' => 'nullable|string|max:255',
            'sort_order' => 'nullable|integer|min:0',
        ];

        $request->validate($rule);

        DB::beginTransaction();
        try {
            $newSortOrder = $request->sort_order ?? 0;

            // Jika sort_order sudah ada, geser yang lain
            $existingImage = SbuImage::where('sort_order', $newSortOrder)->first();
            if ($existingImage) {
                // Geser semua yang memiliki sort_order >= newSortOrder ke atas
                SbuImage::where('sort_order', '>=', $newSortOrder)
                    ->orderBy('sort_order', 'desc')
                    ->get()
                    ->each(function ($img) {
                        $img->increment('sort_order');
                    });
            }

            $image = $request->file('image');
            $imageName = 'sbu-' . Str::random(5) . '.' . $image->getClientOriginalExtension();
            $imagePath = 'assets/img/sbu/' . $imageName;

            // Move file directly to public/assets/img/sbu/
            $image->move(public_path('assets/img/sbu'), $imageName);

            SbuImage::create([
                'image_path' => $imagePath,
                'alt_text' => $request->alt_text,
                'sort_order' => $newSortOrder,
                'status' => $request->status ? true : false,
            ]);

            DB::commit();

            return redirect(route('home.sbu-image.index'))->with('success', 'Success!');
        } catch (\Throwable $th) {
            DB::rollBack();

            return redirect()->back()->with('error', 'Error : ' . $th->getMessage());
        }
    }

    public function sbuImageEdit(SbuImage $sbuImage)
    {
        $title = 'Edit SBU Image';

        return view('backend.home.sbu-image.edit', compact('title', 'sbuImage'));
    }

    public function sbuImageUpdate(Request $request, SbuImage $sbuImage)
    {
        $rule = [
            'image' => 'nullable|image|max:2048',
            'alt_text' => 'nullable|string|max:255',
            'sort_order' => 'nullable|integer|min:0',
        ];

        $request->validate($rule);

        DB::beginTransaction();
        try {
            $oldSortOrder = $sbuImage->sort_order;
            $newSortOrder = $request->sort_order ?? 0;

            // Jika sort_order berubah, update sort order lainnya
            if ($oldSortOrder != $newSortOrder) {
                // Jika sort_order baru sudah ada, geser yang lain
                $existingImage = SbuImage::where('sort_order', $newSortOrder)->where('id', '!=', $sbuImage->id)->first();
                if ($existingImage) {
                    // Geser sort_order yang ada ke posisi lama
                    $existingImage->sort_order = $oldSortOrder;
                    $existingImage->save();
                }
            }

            if ($request->hasFile('image')) {
                // Delete old image if exists
                if ($sbuImage->image_path !== null && file_exists(public_path($sbuImage->image_path))) {
                    unlink(public_path($sbuImage->image_path));
                }

                $image = $request->file('image');
                $imageName = 'sbu-' . Str::random(5) . '.' . $image->getClientOriginalExtension();
                $imagePath = 'assets/img/sbu/' . $imageName;

                // Move file directly to public/assets/img/sbu/
                $image->move(public_path('assets/img/sbu'), $imageName);

                $sbuImage->image_path = $imagePath;
            }

            $sbuImage->alt_text = $request->alt_text;
            $sbuImage->sort_order = $newSortOrder;
            $sbuImage->status = $request->status ? true : false;
            $sbuImage->save();

            DB::commit();

            return redirect(route('home.sbu-image.index'))->with('success', 'Success!');
        } catch (\Throwable $th) {
            DB::rollBack();

            return redirect()->back()->with('error', 'Error : ' . $th->getMessage());
        }
    }

    public function sbuImageDestroy(SbuImage $sbuImage)
    {
        DB::beginTransaction();
        try {
            $deletedSortOrder = $sbuImage->sort_order;

            if ($sbuImage->image_path !== null && file_exists(public_path($sbuImage->image_path))) {
                unlink(public_path($sbuImage->image_path));
            }

            SbuImage::destroy($sbuImage->id);

            // Geser sort_order yang lebih besar ke bawah
            SbuImage::where('sort_order', '>', $deletedSortOrder)
                ->orderBy('sort_order')
                ->get()
                ->each(function ($img) {
                    $img->decrement('sort_order');
                });

            DB::commit();

            return redirect(route('home.sbu-image.index'))->with('success', 'Success!');
        } catch (\Throwable $th) {
            DB::rollBack();

            return redirect()->back()->with('error', 'Error : ' . $th->getMessage());
        }
    }
}
<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Regulation;
use Illuminate\Http\Request;

class RegulationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $regulations = Regulation::all();
        return view('backend.regulations.index', compact('regulations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.regulations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nomer' => 'required|string|max:255',
            'nama_pasal' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'dokumen' => 'nullable|file|mimes:pdf|max:10240', // 10MB max
        ]);

        $data = $request->all();

        if ($request->hasFile('dokumen')) {
            $file = $request->file('dokumen');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('storage/dokumen'), $filename);
            $data['dokumen'] = $filename;
        }

        Regulation::create($data);

        return redirect()->route('regulations.index')->with('success', 'Regulation created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $regulation = Regulation::findOrFail($id);
        return view('backend.regulations.edit', compact('regulation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nomer' => 'required|string|max:255',
            'nama_pasal' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'dokumen' => 'nullable|file|mimes:pdf|max:10240', // 10MB max
        ]);

        $regulation = Regulation::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('dokumen')) {
            // Delete old file if exists
            if ($regulation->dokumen && file_exists(public_path('storage/dokumen/' . $regulation->dokumen))) {
                unlink(public_path('storage/dokumen/' . $regulation->dokumen));
            }

            // Upload new file
            $file = $request->file('dokumen');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('storage/dokumen'), $filename);
            $data['dokumen'] = $filename;
        }

        $regulation->update($data);

        return redirect()->route('regulations.index')->with('success', 'Regulation updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $regulation = Regulation::findOrFail($id);

        // Delete file if exists
        if ($regulation->dokumen && file_exists(public_path('storage/dokumen/' . $regulation->dokumen))) {
            unlink(public_path('storage/dokumen/' . $regulation->dokumen));
        }

        $regulation->delete();

        return redirect()->route('regulations.index')->with('success', 'Regulation deleted successfully.');
    }
}

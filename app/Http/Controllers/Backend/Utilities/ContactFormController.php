<?php

namespace App\Http\Controllers\Backend\Utilities;

use App\Http\Controllers\Controller;
use App\Models\Backend\Utilities\ContactForm;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contactForms = ContactForm::orderBy('created_at', 'desc')->paginate(10);
        return view('backend.utilities.contact-form.index', compact('contactForms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $contactForm = ContactForm::findOrFail($id);
        $contactForm->update(['is_read' => true]);
        return view('backend.utilities.contact-form.show', compact('contactForm'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Mark contact form as read
     */
    public function markRead(string $id)
    {
        $contactForm = ContactForm::findOrFail($id);
        $contactForm->update(['is_read' => true]);
        return response()->json(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contactForm = ContactForm::findOrFail($id);
        $contactForm->delete();
        return redirect()->route('contact-form.index')->with('success', 'Contact form deleted successfully');
    }
}

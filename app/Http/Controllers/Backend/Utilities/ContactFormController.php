<?php

namespace App\Http\Controllers\Backend\Utilities;

use App\Http\Controllers\Controller;
use App\Mail\ContactFormReplyMail;
use App\Models\Backend\Utilities\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $type = $request->get('type', 'contact_us'); // contact_us, complaints

        $query = ContactForm::orderBy('created_at', 'desc');

        if ($type === 'contact_us') {
            $query->whereNull('category');
        } elseif ($type === 'complaints') {
            $query->whereNotNull('category');
        }

        $contactForms = $query->paginate(10);
        $contactForms->appends(['type' => $type]);

        return view('backend.utilities.contact-form.index', compact('contactForms', 'type'));
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
     * Reply to contact form
     */
    public function reply(Request $request, string $id)
    {
        $request->validate([
            'reply_message' => 'required|string',
        ]);

        $contactForm = ContactForm::findOrFail($id);

        $data = [
            'recipient_name' => $contactForm->name,
            'original_subject' => $contactForm->subject,
            'original_message' => $contactForm->message,
            'reply_message' => $request->reply_message,
            'sender_name' => auth()->user()->name ?? 'Admin',
        ];

        try {
            Mail::to($contactForm->email)->send(new ContactFormReplyMail($data));
            \Log::info('Contact form reply sent successfully', ['contact_form_id' => $id, 'recipient_email' => $contactForm->email]);
            return redirect()->back()->with('success', 'Balasan berhasil dikirim ke ' . $contactForm->email);
        } catch (\Exception $e) {
            \Log::error('Contact form reply failed: ' . $e->getMessage(), ['contact_form_id' => $id]);
            return redirect()->back()->with('error', 'Gagal mengirim balasan. Silakan coba lagi.');
        }
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

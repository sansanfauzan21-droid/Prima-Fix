<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactFormMail;
use App\Models\Backend\Utilities\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function index()
    {
        $title = 'Contact Us';
        $company = Company::all()->first();

        return view('frontend.contact-us.index', compact('title', 'company'));
    }

    public function keluhankendala()
    {
        $title = 'Keluhan Dan Kendala';
        $company = Company::all()->first();

        return view('frontend.contact-us.keluhankendala', compact('title', 'company'));
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        try {
            // Log the attempt
            \Log::info('Attempting to send contact form email', $data);

            // Simpan ke database
            \App\Models\Backend\Utilities\ContactForm::create($data);

            // Kirim email ke admin
            Mail::to('aldiawaludin226@gmail.com')->send(new ContactFormMail($data));

            \Log::info('Contact form email sent successfully');

            return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
        } catch (\Exception $e) {
            \Log::error('Contact form email failed: ' . $e->getMessage(), [
                'data' => $data,
                'exception' => $e->getTraceAsString()
            ]);

            return redirect()->back()->with('error', 'Terjadi kesalahan saat mengirim pesan: ' . $e->getMessage());
        }
    }
}

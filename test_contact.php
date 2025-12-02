<?php

require_once 'vendor/autoload.php';

$app = require_once 'bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

$data = [
    'name' => 'Test Name',
    'email' => 'test@example.com',
    'subject' => 'Test Subject',
    'message' => 'Test Message',
];

try {
    Mail::to('farisyanazhiraa@gmail.com')->send(new ContactFormMail($data));
    echo 'Contact form email sent successfully!';
} catch (Exception $e) {
    echo 'Error sending contact form email: ' . $e->getMessage();
    echo "\n\nException details:\n";
    print_r($e->getTraceAsString());
}

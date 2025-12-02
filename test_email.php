<?php

require_once 'vendor/autoload.php';

$app = require_once 'bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use Illuminate\Support\Facades\Mail;

try {
    Mail::raw('Test email from Laravel application', function ($message) {
        $message->to('farisya24002@mail.unpad.ac.id')
                ->subject('Test Email from Laravel');
    });

    echo 'Test email sent successfully!';
} catch (Exception $e) {
    echo 'Error sending email: ' . $e->getMessage();
}

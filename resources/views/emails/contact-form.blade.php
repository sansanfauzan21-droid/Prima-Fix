<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pesan Kontak dari Website</title>
</head>
<body>
    <h2>Pesan Kontak Baru dari Website Aliansi Prima Energi</h2>

    <p><strong>Nama:</strong> {!! e($name) !!}</p>
    <p><strong>Email:</strong> {!! e($email) !!}</p>
    <p><strong>Subjek:</strong> {!! e($subject) !!}</p>
    <p><strong>Pesan:</strong></p>
    <p>{!! nl2br(e($message_content)) !!}</p>

    <hr>
    <p>Email ini dikirim secara otomatis dari form kontak website.</p>
</body>
</html>

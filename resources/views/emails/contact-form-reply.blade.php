<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balasan dari Pt. Aliansi Prima Energi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .content {
            background-color: #ffffff;
            padding: 20px;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .original-message {
            background-color: #f8f9fa;
            padding: 15px;
            border-left: 4px solid #007bff;
            margin: 20px 0;
        }
        .reply-message {
            background-color: #e9ecef;
            padding: 15px;
            border-left: 4px solid #28a745;
            margin: 20px 0;
        }
        .footer {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #dee2e6;
            font-size: 12px;
            color: #6c757d;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>Balasan dari tim kami</h2>
        <p>Halo {{ $recipient_name }},</p>
        <p>Kami telah menerima pesan Anda dan berikut adalah balasan dari tim kami.</p>
    </div>

    <div class="content">
        <h3>Pesan Asli Anda:</h3>
        <div class="original-message">
            <strong>Subjek:</strong> {{ $original_subject }}<br>
            <strong>Pesan:</strong><br>
            {{ nl2br(e($original_message)) }}
        </div>

        <h3>Balasan Kami:</h3>
        <div class="reply-message">
            {{ nl2br(e($reply_message)) }}
        </div>

        <p>Jika Anda memiliki pertanyaan lebih lanjut, jangan ragu untuk menghubungi kami kembali.</p>

        <p>Terima kasih,<br>
        Pt. Aliansi Prima Energi<br>
        Tim Penanggung Jawab Pesan.</p>
    </div>

    <div class="footer">
        <p>Email ini dikirim secara otomatis dari sistem.</p>
        <p>Jika Anda tidak mengirim pesan ke kami, silakan abaikan email ini.</p>
    </div>
</body>
</html>

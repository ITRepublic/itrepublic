<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Verifikasi Akun | IT Republic</title>
</head>
<body style=" margin: 0 auto;
            padding: 0 auto;
            font-family: Arial, sans-serif;">

    <div style="background-color: #0000;
    text-align: center;
    color: #fff;
    padding: 5px 0;">
        <h2>IT Republic</h2>
    </div>

    <div style="margin: 30px;">
        <p><b>Hi, {{ $data['name'] }} ({{ $data['email'] }})</b></p>
        <p>
            Terima kasih telah bergabung di IT Republic.
        </p>

        <br>
        
        <p>Klik <a href="{{ $data['link'] }}" target="_blank">VERIFIKASI</a> untuk memverifikasi akun Anda.</p>
    </div>

</body>
</html>
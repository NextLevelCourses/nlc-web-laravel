<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Terima Kasih Telah Mendaftar</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #fff;
            color: #0f1c3f;
        }

        .container {
            max-width: 700px;
            margin: auto;
        }

        .header img {
            width: 30px;
            vertical-align: middle;
        }

        .title {
            font-size: 28px;
            font-weight: bold;
            margin-top: 10px;
        }

        .info {
            margin: 20px 0;
        }

        .card {
            background-color: #001a3c;
            color: white;
            padding: 20px;
            border-radius: 12px;
            line-height: 1.8;
        }

        .card b {
            display: inline-block;
            width: 100px;
        }

        .button {
            display: block;
            width: 140px;
            text-align: center;
            margin: 20px auto;
            padding: 10px;
            background-color: #001a3c;
            color: white;
            font-weight: bold;
            border-radius: 10px;
            text-decoration: none;
        }

        .instructions {
            margin: 20px 0;
        }

        .instructions ol {
            padding-left: 20px;
        }

        .footer {
            margin-top: 30px;
            font-size: 14px;
        }

        .footer b {
            display: block;
            margin-top: 10px;
        }

        .footer em {
            color: #3b3b3b;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="https://img.icons8.com/ios-filled/50/000000/level-up.png" alt="Logo" />
        </div>
        <div class="title">Terimakasih telah mendaftar di sistem ini</div>
        <div class="info">
            Mohon di perhatikan pada informasi di bawah ini terkait informasi login pada sistem. Setelah berhasil login
            selanjutnya untuk sangat disarankan merubah default password yang telah diberikan oleh sistem agar akun anda
            menjadi aman terkendali
        </div>

        <div class="card">
            <div><b>Username:</b> {{ $username }}</div>
            <div><b>Password:</b> {{ $password }}</div>
            <div><b>IP:</b> {{ $ip }}</div>
            <div><b>Email:</b> {{ $email }}</div>
            <div><b>Date Registered:</b> {{ $date_registered }}</div>
        </div>

        <a href="{{ $url_verification }}" class="button">Verification</a>

        <div class="instructions">
            <h3>Cara Mengubah Default Password:</h3>
            <ol>
                <li>Masuk ke menu profile pada akun anda</li>
                <li>Isi kolom current password (masukan password sebelumnya)</li>
                <li>Masukan password baru</li>
                <li>Masukan ulang password barunya</li>
                <li>Klik tombol save changes untuk menyimpan perubahan</li>
                <li>Done</li>
            </ol>
        </div>

        <div class="footer">
            Mohon untuk merahasiakan informasi login tersebut agar akun anda tidak diambil alih oleh pihak yang tidak
            bertanggung jawab

            <b>Terkendala Login?</b>
            Anda bisa menghubungi call center kami: 081804228935 / 082190486490<br />
            <em>More information about Login Problems</em>
        </div>

        <div class="footer" style="margin-top: 40px;">
            Next Level Course Inc. &copy; 2025
        </div>
    </div>
</body>

</html>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f9fafb;
            font-family: 'Segoe UI', sans-serif;
            color: #0f172a;
            text-align: center;
        }

        .container {
            background-color: #ffffff;
            max-width: 600px;
            margin: 0 auto;
            padding: 50px 20px 30px;
            border-radius: 8px;
        }

        .logo {
            margin-bottom: 30px;
        }

        .logo img {
            width: 48px;
            height: 48px;
        }

        h1 {
            font-size: 32px;
            margin-bottom: 20px;
            font-weight: bold;
        }

        p {
            font-size: 18px;
            color: #64748b;
            margin: 0 0 40px;
            line-height: 1.5;
        }

        .button {
            display: inline-block;
            background-color: #001d3d;
            color: #ffffff;
            text-decoration: none;
            padding: 14px 30px;
            font-size: 18px;
            font-weight: bold;
            border-radius: 12px;
            margin-bottom: 40px;
        }

        .footer-text {
            font-size: 16px;
            color: #cbd5e1;
            margin-bottom: 60px;
        }

        .footer {
            background-color: #f1f5f9;
            padding: 20px;
            font-size: 14px;
            color: #94a3b8;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="logo">
            <img crossorigin="anonymous"
                src="https://drive.google.com/drive-viewer/AKGpihZQq-99jGheSKdDRc2N2rKTm0QvU6dai0kjb-ltfnfy0xtYzkbTLvxRhzQK-el70vKz5yRVcHruSmjA4lyzRz7O0qN35gSJaA=s2560"
                alt="logo" />
        </div>
        <h1>Forgot your<br>password?</h1>
        <p><b>Halo {{ $email }}</b></p>
        <p>Harap mengklik tombol dibawah ini<br>jika ingin melakukan reset password</p>
        <a href="{{ $url }}" class="button">Reset your password</a>
        <div class="footer-text">
            Jika sudah mengklik reset password anda akan<br>diarahkan ke halaman reset password
        </div>
    </div>
    <div class="footer">
        Next Level Course @ 2025<br>
        NLC. All rights reserved
    </div>
</body>

</html>

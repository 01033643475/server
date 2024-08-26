<!DOCTYPE html>
<html lang="ar">

<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;

            height: 100vh;
        }

        .login-container {
            width: 100%;
            position: relative;
            left: 25%;
            top: 9%;
            max-width: 900px;
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .login-container h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .login-container form {
            display: flex;
            flex-direction: column;
        }

        .login-container label {
            margin-bottom: 5px;
            color: #666;
        }

        .login-container input {
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .login-container button {
            padding: 12px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        .login-container button:hover {
            background-color: #0056b3;
        }

        .social-login {
            margin-top: 30px;
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }

        .social-login a {
            display: flex;
            align-items: center;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            text-decoration: none;
            color: #333;
            font-size: 14px;
            flex: 1;
            text-align: center;
            transition: background-color 0.2s;
        }

        .social-login a:hover {
            background-color: #f0f0f0;
        }

        .social-login i {
            margin-right: 10px;
        }

        .error {
            color: red;
            text-align: center;
            margin-bottom: 15px;
        }
    </style>

</head>

<body>
    @include('navbar')
    <div <div class="login-container">
        <h1>تسجيل الدخول لشراء المنتج</h1>

        @if (session('error'))
            <div class="error">{{ session('error') }}</div>
        @endif

        <form action="{{ url('post/insert') }}" method="POST">
            @csrf
            <label for="email">البريد الإلكتروني:</label>
            <input type="email" id="username" name="username" required>

            <label for="password">كلمة المرور:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">تسجيل الدخول</button>
        </form>


        <div class="social-login">
            <a href="">
                <i class="fa fa-google"></i> تسجيل الدخول باستخدام Google
            </a>
            <a href="">
                <i class="fa fa-facebook"></i> تسجيل الدخول باستخدام Facebook
            </a>
            <a href="">
                <i class="fa fa-whatsapp"></i> تسجيل الدخول باستخدام WhatsApp
            </a>
            <a href="">
                <i class="fa fa-instagram"></i> تسجيل الدخول باستخدام Instagram
            </a>
        </div>
    </div>

</body>

</html>

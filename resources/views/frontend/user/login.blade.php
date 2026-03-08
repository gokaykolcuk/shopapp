<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'ShopApp') }} | User Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            background: radial-gradient(circle at top left, #e8f4ff 0%, #f4f7fb 42%, #e9edf3 100%);
        }

        .login-wrapper {
            min-height: 100vh;
        }

        .login-card {
            border: 0;
            border-radius: 1.25rem;
            box-shadow: 0 1.5rem 2.5rem rgba(20, 35, 60, 0.12);
        }

        .brand-dot {
            width: 10px;
            height: 10px;
            display: inline-block;
            border-radius: 50%;
            background: #0d6efd;
            margin-right: 8px;
        }
    </style>
</head>
<body>
<div class="container login-wrapper d-flex align-items-center justify-content-center py-5">
    <div class="row w-100 justify-content-center">
        <div class="col-12 col-md-9 col-lg-6 col-xl-5">
            <div class="card login-card p-4 p-md-5">
                <div class="mb-4 text-center">
                    <h3 class="fw-bold mb-1"><span class="brand-dot"></span>ShopApp</h3>
                    <p class="text-muted mb-0">Hesabına giriş yap ve alışverişe devam et.</p>
                </div>

                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label fw-semibold">E-posta</label>
                        <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="ornek@mail.com" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label fw-semibold">Şifre</label>
                        <input type="password" name="password" id="password" class="form-control form-control-lg" placeholder="••••••••" required>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember">
                            <label class="form-check-label" for="remember">Beni hatırla</label>
                        </div>

                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-decoration-none">Şifremi unuttum</a>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-dark btn-lg w-100 rounded-3">Giriş Yap</button>
                </form>

                <p class="text-center mt-4 mb-0 text-muted">
                    Hesabın yok mu?
                    <a href="{{ route('register') }}" class="text-decoration-none fw-semibold">Kayıt Ol</a>
                </p>
            </div>
        </div>
    </div>
</div>
</body>
</html>

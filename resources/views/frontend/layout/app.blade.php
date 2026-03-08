<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'ShopApp') }} | Ana Sayfa</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(180deg, #f5f7fa 0%, #eef2f7 100%);
        }

        .hero-carousel .carousel-item img {
            height: 420px;
            object-fit: cover;
            filter: brightness(0.78);
        }

        .hero-overlay {
            background: linear-gradient(95deg, rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.2));
            border-radius: 1rem;
        }

        .product-card {
            border: 0;
            border-radius: 1rem;
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .product-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.12);
        }

        .product-image {
            height: 220px;
            object-fit: cover;
        }

        .top-nav {
            backdrop-filter: blur(8px);
            background: rgba(255, 255, 255, 0.9);
        }

        .icon-btn {
            width: 40px;
            height: 40px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #dee2e6;
            border-radius: 9999px;
            color: #1f2937;
            background: #fff;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .icon-btn:hover {
            color: #fff;
            background: #212529;
            border-color: #212529;
        }
    </style>
</head>

<body>
    @yield('content')




</body>

</html>

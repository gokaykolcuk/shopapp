@extends('frontend.layout.app')

@section('content')
    <nav class="navbar navbar-expand-lg top-nav border-bottom sticky-top">
        <div class="container py-2">
            <a class="navbar-brand fw-bold fs-4" href="{{ url('/') }}">ShopApp</a>
            <div class="d-flex align-items-center gap-2 ms-auto order-lg-3">
                <a class="icon-btn" href="#" aria-label="Sepet">
                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1.5 7A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.49-.402L1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 6h8.185l1.286-6zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                    </svg>
                </a>
                <a class="icon-btn" href="#" aria-label="Ara">
                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                    </svg>
                </a>
                <div class="dropdown">
                    <a class="icon-btn" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Kullanıcı Menüsü">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                        </svg>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        @auth
                            <li><a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profil</a></li>
                        @else
                            <li><a class="dropdown-item" href="{{ route('user.login') }}">Giriş Yap</a></li>
                            <li><a class="dropdown-item" href="{{ route('register') }}">Kayıt Ol</a></li>
                        @endauth
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <main class="py-5">
        <div class="container">
            <div class="d-flex flex-wrap align-items-end justify-content-between gap-3 mb-4">
                <div>
                    <h1 class="fw-bold mb-1">Tüm Ürünler</h1>
                    <p class="text-muted mb-0">Kategorilerden bağımsız tüm ürünleri bu sayfada inceleyebilirsin.</p>
                </div>
                <a href="{{ url('/') }}" class="btn btn-outline-dark rounded-pill px-4">Ana Sayfaya Dön</a>
            </div>

            @php
                $products = [
                    ['title' => 'Kablosuz Kulaklık', 'price' => '2.999 TL', 'image' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&w=900&q=80'],
                    ['title' => 'Akıllı Saat', 'price' => '4.499 TL', 'image' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?auto=format&fit=crop&w=900&q=80'],
                    ['title' => 'Spor Ayakkabı', 'price' => '3.299 TL', 'image' => 'https://images.unsplash.com/photo-1542291026-7eec264c27ff?auto=format&fit=crop&w=900&q=80'],
                    ['title' => 'Minimal Sırt Çantası', 'price' => '1.899 TL', 'image' => 'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?auto=format&fit=crop&w=900&q=80'],
                    ['title' => 'Premium Güneş Gözlüğü', 'price' => '2.199 TL', 'image' => 'https://images.unsplash.com/photo-1511499767150-a48a237f0083?auto=format&fit=crop&w=900&q=80'],
                    ['title' => 'Deri Cüzdan', 'price' => '1.149 TL', 'image' => 'https://images.unsplash.com/photo-1627123424574-724758594e93?auto=format&fit=crop&w=900&q=80'],
                    ['title' => 'Bluetooth Hoparlör', 'price' => '1.799 TL', 'image' => 'https://images.unsplash.com/photo-1589003077984-894e133dabab?auto=format&fit=crop&w=900&q=80'],
                    ['title' => 'Ofis Sırt Çantası', 'price' => '2.049 TL', 'image' => 'https://images.unsplash.com/photo-1581605405669-fcdf81165afa?auto=format&fit=crop&w=900&q=80'],
                    ['title' => 'Mekanik Klavye', 'price' => '3.149 TL', 'image' => 'https://images.unsplash.com/photo-1511467687858-23d96c32e4ae?auto=format&fit=crop&w=900&q=80'],
                    ['title' => 'Gaming Mouse', 'price' => '1.299 TL', 'image' => 'https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?auto=format&fit=crop&w=900&q=80'],
                    ['title' => '4K Webcam', 'price' => '2.399 TL', 'image' => 'https://images.unsplash.com/photo-1587825140708-dfaf72ae4b04?auto=format&fit=crop&w=900&q=80'],
                    ['title' => 'Taşınabilir SSD', 'price' => '3.899 TL', 'image' => 'https://images.unsplash.com/photo-1591488320449-011701bb6704?auto=format&fit=crop&w=900&q=80'],
                ];
            @endphp

            <div class="row g-4">
                @foreach ($products as $product)
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                        <div class="card product-card h-100 shadow-sm">
                            <img src="{{ $product['image'] }}" class="card-img-top product-image" alt="{{ $product['title'] }}">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title fw-semibold">{{ $product['title'] }}</h5>
                                <p class="card-text text-muted">Yüksek kalite ve modern çizgiyle tasarlanmış popüler ürün.</p>
                                <div class="mt-auto d-flex justify-content-between align-items-center">
                                    <span class="fw-bold fs-6">{{ $product['price'] }}</span>
                                    <button class="btn btn-dark btn-sm rounded-pill px-3">Sepete Ekle</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection

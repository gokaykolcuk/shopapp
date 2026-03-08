@extends('frontend.layout.app')
@section('content')
    <nav class="navbar navbar-expand-lg top-nav border-bottom sticky-top">
        <div class="container py-2">
            <a class="navbar-brand fw-bold fs-4" href="{{ url('/') }}">ShopApp</a>
            <div class="d-flex align-items-center gap-2 ms-auto order-lg-3">
                <a class="icon-btn" href="#" aria-label="Sepet">
                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor"
                        viewBox="0 0 16 16">
                        <path
                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1.5 7A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.49-.402L1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 6h8.185l1.286-6zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                    </svg>
                </a>

                <a class="icon-btn" href="#" aria-label="Ara">
                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor"
                        viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                    </svg>
                </a>

                <div class="dropdown">
                    <a class="icon-btn" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"
                        aria-label="Kullanıcı Menüsü">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                            <path fill-rule="evenodd"
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
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

                <button class="navbar-toggler ms-1" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
                    aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse order-lg-2 w-100 mt-3 mt-lg-0" id="mainNavbar">
                <form class="d-flex ms-lg-4 my-3 my-lg-0 flex-grow-1" role="search">
                    <input class="form-control me-2 rounded-pill" type="search" placeholder="Ürün ara..."
                        aria-label="Search">
                    <button class="btn btn-dark rounded-pill px-4" type="submit">Ara</button>
                </form>
            </div>
        </div>
    </nav>

    <main class="py-4 py-lg-5">
        <div class="container">
            <section id="heroCarousel" class="carousel slide hero-carousel mb-5 shadow-lg rounded-4 overflow-hidden"
                data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?auto=format&fit=crop&w=1600&q=80"
                            class="d-block w-100" alt="Yeni sezon koleksiyon">
                        <div class="carousel-caption hero-overlay p-4 text-start">
                            <h2 class="fw-bold">Yeni Sezon, Güçlü İndirimler</h2>
                            <p class="mb-3">Seçili ürünlerde %40'a varan fırsatları hemen keşfet.</p>
                            <a href="#products" class="btn btn-light rounded-pill px-4">Alışverişe Başla</a>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?auto=format&fit=crop&w=1600&q=80"
                            class="d-block w-100" alt="Trend ürünler">
                        <div class="carousel-caption hero-overlay p-4 text-start">
                            <h2 class="fw-bold">Trend Ürünleri Kaçırma</h2>
                            <p class="mb-3">Bu haftanın en çok tercih edilen ürünleri tek yerde.</p>
                            <a href="#products" class="btn btn-light rounded-pill px-4">Ürünleri Gör</a>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?auto=format&fit=crop&w=1600&q=80"
                            class="d-block w-100" alt="Aksesuarlar">
                        <div class="carousel-caption hero-overlay p-4 text-start">
                            <h2 class="fw-bold">Aksesuarlarla Tarzını Tamamla</h2>
                            <p class="mb-3">Saatten çantaya premium seçeneklerle stilini güncelle.</p>
                            <a href="#products" class="btn btn-light rounded-pill px-4">Keşfet</a>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </section>

            <section id="products">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                        <h3 class="fw-bold mb-1">Öne Çıkan Ürünler</h3>
                        <p class="text-muted mb-0">Modern tasarım ve kaliteli ürünleri keşfet.</p>
                    </div>
                    <a href="{{ route('products.index') }}" class="btn btn-outline-dark rounded-pill px-4">Tümünü Gör</a>
                </div>

                <div class="row g-4">
                    @php
                        $products = [
                            [
                                'title' => 'Kablosuz Kulaklık',
                                'price' => '2.999 TL',
                                'image' =>
                                    'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&w=900&q=80',
                            ],
                            [
                                'title' => 'Akıllı Saat',
                                'price' => '4.499 TL',
                                'image' =>
                                    'https://images.unsplash.com/photo-1523275335684-37898b6baf30?auto=format&fit=crop&w=900&q=80',
                            ],
                            [
                                'title' => 'Spor Ayakkabı',
                                'price' => '3.299 TL',
                                'image' =>
                                    'https://images.unsplash.com/photo-1542291026-7eec264c27ff?auto=format&fit=crop&w=900&q=80',
                            ],
                            [
                                'title' => 'Minimal Sırt Çantası',
                                'price' => '1.899 TL',
                                'image' =>
                                    'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?auto=format&fit=crop&w=900&q=80',
                            ],
                            [
                                'title' => 'Premium Güneş Gözlüğü',
                                'price' => '2.199 TL',
                                'image' =>
                                    'https://images.unsplash.com/photo-1511499767150-a48a237f0083?auto=format&fit=crop&w=900&q=80',
                            ],
                            [
                                'title' => 'Deri Cüzdan',
                                'price' => '1.149 TL',
                                'image' =>
                                    'https://images.unsplash.com/photo-1627123424574-724758594e93?auto=format&fit=crop&w=900&q=80',
                            ],
                        ];
                    @endphp

                    @foreach ($products as $product)
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card product-card h-100 shadow-sm">
                                <img src="{{ $product['image'] }}" class="card-img-top product-image"
                                    alt="{{ $product['title'] }}">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title fw-semibold">{{ $product['title'] }}</h5>
                                    <p class="card-text text-muted">Yüksek kalite, modern görünüm ve günlük kullanım için
                                        ideal.</p>
                                    <div class="d-flex justify-content-between align-items-center mt-auto">
                                        <span class="fw-bold fs-5">{{ $product['price'] }}</span>
                                        <button class="btn btn-dark rounded-pill px-3">Sepete Ekle</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        </div>

    </main>
@endsection

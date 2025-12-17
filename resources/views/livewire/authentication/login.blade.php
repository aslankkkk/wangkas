<div>
    {{-- Custom CSS untuk halaman ini --}}
    <style>
        /* Variabel Warna Tema Bakti Idhata */
        :root {
            --primary-color: #581c87; /* Biru Tua Bakti Idhata */
            --secondary-color: #ffc107; /* Kuning Aksen */
        }
        
        .auth-bg {
            /* --- UPDATE BACKGROUND DI SINI --- */
            
            /* 1. LAYER WARNA (Overlay) */
            /* Saya ubah jadi gradasi Ungu (Warna Sekolah) ke Hitam transparan agar teks terbaca jelas */
            background-image: linear-gradient(to bottom, rgba(88, 28, 135, 0.85), rgba(0, 0, 0, 0.6)), 
            
            /* 2. LAYER GAMBAR */
            /* Ganti dengan cara memanggil gambar dari folder public/img laravel */
                              url('{{ asset("img/bakdat2.jpg") }}'); 
            
            /* Opsi jika masih mau pakai link gambar online (Unsplash) sementara: */
            /* url('https://images.unsplash.com/photo-1541339907198-e0875662f976?q=80&w=2070&auto=format&fit=crop'); */

            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-card {
            background: rgba(255, 255, 255, 0.95); /* Putih sedikit transparan */
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
            width: 100%;
            max-width: 420px;
            padding: 2.5rem;
            position: relative;
            overflow: hidden;
        }

        .login-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            /* Garis Aksen menggunakan warna utama Bakti Idhata */
            background: var(--primary-color); 
        }

        .logo-container img {
            height: 100px;
            width: auto;
            margin-bottom: 1rem;
            filter: drop-shadow(0 5px 5px rgba(0,0,0,0.1));
        }

        .form-control {
            border-radius: 10px;
            padding: 12px 15px;
            font-size: 0.95rem;
        }

        .form-control:focus {
            /* Warna fokus disesuaikan dengan tema Bakti Idhata (Biru Tua) */
            box-shadow: 0 0 0 3px rgba(26, 82, 118, 0.2); 
            border-color: var(--primary-color);
        }
        
        .btn-primary {
            /* Tombol menggunakan warna Biru Tua Bakti Idhata */
            background: var(--primary-color);
            border: none;
            border-radius: 10px;
            padding: 12px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            /* Efek hover gelap sedikit */
            background: #113c54; 
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(26, 82, 118, 0.3);
        }
    </style>

    <div class="auth-bg">
        <div class="login-card animate__animated animate__fadeInUp">
            
            {{-- Logo Section --}}
            <div class="text-center logo-container">
                {{-- Tombol Kembali --}}
                <div class="mb-3 text-start">
                    <a href="{{ url('/') }}" class="text-decoration-none text-muted small">
                        <i class="bi bi-arrow-left"></i> Kembali ke Homepage
                    </a>
                </div>


                {{-- Logo Sekolah (Diubah ke placeholder Bakti Idhata) --}}
                {{-- GANTI DENGAN URL LOGO SMK BAKTI IDHATA YANG SESUNGGUHNYA --}}
               
                
                <h4 class="font-weight-bold" style="color: var(--primary-color); margin-bottom: 1px;">SMK BAKTI IDHATA</h4>
                <p class="text-muted small mb-4"></p>
            </div>

            {{-- Alerts Section (Tetap menggunakan sintaks Laravel Blade) --}}
            @if (session('error'))
            <div class="alert alert-warning alert-dismissible fade show text-sm" role="alert">
                <i class="bi bi-exclamation-triangle me-2"></i> {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @error('email')
            <div class="alert alert-danger alert-dismissible fade show text-sm" role="alert">
                <i class="bi bi-x-circle me-2"></i> {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @enderror

            @error('password')
            <div class="alert alert-danger alert-dismissible fade show text-sm" role="alert">
                <i class="bi bi-x-circle me-2"></i> {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @enderror

            {{-- Form Section --}}
            <form wire:submit.prevent="authenticate">
                
                {{-- Email Input --}}
                <div class="form-group position-relative has-icon-left mb-3">
                    <input type="email" wire:model.blur="email"
                        class="form-control @error('email') is-invalid @enderror" 
                        placeholder="Alamat Email"
                        autofocus>
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                </div>

                {{-- Password Input --}}
                <div class="form-group mb-3 position-relative has-icon-left">
                    <input type="{{ $input_type }}" wire:model.blur="password"
                        class="form-control pe-5 @error('password') is-invalid @enderror"
                        placeholder="Kata Sandi" />
                    
                    {{-- Toggle Password Visibility --}}
                    <span wire:click="togglePasswordVisibility" title="{{ $input_title }}"
                        class="position-absolute top-50 end-0 translate-middle-y me-3 text-muted" 
                        style="cursor: pointer; z-index: 10;">
                        <i class="{{ $icon }}"></i>
                    </span>

                    <div class="form-control-icon">
                        <i class="bi bi-lock"></i>
                    </div>
                </div>

                {{-- Remember Me --}}
                <div class="form-check d-flex align-items-center mb-4">
                    <input class="form-check-input me-2" wire:model="remember_me" type="checkbox" id="rememberMe">
                    <label class="form-check-label text-gray-600 small" for="rememberMe">
                        Ingat Saya
                    </label>
                </div>

                {{-- Submit Button --}}
                <button class="btn btn-primary w-100 shadow-sm" type="submit">
                    Masuk Dashboard
                </button>
            </form>
            
            {{-- Footer Copyright (Diubah ke Bakti Idhata) --}}
            <div class="text-center mt-4">
                <p class="text-muted small" style="font-size: 0.7rem;">
                    &copy; {{ date('Y') }} SMK BAKTI IDHATA
                </p>
            </div>
        </div>
    </div>
</div>
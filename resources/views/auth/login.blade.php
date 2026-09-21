<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk — SMK Negeri 1 Cijati</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@400;500;600;700&family=Work+Sans:wght@400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <div class="auth-screen">
        <div class="auth-screen__panel">
            <span class="brand__mark brand__mark--light">SMK</span>
            <h1>Portal Sekolah<br>SMK Negeri 1 Cijati</h1>
            <p>Masuk untuk mengelola pengumuman, data siswa, dan kegiatan akademik sekolah.</p>
        </div>

        <div class="auth-screen__form">
            <div class="auth-box">
                <h2>Masuk ke Dasbor</h2>
                <p class="auth-box__sub">Gunakan akun staf yang telah terdaftar.</p>

                @if ($errors->any())
                    <div class="alert alert-error">
                        {{ $errors->first() }}
                    </div>
                @endif

                <form action="{{ route('login.submit') }}" method="POST" class="form-barang">
                    @csrf

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}"
                               class="form-control" placeholder="nama@cendekiabangsa.sch.id" autofocus>
                    </div>

                    <div class="form-group">
                        <label for="password">Kata Sandi</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="••••••••">
                    </div>

                    <div class="form-check">
                        <label>
                            <input type="checkbox" name="remember"> Ingat saya
                        </label>
                    </div>

                    <button type="submit" class="btn btn-navy" style="width:100%">Masuk</button>
                </form>

                <a href="{{ route('home') }}" class="auth-box__back">Kembali ke beranda</a>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

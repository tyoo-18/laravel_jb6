<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman Buku Keliling</title>
    <!-- Tautan CSS Bootstrap (pastikan ini mengarah ke file CSS Bootstrap yang tepat) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('books.index') }}">Perpustakaan Buku Smk Negri 2 Bangkalan</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            
        </div>
    </nav>

    <div class="container">
        <!-- Isi konten akan diisi oleh tampilan yang memperpanjang layout ini -->
        @yield('content')
    </div>

    <!-- Skrip JavaScript Bootstrap (pastikan ini mengarah ke file JS Bootstrap yang tepat) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

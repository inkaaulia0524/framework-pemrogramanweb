<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sistem Toko - UTS</title>
</head>
<body>
    <header>
        <h1>Halaman UTS</h1>
        <nav>
            <a href="{{ route('uts.pemrograman') }}">Menu UTS Pemrograman Web</a> |
            <a href="{{ route('uts.database') }}">Menu UTS Database</a>
        </nav>
        <hr>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <hr>
        <p>&copy; {{ date('Y') }} Sistem Toko - Halaman UTS</p>
    </footer>
</body>
</html>

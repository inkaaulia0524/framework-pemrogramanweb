<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>UTS Framework Pemrograman Web</title>
    <style>
        nav a {
            display: inline-block;
            padding: 8px 16px;
            margin: 4px;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
        }
        nav a:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <header>
        <h1>Halaman UTS</h1>
        <nav>
            <a href="{{ route('uts.pemrograman') }}">Pemrograman Web</a>
            <a href="{{ route('uts.database') }}">Database</a>
            <a href="{{ route('uts.index') }}">Kembali ke Halaman Utama</a>
        </nav>
        <hr>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <hr>
        <p>&copy; {{ date('Y') }} Halaman UTS</p>
        
    </footer>
</body>
</html>

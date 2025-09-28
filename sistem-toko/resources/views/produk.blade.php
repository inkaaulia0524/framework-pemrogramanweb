@extends('utama')

@section('content')
    @isset($message)
        <x-alert type="{{ $type }}">
            {{ $message }}
        </x-alert>
    @endisset

    <!DOCTYPE html>
<html>
<head>
    <title>Cek Angka</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-5"></body>
</html>

@endsection

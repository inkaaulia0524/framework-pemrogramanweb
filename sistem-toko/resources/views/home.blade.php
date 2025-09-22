<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3>Halo, {{ Auth::user()->name }}</h3>
                <p>Selamat datang di <strong>Sistem Toko Mahasiswa</strong></p>
                <p>Role Anda adalah: <strong>{{ Auth::user()->role }}</strong></p>

                <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-primary-button class="mt-3">
                    {{ __('Logout') }}
                </x-primary-button>
            </form>
            </div>
        </div>
    </div>
</x-app-layout>

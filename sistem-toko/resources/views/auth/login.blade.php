<x-guest-layout>

    <div class="flex flex-col items-center mb-6">
        <h1 class="text-3xl font-bold text-indigo-700 font-poppins text-center">Selamat Datang di Sistem Toko</h1>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="w-full max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
    
       @csrf
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full border border-yellow-400 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                          type="email"
                          name="email"
                          :value="old('email')"
                          required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full border border-yellow-400 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                          type="password"
                          name="password"
                          required autocomplete="current-password" />
 
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                       class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                       name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <!-- Tombol dan Link -->
        <div class="flex items-center justify-between mt-4">
            <div>
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                       href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                       class="ml-4 underline text-sm text-gray-600 hover:text-gray-900">
                        {{ __('Register') }}
                    </a>
                @endif
            </div>

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

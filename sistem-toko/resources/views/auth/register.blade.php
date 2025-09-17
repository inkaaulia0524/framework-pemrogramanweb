<x-guest-layout>
    
    <div class="flex flex-col items-center mb-6">

        <h1 class="text-xl font-bold text-gray-800 mt-2">Buat Akun Baru</h1>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="block mt-1 w-full border border-gray-400 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" :value="old('name')" required autofocus
             />
        </div>

        <!-- Email -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="block mt-1 w-full border border-gray-400 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" :value="old('email')" required />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" name="password" type="password" class="block mt-1 w-full border border-gray-400 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required autocomplete="new-password" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="block mt-1 w-full border border-gray-400 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                {{ __('Sudah punya akun?') }}
            </a>

<x-primary-button class="ml-4 bg-indigo-800 hover:bg-indigo-900 text-white px-4 py-2 rounded-lg">
    {{ __('Register') }}
</x-primary-button>

        </div>
    </form>
</x-guest-layout>

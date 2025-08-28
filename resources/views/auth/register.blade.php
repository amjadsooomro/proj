<x-guest-layout>
    @if(session('success'))
    <div class="bg-green-500 text-white p-3 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

    <!-- ✅ Correct Vite setup (no mix error) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <h1 class="bg-info p-5 text-center font-bold text-2xl">centerPoint LMS</h1>
    <h1 class="text-center text-xl mt-4">Registration</h1>

    <form method="POST" action="{{ route('register') }}" class="max-w-md mx-auto mt-6 p-6 bg-white shadow rounded">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full"
                          type="text" name="name"
                          :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full"
                          type="email" name="email"
                          :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
<!-- Password -->
<div class="mt-4 relative">
    <x-input-label for="password" :value="__('Password')" />

    <x-text-input id="password"
                  class="block mt-1 w-full pr-10"
                  type="password" name="password"
                  required autocomplete="new-password" />

    <!-- Eye Button -->
    <span onclick="togglePassword('password')"
          class="absolute inset-y-0 right-3 flex items-center cursor-pointer">
        👁️
    </span>

    <x-input-error :messages="$errors->get('password')" class="mt-2" />
</div>

<!-- Confirm Password -->
<div class="mt-4 relative">
    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

    <x-text-input id="password_confirmation"
                  class="block mt-1 w-full pr-10"
                  type="password" name="password_confirmation"
                  required autocomplete="new-password" />

    <!-- Eye Button -->
    <span onclick="togglePassword('password_confirmation')"
          class="absolute inset-y-0 right-3 flex items-center cursor-pointer">
        👁️
    </span>

    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
</div>

<!-- Script -->
<script>
    function togglePassword(fieldId) {
        const input = document.getElementById(fieldId);
        input.type = input.type === 'password' ? 'text' : 'password';
    }
</script>

        <!-- Actions -->
        <div class="flex items-center justify-between mt-6">
            <a class="underline text-sm text-gray-600 hover:text-gray-900"
               href="{{ route('login') }}">
                {{ __('Already registered? Login here') }}
            </a>

            <x-primary-button>
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

<form method="POST" action="{{ route('register') }}">

    @csrf

    <!-- Name -->
    <div>
        <x-input-label for="name" :value="__('Name')" />
        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
            autofocus autocomplete="name" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <!-- Surname -->
    <div class="mt-4">
        <x-input-label for="surname" :value="__('Surname')" />
        <x-text-input id="surname" class="block mt-1 w-full" type="text" name="surname" :value="old('surname')" required
            autofocus autocomplete="surname" />
        <x-input-error :messages="$errors->get('surname')" class="mt-2" />
    </div>

    <!-- Company -->
    <div class="mt-4">
        <x-input-label for="company" :value="__('Company Name')" />
        <x-text-input id="company" class="block mt-1 w-full" type="text" name="company" :value="old('company')" required
            autofocus autocomplete="company" />
        <x-input-error :messages="$errors->get('company')" class="mt-2" />
    </div>

    <!-- Company Position -->
    <div class="mt-4">
        <x-input-label for="position" :value="__('Position in the Company')" />
        <x-text-input id="position" class="block mt-1 w-full" type="text" name="position" :value="old('position')"
            required autofocus autocomplete="position" />
        <x-input-error :messages="$errors->get('position')" class="mt-2" />
    </div>

    <!-- Email Address -->
    <div class="mt-4">
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
            autocomplete="username" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <!-- Password -->
    <div class="mt-4">
        <x-input-label for="password" :value="__('Password')" />

        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
            autocomplete="new-password" />

        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <!-- Confirm Password -->
    <div class="mt-4">
        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

        <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation"
            required autocomplete="new-password" />

        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
    </div>

    <div class="flex items-center justify-end mt-4">
        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
            href="{{ route('login') }}">
            {{ __('Already registered?') }}
        </a>
        <input name="code" type="hidden" value="w404SUP">
        <x-primary-button class="ms-4">
            {{ __('Register') }}
        </x-primary-button>
    </div>

</form>
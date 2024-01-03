<form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
    @csrf


    <div class="mt-4">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>

        <script src="https://cdn.jsdelivr.net/gh/alpine-collective/alpine-magic-helpers@0.3.x/dist/index.js"></script>


        <div x-data="{ photoName: null, photoPreview: null }" class="col-span-6 ml-2 sm:col-span-4 md:mr-3">
            <!-- Photo File Input -->
            <input type="file" name="photo" id="photo" class="hidden" x-ref="photo"
                x-on:change="
                                photoName = $refs.photo.files[0].name;
                                const reader = new FileReader();
                                reader.onload = (e) => {
                                    photoPreview = e.target.result;
                                };
                                reader.readAsDataURL($refs.photo.files[0]);
            ">

            <label class="block text-gray-700 text-sm font-bold mb-2 text-center" for="photo">
                Profile Photo <span class="text-red-600"> </span>
            </label>

            <div class="text-center">
                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="https://images.unsplash.com/photo-1531316282956-d38457be0993?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=80"
                        class="w-40 h-40 m-auto rounded-full shadow">
                </div>
                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview" style="display: none;">
                    <span class="block w-40 h-40 rounded-full m-auto shadow"
                        x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' +
                        photoPreview + '\');'"
                        style="background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url('null');">
                    </span>
                </div>
                <button type="button"
                    class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-400 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150 mt-2 ml-3"
                    x-on:click.prevent="$refs.photo.click()">
                    Select New Photo
                </button>
            </div>
        </div>
    </div>
    <!-- Student ID  -->
    <div class="mt-4">
        <x-input-label for="studentid" :value="__('Student Id')" />
        <x-text-input id="studentid" class="block mt-1 w-full" type="text" name="studentid" :value="old('studentid')"
            required autofocus autocomplete="studentid" />
        <x-input-error :messages="$errors->get('studentid')" class="mt-2" />
    </div>
    <!-- Name -->
    <div class="mt-4">
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

    <!-- Phone  -->
    <div class="mt-4">
        <x-input-label for="phonenumber" :value="__('Phone number')" />
        <small>Format: 01234567890</small>
        <x-text-input id="phonenumber" class="block mt-1 w-full" type="tel" name="phonenumber" :value="old('phonenumber')"
            pattern="[0]{1}[0-9]{9,}" required autofocus autocomplete="phonenumber" />
        <x-input-error :messages="$errors->get('phonenumber')" class="mt-2" />
    </div>

    <!-- Phone  -->
    <div class="mt-4">
        <x-input-label for="address" :value="__('Address')" />
        <small>Format: famagusta-trnc</small>
        <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')"
            pattern="[a-z,A-Z]{2,}-[a-z,A-Z]{2,}" required autofocus autocomplete="address" />
        <x-input-error :messages="$errors->get('address')" class="mt-2" />
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
        <input name="code" type="hidden" value="st404GP">
        <x-primary-button class="ms-4">
            {{ __('Register') }}
        </x-primary-button>
    </div>
</form>

<script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>

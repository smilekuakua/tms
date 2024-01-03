<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("You can only update those information due to security policy.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')
        <div class="container grid  md:grid-cols-2  ">

            <div>
                <!-- Phone  -->
                <div class="mt-4">
                    <x-input-label for="phonenumber" :value="__('Phone number')" />
                    <small class="dark:text-gray-400">Format: 01234567890</small>
                    <x-text-input id="phonenumber" class="block mt-1 w-full" type="tel" name="phonenumber"
                        :value="old('phonenumber')" pattern="[0]{1}[0-9]{9,}" required autofocus autocomplete="phonenumber" />
                    <x-input-error :messages="$errors->get('phonenumber')" class="mt-2" />
                </div>

                <!-- Address  -->
                <div class="mt-4">
                    <x-input-label for="address" :value="__('Address')" />
                    <small class="dark:text-gray-400">Format: famagusta-trnc</small>
                    <x-text-input id="address" class="block mt-1 w-full" type="text" name="address"
                        :value="old('address')" pattern="[a-z,A-Z]{2,}-[a-z,A-Z]{2,}" required autofocus
                        autocomplete="address" />
                    <x-input-error :messages="$errors->get('address')" class="mt-2" />
                </div>
            </div>
            <div>
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

                    <label class="block text-gray-700 text-sm font-bold mb-2 text-center dark:text-gray-400"
                        for="photo">
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

        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>

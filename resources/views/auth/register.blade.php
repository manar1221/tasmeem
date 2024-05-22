{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<x-app-layout>
    <div class="login-body">
        <div class="lcontainer active" id="lcontainer">
            <div class="form-lcontainer sign-up">
                <form method="post" action="{{ route('register') }}">
                    @csrf
                    <h1>{{__('mycustom.CreateAccount')}}</h1>
                    <input type="text" placeholder="Name" name="name" :value="old('name')" required autofocous autocomplete="name">
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />

                    <input type="email" placeholder="Email" name="email" :value="old('email')" required>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                    <input type="number" id="phone" name="phone" placeholder="Phone" :value="old('phone')" required>
                    <x-input-error :messages="$errors->get('phone')" class="mt-2" />

                    <input type="password" name="password" placeholder="Password" required autocomplete="new-password">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />

                    <input type="password" name="password_confirmation" placeholder="confirm password" required autocomplete="new-password">
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                    <button type="submit" name="login">{{__('mycustom.SignUp')}}</button>
                </form>
            </div>

            {{-- <div class="form-lcontainer sign-in">
                <form method="post" action="{{ route('login') }}">
                    @csrf
                    <h1>Sign In</h1>
                    <input type="email" placeholder="Email" required="" name="email" :value="old('email')" required autofocus>
                    <input type="password" name="password" placeholder="Password" required autocomplete="current=password">
                    <button type="submit" name="login">Sign In</button>
                </form>
            </div> --}}

            <div class="toggle-lcontainer">
                <div class="toggle">
                    <div class="toggle-panel toggle-left">
                        <h1>{{__('mycustom.WelcomeBack')}}</h1>
                        <p>{{__('mycustom.SignUp1')}}</p>
                        <a href="{{ route('login') }}"><button class="hidden" id="login">{{__('mycustom.SignIn')}}</button></a>
                    </div>

                    {{-- <div class="toggle-panel toggle-right">
                        <h1>Hello, Friend!</h1>
                        <p>Register with your personal details to use all of site features</p>
                        <button class="hidden" id="register">Sign Up</button>
                    </div> --}}
                </div>
            </div>

        </div>
    </div>
</x-app-layout>

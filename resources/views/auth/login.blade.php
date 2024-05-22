{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<x-app-layout>
    <div class="login-body">
        <div class="lcontainer" id="lcontainer">
            {{-- <div class="form-lcontainer sign-up">
                <form >
                    <h1>Create Account</h1>
                    <input type="text" placeholder="Name">
                    <input type="email" placeholder="Email">
                    <input type="number" placeholder="Phone">
                    <input type="password" placeholder="Password">
                    <a href="index.html"><button>Sign Up</button></a>
                </form>
            </div> --}}

            <div class="form-lcontainer sign-in">
                <form method="post" action="{{ route('login') }}">
                    @csrf
                    <h1>{{__('mycustom.SignIn')}}</h1>
                    <input type="email" placeholder="Email" required="" name="email" :value="old('email')" required autofocus>
                    <input type="password" name="password" placeholder="Password" required autocomplete="current=password">
                    <button type="submit" name="login">{{__('mycustom.SignIn')}}</button>
                </form>
            </div>

            <div class="toggle-lcontainer">
                <div class="toggle">
                    {{-- <div class="toggle-panel toggle-left">
                        <h1>Welcome Back!</h1>
                        <p>Enter your personal details to use all of site features</p>
                        <button class="hidden" id="login">Sign In</button>
                    </div> --}}

                    <div class="toggle-panel toggle-right">
                        <h1>{{__('mycustom.HelloFriend')}}</h1>
                        <p>{{__('mycustom.SignIn1')}}</p>
                        <a href="{{ route('register') }}"><button class="hidden" id="register">{{__('mycustom.SignUp')}}</button></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>

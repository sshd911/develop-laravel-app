<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                {{-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> --}}
                <img  style="display: block; margin: auto;" width="30%" height="10%" src="{{ asset('/images/main.webp') }}" >
            </a>
        </x-slot>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('表示名')" />

                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" placeholder="残業太郎" required autofocus />

                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Birthday -->
            <div class="mt-4">
                <x-input-label for="birthday" :value="__('生年月日')" />

                <x-text-input id="birthday" class="block mt-1 w-full" type='date' name="birthday" :value="old('birthday')" placeholder="生年月日を入力" required />

                <x-input-error :messages="$errors->get('birthday')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('メールアドレス')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="example@gmail.com" required />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('パスワード')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                placeholder="**********"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('パスワード再確認')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                placeholder="**********"
                                name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('既にアカウントをお持ちの方はこちら') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('新規登録') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

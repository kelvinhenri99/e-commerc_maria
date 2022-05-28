<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <div class="logologin"></div>
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div>
                {{ session('status') }}
            </div>
        @endif

        <div>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <x-jet-label for="email" value="{{ __('E-mail') }}" />
                    <x-jet-input id="email" type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Senha') }}" />
                    <x-jet-input id="password" type="password" name="password" required autocomplete="current-password" />
                </div>
                <div>
                    <label for="remember_me" class="flex items-center">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Manter-me conectado') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">

                    <x-jet-button class="ml-4">
                        {{ __('Entrar') }}
                    </x-jet-button>
                </div>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>

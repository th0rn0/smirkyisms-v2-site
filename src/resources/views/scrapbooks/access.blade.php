<x-app-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            {{ $team->name }} Access
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-center text-lg text-red-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('scrapbooks.password.post', ['team' => $team]) }}">
            @csrf

            <div class="mt-4 mb-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

          	<div class="flex items-center justify-end mt-4">
                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>

    </x-jet-authentication-card>
</x-app-layout>

<x-app-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            {{ $team->name }} Access
        </x-slot>
      	<div class="mb-4 mt-4 font-medium text-center text-lg text-red-600">
      		Access Denied
        </div>
    </x-jet-authentication-card>
</x-app-layout>

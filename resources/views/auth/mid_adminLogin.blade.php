<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />



    <form action="/admin_mid" method="POST">
        @csrf
        <x-input-label for="token_admin">
            <x-text-input id="token_admin" class="block mt-1 w-full" type="text" name="token_admin" :value="old('token_admin')"
                required autofocus autocomplete="token_admin" />
            <x-input-error :messages="$errors->get('token_admin')" class="mt-2" />
    </form>

    </x-auth-session-status>
</x-guest-layout>

<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('رمز التحقق.') }}
    </div>

    <form method="POST" action="{{route('verify-otp.store')}}">
        @csrf

        <div>
            <x-input-label for="password" :value="__('code')" />

            <x-text-input id="code" class="block mt-1 w-full" type="text" name="code" required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('code')" class="mt-2" />
        </div>

        <div class="flex justify-end mt-4">
            <x-primary-button>
                {{ __('كود التحقق') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
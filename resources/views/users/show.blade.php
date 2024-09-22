<x-guest-layout>
    <!-- First Name -->
    <div>
        <x-input-label for="first_name" :value="__('First Name')"/>
        <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name"
                      value="{{ $user->first_name }}" required autofocus readonly autocomplete="first_name"/>
        <x-input-error :messages="$errors->get('first_name')" class="mt-2"/>
    </div>

    <!-- Last Name -->
    <div>
        <div class="mt-4">
            <x-input-label for="last_name" :value="__('Last Name')"/>
            <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name"
                          value="{{ $user->last_name }}" required autofocus readonly autocomplete="last_name"/>
            <x-input-error :messages="$errors->get('last_name')" class="mt-2"/>
        </div>
    </div>

    <!-- Email Address -->
    <div class="mt-4">
        <x-input-label for="email" :value="__('Email')"/>
        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ $user->email }}" required
                      readonly autocomplete="username"/>
        <x-input-error :messages="$errors->get('email')" class="mt-2"/>
    </div>

    <div class="flex items-center justify-end mt-4">
        <x-primary-button class="ms-4">
            <a href="/users">{{ __('Go Back') }}</a>
        </x-primary-button>
    </div>
</x-guest-layout>

<x-guest-layout>
    <form method="POST" action="{{ route('users.update', $user) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="text-center m-4">Edit the User</div>
        <!-- First Name -->
        <div>
            <x-input-label for="first_name" :value="__('First Name')"/>
            <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name"
                          value="{{ $user->first_name }}" required autofocus autocomplete="first_name"/>
            <x-input-error :messages="$errors->get('first_name')" class="mt-2"/>
        </div>

        <!-- Last Name -->
        <div>
            <div class="mt-4">
                <x-input-label for="last_name" :value="__('Last Name')"/>
                <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name"
                              value="{{ $user->last_name }}" required autofocus autocomplete="last_name"/>
                <x-input-error :messages="$errors->get('last_name')" class="mt-2"/>
            </div>
        </div>
        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')"/>
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ $user->email }}"
                          required
                          autocomplete="username"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2"/>
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-4">
                {{ __('Update') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

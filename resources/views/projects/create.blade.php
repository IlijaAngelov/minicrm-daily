<x-guest-layout>
    <form method="POST" action="{{ route('projects.store') }}">
        @csrf

        <!-- Title -->
        <div>
            <x-input-label for="title" :value="__('Title')"/>
            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title"
                          :value="old('title')" required autofocus autocomplete="title"/>
            <x-input-error :messages="$errors->get('title')" class="mt-2"/>
        </div>

        <!-- Description -->
        <div>
            <div class="mt-4">
                <x-input-label for="description" :value="__('Description')"/>
                <x-text-input id="description" class="block mt-1 w-full" type="text" name="description"
                              :value="old('description')" required autofocus autocomplete="description"/>
                <x-input-error :messages="$errors->get('description')" class="mt-2"/>
            </div>
        </div>

        <!-- Deadline At -->
        <div class="mt-4">
            <x-input-label for="deadline_at" :value="__('Deadline At')"/>
            <x-text-input id="deadline_at" class="block mt-1 w-full" type="date" name="deadline_at" :value="old('deadline_at')" required
                          autocomplete="username"/>
            <x-input-error :messages="$errors->get('deadline_at')" class="mt-2"/>
        </div>

        <!-- Assigned User -->
        <div class="mt-4">
            <x-input-label for="assigned_user" :value="__('Assigned User')"/>
            <select class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow" name="assigned_user" id="assigned_user">
                @foreach($users as $user)
                    <option value="{{ $user->id }}"
                        @selected(old('user_id') == $user->id)>{{ $user->first_name . ' ' . $user->last_name }}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('user_id')" class="mt-2" />
        </div>

        <!-- Assigned Client -->
        <div class="mt-4">
            <x-input-label for="assigned_client" :value="__('Client')"/>
            <select class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow" name="assigned_client" id="assigned_client">
                @foreach($clients as $client)
                    <option value="{{ $client->id }}"
                        @selected(old('client_id') == $client->id)>{{ $client->company_name }}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('client_id')" class="mt-2" />
        </div>

        <!-- Status -->
        <div class="mt-4">
            <x-input-label for="status" :value="__('Status')"/>
            <select class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow" name="status" id="status">
                @foreach(\App\Enums\ProjectStatus::cases() as $status)
                    <option value="{{ $status->value }}"
                        @selected(old('status') == $status->value)>{{ $status->value }}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('status')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-4">
                {{ __('Create') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

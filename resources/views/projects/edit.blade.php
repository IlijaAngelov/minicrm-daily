<x-guest-layout>
    <form method="POST" action="{{ route('projects.update', $project) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="text-center m-4">Edit the Project</div>
        <!-- Title -->
        <div>
            <x-input-label for="title" :value="__('Title')"/>
            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title"
                          :value="old('title', $project->title)" required autofocus autocomplete="title"/>
            <x-input-error :messages="$errors->get('title')" class="mt-2"/>
        </div>

        <!-- Description -->
        <div>
            <div class="mt-4">
                <x-input-label for="description" :value="__('Description')"/>
                <x-text-input id="description" class="block mt-1 w-full" type="text" name="description"
                              :value="old('description', $project->description)" required autofocus autocomplete="description"/>
                <x-input-error :messages="$errors->get('description')" class="mt-2"/>
            </div>
        </div>

        <!-- Deadline At -->
        <div class="mt-4">
            <x-input-label for="deadline_at" :value="__('Deadline At')"/>
            <x-text-input id="deadline_at" class="block mt-1 w-full" type="date" name="deadline_at" :value="old('deadline_at', $project->deadline_at)" required
                          autocomplete="username"/>
            <x-input-error :messages="$errors->get('deadline_at')" class="mt-2"/>
        </div>

        <!-- Assigned User -->
        <div class="mt-4">
            <x-input-label for="user_id" :value="__('Assigned User')"/>
            <select class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow" name="user_id" id="user_id">
                @foreach($users as $user)
                    <option value="{{ $user->id }}"
                        @selected(old('user_id', $project->user_id) === $user->id)>{{ $user->first_name . ' ' . $user->last_name }}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('user_id')" class="mt-2" />
        </div>

        <!-- Assigned Client -->
        <div class="mt-4">
            <x-input-label for="client_id" :value="__('Client')"/>
            <select class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow" name="client_id" id="client_id">
                @foreach($clients as $client)
                    <option value="{{ $client->id }}"
                        @selected(old('client_id', $project->client_id) === $client->id)>{{ $client->company_name }}</option>
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
                        @selected(old('status', $project->status->value) == $status->value)>{{ $status->value }}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('status')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-4">
                {{ __('Update') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

<x-guest-layout>
    <form method="POST" action="{{ route('clients.update', $client) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="text-center m-4">Edit Client</div>
        <!-- Contact Name -->
        <div>
            <x-input-label for="contact_name" :value="__('Contact Name')"/>
            <x-text-input id="contact_name" class="block mt-1 w-full" type="text" name="contact_name"
                          value="{{ $client->contact_name }}" required autofocus autocomplete="contact_name"/>
            <x-input-error :messages="$errors->get('contact_name')" class="mt-2"/>
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="contact_email" :value="__('Email')"/>
            <x-text-input id="contact_email" class="block mt-1 w-full" type="email" name="contact_email" value="{{ $client->contact_email }}" required
                          autocomplete="contact_email"/>
            <x-input-error :messages="$errors->get('contact_email')" class="mt-2"/>
        </div>

        <!-- Phone Number -->
        <div>
            <div class="mt-4">
                <x-input-label for="contact_phone_number" :value="__('Phone Number')"/>
                <x-text-input id="contact_phone_number" class="block mt-1 w-full" type="number" name="contact_phone_number"
                              value="{{ $client->contact_phone_number }}" required autofocus autocomplete="contact_phone_number"/>
                <x-input-error :messages="$errors->get('contact_phone_number')" class="mt-2"/>
            </div>
        </div>

        <div class="text-xl font-semibold my-4 mt-4">Company Information</div>

        <!-- Company Name -->
        <div>
            <x-input-label for="company_name" :value="__('Company Name')"/>
            <x-text-input id="company_name" class="block mt-1 w-full" type="text" name="company_name"
                          value="{{ $client->company_name }}" required autofocus autocomplete="company_name"/>
            <x-input-error :messages="$errors->get('company_name')" class="mt-2"/>
        </div>

        <!-- VAT -->
        <div>
            <div class="mt-4">
                <x-input-label for="company_vat" :value="__('Vat')"/>
                <x-text-input id="company_vat" class="block mt-1 w-full" type="text" name="company_vat"
                              value="{{ $client->company_vat }}" required autofocus autocomplete="company_vat"/>
                <x-input-error :messages="$errors->get('company_vat')" class="mt-2"/>
            </div>
        </div>

        <!-- Company Address -->
        <div>
            <x-input-label for="company_address" :value="__('Company Address')"/>
            <x-text-input id="company_address" class="block mt-1 w-full" type="text" name="company_address"
                          value="{{ $client->company_address }}" required autofocus autocomplete="company_address"/>
            <x-input-error :messages="$errors->get('company_address')" class="mt-2"/>
        </div>

        <!-- Company City -->
        <div>
            <x-input-label for="company_city" :value="__('Company City')"/>
            <x-text-input id="company_city" class="block mt-1 w-full" type="text" name="company_city"
                          value="{{ $client->company_city }}" required autofocus autocomplete="company_city"/>
            <x-input-error :messages="$errors->get('company_city')" class="mt-2"/>
        </div>

        <!-- Company Zip -->
        <div>
            <x-input-label for="company_zip" :value="__('Company Zip')"/>
            <x-text-input id="company_zip" class="block mt-1 w-full" type="text" name="company_zip"
                          value="{{ $client->company_zip }}" required autofocus autocomplete="company_zip"/>
            <x-input-error :messages="$errors->get('company_zip')" class="mt-2"/>
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-4">
                {{ __('Update') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

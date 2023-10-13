<section>
    <header>

        <h2 class="text-lg font-medium text-gray-900">
            Get AI Generated Avatar
        </h2>

    </header>

    <br>
    

    <br>

    <form method="post" action="{{ route('profile.AIAvatar') }}" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="Avatar Description" value="Avatar Description" />
            <x-text-input id="avatar_description" name="avatar_description" type="text" class="mt-1 block w-full" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('avatar_description')" />
        </div>



        <div class="flex items-center gap-4 mt-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
        </div>

    </form>
</section>
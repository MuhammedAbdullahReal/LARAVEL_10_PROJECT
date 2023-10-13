<section>
    <header>

        <h2 class="text-lg font-medium text-gray-900">
            Choose Your Own Avatar
        </h2>

      

        
    </header>

<br>

    <br>

    <form method="post" action="{{ route('profile.avatar') }}" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div>
        
            <x-text-input id="avatar" name="avatar" type="file" class="mt-1 block w-full" :value="old('avatar', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('avatar')" />
        </div>

        <div class="flex items-center gap-4 mt-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
        </div>

    </form>
</section>
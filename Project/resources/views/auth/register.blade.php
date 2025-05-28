<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nombre')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Correo')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Birthdate -->
        <div class="mt-4">
            <x-input-label for="birthdate" :value="__('Fecha de Nacimiento')" />
            <x-text-input id="birthdate" class="block mt-1 w-full" type="date" name="birthdate" :value="old('birthdate')" required />
            <x-input-error :messages="$errors->get('birthdate')" class="mt-2" />
        </div>

        <!-- Robotics Level -->
        <div class="mt-4">
            <x-input-label for="robotics_level" :value="__('Del 1 al 5. ¿Qué tanto consideras que sabes de robótica?')" />
            <x-text-input id="robotics_level" class="block mt-1 w-full" type="number" name="robotics_level" min="1" max="5" :value="old('robotics_level')" required />
            <x-input-error :messages="$errors->get('robotics_level')" class="mt-2" />
        </div>

        <!-- Academic Level -->
        <div class="mt-4">
            <x-input-label for="academic_level" :value="__('Nivel Académico')" />
            <x-text-input id="academic_level" class="block mt-1 w-full" type="text" name="academic_level" :value="old('academic_level')" required />
            <x-input-error :messages="$errors->get('academic_level')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Contraseña')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmar contraseña')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                {{ __('¿Ya registrado anteriormente?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Registrate') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
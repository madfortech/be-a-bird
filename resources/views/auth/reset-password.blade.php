@extends('layouts.guest')
@section('title')
{{'Confirm Password'}}
@endsection
@section('content')

    <section class="py-20">
            
        <h2 class="text-4xl font-bold text-gray-900 dark:text-gray-100 text-center">
            {{ __('Confirm Password') }}
        </h2>

        
        <div class="w-3/4 mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-orange-300 shadow sm:rounded-lg">
                <div class="max-w-xl mx-auto">

                    <form method="POST" action="{{ route('password.store') }}">
                        @csrf

                        <!-- Password Reset Token -->
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                        <!-- Email Address -->
                        <div>
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" 
                            class="block mt-1 w-full read-only:bg-gray-800" type="email" name="email" 
                            
                             :value="old('email', $request->email)" required autofocus />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" />
                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                                type="password"
                                                name="password_confirmation" required />

                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button>
                                {{ __('Reset Password') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

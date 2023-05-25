@extends('layouts.guest')
@section('title')
{{'Register'}}
@endsection
@section('content')

        <section class="py-20">
            
            <h2 class="text-4xl font-bold text-gray-900 dark:text-gray-100 text-center">
              {{ __('Register') }}
            </h2>
         
        
            <div class="w-3/4	mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white dark:bg-orange-300 shadow sm:rounded-lg">
                    <div class="max-w-xl mx-auto">
                        <!-- create form -->

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                           
                            <div>
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" class="block mt-1 w-full" type="text" 
                                name="name" :value="old('name')" required autofocus 
                                placeholder="name"/>
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                            <!-- Name -->

                           
                            <div class="mt-4">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block mt-1 w-full" 
                                type="email" name="email" :value="old('email')" 
                                required
                                placeholder="mail@example.com" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div> 
                            <!-- Email Address -->

                            <!-- Password -->
                            <div class="mt-4">
                                <x-input-label for="password" :value="__('Password')" />

                                <x-text-input id="password" class="block mt-1 w-full"
                                                type="password"
                                                name="password"
                                                placeholder="password"
                                                required autocomplete="new-password" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Confirm Password -->
                            <div class="mt-4">
                                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                                type="password"
                                                name="password_confirmation" 
                                                placeholder="confirm paswword"
                                                required />

                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>

                             <!-- Allready register -->
                             <div class="mt-4">
                                <a class="underline text-sm text-gray-6900 dark:text-orange-900 hover:text-gray-900 dark:hover:text-orange-700 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a>
                            </div>
 
                            
                            <x-primary-button>
                                {{ __('Register') }}
                            </x-primary-button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
         
@endsection

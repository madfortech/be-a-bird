@extends('layouts.guest')
@section('title')
{{'Login'}}
@endsection
@section('content')

          <section class="py-20">
            
            <h2 class="text-4xl font-bold text-gray-900 dark:text-gray-100 text-center">
              {{ __('login') }}
            </h2>
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />
        
            <div class="w-3/4	mx-auto sm:px-6 lg:px-8 space-y-6">
              <div class="p-4 sm:p-8 bg-white dark:bg-orange-300 shadow sm:rounded-lg">
                <div class="max-w-xl mx-auto">
                  <!-- create form -->

                    <form method="POST" action="{{ route('login') }}">
                      @csrf

                      <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" 
                        type="email" name="email" :value="old('email')" required autofocus />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                      </div>
                      <!-- email -->

                     
                      <div class="mt-4">
                          <x-input-label for="password" :value="__('Password')" />

                          <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
                          <x-input-error :messages="$errors->get('password')" class="mt-2" />
                      </div>
                      <!-- Password -->

                      
                      <div class="block mt-4">
                          <label for="remember_me" class="inline-flex items-center">
                              <input id="remember_me" type="checkbox" 
                              class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                              <span class="ml-2 text-sm text-gray-600 dark:text-gray-800">{{ __('Remember me') }}</span>
                          </label>
                      </div>
                      <!-- Remember Me -->

                      <div class="block mt-4">
                        @if (Route::has('password.request'))
                          <a class="underline text-sm text-gray-50 dark:text-gray-800 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                              {{ __('Forgot your password?') }}
                          </a>
                        @endif
                      </div>
                      <!-- reset password -->


                      <x-primary-button class="text-white bg-orange-900 border-0 py-2 px-6 focus:outline-none hover:bg-orange-600 rounded text-lg mt-2">
                        {{ __('Log in') }}
                      </x-primary-button>

                    </form>
                </div>
              </div>
            </div>
          </section>

@endsection

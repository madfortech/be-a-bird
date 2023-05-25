@extends('layouts.guest')
@section('title')
{{'Forget Password'}}
@endsection
@section('content')

        <section class="py-20">
            
            <h2 class="text-4xl font-bold text-gray-900 dark:text-gray-100 text-center">
              {{ __('Forget Password') }}
            </h2>
            <div class="mb-4 text-xl text-gray-600 dark:text-gray-50 text-center py-5 ">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>

            <!-- Session Status -->
            <div class="mb-4 text-xl  text-gray-50 dark:text-gray-50 text-center py-5 ">
                <x-auth-session-status class="mb-4" :status="session('status')" />
            </div>

            <div class="w-3/4 mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white dark:bg-orange-300 shadow sm:rounded-lg">
                    <div class="max-w-xl mx-auto">

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <!-- Email Address -->
                            <div>
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block mt-1 w-full" 
                                placeholder="mail@example.com"
                                type="email" name="email" :value="old('email')" required autofocus />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-primary-button>
                                    {{ __('Email Password Reset Link') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    
@endsection

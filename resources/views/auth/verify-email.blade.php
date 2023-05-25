@extends('layouts.guest')
@section('title')
{{'verification-link-sent'}}
@endsection
@section('content')

    <section class="py-20 md:w-2/5  mx-auto">
            
        <h2 class="text-4xl font-bold text-gray-900 dark:text-gray-100 text-center">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </h2>
     

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400
            dark:bg-gray-900 text-center">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div class="w-3/4 mx-auto sm:px-6 lg:px-8 space-y-6 mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}" 
            class="mx-auto">
                @csrf

                <div>
                    <x-primary-button>
                        {{ __('Resend Verification Email') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </section>
@endsection

@extends('layouts.guest')
@section('title')
{{'Welcome'}}
@endsection
@section('content')

@php
    $privacy = \App\Models\Privacy::find(1);
@endphp

    <nav class="p-5 bg-orange-600 fixed left-0 right-0">
      <div class="container mx-auto">
          <ul class="flex flex-wrap-reverse">
            <li class=" bg-orange-500 text-xl p-3 uppercase text-white">
              <a href="{{('/') }}">be a bird</a>
            </li>
            <div class="flex grow justify-end space-x-2 p-3 text-white text-xl capitalize">
            @if (Route::has('login'))
                @auth
                    @role('super-admin')
                        <li>
                            <a href="{{ route('admin.dashboard') }}" class="hover:bg-orange-700 p-3 active:bg-orange-600">
                                Dashboard
                            </a>
                        </li>
                        <!-- @else
                        <li>
                            <a href="{{ route('user.dashboard') }}" class="hover:bg-orange-700 p-3 active:bg-orange-600">
                                Dashboard
                            </a>
                        </li> -->
                    @endrole
                    @else
                    <li>
                        <a href="{{ route('login') }}" class="hover:bg-orange-700 p-3 active:bg-orange-600">
                            Login
                        </a>
                    </li>
                    <!-- @if (Route::has('register'))
                    <li>
                        <a href="{{ route('register') }}" class="hover:bg-orange-700 p-3 active:bg-orange-600">
                            Register
                        </a>
                    </li>
                    @endif -->
                @endauth
            @endif
                         
            </div>
          </ul>
      </div>
    </nav>

    <header class="flex flex-col  justify-center p-20">
        @foreach ($posts as $post)
        <div class="w-7/12 min-w-full md:min-w-0 mx-auto my-7 bg-gray-300 border-2 rounded-lg">
            
                <article class="prose lg:prose-xl p-5 px-4 mx-auto">
                    <div>
                        <iframe 
                            src="{{ $post->getFirstMediaUrl('media') }}" 
                            frameborder="0" 
                            class="w-full h-96"
                            allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen>
                        </iframe>
                    </div>
                    <h1 class="pt-5">
                        {{ $post->title }}
                    </h1>
                    <p>{{ $post->description }}</p>
                    @role('super-admin')
                    <p>
                        <a href="{{ route('posts.edit', $post->id) }}">
                            edit
                        </a>
                        <form action="{{ route('posts.destroy', $post->id) }}" 
                            method="POST" 
                            onsubmit="return confirm('{{ trans('global.areYouSure') }}');" 
                            style="display: inline-block;">
                            
                            @method('delete')
                            @csrf
                            <x-primary-button>{{ __('Delete Post') }}</x-primary-button>
                        </form>
                    </p>
                    @endrole
                </article>
        </div>
        @endforeach
    </header>

    <footer class="flex flex-row  justify-center p-25 bg-orange-300">
        <div class="w-7/12 min-w-full md:min-w-0 mx-auto my-7 border-2 rounded-lg">
            
            <a href="{{ route('privacy.index') }}" class=" active:bg-gray-600">
                privacy policy
            </a>
            <a href="{{ route('terms.index') }}" class=" active:bg-gray-600">
                terms conditions
            </a>
            <a>
                copyright 2023
            </a>
        </div>
    </footer>

@endsection
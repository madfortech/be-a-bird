<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-800 leading-tight">
            {{ __('Edit post') }}
        </h2>
    </x-slot>

        <section>
            <header class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <p class="mt-1 text-sm">
                    @if(session('success'))
                        <div class="text-green-600">
                            {{ session('success') }}
                        </div>
                    @endif
                </p>
            </header>
        
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 mt-4">
                <div class="p-4 sm:p-8 dark:bg-orange-800 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        <!-- create form -->
                        <form method="POST" action="{{ route("posts.update", [$post->id]) }}" class="mt-6 space-y-6">
                            @method('PUT')    
                            @csrf
                            <div>
                                <x-input-label  for="title" :value="__('Title')"/>
                                <x-text-input id="title" name="title" type="text" 
                                class="mt-1 block w-full" value="{{ old('title', $post->title) }}"/>
                                
                            </div>
                            <!-- title -->
                            <div>
                                <x-input-label for="description" :value="__('Description')"/>
                                <textarea name="description" 
                                class="block mt-1 w-full"
                                id="description" cols="30" rows="3">
                                {{ old('description', $post->description) }}
                                </textarea>
                            </div>
                            <!-- description -->
                            
                            <x-primary-button>{{ __('Update Post') }}</x-primary-button>
                            
                        </form>
                    </div>
                </div>
            </div>

        </section>
      
</x-app-layout>

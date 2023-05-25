<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-800 leading-tight">
            {{ __('Edit terms conditions') }}
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
                        <form method="POST" action="{{ route("terms.update", [$term->id]) }}" class="mt-6 space-y-6">
                            @method('PUT')    
                            @csrf
                            <div>
                                <x-input-label  for="title" :value="__('Title')"/>
                                <x-text-input id="title" name="title" type="text" 
                                class="mt-1 block w-full" value="{{ old('title', $term->title) }}"/>
                                
                            </div>
                            <!-- title -->
                            <div>
                                <x-input-label for="description" :value="__('Description')"/>
                                <textarea name="description" 
                                class="block mt-1 w-full"
                                id="description" cols="30" rows="3">
                                {{ old('description', $term->description) }}
                                </textarea>
                                 
                            </div>
                            <!-- description -->
                            
                            <x-primary-button>{{ __('Update Terms Condition') }}</x-primary-button>
                            
                        </form>
                    </div>
                </div>
            </div>

        </section>
      
</x-app-layout>

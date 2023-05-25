<x-app-layout>
    <x-slot name="header" class="p-40">
       
    </x-slot>

        <section  class="p-20">
            <header class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-800 leading-tight">
                    {{ __('Add new post') }}
                </h2>
            </header>
        
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 mt-4">
                <div class="p-4 sm:p-8 dark:bg-orange-800 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        <!-- create form -->
                        <form   
                            method="POST" 
                            action="{{ route('posts.store') }}" 
                            class="mt-6 space-y-6"
                            enctype="multipart/form-data">
                            @csrf
                            <div>
                                <x-input-label  for="title" :value="__('Title')"/>
                                <x-text-input id="title" name="title" type="text" 
                                placeholder="title"
                                class="mt-1 block w-full"/>
                                <x-input-error :messages="$errors->get('title')"
                                class="mt-2" />
                            </div>
                            <!-- title -->

                            <div>
                                <x-input-label  for="media" :value="__('Media')"/>
                                <x-text-input id="media" name="media" type="file" 
                                class="mt-1 block w-full"/>
                                <x-input-error :messages="$errors->get('media')"
                                class="mt-2" />
                            </div>
                            <!-- media -->

                            <div>
                                <x-input-label for="description" :value="__('Description')"/>
                                <textarea name="description" 
                                class="block mt-1 w-full"
                                id="description" cols="30" rows="3"
                                placeholder="description here">

                                </textarea>
                                <x-input-error :messages="$errors->get('description')" class="mt-2" />
                            </div>
                            <!-- description -->
                            
                            <x-primary-button>{{ __('Post') }}</x-primary-button>
                            
                        </form>
                    </div>
                </div>
            </div>

        </section>
      
</x-app-layout>

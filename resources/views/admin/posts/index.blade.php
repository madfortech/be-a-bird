<x-app-layout>
    <x-slot name="header">
        
    </x-slot>

    <section  class="p-20">
        <header class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-800 leading-tight">
                {{ __('View all post') }}
            </h2>
        </header>

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <table class="table-auto border-separate border-spacing-2 border border-slate-500
                                md:border-spacing-4">
                                <thead>
                                    <tr class="border border-slate-800">
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Content</th>
                                        <th>Created_at</th>
                                        <th>Updated_at</th>
                                        <th>Deleted_at</th>
                                    </tr>
                                </thead>
                                @foreach ($posts as $post)
                                <tbody>
                                    <tr>
                                        <td>{{ $post->id }}</td>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->description }}</td>
                                        <td>{{ $post->created_at }}</td>
                                        <td>{{ $post->updated_at }}</td>
                                        <td>{{ $post->deleted_at }}</td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</x-app-layout>

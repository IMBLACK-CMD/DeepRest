<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                      All Posts
                    </button>
                    <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                      <a href="{{route('posts.create')}}">Create a Post</a> 
                    </button>
                    <div class="bg-gray-100 overflow-hidden my-4 shadow-sm sm:rounded-lg">
                    <table class="table-fixed">
                        <thead>
                            <tr>
                            <th class="w-1/2 px-4 py-2">Title</th>
                            <th class="w-1/4 px-4 py-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                            <tr>
                            <td class="border px-4 py-2">{{$post->title}}</td>
                            <td class="border px-4 py-2">Edit | update | delete</td>
                            </tr>
                        @endforeach
                            
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

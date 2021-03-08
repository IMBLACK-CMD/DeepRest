<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          CREATE Posts
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="bg-gray-100 overflow-hidden my-4 shadow-sm sm:rounded-lg">
                    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 my-4 rounded-lg">
            <form action="{{ route('posts.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    
                <label class="text-gray-600 font-light">Title</label>
                <input type='text' name='title' placeholder="Enter your post title" class="w-full mt-2 mb-6 px-6 py-3 border rounded-lg text-lg text-gray-700 focus:outline-none" 
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('title') border-red-500 @enderror" value="{{old('title')}}">
                    @error('title')
                        <div class="text-red-500 mt-2 text-sm">
                            {{$message}}
                        </div>
                    @enderror
                    <label class="text-gray-600 font-light">Create post</label>
                    <textarea name='description' class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" rows="4" @error('description') border-red-500 @enderror" value="{{old('description')}}"></textarea>
                    @error('description')
                        <div class="text-red-500 mt-2 text-sm">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">
                    submit
                
                </button>
            
            </form>
        </div>
    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@extends('admin.layout.master')
@section('main-content')

<main class="h-full pb-16 overflow-y-auto">
    <br>
    <form action="{{route('admin.news.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="container px-6 mx-auto grid">
        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Title</span>
            <input type="title" name="title" id="Title" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            placeholder="Title">
        <br>
        </label>
        {{-- <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Slug</span>
            <input type="slug" name="slug" id="Slug" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            placeholder="Slug">
        <br>
        </label> --}}
        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Description</span>
            <textarea name="description" id="Description" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            placeholder="Description" rows="10"></textarea>

        <br>
        </label>
        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Image</span>
            <input type="file" name="image" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"  id="Image" placeholder="Image">
        </label>
        <br>
        <button type="submit" class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
        Submit
        </button>
        <br>
        <button  type="reset" class=" btn btn-primary center flex items-center justify-between  px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple ">
            <!-- Your content goes here -->
        Cancel
        </button>
    </div>
    </form>

  </main>

@endsection

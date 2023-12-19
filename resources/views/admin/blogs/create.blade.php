@extends('admin.layout.master')
@section('main-content')

<main class="h-full pb-16 overflow-y-auto">
    <br>
    <form action="{{route('admin.blog.store')}}" method="post" enctype="multipart/form-data">
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
            <span class="text-gray-700 dark:text-gray-400">Thumbnail Image</span>
            <input type="file" name="thumbnail_image" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"  id="thumbnail_image"
            placeholder="Thumbnail Image">
        <br>
        </label>
        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Cover Image</span>
            <input type="file" name="cover_image" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"  id="cover_image"
            placeholder="Cover Image">
        <br>
        </label>
        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Short Description</span>
            <input type="short_description" name="short_description" id="short_description" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            placeholder="Short Description">
        <br>
        </label>
        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Descrpition</span>
            <textarea type="description" name="description" id="description" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            placeholder="Description"></textarea>
        <br>
        </label>
        {{-- <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Status</span>
            <input type="status" name="status" id="status" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            placeholder="Status">
        <br>
        </label> --}}
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

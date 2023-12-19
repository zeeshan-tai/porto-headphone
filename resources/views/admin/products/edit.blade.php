@extends('admin.layout.master')
@section('main-content')

<main class="h-full pb-16 overflow-y-auto">
    <br>
    <form action="{{route('admin.product.update', $product->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="container px-6 mx-auto grid">
        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Title</span>
            <input type="title" name="title" id="Title" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            placeholder="Title" value="{{ $product->title }}">
        <br>
        </label>
        {{-- <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Slug</span>
            <input type="slug" name="slug" id="Slug" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            placeholder="Slug" value="{{ $product->slug }}">
        <br>
        </label> --}}
        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Short Description</span>
            <input type="short_description" name="short_description" id="short_description" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            placeholder="Short Description" value="{{ $product->short_descripion }}">
        <br>
        </label>
        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Price</span>
            <input type="price" name="price" id="price" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            placeholder="Price" value="{{ $product->price }}">
        <br>
        </label>
        {{-- <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Category Id</span>
                <select class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                    <option>Toyato</option>
                    <option>Honda</option>
                    <option>Ferari</option>
                    <option>Shahmeer</option>
                </select>
        <br>
        </label>
        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Brand Id</span>
                <select class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                    <option>Toyato</option>
                    <option>Honda</option>
                    <option>Ferari</option>
                    <option>Shahmeer</option>
                </select>
        <br>
        </label> --}}
        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Thumbnail</span>
            <input type="file" name="thumbnail" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"  id="thumbnail"
            placeholder="Thumbnail" value="{{ $product->thumbnail }}">
        <br>
        </label>
        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Status</span>
            <select name="status" id="status" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            placeholder="Status">
            <option value="0">{{ $product->status == 0 ? 'selected' : '' }} Denied</option>
            <option value="1">{{ $product->status == 1 ? 'selected' : '' }} Approved</option>
            </select>
        <br>
        </label>
        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Descrpition</span>
            <textarea type="description" name="description" id="description" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            placeholder="Description" value="{{ $product->description }}"></textarea>
        <br>
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

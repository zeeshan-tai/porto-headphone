@extends('admin.layout.master')
@section('main-content')

<main class="h-full pb-16 overflow-y-auto">
    <br>
    <form action="{{route('admin.faq.update', $faqs->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="container px-6 mx-auto grid">
        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Question</span>
            <input type="question" name="question" id="Question" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            placeholder="Question">
        <br>
        </label>
        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Answer</span>
            <textarea type="answwer" name="answwer" id="Answwer" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            placeholder="Answer"></textarea>
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
        Update
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

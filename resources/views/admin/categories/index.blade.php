@extends('admin.layout.master')
@section('main-content')

<main class="h-full overflow-y-auto">
<div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
    Category
    </h2>

    <!-- Cards -->
    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
    <!-- Card -->
        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
            <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                    d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                    </path>
                </svg>
            </div>
        <div>
            <a href="{{ route('admin.category.create') }}" class="btn btn-xs btn-info pull-right">Add</a>
        </div>
    </div>
    <!-- Card -->


    </div>

    <!-- New Table -->
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
    <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
        <thead>
            <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                <th class="px-4 py-3">Title</th>
                {{-- <th class="px-4 py-3">Slug</th> --}}
                <th class="px-4 py-3">Image</th>
                <th class="px-4 py-3">Status</th>
                <th class="px-4 py-3">Actions</th>
            </tr>
        </thead>
        <tbody
            class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">

         @foreach ($categories as $category)
        <tr class="text-gray-700 dark:text-gray-400">
            <td>{{ $category->title }}</td>
            {{-- <td>{{ $category->slug }}</td> --}}
            <td><img src="{{asset('uploads/').'/'.$category->image}}" alt="" height='100' weight='100'></td>
            <td class="px-4 py-3 text-xs">
                @if ($category->status==1)
                    <button
                    class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                    Approved
                    </button>
                @else
                    <button
                    class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700">
                    Denied
                    </button>
                @endif
            </td>

            <td class="px-4 py-3">
                <div class="flex items-center space-x-4 text-sm">

                  <form action="{{route('admin.category.edit', $category->id)}}" method="post">
                    @csrf
                    @method('GET')
                  <button
                    class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                    aria-label="Edit"
                  >
                    <svg
                      class="w-5 h-5"
                      aria-hidden="true"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                    >
                      <path
                        d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"
                      ></path>
                    </svg>
                  </button>
                  </form>
                  <form action="{{route('admin.category.destroy', $category->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                  <button
                    class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                    aria-label="Delete"
                  >
                    <svg
                      class="w-5 h-5"
                      aria-hidden="true"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                        clip-rule="evenodd"
                      ></path>
                    </svg>
                  </button>
                  </form>
                </div>
              </td>
        </tr>
        </tbody>
        @endforeach
        </table>
    </div>
    <div
        class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800"
    >
        <span class="flex items-center col-span-3">
        Showing 21-30 of 100
        </span>
        <span class="col-span-2"></span>
        <!-- Pagination -->
        <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
        <nav aria-label="Table navigation">
            <ul class="inline-flex items-center">
            <li>
                <button
                class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                aria-label="Previous"
                >
                <svg
                    aria-hidden="true"
                    class="w-4 h-4 fill-current"
                    viewBox="0 0 20 20"
                >
                    <path
                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                    clip-rule="evenodd"
                    fill-rule="evenodd"
                    ></path>
                </svg>
                </button>
            </li>
            <li>
                <button
                class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                >
                1
                </button>
            </li>
            <li>
                <button
                class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                >
                2
                </button>
            </li>
            <li>
                <button
                class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple"
                >
                3
                </button>
            </li>
            <li>
                <button
                class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                >
                4
                </button>
            </li>
            <li>
                <span class="px-3 py-1">...</span>
            </li>
            <li>
                <button
                class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                >
                8
                </button>
            </li>
            <li>
                <button
                class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                >
                9
                </button>
            </li>
            <li>
                <button
                class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                aria-label="Next"
                >
                <svg
                    class="w-4 h-4 fill-current"
                    aria-hidden="true"
                    viewBox="0 0 20 20"
                >
                    <path
                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                    clip-rule="evenodd"
                    fill-rule="evenodd"
                    ></path>
                </svg>
                </button>
            </li>
            </ul>
        </nav>
        </span>
    </div>
    </div>


</div>
</main>



@endsection

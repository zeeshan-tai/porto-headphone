<aside class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0">
    <div class="py-4 text-gray-500 dark:text-gray-400">
      <a
        class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200"
        href="{{ route('admin.dashboard')}}"
      >
        Porto Headphone
      </a>
      <ul class="mt-6">
        <li class="relative px-6 py-3">
          <span
            class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
            aria-hidden="true"
          ></span>
          <a
            class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
            href="{{ route('admin.dashboard')}}"
          >
            <svg
              class="w-5 h-5"
              aria-hidden="true"
              fill="none"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
              ></path>
            </svg>
            <span class="ml-4">Dashboard</span>
          </a>
        </li>
      </ul>
      <ul>
        <li class="relative px-6 py-3">
          <a
            class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
            href="{{ route('admin.about_us.index') }}">
            <span class="ml-4">About Us</span>
          </a>
        </li>

        <li class="relative px-6 py-3">
            <a
              class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
              href="{{ route('admin.site_setting.index') }}">
              <span class="ml-4">Site Setting</span>
            </a>
          </li>

        <li class="relative px-6 py-3">
            <a
              class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
              href="{{ route('admin.category.index') }}">
              <span class="ml-4">Category</span>
            </a>
        </li>

        <li class="relative px-6 py-3">
            <a
              class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
              href="{{ route('admin.sub_category.index') }}">
              <span class="ml-4">Sub Category</span>
            </a>
        </li>

        <li class="relative px-6 py-3">
            <a
              class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
              href="{{ route('admin.product.index') }}">
              <span class="ml-4">Product</span>
            </a>
        </li>

        <li class="relative px-6 py-3">
            <a
              class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
              href="{{ route('admin.blog.index') }}">
              <span class="ml-4">Blog</span>
            </a>
        </li>

        {{-- <li class="relative px-6 py-3">
            <a
              class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
              href="{{ route('admin.review.index') }}">
              <span class="ml-4">Review</span>
            </a>
        </li> --}}

        <li class="relative px-6 py-3">
            <a
              class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
              href="{{ route('admin.banner.index') }}">
              <span class="ml-4">Banner</span>
            </a>
        </li>

        <li class="relative px-6 py-3">
            <a
              class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
              href="{{ route('admin.brand.index') }}">
              <span class="ml-4">Brand</span>
            </a>
        </li>

        {{-- <li class="relative px-6 py-3">
            <a
              class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
              href="{{ route('admin.brand_image.index') }}">
              <span class="ml-4">Brand Image</span>
            </a>
        </li> --}}

        <li class="relative px-6 py-3">
            <a
              class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
              href="{{ route('admin.comment.index') }}">
              <span class="ml-4">Comment</span>
            </a>
        </li>

        <li class="relative px-6 py-3">
            <a
              class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
              href="{{ route('admin.faq.index') }}">
              <span class="ml-4">Faqs</span>
            </a>
        </li>


        <li class="relative px-6 py-3">
            <a
              class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
              href="{{ route('admin.contact') }}">
              <span class="ml-4">Contact Query</span>
            </a>
        </li>

        {{-- <li class="relative px-6 py-3">
            <a
              class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
              href="{{ route('admin.newsletter') }}">
              <span class="ml-4">Newsletter</span>
            </a>
        </li> --}}

        <li class="relative px-6 py-3">
            <a
              class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
              href="{{ route('admin.news.index') }}">
              <span class="ml-4">News</span>
            </a>
        </li>

        <li class="relative px-6 py-3">
            <a
              class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
              href="{{ route('admin.page.index') }}">
              <span class="ml-4">Page</span>
            </a>
        </li>

      </ul>
      <div class="px-6 my-6">
        <button
          class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
        >
          Create account
          <span class="ml-2" aria-hidden="true">+</span>
        </button>
      </div>
    </div>
  </aside>

@extends('front/layouts/app')
@section('title', 'The Marriage Park - MyBlog')
@section('content')

<section class="bg-gray-100 dark:bg-gray-800 py-12">
    <div class="max-w-screen-xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-8 dark:text-white">Related Articles</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Article 1 -->
            <div class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg overflow-hidden shadow-md">
                <img src="https://via.placeholder.com/300x200" alt="Article Image" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2 dark:text-white">Article Title 1</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">A short description of the article goes here. It gives a brief overview of the content.</p>
                    <a href="#" class="inline-flex items-center text-red-500 hover:underline dark:text-red-400">
                        Read More
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
            {{-- <!-- Article 2 -->
            <div class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg overflow-hidden shadow-md">
                <img src="https://via.placeholder.com/300x200" alt="Article Image" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2 dark:text-white">Article Title 2</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">A short description of the article goes here. It gives a brief overview of the content.</p>
                    <a href="#" class="inline-flex items-center text-red-500 hover:underline dark:text-red-400">
                        Read More
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <!-- Article 3 -->
            <div class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg overflow-hidden shadow-md">
                <img src="https://via.placeholder.com/300x200" alt="Article Image" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2 dark:text-white">Article Title 3</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">A short description of the article goes here. It gives a brief overview of the content.</p>
                    <a href="#" class="inline-flex items-center text-red-500 hover:underline dark:text-red-400">
                        Read More
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <!-- Article 4 -->
            <div class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg overflow-hidden shadow-md">
                <img src="https://via.placeholder.com/300x200" alt="Article Image" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2 dark:text-white">Article Title 4</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">A short description of the article goes here. It gives a brief overview of the content.</p>
                    <a href="#" class="inline-flex items-center text-red-500 hover:underline dark:text-red-400">
                        Read More
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <!-- Article 4 -->
            <div class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg overflow-hidden shadow-md">
                <img src="https://via.placeholder.com/300x200" alt="Article Image" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2 dark:text-white">Article Title 4</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">A short description of the article goes here. It gives a brief overview of the content.</p>
                    <a href="#" class="inline-flex items-center text-red-500 hover:underline dark:text-red-400">
                        Read More
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <!-- Article 4 -->
            <div class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg overflow-hidden shadow-md">
                <img src="https://via.placeholder.com/300x200" alt="Article Image" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2 dark:text-white">Article Title 4</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">A short description of the article goes here. It gives a brief overview of the content.</p>
                    <a href="#" class="inline-flex items-center text-red-500 hover:underline dark:text-red-400">
                        Read More
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <!-- Article 4 -->
            <div class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg overflow-hidden shadow-md">
                <img src="https://via.placeholder.com/300x200" alt="Article Image" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2 dark:text-white">Article Title 4</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">A short description of the article goes here. It gives a brief overview of the content.</p>
                    <a href="#" class="inline-flex items-center text-red-500 hover:underline dark:text-red-400">
                        Read More
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div> --}}
        </div>
    </div>
</section>


@push('after-scripts')    
@endpush
@endsection
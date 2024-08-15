<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('before-styles')
    <style>
        /* CSS kustom untuk smooth scrolling */
        html {
            scroll-behavior: smooth;
        }
    </style>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,400;0,700;1,700&display=swap" rel="stylesheet">
    @stack('after-styles')
    <title>
        @yield('title')
    </title>
</head>

<body>
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-centers space-x-3 rtl:space-x-reverse">
                <img style="height: 40px" src="{{ asset('assets/logo/themarriagepark.png') }}" class="h-8"
                    alt="Flowbite Logo" />
            </a>
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="/"
                            class="block py-2 px-3 text-gray-900 rounded md:p-0 {{ Request::is('/')? 'text-dangerColor md:text-dangerColor' : 'md:bg-transparent md:text-gray-500' }}"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="/Profiles"
                            class="block py-2 px-3 text-gray-900 rounded md:p-0 {{ Request::is('Profiles')? 'text-dangerColor md:text-dangerColor' : 'md:bg-transparent md:text-gray-500' }}"
                            >Profile</a>      
                       
                    </li>
                    <li>
                        <a href="/Events"
                            class="block py-2 px-3 text-gray-900 rounded md:p-0 {{ Request::is('Events')? 'text-dangerColor md:text-dangerColor' : 'md:bg-transparent md:text-gray-500' }}"
                            >Event</a>   
                    </li>
                    <li>
                        <a href="/Blog"
                            class="block py-2 px-3 text-gray-900 rounded md:p-0 {{ Request::is('Blog')? 'text-dangerColor md:text-dangerColor' : 'md:bg-transparent md:text-gray-500' }}"
                            >Blog</a>   
                    </li>
                    <li>
                        <a href="/BookSession"
                            class="block py-2 px-3 text-gray-900 rounded md:p-0 {{ Request::is('BookSession')? 'text-dangerColor md:text-dangerColor' : 'md:bg-transparent md:text-gray-500' }}"
                            >Book Your Session</a>   
                    </li>
                    <li>
                        <a href="/Community"
                            class="block py-2 px-3 text-gray-900 rounded md:p-0 {{ Request::is('Community')? 'text-dangerColor md:text-dangerColor' : 'md:bg-transparent md:text-gray-500' }}"
                            >Community</a> 
                    </li>


                </ul>
            </div>
        </div>
    </nav>

    <div id="preloader" class="fixed inset-0 flex items-center justify-center bg-white z-50">
        <div class="animate-spin rounded-full h-32 w-32 border-t-4 border-customLightYellow"></div>
    </div>

    @yield('content')

    <section class="fixed bottom-4 right-4">
        <a href="https://wa.me/6281234567890" target="_blank" class="flex items-center px-4 py-2 bg-white border border-gray-300 rounded-full shadow-lg hover:bg-gray-100">
            <img src="https://upload.wikimedia.org/wikipedia/commons/5/5e/WhatsApp_icon.png" alt="WhatsApp" class="w-6 h-6 mr-2">
            <span class="font-semibold">Hubungi Admin</span>
        </a>
    </section>

    <footer class="bg-gray-800 dark:bg-gray-800">
        <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
            <span class="text-sm text-white sm:text-center dark:text-gray-400">Copyright©2024 <a
                    href="https://flowbite.com/" class="hover:underline">The Marriage Park</a>
            </span>
            <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-white dark:text-gray-400 sm:mt-0">
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Twitter</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Instagram</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Tiktok</a>
                </li>
            </ul>
        </div>
    </footer>

    @stack('before-scripts')
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <script>
        window.addEventListener('load', function() {
            document.getElementById('preloader').style.display = 'none';
        });
    </script>
    @stack('after-scripts')
</body>

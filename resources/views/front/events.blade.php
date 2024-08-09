@extends('front/layouts/app')
@section('title', 'The Marriage Park - Events')
@section('content')

    <section class="relative bg-cover bg-center min-h-[50vh] md:min-h-screen w-full"
        style="background-image: url('{{ asset('assets/img/maps.svg') }}');">
    </section>


    <!-- Section dengan Tombol -->
    <section class="flex justify-center items-center min-h-[20vh]">
        <a href="#"
            class="inline-flex bg-redButton items-center justify-center px-5 py-2 text-bold font-poppins font-base text-center text-white rounded-lg hover:bg-red-300 focus:ring-4 focus:ring-gray-100 dark:text-white"
            id="openModalBtn">
            Start Your Journey
        </a>
    </section>


    <section class="bg-white dark:bg-gray-900 mb-7 mt-8 lg:mt-16 lg:mb-14">
        <div class="flex flex-col items-center justify-center text-center">
            <h1
                class="mb-2 text-2xl font-playfair font-bold tracking-tight leading-none md:mb-4 md:text-4xl lg:mb-5 xl:text-4xl dark:text-white">
                See Our Upcoming Events
            </h1>

            <p
                class="font-poppins text-sm font-normal tracking-tight leading-none md:mb-4 md:text-lg lg:mb-5 xl:text-xl dark:text-white">
                Nantikan selalu event-event kami
            </p>
        </div>
        <div class="py-2 lg:py-4 mx-auto max-w-screen-xl px-4">
            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('assets/img/bg-coaching.svg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('assets/img/bg-coaching.svg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('assets/img/bg-coaching.svg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('assets/img/bg-coaching.svg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('assets/img/bg-coaching.svg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                </div>
                {{-- <!-- Slider indicators -->
                <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                        data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                        data-carousel-slide-to="2"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                        data-carousel-slide-to="3"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                        data-carousel-slide-to="4"></button>
                </div> --}}
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>

        </div>
    </section>

    <section class="bg-grey dark:bg-gray-900 mb- flex items-center justify-center ">
        <div class="text-center max-w-screen-xl px-4 py-6">
            <h1 class="mb-4 text-4xl font-playfair font-bold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
                Are you ready for married life?
            </h1>
            <p class="mb-6 font-poppins font-base text-black md:text-lg lg:text-xl dark:text-black">
                A tightly curated online journey to a better self and a better married life
            </p>
            <a href="#"
                class="inline-flex bg-redButton items-center justify-center px-5 py-2 font-poppins font-semibold text-center text-white rounded-lg hover:bg-red-300 focus:ring-4 focus:ring-gray-100 dark:text-white">
                Start Here
            </a>
        </div>
    </section>
    


    <!-- Modal -->
    <div id="myModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center" hidden>
        <div class="w-full max-w-md mx-auto">
            <div class="relative bg-white shadow-lg rounded-lg overflow-hidden">
                <!-- Carousel Slides -->
                <div id="onboardingCarousel" class="relative h-72">
                    <div
                        class="carousel-item w-full h-full bg-white text-black flex flex-col items-center justify-center text-center p-6">
                        <h2 class="text-xl font-bold mb-2">Level 1</h2>
                        <p class="mb-4">Keep in touch with your friends and family with our messaging features.</p>
                        <a class="mb-10" href="#">
                            <img src="{{ asset('assets/img/pin-point.svg') }}" alt="Onboarding Image 2"
                                class="w-24 h-24 rounded-full">
                        </a>
                    </div>
                    <div
                        class="carousel-item w-full h-full bg-white text-black flex flex-col items-center justify-center text-center p-6">
                        <h2 class="text-xl font-bold mb-2">Level 2</h2>
                        <p class="mb-4">Keep in touch with your friends and family with our messaging features.</p>
                        <a class="mb-10" href="#">
                            <img src="{{ asset('assets/img/pin-point-2.svg') }}" alt="Onboarding Image 2"
                                class="w-24 h-24 rounded-full">
                        </a>
                    </div>
                    <div
                        class="carousel-item w-full h-full bg-white text-black flex flex-col items-center justify-center text-center p-6">
                        <h2 class="text-xl font-bold mb-2">Level 3</h2>
                        <p class="mb-4">Keep in touch with your friends and family with our messaging features.</p>
                        <a class="mb-10" href="#">
                            <img src="{{ asset('assets/img/pin-point-3.svg') }}" alt="Onboarding Image 2"
                                class="w-24 h-24 rounded-full">
                        </a>
                    </div>
                </div>

                <!-- Carousel Controls -->
                <div class="absolute inset-x-0 bottom-0 mb-4 flex justify-between items-center px-4">
                    <button id="prevBtn"
                        class="px-3 py-1 bg-gray-700 text-white rounded-lg hover:bg-gray-600">&#9664;</button>
                    <button id="closeModalBtn" class="text-black">
                        Close
                    </button>
                    <button id="nextBtn"
                        class="px-3 py-1 bg-gray-700 text-white rounded-lg hover:bg-gray-600">&#9654;</button>
                </div>

                {{-- <!-- Dots Indicator -->
            <div class="absolute bottom-0 w-full mt-10 flex justify-center space-x-2">
                <span class="dot w-3 h-3 bg-gray-400 rounded-full cursor-pointer"></span>
                <span class="dot w-3 h-3 bg-gray-400 rounded-full cursor-pointer"></span>
                <span class="dot w-3 h-3 bg-gray-400 rounded-full cursor-pointer"></span>
            </div> --}}
            </div>
        </div>
    </div>



    @push('after-scripts')
        <!-- Script untuk mengontrol modal -->
        <script>
            const modal = document.getElementById('myModal');
            const openModalBtn = document.getElementById('openModalBtn');
            const closeModalBtn = document.getElementById('closeModalBtn');

            openModalBtn.addEventListener('click', function(event) {
                event.preventDefault();
                modal.classList.remove('hidden');
            });

            closeModalBtn.addEventListener('click', function() {
                modal.classList.add('hidden');
            });

            window.addEventListener('click', function(event) {
                if (event.target === modal) {
                    modal.classList.add('hidden');
                }
            });
        </script>
        <script>
            const slides = document.querySelectorAll('.carousel-item');
            const dots = document.querySelectorAll('.dot');
            let currentSlide = 0;

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle('hidden', i !== index);
                });
                dots.forEach((dot, i) => {
                    dot.classList.toggle('bg-gray-400', i !== index);
                    dot.classList.toggle('bg-gray-700', i === index);
                });
            }

            document.getElementById('nextBtn').addEventListener('click', function() {
                currentSlide = (currentSlide + 1) % slides.length;
                showSlide(currentSlide);
            });

            document.getElementById('prevBtn').addEventListener('click', function() {
                currentSlide = (currentSlide - 1 + slides.length) % slides.length;
                showSlide(currentSlide);
            });

            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    currentSlide = index;
                    showSlide(currentSlide);
                });
            });

            // Initialize the first slide
            showSlide(currentSlide);
        </script>
    @endpush
@endsection

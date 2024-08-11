@extends('front/layouts/app')
@section('title', 'The Marriage Park - Profiles')
@section('content')

    <!-- Section 1 -->
    <section class="relative bg-cover bg-fixed bg-center min-h-screen md:h-screen w-full"
        style="background-image: url('{{ asset('assets/bg/bg-profile.svg') }}');">
        <div class="grid max-w-screen-xl px-4 py-4 mx-auto lg:gap-8 xl:gap-0 lg:py-8 lg:grid-cols-12">
            <div class="col-span-12 flex justify-center items-center">
                <div
                    class="bg-white rounded-lg shadow-lg p-8 grid grid-cols-1 md:grid-cols-2 items-center md:max-w-4xl outline outline-2 outline-gray-400">
                    <div class="flex justify-center md:justify-center lg:justify-center xl:justify-center">
                        <img class="w-64 h-96 md:h-80 md:w-80 xl:h-4/5" src="{{ asset('assets/img/coach-irvan.png') }}"
                            alt="Profile Picture">
                    </div>
                    <div class="mt-6 md:mt-0 md:ml-2 text-center md:text-left">
                        <div class="tracking-wide text-4xl text-black font-playfair font-bold">Coach Irvan Irawan Jie <br> <p class="text-lg font-bold">Chief Learning Officer</p>
                        </div>
                        <p class="mt-3 text-gray-500 text-base md:text-base lg:text-base">
                            Coach Irvan Irawan Jie adalah seorang MBA dari University of Central Oklahoma. Saat ini Coach
                            Irvan adalah President dari Meta-Coach Foundation Indonesia, sehari-harinya berprofesi full time
                            sebagai Well Being & Executive Leadership Meta-Coach dan Neuro-Semantics Trainer. <br><br>

                            Coach Irvan berpengalaman lebih dari 9 tahun dalam retail modern, 4 tahun dalam riset marketing
                            baik di Indonesia maupun di Amerika Serikat, 3 tahun dalam industri manufaktur dan 9 tahun dalam
                            pengembangan manusia
                        <div class=" mt-3 tracking-wide text-base text-black font-poppins font-bold">Connect With
                            Me</div>
                        <div class="mt-4 flex justify-center md:justify-start">
                            <a href="https://www.instagram.com"
                                class="text-gray-500 hover:text-gray-900 mx-2 icon-instagram">
                                <i class="fab fa-instagram fa-2x"></i>
                            </a>
                            <a href="https://www.twitter.com" class="text-gray-500 hover:text-gray-900 mx-2 icon-twitter">
                                <i class="fab fa-twitter fa-2x"></i>
                            </a>
                            <a href="https://www.tiktok.com" class="text-gray-500 hover:text-black mx-2">
                                <i class="fab fa-tiktok fa-2x"></i>
                            </a>
                            <a href="https://www.youtube.com" class="text-gray-500 hover:text-gray-900 mx-2 icon-youtube">
                                <i class="fab fa-youtube fa-2x"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Section 2 -->
    <section class="container mx-auto px-4">
        <div class="bg-white p-6 md:p-12 ">
            <h2 class="text-3xl font-playfair font-bold text-center text-customDarkGreen lg:text-5xl mb-10">Educational</h2>
            <div class="mx-auto w-1/5 object-none object-center h-1 bg-black mb-10"></div>
            <div class="grid gap-8 grid-cols-1 sm:grid-cols-2 lg:grid-cols-2">
                <div class="flex flex-col items-center text-center">
                    <div class=" text-white rounded-full mb-4">
                        <img src="{{ asset('assets/icon/icon-pendidikan.svg') }}" alt="">
                    </div>
                    <h3 class="text-xl font-semibold text-customDarkGreen">Master of Business Administration</h3>
                    <p class="text-gray-600">University of Central Oklahoma, 2015 - 2017</p>
                </div>
                <div class="flex flex-col items-center text-center">
                    <div class=" text-white rounded-full mb-4">
                        <img src="{{ asset('assets/icon/icon-pendidikan.svg') }}" alt="">
                    </div>
                    <h3 class="text-xl font-semibold text-customDarkGreen">Bachelor's Degree in Psychology</h3>
                    <p class="text-gray-600">University of ABC, 2010 - 2014</p>
                </div>

            </div>
        </div>
    </section>

    <!-- Section 3 -->
    <section class="bg-wheat dark:bg-gray-900 flex flex-col items-center justify-center h-72">
        <div class="max-w-screen-xl px-4 py-6 mx-auto lg:gap-8 xl:gap-0 lg:py-3">
            <div class="text-center">
                <h1
                    class="max-w-2xl mb-4 text-2xl font-playfair font-bold tracking-tight leading-none md:text-4xl xl:text-4xl dark:text-white">
                    “Is There Anything I Can Do For You?”</h1>
                <p
                    class="max-w-2xl mt-8 mb-6 font-poppins font-base text-black lg:mb-8 md:text-lg lg:text-xl dark:text-black">
                    Setelah anda mengenal saya, apakah ada yang bisa saya bantu?</p>

                <a href="#"
                    class="inline-flex mb-3 mr-3 bg-customYellow items-center justify-center px-5 py-2 font-bold font-poppins font-base text-center text-white  rounded-lg hover:bg-hoverCustomYellow focus:ring-4 focus:ring-gray-100 dark:text-white">
                    Coaching
                </a>
                <a href="#"
                    class="inline-flex mb-3 mr-3 bg-customGreen items-center justify-center px-5 py-2 font-poppins font-semibold text-center text-white  rounded-lg hover:bg-hoverCustomGreen hover:text-black focus:ring-4 focus:ring-gray-100 dark:text-white">
                    See The Events
                </a>
            </div>
        </div>
        </div>
    </section>


    @push('after-styles')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <style>
            .icon-instagram:hover {
                background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            .icon-twitter:hover {
                color: #1DA1F2;
                /* Warna hover mendekati logo Twitter */
            }

            .icon-youtube:hover {
                color: #FF0000;
                /* Warna hover mendekati logo YouTube */
            }
        </style>
    @endpush


    @push('after-scripts')
    @endpush
@endsection

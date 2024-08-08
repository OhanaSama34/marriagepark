@extends('front/layouts/app')
@section('title', 'The Marriage Park - Profiles')
@section('content')

    <section class="relative bg-cover bg-fixed bg-center min-h-screen md:h-screen w-full"
        style="background-image: url('{{ asset('assets/img/bg-profile.svg') }}');">
        <div class="grid max-w-screen-xl px-4 py-4 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="col-span-12 flex justify-center items-center">
                <div class="bg-white rounded-lg shadow-lg p-8 grid grid-cols-1 md:grid-cols-2 items-center md:max-w-4xl outline outline-2 outline-gray-400">
                    <div class="flex justify-center md:justify-center lg:justify-center xl:justify-center">
                        <img class="h-64 w-64 md:h-80 md:w-80 xl:h-4/5" src="{{ asset('assets/img/foto-profile.svg') }}"
                            alt="Profile Picture">
                    </div>
                    <div class="mt-6 md:mt-0 md:ml-2 text-center md:text-left">
                        <div class="tracking-wide text-4xl text-black font-playfair font-bold">Nago Tejena, M.Psi, Psikolog
                        </div>
                        <p class="mt-3 text-gray-500 text-base md:text-base lg:text-base">
                            If this is the first time we met, allow me to introduce myself.<br><br>
                            Nama saya Nago Tejena, biasa dipanggil Nago. Secara profesi saya adalah seorang psikolog.
                            Artinya, sebagian besar hari saya diisi dengan pertemuan-pertemuan bersama klien.<br><br>
                            Di luar sesi-sesi konseling, saya berusaha untuk aktif di media sosial. Menulis konten merupakan
                            cara pribadi saya untuk mengasah ilmu, menuangkan buah pikiran yang muncul, serta membagikannya
                            kepada dunia.<br><br>

                            Terakhir, saya juga sering menerima undangan untuk menjadi
                            narasumber di berbagai kegiatan. 
                        <div class="tracking-wide text-base text-black font-poppins font-bold">Connect With Me</div>
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

    <section class="container mx-auto px-4">
        <div class="bg-white p-6 md:p-12 ">
            <h2 class="text-3xl font-playfair font-bold text-center text-black mb-10">Educational</h2>
            <div class="mx-auto w-1/5 object-none object-center h-1 bg-customGreen mb-10"></div>
            <div class="grid gap-8 grid-cols-1 sm:grid-cols-2 lg:grid-cols-2">
                <div class="flex flex-col items-center text-center">
                    <div class=" text-white rounded-full mb-4">
                        <img src="{{ asset('assets/img/icon-pendidikan.svg') }}" alt="">
                    </div>
                    <h3 class="text-xl font-semibold text-gray-700">Master's Degree in Psychology</h3>
                    <p class="text-gray-600">University of XYZ, 2015 - 2017</p>
                </div>
                <div class="flex flex-col items-center text-center">
                    <div class=" text-white rounded-full mb-4">
                        <img src="{{ asset('assets/img/icon-pendidikan.svg') }}" alt="">
                    </div>
                    <h3 class="text-xl font-semibold text-gray-700">Bachelor's Degree in Psychology</h3>
                    <p class="text-gray-600">University of ABC, 2010 - 2014</p>
                </div>
                
            </div>
        </div>
    </section>

    <section class="bg-grey dark:bg-gray-900 mb-7 flex flex-col items-center justify-center h-72">
        <div class="max-w-screen-xl px-4 py-6 mx-auto lg:gap-8 xl:gap-0 lg:py-3">
            <div class="text-center">
                <h1
                    class="max-w-2xl mb-4 text-2xl font-playfair font-bold tracking-tight leading-none md:text-4xl xl:text-4xl dark:text-white">
                    “Is There Anything I Can Do For You?”</h1>
                <p class="max-w-2xl mt-8 mb-6 font-poppins font-base text-black lg:mb-8 md:text-lg lg:text-xl dark:text-black">
                    Setelah anda mengenal saya, apakah ada yang bisa saya bantu?</p>
    
                <a href="#"
                    class="inline-flex mb-3 mr-3 bg-redButton items-center justify-center px-6 py-3 font-bold font-poppins font-base text-center text-white  rounded-lg hover:bg-red-300 focus:ring-4 focus:ring-gray-100 dark:text-white">
                    Coaching
                </a>
                <a href="#"
                    class="inline-flex outline outline-4 outline-redButton items-center justify-center px-5 py-2 font-poppins font-semibold text-center text-gray-900  rounded-lg hover:bg-red-300 focus:ring-4 focus:ring-gray-100 dark:text-white">
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

@extends('front/layouts/app')
@section('title', 'The Marriage Park')
@section('content')

    <!-- Hero Section -->
    <!-- Hero Section -->
    <section class="relative bg-cover bg-center min-h-screen md:h-screen w-full"
        style="background-image: url('{{ asset('assets/bg/bg-home.svg') }}');">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1
                    class="max-w-5xl text-customDarkerGreen mb-8 text-5xl sm:text-5xl font-zain font-extrabold tracking-normal leading-tight md:text-5xl xl:text-6xl dark:text-white">
                    Ready For The Wedding?
                </h1>
                <p
                    class="max-w-2xl mb-4 font-base text-gray-100 font-poppins lg:mb-8 text-base sm:text-lg md:text-lg lg:text-xl dark:text-white">
                    Perjalanan menuju kehidupan pernikahan impian terkadang bisa terasa begitu sulit. Problem terus-menerus,
                    tuntutan yang berlebihan, dan diri yang sudah lelah.
                </p>
                <p
                    class="max-w-2xl mb-4 font-base text-gray-100 font-poppins lg:mb-10 text-base sm:text-lg md:text-lg lg:text-xl dark:text-white">
                    Sebagai pasangan yang sedang mempersiapkan pernikahan, kita harus menyadari bahwa kita juga memiliki
                    batas.
                    Untuk menyelesaikan berbagai masalah dan kesulitan, kita perlu berhenti sejenak. Setiap hal dapat diatur
                    dengan baik dan terorganisir dengan baik dengan bantuan yang tepat.
                </p>
                <p
                    class="max-w-2xl mb-4 text-lg font-semibold text-white font-poppins italic lg:mb-8 sm:text-xl md:text-lg lg:text-xl dark:text-white">
                    "We need mentor to talk to"
                </p>

                <div class="flex flex-col sm:flex-row sm:space-x-3">
                    <a href="/BookSession"
                        class="inline-flex mb-3 bg-lightOliveGreen shadow-lg items-center justify-center px-5 py-2 text-base font-poppins font-normal text-center text-white rounded-lg hover:bg-oliveGreen focus:ring-2 focus:ring-gray-100 dark:text-white">
                        Learn More About Marriage Park
                    </a>
                    <a href="/Events"
                        class="inline-flex mb-3 bg-lightOrange shadow-lg items-center justify-center px-5 py-2 text-base font-poppins font-normal text-center text-white rounded-lg hover:bg-customOrange focus:ring-2 focus:ring-gray-100 dark:text-white">
                        Let's Start
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900">
        <div class="grid max-w-screen-xl px-4 py-4 mx-auto lg:gap-8 xl:gap-0 lg:py-8 lg:grid-cols-12">
            <div class="lg:order-1 order-2 mr-auto place-self-center lg:col-span-7">
                <h1
                    class="max-w-2xl mb-2 mt-3 text-2xl sm:text-3xl tracking-normal text-customDarkGreen font-zain font-bold leading-tight md:text-2xl xl:text-2xl dark:text-white">
                    About The Marriage Park
                </h1>
                <h1
                    class="max-w-2xl mb-2 mt-2 text-4xl sm:text-5xl text-customDarkerGreen tracking-normal font-zain font-extrabold leading-tight md:text-5xl md:mb-4 xl:text-6xl dark:text-white">
                    We Care About Your <br> <span class="text-lightOrange">“Wedding Life”</span>
                </h1>
                <p
                    class="max-w-2xl mb-6 font-base text-gray-500 font-poppins lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                    From Seorang psikolog yang sering berkhotbah di media sosial dengan akun @nagotejena dan tagline
                    #khotbahdukun
                </p>
                <a href="/Profiles"
                    class="inline-flex items-center tracking-wide justify-center px-6 py-2 text-base font-poppins font-semibold text-center text-lightOrange border-2 border-lightOrange rounded-3xl hover:bg-customOrange hover:border-customOrange hover:text-white focus:ring-2 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                    About Us
                </a>
            </div>
            <div class="lg:order-2 order-1 lg:mt-0 lg:col-span-5 lg:flex justify-center">
                <img class="max-w-full h-auto max-w-xs sm:max-w-sm md:max-w-md"
                    src="{{ asset('assets/img/img-section-home-1.svg') }}" alt="mockup">
            </div>
        </div>
    </section>

    <section class="bg-white py-4 mb-8 md:py-4 lg:py-8">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <!-- Header Section -->
            <header class="bg-white py-8 text-center">
                <h2
                    class="text-3xl sm:text-4xl lg:text-5xl tracking-normal font-zain text-customDarkGreen font-semibold mb-2">
                    Our Program
                </h2>
            </header>

            <!-- Content Section -->
            <div class="bg-white p-6 mx-auto max-w-7xl">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                    <div class="flex flex-col items-center px-6 text-center">
                        <div class="mb-2">
                            <img class="small-icon" src="{{ asset('assets/icon/Indian wedding-bro.svg') }}" alt="mockup">
                        </div>
                        <a href="#community">
                            <h2 class="text-lg font-semibold mb-2">Community Sharing</h2>
                            <p class="text-gray-600">Saran dan wejangan dari berbagai macam permasalahan universal rumah
                                tangga.
                            </p>
                        </a>
                    </div>

                    <div class="flex flex-col items-center px-6 text-center">
                        <div class="mb-2">
                            <img class="small-icon" src="{{ asset('assets/icon/Beach wedding-bro.svg') }}" alt="mockup">
                        </div>
                        <a href="#appointment">
                            <h2 class="text-lg font-semibold mb-2">Counseling Class</h2>
                            <p class="text-gray-600">Atur jadwal sesuai keinginanmu, agar kami dapat membantu permasalahan.
                            </p>
                        </a>
                    </div>

                    <div class="flex flex-col items-center px-6 text-center">
                        <div class="mb-2">
                            <img class="small-icon" src="{{ asset('assets/icon/Honeymoon-pana.svg') }}" alt="mockup">
                        </div>
                        <a href="#prepare">
                            <h2 class="text-lg font-semibold mb-2">Marriage Preparation</h2>
                            <p class="text-gray-600">Kami membantu anda mempersiapkan mental dalam menghadapi pernikahan
                                dari 0.</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="community" class=" bg-wheat dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-10 lg:px-8">
            <a href="/Community"
                class="inline-flex justify-between items-center py-1 px-1 pr-4 mb-4 text-sm text-gray-700 bg-gray-50 rounded-full dark:bg-gray-800 dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700"
                role="alert">
                <span class="text-xs bg-lightOrange rounded-full text-gray-50 px-4 py-1.5 mr-3">Free</span> <span
                    class="text-sm font-medium">Community is out! see our community</span>
                <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
            <h1
                class="mb-4 text-5xl sm:text-5xl font-zain font-extrabold tracking-normal leading-tight text-black lg:text-7xl dark:text-white">
                Discover A Range Of Sage Advice for Your Relationship
            </h1>
            <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">
                Kami tahu betapa sulitnya mencapai momen bahagia ini dalam hubungan anda. Itulah mengapa kami menciptakan
                forum ini.
            </p>
        </div>
    </section>


    <section id="appointment" class="bg-white dark:bg-gray-900 mt-5">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <!-- Gambar -->
            <div class="order-1 lg:order-1 lg:col-span-6 lg:flex lg:justify-start lg:items-center">
                <img src="{{ asset('assets/img/img-section-home-2.svg') }}" alt="mockup">
            </div>
            <!-- Teks -->
            <div class="order-2 lg:order-2 lg:col-span-6 mb-5 place-self-center lg:text-left">
                <h1
                    class="max-w-2xl mb-4 text-5xl text-customDarkGreen tracking-wide font-zain font-extrabold leading-none md:text-6xl xl:text-7xl dark:text-white">
                    Coaching <br> for Couples</h1>
                <p
                    class="max-w-2xl mt-5 mb-7 font-base font-poppins text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                    Coaching pernikahan merupakan proses bimbingan yang dirancang untuk membantu pasangan mencapai kehidupan
                    pernikahan impian mereka. Kami di sini untuk membantu Anda menikmati setiap momen menjelang pernikahan
                    bahkan kehidupan pernikahan Anda</p>
                <a href="/BookSession#appointment"
                    class="inline-flex bg-lightOrange tracking-wide items-center justify-center px-6 py-2 font-poppins font-semibold text-center text-white rounded-3xl hover:bg-lightOrange hover:text-black focus:ring-2 focus:ring-gray-100 dark:text-white">
                    Appointment Now
                </a>
            </div>
        </div>
    </section>

    <section id="prepare" class="bg-white mb-7">
        <div class="grid max-w-screen-xl px-4 py-6 mx-auto lg:gap-8 xl:gap-0 lg:py-3 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1
                    class="max-w-2xl mb-4 text-customDarkGreen text-4xl font-zain font-bold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
                    Are you ready for married life ?</h1>
                <p
                    class="max-w-2xl mb-6 font-poppins font-base text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-black">
                    A tightly curated online journey to a better self and a better married life</p>

                <a href="/Events"
                    class="inline-flex bg-lightOrange items-center justify-center px-7 py-2 font-poppins font-semibold text-center text-white  rounded-3xl hover:bg-lightOrange hover:text-black focus:ring-4 focus:ring-gray-100 dark:text-white">
                    Start Here
                </a>
            </div>
            <div class="mt-3 lg:mt-0 lg:col-span-5 lg:flex">
                <img src="{{ asset('assets/img/img-section-home-3.svg') }}" alt="mockup">
            </div>
        </div>
    </section>

    @push('after-styles')
        <style>
            img.small-icon {
                width: 100px;
                /* Ubah ukuran sesuai kebutuhan */
                height: 100px;
                /* Ubah ukuran sesuai kebutuhan */
            }
        </style>
    @endpush
    @push('after-scripts')
    @endpush
@endsection

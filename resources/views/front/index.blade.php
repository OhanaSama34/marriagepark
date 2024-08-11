@extends('front/layouts/app')
@section('title', 'The Marriage Park')
@section('content')

<!-- Hero Section -->
<section class="mb-4 relative bg-cover bg-center min-h-screen md:h-screen w-full"
    style="background-image: url('{{ asset('assets/bg/bg-home.svg') }}');">
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 ">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1
                class="max-w-4xl text-customDarkGreen mb-8 text-4xl font-playfair font-bold  tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
                Ready For The Wedding?</h1>
            <p class="max-w-2xl mb-6 font-base text-white font-poppins lg:mb-8 md:text-lg lg:text-xl dark:text-white">
                Perjalanan
                menuju kehidupan pernikahan impian terkadang bisa terasa begitu sulit. Problem terus-menerus,
                tuntutan yang berlebihan, dan diri yang sudah lelah.</p>
            <p class="max-w-2xl mb-6 font-base text-white font-poppins lg:mb-10 md:text-lg lg:text-xl dark:text-white">
                Sebagai
                pasangan yang sedang mempersiapkan pernikahan, kita harus menyadari bahwa kita juga memiliki batas.
                Untuk menyelesaikan berbagai masalah dan kesulitan, kita perlu berhenti sejenak. Setiap hal dapat
                diatur dengan baik dan terorganisir dengan baik dengan bantuan yang tepat.</p>
            <p
                class="max-w-2xl mb-6 font-base text-white font-poppins italic lg:mb-8 md:text-lg lg:text-xl dark:text-white">
                We need
                mentor to talk to.</p>

            <a href="#"
                class="inline-flex mb-3 mr-3 bg-customGreen shadow-lg items-center justify-center px-5 py-2 text-bold font-poppins font-base text-center text-white  rounded-lg hover:bg-hoverCustomGreen focus:ring-4 focus:ring-gray-100 dark:text-white">
                Read More About Marriage Park
            </a>
            <a href="#"
                class="inline-flex font-bold font-poppins bg-customYellow shadow-lg items-center justify-center px-5 py-2  text-center text-black  rounded-lg hover:bg-hoverCustomYellow hover:text-white focus:ring-4 focus:ring-gray-100 dark:text-white">
                Appointment Now
            </a>
        </div>
    </div>
</section>

<!-- Section 2 -->
<section class="bg-white dark:bg-gray-900">
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="lg:order-1 order-2 mr-auto place-self-center lg:col-span-7">
            <h1
                class="max-w-2xl mb-4 mt-3 text-xl font-playfair font-semibold tracking-tight leading-none md:text-2xl xl:text-2xl dark:text-white">
                About The Marriage Park</h1>
            <h1
                class="max-w-2xl mb-4 mt-2 text-4xl font-playfair font-extrabold tracking-tight leading-none md:text-5xl md:mb-9 xl:text-6xl dark:text-white">
                We Care About Your <p class="text-customYellow">“Wedding Life”</p>
            </h1>
            <p
                class="max-w-2xl mb-6 font-base text-black font-poppins lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                From
                Seorang psikolog yang sering berkhotbah di media sosial
                dengan akun @nagotejena dan tagline #khotbahdukun</p>
            <a href="#"
                class="inline-flex items-center justify-center px-5 py-2 text-base font-poppins font-semibold text-center text-gray-900 border-4 border-customGreen rounded-xl hover:bg-hoverCustomGreen hover:border-hoverCustomGreen hover:text-white focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                About The Marriage Park
            </a>
        </div>
        <div class="lg:order-2 order-1 lg:mt-0 lg:col-span-5 lg:flex">
            <img src="{{ asset('assets/img/img-section-home-1.svg') }}" alt="mockup">
        </div>
    </div>
</section>

<!-- Section 3 -->
<section class="bg-white dark:bg-gray-900">
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="lg:order-1 order-2 lg:col-span-6 lg:flex lg:justify-start lg:items-center">
            <img src="{{ asset('assets/img/img-section-home-2.svg') }}" alt="mockup">
        </div>
        <div class=" mb-5 lg:order-2 order-1 mr-auto place-self-center lg:col-span-6">
            <h1
                class="max-w-2xl mb-4 text-4xl font-playfair font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
                Coaching <br> for Couples</h1>
            <p
                class="max-w-2xl mt-9 mb-7 font-base font-poppins text-black lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                Coaching pernikahan merupakan proses bimbingan yang dirancang untuk membantu pasangan mencapai kehidupan pernikahan impian mereka.  Kami di sini untuk membantu Anda menikmati setiap momen menjelang pernikahan bahkan kehidupan pernikahan Anda</p>
            <a href="#"
                class="inline-flex bg-customYellow items-center justify-center px-7 py-2 font-poppins font-semibold text-center text-white rounded-lg hover:bg-hoverCustomYellow hover:text-black focus:ring-4 focus:ring-gray-100 dark:text-white">
                About Our Counselling
            </a>
        </div>
    </div>
</section>


<section class="bg-wheat">
    <div class="grid max-w-screen-xl px-4 py-6 mx-auto lg:gap-8 xl:gap-0 lg:py-3 lg:grid-cols-12">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1
                class="max-w-2xl mb-4 text-4xl font-playfair font-bold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
                Are you ready for married life ?</h1>
            <p class="max-w-2xl mb-6 font-poppins font-base text-black lg:mb-8 md:text-lg lg:text-xl dark:text-black">
                A tightly curated online journey to a better self and a better married life</p>

            <a href="#"
                class="inline-flex bg-customGreen items-center justify-center px-5 py-2 font-poppins font-semibold text-center text-white  rounded-lg hover:bg-hoverCustomGreen focus:ring-4 focus:ring-gray-100 dark:text-white">
                Start Here
            </a>
        </div>
        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
            <img src="{{ asset('assets/img/img-section-home-3.svg') }}" alt="mockup">
        </div>
    </div>
</section>

@push('after-scripts')    
@endpush
@endsection
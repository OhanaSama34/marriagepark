@extends('front/layouts/app')
@section('title', 'The Marriage Park - Community')
@section('content')

    <section class="relative bg-cover bg-fixed bg-center min-h-screen md:h-screen w-full"
        style="background-image: url('{{ asset('assets/bg/bg-coaching.svg') }}');">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-8 lg:grid-cols-12">
            <div class="bg-white rounded-lg shadow-lg p-8 mr-auto place-self-center md:ml-6 lg:col-span-7 lg:ml-12 max-w-lg"
                style="margin-bottom: 2rem;">
                <h1
                    class="max-w-2xl mb-4 text-2xl font-playfair font-bold tracking-tight leading-none md:text-2xl xl:text-4xl dark:text-white">
                    Collaborate With Me</h1>
                <p class="max-w-2xl mb-4 font-base text-black lg:mb-8 md:text-md lg:text-lg dark:text-gray-400">Saat ini
                    kesadaran masyarakat Indonesia tentang
                    kesehatan mental sedang meningkat. Orang-
                    orang mulai paham akan pentingnya memiliki
                    hubungan yang sehat, pekerjaan yang bermakna,
                    serta hidup yang berbahagia. <br><br>Akan tetapi, dalam prosesnya kita masih sering
                    menemukan kebingungan. <br><br> Menjadi seorang psikolog memberi saya
                    kesempatan untuk memahami berbagai sudut
                    pandang baru, mendengar banyak cerita inspiratif,
                    serta terus belajar tentang kehidupan kita sebagai
                    manusia. <br><br> Pembelajaran inilah yang saya harap bisa saya
                    bagikan ke lebih banyak orang, sehingga kita
                    bersama bisa mencapai kualitas hidup yang lebih
                    baik.</p>
            </div>
        </div>
    </section>

    <section class="bg-white py-8 antialiased dark:bg-gray-900 md:py-16 lg:px-72">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <h1
                class="max-w-2xl mb-4 text-2xl font-playfair font-bold tracking-tight leading-none md:text-4xl xl:text-5xl dark:text-white">
                Past Collaborations</h1>
            <h2
                class="mb-8 text-sm font-semibold text-gray-900 dark:text-white sm:text-sm md:text-sm lg:text-sm md:order-1">
                Beberapa pihak yang telah berkolaborasi dengan saya :</h2>

            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-4 md:mb-4 lg:mb-4">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl md:order-1">Univesity</h2>
            </div>

            <!-- Mengganti grid dengan flexbox -->
            <div class="flex flex-wrap justify-center gap-4 mb-4">
                <a href="#"
                    class="flex items-center rounded-lg border border-gray-200 bg-white px-4 py-2 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <!-- Logo Universitas -->
                    <img src="{{ asset('assets/img/spinning-letter-s-logo.jpg') }}" alt="Logo Universitas"
                        class="h-8 w-8 mr-4">

                    <!-- Nama Universitas -->
                    <span class="text-sm font-medium text-gray-900 dark:text-white">Universitas ABC</span>
                </a>
                <a href="#"
                    class="flex items-center rounded-lg border border-gray-200 bg-white px-4 py-2 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <!-- Logo Universitas -->
                    <img src="{{ asset('assets/img/spinning-letter-s-logo.jpg') }}" alt="Logo Universitas"
                        class="h-8 w-8 mr-4">

                    <!-- Nama Universitas -->
                    <span class="text-sm font-medium text-gray-900 dark:text-white">Universitas KBC</span>
                </a>
                <a href="#"
                    class="flex items-center rounded-lg border border-gray-200 bg-white px-4 py-2 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <!-- Logo Universitas -->
                    <img src="{{ asset('assets/img/spinning-letter-s-logo.jpg') }}" alt="Logo Universitas"
                        class="h-8 w-8 mr-4">

                    <!-- Nama Universitas -->
                    <span class="text-sm font-medium text-gray-900 dark:text-white">Universitas DEF</span>
                </a>
                <a href="#"
                    class="flex items-center rounded-lg border border-gray-200 bg-white px-4 py-2 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <!-- Logo Universitas -->
                    <img src="{{ asset('assets/img/spinning-letter-s-logo.jpg') }}" alt="Logo Universitas"
                        class="h-8 w-8 mr-4">

                    <!-- Nama Universitas -->
                    <span class="text-sm font-medium text-gray-900 dark:text-white">Universitas mediatama</span>
                </a>
            </div>

            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-4 md:mb-4 lg:mb-4">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl md:order-1">Media</h2>
            </div>

            <!-- Mengganti grid dengan flexbox -->
            <div class="flex flex-wrap justify-center gap-4">
                <a href="#"
                    class="flex items-center rounded-lg border border-gray-200 bg-white px-4 py-2 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <!-- Logo Universitas -->
                    <img src="{{ asset('assets/img/spinning-letter-s-logo.jpg') }}" alt="Logo Universitas"
                        class="h-8 w-8 mr-4">

                    <!-- Nama Universitas -->
                    <span class="text-sm font-medium text-gray-900 dark:text-white">Mediatama</span>
                </a>
                <a href="#"
                    class="flex items-center rounded-lg border border-gray-200 bg-white px-4 py-2 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <!-- Logo Universitas -->
                    <img src="{{ asset('assets/img/spinning-letter-s-logo.jpg') }}" alt="Logo Universitas"
                        class="h-8 w-8 mr-4">

                    <!-- Nama Universitas -->
                    <span class="text-sm font-medium text-gray-900 dark:text-white">Media Global</span>
                </a>
                <a href="#"
                    class="flex items-center rounded-lg border border-gray-200 bg-white px-4 py-2 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <!-- Logo Universitas -->
                    <img src="{{ asset('assets/img/spinning-letter-s-logo.jpg') }}" alt="Logo Universitas"
                        class="h-8 w-8 mr-4">

                    <!-- Nama Universitas -->
                    <span class="text-sm font-medium text-gray-900 dark:text-white">Media Press Nasional</span>
                </a>
            </div>
        </div>
    </section>

    <section class="bg-grey dark:bg-gray-900 flex flex-col items-center justify-center h-72">
        <div class="max-w-screen-xl px-4 py-6 mx-auto lg:gap-8 xl:gap-0 lg:py-3">
            <div class="text-center">
                <h1
                    class="max-w-2xl mb-4 text-2xl font-playfair font-bold tracking-tight leading-none md:text-4xl xl:text-5xl dark:text-white">
                    Collaborate With Us</h1>
                <p
                    class="max-w-xl mt-8 mb-6 text-base font-poppins text-black lg:mb-8 md:text-md lg:text-md dark:text-black">
                    Apabila paparan di atas sesuai dengan apa yang anda bayangkan untuk program anda, silahkan hubungi kami
                    melalui :</p>

                <a href="#"
                    class="inline-flex bg-greenButton items-center justify-center w-32 px-4 py-2 font-poppins font-bold text-center text-white  rounded-lg hover:bg-green-300 hover:text-black focus:ring-4 focus:ring-gray-100 dark:text-white">
                    Whatsapp
                </a>
            </div>
        </div>
        </div>
    </section>

    @push('after-styles')
    @endpush
    @push('after-scripts')
    @endpush
@endsection

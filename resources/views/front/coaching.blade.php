@extends('front/layouts/app')
@section('title', 'The Marriage Park - Coaching')
@section('content')

    <section class="relative bg-cover bg-fixed bg-center min-h-screen md:h-screen w-full"
        style="background-image: url('{{ asset('assets/img/bg-coaching.svg') }}');">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-8 lg:grid-cols-12">
            <div class="bg-white rounded-lg shadow-lg p-8 mr-auto place-self-center lg:col-span-7">
                <h1
                    class="max-w-2xl mb-4 text-4xl font-playfair font-bold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
                    Coaching For Couples</h1>
                <p class="max-w-2xl mb-2 font-poppins font-semibold text-black lg:mb-4 md:text-lg lg:text-xl ">Sebenarnya,
                    apa itu The Marriage Park ?</p>
                <p class="max-w-2xl mb-4 font-base text-black lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">The Marriage
                    Park merupakan platform coaching pernikahan baik untuk mereka yang sudah menikah ataupun yang baru saja
                    merencanakannya. Di dalamnya, pasangan akan berbagi tentang tantangan dan impian mereka dalam
                    pernikahan. Mentor/Coach kemudian membantu dengan memberikan panduan dan solusi praktis, memastikan
                    kehidupan pernikahan terencana dengan baik dan sesuai harapan.</p>
                <p class="max-w-2xl mb-4 font-base text-black lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Coaching
                    pernikahan sebenarnya lebih dari sekadar pertemuan biasa. Anda akan membangun hubungan baru dengan
                    seorang yang netral dan berpengalaman, yang akan memberikan Anda perspektif yang mungkin belum pernah
                    Anda miliki sebelumnya.</p>
                <p class="max-w-2xl mb-4 font-bold italic text-black lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">It’s a
                    place where you can be your true self, so you could have an insight on how to solve your problems.</p>
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900">
        <div class="grid max-w-screen-xl px-10 py-4 mx-auto lg:gap-8 xl:gap-0 lg:py-8 lg:grid-cols-4">
            <div class="mr-auto place-self-center lg:col-span-4">
                <h1
                    class="max-w-2xl mb-4 text-2xl font-playfair font-bold tracking-tight leading-none md:text-2xl xl:text-4xl dark:text-white">
                    Syarat dan Ketentuan Sesi Coaching</h1>
                <h1
                    class="max-w-2xl mb-4 text-lg font-poppins font-bold tracking-tight leading-none md:text-lg xl:text-lg dark:text-white">
                    SIPP : 3114-20-2-2</h1>

                <ul class="max-w-4xl space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400">
                    <li>
                        Konseling dilakukan secara online menggunakan aplikasi Zoom atau tatap muka dengan lokasi di
                        Denpasar, Bali
                    </li>
                    <li>
                        Setiap sesi memiliki durasi 1 jam, dengan biaya Rp. 600.000 / jam. Jika melebihi batas waktu, maka
                        akan dikenakan
                        tambahan sebesar 300.000 / 30 menit.
                    </li>
                    <li>
                        Segala jenis informasi dari klien bersifat rahasia, dan akan dilindungi oleh kode etik psikolog.
                    </li>
                    <li>
                        Proses penjadwalan sesi dan pembayaran akan diatur setelah formulir diisi.
                    </li>
                </ul>

            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900">
        <div class="grid max-w-screen-xl px-10 py-4 mx-auto lg:gap-8 xl:gap-0 lg:py-8 lg:grid-cols-4">
            <div class="mr-auto place-self-center lg:col-span-4">
                <h1
                    class="max-w-2xl mb-4 text-2xl font-playfair font-bold tracking-tight leading-none md:text-2xl xl:text-4xl dark:text-white">
                    Tema Coaching</h1>

                <ol class="ps-5 mt-2 space-y-1 list-decimal list-inside">
                    <li>
                        Membangun Komunikasi yang Efektif dengan Pasangan
                    </li>
                    <li>
                        Mengatasi Konflik Selama Perencanaan Pernikahan
                    </li>
                    <li>
                        Bekerjasama dengan Keluarga dan Teman
                    </li>
                    <li>
                        Mengatasi Stres dan Kecemasan Selama Perencanaan
                    </li>
                    <li>
                        Menjaga Keseimbangan antara Kehidupan Pribadi dan Persiapan Pernikahan
                    </li>
                </ol>

            </div>
        </div>
    </section>


    <div class="top-0 left-0 w-screen h-30 flex items-center justify-center">
        <a href="#"
            class="inline-flex items-center justify-center w-full max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg xl:max-w-xl my-7 px-5 py-2 font-poppins font-semibold text-center text-gray-900 bg-greenButton rounded-lg hover:bg-green-300 focus:ring-4 focus:ring-gray-100 dark:text-white">
            Appointment Now
        </a>
    </div>

    @push('after-styles')
    @endpush
    @push('after-scripts')
    @endpush
@endsection

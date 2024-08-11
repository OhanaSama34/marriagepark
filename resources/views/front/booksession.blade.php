@extends('front/layouts/app')
@section('title', 'The Marriage Park - Booking')
@section('content')

    <section class="bg-cover bg-fixed bg-center min-h-screen md:h-screen w-full"
        style="background-image: url('{{ asset('assets/bg/bg-coaching.svg') }}');">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-8 lg:grid-cols-12">
            <div class="bg-white rounded-lg shadow-lg p-6 mr-auto place-self-center md:ml-6 lg:col-span-7 lg:ml-12 max-w-xl">
                <!-- Mengurangi padding dan lebar maksimum -->
                <h1
                    class="max-w-2xl mb-4 text-3xl text-hoverCustomYellow font-playfair font-bold tracking-tight leading-none md:text-4xl xl:text-5xl dark:text-white">
                    Coaching For Couples</h1> <!-- Mengurangi ukuran font -->
                <p class="max-w-2xl mb-2 font-poppins font-semibold text-black lg:mb-4 md:text-md lg:text-md">Sebenarnya,
                    apa itu The Marriage Park?</p>
                <p class="max-w-2xl mb-4 font-base text-black lg:mb-6 md:text-md lg:text-lg dark:text-gray-400">The Marriage
                    Park merupakan platform coaching pernikahan baik untuk mereka yang sudah menikah ataupun yang baru saja
                    merencanakannya. Di dalamnya, pasangan akan berbagi tentang tantangan dan impian mereka dalam
                    pernikahan. Mentor/Coach kemudian membantu dengan memberikan panduan dan solusi praktis, memastikan
                    kehidupan pernikahan terencana dengan baik dan sesuai harapan.</p>
                <p class="max-w-2xl mb-4 font-base text-black lg:mb-6 md:text-md lg:text-lg dark:text-gray-400">Coaching
                    pernikahan sebenarnya lebih dari sekadar pertemuan biasa. Anda akan membangun hubungan baru dengan
                    seorang yang netral dan berpengalaman, yang akan memberikan Anda perspektif yang mungkin belum pernah
                    Anda miliki sebelumnya.</p>
                <p class="max-w-2xl mb-4 font-bold italic text-customDarkGreen lg:mb-6 md:text-md lg:text-lg dark:text-gray-400">It’s a
                    place where you can be your true self, so you could have an insight on how to solve your problems.</p>
            </div>
        </div>
    </section>



    <section class="bg-white dark:bg-gray-900">
        <div class="grid max-w-screen-xl px-10 py-4 mx-auto lg:gap-8 xl:gap-0 lg:py-8 lg:grid-cols-4">
            <div class="mr-auto place-self-center lg:col-span-4">
                <h1
                    class="max-w-2xl mb-4 text-customDarkGreen text-2xl font-playfair font-bold tracking-tight leading-none md:text-2xl xl:text-4xl dark:text-white">
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
                    class="max-w-2xl mb-4 text-customDarkGreen text-2xl font-playfair font-bold tracking-tight leading-none md:text-2xl xl:text-4xl dark:text-white">
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

    <section class="flex items-center justify-center h-auto py-5">
        <div class="w-full max-w-3xl mx-auto p-8 bg-white">
            <form>
                <div class="mb-8">
                    <label for="fullname"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fullname</label>
                    <input type="text" id="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-6 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Fullname" required />
                </div>
                <div class="mb-8">
                    <label for="fullname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
                    <input type="text" id="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-6 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Active Phone Number" required />
                </div>
                <div class="mb-8">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                        email</label>
                    <input type="email" id="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-6 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="name@gmail.com" required />
                </div>
                <!-- Tanggal -->
                <div class="mb-6">
                    <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
                        Date</label>
                    <input type="date" id="date"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required />
                </div>

                <!-- Waktu -->
                <div class="mb-6">
                    <label for="time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
                        Time</label>
                    <input type="time" id="time"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required />
                </div>
                <button type="submit"
                    class="text-white bg-green-400 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-lg w-full px-8 py-4 text-center">Submit</button>
            </form>
        </div>
    </section>



    @push('after-styles')
    @endpush
    @push('after-scripts')
    @endpush
@endsection

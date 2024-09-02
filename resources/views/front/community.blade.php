@extends('front/layouts/app')
@section('title', 'The Marriage Park - Community')
@section('content')
    <section class="bg-lightOrange text-white py-16">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <!-- Main Content -->
            <p class="uppercase text-sm text-gray-900 font-bold mb-4">For Coaches, Experts, & Creators</p>
            <h1 class="text-6xl font-zain font-black sm:text-5xl md:text-6xl mb-2">Advice for Your Relationship</h1>
            <p class="text-lg font-poppins sm:text-xl md:text-2xl text-gray-100 mb-10">
                Kami tahu betapa sulitnya mencapai momen bahagia ini dalam hubungan anda. Itulah mengapa kami menciptakan forum ini.
            </p>
            <a href="#community" class="text-white bg-purple-500 px-8 py-2 rounded-full text-lg sm:text-xl hover:bg-purple-700">
                Start Sharing Now
            </a>
        </div>
    </section>

    <section id="community" class="bg-gray-100 py-12">
        <div class="max-w-screen-lg mx-auto px-8 sm:px-8 lg:px-10">
            <!-- Header Section -->
            <div class="text-center mb-8">
                <h2 class="text-3xl font-extrabold font-zain text-gray-900 sm:text-4xl">Community Sharing</h2>
                <p class="mt-4 text-lg font-poppins text-gray-600">
                    Berbagi cerita, keluh kesah, atau masalah Anda secara anonim. Admin akan memberikan tanggapan, dan Anda
                    dapat melihat masalah umum yang sama dengan pengguna lain.
                </p>
            </div>

            <!-- Form untuk Mengirim Keluh Kesah -->
            <div class="bg-white shadow-md rounded-lg p-6 mb-8">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Bagikan Keluh Kesah Anda</h3>
                <form>
                    <textarea class="w-full p-4 border border-gray-300 rounded-lg focus:ring focus:ring-lightOrange focus:outline-none"
                        rows="4" placeholder="Tulis keluh kesah Anda di sini..."></textarea>
                    <button type="submit"
                        class="mt-4 bg-lightOrange text-white px-6 py-2 rounded-lg hover:bg-hoverCustomOrange transition duration-300">
                        Kirim Anonim
                    </button>
                </form>
            </div>

            <!-- Daftar Masalah dan Tanggapan Admin -->
            <div class="space-y-6">
                <!-- Postingan Anonim 1 -->
                <div class="bg-white shadow-md rounded-lg p-6">
                    <div class="mb-4">
                        <span class="text-sm text-gray-500">Anonim - 2 hari yang lalu</span>
                        <p class="text-gray-700 mt-2">
                            Saya merasa sangat tertekan dengan pekerjaan saya saat ini. Saya tidak tahu bagaimana cara
                            mengatasi stres yang terus menghantui.
                        </p>
                    </div>
                    <div class="bg-gray-100 p-4 rounded-lg">
                        <span class="text-sm text-gray-500">Admin</span>
                        <p class="text-gray-700 mt-2">
                            Halo, terima kasih telah berbagi. Cobalah untuk mencari waktu untuk diri sendiri, mungkin dengan
                            melakukan aktivitas yang Anda sukai di luar jam kerja. Jangan ragu untuk mencari bantuan
                            profesional jika perlu.
                        </p>
                    </div>
                </div>

                <!-- Postingan Anonim 2 -->
                <div class="bg-white shadow-md rounded-lg p-6">
                    <div class="mb-4">
                        <span class="text-sm text-gray-500">Anonim - 1 minggu yang lalu</span>
                        <p class="text-gray-700 mt-2">
                            Saya merasa sangat kesepian meskipun dikelilingi oleh banyak orang. Apakah ada yang salah dengan
                            saya?
                        </p>
                    </div>
                    <div class="bg-gray-100 p-4 rounded-lg">
                        <span class="text-sm text-gray-500">Admin</span>
                        <p class="text-gray-700 mt-2">
                            Kesepian adalah perasaan yang bisa dialami siapa saja, meskipun kita tidak benar-benar sendiri.
                            Cobalah untuk berbicara dengan orang yang Anda percayai atau mencari komunitas dengan minat yang
                            sama.
                        </p>
                    </div>
                </div>

                <!-- Tambahkan postingan lain di sini -->
            </div>
        </div>
    </section>


    @push('after-styles')
    @endpush
    @push('after-scripts')
    @endpush
@endsection

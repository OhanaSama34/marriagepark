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
                        <div class="tracking-wide text-4xl text-black font-zain font-extrabold">Coach Irvan Irawan Jie <br>
                            <p class="text-lg font-poppins font-bold">Chief Learning Officer</p>
                        </div>
                        <p class="mt-3 text-gray-500 text-base md:text-base lg:text-base">
                            Coach Irvan Irawan Jie adalah seorang MBA dari University of Central Oklahoma. Saat ini Coach
                            Irvan adalah President dari Meta-Coach Foundation Indonesia, sehari-harinya berprofesi full time
                            sebagai Well Being & Executive Leadership Meta-Coach dan Neuro-Semantics Trainer. <br><br>

                            Coach Irvan berpengalaman lebih dari 9 tahun dalam retail modern, 4 tahun dalam riset marketing
                            baik di Indonesia maupun di Amerika Serikat, 3 tahun dalam industri manufaktur dan 9 tahun dalam
                            pengembangan manusia
                        <div class=" mt-3 tracking-wide text-xl text-black font-zain font-bold">Connect With
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
    <section id="appointment" class="bg-white dark:bg-gray-900 mt-5">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 items-center">
            <!-- Gambar -->
            <div class="order-1 lg:order-1 lg:col-span-6 flex justify-center lg:justify-center">
                <img class="w-full max-w-[70%] sm:max-w-[60%] lg:max-w-[50%] h-auto"
                    src="{{ asset('assets/logo/the_marriage.png') }}" alt="mockup">
            </div>
            <!-- Teks -->
            <div class="order-2 lg:order-2 lg:col-span-6 mb-5 lg:mb-0 place-self-center lg:text-left">
                <h1
                    class="max-w-2xl mb-4 text-2xl sm:text-5xl md:text-6xl xl:text-6xl text-lightOrange tracking-wide font-zain font-extrabold leading-none dark:text-white">
                    Coaching for Couples
                </h1>
                <p
                    class="max-w-2xl mt-5 mb-7 font-base font-poppins text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                    Coaching pernikahan kami adalah kunci untuk membuka pintu menuju kehidupan pernikahan yang Anda
                    impikan. Kami hadir untuk memastikan setiap langkah perjalanan Anda menuju pernikahan, dan setiap detik
                    dalam kehidupan pernikahan Anda, penuh dengan kebahagiaan dan harmoni yang tak terlupakan.
                </p>

            </div>
        </div>
    </section>


    <section class="bg-wheat py-12">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-black text-4xl font-bold font-poppins">FILOSOFI LOGO</h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-8">
                <!-- Kolom 1 -->
                <div class="flex items-start space-x-4">
                    <img src="{{ asset('assets/img/LAMPU.png') }}" alt="Pegangan Tangan" class="w-16 h-16">
                    <div>
                        <h3 class="text-lightOrange text-2xl font-bold">Lampu Taman</h3>
                        <p class="text-customLightBlue text-base">
                            Mewakili pencerahan dan panduan dalam memperoleh pengetahuan untuk persiapan pernikahan.
                        </p>
                    </div>
                </div>

                <!-- Kolom 2 -->
                <div class="flex items-start space-x-4">
                    <img src="{{ asset('assets/img/KURSI.png') }}" alt="Pusat Pusaran" class="w-16 h-auto mt-6">
                    <div>
                        <h3 class="text-lightOrange text-2xl font-bold">Kursi Taman</h3>
                        <p class="text-customLightBlue text-base">
                            Melambangkan fondasi yang kuat dan stabilitas yang diperlukan dalam membangun hubungan.
                        </p>
                    </div>
                </div>

                <!-- Kolom 3 -->
                <div class="flex items-start space-x-4">
                    <img src="{{ asset('assets/img/POHON.png') }}" alt="Sidik Jari" class="w-10 h-16">
                    <div>
                        <h3 class="text-lightOrange text-2xl font-bold">Pohon</h3>
                        <p class="text-customLightBlue text-base">
                            Melambangkan pertumbuhan dan kekuatan dalam perjalanan menemukan jati diri.
                        </p>
                    </div>
                </div>

                <!-- Kolom 4 -->
                <div class="flex items-start space-x-4">
                    <img src="{{ asset('assets/img/BACKGROUND_LANGIT.png') }}" alt="Mata" class="w-16 h-16">
                    <div>
                        <h3 class="text-lightOrange text-2xl font-bold">Langit</h3>
                        <p class="text-customLightBlue text-base">
                            Menunjukkan pentingnya refleksi dan kenyamanan dalam memahami diri sendiri.
                        </p>
                    </div>
                </div>
                <!-- Kolom 5 -->
                <div class="flex items-start space-x-4">
                    <img src="{{ asset('assets/img/HIJAU_RUMPUT.png') }}" alt="Mata" class="w-16 h-auto mt-6">
                    <div>
                        <h3 class="text-lightOrange text-2xl font-bold">Rumput</h3>
                        <p class="text-customLightBlue text-base">
                            Simbol kebebasan, harapan, dan komunikasi yang efektif dalam menjalin hubungan harmonis.
                        </p>
                    </div>
                </div>
                <!-- Kolom 6 -->
                <div class="flex items-start space-x-4">
                    <img src="{{ asset('assets/img/JALAN.png') }}" alt="Mata" class="w-16 h-16">
                    <div>
                        <h3 class="text-lightOrange text-2xl font-bold">Jalan Setapak</h3>
                        <p class="text-customLightBlue text-base">
                            Menyimbolkan keseimbangan dan kedamaian dalam kehidupan pribadi dan hubungan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-customOrange dark:bg-gray-900 flex flex-col items-center justify-center h-72">
        <div class="max-w-screen-xl px-4 py-6 mx-auto lg:gap-8 xl:gap-0 lg:py-3">
            <div class="text-center">
                <h1
                    class="max-w-2xl mb-4 text-2xl font-playfair font-bold tracking-tight text-white leading-none md:text-4xl xl:text-4xl dark:text-white">
                    “Is There Anything I Can Do For You?”</h1>
                <p
                    class="max-w-2xl mt-8 mb-6 font-poppins font-base text-white lg:mb-8 md:text-lg lg:text-xl dark:text-black">
                    Setelah anda mengenal kami, apakah ada yang bisa kami bantu?</p>

                <a href="#"
                    class="inline-flex mb-3 mr-3 bg-lightOrange items-center justify-center px-5 py-2 font-bold font-poppins font-base text-center text-white  rounded-lg hover:bg-customOrange hover:text-black focus:ring-4 focus:ring-gray-100 dark:text-white">
                    Coaching
                </a>
                <a href="#"
                    class="inline-flex mb-3 mr-3 bg-lightOliveGreen items-center justify-center px-5 py-2 font-poppins font-semibold text-center text-white  rounded-lg hover:bg-oliveGreen hover:text-black focus:ring-4 focus:ring-gray-100 dark:text-white">
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

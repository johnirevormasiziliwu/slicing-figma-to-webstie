@extends('layouts.app')
@section('content')
    <div class="content">
        <div class="content-header  ">
            <div id="default-carousel" class="relative w-full  " data-carousel="slide">
                <!-- Carousel wrapper -->
                <div
                    class="relative  overflow-hidden    md:h-96 h-[414px] bg-gradient-to-l from-red-700 to-amber-100 rounded-[30px]">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <div class="flex justify-between items-center">
                            <div>
                                <img src="{{ asset('images/event/image-event.png') }}"
                                    class="absolute top-3 w-[397px] h-[375px] mx-12" alt="Image Event">
                            </div>
                            <div class="mt-16">
                                <h1
                                    class="w-[607px] text-gray-700 text-5xl font-bold font-['Red Hat Display'] tracking-wide mr-48">
                                    Tingkatkan Pengetahuan <br>
                                    <h1 class="mt-5 text-gray-700 text-5xl font-bold font-['Inter'] tracking-wide">anda
                                        Bersama Puwan</h1>
                                </h1>

                                <h3
                                    class="w-[632px] text-slate-500 text-2xl font-normal font-['Inter'] mt-10 tracking-wide">
                                    Belajar menjadi perempuan yang mandiri dengan belajar skill baru.</h3>
                            </div>
                        </div>
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <div class="flex justify-between items-center">
                            <div>
                                <img src="{{ asset('images/event/image-event.png') }}"
                                    class="absolute top-3 w-[397px] h-[375px] mx-12" alt="Image Event">
                            </div>
                            <div class="mt-16">
                                <h1
                                    class="w-[607px] text-gray-700 text-5xl font-bold font-['Red Hat Display'] tracking-wide mr-48">
                                    Tingkatkan Pengetahuan <br>
                                    <h1 class="mt-5 text-gray-700 text-5xl font-bold font-['Inter'] tracking-wide">anda
                                        Bersama Puwan</h1>
                                </h1>

                                <h3
                                    class="w-[632px] text-slate-500 text-2xl font-normal font-['Inter'] mt-10 tracking-wide">
                                    Belajar menjadi perempuan yang mandiri dengan belajar skill baru.</h3>
                            </div>
                        </div>
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <div class="flex justify-between items-center">
                            <div>
                                <img src="{{ asset('images/event/image-event.png') }}"
                                    class="absolute top-3 w-[397px] h-[375px] mx-12" alt="Image Event">
                            </div>
                            <div class="mt-16">
                                <h1
                                    class="w-[607px] text-gray-700 text-5xl font-bold font-['Red Hat Display'] tracking-wide mr-48">
                                    Tingkatkan Pengetahuan <br>
                                    <h1 class="mt-5 text-gray-700 text-5xl font-bold font-['Inter'] tracking-wide">anda
                                        Bersama Puwan</h1>
                                </h1>

                                <h3
                                    class="w-[632px] text-slate-500 text-2xl font-normal font-['Inter'] mt-10 tracking-wide">
                                    Belajar menjadi perempuan yang mandiri dengan belajar skill baru.</h3>
                            </div>
                        </div>
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <div class="flex justify-between items-center">
                            <div>
                                <img src="{{ asset('images/event/image-event.png') }}"
                                    class="absolute top-3 w-[397px] h-[375px] mx-12" alt="Image Event">
                            </div>
                            <div class="mt-16">
                                <h1
                                    class="w-[607px] text-gray-700 text-5xl font-bold font-['Red Hat Display'] tracking-wide mr-48">
                                    Tingkatkan Pengetahuan <br>
                                    <h1 class="mt-5 text-gray-700 text-5xl font-bold font-['Inter'] tracking-wide">anda
                                        Bersama Puwan</h1>
                                </h1>

                                <h3
                                    class="w-[632px] text-slate-500 text-2xl font-normal font-['Inter'] mt-10 tracking-wide">
                                    Belajar menjadi perempuan yang mandiri dengan belajar skill baru.</h3>
                            </div>
                        </div>
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <div class="flex justify-between items-center">
                            <div>
                                <img src="{{ asset('images/event/image-event.png') }}"
                                    class="absolute top-3 w-[397px] h-[375px] mx-12" alt="Image Event">
                            </div>
                            <div class="mt-16">
                                <h1
                                    class="w-[607px] text-gray-700 text-5xl font-bold font-['Red Hat Display'] tracking-wide mr-48">
                                    Tingkatkan Pengetahuan <br>
                                    <h1 class="mt-5 text-gray-700 text-5xl font-bold font-['Inter'] tracking-wide">anda
                                        Bersama Puwan</h1>
                                </h1>

                                <h3
                                    class="w-[632px] text-slate-500 text-2xl font-normal font-['Inter'] mt-10 tracking-wide">
                                    Belajar menjadi perempuan yang mandiri dengan belajar skill baru.</h3>
                            </div>
                        </div>
                    </div>
                </div>
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
                </div>
            </div>

        </div>
        <div class="conten-body-new-event mt-20 ">
            <div class="content-body-title-search flex justify-between my-10 ">
                <h1 class="text-gray-700 text-4xl font-semibold font-['Inter'] tracking-wide">Event Terbaru</h1>
                <form action="#">
                    <div class="relative flex items-center">
                        <input type="search" name="" id=""
                            class="h-14 pl-10 pr-3 py-4 rounded-[10px] w-[480px] bg-gray-200 border border-neutral-400"
                            placeholder="Cari Event...">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 absolute top-4 ml-2 items-center ">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>
                    </div>
                </form>
            </div>
            <div class="conten-body-fill-new-event grid md:grid-cols-2 gap-4">
                <div class="  bg-white rounded-[20px] border border-neutral-400 p-6">
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <img src="{{ asset('images/event/image-event2.png') }}" class=" border rounded-[15px]"
                                alt="Image Event">
                        </div>
                        <div class="flex flex-col">
                            <div class="flex flex-row">
                                <div class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round"
                                            d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                                    </svg>
                                    <span
                                        class="text-black ms-2 text-sm font-medium font-['Inter'] tracking-wide">Online</span>
                                </div>
                                <div class="flex ms-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                                    </svg>

                                    <span class="text-black ms-2 text-sm font-medium font-['Inter'] tracking-wide">6 - 7
                                        Oktober 2023</span>
                                </div>
                            </div>
                            <h3 class="w-[301px] text-black text-2xl my-3 font-medium font-['Inter'] tracking-wide">
                                Intensive MPASI Expert</h3>
                            <div
                                class="w-[108px] h-[25px] bg-zinc-100 rounded-[20px] border border-zinc-100 text-center leading-5 ">
                                <span class="w-24 text-gray-700 text-xs font-medium font-['Inter'] tracking-wide">Dr. Yuli
                                    Erlina </span>
                            </div>
                            <div class=" h-[25px] bg-zinc-100 rounded-[20px] border border-zinc-100 px-3 leading-5 mt-3">
                                <span class="w-24 text-gray-700 text-xs font-medium font-['Inter'] tracking-wide">Ns. Reisy
                                    Tane, S.Kep., M.Kep.,Sp.Kep.An</span>
                            </div>
                            <div class="amount flex flex-row mt-10">
                                <span class=" text-red-700 text-2xl font-semibold font-['Inter'] tracking-wide">Rp.
                                    130.000</span>
                                <span
                                    class="w-[98px] text-neutral-400 text-base font-normal font-['Inter'] ms-5 tracking-wide leading-8"><s>Rp.
                                        230.000</s></span>
                            </div>
                            <div class="buy tickets mt-3">
                                <button
                                    class="bg-red-700 h-[47px] w-[145px] rounded-[10px] text-zinc-100 text-sm font-semibold font-['Inter'] tracking-wide">
                                    Beli Tiket
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="  bg-white rounded-[20px] border border-neutral-400 p-6">
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <img src="{{ asset('images/event/image-event3.png') }}" class=" border rounded-[15px]"
                                alt="Image Event">
                        </div>
                        <div class="flex flex-col">
                            <div class="flex flex-row">
                                <div class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round"
                                            d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                                    </svg>
                                    <span
                                        class="text-black ms-2 text-sm font-medium font-['Inter'] tracking-wide">Online</span>
                                </div>
                                <div class="flex ms-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                                    </svg>

                                    <span class="text-black ms-2 text-sm font-medium font-['Inter'] tracking-wide">6 - 7
                                        Oktober 2023</span>
                                </div>
                            </div>
                            <h3 class="w-[301px] text-black text-2xl my-3 font-medium font-['Inter'] tracking-wide">Pahami
                                ini sebelum menikah !</h3>
                            <div
                                class="w-[108px] h-[25px] bg-zinc-100 rounded-[20px] border border-zinc-100 text-center leading-5 ">
                                <span class="w-24 text-gray-700 text-xs font-medium font-['Inter'] tracking-wide">Dr. Yuli
                                    Erlina </span>
                            </div>
                            <div class="amount flex flex-row mt-11">
                                <span
                                    class=" text-red-700 text-2xl font-semibold font-['Inter'] tracking-wide">GRATIS</span>
                                <span
                                    class="w-[98px] text-neutral-400 text-base font-normal font-['Inter'] ms-5 tracking-wide leading-8"><s>Rp.
                                        230.000</s></span>
                            </div>
                            <div class="buy tickets mt-3">
                                <button
                                    class="bg-red-700 h-[47px] w-[145px] rounded-[10px] text-zinc-100 text-sm font-semibold font-['Inter'] tracking-wide">
                                    Beli Tiket
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="  bg-white rounded-[20px] border border-neutral-400 p-6">
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <img src="{{ asset('images/event/image-event4.png') }}" class=" border rounded-[15px]"
                                alt="Image Event">
                        </div>
                        <div class="flex flex-col">
                            <div class="flex flex-row">
                                <div class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round"
                                            d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                                    </svg>
                                    <span
                                        class="text-black ms-2 text-sm font-medium font-['Inter'] tracking-wide">Online</span>
                                </div>
                                <div class="flex ms-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                                    </svg>

                                    <span class="text-black ms-2 text-sm font-medium font-['Inter'] tracking-wide">6 - 7
                                        Oktober 2023</span>
                                </div>
                            </div>
                            <h3 class="w-[301px] text-black text-2xl my-3 font-medium font-['Inter'] tracking-wide">
                                Intensive MPASI Expert</h3>
                            <div
                                class="w-[108px] h-[25px] bg-zinc-100 rounded-[20px] border border-zinc-100 text-center leading-5 ">
                                <span class="w-24 text-gray-700 text-xs font-medium font-['Inter'] tracking-wide">Dr. Yuli
                                    Erlina </span>
                            </div>
                            <div class=" h-[25px] bg-zinc-100 rounded-[20px] border border-zinc-100 px-3 leading-5 mt-3">
                                <span class="w-24 text-gray-700 text-xs font-medium font-['Inter'] tracking-wide">Ns. Reisy
                                    Tane, S.Kep., M.Kep.,Sp.Kep.An</span>
                            </div>
                            <div class="amount flex flex-row mt-10">
                                <span class=" text-red-700 text-2xl font-semibold font-['Inter'] tracking-wide">Rp.
                                    130.000</span>
                                <span
                                    class="w-[98px] text-neutral-400 text-base font-normal font-['Inter'] ms-5 tracking-wide leading-8"><s>Rp.
                                        230.000</s></span>
                            </div>
                            <div class="buy tickets mt-3">
                                <button
                                    class="bg-red-700 h-[47px] w-[145px] rounded-[10px] text-zinc-100 text-sm font-semibold font-['Inter'] tracking-wide">
                                    Beli Tiket
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="  bg-white rounded-[20px] border border-neutral-400 p-6">
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <img src="{{ asset('images/event/image-event5.png') }}" class=" border rounded-[15px]"
                                alt="Image Event">
                        </div>
                        <div class="flex flex-col">
                            <div class="flex flex-row">
                                <div class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round"
                                            d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                                    </svg>
                                    <span
                                        class="text-black ms-2 text-sm font-medium font-['Inter'] tracking-wide">Online</span>
                                </div>
                                <div class="flex ms-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                                    </svg>

                                    <span class="text-black ms-2 text-sm font-medium font-['Inter'] tracking-wide">6 - 7
                                        Oktober 2023</span>
                                </div>
                            </div>
                            <h3 class="w-[301px] text-black text-2xl my-3 font-medium font-['Inter'] tracking-wide">
                                Pregnancy Expert Class</h3>
                            <div
                                class="w-[108px] h-[25px] bg-zinc-100 rounded-[20px] border border-zinc-100 text-center leading-5 ">
                                <span class="w-24 text-gray-700 text-xs font-medium font-['Inter'] tracking-wide">Dr. Yuli
                                    Erlina </span>
                            </div>
                            <div class=" h-[25px] bg-zinc-100 rounded-[20px] border border-zinc-100 px-3 leading-5 mt-3">
                                <span class="w-24 text-gray-700 text-xs font-medium font-['Inter'] tracking-wide">Ns. Reisy
                                    Tane, S.Kep., M.Kep.,Sp.Kep.An</span>
                            </div>
                            <div class="amount flex flex-row mt-10">
                                <span class=" text-red-700 text-2xl font-semibold font-['Inter'] tracking-wide">Rp.
                                    99.000</span>
                                <span
                                    class="w-[98px] text-neutral-400 text-base font-normal font-['Inter'] ms-5 tracking-wide leading-8"><s>Rp.
                                        230.000</s></span>
                            </div>
                            <div class="buy tickets mt-3">
                                <button
                                    class="bg-red-700 h-[47px] w-[145px] rounded-[10px] text-zinc-100 text-sm font-semibold font-['Inter'] tracking-wide">
                                    Beli Tiket
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="  bg-white rounded-[20px] border border-neutral-400 p-6">
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <img src="{{ asset('images/event/image-event6.png') }}" class=" border rounded-[15px]"
                                alt="Image Event">
                        </div>
                        <div class="flex flex-col">
                            <div class="flex flex-row">
                                <div class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round"
                                            d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                                    </svg>
                                    <span
                                        class="text-black ms-2 text-sm font-medium font-['Inter'] tracking-wide">Online</span>
                                </div>
                                <div class="flex ms-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                                    </svg>

                                    <span class="text-black ms-2 text-sm font-medium font-['Inter'] tracking-wide">6 - 7
                                        Oktober 2023</span>
                                </div>
                            </div>
                            <h3 class="w-[301px] text-black text-2xl my-3 font-medium font-['Inter'] tracking-wide">
                                Intensive MPASI Expert</h3>
                            <div
                                class="w-[108px] h-[25px] bg-zinc-100 rounded-[20px] border border-zinc-100 text-center leading-5 ">
                                <span class="w-24 text-gray-700 text-xs font-medium font-['Inter'] tracking-wide">Dr. Yuli
                                    Erlina </span>
                            </div>
                            <div class=" h-[25px] bg-zinc-100 rounded-[20px] border border-zinc-100 px-3 leading-5 mt-3">
                                <span class="w-24 text-gray-700 text-xs font-medium font-['Inter'] tracking-wide">Ns. Reisy
                                    Tane, S.Kep., M.Kep.,Sp.Kep.An</span>
                            </div>
                            <div class="amount flex flex-row mt-10">
                                <span
                                    class=" text-red-700 text-2xl font-semibold font-['Inter'] tracking-wide">GRATIS</span>
                                <span
                                    class="w-[98px] text-neutral-400 text-base font-normal font-['Inter'] ms-5 tracking-wide leading-8"><s>Rp.
                                        230.000</s></span>
                            </div>
                            <div class="buy tickets mt-3">
                                <button
                                    class="bg-red-700 h-[47px] w-[145px] rounded-[10px] text-zinc-100 text-sm font-semibold font-['Inter'] tracking-wide">
                                    Beli Tiket
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="  bg-white rounded-[20px] border border-neutral-400 p-6">
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <img src="{{ asset('images/event/image-event7.png') }}" class=" border rounded-[15px]"
                                alt="Image Event">
                        </div>
                        <div class="flex flex-col">
                            <div class="flex flex-row">
                                <div class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round"
                                            d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                                    </svg>
                                    <span
                                        class="text-black ms-2 text-sm font-medium font-['Inter'] tracking-wide">Online</span>
                                </div>
                                <div class="flex ms-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                                    </svg>

                                    <span class="text-black ms-2 text-sm font-medium font-['Inter'] tracking-wide">6 - 7
                                        Oktober 2023</span>
                                </div>
                            </div>
                            <h3 class="w-[301px] text-black text-2xl my-3 font-medium font-['Inter'] tracking-wide">
                                Intensive MPASI Expert</h3>
                            <div
                                class="w-[108px] h-[25px] bg-zinc-100 rounded-[20px] border border-zinc-100 text-center leading-5 ">
                                <span class="w-24 text-gray-700 text-xs font-medium font-['Inter'] tracking-wide">Dr. Yuli
                                    Erlina </span>
                            </div>
                            <div class=" h-[25px] bg-zinc-100 rounded-[20px] border border-zinc-100 px-3 leading-5 mt-3">
                                <span class="w-24 text-gray-700 text-xs font-medium font-['Inter'] tracking-wide">Ns. Reisy
                                    Tane, S.Kep., M.Kep.,Sp.Kep.An</span>
                            </div>
                            <div class="amount flex flex-row mt-10">
                                <span class=" text-red-700 text-2xl font-semibold font-['Inter'] tracking-wide">Rp.
                                    99.000</span>
                                <span
                                    class="w-[98px] text-neutral-400 text-base font-normal font-['Inter'] ms-5 tracking-wide leading-8"><s>Rp.
                                        230.000</s></span>
                            </div>
                            <div class="buy tickets mt-3">
                                <button
                                    class="bg-red-700 h-[47px] w-[145px] rounded-[10px] text-zinc-100 text-sm font-semibold font-['Inter'] tracking-wide">
                                    Beli Tiket
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="conten-body-popular-e-learning mt-20">
            <div class="content-body-title-next-previous flex justify-between my-10 ">
                <h1 class="text-gray-700 text-4xl font-semibold font-['Inter'] tracking-wide">Popular E-Learning</h1>
                <div class="flex items-center">
                    <button
                        class="bg-white shadow w-[41.50px] h-9 p-2 rounded-md border border-gray-200 flex-col justify-center items-center gap-2.5 inline-flex  ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-7 h-7 text-red-700">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                        </svg>
                    </button>
                    <button
                        class="w-[41.50px] h-9 p-2 ms-3 bg-red-700 rounded-md shadow flex-col justify-center items-center gap-2.5 inline-flex  ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-7 h-7 text-white font-bold">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                        </svg>

                    </button>
                </div>
            </div>
            <div class="content-body-fill-popular-e-learning grid md:grid-cols-4 gap-4">
                <div class="w-full h-auto bg-white rounded-[20px] border border-neutral-400 px-8 py-3">
                    <div class="flex items-center">
                        <img src="{{ asset('images/event/image-event8.png') }}" alt="Image E-Learning">
                        <div class="flex flex-col ms-3">
                            <span class="w-[197px] text-gray-700 text-sm font-medium font-['Inter'] tracking-wide">Iga
                                Serpianing Aroma, M.Psi </span>
                            <span
                                class="w-[122px] text-slate-500 text-[10px] font-normal font-['Inter'] tracking-wide">Psikolog
                                Perkembangan</span>
                        </div>
                    </div>
                    <div class="image-title">
                        <img src="{{ asset('images/event/image-event7.png') }}"
                            class="mx-auto mt-5 my-1 w-[263.90px] h-[264.87px] rounded-[15px] border" alt="">
                        <span
                            class="w-[264px] h-[26px] text-gray-700 text-xl font-medium font-['Inter'] tracking-wide">Intensive
                            MPASI Expert</span>
                    </div>
                    <div class="amount-ranting mt-10 ">
                        <hr class="border-neutral-400 ">
                        <div class="flex justify-between mt-4 ">
                            <div class="flex flex-row items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-6 h-6 text-amber-400">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span
                                    class="w-7 text-gray-700 text-base ms-2 font-medium font-['Inter'] tracking-wide leading-5">5.0</span>

                            </div>
                            <span
                                class="w-[183px] h-[31px] text-right text-red-700 text-2xl font-bold font-['Inter'] tracking-wide">Rp.
                                230.000</span>
                        </div>
                    </div>

                </div>
                <div class="w-full h-auto bg-white rounded-[20px] border border-neutral-400 px-8 py-3">
                    <div class="flex items-center">
                        <img src="{{ asset('images/event/image-event8.png') }}" alt="Image E-Learning">
                        <div class="flex flex-col ms-3">
                            <span class="w-[197px] text-gray-700 text-sm font-medium font-['Inter'] tracking-wide">Iga
                                Serpianing Aroma, M.Psi </span>
                            <span
                                class="w-[122px] text-slate-500 text-[10px] font-normal font-['Inter'] tracking-wide">Psikolog
                                Perkembangan</span>
                        </div>
                    </div>
                    <div class="image-title">
                        <img src="{{ asset('images/event/image-event9.png') }}"
                            class="mx-auto mt-5 my-1 w-[263.90px] h-[264.87px] rounded-[15px] border" alt="">
                        <span
                            class="w-[264px] h-[26px] text-gray-700 text-xl font-medium font-['Inter'] tracking-wide">Sleep
                            Training Advance</span>
                    </div>
                    <div class="amount-ranting mt-10 ">
                        <hr class="border-neutral-400 ">
                        <div class="flex justify-between  ">
                            <div class="flex flex-row items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-6 h-6 text-amber-400">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span
                                    class="w-7 text-gray-700 text-base ms-2 font-medium font-['Inter'] tracking-wide leading-5">5.0</span>

                            </div>
                            <div class="flex flex-col">
                                <span
                                class="w-[98px] ms-[83px] text-neutral-400 text-base font-normal font-['Inter']  tracking-wide leading-8"><s>Rp.
                                    230.000</s></span>
                                <span
                                class="w-[183px] h-[31px] text-right text-red-700 text-2xl font-bold font-['Inter'] tracking-wide">Rp.
                                230.000</span>
                            </div>
                            
                        </div>
                    </div>

                </div>
                 <div class="w-full h-auto bg-white rounded-[20px] border border-neutral-400 px-8 py-3">
                    <div class="flex items-center">
                        <img src="{{ asset('images/event/image-event8.png') }}" alt="Image E-Learning">
                        <div class="flex flex-col ms-3">
                            <span class="w-[197px] text-gray-700 text-sm font-medium font-['Inter'] tracking-wide">Iga
                                Serpianing Aroma, M.Psi </span>
                            <span
                                class="w-[122px] text-slate-500 text-[10px] font-normal font-['Inter'] tracking-wide">Psikolog
                                Perkembangan</span>
                        </div>
                    </div>
                    <div class="image-title">
                        <img src="{{ asset('images/event/image-event4.png') }}"
                            class="mx-auto mt-5 my-1 w-[263.90px] h-[264.87px] rounded-[15px] border" alt="">
                        <span
                            class="w-[264px] h-[26px] text-gray-700 text-xl font-medium font-['Inter'] tracking-wide">Montessori Expert Class <br> Advance</span>
                    </div>
                    <div class="amount-ranting mt-3 ">
                        <hr class="border-neutral-400 ">
                        <div class="flex justify-between mt-4 ">
                            <div class="flex flex-row items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-6 h-6 text-amber-400">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span
                                    class="w-7 text-gray-700 text-base ms-2 font-medium font-['Inter'] tracking-wide leading-5">5.0</span>

                            </div>
                            <span
                                class="w-[183px] h-[31px] text-right text-red-700 text-2xl font-bold font-['Inter'] tracking-wide">Rp.
                                230.000</span>
                        </div>
                    </div>

                </div>
                <div class="w-full h-auto bg-white rounded-[20px] border border-neutral-400 px-8 py-3">
                    <div class="flex items-center">
                        <img src="{{ asset('images/event/image-event8.png') }}" alt="Image E-Learning">
                        <div class="flex flex-col ms-3">
                            <span class="w-[197px] text-gray-700 text-sm font-medium font-['Inter'] tracking-wide">Iga
                                Serpianing Aroma, M.Psi </span>
                            <span
                                class="w-[122px] text-slate-500 text-[10px] font-normal font-['Inter'] tracking-wide">Psikolog
                                Perkembangan</span>
                        </div>
                    </div>
                    <div class="image-title">
                        <img src="{{ asset('images/event/image-event5.png') }}"
                            class="mx-auto mt-5 my-1 w-[263.90px] h-[264.87px] rounded-[15px] border" alt="">
                        <span
                            class="w-[264px] h-[26px] text-gray-700 text-xl font-medium font-['Inter'] tracking-wide">Pregnancy Expert Class Bersama Dr. Andi</span>
                    </div>
                    <div class="amount-ranting mt-3 ">
                        <hr class="border-neutral-400 ">
                        <div class="flex justify-between  ">
                            <div class="flex flex-row items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-6 h-6 text-amber-400">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span
                                    class="w-7 text-gray-700 text-base ms-2 font-medium font-['Inter'] tracking-wide leading-5">5.0</span>

                            </div>
                            <div class="flex flex-col">
                                <span
                                class="w-[98px] ms-[83px] text-neutral-400 text-base font-normal font-['Inter']  tracking-wide leading-8"><s>Rp.
                                    230.000</s></span>
                                <span
                                class="w-[183px] h-[31px] text-right text-red-700 text-2xl font-bold font-['Inter'] tracking-wide">Rp.
                                230.000</span>
                            </div>
                            
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection

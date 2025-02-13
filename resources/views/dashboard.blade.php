<x-app-layout>
    <div class="py-4">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col sm:flex-row justify-between">
                <div class=" w-full sm:w-1/2">
                    <p class="text-left mt-4 sm:mt-6 text-sm sm:text-md font-regular text-[#00593b]">
                        {{ \Carbon\Carbon::now()->locale('id')->translatedFormat('l, d F Y') }}
                    </p>
                    <p class="text-left mt-2 sm:mt-6 text-xl smtext-2xl font-bold text-[#00593b]">
                        Efektif, Akuntabel, dan Transparan <br>
                        SIBAZNAS untuk Manajemen yang Lebih Baik
                    </p>
                    <div class="flex items-center mt-2 sm:mt-6">
                    <div class="flex gap-0 sm:gap-1 mr-2 sm:mr-4">
                            <a
                                href="https://www.instagram.com/baznascilacap?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                                target="_blank">
                                <img src="{{ asset('build/icons/ig.png') }}" alt="Instagram" class="w-6 sm:w-8 h-6 sm:h-8"></a>
                            <a href="https://www.tiktok.com/@baznaskab.cilacap_?is_from_webapp=1&sender_device=pc" target="_blank">
                                <img src="{{ asset('build/icons/tw.png') }}" alt="TikTok" class="w-6 sm:w-8 h-6 sm:h-8"></a>
                            <a href="https://www.facebook.com/BaznasKabCilacap/" target="_blank">
                                <img src="{{ asset('build/icons/fb.png') }}" alt="Facebook" class="w-6 sm:w-8 h-6 sm:h-8"></a>
                            <a href="https://wa.me/6285842716803" target="_blank" rel="noopener noreferrer">
                                <img src="{{ asset('build/icons/wa.png') }}" alt="WhatsApp" class="w-6 sm:w-8 h-6 sm:h-8"></a>
                        </div>

                        <a href="https://baznas-cilacap.or.id/" target="_blank" class="text-md sm:text-xl text-[#00593b] font-medium">BAZNAS CILACAP</a>
                    </div>
                </div>
                <div class="flex flex-col sm:flex-row gap-2 mt-6 w-full sm:w-1/2">
                    @php
                        $isDisabled = auth()->user()->driver_id ? 'pointer-events-none opacity-50' : '';
                    @endphp
                    <a href="#" class="w-full px-4 py-4 bg-[#00593b] text-white rounded-lg shadow-md hover:bg-green-800 transition flex flex-col justify-center {{ $isDisabled }}">
                            <h3 class="text-2xl font-bold">E-DISDAY</h3>
                            <p class="text-md font-medium mt-2">Data Permohonan / Disday</p>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="size-6 mt-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                    </a>

                    <a href="#" class="w-full px-6 py-4 bg-[#00593b] text-white rounded-lg shadow-md hover:bg-green-800 transition flex flex-col justify-center">
                        <button>
                            <h3 class="text-2xl font-bold">E-AMBULANCE</h3>
                            <p class="text-md font-medium mt-2">Data Layanan Ambulance</p>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="size-6 mt-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>                              
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
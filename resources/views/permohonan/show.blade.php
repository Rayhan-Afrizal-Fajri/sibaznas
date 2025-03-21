<x-app-layout>
    @section('main_folder', 'Permohonan') @section('main_folder-link', route('permohonan.index')) @section('sub_folder',
    'Detail Permohonan')
    @section('content')
        {{-- The whole world belongs to you. --}}
        @if ($detail_permohonan)
            @php

                if ($detail_permohonan->permohonan_status_input == 'Selesai Input') {
                    $bg_fo = 'bg-[#00593b]';
                    $ket = 'Pengajuan Selesai diinput FO';
                    $text = 'text-[#00593b]';
                } else {
                    $bg_fo = 'bg-yellow-400';
                    $ket = 'Pengajuan Blm Selesai diinput FO';
                    $text = 'text-yellow-400';
                }

                if ($detail_permohonan->permohonan_status_atasan == 'Diterima') {
                    $bg_atasan = 'bg-[#00593b]';
                    $ket_atasan = 'Sudah Disetujui Atasan';
                    $text = 'text-[#00593b]';
                } elseif ($detail_permohonan->permohonan_status_atasan == 'Ditolak') {
                    $bg_atasan = 'bg-[#dc2626]';
                    $ket_atasan = 'Ditolak Atasan';
                    $text = 'text-[#00593b]';
                } else {
                    $bg_atasan = 'bg-yellow-400';
                    $ket_atasan = 'Blm Direspon Atasan';
                    $text = 'text-yellow-400';
                }

                if ($detail_permohonan->survey_status == 'Selesai') {
                    $bg_survey = 'bg-[#00593b]';
                    $ket_survey = 'Sudah Survey';
                    $text = 'text-[#00593b]';
                } else {
                    $bg_survey = 'bg-yellow-400';
                    $ket_survey = 'Blm Survey';
                    $text = 'text-yellow-400';
                }

                if ($detail_permohonan->pencairan_status == 'Berhasil Dicairkan') {
                    $bg_pencairan = 'bg-[#00593b]';
                    $ket_pencairan = 'Sudah Dicairkan';
                    $text = 'text-[#00593b]';
                } elseif ($detail_permohonan->pencairan_status == 'Ditolak') {
            $bg_pencairan = 'bg-[#dc2626]';
            $ket_pencairan = 'Pencairan Ditolak';
        } 
                else {
                    $bg_pencairan = 'bg-yellow-400';
                    $ket_pencairan = 'Blm Dicairkan';
                    $text = 'text-yellow-400';
                }

            @endphp

            {{-- {{ dd(session('activeTab')) }} --}}


            <nav class="flex flex-col sm:flex-row" aria-label="Tabs" role="tablist" aria-orientation="horizontal">
                <button type="button"
                    class="hs-tab-active:font-semibold rounded-t-md border-b border-gray-200 hs-tab-active:border-gray-200 hs-tab-active:border-t hs-tab-active:border-l hs-tab-active:border-r   hs-tab-active:border-[#00593b] hs-tab-active:border-b-transparent hs-tab-active:text-[#00593b] py-2 px-1 inline-flex items-center gap-x-2 text-xs whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none active"
                    id="permohonan-item" aria-selected="true" data-hs-tab="#permohonan" aria-controls="permohonan"
                    role="tab">
                    1. Data Permohonan
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="size-4 {{ $text }}">
                        <path fill-rule="evenodd"
                            d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <button type="button"
                    class="hs-tab-active:font-semibold rounded-t-md border-b border-gray-200 hs-tab-active:border-gray-200 hs-tab-active:border-t hs-tab-active:border-l hs-tab-active:border-r hs-tab-active:border-[#00593b] hs-tab-active:border-b-transparent hs-tab-active:text-blue-600 py-2 px-1 inline-flex items-center gap-x-2 text-xs whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none"
                    id="persetujuan-atasan-item" aria-selected="false" data-hs-tab="#persetujuan-atasan"
                    aria-controls="persetujuan-atasan" role="tab">
                    2. Persetujuan Atasan
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="size-4 {{ $text }}">
                        <path fill-rule="evenodd"
                            d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <button type="button"
                    class="hs-tab-active:font-semibold rounded-t-md border-b border-gray-200 hs-tab-active:border-gray-200 hs-tab-active:border-t hs-tab-active:border-l hs-tab-active:border-r hs-tab-active:border-[#00593b] hs-tab-active:border-b-transparent hs-tab-active:text-blue-600 py-2 px-1 inline-flex items-center gap-x-2 text-xs whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none"
                    id="survey-item" aria-selected="false" data-hs-tab="#survey" aria-controls="survey" role="tab">
                    3. Survey
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="size-4 {{ $text }}">
                        <path fill-rule="evenodd"
                            d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 6a.75.75 0 0 0-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 0 0 0-1.5h-3.75V6Z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <button type="button"
                    class="hs-tab-active:font-semibold rounded-t-md border-b border-gray-200 hs-tab-active:border-gray-200 hs-tab-active:border-t hs-tab-active:border-l hs-tab-active:border-r hs-tab-active:border-[#00593b] hs-tab-active:border-b-transparent hs-tab-active:text-blue-600 py-2 px-1 inline-flex items-center gap-x-2 text-xs whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none"
                    id="pencairan-keuangan-item" aria-selected="false" data-hs-tab="#pencairan-keuangan"
                    aria-controls="pencairan-keuangan" role="tab">
                    4. Pencairan Keuangan
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                    class="size-4 {{ $text }}">
                    <path fill-rule="evenodd"
                        d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 6a.75.75 0 0 0-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 0 0 0-1.5h-3.75V6Z"
                        clip-rule="evenodd" />
                </svg>
                </button>
                <button type="button"
                    class="hs-tab-active:font-semibold rounded-t-md border-b border-gray-200 hs-tab-active:border-gray-200 hs-tab-active:border-t hs-tab-active:border-l hs-tab-active:border-r hs-tab-active:border-[#00593b] hs-tab-active:border-b-transparent hs-tab-active:text-blue-600 py-2 px-1 inline-flex items-center gap-x-2 text-xs whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none"
                    id="lpj-ba-item" aria-selected="false" data-hs-tab="#lpj-ba" aria-controls="lpj-ba" role="tab">
                    5. LPJ & BA
                </button>
            </nav>



            <div class="mt-3 mb-3">
                <div class="w-full bg-white shadow px-3 pt-2 pb-3 border border-gray-200 rounded-md">
                    <span
                        class="inline-flex items-center gap-x-1.5 py-0.5 px-1 rounded-[4px] text-[9px] font-medium {{ $bg_fo }} text-white">
                        {{ $ket }}
                    </span>
                    <span
                        class="inline-flex items-center gap-x-1.5 py-0.5 px-1 rounded-[4px] text-[9px] font-medium {{ $bg_atasan }} text-white">
                        {{ $ket_atasan }}
                    </span>
                    <span
                        class="inline-flex items-center gap-x-1.5 py-0.5 px-1 rounded-[4px] text-[9px] font-medium {{ $bg_survey }} text-white">
                        {{ $ket_survey }}
                    </span>
                    <span
                        class="inline-flex items-center gap-x-1.5 py-0.5 px-1 rounded-[4px] text-[9px] font-medium {{ $bg_pencairan }} text-white">
                        {{ $ket_pencairan }}
                    </span>
                    <div class="flex items-center gap-0.5 mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-3">
                            <path fill-rule="evenodd"
                                d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm8.706-1.442c1.146-.573 2.437.463 2.126 1.706l-.709 2.836.042-.02a.75.75 0 0 1 .67 1.34l-.04.022c-1.147.573-2.438-.463-2.127-1.706l.71-2.836-.042.02a.75.75 0 1 1-.671-1.34l.041-.022ZM12 9a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                                clip-rule="evenodd" />
                        </svg>
                        <p class="font-regular text-xs">Pencairan dana oleh divisi keuangan</p>
                    </div>
                </div>
            </div>

            <div class="mt-3">
                <div id="permohonan" role="tabpanel" aria-labelledby="permohonan-item">
                    @include('detail_permohonan.tab_v1')
                </div>

                <div id="persetujuan-atasan" class="hidden" role="tabpanel" aria-labelledby="persetujuan-atasan-item">
                    @include('detail_permohonan.tab_v2')
                </div>

                <div id="survey" class="hidden" role="tabpanel" aria-labelledby="survey-item">
                    @include('detail_permohonan.tab_v3')
                </div>

                <div id="pencairan-keuangan" class="hidden" role="tabpanel" aria-labelledby="pencairan-keuangan-item">
                    @include('detail_permohonan.tab_v4')
                </div>


                <div id="lpj-ba" class="hidden" role="tabpanel" aria-labelledby="lpj-ba-item">
                    <p class="text-gray-500">
                        This is the
                        <em class="font-semibold text-gray-800">fifth</em>
                        item's tab body.
                    </p>
                </div>

            </div>

            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    let urlParams = new URLSearchParams(window.location.pathname);

                    // Cek apakah halaman yang diakses adalah "detail-permohonan"
                    if (urlParams.toString().includes("detail-permohonan")) {
                        let lastUpdatedTab = sessionStorage.getItem("lastUpdatedTab");

                        if (!lastUpdatedTab) {
                            // Jika tidak ada tab yang baru diupdate, reset ke Data Permohonan
                            sessionStorage.setItem("activeTab", "#permohonan");
                        }
                    }

                    // Ambil tab terakhir yang disimpan di sessionStorage, default ke #permohonan
                    let activeTabId = sessionStorage.getItem("activeTab") || "#permohonan";

                    // Seleksi semua tab dan panel
                    let tabs = document.querySelectorAll('button[role="tab"]');
                    let panels = document.querySelectorAll('[role="tabpanel"]');

                    // Fungsi untuk mengaktifkan tab
                    function activateTab(tabId) {
                        tabs.forEach(tab => {
                            tab.classList.remove('active', 'hs-tab-active:font-semibold',
                                'hs-tab-active:text-[#00593b]', 'hs-tab-active:border-[#00593b]');
                            tab.setAttribute('aria-selected', 'false');
                        });

                        panels.forEach(panel => {
                            panel.classList.add('hidden');
                        });

                        let targetTab = document.querySelector(`button[data-hs-tab="${tabId}"]`);
                        let targetPanel = document.querySelector(tabId);

                        if (targetTab && targetPanel) {
                            targetTab.classList.add('active', 'hs-tab-active:font-semibold', 'hs-tab-active:text-[#00593b]',
                                'hs-tab-active:border-[#00593b]');
                            targetTab.setAttribute('aria-selected', 'true');
                            targetPanel.classList.remove('hidden');

                            sessionStorage.setItem("activeTab", tabId);
                        }
                    }

                    // Tambahkan event listener ke setiap tab
                    tabs.forEach(tab => {
                        tab.addEventListener("click", function() {
                            let tabId = this.getAttribute("data-hs-tab");
                            activateTab(tabId);
                            sessionStorage.setItem("lastUpdatedTab",
                                tabId); // Simpan tab yang terakhir diklik
                        });
                    });

                    // Jalankan fungsi aktivasi tab
                    activateTab(activeTabId);
                });
            </script>
        @endif

    @endsection








</x-app-layout>

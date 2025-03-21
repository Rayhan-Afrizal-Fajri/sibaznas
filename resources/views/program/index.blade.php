<x-app-layout>
    @section('main_folder', 'Program') @section('content')

    <div class="flex flex-col gap-2">
        <div class="text-[#00593b]">
            Data Program
        </div>
        <div
            class="bg-white rounded-lg shadow border w-full flex justify-between items-center p-6">
            <div class="flex gap-1 items-center">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                    class="size-4">
                    <path
                        fill-rule="evenodd"
                        d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm8.706-1.442c1.146-.573 2.437.463 2.126 1.706l-.709 2.836.042-.02a.75.75 0 0 1 .67 1.34l-.04.022c-1.147.573-2.438-.463-2.127-1.706l.71-2.836-.042.02a.75.75 0 1 1-.671-1.34l.041-.022ZM12 9a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                        clip-rule="evenodd"/>
                </svg>
                <span class="text-sm">Menampilkan data program dan sub program Baznas Cilacap</span>
            </div>
            <button
                class="bg-transparent border border-[#00593b] px-2 py-1 text-[#00593b] rounded-md hover:text-white hover:bg-[#00593b] hover:border-transparent">
                <div class="flex gap-1 justify-between items-center">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                        class="size-4">
                        <path
                            fill-rule="evenodd"
                            d="M5.625 1.5H9a3.75 3.75 0 0 1 3.75 3.75v1.875c0 1.036.84 1.875 1.875 1.875H16.5a3.75 3.75 0 0 1 3.75 3.75v7.875c0 1.035-.84 1.875-1.875 1.875H5.625a1.875 1.875 0 0 1-1.875-1.875V3.375c0-1.036.84-1.875 1.875-1.875Zm5.845 17.03a.75.75 0 0 0 1.06 0l3-3a.75.75 0 1 0-1.06-1.06l-1.72 1.72V12a.75.75 0 0 0-1.5 0v4.19l-1.72-1.72a.75.75 0 0 0-1.06 1.06l3 3Z"
                            clip-rule="evenodd"/>
                        <path
                            d="M14.25 5.25a5.23 5.23 0 0 0-1.279-3.434 9.768 9.768 0 0 1 6.963 6.963A5.23 5.23 0 0 0 16.5 7.5h-1.875a.375.375 0 0 1-.375-.375V5.25Z"/>
                    </svg>
                    <span class="text-sm">Ekspor</span>
                </div>
            </button>
        </div>
        @if(session('success'))
        <div
            id="alert-success"
            class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
            role="alert">
            <svg
                class="shrink-0 w-4 h-4"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 1 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Success</span>
            <div class="ms-3 text-sm font-medium">{{ session('success') }}</div>
            <button
                type="button"
                onclick="document.getElementById('alert-success').style.display='none';"
                class="ms-auto bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700">
                <span class="sr-only">Close</span>
                <svg
                    class="w-3 h-3"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 14 14">
                    <path
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
        @endif @if(session('error'))
        <div
            id="alert-error"
            class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
            role="alert">
            <svg
                class="shrink-0 w-4 h-4"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 1 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Error</span>
            <div class="ms-3 text-sm font-medium">{{ session('error') }}</div>
            <button
                type="button"
                onclick="document.getElementById('alert-error').style.display='none';"
                class="ms-auto bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700">
                <span class="sr-only">Close</span>
                <svg
                    class="w-3 h-3"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 14 14">
                    <path
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
        @endif

        <div class="flex justify-between items-start gap-2 sm:gap-4">
            <div
                class="sm:w-1/2 w-full bg-white border shadow p-4 rounded-lg flex flex-col items-center justify-center gap-2">
                <div
                    class="w-full flex flex-col sm:flex-row items-center justify-between sm:relative">
                    <!-- Span tetap di tengah -->
                    <span class="font-bold">
                        Daftar Program
                    </span>

                    <!-- Bagian tombol -->
                    <div class="flex gap-2">
                        <div id="editDeleteProgramContainer" class="hidden flex gap-2">
                            <button
                                id="openModal-EditProgram"
                                class="bg-yellow-400 px-3 py-2 text-xs font-semibold text-white rounded-lg">
                                Edit
                            </button>
                            <!-- Form untuk menghapus program -->
                            <form id="deleteProgramForm" method="POST" action="">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" id="deleteProgramId" name="program_id">
                                    <button
                                        type="submit"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus program ini?')"
                                        class="bg-red-700 px-3 py-2 text-xs font-semibold text-white rounded-lg">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                            <button
                                id="openModal-addProgram"
                                class="bg-[#00593b] px-3 py-2 text-xs font-semibold text-white rounded-lg flex justify-center gap-1">
                                Tambah
                            </button>
                        </div>
                    </div>
                    
                    <table
                        {{-- id="myTable" --}}
                        class="w-100 sm:min-w-full text-sm text-left text-gray-500 border border-gray-300 shadow-md rounded-lg">
                        <thead class="text-[12px] sm:text-sm text-gray-700 bg-white">
                            <tr>
                                <th class="px-2 text-center py-3 border w-[40px]">NO</th>
                                <th class="px-2 text-center py-3 border" colspan="2">Nama Program</th>
                                {{-- <th class="px-2 text-center py-3 border">Aksi</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($programs as $p)
                            <tr
                                class="bg-white border-b cursor-pointer program-row"
                                data-id="{{ $p->program_id }}"
                                data-program="{{ $p->program }}">
                                <td class="px-2 text-center py-4 border">{{ $loop->iteration }}</td>
                                <td class="px-2 text-center py-4 border">
                                    {{ $p->program }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="w-full bg-white border shadow px-4 pb-10 pt-4 rounded-lg flex flex-col items-center justify-center gap-2  overflow-x-auto">
                    <span class="w-full text-center font-bold mb-4">Daftar Sub Program</span>
                
                    <div class="w-full flex items-center justify-center gap-2 bg-white shadow border px-2 py-4 rounded-lg subProgramLabel">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                            <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm8.706-1.442c1.146-.573 2.437.463 2.126 1.706l-.709 2.836.042-.02a.75.75 0 0 1 .67 1.34l-.04.022c-1.147.573-2.438-.463-2.127-1.706l.71-2.836-.042.02a.75.75 0 1 1-.671-1.34l.041-.022ZM12 9a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-center font-regular">Pilih program terlebih dahulu</span>
                    </div>
                
                    <!-- Tambahkan Wrapper untuk Responsiveness -->
                    <div class="w-full">
                        <table class="w-full min-w-[500px] text-sm text-left text-gray-500 border border-gray-300 shadow-md rounded-lg hidden subProgramTable">
                            <thead class="text-[12px] sm:text-sm text-gray-700 bg-white">
                                <tr>
                                    <th class="px-2 text-center py-3 border w-[40px]">NO</th>
                                    <th class="px-2 text-center py-3 flex justify-between items-center border-b">
                                        Nama Sub Program
                                        <button id="openModal-addSubProgram" class="bg-[#00593b] px-3 py-2 text-xs font-semibold text-white rounded-lg flex justify-center gap-1">
                                            Tambah
                                        </button>
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="subProgramRow"></tbody>
                        </table>
                    </div>
                </div>
                
            </div>
        </div>

        <!-- Modal Aksi Program & Sub Program -->
        @include('modal.modal_tambah_program')
        @include('modal.modal_tambah_sub_program') @include('modal.modal_edit_program')
        @include('modal.modal_edit_sub_program')

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.program-row').click(function () {
                    var programId = $(this).data("id");
                    var programName = $(this).data("program");
                    $("#editDeleteProgramContainer").removeClass("hidden");

                    // Setel ID program ke input hidden dalam form
                    $("#deleteProgramId").val(programId);
                    $("#deleteProgramForm").attr("action", "/program/" + programId);

                    $("#sub_program-programIdEdit").val(programId);
                    $("#sub_program-programNameEdit").val(programName);
                    $("#edit_program_id").val(programId);
                    $("#edit_program").val(programName);

                    $('.program-row').removeClass("bg-gray-300 bg-white");
                    $(this).addClass("bg-gray-300");

                    $('.subProgramTable').removeClass("hidden");
                    $('.subProgramLabel').addClass("hidden");

                    $.ajax({
                        url: "/get-sub-program/" + programId,
                        type: "GET",
                        success: function (data) {
                            var programLabel = $("#programLabel");
                            var subProgramRow = $("#subProgramRow");
                            subProgramRow.empty();
                            $('.programLabel').removeClass("hidden");

                            if (data.length > 0) {
                                programLabel.text(
                                    data.program
                                        ? data.program.program
                                        : "Program tidak ditemukan"
                                );

                                $.each(data, function (index, sub) {
                                    subProgramRow.append(
                                        `<tr class="bg-white border-b">
                                <td class="px-2 text-center py-4 border">${index +
                                        1}</td>
                                <td class="px-2 text-center py-4 flex justify-between items-center">
                                    <p>${sub.sub_program}</p>
                                    <div class="flex items-center gap-2 px-4">
                                        <button data-id="${sub.sub_program_id}" data-editprogramname="${programName}" data-subprogram="${sub.sub_program}" class="openModal-EditSubProgram"> 
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-yellow-400">
                                                <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                                            </svg>
                                        </button>
                                        <form method="POST" action="/sub_program/${sub.sub_program_id}">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" value="${sub.sub_program_id}" name="program_id">
                                            <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus sub program ini?')" class="bg-red-700 px-3 py-2 text-xs font-semibold text-white rounded-lg">
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>`
                                    );
                                });
                            } else {
                                programLabel.text(
                                    data.program
                                        ? data.program.program
                                        : "Program tidak ditemukan"
                                );
                                subProgramRow.append(
                                    `<tr><td colspan="2" class="text-center py-4">Tidak ada sub program</td></tr>`
                                );
                            }
                        },
                        error: function () {
                            alert("Terjadi kesalahan saat mengambil data sub-program");
                        }
                    });
                });

                // Event delegation untuk tombol Edit Sub Program
                $(document).on("click", ".openModal-EditSubProgram", function () {
                    var subProgramId = $(this).data("id");
                    var subProgramName = $(this).data("subprogram");
                    var editProgramName = $(this).data("editprogramname");

                    $("#edit_sub_program_id").val(subProgramId);
                    $("#edit_sub_program_name").val(subProgramName);
                    $("#edit_program_name").val(editProgramName);
                    $("#modal-EditSubProgram").removeClass("hidden");
                });

                $("#openModal-addProgram").click(function () {
                    $("#modal-addProgram").removeClass("hidden");
                });

                $("#openModal-addSubProgram").click(function () {
                    $("#modal-addSubProgram").removeClass("hidden");
                });

                $("#openModal-EditProgram").click(function () {
                    $("#modal-EditProgram").removeClass("hidden");
                });

                function confirmDelete() {
                    return confirm("Apakah Anda yakin ingin menghapus program ini?");
                }
            });

            // Fungsi untuk menutup modal berdasarkan ID modal yang dikirim
            function closeModal(modalId) {
                $("#" + modalId).addClass("hidden");
            }
        </script>

        @endsection
    </x-app-layout>
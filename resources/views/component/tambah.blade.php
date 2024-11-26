<!-- Tombol untuk memunculkan modal -->
<div class="tambah mx-4 my-2">
    <button id="openModal-tambah"
        class="bg-green-400 hover:bg-green-700 shadow font-bold text-white px-4 py-1 rounded-lg">
        Tambah
    </button>
</div>
<!-- Modal -->
<div id="tambahModal" class="fixed z-10 inset-0 overflow-y-auto hidden">
    <div class="flex items-center justify-center min-h-screen">
        <!-- Background overlay -->
        <div class="fixed inset-0 transition-opacity" aria-hidden="true">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <!-- Modal content -->
        <div
            class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full">
            <div class="bg-white p-6 xl justify-center">
                <h2 class="font-bold text-3xl mb-4">Tambah Data</h2>
                <!-- Form dalam modal -->
                <form action="{{ route('data_pks.tambah') }}" method="POST" class="capitalize">
                    @csrf
                    <div class="mb-4">
                        <label for="tanggal" class="block text-xl font-medium text-gray-700">tanggal</label>
                        <input type="date" name="tanggal" id="tanggal"
                            class="mt-1 block w-full p-2 border-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-xl">
                    </div>
                    <div class="mb-4">
                        <label for="nama_perusahaan" class="block text-xl font-medium text-gray-700">nama perusahaan</label>
                        <input type="text" name="nama_perusahaan" id="nama_perusahaan"
                            class="mt-1 block w-full p-2 border-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-xl">
                    </div>
                    <div class="mb-4">
                        <label for="golongan" class="block text-xl font-medium text-gray-700">golongan</label>
                        <input type="text" name="golongan" id="golongan"
                            class="mt-1 block w-full p-2 border-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-xl">
                    </div>
                    <div class="mb-4">
                        <label for="minimum" class="block text-xl font-medium text-gray-700">minimum
                        </label>
                        <input type="number" name="minimum" id="minimum"
                            class="mt-1 block w-full p-2 border-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-xl">
                    </div>
                    <div class="mb-4">
                        <label for="tarif_1" class="block text-xl font-medium text-gray-700">tarif_1
                        </label>
                        <input type="number" name="tarif_1" id="tarif_1"
                            class="mt-1 block w-full p-2 border-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-xl">
                    </div>
                    <div class="mb-4">
                        <label for="tarif_2" class="block text-xl font-medium text-gray-700">tarif_2
                        </label>
                        <input type="number" name="tarif_2" id="tarif_2"
                            class="mt-1 block w-full p-2 border-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-xl">
                    </div>
                    <div class="mb-4">
                        <label for="tarif_3" class="block text-xl font-medium text-gray-700">tarif_3
                        </label>
                        <input type="number" name="tarif_3" id="tarif_3"
                            class="mt-1 block w-full p-2 border-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-xl">
                    </div>
                    <div class="mb-4">
                        <label for="masa_perjanjian" class="block text-xl font-medium text-gray-700">masa perjanjian
                        </label>
                        <input type="text" name="masa_perjanjian" id="masa_perjanjian"
                            class="mt-1 block w-full p-2 border-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-xl">
                    </div>
                    <div class="flex justify-end">
                        <button type="button" id="closeModal-tambah"
                            class="bg-gray-400 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded-lg mr-2">
                            Close
                        </button>
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
<script>
    const tambahModal = document.getElementById("tambahModal");
    const openModal_tambah = document.getElementById("openModal-tambah");
    const closeModal_tambah = document.getElementById("closeModal-tambah");
    openModal_tambah.addEventListener("click", function() {
        tambahModal.classList.remove("hidden");
    });
    closeModal_tambah.addEventListener("click", function() {
        tambahModal.classList.add("hidden");
    });
    window.onclick = function(event) {
        if (event.target == modal) {
            tambahModal.classList.add("hidden");
        }
    };
</script>

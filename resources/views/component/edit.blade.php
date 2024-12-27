<!-- Tombol untuk memunculkan modal -->
<div class="edit mx-4 my-2">
    <button id="openModal-edit"
        class="bg-blue-400 hover:bg-blue-700 shadow font-bold text-white px-4 py-1 rounded-lg">
        edit
    </button>
</div>
<!-- Modal -->
<div id="editModal" class="fixed z-10 inset-0 overflow-y-auto hidden">
    <div class="flex items-center justify-center min-h-screen">
        <!-- Background overlay -->
        <div class="fixed inset-0 transition-opacity" aria-hidden="true">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <!-- Modal content -->
        <div
            class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full">
            <div class="bg-white p-6 xl justify-center">
                <h2 class="font-bold text-3xl mb-4">edit Data</h2>
                <!-- Form dalam modal -->
                <form action="{{ route('data_pks.update') }}" method="POST" class="capitalize">
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
                        <label for="minimum" class="block text-xl font-medium text-gray-700">pemakaian minimum
                        </label>
                        <input type="text" name="minimum" id="minimum"
                            class="mt-1 block w-full p-2 border-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-xl">
                    </div>
                    <div class="mb-4">
                        <label for="tarif_1" class="block text-xl font-medium text-gray-700">tarif_1
                        </label>
                        <input type="text" name="tarif_1" id="tarif_1"
                            class="mt-1 block w-full p-2 border-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-xl">
                    </div>
                    <div class="mb-4">
                        <label for="tarif_2" class="block text-xl font-medium text-gray-700">tarif_2
                        </label>
                        <input type="text" name="tarif_2" id="tarif_2"
                            class="mt-1 block w-full p-2 border-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-xl">
                    </div>
                    <div class="mb-4">
                        <label for="tarif_3" class="block text-xl font-medium text-gray-700">tarif_3
                        </label>
                        <input type="text" name="tarif_3" id="tarif_3"
                            class="mt-1 block w-full p-2 border-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-xl">
                    </div>
                    <div class="mb-4">
                        <label for="masa_perjanjian" class="block text-xl font-medium text-gray-700">masa perjanjian
                        </label>
                        <input type="text" name="masa_perjanjian" id="masa_perjanjian"
                            class="mt-1 block w-full p-2 border-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-xl">
                    </div>
                    <div class="flex justify-end">
                        <button type="button" id="closeModal-edit"
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
    const editModal = document.getElementById("editModal");
    const openModal_edit = document.getElementById("openModal-edit");
    const closeModal_edit = document.getElementById("closeModal-edit");
    openModal_edit.addEventListener("click", function() {
        editModal.classList.remove("hidden");
    });
    closeModal_edit.addEventListener("click", function() {
        editModal.classList.add("hidden");
    });
    window.onclick = function(event) {
        if (event.target == modal) {
            editModal.classList.add("hidden");
        }
    };
</script>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Category</title>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center py-12 px-4">

  <div class="w-full max-w-4xl bg-white shadow-xl rounded-2xl overflow-hidden">
    
    <div class="px-6 py-5 border-b border-gray-200 flex justify-between items-center">
      <h1 class="text-2xl font-semibold text-gray-900">Category List</h1>
      <button 
        id="openModalButton"
        type="button" 
        class="inline-block bg-blue-600 text-white text-sm font-medium py-2 px-4 rounded-lg hover:bg-blue-700 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
      >
        Tambah Kategori
      </button>
    </div>

    <div class="overflow-x-auto">
      <table class="min-w-full">
        <thead class="bg-gray-50">
          <tr>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              ID
            </th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              Name
            </th>
            <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
              Aksi
            </th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
          @foreach ($categories as $category)
          <tr class="hover:bg-gray-50 transition-colors duration-150">
            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
              {{ $category->id }}
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
              {{ $category->name }}
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
              <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
              <a href="#" class="text-red-600 hover:text-red-900 ml-4">Hapus</a>
            </td>
          </tr>
          @endforeach

          <tr class="hover:bg-gray-50 transition-colors duration-150">
            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Contoh Kategori 1</td>
            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
              <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
              <a href="#" class="text-red-600 hover:text-red-900 ml-4">Hapus</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

  </div>

  <div 
    id="addCategoryModal" 
    class="hidden fixed inset-0 bg-gray-600 bg-opacity-75 flex items-center justify-center px-4 py-8"
  >
    <div class="bg-white rounded-2xl shadow-xl w-full max-w-md transform transition-all">
      <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center">
        <h2 class="text-xl font-semibold text-gray-800">Tambah Kategori Baru</h2>
        <button id="closeModalButton" class="text-gray-400 hover:text-gray-600 focus:outline-none">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      
      <form action="#" method="POST" class="p-6">
        <div>
          <label for="categoryName" class="block text-sm font-medium text-gray-700">
            Nama Kategori
          </label>
          <div class="mt-1">
            <input 
              type="text" 
              name="categoryName" 
              id="categoryName"
              class="block w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
              placeholder="Masukkan nama kategori..."
            />
          </div>
        </div>

        <div class="mt-6 flex justify-end space-x-3">
          <button 
            id="cancelModalButton"
            type="button"
            class="bg-white py-2 px-4 border border-gray-300 rounded-lg shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
          >
            Batal
          </button>
          <button 
            type="submit"
            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-lg text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
          >
            Simpan
          </button>
        </div>
      </form>

    </div>
  </div>


  <script>
    // Ambil elemen-elemen yang dibutuhkan
    const openModalButton = document.getElementById('openModalButton');
    const closeModalButton = document.getElementById('closeModalButton');
    const cancelModalButton = document.getElementById('cancelModalButton');
    // Ganti ID modal di sini
    const modal = document.getElementById('addCategoryModal');

    // Fungsi untuk menampilkan modal
    function openModal() {
      modal.classList.remove('hidden');
    }

    // Fungsi untuk menyembunyikan modal
    function closeModal() {
      modal.classList.add('hidden');
    }

    // Tambahkan event listener
    openModalButton.addEventListener('click', openModal);
    closeModalButton.addEventListener('click', closeModal);
    cancelModalButton.addEventListener('click', closeModal);

    // (Opsional) Tutup modal jika user mengklik di luar area konten modal
    modal.addEventListener('click', function(event) {
      if (event.target === modal) {
        closeModal();
      }
    });
  </script>

</body>
</html>
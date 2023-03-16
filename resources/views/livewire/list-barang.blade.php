<div class="items-center justify-center p-10">
    <div class="max-w-3xl grid mx-auto p-10 border border-gray-200 rounded-lg">
        <h5 class="font-bold mb-5 text-center
        ">Berikut adalah <span class="italic">Data Barang</span> MTS Al Irsyad Putri Tengaran</h5>
    <form>
        {{-- {{ $this->form }} --}}
        <!-- component -->
<!-- This is an example component -->
<div class="max-w-2xl mx-auto">

	<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
		<div class="p-4">
			<label for="table-search" class="sr-only">Search</label>
			<div class="relative mt-1">
				<div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
					<svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
						xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd"
							d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
							clip-rule="evenodd"></path>
					</svg>
				</div>
                <input class="form-control mb-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" wire:model="search" placeholder="Cari Barang" aria-label="search">
				{{-- <input type="text" id="table-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cari Barang"> --}}
        </div>
			</div>
			<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
				<thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
					<tr>
						
						<th scope="col" class="px-6 py-3">
							Nama Barang
						</th>
						<th scope="col" class="px-6 py-3">
							Pengguna
						</th>
						<th scope="col" class="px-6 py-3">
							Kondisi
						</th>
						<th scope="col" class="px-6 py-3">
							Jumlah
						</th>
						<th scope="col" class="px-6 py-3">
							Nomor Aset
						</th>
                        <th scope="col" class="px-6 py-3">
							Ruang
						</th>
                        <th scope="col" class="px-6 py-3">
							Gedung
						</th>
					</tr>
				</thead>
				<tbody>
                    @foreach ($barangs as $barang)
					<tr
						class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
						
                        
          
						<th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
							{{ $barang->nama_barang }}
						</th>
						<td class="px-6 py-4">
							{{ $barang->pengguna }}
						</td>
						<td class="px-6 py-4">
							{{ $barang->kondisi }}
						</td>
						<td class="px-6 py-4">
							{{ $barang->jumlah }}
						</td>
						<td class="px-6 py-4">
							{{ $barang->nomor_aset }}
						</td>
						<td class="px-6 py-4">
							{{ $barang->ruang }}
						</td>
						<td class="px-6 py-4">
							{{ $barang->gedung }}
						</td>
                        
					</tr>
                    @endforeach
				</tbody>
			</table>
		</div>

	</div>

        {{-- <button type="submit" class="w-full bg-blue-500 text-white mt-5 rounded-md shadow py-3">
            Simpan
        </button> --}}
    </form>
    <a href="/login" class="w-full bg-gray-500 text-white mt-5 rounded-md shadow py-3 text-center">Kembali</a>
</div>
</div>

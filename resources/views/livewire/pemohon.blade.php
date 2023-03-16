<div class="items-center justify-center p-10">
    <div class="max-w-3xl grid mx-auto p-10 border border-gray-200 rounded-lg">
        <h5 class="font-normal mb-5 text-center
        ">Selamat Datang di Aplikasi <span class="italic"> SKM </span> DPMPTSP Provinsi Jawa Tengah</h5>
    <form wire:submit.prevent="submit">
        {{ $this->form }}

        <button type="submit" class="w-full bg-blue-500 text-white mt-5 rounded-md shadow py-3">
            Simpan
        </button>
    </form>
    <a href="/" class="w-full bg-gray-500 text-white mt-5 rounded-md shadow py-3 text-center">Kembali</a>
</div>
</div>

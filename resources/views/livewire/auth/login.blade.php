@extends('layouts.app')

@section('content')
    <!-- component -->
    <style>
        .login_img_section {
            background: linear-gradient(rgba(2, 2, 2, .7), rgba(0, 0, 0, .7)), url(https://images.pexels.com/photos/590022/pexels-photo-590022.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1) center center no-repeat;
        }
    </style>
    <div class="h-screen flex">
        <div class="hidden lg:flex w-full lg:w-1/2 login_img_section justify-around items-center">
            <div class="bg-black opacity-20 inset-0 z-0">

            </div>
            <div class="w-full mx-auto px-20 flex-col items-center space-y-6">
                <h1 class="text-white font-bold text-4xl font-sans">SI-SARPRAS  
                    {{-- <span class="font-light"> Provinsi Jawa Tengah</span> --}}
                </h1>
                <p class="text-white mt-1">Aplikasi Pendataan Barang MTS Al Irsyad Putri Tengaran.</p>
                {{-- <div class="grid grid-row-2">
                    <div>
                        <img style="margin-right: 25px" width="150px" alt="qr"
                            src="https://skm.dpmptsp.jatengprov.go.id/img/qr-code.png">&nbsp;
                    </div>
                </div> --}}
            </div>
        </div>
        <div class="flex w-full lg:w-1/2 justify-center items-center bg-white space-y-8">
            <div class="w-full px-8 md:px-32 lg:px-24">           
            
            <form wire:submit.prevent="login">

                <div class="form-group">
                    <label class="font-weight-bold">ALAMAT EMAIL</label>
                    <input type="text" wire:model.lazy="email"
                        class="form-control @error('email') is-invalid @enderror"
                        placeholder="Alamat Email">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">PASSWORD</label>
                    <input type="password" wire:model.lazy="password"
                        class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                
                <button type="submit" class="block w-full bg-indigo-600 mt-5 py-2 rounded-2xl hover:bg-gray-500 hover:-translate-y-1 transition-all duration-500 text-white font-semibold mb-2 text-center">LOGIN</button>
                <a href="{{ route('pemohon') }}" type="submit"
                        class="block w-full bg-red-600 mt-5 py-2 rounded-2xl hover:bg-gray-500 hover:-translate-y-1 transition-all duration-500 text-white font-semibold mb-2 text-center">Lihat Data Barang</a>
            </form>

        </div>

    </div>
</div>
</div>
@endsection
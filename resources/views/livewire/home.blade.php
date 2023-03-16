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
            <div class=" inset-0 z-0 rounded ml-10">
                <div class="justify-center items-center text-center">
                    <img src="sisarpras-logo1.png" alt="" style="height: 100px" class="justify-center items-center text-center">
                </div>
            </div>
            <div class="w-full mx-auto px-20 flex-col items-center space-y-6">
                <h1 class="text-white font-bold text-4xl font-sans">SI-SARPRAS  
                    {{-- <span class="font-light"> Provinsi Jawa Tengah</span> --}}
                </h1>
                <p class="text-white mt-1">Aplikasi Pendataan Barang MTS PIA-Putri.</p>
            </div>
        </div>
        <div class="flex w-full lg:w-1/2 justify-center items-center bg-white space-y-8 text-center">
            {{-- <div class="flex ustify-center items-center"> --}}
                {{-- <img src="logo-skm.png" alt="" style="height: 25px"> --}}
                {{-- <img src="sisarpras-logo.png" alt="" style="height: 50px"> --}}
                {{-- <h1>SI-SARPRAS</h1> --}}
            {{-- </div> --}}
            <div class="w-full px-8 md:px-32 lg:px-24 justify-center items-center">
                {{-- <form class="bg-white rounded-md shadow-2xl p-5"> --}}
                <form wire:submit.prevent="login" class="bg-white rounded-md shadow-2xl p-5 justify-center items-center">
                    <div class="justify-center flex items-center text-center">
                        <a href="/">
                            <img src="sisarpras-logo1.png" alt="" style="height: 200px" class="place-content-center justify-center items-center text-center">
                        </a>
                    </div>
                    <h1 class="text-gray-800 font-bold text-2xl mb-1 text-center">السلام عليكم ورحمة الله وبركاته</h1>
                    <p class="text-sm font-normal text-gray-600 mb-8 text-center">Selamat datang kembali</p>
         

                    {{-- <form wire:submit.prevent="submit">
                        {{ $this->form }} --}}
                
                        <button type="submit" class="block w-full bg-indigo-600 mt-5 py-2 rounded-2xl hover:bg-gray-500 hover:-translate-y-1 transition-all duration-500 text-white font-semibold mb-2 text-center">
                            Login-Admin
                        </button>
                    {{-- </form> --}}

                    {{-- <a href="{{ route('notfound') }}" type="submit"
                        class="block w-full bg-indigo-600 mt-5 py-2 rounded-2xl hover:bg-gray-500 hover:-translate-y-1 transition-all duration-500 text-white font-semibold mb-2 text-center">Login</a> --}}

                        <a href="{{ route('register') }}" type="submit"
                        class="block w-full bg-red-600 mt-5 py-2 rounded-2xl hover:bg-gray-500 hover:-translate-y-1 transition-all duration-500 text-white font-semibold mb-2 text-center">Daftar</a>
                    
                        <a href="{{ route('list-barang') }}" type="submit"
                        class="block w-full bg-green-600 mt-5 py-2 rounded-2xl hover:bg-gray-500 hover:-translate-y-1 transition-all duration-500 text-white font-semibold mb-2 text-center">Lihat Data Barang</a>

                    {{-- <div class="flex justify-between mt-4">
<span class="text-sm ml-2 hover:text-blue-500 cursor-pointer hover:-translate-y-1 duration-500 transition-all">Forgot Password ?</span>

<a href="#" class="text-sm ml-2 hover:text-blue-500 cursor-pointer hover:-translate-y-1 duration-500 transition-all">Don't have an account yet?</a>
</div> --}}

                </form>
            </div>

        </div>
    </div>
    </div>
@endsection

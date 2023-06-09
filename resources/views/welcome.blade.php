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
                <p class="text-white mt-1">Aplikasi Pendataan Barang MTS PIA-Putri.</p>
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
                <form class="bg-white rounded-md shadow-2xl p-5">
                    <h1 class="text-gray-800 font-bold text-2xl mb-1 text-center">السلام عليكم ورحمة الله وبركاته</h1>
                    <p class="text-sm font-normal text-gray-600 mb-8 text-center">Selamat datang kembali</p>
                    <label for="username">Username</label>
                    <div class="flex items-center border-2 mb-8 py-2 px-3 rounded-2xl">
                        {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2"
                                d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                        </svg> --}}
                        {{-- <input id="no_tiket" class=" pl-2 w-full outline-none border-none" type="number" name="no_tiket"
                            placeholder="Nomor Tiket" /> --}}
                            
                            <input id="username" class=" pl-2 w-full outline-none border-none" type="text" name="username"
                            placeholder="username" />
                    </div>
                    <label for="username">Password</label>
                    <div class="flex items-center border-2 mb-8 py-2 px-3 rounded-2xl">
                        
                        <input id="password" class=" pl-2 w-full outline-none border-none" type="text" name="password"
                             />
                    </div>

                    {{-- <form wire:submit.prevent="submit">
                        {{ $this->form }}
                
                        <button type="submit" class="block w-full bg-indigo-600 mt-5 py-2 rounded-2xl hover:bg-gray-500 hover:-translate-y-1 transition-all duration-500 text-white font-semibold mb-2 text-center">
                            Login
                        </button>
                    </form> --}}

                    <a href="{{ route('notfound') }}" type="submit"
                        class="block w-full bg-indigo-600 mt-5 py-2 rounded-2xl hover:bg-gray-500 hover:-translate-y-1 transition-all duration-500 text-white font-semibold mb-2 text-center">Login</a>

                    <a href="{{ route('pemohon') }}" type="submit"
                        class="block w-full bg-red-600 mt-5 py-2 rounded-2xl hover:bg-gray-500 hover:-translate-y-1 transition-all duration-500 text-white font-semibold mb-2 text-center">Lihat Data Barang</a>

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

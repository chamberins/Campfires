<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    @vite('resources/css/app.css')
    <title>Campfires</title>
</head>

<body>
    @include('components.navbar')
    <section class="mx-auto py-16 px-[120px]">
        <div class="content-top text-center mt-8">
            <div class="mb-[100px]">
                <h1 class="text-3xl font-bold text-green-700">Product</h1>
                <p class="text-gray-600">Anda bisa menemukan berbagai jenis barang untuk disewa,</br> mulai dari alat
                    masak hingga perlengkapan camping.</p>

                <div class="mt-[48px] flex justify-center">
                    <input type="text" placeholder="Cari barang disini" class="border rounded px-4 py-2 w-80">
                    <button class="bg-green-700 text-white px-7 py-2 rounded-lg ml-2">Cari</button>
                </div>
            </div>

            <div class="flex justify-center space-x-8">
                <div class="flex flex-col items-center">
                    <img src="{{ asset('assets/Images/brand/eiger.png') }}" alt="Eiger Logo" class="w-24 h-24 mx-auto">
                </div>
                <div class="flex flex-col items-center">
                    <img src="{{ asset('assets/Images/brand/consina.png') }}" alt="Consina Logo"
                        class="w-24 h-24 mx-auto">
                </div>
                <div class="flex flex-col items-center">
                    <img src="{{ asset('assets/Images/brand/arei.png') }}" alt="Arei Logo" class="w-24 h-24 mx-auto">
                </div>
                <div class="flex flex-col items-center">
                    <img src="{{ asset('assets/Images/brand/avtech.png') }}" alt="Avtech Logo"
                        class="w-24 h-24 mx-auto">
                </div>
                <div class="flex flex-col items-center">
                    <img src="{{ asset('assets/Images/brand/tnf.png') }}" alt="The North Face Logo"
                        class="w-24 h-24 mx-auto">
                </div>
            </div>
        </div>
        <div class="content-bottom mt-[70px]">
            <div class="content-card grid grid-cols-4 gap-6">
                <div class="card rounded-lg overflow-hidden shadow-lg">
                    <img src="{{ asset('assets/Images/product/p1.png') }}" alt="Headlamp" class="card-img w-full" />
                    <div class="card-body flex items-center justify-between pt-4 pb-6 px-6">
                        <div class="wrap">
                            <h4 class="text-base font-semibold text-black">Headlamp</h4>
                            <span class="text-sm text-gray-500 font-medium">Rp. 20.000</span>
                        </div>
                        <button class="bg-green-700 hover:text-green-600">
                            <img src="{{ asset('assets/Images/icon/arrow.png') }}" alt="" />
                        </button>
                    </div>
                </div>
                <div class="card rounded-lg overflow-hidden shadow-lg">
                    <img src="{{ asset('assets/Images/product/p1.png') }}" alt="Headlamp" class="card-img w-full" />
                    <div class="card-body flex items-center justify-between pt-4 pb-6 px-6">
                        <div class="wrap">
                            <h4 class="text-base font-semibold text-black">Headlamp</h4>
                            <span class="text-sm text-gray-500 font-medium">Rp. 20.000</span>
                        </div>
                        <button class="bg-green-700 hover:text-green-600">
                            <img src="{{ asset('assets/Images/icon/arrow.png') }}" alt="" />
                        </button>
                    </div>
                </div>
                <div class="card rounded-lg overflow-hidden shadow-lg">
                    <img src="{{ asset('assets/Images/product/p1.png') }}" alt="Headlamp" class="card-img w-full" />
                    <div class="card-body flex items-center justify-between pt-4 pb-6 px-6">
                        <div class="wrap">
                            <h4 class="text-base font-semibold text-black">Headlamp</h4>
                            <span class="text-sm text-gray-500 font-medium">Rp. 20.000</span>
                        </div>
                        <button class="bg-green-700 hover:text-green-600">
                            <img src="{{ asset('assets/Images/icon/arrow.png') }}" alt="" />
                        </button>
                    </div>
                </div>
                <div class="card rounded-lg overflow-hidden shadow-lg">
                    <img src="{{ asset('assets/Images/product/p1.png') }}" alt="Headlamp" class="card-img w-full" />
                    <div class="card-body flex items-center justify-between pt-4 pb-6 px-6">
                        <div class="wrap">
                            <h4 class="text-base font-semibold text-black">Headlamp</h4>
                            <span class="text-sm text-gray-500 font-medium">Rp. 20.000</span>
                        </div>
                        <button class="bg-green-700 hover:text-green-600">
                            <img src="{{ asset('assets/Images/icon/arrow.png') }}" alt="" />
                        </button>
                    </div>
                </div><div class="card rounded-lg overflow-hidden shadow-lg">
                    <img src="{{ asset('assets/Images/product/p1.png') }}" alt="Headlamp" class="card-img w-full" />
                    <div class="card-body flex items-center justify-between pt-4 pb-6 px-6">
                        <div class="wrap">
                            <h4 class="text-base font-semibold text-black">Headlamp</h4>
                            <span class="text-sm text-gray-500 font-medium">Rp. 20.000</span>
                        </div>
                        <button class="bg-green-700 hover:text-green-600">
                            <img src="{{ asset('assets/Images/icon/arrow.png') }}" alt="" />
                        </button>
                    </div>
                </div><div class="card rounded-lg overflow-hidden shadow-lg">
                    <img src="{{ asset('assets/Images/product/p1.png') }}" alt="Headlamp" class="card-img w-full" />
                    <div class="card-body flex items-center justify-between pt-4 pb-6 px-6">
                        <div class="wrap">
                            <h4 class="text-base font-semibold text-black">Headlamp</h4>
                            <span class="text-sm text-gray-500 font-medium">Rp. 20.000</span>
                        </div>
                        <button class="bg-green-700 hover:text-green-600">
                            <img src="{{ asset('assets/Images/icon/arrow.png') }}" alt="" />
                        </button>
                    </div>
                </div><div class="card rounded-lg overflow-hidden shadow-lg">
                    <img src="{{ asset('assets/Images/product/p1.png') }}" alt="Headlamp" class="card-img w-full" />
                    <div class="card-body flex items-center justify-between pt-4 pb-6 px-6">
                        <div class="wrap">
                            <h4 class="text-base font-semibold text-black">Headlamp</h4>
                            <span class="text-sm text-gray-500 font-medium">Rp. 20.000</span>
                        </div>
                        <button class="bg-green-700 hover:text-green-600">
                            <img src="{{ asset('assets/Images/icon/arrow.png') }}" alt="" />
                        </button>
                    </div>
                </div><div class="card rounded-lg overflow-hidden shadow-lg">
                    <img src="{{ asset('assets/Images/product/p1.png') }}" alt="Headlamp" class="card-img w-full" />
                    <div class="card-body flex items-center justify-between pt-4 pb-6 px-6">
                        <div class="wrap">
                            <h4 class="text-base font-semibold text-black">Headlamp</h4>
                            <span class="text-sm text-gray-500 font-medium">Rp. 20.000</span>
                        </div>
                        <button class="bg-green-700 hover:text-green-600">
                            <img src="{{ asset('assets/Images/icon/arrow.png') }}" alt="" />
                        </button>
                    </div>
                </div>
            </div>

    </section>
</body>
<footer>
    @include('components.footer')
</footer>

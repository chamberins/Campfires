<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    @include('components.navbar')
    <section class="py-10 md:py-16 lg:py-[72px]">
        <div class="container mx-auto px-4">
            <div class="about flex flex-col lg:flex-row justify-between items-center gap-8">
                <div class="content-images grid grid-cols-2 gap-4">
                    <img src="{{asset('assets/Images/image 1.png')}}" alt="" class="img" />
                    <img src="{{asset('assets/Images/image 2.png')}}" alt="" class="img" />
                    <img src="{{asset('assets/Images/image 3.png')}}" alt="" class="img" />
                    <img src="{{asset('assets/Images/image 4.png')}}" alt="" class="img" />
                    //
                </div>
                <div class="content-subtext w-full lg:w-6/12 flex flex-col items-start gap-6 lg:gap-10">
                    <div class="subtext flex flex-col gap-2 lg:gap-4">
                        <h2 class="text-2xl lg:text-3xl font-bold">Tentang Kami</h2>
                        <p class="text-justify text-base lg:text-lg">
                            <span class="text-xl lg:text-2xl font-semibold">Campfires</span>
                            hadir untuk memudahkan setiap petualanganmu. Kami menyediakan berbagai macam peralatan
                            camping berkualitas dengan harga sewa yang terjangkau.
                            Percaya pada kami, alam terbuka memanggil! Biarkan kami mengurus perlengkapannya, sehingga
                            kamu bisa fokus menikmati momen berharga bersama alam.
                            Visi kami: Menginspirasi lebih banyak orang untuk menjelajahi alam dan menciptakan kenangan
                            tak terlupakan.
                        </p>
                    </div>
                    <a href="About" class=" btn btn-primary">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    </section>
</body>
<footer>
    @include('components.footer')
</footer>

</html>

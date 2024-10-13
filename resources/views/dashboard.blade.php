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

<body class="bg-gray-100">
    @include('components.navbar')
    {{-- Hero --}}
    <section class="relative flex items-center justify-center h-screen bg-green-900">
      <div class="absolute inset-0">
        <img src="{{asset('assets/Images/hero.png')}}" alt="forest background" class="w-full h-full object-cover opacity-80">
      </div>
      
      <div class="relative z-10 text-center px-4 md:px-8">
        <h1 class="text-white text-2xl md:text-4xl font-bold mb-4">Selamat Datang di</h1>
        <h2 class="text-5xl md:text-7xl font-extrabold text-white drop-shadow-lg">CAMPFIRES</h2>
        <p class="text-white mt-4 max-w-xl mx-auto text-sm md:text-lg">
          "Camp Fires" adalah sebuah platform online yang memudahkan siapa saja untuk menyewa berbagai macam peralatan berkemah. 
          Bayangkan, dengan hanya beberapa klik, Anda bisa mendapatkan tenda, sleeping bag, kompor, perlengkapan masak, dan 
          berbagai perlengkapan outdoor lainnya tanpa perlu membeli semuanya.
        </p>
        <a href="#" class="mt-8 inline-block bg-green-900 text-white py-3 px-6 rounded-lg shadow-lg hover:bg-green-700 hover:text-white transition">
          Jelajahi
        </a>
      </div>
    </section>
    {{-- about Us --}}
    <section class="py-10 md:py-16 lg:py-[72px]">
        <div class="container mx-auto px-4 py-8">
            <div class="grid grid-cols-2 md:grid-cols-2 gap-16">
              
              <div class="card">
                <img src="{{asset('assets/Images/i.png')}}" alt="camping tools" class="rounded-lg object-cover">
              </div>
              
              <div class="py-[167px] px-10">
                <h2 class="text-3xl font-bold text-green-800 mb-4">About Us</h2>
                <p class="text-gray-700 mb-4">
                  <strong>Camp Fires</strong> hadir untuk memudahkan setiap petualanganmu. Kami menyediakan berbagai macam peralatan camping berkualitas dengan harga sewa yang terjangkau.
                </p>
                <p class="text-gray-700 mb-4">
                  Percaya pada kami, alam terbuka memanggil! Biarkan kami mengurus perlengkapannya, sehingga kamu bisa fokus menikmati momen berharga bersama alam.
                </p>
                <p class="text-gray-700 mb-4">
                  Visi kami: Menginspirasi lebih banyak orang untuk menjelajahi alam dan menciptakan kenangan tak terlupakan.
                </p>
                <button class="bg-green-800 text-white px-6 py-2 rounded-lg hover:bg-green-700 transition">
                  Baca Selengkapnya
                </button>
              </div>
              
            </div>
          </div>
          
    </section>
    <section class="bg-[#E9ECEF]">
      <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl md:text-3xl font-bold text-center text-green-800 mb-8">Recommended</h1>
        <p class="text-center text-lg text-gray-700 mb-2">
            Bingung mau pilih peralatan camping apa? Mau berkemah tapi gak mau ribet?<br />
            Penasaran dengan paket apa yang paling cocok untuk petualanganmu?
        </p>
        <p class="text-center text-lg font-medium text-gray-800 mb-10">
            Tenang, kami punya solusinya! Lihat rekomendasi paket kami yang sudah disesuaikan dengan kebutuhanmu.
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 px-8 pb-12">
          <div class="bg-white rounded-xl shadow-lg overflow-hidden flex flex-col">
              <img src="{{asset('assets/Images/content1.png')}}" alt="Paket Pemula" class="w-full h-48 object-cover">
              <div class="p-6 flex-grow text-center">
                  <h3 class="text-xl font-bold">Paket Pemula</h3>
                  <p class="text-gray-600 mt-2">Pendaki pemula atau pasangan yang ingin mencoba pengalaman camping sederhana.</p>
              </div>
              <div class="p-6">
                  <button class="w-full px-6 py-2 bg-green-700 text-white rounded-xl">Pilih</button>
              </div>
          </div>
  
          <div class="bg-white rounded-xl shadow-lg overflow-hidden flex flex-col">
              <img src="{{asset('assets/Images/content2.png')}}" alt="Paket Keluarga" class="w-full h-48 object-cover">
              <div class="p-6 flex-grow text-center">
                  <h3 class="text-xl font-bold">Paket Keluarga</h3>
                  <p class="text-gray-600 mt-2">Keluarga yang ingin berkemah bersama anak-anak.</p>
              </div>
              <div class="p-6">
                  <button class="w-full px-6 py-2 bg-green-700 text-white rounded-xl">Pilih</button>
              </div>
          </div>
  
          <div class="bg-white rounded-xl shadow-lg overflow-hidden flex flex-col">
              <img src="{{asset('assets/Images/content3.png')}}" alt="Paket Adventure" class="w-full h-48 object-cover">
              <div class="p-6 flex-grow text-center">
                  <h3 class="text-xl font-bold">Paket Adventure</h3>
                  <p class="text-gray-600 mt-2">Pendaki yang ingin melakukan perjalanan lebih jauh dan membutuhkan peralatan yang lengkap.</p>
              </div>
              <div class="p-6">
                  <button class="w-full px-6 py-2 bg-green-700 text-white rounded-xl">Pilih</button>
              </div>
          </div>
  
          <div class="bg-white rounded-xl shadow-lg overflow-hidden flex flex-col">
              <img src="{{asset('assets/Images/content4.png')}}" alt="Paket Mewah" class="w-full h-48 object-cover">
              <div class="p-6 flex-grow text-center">
                  <h3 class="text-xl font-bold">Paket Mewah</h3>
                  <p class="text-gray-600 mt-2">Mereka yang ingin menikmati camping dengan fasilitas yang lebih nyaman.</p>
              </div>
              <div class="p-6">
                  <button class="w-full px-6 py-2 bg-green-700 text-white rounded-xl">Pilih</button>
              </div>
          </div>
      </div>
  
      <!-- Button for more packages -->
      <div class="text-center pb-12">
          <button class="px-6 py-3 bg-green-700 text-white rounded-lg">Lihat Selengkapnya</button>
      </div>
    </div>
    </section>
</body>
<footer>
    @include('components.footer')
</footer>

</html>

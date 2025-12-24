@extends('layout.app')

@section('title', 'Multi Bahasa')

@section('content')
<section class="max-w-7xl mx-auto px-6 py-20">
   <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">

  <div>
    <h3 class="text-sm font-semibold text-teal-700">Multi Bahasa</h3>
    <h2 class="text-3xl md:text-4xl font-bold text-teal-900 mt-2">
      Fitur Multi Bahasa untuk Pengalaman Pengguna yang Lebih Luas
    </h2>
    <p class="text-gray-600 mt-4">
      Fitur Multi Bahasa pada SAFFMedic membantu fasilitas kesehatan
      memberikan pengalaman layanan yang lebih inklusif. Pengguna dapat
      memilih bahasa yang mereka kuasai, sehingga navigasi dan pemahaman
      informasi jauh lebih mudah.
    </p>
    <p class="text-gray-600 mt-3">
      Fitur ini terintegrasi dengan semua modul layanan, memastikan setiap
      teks, instruksi, dan laporan tampil sesuai bahasa pilihan pengguna.
    </p>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-10">

      <!-- Box 1 -->
      <div class="bg-[#166F61] text-white p-6 rounded-xl shadow-md">
        <div class="flex items-center gap-3 mb-3">
          <i class="fa-solid fa-globe text-3xl"></i>
          <h3 class="text-xl font-semibold">Dukungan Banyak Bahasa</h3>
        </div>
        <p class="opacity-90 flex items-start gap-2 leading-relaxed">
          <i class="fa-solid fa-circle-check mt-1"></i>
          <span>Pengguna dapat memilih beberapa bahasa. Seluruh menu, informasi, dan data akan menyesuaikan otomatis.</span>
        </p>
      </div>

      <!-- Box 2 -->
      <div class="bg-[#166F61] text-white p-6 rounded-xl shadow-md">
        <div class="flex items-center gap-3 mb-3">
          <i class="fa-solid fa-language text-3xl"></i>
          <h3 class="text-xl font-semibold">Terjemahan Otomatis Dokumen</h3>
        </div>
        <p class="opacity-90 flex items-start gap-2 leading-relaxed">
          <i class="fa-solid fa-circle-check mt-1"></i>
          <span>SAFFMedic dapat menyesuaikan laporan dan rekam medis sesuai bahasa yang dipilih pengguna.</span>
        </p>
      </div>

    </div>
  </div>
    
 
  <div class="w-full h-64 rounded-xl overflow-hidden flex items-center justify-center">
    <img 
      src="{{ asset('img/multi-bahasa.png') }}" 
      alt="Multi Bahasa Demo" 
      class="w-full h-full object-cover"
    >
  </div>

</div>

</section>
@endsection

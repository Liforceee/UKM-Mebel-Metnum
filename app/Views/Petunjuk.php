<?php $this->extend('layout/index') ?>
<?php $this->section('containt') ?>

<section id="petunjuk" class="petunjuk">
  <div class="left" data-aos="fade-up">
    <div class="container">
      <h4 style="text-align:center;">Petunjuk Penggunaan Website</h4>
      <br></br>
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      Home
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Page Home.</strong> Halaman Home berisi tampilan menu utama mengenai Web Suparman Mebel.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      About
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Page About.</strong> Halaman About berisi tentang latar belakang dari Suparman Mebel.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      Petunjuk
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Page Petunjuk.</strong> Halaman Petunjuk ini berisi penjelasan untuk setiap halaman pada Web Suparman Mebel.
      </div>
    </div>
  </div>

<div class="accordion-item">
    <h2 class="accordion-header" id="headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
      Produk
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Page Produk.</strong> Halaman Produk berisi jenis dan foto mengenai produk serta deskripsi produk yang ditawarkan pada Web Suparman Mebel.
      </div>
    </div>
  </div>
<div class="accordion-item">
    <h2 class="accordion-header" id="headingFive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
      Estimasi
      </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Page Estimasi.</strong> Halaman Estimasi berisi perkiraan perhitungan dari bahan pembuatan produk mebel. Pada halaman ini, pengguna dapat memasukkan perkiraan jumlah bahan yang diperlukan untuk membuat produk mebel seperti lemari, meja, dan kursi. Setiap kolom input harus diisi dengan angka bulat positif. Setelah mengisi semua kolom input, klik tombol "Hitung" untuk melihat hasil.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingSix">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
      Hasil
      </button>
    </h2>
    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Page Hasil.</strong> Setelah mengklik tombol "Hitung," hasil solusi dari sistem persamaan linear akan ditampilkan di bawah formulir. Hasil ini memberikan jumlah produk (lemari, meja, kursi) yang dapat dibuat berdasarkan jumlah bahan yang dimasukkan.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingSeven">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
      Pengembang
      </button>
    </h2>
    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Page Pengembang.</strong> Halaman Pengembang berisi anggota peneliti Suparman Mebel dan Pengembang Web Suparman Mebel serta Dosen Pembimbing.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingEight">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
      Contact
      </button>
    </h2>
    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Page Contact.</strong> Halaman Contact berisi kontak pribadi untuk pemesanan atau kesan dan pesan mengenai Web Suparman Mebel.
      </div>
    </div>
  </div>




    <?php $this->endSection() ?>
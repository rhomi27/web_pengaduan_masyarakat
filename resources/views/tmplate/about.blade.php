<section
id="about"
class="about"
>
<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <img
        src="assets/img/about.png"
        class="img-fluid"
        alt=""
      />
    </div>
    <div class="col-lg-6 pt-4 pt-lg-0 content">
      <h3>Tentang Aplikasi</h3>
      <p class="fst-italic">
        Aplikasi Pengaduan Masyarakat adalah sebuah inovasi teknologi
        yang bertujuan untuk memberikan sarana yang mudah, efisien, dan
        transparan bagi masyarakat dalam menyampaikan berbagai macam
        pengaduan terkait permasalahan di lingkungan sekitar mereka.
        Dengan menggunakan platform digital, aplikasi ini berperan
        sebagai jembatan antara masyarakat dan pihak-pihak terkait,
        seperti pemerintah, instansi publik, dan lembaga swasta, untuk
        menangani permasalahan yang dihadapi oleh masyarakat.
      </p>
    </div>
  </div>
</div>
</section>
<!-- End About Section -->

<!-- ======= Counts Section ======= -->
<section
id="counts"
class="counts"
>
<div class="container">
  <div class="row counters">
    <div class="col-lg-3 col-6 text-center">
      <span
        data-purecounter-start="0"
        data-purecounter-end="{{ $totalMasyarakat }}"
        data-purecounter-duration="1"
        class="purecounter text-primary"
      ></span>
      <p>Masyarakat</p>
    </div>

    <div class="col-lg-3 col-6 text-center">
      <span
        data-purecounter-start="0"
        data-purecounter-end="{{ $totalPetugas }}"
        data-purecounter-duration="1"
        class="purecounter text-primary"
      ></span>
      <p>Petugas</p>
    </div>

    <div class="col-lg-3 col-6 text-center">
      <span
        data-purecounter-start="0"
        data-purecounter-end="{{ $totalPengaduan }}"
        data-purecounter-duration="1"
        class="purecounter text-primary"
      ></span>
      <p>Pengaduan</p>
    </div>

    <div class="col-lg-3 col-6 text-center">
      <span
        data-purecounter-start="0"
        data-purecounter-end="{{ $totalKategori }}"
        data-purecounter-duration="1"
        class="purecounter text-primary"
      ></span>
      <p>Kategori</p>
    </div>
  </div>
</div>
</section>
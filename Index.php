<?php
include 'koneksi.php';
?>
<!--header-->
<!DOCTYPE html>
<html>
  <head>
    <title>AHMAD RIZKI</title>
    <link rel="stylesheet" href="style.css">
  </head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="#Beranda">Beranda</a></li>
        <li><a href="#Tentang Saya">Tentang Saya</a></li>
        <li><a href="#Portofolio">Portofolio</a></li>
        <li style="float:right" class="dropdown">
          <a class="active" href="#Lainnya">Lainnya <i class="dropdown-icon">▼</i></a>
          <div class="dropdown-content">
            <a href="https://Instagram.com" target="_https://www.instagram.com/shid.ics">Instagram</a>
            <a href="https://Facebook.com" target="_https://www.facebook.com/share/1FXuVSF1Qi/">Facebook</a>
            <a href="https://Tiktok.com" target="_https://www.tiktok.com/@xyy.shoftspoken?_t=ZS-8vvMJfsliqt&_r=1">Tiktok</a>
          </div>
        </li>
      </ul>
    </nav>
  </header>

  <!--profil-->
  <section id="Beranda" class="main-content">
      <div class="content-container">
          <div class="profile-section">
              <div class="gallery">
                  <img src="img/FOTO IJAZAH RIZKI.jpg" alt="Foto Ahmad Rizki">
              </div>
              <div class="profile-info">
                  <h1>HALLO, NAMA SAYA AHMAD RIZKI NUR ASSHIDIKI</h1>
                  <p>Saya seorang Software Engineer di perusahaan teknologi multinasional yang berfokus pada pengembangan aplikasi berbasis AI dan data Analytics.</p>
              </div>
          </div>
      </div>
  </section>
  
<!--tentang saya-->
  <section id="tentang-saya" class="about-section">
    <div class="container">
        <h2>Tentang Saya</h2>
    </div>

    <section>
      <div class="TentangSaya">
        <div class="text">
          <p>Halo, Saya Ahmad Rizki Nur Asshidiki. Saya berasal dari Bojonegoro dan saat ini sedang menempuh pendidikan di Universitas Nahdlatul Ulama Sunan Giri Bojonegoro, jurusan Teknik Informatika. Saya memiliki ketertarikan di bidang pemrograman, desain grafis, dan teknologi digital. Di waktu luang saya suka belajar sulap, pencak silat, dan bermain gitar.
          </p>
        </div>
        <img src="mantai.jpg" alt="mantai.jpg">
      </div>

<!-- Portofolio -->
<section>
  <h2>Portofolio</h2>
  <table>
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Kegiatan</th>
        <th>Waktu</th>
        <th>Bukti</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>LOMBA IT NETWORK SYSYEM ADMINISTRATION</td>
        <td>05 Maret 2022</td>
        <td><a href="IT NETWORK.jpg">Lihat</a></td>
      </tr>
      <tr>
        <td>2</td>
        <td>PELATIHAN DA'I</td>
        <td>9-10 April 2022</td>
        <td><a href="DAI.jpg">Lihat</a></td>
      </tr>
      <tr>
        <td>3</td>
        <td>LATIHAN PENGEMBANGAN KEPEMIMPINAN</td>
        <td>11-13 Juli 2022</td>
        <td><a href="LPK.jpg">Lihat</a></td>
      </tr>
      <tr>
        <td>4</td>
        <td>IT CAMP</td>
        <td>21-22 Desember 2024</td>
        <td><a href="ITCAMP.jpg">Lihat</a></td>
      </tr>
      <tr>
        <td>5</td>
        <td>TEMU AKADEMIK</td>
        <td>19 April 2025</td>
        <td><a href="TEMU.jpg">Lihat</a></td>
      </tr>
      <tr>
        <td>6</td>
        <td>SEMINAR PUBLIC SPEAKING</td>
        <td>08 September 2024</td>
        <td><a href="PUBLIKSPEAKING.jpg">Lihat</a></td>
      </tr>
      <tr>
        <td>7</td>
        <td>PKKMB UNUGIRI</td>
        <td>02-05 September 2024</td>
        <td><a href="PKKMB.jpg">Lihat</a></td>
      </tr>
        </tbody>
      </table>
    </section>

<!--Opini berita-->
<section class="opini-berita">
  <h2>Opini</h2>
  <div class="card-container">
    <div class="card">
      <img src="BROMOO.jpg" alt="Berita 1" />
      <div class="card-content">
        <h3>Taman Nasional Bromo Sebut Ladang Ganja Bukan di Gunung Bromo</h3>
        <p>Pihak balai besar Taman Nasional Bromo Tengger Semeru menegaskan, lokasi ladang ganja tidak berada di area wisata Gunung Bromo.</p>
        <a href="https://travel.kompas.com/read/2025/03/19/100653027/taman-nasional-bromo-sebut-ladang-ganja-bukan-di-gunung-bromo">Baca Selengkapnya</a>
      </div>
    </div>
    <div class="card">
      <img src="BUKITPARA.jpg" alt="Berita 2" />
      <div class="card-content">
        <h3>Wisata Paralayang Batu: Lokasi, Harga Tiket, dan Fasilitas</h3>
        <p>Paralayang Batu adalah destinasi wisata alam yang terkenal di kawasan Gunung Banyak, Batu, Jawa Timur. Di ketinggian 1.326 sering dikunjungi para wisatawan.</p>
        <a href="https://www.cnnindonesia.com/gaya-hidup/20230718131143-275-974835/wisata-paralayang-batu-lokasi-harga-tiket-dan-fasilitas">Baca Selengkapnya</a>
      </div>
    </div>
    <div class="card">
      <img src="COBANRONDO.jpg" alt="Berita 3" />
      <div class="card-content">
        <h3>Coban Rondo di Malang: Daya Tarik, Wahana, Harga Tiket, dan Legenda</h3>
        <p>Coban Rondo terletak di Desa Pandesari, Kecamatan Pujon, Kabupaten Malang, Jawa Timur. Coban Rondo Berarti coban artinya air terjun dan rondo artinya janda</p>
        <a href="https://regional.kompas.com/read/2022/09/02/063000678/coban-rondo-di-malang--daya-tarik-wahana-harga-tiket-dan-legenda?page=all">Baca Selengkapnya</a>
      </div>
    </div>
    <div class="card">
      <img src="KARIMUN.jpg" alt="Berita 4" />
      <div class="card-content">
        <h3>Mengenal Karimunjawa, Kepulauan di laut Jawa </h3>
        <p>Karimunjawa adalah wilayah kepulauan di Laut Jawa atau utara Pulau Jawa. Secara Administrasi, Karimunjawa merupakan kecamatan di Kabupaten Jepara, Jawa Tengah.</p>
        <a href="https://www.detik.com/bali/wisata/d-7517547/daya-tarik-pantai-pandawa-indahnya-pasir-putih-dan-laut-biru-kehijauan">Baca Selengkapnya</a>
      </div>
    </div>
    <div class="card">
      <img src="PANDHAA.jpg" alt="Berita 5" />
      <div class="card-content">
        <h3>Daya Tarik Pantai Pandhawa, Indahnya Pasir Putih dan laut Biru Kehijauan</h3>
        <p>Pantai Pandhawa merupakan salah satu destinasi wisata yang begitu mempesona dengan keindahan alamnya. Pandhawa menjadi permata tersembungi yang terkenal akan keindahan dan suasananya yang tenang.</p>
        <a href="https://regional.kompas.com/read/2022/12/28/164942178/mengenal-karimunjawa-kepulauan-di-laut-jawa?page=all">Baca Selengkapnya</a>
      </div>
    </div>
    <div class="card">
      <img src="RAJAA.jpg" alt="Berita 6" />
      <div class="card-content">
        <h3>Raja Ampat Masuk Daftar Destinasi Wisata Terbaik Dunia 2025 Oleh National Geographic</h3>
        <p>Majalah ternama National Geographic baru-baru ini merilis 25 Destinasi terbaik dunia untuk tahun 2025, dan Raja Ampat, Indonesia, berhasil mencuri perhatian</p>
        <a href="https://banjarbaruklik.com/raja-ampat-masuk-daftar-destinasi-wisata-terbaik-dunia-2025-oleh-national-geographic/">Baca Selengkapnya</a>
      </div>
    </div>
  </div>
</section>

<!-- Kontak form-->

<section class="kontak">
  <h2>Hubungi Saya</h2>
  <div class="kontak-container">
    <form class="form-kontak">
      <label for="nama">Nama</label>
      <input type="text" id="nama" name="nama" required />

      <label for="subjek">Subjek</label>
      <input type="text" id="subjek" name="subjek" required />

      <label for="email">Email</label>
      <input type="email" id="email" name="email" required />

      <label for="pesan">Pesan</label>
      <textarea id="pesan" name="pesan" rows="5" required></textarea>

      <button type="submit">Kirim</button>
    </form>

    <div class="maps">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31636.719961442013!2d112.6993643!3d-7.2756145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbf2f957bb6b%3A0x3027a76e352bc70!2sSurabaya!5e0!3m2!1sid!2sid!4v1682422368353"
        width="100%"
        height="100%"
        style="border: 0"
        allowfullscreen=""
        loading="lazy"
      ></iframe>
    </div>
  </div>
</section>

<!-- Footer -->
<footer>&copy; 2025 Mas Rizz.Design | All rights reserved</footer>

</body>
</html>
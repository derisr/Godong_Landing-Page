@extends('layout4.app')
@section('content')

<!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1 class="mb-4 pb-0">Selamat Datang di<br><span>Godong</span></h1>
      <p class="mb-4 pb-0">Solusi terbaik untuk manajemen keuangan Anda</p>
      <a href="https://youtu.be/4ZoWQeCO0CI" class="glightbox play-btn mb-4"></a>
      <p class="mb-1 pb-0">Getting Start to</p>
      <row>
          <a href="{{ route('andromedapos') }}" class="about-btn scrollto">Godong POS</a>
          <a href="{{ route('andromedasp') }}" class="about-btn scrollto">Godong SP</a>
      </row>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container position-relative" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6">
            <h2>Tentang Godong</h2>
            <p>GODONG merupakan sistem aplikasi simpan pinjam koperasi adalah platform perangkat lunak yang dirancang khusus untuk membantu koperasi dalam mengelola keuangan, anggota, dan transaksi simpan pinjam.</p>
          </div>
          <div class="col-lg-6 text-center">
            <img src="{{url('TheEvent')}}/assets/img/Logo Andromeda putih tanpa awan.png" alt="" style="max-width: 50%; height: auto;">
          </div>
        </div>
      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Speakers Section ======= -->
    <section id="speakers">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Godong</h2>
          <p>Solusi manajemen keuangan Anda</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="100">
              <img src="{{url('TheEvent')}}/assets/img/speakers/R1.png" alt="Speaker 1" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Laporan Ringkasan</a></h3>
                <p>Berupa grafik pertumbuhan dan total data</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="200">
              <img src="{{url('TheEvent')}}/assets/img/speakers/R2.png" alt="Speaker 2" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Realisasi Pinjaman</a></h3>
                <p>berdasarkan data-data Nasabah</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="300">
              <img src="{{url('TheEvent')}}/assets/img/speakers/R3.png" alt="Speaker 3" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Master Jaminan</a></h3>
                <p>berdasarkan data-data Nasabah</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="100">
              <img src="{{url('TheEvent')}}/assets/img/speakers/R4.png" alt="Speaker 4" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Mobile Fitur</a></h3>
                <p>berdasarkan data-data Nasabah</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="200">
              <img src="{{url('TheEvent')}}/assets/img/speakers/R5.png" alt="Speaker 5" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Register</a></h3>
                <p>berdasarkan data-data Nasabah</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="300">
              <img src="{{url('TheEvent')}}/assets/img/speakers/R7.png" alt="Speaker 6" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Grafik Aset</a></h3>
                <p>berdasarkan data-data Nasabah</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section><!-- End Speakers Section -->

    <!-- ======= Schedule Section ======= -->
    <section id="schedule" class="section-with-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>POS & SP</h2>
          <p>Point of Sell atau Simpan Pinjam yang anda butuhkan?</p>
        </div>

        <ul class="nav nav-tabs" role="tablist" data-aos="fade-up" data-aos-delay="100">
          <li class="nav-item">
            <a class="nav-link active" href="#day-1" role="tab" data-bs-toggle="tab">Godong POS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-2" role="tab" data-bs-toggle="tab">Godong SP</a>
          </li>
        </ul>


        <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <!-- Schdule Day 1 -->
          <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">

            <div class="row schedule-item">
              <div class="col-md-2"><category>Godong POS</category></div>
              <div class="col-md-10">
                <h4>Untuk aplikasi manajemen penjualan/aplikasi kasir</h4>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><category>Godong POS</category></div>
              <div class="col-md-10">
                <h4>Tesedia online dan offline</h4>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><category>Godong POS</category></div>
              <div class="col-md-10">
                <h4>Untuk aplikasi manajemen penjualan/aplikasi kasir</h4>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><category>Godong POS</category></div>
              <div class="col-md-10">
                <h4>Tesedia online dan offline</h4>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><category>Godong POS</category></div>
              <div class="col-md-10">
                <h4>Untuk aplikasi manajemen penjualan/aplikasi kasir</h4>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><category>Godong POS</category></div>
              <div class="col-md-10">
                <h4>Tesedia online dan offline</h4>
              </div>
            </div>

          </div>
          <!-- End Schdule Day 1 -->

          <!-- Schdule Day 2 -->
          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-2">

            <div class="row schedule-item">
              <div class="col-md-2"><category>Godong SP</category></div>
              <div class="col-md-10">
                <h4>Tesedia online dan offline</h4>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><category>Godong SP</category></div>
              <div class="col-md-10">
                <h4>Untuk aplikasi simpan pinjam</h4>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><category>Godong SP</category></div>
              <div class="col-md-10">
                <h4>Tesedia online dan offline</h4>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><category>Godong SP</category></div>
              <div class="col-md-10">
                <h4>Untuk aplikasi simpan pinjam</h4>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><category>Godong SP</category></div>
              <div class="col-md-10">
                <h4>Tesedia online dan offline</h4>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><category>Godong SP</category></div>
              <div class="col-md-10">
                <h4>Untuk aplikasi simpan pinjam</h4>
              </div>
            </div>

          </div>
          <!-- End Schdule Day 2 -->

          <!-- Schdule Day 3 -->
          <!-- <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-3">

            <div class="row schedule-item">
              <div class="col-md-2"><category>10:00 AM</category></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="{{url('TheEvent')}}/assets/img/speakers/2.jpg" alt="Hubert Hirthe">
                </div>
                <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
                <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><category>11:00 AM</category></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="{{url('TheEvent')}}/assets/img/speakers/3.jpg" alt="Cole Emmerich">
                </div>
                <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
                <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><category>12:00 AM</category></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="{{url('TheEvent')}}/assets/img/speakers/1.jpg" alt="Brenden Legros">
                </div>
                <h4>Libero corrupti explicabo itaque. <span>Brenden Legros</span></h4>
                <p>Facere provident incidunt quos voluptas.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><category>02:00 PM</category></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="{{url('TheEvent')}}/assets/img/speakers/4.jpg" alt="Jack Christiansen">
                </div>
                <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
                <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><category>03:00 PM</category></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="{{url('TheEvent')}}/assets/img/speakers/5.jpg" alt="Alejandrin Littel">
                </div>
                <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
                <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><category>04:00 PM</category></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="{{url('TheEvent')}}/assets/img/speakers/6.jpg" alt="Willow Trantow">
                </div>
                <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
                <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
              </div>
            </div>

          </div> -->
          <!-- End Schdule Day 2 -->

        </div>

      </div>

    </section><!-- End Schedule Section -->


    <!-- ======= Hotels Section ======= -->
    <section id="hotels" class="section-with-bg">

      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Fitur Khusus</h2>
          <p>Kami menawarkan beberapa fitur spesial yang dapat membantu Anda</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6">
            <div class="hotel">
              <div class="hotel-img">
                <img src="{{url('TheEvent')}}/assets/img/hotels/security.jpg" alt="Hotel 1" class="img-fluid">
              </div>
              <h3><a href="#">Security</a></h3>
              <div class="stars">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
              <!-- <p>0.4 Mile from the Venue</p> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="hotel">
              <div class="hotel-img">
                <img src="{{url('TheEvent')}}/assets/img/hotels/multiuser.jpg" alt="Hotel 2" class="img-fluid">
              </div>
              <h3><a href="#">Multi User</a></h3>
              <div class="stars">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill-half-full"></i>
              </div>
              <!-- <p>0.5 Mile from the Venue</p> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="hotel">
              <div class="hotel-img">
                <img src="{{url('TheEvent')}}/assets/img/hotels/platform1.jpg" alt="Hotel 3" class="img-fluid">
              </div>
              <h3><a href="#">Multiplatform</a></h3>
              <div class="stars">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
              <!-- <p>0.6 Mile from the Venue</p> -->
            </div>
          </div>

        </div>
      </div>

    </section><!-- End Hotels Section -->

    <!-- ======= Gallery Section ======= -->
    {{-- <section id="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Gallery</h2>
          <p>Check our gallery from the recent events</p>
        </div>
      </div>

      <div class="gallery-slider swiper">
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><a href="{{url('TheEvent')}}/assets/img/gallery/1.jpg" class="gallery-lightbox"><img src="{{url('TheEvent')}}/assets/img/gallery/1.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="{{url('TheEvent')}}/assets/img/gallery/2.jpg" class="gallery-lightbox"><img src="{{url('TheEvent')}}/assets/img/gallery/2.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="{{url('TheEvent')}}/assets/img/gallery/3.jpg" class="gallery-lightbox"><img src="{{url('TheEvent')}}/assets/img/gallery/3.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="{{url('TheEvent')}}/assets/img/gallery/4.jpg" class="gallery-lightbox"><img src="{{url('TheEvent')}}/assets/img/gallery/4.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="{{url('TheEvent')}}/assets/img/gallery/5.jpg" class="gallery-lightbox"><img src="{{url('TheEvent')}}/assets/img/gallery/5.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="{{url('TheEvent')}}/assets/img/gallery/6.jpg" class="gallery-lightbox"><img src="{{url('TheEvent')}}/assets/img/gallery/6.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="{{url('TheEvent')}}/assets/img/gallery/7.jpg" class="gallery-lightbox"><img src="{{url('TheEvent')}}/assets/img/gallery/7.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="{{url('TheEvent')}}/assets/img/gallery/8.jpg" class="gallery-lightbox"><img src="{{url('TheEvent')}}/assets/img/gallery/8.jpg" class="img-fluid" alt=""></a></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </section><!-- End Gallery Section --> --}}

    <!-- ======= Supporters Section ======= -->
    <section id="supporters" class="section-with-bg">

      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Klien Kami</h2>
        </div>

        <div class="row no-gutters supporters-wrap clearfix" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <!-- <img src="https://smartcoop.id/storage//filemanager/KOPERASI%20DEFAULT.png" class="img-fluid" alt=""> -->
              <img src="https://ik.imagekit.io/tvlk/blog/2020/01/Traveloka_Primary_Logo.png?tr=dpr-2,w-675" class="img-fluid" alt="">
              <!-- <img src="{{url('TheEvent')}}/assets/img/supporters/S1.png" class="img-fluid" alt=""> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <!-- <img src="https://smartcoop.id/storage//filemanager/KSP%20Aman%20Digital%20Indonesia.png" class="img-fluid" alt=""> -->
              <img src="https://img.freepik.com/free-vector/logo-template-design_1222-85.jpg?w=740&t=st=1694953114~exp=1694953714~hmac=e061901896cdebcf24aca979040faec98d0406d5e9bbac16a57038d594859ae6" class="img-fluid" alt="">
              <!-- <img src="{{url('TheEvent')}}/assets/img/supporters/S2.png" class="img-fluid" alt=""> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="https://img.freepik.com/free-vector/mountain-hiking-club-logo_23-2148631162.jpg?w=740&t=st=1694953148~exp=1694953748~hmac=6020da44b3c6efb6e7cbea7900f86adfd27a8a590eab082f6dc3262addff6909" class="img-fluid" alt="">
              <!-- <img src="{{url('TheEvent')}}/assets/img/supporters/S3.png" class="img-fluid" alt=""> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="https://img.freepik.com/free-vector/sunshine-logo-template_23-2149397082.jpg?w=740&t=st=1694953269~exp=1694953869~hmac=49d83f38ddcd14169b4ecb7597b1137e08c101541a27209f664413ef489a77e5" class="img-fluid" alt="">
              <!-- <img src="{{url('TheEvent')}}/assets/img/supporters/S4.png" class="img-fluid" alt=""> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="https://img.freepik.com/premium-vector/nature-life-logo-design-template-nature-logo-template-vector-illustration_194708-2580.jpg?w=740" class="img-fluid" alt="">
              <!-- <img src="{{url('TheEvent')}}/assets/img/supporters/S5.png" class="img-fluid" alt=""> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="https://img.freepik.com/free-vector/letter-s-logo-negative-space-style-corporate-business-emblem-logotype_126523-2780.jpg?w=1060&t=st=1694953354~exp=1694953954~hmac=1c9c99ef9f3b1c310df71c6dbbe478a51e3aff8b2cabeb6e43c2be87afc5b29e" class="img-fluid" alt="">
              <!-- <img src="{{url('TheEvent')}}/assets/img/supporters/S6.png" class="img-fluid" alt=""> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="https://img.freepik.com/free-vector/gradient-go-logo-template_52683-65769.jpg?w=1060&t=st=1694953390~exp=1694953990~hmac=653d21ffc9b6822204371bbf98087f86f1a8e3fd6e3e10c0809d30e85476d6f1" class="img-fluid" alt="">
              <!-- <img src="{{url('TheEvent')}}/assets/img/supporters/S7.png" class="img-fluid" alt=""> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="https://img.freepik.com/free-vector/bicycle-shop-logo-design-vector_53876-40626.jpg?w=740&t=st=1694953435~exp=1694954035~hmac=0926f3cc5f225ae52a80b7ed347743c75b006cfce7a4b5f7b477964851e89b33" class="img-fluid" alt="">
              <!-- <img src="{{url('TheEvent')}}/assets/img/supporters/S8.png" class="img-fluid" alt=""> -->
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Sponsors Section -->

    <!-- =======  F.A.Q Section ======= -->
    <section id="faq">

      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>F.A.Q </h2>
        </div>

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-9">

            <ul class="faq-list">

              <li>
                <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Apa manfaat menggunakan Godong? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                  <p>
                  Menggunakan DIKO dapat membantu koperasi meningkatkan efisiensi pengelolaan keuangan,memperbaiki pelayanan kepada anggota, dan mengurangi potensi kesalahan dalam pencatatan transaksi.
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Bagaimana cara mendaftar sebagia anggota koperasi melalui sistem aplikasi ini? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                  <p>
                  Untuk mendaftar sebagai anggota koperasi, Anda perlu menghubungi pengelola koperasi Anda. Mereka akan memberikan panduan langkah demi langkah tentang cara mendaftar dan menggunakan sistem aplikasi.
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Apakah sistem ini aman digunakan? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                  <p>
                  Ya,karena kami telah mengimplementasikan berbagai lapisan keamanan, termasuk enkripsi data, otentikasi dua faktor, dan pengawasan akses, untuk menjaga data Anda tetap aman.
                </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Apakah saya dapat melihat saldo dan riwayat transaksi saya melalui Godong? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                  <p>
                  Ya, Anda dapat mengakses saldo dan riwayat transaksi Anda melalui akun anggota Anda di sistem aplikasi.
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Bagaimana saya dapat mengajukan pinjaman melalui Godong? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                  <p>
                  Anda dapat mengajukan pinjaman melalui sistem aplikasi dengan mengisi formulir pinjaman yang tersedia dalam akun anggota Anda dan mengikuti petunjuk yang diberikan.
                  </p>
                </div>
              </li>

              <!-- <li>
                <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                  </p>
                </div>
              </li> -->

            </ul>

          </div>
        </div>

      </div>

    </section><!-- End  F.A.Q Section -->

   
  
    <!-- ======= Contact Section ======= -->
    <!-- <section id="contact" class="section-bg">

      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact Us</h2>
          <p>Nihil officia ut sint molestiae tenetur.</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="bi bi-geo-alt"></i>
              <h3>Address</h3>
              <address>A108 Adam Street, NY 535022, USA</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="bi bi-phone"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">info@example.com</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="form-group col-md-6 mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section> -->
    <!-- End Contact Section -->

    
    <!-- ======= Venue Section ======= -->
    <section id="venue">

      <div class="container-fluid" data-aos="fade-up">

        <div class="section-header">
          <h2>Lokasi Kami</h2>

        </div>

        <div class="row g-0">
          <div class="col-lg-6 venue-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.428402113363!2d111.54006207413555!3d-7.6369929755328085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79bf36978c3bf3%3A0x8c1997902afb269f!2sMARSTECH!5e0!3m2!1sid!2sid!4v1690605880803!5m2!1sid!2sid" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6 venue-info">
            <div class="row justify-content-center">
              <div class="col-11 col-lg-8 position-relative">
                <h3>Web Koperasi Simpan Pinjam</h3>
                <p>Sebuah situs web yang digunakan oleh koperasi simpan pinjam untuk memberikan informasi dan layanan kepada anggota koperasi dan calon anggota. Situs web ini biasanya menyediakan informasi tentang produk dan layanan koperasi, seperti suku bunga simpanan, suku bunga pinjaman, jenis pinjaman yang tersedia, persyaratan dan syarat untuk bergabung dengan koperasi, dan berbagai informasi terkait koperasi simpan pinjam.</p>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- <div class="container-fluid venue-gallery-container" data-aos="fade-up" data-aos-delay="100">
        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="{{url('TheEvent')}}/assets/img/venue-gallery/1.jpg" class="glightbox" data-gall="venue-gallery">
                <img src="{{url('TheEvent')}}/assets/img/venue-gallery/1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="{{url('TheEvent')}}/assets/img/venue-gallery/2.jpg" class="glightbox" data-gall="venue-gallery">
                <img src="{{url('TheEvent')}}/assets/img/venue-gallery/2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="{{url('TheEvent')}}/assets/img/venue-gallery/3.jpg" class="glightbox" data-gall="venue-gallery">
                <img src="{{url('TheEvent')}}/assets/img/venue-gallery/3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="{{url('TheEvent')}}/assets/img/venue-gallery/4.jpg" class="glightbox" data-gall="venue-gallery">
                <img src="{{url('TheEvent')}}/assets/img/venue-gallery/4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="{{url('TheEvent')}}/assets/img/venue-gallery/5.jpg" class="glightbox" data-gall="venue-gallery">
                <img src="{{url('TheEvent')}}/assets/img/venue-gallery/5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="{{url('TheEvent')}}/assets/img/venue-gallery/6.jpg" class="glightbox" data-gall="venue-gallery">
                <img src="{{url('TheEvent')}}/assets/img/venue-gallery/6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="{{url('TheEvent')}}/assets/img/venue-gallery/7.jpg" class="glightbox" data-gall="venue-gallery">
                <img src="{{url('TheEvent')}}/assets/img/venue-gallery/7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="{{url('TheEvent')}}/assets/img/venue-gallery/8.jpg" class="glightbox" data-gall="venue-gallery">
                <img src="{{url('TheEvent')}}/assets/img/venue-gallery/8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>
      </div> -->

    </section><!-- End Venue Section -->

  </main><!-- End #main -->
  
@endsection

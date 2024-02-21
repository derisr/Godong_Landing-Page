@extends('layout3.app')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center" style="background-color:#3d4938;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>WELCOME TO GODONG POS</h1>
                    <h2>Inventori, Project, dan Payroll TERINTEGRASI</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="#about" class="btn-get-started scrollto">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-tilt data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('Arsha/assets/img/hero-img.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section><!-- End Hero -->
    <main id="main">

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
            <div class="container">

                <div class="row" data-aos="zoom-in">

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
                    </div>

                </div>

            </div>
        </section><!-- End Cliens Section -->


        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us section-bg">
            <div class="container-fluid" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                        <div class="content">
                            <h3><strong>Manfaat Aplikasi GODONG</strong></h3>
                        </div>

                        <div class="accordion-list">
                            <ul>
                                <li>
                                    <a data-bs-toggle="collapse" class="collapse"
                                        data-bs-target="#accordion-list-1"><span>01</span> Mengimbangi pesatnya perkembangan
                                        teknologi, sehingga Koperasi mampu bertahan di era persaingan bsinis maupun ekonomi
                                        yang sudah bergantung pada teknologi<i class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                                    </div>
                                </li>

                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2"
                                        class="collapsed"><span>02</span> Memiliki database secara digital sehingga
                                        memastikan keberadaan data aman dan terjaga<i
                                            class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                    </div>
                                </li>

                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3"
                                        class="collapsed"><span>03</span> Efisiensi biaya operasional seperti cetak kertas
                                        <i class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                    </div>
                                </li>

                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-4"
                                        class="collapsed"><span>04</span> Kepemilikan informasi tidak terpusat disalah satu
                                        orang pengurus saja, karena data bisa diakses melalui aplikasi oleh pihak yang
                                        diberikan akses <i class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-4" class="collapse" data-bs-parent=".accordion-list">
                                    </div>
                                </li>

                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-5"
                                        class="collapsed"><span>05</span> Mengurangi adanya Human Error pada saat pencatatan
                                        transaksi <i class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-5" class="collapse" data-bs-parent=".accordion-list">
                                    </div>
                                </li>

                            </ul>
                        </div>

                    </div>

                    <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
                        style='background-image: url("assets/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">
                        &nbsp;</div>
                </div>

            </div>
        </section><!-- End Why Us Section -->


        </div>

        </div>
        </div>

        </div>
        </section><!-- End Skills Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Services</h2>

                </div>

                <div class="row">
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a href="">Akuntansi Koperasi dan UKM</a></h4>
                            <p>cabang akuntansi yang khusus menangani pencatatan, pengukuran, dan pelaporan keuangan dari
                                koperasi dan usaha mikro, kecil, dan menengah.</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file "></i></div>
                            <h4><a href="">Aplikasi Simpan Pinjam Gratis</a></h4>
                            <p>Akuntansi koperasi adalah suatu sistem pencatatan, pengelolaan, dan pelaporan keuangan yang
                                digunakan oleh koperasi untuk menghasilkan informasi keuangan yang berguna dan akurat dalam
                                mengelola keuangan koperasi.</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4><a href="">Aplikasi Koperasi Digital</a></h4>
                            <p>Aplikasi koperasi digital adalah aplikasi yang dirancang untuk membantu pengelolaan koperasi
                                secara digital.</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="400">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-layer"></i></div>
                            <h4><a href="">Laporan Keuangan Koperasi Simpan Pinjam</a></h4>
                            <p>Simpan pinjam adalah kegiatan yang dilakukan untuk menghimpun dana dan menyalurkannya melalui
                                kegiatan usaha simpan pinjam dari dan untuk anggota koperasi yang bersangkutan, calon
                                anggota koperasi yang bersangkutan, koperasi lain dan atau anggotanya.</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->


        </div>

        </div>
        </section><!-- End Portfolio Section -->

        <html lang="en">

        <head>
            <!-- Masukkan tag <head> untuk mengatur CSS, judul, dll. -->
            <style>
                .grid-item {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    text-align: center;
                }
            </style>
        </head>

        <body>
            {{-- Route Modal Plugin --}}
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    // Function to set the size of the logos
                    function setLogoSize(logoClass, width, height) {
                        const logos = document.querySelectorAll(logoClass);
                        logos.forEach((logo) => {
                            logo.style.width = width;
                            logo.style.height = height;
                        });
                    }

                    // Set the size of the logos (you can adjust the width and height values)
                    setLogoSize(".small-logo", "100px", "100px");
                });

                // Function to display the modal with the specified content
                function showModal(modalId) {
                    var modal = new bootstrap.Modal(document.getElementById(modalId));
                    modal.show();
                }

                // Add click event listeners for each logo
                // Logo 1 (Plugin Master Menu Bank & E-Commerce)
                document.querySelector(".col-md-3.grid-item:nth-child(1)").addEventListener("click", function() {
                    showModal("modal1");
                });

                // Logo 2 (Plugin Master Barcode Form Add)
                document.querySelector(".col-md-3.grid-item:nth-child(2)").addEventListener("click", function() {
                    showModal("modal2");
                });

                // Logo 3 (Plugin Master Golongan Jaminan)
                document.querySelector(".col-md-3.grid-item:nth-child(3)").addEventListener("click", function() {
                    showModal("modal3");
                });

                // Logo 4 (Plugin Master Kode Transaksi)
                document.querySelector(".col-md-3.grid-item:nth-child(4)").addEventListener("click", function() {
                    showModal("modal4");
                });

                // Logo 5 (Plugin Master Kode Transaksi)
                document.querySelector(".col-md-3.grid-item:nth-child(5)").addEventListener("click", function() {
                    showModal("modal5");
                });

                // Logo 6 (Plugin Master Kode Transaksi)
                document.querySelector(".col-md-3.grid-item:nth-child(6)").addEventListener("click", function() {
                    showModal("modal6");
                });

                // Logo 7 (Plugin Master Kode Transaksi)
                document.querySelector(".col-md-3.grid-item:nth-child(7)").addEventListener("click", function() {
                    showModal("modal7");
                });

                // Logo 8 (Plugin Master Kode Transaksi)
                document.querySelector(".col-md-3.grid-item:nth-child(8)").addEventListener("click", function() {
                    showModal("modal8");
                });

                function closeModal(modalId) {
                    var modal = new bootstrap.Modal(document.getElementById(modalId));
                    modal.hide();
                }
            </script>

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


            <!-- Modals Plugin-->
            <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1Label"
                aria-hidden="false">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal1Label">Plugin Master Menu Bank & E-Commerce</h5>
                            <button type="button" class="close" data-dismiss="modal" data-target="#modal1"
                                aria-label="Close">
                                <span aria-hidden="false">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Plugin ini mendukung berbagai bank dan penyedia layanan pembayaran, mencakup beragam opsi
                                seperti kartu kredit, transfer bank, e-wallet, dan banyak lagi.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="modal2Label"
                aria-hidden="false">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal2Label">Plugin Master Menu Barcode</h5>
                            <button type="button" class="close" data-dismiss="modal" data-target="#modal1"
                                aria-label="Close">
                                <span aria-hidden="false">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Informasi yang ingin Anda tambahkan -->
                            <p>Plugin ini juga dapat terintegrasi dengan sistem POS (Point of Sale) Anda, memberikan
                                kemudahan dalam proses penjualan dan pencatatan data produk.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="modal2Label"
                aria-hidden="false">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal2Label">Plugin Master Menu Barcode</h5>
                            <button type="button" class="close" data-dismiss="modal" data-target="#modal1"
                                aria-label="Close">
                                <span aria-hidden="false">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Informasi yang ingin Anda tambahkan -->
                            <p>Plugin ini memberikan kemudahan dalam penyusunan laporan keuangan dan memungkinkan Anda untuk
                                membuat keputusan yang lebih baik dalam pengelolaan keuangan Anda.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="modal3Label"
                aria-hidden="false">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal3Label">Plugin Master Menu Golongan Pinjaman</h5>
                            <button type="button" class="close" data-dismiss="modal" data-target="#modal3"
                                aria-label="Close">
                                <span aria-hidden="false">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Informasi yang ingin Anda tambahkan -->
                            <p>Plugin ini memungkinkan pengguna untuk dengan mudah mengintegrasikan berbagai opsi pembayaran
                                dari berbagai bank dan penyedia layanan pembayaran dalam satu menu yang terstruktur,
                                memberikan pengalaman belanja yang lebih nyaman bagi pelanggan. </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="modal4Label"
                aria-hidden="false">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal4Label">Plugin Master Menu Kode Transaksi Pinjaman</h5>
                            <button type="button" class="close" data-dismiss="modal" data-target="#kodenModal"
                                aria-label="Close">
                                <span aria-hidden="false">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Informasi yang ingin Anda tambahkan -->
                            <p>Plugin ini juga memungkinkan Anda untuk dengan cepat mengidentifikasi dan membedakan berbagai
                                jenis transaksi pinjaman, seperti pinjaman pribadi, hipotek, atau bisnis.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="modal5Label"
                aria-hidden="false">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal5Label">Plugin 5</h5>
                            <button type="button" class="close" data-dismiss="modal" data-target="#kodenModal"
                                aria-label="Close">
                                <span aria-hidden="false">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Informasi yang ingin Anda tambahkan -->
                            <p>Plugin ini juga memungkinkan Anda untuk dengan cepat mengidentifikasi dan membedakan berbagai
                                jenis transaksi pinjaman, seperti pinjaman pribadi, hipotek, atau bisnis.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="modal6Label"
                aria-hidden="false">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal6Label">Plugin 6</h5>
                            <button type="button" class="close" data-dismiss="modal" data-target="#kodenModal"
                                aria-label="Close">
                                <span aria-hidden="false">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Informasi yang ingin Anda tambahkan -->
                            <p>Plugin ini juga memungkinkan Anda untuk dengan cepat mengidentifikasi dan membedakan berbagai
                                jenis transaksi pinjaman, seperti pinjaman pribadi, hipotek, atau bisnis.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modal7" tabindex="-1" role="dialog" aria-labelledby="modal7Label"
                aria-hidden="false">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal7Label">Plugin 7</h5>
                            <button type="button" class="close" data-dismiss="modal" data-target="#kodenModal"
                                aria-label="Close">
                                <span aria-hidden="false">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Informasi yang ingin Anda tambahkan -->
                            <p>Plugin ini juga memungkinkan Anda untuk dengan cepat mengidentifikasi dan membedakan berbagai
                                jenis transaksi pinjaman, seperti pinjaman pribadi, hipotek, atau bisnis.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modal8" tabindex="-1" role="dialog" aria-labelledby="modal8Label"
                aria-hidden="false">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal8Label">Plugin 8</h5>
                            <button type="button" class="close" data-dismiss="modal" data-target="#kodenModal"
                                aria-label="Close">
                                <span aria-hidden="false">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Informasi yang ingin Anda tambahkan -->
                            <p>Plugin ini juga memungkinkan Anda untuk dengan cepat mengidentifikasi dan membedakan berbagai
                                jenis transaksi pinjaman, seperti pinjaman pribadi, hipotek, atau bisnis.</p>
                        </div>
                    </div>
                </div>
            </div>



            <section id="plugin" class="plugin section-bg">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>Our Menu Plugin</h2>
                    </div>

                    <div id="carouselExample" class="carousel slide text-center" data-ride="carousel">
                        <div class="carousel-inner">
                            <!-- Slide 1 -->
                            <div class="carousel-item active">
                                <div class="row">
                                    <!-- Item 1 (Logo 1) -->
                                    <div class="col-sm">
                                        <img src="{{ url('Arsha') }}/assets/img/logo koperasi.png" alt="Logo 1"
                                            class="small-logo mx-auto p-2" data-toggle="modal" data-target="#modal1">
                                    </div>

                                    <!-- Item 2 (Logo 2) -->
                                    <div class="col-sm">
                                        <img src="{{ url('Arsha') }}/assets/img/logo koperasi.png" alt="Logo 2"
                                            class="small-logo mx-auto p-2" data-toggle="modal" data-target="#modal2">
                                    </div>

                                    <!-- Item 3 (Logo 3) -->
                                    <div class="col-sm">
                                        <img src="{{ url('Arsha') }}/assets/img/logo koperasi.png" alt="Logo 3"
                                            class="small-logo mx-auto p-2" data-toggle="modal" data-target="#modal3">
                                    </div>

                                    <!-- Item 4 (Logo 4) -->
                                    <div class="col-sm">
                                        <img src="{{ url('Arsha') }}/assets/img/logo koperasi.png" alt="Logo 4"
                                            class="small-logo mx-auto p-2" data-toggle="modal" data-target="#modal4">
                                    </div>

                                    <!-- Item 4 (Logo 4) -->
                                    <div class="col-sm">
                                        <img src="{{ url('Arsha') }}/assets/img/logo koperasi.png" alt="Logo 4"
                                            class="small-logo mx-auto p-2" data-toggle="modal" data-target="#modal4">
                                    </div>

                                    <!-- Item 4 (Logo 4) -->
                                    <div class="col-sm">
                                        <img src="{{ url('Arsha') }}/assets/img/logo koperasi.png" alt="Logo 4"
                                            class="small-logo mx-auto p-2" data-toggle="modal" data-target="#modal4">
                                    </div>

                                    <!-- Item 4 (Logo 4) -->
                                    <div class="col-sm">
                                        <img src="{{ url('Arsha') }}/assets/img/logo koperasi.png" alt="Logo 4"
                                            class="small-logo mx-auto p-2" data-toggle="modal" data-target="#modal4">
                                    </div>

                                    <!-- Item 4 (Logo 4) -->
                                    <div class="col-sm">
                                        <img src="{{ url('Arsha') }}/assets/img/logo koperasi.png" alt="Logo 4"
                                            class="small-logo mx-auto p-2" data-toggle="modal" data-target="#modal4">
                                    </div>
                                </div>
                            </div>

                            <!-- Slide 2 -->
                            <div class="carousel-item">
                                <div class="row">
                                    <!-- Item 5 (Logo 5) -->
                                    <div class="col-sm">
                                        <img src="{{ url('Arsha') }}/assets/img/logo koperasi.png" alt="Logo 5"
                                            class="small-logo mx-auto p-2" data-toggle="modal" data-target="#modal5">
                                    </div>

                                    <!-- Item 6 (Logo 6) -->
                                    <div class="col-sm">
                                        <img src="{{ url('Arsha') }}/assets/img/logo koperasi.png" alt="Logo 6"
                                            class="small-logo mx-auto p-2" data-toggle="modal" data-target="#modal6">
                                    </div>

                                    <!-- Item 7 (Logo 7) -->
                                    <div class="col-sm">
                                        <img src="{{ url('Arsha') }}/assets/img/logo koperasi.png" alt="Logo 7"
                                            class="small-logo mx-auto p-2" data-toggle="modal" data-target="#modal7">
                                    </div>

                                    <!-- Item 8 (Logo 8) -->
                                    <div class="col-sm">
                                        <img src="{{ url('Arsha') }}/assets/img/logo koperasi.png" alt="Logo 8"
                                            class="small-logo mx-auto p-2" data-toggle="modal" data-target="#modal8">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Previous and Next Buttons with Adjusted Padding -->
                        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev"
                            style="color: black; left: -10%;">
                            <span class="carousel-control-prev-icon" aria-hidden="true"
                                style="filter: invert(100%);"></span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next"
                            style="color: black; right: -10%;">
                            <span class="carousel-control-next-icon" aria-hidden="true"
                                style="filter: invert(100%);"></span>
                        </a>
                    </div>
                </div>
            </section>







        </body>

        </html>


        <!-- ======= Team Section ======= -->
        <section id="team" class="team section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>TESTIMONIALS</h2>
                    <p>Our Client Trust Us</p>
                </div>

                <div class="row">

                    <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Diana, Baitutamwil Berkah Umat</h4>
                                <p>Alhamdulillah dengan memakai aplikasi smartcoop ini koperasi kami sangat terbantu
                                    data-data jadi lebih rapi dan aksesnya pun mudah sekali. Fitur-fiturya juga sangat
                                    membantu kami dalam pembukuan di Anggota koperasi kami juga bisa mengakses simpanannya
                                    lewat hp nya masing-masing karena sudah tersedia aplikasi smartcoop di playstore. Sejauh
                                    ini kami sangat terbantu dan berterima kasih sekali.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Miarta, Koperasi Gemilang</h4>
                                <p>Godong memiliki tampilan yang sangat user friendly bahkan dengan saya dan team yang
                                    sebelumnya buta dengan keuangan koperasi dapat mengerti dengan mudah. Ditambah aplikasi
                                    dijalankan dengan browser online sangat membantu update data secara realtime.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="300">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Penny Dwika Wardani, S.E , KSP Mulia</h4>
                                <p>QMenurut saya Godong mudah sekali untuk diakses baik bagi pengelola hingga para anggota
                                    koperasi. Selain itu bagi saya selaku pengelola, saya sangat terbantu dalam pembuatan
                                    laporan keuangan karena alumnya jelas dan sangat detail, serta hal itu mempermudah
                                    pengawas dalam membaca laporan keuangan yg sudah tersedia. Bagi para anggotapun mereka
                                    dapat melihat perhitungan SHU yang mereka dapatkan</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Bagas Prakoso, Koperasi Lancar Makmur</h4>
                                <p>Menurut saya Godong sangat membantu kami dalam input data koperasi, selain alur sistem
                                    nya yang mudah dipahami, tampilan nya juga sangat menarik sehingga staff kami tidak
                                    bingung untuk mnegoperasikan nya.</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Team Section -->

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Pricing</h2>
                </div>

                <div class="row">

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="box">
                            <h3>Paket Basic</h3>
                            <h4><sup>Rp.</sup>25.000.000</h4>
                            <ul>
                                <li><i class="bx bx-check"></i>Keanggotaan</li>
                                <li><i class="bx bx-check"></i>Simpanan</li>
                                <li><i class="bx bx-check"></i>Pinjaman</li>
                                <li><i class="bx bx-check"></i>Pembukuan</li>
                                <li><i class="bx bx-check"></i>Laporan Keuangan</li>
                            </ul>
                            <a href="#" class="buy-btn">Get Started</a>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="box featured">
                            <h3>Paket Multi Usaha Unit</h3>
                            <h4><sup>Rp.</sup>35.000.000</h4>
                            <ul>
                                <li><i class="bx bx-check"></i>Login Anggota</li>
                                <li><i class="bx bx-check"></i>Unit Usaha Pembiayaan</li>
                                <li><i class="bx bx-check"></i>Unit Usaha PPOB</li>
                                <li><i class="bx bx-check"></i>Fitur Barcode</li>
                                <li><i class="bx bx-check"></i>Laporan Unit Usaha</li>
                            </ul>
                            <a href="#" class="buy-btn">Get Started</a>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                        <div class="box">
                            <h3>Paket Custom Mobile Apps</h3>
                            <h4><sup>Rp.</sup>20.000.000</h4>
                            <ul>
                                <li><i class="bx bx-check"></i>Personalize Apps</li>
                                <li><i class="bx bx-check"></i>Publish di Android Playstore</li>
                                <li><i class="bx bx-check"></i>Login tanpa perlu kode koperasi</li>
                                <li><i class="bx bx-check"></i>Fitur Barcode</li>
                                <li><i class="bx bx-check"></i>Free update aplikasi menyesuaikan dengan update aplikasi
                                    mobile utama Godong selama satu tahun</li>
                            </ul>
                            <a href="#" class="buy-btn">Get Started</a>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Pricing Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Klien Kami</h2>
                </div>

                <div class="faq-list">
                    <ul>
                        <li data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                                data-bs-target="#faq-list-1">Koperasi Bhakti Arthama Fiskal<i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-2" class="collapsed">Koperasi Karyawan PT.Argapura<i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="300">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-3" class="collapsed">KOPKAR SUMBER SEJAHTERA AGRION<i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="400">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-4" class="collapsed">Koperasi Jasa Baituttamwil Berkah Umat <i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="500">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-5" class="collapsed">Koperasi Bali Surya Dewata<i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                            </div>
                        </li>

                    </ul>
                </div>

            </div>
        </section><!-- End Frequently Asked Questions Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Hubungi Kontak dibawah ini</p>
                </div>

                <div class="info">
                    <div class="row">
                        <div class="col-lg-6">
                            <h3>GODONG</h3>
                            <p>
                                <strong>Office:</strong> Margatama Asri IV No. 3 <br>
                                Kota Madiun - Jawa Timur<br>
                                <strong> Branch Office:</strong> Perum Griya Gadang Sejahtera Kav. 14<br>
                                Gadang - Sukun - Kota Malang - Jawa Timur<br><br>
                                <strong>TELP:</strong> 0811-2501-827<br>
                                <strong>WA:</strong> 0811-2501-827<br>
                                <strong>Email:</strong> cs@andromeda.co.id<br>
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.428402113363!2d111.54006207413555!3d-7.6369929755328085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79bf36978c3bf3%3A0x8c1997902afb269f!2sMARSTECH!5e0!3m2!1sid!2sid!4v1690605880803!5m2!1sid!2sid"
                                frameborder="0" style="border:0; width: 100%; height: 300px;" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- End Contact Section -->

    </main><!-- End #main -->
@endsection

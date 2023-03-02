<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <script src="https://kit.fontawesome.com/a59b9b09ab.js" crossorigin="anonymous"></script>
        <title>Bintang Juara</title>
        <!-- add icon link -->
        <link rel = "icon" href = "{{asset('assets/logo1.png')}}" type ="image/x-icon">

        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

        <!-- Swiper CSS -->
        <link rel="stylesheet" href="css/swiper-bundle.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    </head>
    <style>
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap');
        body {
            font-family: 'Roboto', sans-serif;
        }
        .profile-circel-image-200 img {
            width: 300px;
            height: 300px;
            border-radius: 200px;
        }
        .vv img {
            transition: all 0.3s ease;
            cursor: pointer;
        }
        .vv img:hover {
            opacity: 0.8;
            box-shadow: 0px 0px 5px 8px rgba(0,0,0,0.08);
        }
    </style>
</head>
<!-- Navbar -->
<body>
<nav class="navbar navbar-expand-lg navbar-dark p-md-2 fixed-top ">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{asset('assets/logo1.png')}}" alt="logo" height="50"><strong>&nbsp Bintang Juara</strong>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Yuk Wakaf</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://ppdb.bintangjuara.sch.id/" target="_blank">PPDB</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Akhir Navbar -->

<!-- Carousel -->
<section id="carouse">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{asset('assets/gedung1.jpg')}}" class="img-fluid" alt="bg">
        </div>
        <div class="carousel-item active">
          <img src="{{asset('assets/gedung2.jpg')}}" class="img-fluid" alt="bg">
        </div>
        <div class="carousel-item active">
          <img src="{{asset('assets/gedung3.jpg')}}" class="img-fluid" alt="bg">
        </div>
      </div>
    </div>
  </section>
<!-- Akhir Carousel -->

<!-- Selayang Pandang -->
<section id="selayangpandang">
    <div class="container mt-5">
        <div class="row">
            <h2><b>Selayang Pandang</b></h2>
        </div>
<!-- Tabs navs -->
<ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab">PAUD</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#tab-2" role="tab">SD</a>
    </li>
  </ul>
  <!-- Tabs navs -->

  <!-- Tabs content -->
  <div class="tab-content">
    <div class="tab-pane active" id="tab-1" role="tabpanel">
        <div class="row mt-3 g-3">
        <div class="col-12 col-md-6 col-lg-5">
            <img src="{{asset('assets/gedung1.jpg')}}" class="img-fluid" alt="bg">
        </div>
        <div class="col-12 col-md-6 col-lg-7">
            <p align="justify">PAUD ISLAM BINTANG JUARA merupakan lembaga PAUD terpadu dengan layanan pengasuhan anak (daycare). PAUD Islam Bintang Juara memiliki prinsip Pendidikan Holistik Integratif yang mengutamakan peletakkan pondasi Akidah pembiasaan Akhlakul Karimah dan Adab Islami. PAUD Islam Bintang Juara memiliki upaya optimalisasi perkembangan seluruh aspek perkembangan anak dan potensi Multiple Intelligences. PAUD Islam Bintang Juara diresmikan hari Kamis, 16 Mei 2013 di Jl. Dewi Sartika Semarang. PAUD Islam Bintang Juara didirikan oleh Ibu Dyah Indah Noviyani, S.Psi., M.Psi. beserta Dewan Pembina : Ibu Dr. Hj. Esmi Warassih, SH, MS. dan Bapak Drs. H. Abdullah Sodiq.</p>
        </div>
    </div>
</div>
    <div class="tab-pane" id="tab-2" role="tabpanel">
        <div class="row mt-3 g-3">
            <div class="col-12 col-md-6 col-lg-5">
                <img src="{{asset('assets/gedung1.jpg')}}" class="img-fluid" alt="bg">
            </div>
        <div class="col-12 col-md-6 col-lg-7">
            <p align="justify">SD ISLAM BINTANG JUARA adalah Islamic Character Based School yang mengedepankan pendidikan diniyyah seperti pembiasaan ibadah, tahsin & tahfidz, serta penanaman adab dan akhlak mulia. Kami juga menerapkan pembelajaran holistik integratif dengan mengintegrasikan segala aspek dan nilai-nilai dalam pendidikan seperti nilai moral, etis, religius, psikologis dan sosial dalam kesatuan yang dilakukan secara menyeluruh antara jiwa dan badan serta aspek material dan aspek spiritual untuk memenuhi kebutuhan esensial anak.</p>
        </div>
    </div>
    </div>
  </div>
  <!-- Tabs content -->
        </div>
    </div>
</section>
<!-- Akhir Selayang Pandang -->

<!-- Events, News, Videos -->
<section id="env">
    <div class="container mt-5 mb-5">
        <div class="container">
            <div class="row g-3">
                <div class="col-12 col-md-6 col-lg-3">
                    <h4 align="center">Kegiatan</h4>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <h4 align="center">Berita</h4>

                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <h4 align="center">Artikel</h4>

                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <h4 align="center">Pengumuman</h4>
                </div>

            </div>
        </div>
    </div>
</section><br><br>
<!-- Akhir Events, News, Videos -->

<!-- Lebih Dekat -->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#45b0f8" fill-opacity="1"
          d="M0,160L48,144C96,128,192,96,288,90.7C384,85,480,107,576,112C672,117,768,107,864,122.7C960,139,1056,181,1152,165.3C1248,149,1344,75,1392,37.3L1440,0L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        '
    </path>
</svg>
<section id="video yt"style="background-color: #45b0f8;">
            <div class="container">
                <div class="bintangjuaravideo">
                    <div class="heading">
                        <div class="text-center">
                            <h2 class="title text-white"><b>Lebih Dekat dengan Bintang Juara</b></h2></div>
                    </div>
                </div>
                <section class="yt">
                    <div class="row mt-3 g-5">
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="video1">
                                <div class="bintangjuaravideo">
                                    <div class="elementor-widget-video" data-id="8b392b9" data-element_type="widget"
                                         data-settings="{&quot;youtube_url&quot;:&quot;https:\/\/www.youtube.com\/watch?v=1GL6RJMI0S4&quot;,&quot;video_type&quot;:&quot;youtube&quot;,&quot;controls&quot;:&quot;yes&quot;,&quot;aspect_ratio&quot;:&quot;169&quot;}"
                                         data-widget_type="video.default">
                                        <div class="elementor-wrapper elementor-fit-aspect-ratio elementor-open-inline">
                                            <iframe class="elementor-video" frameborder="0" allowfullscreen="1"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                    title="Video Profile PAUD Islam Bintang Juara Semarang | Sekolah Calon Pemimpin Muslim | Sekolah Ramah Anak"
                                                    width="620" height="360"
                                                    src="https://www.youtube.com/embed/4XFlYAI_DUE"
                                                    id="widget2"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="bintangjuaravideo">
                                <div class="elementor-wrapper elementor-fit-aspect-ratio elementor-open-inline">
                                    <iframe class="elementor-video" frameborder="0" allowfullscreen="1"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            title="Leadership Camp PAUD Islam Bintang Juara | &quot;More Than Just Adventure&quot;" width="620"
                                            height="360"
                                            src="https://www.youtube.com/embed/GAr9QV2TLcI"
                                            id="widget4"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">\
        <path fill="#45b0f8" fill-opacity="1"
              d="M0,96L48,122.7C96,149,192,203,288,208C384,213,480,171,576,138.7C672,107,768,85,864,106.7C960,128,1056,192,1152,218.7C1248,245,1344,235,1392,229.3L1440,224L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
        </path>
    </svg>

    <!-- Akhir Lebih Dekat -->

   <!-- gallery -->

   <!-- Akhir gallery -->

    <!-- kontak dan maps -->
    <section id="kontak">
        <div class="container mt-5">
            <div class="heading">
                <div class="text-center">
                    <h2 class="title"><b>Kontak Kami</b></h2>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row g-5">
                        <div class="col-12 col-md-6 col-lg-6">
                            <h2><strong>PAUD</strong></h2>
                            <div class="row">
                            <p><i class="fas fa-home mr-3"></i> &nbsp; Jl. Dewi Sartika No.82, Sukorejo, Kec. Gn. Pati, Kota Semarang, 50221</p>
                            <p><i class="fas fa-clock mr-3"></i> &nbsp; Senin - Sabtu (08.00 - 15.00)</p>
                            <p><i class="fas fa-phone mr-3"></i> &nbsp; (024) 8445492</p>
                            <p><i class="fas fa-phone mr-3"></i> &nbsp; 0896-6255-2583</p>
                        </div>
                        <div class="row">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.896545700916!2d110.38650111485862!3d-7.021445594928205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708ba8c08f85c7%3A0xdafc80d505fdac34!2sIslamic%20Preschool%20Bintang%20Juara!5e0!3m2!1sen!2sid!4v1676713845472!5m2!1sen!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <h2><strong>SD</strong></h2>
                            <div class="row">
                            <p><i class="fas fa-home mr-3"></i> &nbsp; Jl. Dewi Sartika No.17 A, Sukorejo, Kec. Gn. Pati, Kota Semarang, 50221</p>
                            <p><i class="fas fa-clock mr-3"></i> &nbsp; Senin - Sabtu (07.00 - 15.00)</p>
                            <p><i class="fas fa-phone mr-3"></i> &nbsp; 0823-1493-0833</p>
                            <p><i class="fas fa-phone mr-3"></i> &nbsp; 0823-1493-0833</p>
                            </div>
                            <div class="row">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1979.9422714849622!2d110.38611055872192!3d-7.022855500000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708bbd641c18cb%3A0xb100361d402b0f30!2sSD%20ISLAM%20BINTANG%20JUARA!5e0!3m2!1sen!2sus!4v1676260730522!5m2!1sen!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- akhir kontak dan maps -->

<!-- Footer -->
@extends('footer')
<!-- Akhir Footer -->

    <script>
        function scrolll() {
            var left = document.querySelector(".scroll-images");
            left.scrollBy(350, 0);
        }

        function scrollr() {
            var right = document.querySelector(".scroll-images");
            right.scrollBy(-350, 0);
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</section>
<script src="js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    var nav = document.querySelector('nav');

    window.addEventListener('scroll', function () {
        if (window.pageYOffset > 100) {
            nav.classList.add('bg-primary', 'shadow');
        } else {
            nav.classList.remove('bg-primary', 'shadow');
        }
    });
</script>
</body>
</html>

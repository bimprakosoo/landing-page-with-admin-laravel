<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>RekaDigi</title>
  <meta name="robots" content="noindex, follow"/>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">

  <!-- Use the minified version files listed below for better performance and remove the files listed above -->
  <link rel="stylesheet" href="{{ asset('css/vendor/vendor.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/plugins/plugins.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">

</head>

<body class="template-color-10">

<div id="page">
  <!-- Header Section Start -->
  <div class="header-section sticky-header section header-fluid-two header-orange">
    <div class="header-inner">
      <div class="container position-relative">
        <div class="row justify-content-between align-items-center">

          <!-- Header Logo Start -->
          <div class="col-xl-3 col-auto">
            <div class="header-logo">
              <a href="index.html">
                <h3>RekaDigi</h3>
              </a>
            </div>
          </div>
          <!-- Header Logo End -->

          <!-- Header Main Menu Start -->
          <div class="col d-none d-xl-block position-static">
            <nav class="site-main-menu menu-hover-1">
              <ul>
                <li>
                  <a href="#"><span class="menu-text">Home</span></a>
                </li>
                <li>
                  <a href="#about"><span class="menu-text">Tentang Kami</span></a>
                </li>
                <li>
                  <a href="#visi-misi"><span class="menu-text">Visi Misi</span></a>
                </li>
                <li>
                  <a href="#tim"><span class="menu-text">Tim Kami</span></a>
                </li>
                <li>
                  <a href="#produk"><span class="menu-text">Produk Kami</span></a>
                </li>
                <li>
                  <a href="#kontak"><span class="menu-text">Kontak</span></a>
                </li>
              </ul>
            </nav>
          </div>
          <!-- Header Main Menu End -->

        </div>
      </div>
    </div>
  </div>
  <!-- Header Section End -->


  <!-- Slider main container Start -->
  <div class="intro7-section-wrap intro7-slider swiper-container section">
    <div class="swiper-wrapper">
      @if (!empty($dashboard->image))
        <div class="intro7-section swiper-slide" data-bg-image="{{ Storage::url($dashboard->image) }}"></div>
      @else
        <div class="intro7-section swiper-slide"></div>
      @endif
      </div>
    </div>
  </div>
  <!-- Slider main container End -->

  <div class="artist-coaching-section section section-padding-t80-b100">
    <div class="container">
      <div class="section-title-three text-center" data-aos="fade-up">
        <h2 class="title">Spesialisasi Kami</h2>
      </div>

      <div class="row row-cols-lg-4 row-cols-md-2 row-cols-sm-2 row-cols-1 max-mb-n30">

        <div class="col max-mb-30">
          <div class="coaching-box">
            <div class="image">
              <img src="{{ asset('images/coaching/artist-box-image-01.png') }}" alt="">
            </div>
            <div class="content">
              <h3 class="title">Web Development</h3>
              <p style="text-align: justify">Website menjadi garda terdepan sebuah perusahaan. Dengan tenaga ahli yang
                berpengalaman, kami siap mengembangkan website yang lebih interaktif dan siap membantu pengembangan
                bisnis Anda.</p>
            </div>
          </div>
        </div>

        <div class="col max-mb-30">
          <div class="coaching-box padding-top-50">
            <div class="image">
              <img src="{{ asset('images/coaching/artist-box-image-02.png') }}" alt="">
            </div>
            <div class="content">
              <h3 class="title">Mobile Apps Development</h3>
              <p style="text-align: justify">Kami memiliki developer dan desainer yang siap membangun aplikasi Anda.
                Dengan pengalaman yang ada, kami siap membuat yang sesuai dengan kebutuhan bisnis Anda.</p>
            </div>
          </div>
        </div>

        <div class="col max-mb-30">
          <div class="coaching-box">
            <div class="image">
              <img src="{{ asset('images/coaching/artist-box-image-03.png') }}" alt="">
            </div>
            <div class="content">
              <h3 class="title">Sistem Otomasi</h3>
              <p style="text-align: justify">Kami siap menyediakan sistem otomasi industri yang komprehensif dan
                sepenuhnya di kustomisasi agar sesuai dengan spesifikasi dan persyaratan produksi dari pelanggan, karena
                tujuan utama adalah memberikan solusi.</p>
            </div>
          </div>
        </div>

        <div class="col max-mb-30">
          <div class="coaching-box padding-top-50">
            <div class="image">
              <img src="{{ asset('images/coaching/artist-box-image-04.png') }}" alt="">
            </div>
            <div class="content">
              <h3 class="title">Software Development</h3>
              <p style="text-align: justify">Kami akan mengembangkan Sistem Informasi Manajemen perusahaan Anda.
                Pelanggan akan mendapatkan data yang tepat untuk menentukan langkah perusahaan kedepannya.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="artist-quote-section section section-padding-bottom" id="about">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-xl-5 col-lg-6 col-12">
          <div class="artist-quote-left">
            <div class="quote-image">
              <img src="{{ asset('images/icons/about.jpg') }}" alt="">
            </div>
          </div>
        </div>
        <div class="col-xl-6 offset-xl-1 col-lg-6 col-12">
          <h2 class="title">PT Daya Rekadigital Indonesia</h2>
          <div class="artist-quote-right">
            <p style="text-align: justify">{{ $about->description ?? '' }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="artist-quote-section section section-padding-bottom" id="visi-misi">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-xl-5 col-lg-6 col-12">
          <h2 class="title">VISI</h2>
          <div class="artist-quote-right">
            <p style="text-align: justify">{{ $about->visi ?? '' }}</p>
          </div>
        </div>
        <div class="col-xl-6 offset-xl-1 col-lg-6 col-12">
          <h2 class="title">MISI</h2>
          <div class="artist-quote-right">
            <p style="text-align: justify">{!! nl2br($about->misi ?? '') !!}</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="testimonial-section section section-padding-t80-b100" data-bg-color="#faf8f6">
    <div class="container-fluid pl-80 pl-lg-15 pl-md-15 pl-sm-15 pl-xs-15 pr-80 pr-lg-15 pr-md-15 pr-sm-15 pr-xs-15">
      <div class="section-title-three text-center" data-aos="fade-up">
        <span class="sub-title">Testimonials</span>
        <h2 class="title">Apa testimoni para kustomer kami ?</h2>
      </div>

      <div class="testimonial-slider-two swiper-container" data-aos="fade-up">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-two testimonial-three">
              <div class="content">
                <h4 class="title">High level of efficiency and scientific teaching methods</h4>
                <p>I am happy with their arrangement of lessons and subjects. They reflect a scientific investigation
                  into effective methods to adopt for learners.</p>
              </div>
              <div class="author-info">
                <div class="image">
                  <img src="{{ asset('images/testimonial/70/artist-testimonial-avatar-01.jpg') }}" alt="">
                </div>
                <div class="cite">
                  <h6 class="name">Florence Themes</h6>
                  <span class="position">/ Multimedia Admin</span>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="testimonial-two testimonial-three">
              <div class="content">
                <h4 class="title">Professional team of specialists and passionate mentors at reach </h4>
                <p>I need to get a certification for English proficiency and MaxCoach is my best choice. Their tutors
                  are smart and professional when dealing with students.</p>
              </div>
              <div class="author-info">
                <div class="image">
                  <img src="{{ asset('images/testimonial/70/artist-testimonial-avatar-02.jpg') }}" alt="">
                </div>
                <div class="cite">
                  <h6 class="name">Madley Pondor</h6>
                  <span class="position">/ IT Specialist</span>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="testimonial-two testimonial-three">
              <div class="content">
                <h4 class="title">Highly recommend their courses and teaching system</h4>
                <p>I am happy with their arrangement of lessons and subjects. They reflect a scientific investigation
                  into effective methods to adopt for learners.</p>
              </div>
              <div class="author-info">
                <div class="image">
                  <img src="{{ asset('images/testimonial/70/artist-testimonial-avatar-03.jpg') }}" alt="">
                </div>
                <div class="cite">
                  <h6 class="name">Luvic Dubble</h6>
                  <span class="position">/ Private Tutor</span>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="testimonial-two testimonial-three">
              <div class="content">
                <h4 class="title">It's a choice of quality for people who need specialized study programs</h4>
                <p>I'm a very strict person so I require everything to be organized and neat. Then, I'll be able to make
                  things right and shine. MaxCoach guys just got me.</p>
              </div>
              <div class="author-info">
                <div class="image">
                  <img src="{{ asset('images/testimonial/70/artist-testimonial-avatar-01.jpg')}}" alt="">
                </div>
                <div class="cite">
                  <h6 class="name">Florence Themes</h6>
                  <span class="position">/ Multimedia Admin</span>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </div>

  <div class="service-section section section-padding" data-bg-color="#f8f8f8" id="tim">
    <div class="container">
      <div class="section-title-two text-center" data-aos="fade-up">
        <span class="sub-title">Our Team</span>
        <h2 class="title fz-48">Para Tim RekaDigi</h2>
      </div>
      <div class="service-slider swiper-container" data-aos="fade-up">
        <div class="swiper-wrapper">
          @foreach($team as $member)
            <div class="swiper-slide">
              <!-- Single Service Start -->
              <div class="service">
                <div class="image">
                  <img src="{{ Storage::url($member->photo) }}" alt="" height="300" width="50">
                </div>
                <div class="content">
                  <h3 class="title">{{ $member->name }}</h3>
                  <p>{{ $member->role }}</p>
                </div>
              </div>
            </div>
          @endforeach
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </div>

  <div class="course-section section section-fluid section-padding" id="produk">
    <div class="container">
      <div class="section-title-two text-center" data-aos="fade-up">
        <span class="sub-title">Produk Kami</span>
        <h2 class="title fz-48">Apa saja yang telah kita buat</h2>
      </div>
      <div class="row row-cols-xl-4 row-cols-lg-2 row-cols-md-2 row-cols-1 max-mb-n30">
        @foreach($product as $p)
          <div class="col max-mb-30">
            <div class="course-6">
              <div class="thumbnail">
                <a class="image" href="course-details-standard-sidebar.html">
                  <img src="{{ Storage::url($p->image) }}" alt="">
                  <div class="course-overlay-bg"></div>
                </a>
              </div>
              <div class="info">
                <div class="course-caption-main">
                  <h3 class="title">{{ $p->name }}</h3>
                </div>
                <div class="course-caption-collapse">
                  <div class="desc">
                    <p>{{ $p->description }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>

  <div class="footer-section section section-fluid-two" id="kontak">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-12 col-12 max-mb-50">
          <div class="footer-widget">
            <h4 class="footer-widget-title">Alamat Kami</h4>
            <div class="footer-widget-content">
              <div class="content">
                <p>Jl. Wijaya Kusuma No.39,</p>
                <p>RT.003/RW.015, Tipes, Kec. Serengan, </p>
                <p>Kota Surakarta, Jawa Tengah 57154</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-7 col-12 max-mb-50">
          <div class="footer-widget">
            <h4 class="footer-widget-title">Kontak Kami</h4>
            <div class="footer-widget-content">
              <div class="content">
                <p>HP: 081392874394</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-5 col-12 max-mb-50">
          <div class="footer-widget">
            <h4 class="footer-widget-title">Email Kami</h4>
            <div class="footer-widget-content">
              <div class="content">
                <p>Email: info@rekadigi.id</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <a href="#" class="scroll-top" id="scroll-top">
    <i class="arrow-top fal fa-long-arrow-up"></i>
    <i class="arrow-bottom fal fa-long-arrow-up"></i>
  </a>
</div>

<script src="{{ asset('js/vendor/vendor.min.js')}}"></script>
<script src="{{ asset('js/plugins/plugins.min.js')}}"></script>

<!-- Main Activation JS -->
<script src="{{ asset('js/main.js')}}"></script>


</body>

</html>
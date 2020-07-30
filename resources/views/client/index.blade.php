@extends('layout.client')

@section('title', 'Mahasiswa')

@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero">

  <div class="container">
    <div class="row d-flex align-items-center"">
      <div class=" col-lg-6 py-5 py-lg-0 order-2 order-lg-1" data-aos="fade-right">
      <h1>Website Resmi Panduan Akademik Amikom Jogja</h1>
      <h2>Daftarkan perusahaan anda untuk menerima mahasiswa magang</h2>
      <a href="/register" class="btn-get-started scrollto">Daftar</a>
    </div>
    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
      <img src="assets/img/hero-img.png" class="img-fluid" alt="">
    </div>
  </div>
  </div>

</section><!-- End Hero -->

<main id="main">



  <!-- ======= About Section ======= -->
  <section id="about" class="about section-bg">
    <div class="container">

      <div class="row">
        <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
        <div class="col-xl-7 pl-0 pl-lg-5 pr-lg-1 d-flex align-items-stretch">
          <div class="content d-flex flex-column justify-content-center">
            <h3 data-aos="fade-in" data-aos-delay="100">Magang Dengan 16SKS</h3>
            <p data-aos="fade-in">
              Ikuti magang untuk mendapatkan pengalaman yang sangat berharga dengan perusahaan perusahaan ternama
            </p>
            <div class="row">
              <div class="col-md-6 icon-box" data-aos="fade-up">
                <i class="bx bx-receipt"></i>
                <h4><a href="#">Sertifikat</a></h4>
                <p>Mendapatkan sertifikat Universitas dari pihak kampus maupun perusahaan</p>
              </div>
              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-cube-alt"></i>
                <h4><a href="#">Menambah Pengalaman</a></h4>
                <p>Menambah daftar pengalaman dalam catatan CV</p>
              </div>
              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-images"></i>
                <h4><a href="#">Moment</a></h4>
                <p>Memiliki moment tak terlupakan dengan rekan kerta</p>
              </div>
              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                <i class="bx bx-shield"></i>
                <h4><a href="#">Bertanggung Jawab</a></h4>
                <p>Mampu meningkatkan sifat tanggung jawab dalam diri</p>
              </div>
            </div>
          <br>
          <a href="/register"> <button type="button" class="btn btn-warning" data-aos="fade-up" data-aos-delay="300">Daftar</button></a>
          </div><!-- End .content-->
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services section-bg">
    <div class="container">

      <div class="section-title">
        <h2 data-aos="fade-in">Fasilitas</h2>
        <p data-aos="fade-in">Beberapa fasilitas pada Prodi D3 Teknik Informatika Universitas Amikom</p>
      </div>

      <div class="row">
        <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-right">
          <div class="card">
            <div class="card-img">
              <img src="assets/img/apel.jpg" alt="...">
            </div>
            <div class="card-body">
              @foreach ($fasilitas_1 as $fs1)
              <h5 class="card-title"><a href="">{{$fs1->nama_fasilitas}}</a></h5>
              <p class="card-text">{{$fs1->deskripsi}}</p>
              @endforeach
            </div>
          </div>
        </div>
        <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-left">
          <div class="card">
            <div class="card-img">
              <img src="assets/img/kelas.jpg" alt="...">
            </div>
            <div class="card-body">
              @foreach ($fasilitas_2 as $fs2)
              <h5 class="card-title"><a href="">{{$fs2->nama_fasilitas}}</a></h5>
              <p class="card-text">{{$fs2->deskripsi}}</p>
              @endforeach
            </div>
          </div>

        </div>
        <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-right">
          <div class="card">
            <div class="card-img">
              <img src="assets/img/cinema.jpg" alt="...">
            </div>
            <div class="card-body">
              @foreach ($fasilitas_3 as $fs3)
              <h5 class="card-title"><a href="">{{$fs3->nama_fasilitas}}</a></h5>
              <p class="card-text">{{$fs3->deskripsi}}</p>
              @endforeach
            </div>
          </div>
        </div>
        <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-left">
          <div class="card">
            <div class="card-img">
              <img src="assets/img/perpus.jpg" alt="...">
            </div>
            <div class="card-body">
              @foreach ($fasilitas_4 as $fs4)
              <h5 class="card-title"><a href="">{{$fs4->nama_fasilitas}}</a></h5>
              <p class="card-text">{{$fs4->deskripsi}}</p>
              @endforeach
            </div>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Features Section ======= -->
  <section id="features" class="features section-bg">
    <div class="container">

      <div class="section-title">
        <h2 data-aos="fade-in">Konsentrasi</h2>
        <p data-aos="fade-in">Terdapat 3 Konsentrasi dalam Prodi D3 Teknik Informatika Universitas Amikom ini.</p>
      </div>

      <!-- <div class="row content">
          <div class="col-md-5" data-aos="fade-right">
            <img src="assets/img/features-1.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4" data-aos="fade-left">
            
            <p class="font-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="icofont-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="icofont-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
            </ul>
          </div> -->


      <div class="row content">
        <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
          <img src="assets/img/features-2.svg" class="img-fluid" alt="">
        </div>
        <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
          @foreach ($judul1 as $j)
          <h3>{{$j->judul}}</h3>
          @endforeach
          @foreach ($deskripsi_1 as $d1)
          <p>
            {{$d1->deskripsi_1}}
          </p>
          @endforeach
          @foreach ($deskripsi_2 as $d2)
          <p>
            {{$d2->deskripsi_2}}
          </p>
          @endforeach
        </div>
      </div>

      <div class="row content">
        <div class="col-md-5" data-aos="fade-right">
          <img src="assets/img/features-3.svg" class="img-fluid" alt="">
        </div>
        <div class="col-md-7 pt-5" data-aos="fade-left">
          @foreach ($judul2 as $j)
          <h3>{{$j->judul}}</h3>
          @endforeach
          @foreach ($deskripsi_3 as $d1)
          <p>
            {{$d1->deskripsi_1}}
          </p>
          @endforeach
          @foreach ($deskripsi_4 as $d2)
          <p>
            {{$d2->deskripsi_2}}
          </p>
          @endforeach
        </div>
      </div>

      <div class="row content">
        <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
          <img src="assets/img/features-4.svg" class="img-fluid" alt="">
        </div>
        <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
          @foreach ($judul3 as $j)
          <h3>{{$j->judul}}</h3>
          @endforeach
          @foreach ($deskripsi_5 as $d1)
          <p>
            {{$d1->deskripsi_1}}
          </p>
          @endforeach
          @foreach ($deskripsi_6 as $d2)
          <p>
            {{$d2->deskripsi_2}}
          </p>
          @endforeach
        </div>
      </div>

    </div>
  </section><!-- End Features Section -->

  <!-- ======= Portfolio Section ======= -->
  <!-- <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">Portfolio</h2>
          <p data-aos="fade-in">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus-circle"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="icofont-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="icofont-plus-circle"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="icofont-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="icofont-plus-circle"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="icofont-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="icofont-plus-circle"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="icofont-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="icofont-plus-circle"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="icofont-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Web 2</h4>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox" title="App 3"><i class="icofont-plus-circle"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="icofont-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox" title="Card 1"><i class="icofont-plus-circle"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="icofont-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox" title="Card 3"><i class="icofont-plus-circle"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="icofont-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="icofont-plus-circle"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="icofont-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
              </div>
            </div>
          </div>

        </div>

      </div> -->
  </section><!-- End Portfolio Section -->

  <!-- ======= Team Section ======= -->
  <section id="direktorat" class="team section-bg">
    <div class="container">

      <div class="section-title">
        <h2 data-aos="fade-in">Direktorat</h2>
        <p data-aos="fade-in">Universitas AMIKOM Yogyakarta memiliki beberapa direktorat yang dibawah pimpinan Wakil Rektor secara langsung yang berkaitan dengannya. </p>
      </div>

      <div class="row">
        <div class="col-xl-3 col-lg-4 col-md-6">
          <div class="member" data-aos="fade-up">
            <div class="pic"><img src="assets/img/team/daak.jpg" height="267px" alt=""></div>
            <h4>Direktorat Administrasi Akademik dan Kemahasiswaan</h4>
            <span>Direktorat ini berkaitan secara langsung dengan kegiatan akademik mahasiswa dan administrasi.</span>
            <div class="social">
              <a href=""><i class="icofont-twitter"></i></a>
              <a href=""><i class="icofont-facebook"></i></a>
              <a href=""><i class="icofont-instagram"></i></a>
              <a href=""><i class="icofont-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6">
          <div class="member" data-aos="fade-up" data-aos-delay="100">
            <div class="pic"><img src="assets/img/team/dpk.jpg" height="267px" alt=""></div>
            <h4>Direktorat Perencanaan Keuangan</h4>
            <span>Direktorat ini menginformasikan terkait dengan biaya kuliah, danmengolah keuangan yang berasal dari mahasiswa untuk kegiatan-kegiatan kemahasiswaan.</span>
            <div class="social">
              <a href=""><i class="icofont-twitter"></i></a>
              <a href=""><i class="icofont-facebook"></i></a>
              <a href=""><i class="icofont-instagram"></i></a>
              <a href=""><i class="icofont-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6">
          <div class="member" data-aos="fade-up" data-aos-delay="200">
            <div class="pic"><img src="assets/img/team/kmhs.png" height="267px" alt=""></div>
            <h4>Direktorat Kemahasiswaan</h4>
            <span>Direktorat ini mengelola setiap kegiatan kemahasiswaan yang dilakukan oleh seluruh Lembaga Mahasiswa</span>
            <div class="social">
              <a href=""><i class="icofont-twitter"></i></a>
              <a href=""><i class="icofont-facebook"></i></a>
              <a href=""><i class="icofont-instagram"></i></a>
              <a href=""><i class="icofont-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6">
          <div class="member" data-aos="fade-up" data-aos-delay="300">
            <div class="pic"><img src="assets/img/team/ic.png" height="267px" alt=""></div>
            <h4>Direktorat Innovation Center</h4>
            <span>Direktorat ini mengelola setiap sistem di Universitas AMIKOM Yogyakarta, seperti contohnya email students dan aplikasi amikom one.</span>
            <div class="social">
              <a href=""><i class="icofont-twitter"></i></a>
              <a href=""><i class="icofont-facebook"></i></a>
              <a href=""><i class="icofont-instagram"></i></a>
              <a href=""><i class="icofont-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Team Section -->



  

  <!-- ======= Contact Section ======= -->
  <!-- <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">Contact</h2>
          <p data-aos="fade-in">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box" data-aos="fade-up">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@example.com<br>contact@example.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form" data-aos="fade-up">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section> -->

</main><!-- End #main -->
@endsection
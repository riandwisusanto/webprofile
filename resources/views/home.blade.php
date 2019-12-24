@include('lib.csslib')
@include('template.header')

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <h1>SELAMAT DATANG DI PEJAM</h1>
      <h2>Kami menawarkan solusi bisnis melalui teknologi digital dengan layanan yang maksimal dan harga yang kompetitif</h2>
      <a href="#about" class="btn-get-started">Mulai</a>
    </div>
  </section><!-- #hero -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <h2 class="title">Tentang Kami</h2>
            <p>
              konten informasi
            </p>
            <div>
            <h5>Yang kami tawarkan</h5>
            <li><a href="#services"><i class="fa fa-check mr-2"></i></a>Website Development</li>
            <li><a href="#services"><i class="fa fa-check mr-2"></i></a>Website Designing</li>
            <li><a href="#services"><i class="fa fa-check mr-2"></i></a>Mobile Development</li>
            <li><a href="#services"><i class="fa fa-check mr-2"></i></a>Company Profile</li>
            </div>


          </div>

          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInRight"></div>
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Facts Section
    ============================-->
    <section id="facts">
      <div class="container wow fadeIn">
        <div class="row counters">

          <div class="col-sm-4 col-6 text-center">
            <span data-toggle="counter-up">40</span>
            <p>Clients</p>
          </div>

          <div class="col-sm-4 col-6 text-center">
            <span data-toggle="counter-up">53</span>
            <p>Projects</p>
          </div>

          <div class="col-sm-4 col-12 text-center">
            <span data-toggle="counter-up">4</span>
            <p>Team</p>
          </div>

        </div>

      </div>
    </section><!-- #facts -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Layanan</h3>
          <br>
          <br>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="box">
              <div class="icon"><a href="#contact"><i class="fa fa-desktop"></i></a></div>
              <h4 class="title"><a href="#contact">Website Development</a></h4>
              <p class="description">konten tentang mobile dev</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
            <div class="box">
              <div class="icon"><a href="#contact"><i class="fa fa-mobile"></i></a></div>
              <h4 class="title"><a href="#contact">Mobile Development</a></h4>
              <p class="description">konten tentang mobile dev</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
            <div class="box">
              <div class="icon"><a href="#contact"><i class="fa fa-cogs"></i></a></div>
              <h4 class="title"><a href="#contact">Optimization</a></h4>
              <p class="description">Optimalkan pemasaran produk anda dengan teknologi dan pengalaman kami hingga jangkauan yang tidak terbayangkan oleh anda</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
    Call To Action Section
    ============================-->
    <section id="call-to-action">
      <div class="container wow fadeIn">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            
            <p class="cta-title">Mencari solusi yang tepat untuk bisnis anda ?</p>
            <p class="cta-text">Kembangkan potensi bisnis anda dengan Pejam</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#contact">Hubungi Kami</a>
          </div>
        </div>

      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Portfolio</h3>
        </div>
        <br>
        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter=".filter-app, .filter-card, .filter-logo, .filter-web, .filter-desktop" class="filter-active">All</li>
              <li data-filter=".filter-app">Mobile</li>
              <li data-filter=".filter-web">Website</li>
              <li data-filter=".filter-desktop">Desktop</li>
            </ul>
          </div>
        </div>
        <div class="row" id="portfolio-wrapper">
          @foreach($web as $w)
            <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <a href="portfolio/{{$w->id}}">
              <?php 
                    echo '<img src="data:image/jpg;base64,'.base64_encode( $w->foto ).'" alt="">';
              ?>
              <div class="details">
                <h4>{{ $w->nama }}</h4>
                <span>{{ $w->deskripsi }}</span>
              </div>
            </a>
            </div>
          @endforeach

          @foreach($app as $a)
            <div class="col-lg-3 col-md-6 portfolio-item filter-app">
              <a href="portfolio/{{ $w->id}}">
                <?php 
                      echo '<img src="data:image/jpg;base64,'.base64_encode( $a->foto ).'" alt="">';
                ?>
                <div class="details">
                  <h4>{{ $a->nama }}</h4>
                  <span>{{ $a->deskripsi }}</span>
                </div>
              </a>
            </div>
          @endforeach
          @foreach($desk as $d)
            <div class="col-lg-3 col-md-6 portfolio-item filter-app">
              <a href="portfolio/{{ $w->id}}">
                <?php 
                      echo '<img src="data:image/jpg;base64,'.base64_encode( $d->foto ).'" alt="">';
                ?>
                <div class="details">
                  <h4>{{ $d->nama }}</h4>
                  <span>{{ $d->deskripsi }}</span>
                </div>
              </a>
            </div>
          @endforeach
        </div>
        </div>
      </div>
    </section><!-- #portfolio -->

    <!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Tim Kami</h3>
          <br><br>
        </div>
        <div class="row">
          @foreach($tim ?? '' as $tm)
              <div class="col-lg-3 col-md-6">
                <div class="member">
                  <div class="pic">
                  <?php 
                      echo '<img src="data:image/jpg;base64,'.base64_encode( $tm->foto ).'" alt="">';
                   ?></div>
                  <h4>{{ $tm->nama }}</h4>
                  <span>{{ $tm->bidang }}</span>
                  <div class="social">
                    <a href="{{ $tm->fb }}"><i class="fa fa-facebook"></i></a>
                    <a href="{{ $tm->ig }}"><i class="fa fa-instagram"></i></a>
                  </div>
                </div>
              </div>
          @endforeach
        </div>

      </div>
    </section>


@include('template.footer')
@include('lib.scriptlib')

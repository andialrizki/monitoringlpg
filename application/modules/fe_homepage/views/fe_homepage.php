<<<<<<< HEAD
<!-- page -->
<div class="page animsition">
  <div class="page-header">
      <h1 class="page-title">Dashboard</h1>
  </div>
  <div class="page-content">

    <section id="services">
      <div class="container">
        <div class="heading wow fadeInUp">
          <div class="row">
            <div class="text-center col-sm-8 col-sm-offset-2">
              <h2>Fitur Kami</h2>
              <p></p>
            </div>
          </div>
        </div>
        <div class="text-center our-services">
          <div class="row">
            <div class="col-sm-4 wow fadeInDown">
              <div class="service-icon">
                <a href="<?php echo site_url('transaksi'); ?>"><i class="fa fa-money"></i></a>
              </div>
              <div class="service-info">
                <h3>Transaksi</h3>
              </div>
            </div>
            <div class="col-sm-4 wow fadeInDown">
              <div class="service-icon">
                <a href="<?php echo site_url('pelanggan'); ?>"><i class="fa fa-book"></i></a>
              </div>
              <div class="service-info">
                <h3>Data Pelanggan</h3>
              </div>
            </div>
            <div class="col-sm-4 wow fadeInDown">
              <div class="service-icon">
                <a href="<?php echo site_url('spbe'); ?>"><i class="fa fa-book"></i></i></a>
              </div>
              <div class="service-info">
                <h3>Data SPBE</h3>
              </div>
            </div>
            <div class="col-sm-4 wow fadeInUp">
              <div class="service-icon">
                <a href="<?php echo site_url('pangkalan'); ?>"><i class="fa fa-book"></i></a>
              </div>
              <div class="service-info">
                <h3>Data dan Lokasi Pangkalan</h3>
              </div>
            </div>
            <div class="col-sm-4 wow fadeInUp">
              <div class="service-icon">
                <a href="<?php echo site_url('lokasi-agen'); ?>"><i class="fa fa-map-marker"></i></a>
              </div>
              <div class="service-info">
                <h3>Lokasi Agen</h3>
              </div>
            </div>
            <div class="col-sm-4 wow fadeInUp">
              <div class="service-icon">
                <a href="<?php echo site_url('lokasi-pelanggan'); ?>"><i class="fa fa-map-marker"></i></a>
              </div>
              <div class="service-info">
                <h3>Lokasi Pelanggan</h3>
              </div>
=======
<div class="page animsition">
    <div class="page-header">

    </div>
    <?php if (isset($error)): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <center><strong><?php echo $error; ?></strong></center>
        </div>
    <?php endif ?>
    <div class="page-content">
        <!-- Panel Form Elements -->
        <div class="col-xlg-4 col-md-6">
            <div class="panel panel-bordered">
                <div class="panel-heading">
                    <h3 class="panel-title">Chart</h3>
                </div>
                <div class="panel-body container-fluid">
                    
                </div>
            </div>
        </div>

        <div class="col-xlg-4 col-md-6">
            <div class="panel panel-bordered">
                <div class="panel-heading">
                    <h3 class="panel-title">Tentang</h3>
                </div>
                <div class="panel-body container-fluid">
                    <p>
                        Monitoring LPG merupakan solusi keberhasilan implementasi sistem distribusi tertutup LPG 3 Kg di
                        Indonesia. Monitoring LPG mampu memenuhi kebutuhan penataan wilayah penyaluran mulai dari
                        penyalur sampai sub penyalur, dapat berfungsi sebagai Sistem Pendukung Keputusan (SPK) di
                        tingkat SPBE dan penyalur serta dapat juga menjadi mobile apps untuk sistem transaksi di sub
                        penyalur yang berhubungan langsung dengan distribusi LPG 3 Kg yang tepat sasaran kepada
                        pengguna.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="panel panel-bordered">
                <div class="panel-heading">
                    <h3 class="panel-title">Layanan Kami</h3>
                </div>
                <div class="panel-body container-fluid">
                    <div class="row">
                        <div class="col-sm-4 wow fadeInDown">
                            <div class="service-icon">
                                <a href="<?php echo site_url('transaksi'); ?>"><i class="fa fa-money"></i></a>
                            </div>
                            <div class="service-info">
                                <h3>Transaksi</h3>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeInDown">
                            <div class="service-icon">
                                <a href="<?php echo site_url('pelanggan'); ?>"><i class="fa fa-book"></i></a>
                            </div>
                            <div class="service-info">
                                <h3>Data Pelanggan</h3>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeInDown">
                            <div class="service-icon">
                                <a href="<?php echo site_url('spbe'); ?>"><i class="fa fa-book"></i></i></a>
                            </div>
                            <div class="service-info">
                                <h3>Data SPBE</h3>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeInUp">
                            <div class="service-icon">
                                <a href="<?php echo site_url('pangkalan'); ?>"><i class="fa fa-book"></i></a>
                            </div>
                            <div class="service-info">
                                <h3>Data dan Lokasi Pangkalan</h3>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeInUp">
                            <div class="service-icon">
                                <a href="<?php echo site_url('lokasi-agen'); ?>"><i class="fa fa-map-marker"></i></a>
                            </div>
                            <div class="service-info">
                                <h3>Lokasi Agen</h3>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeInUp">
                            <div class="service-icon">
                                <a href="<?php echo site_url('lokasi-pelanggan'); ?>"><i
                                        class="fa fa-map-marker"></i></a>
                            </div>
                            <div class="service-info">
                                <h3>Lokasi Pelanggan</h3>
                            </div>
                        </div>
                    </div>
                </div>
>>>>>>> a2cde1d455275772a89d818eaa7583102639f76c
            </div>
        </div>
<<<<<<< HEAD
      </div>
    </section><!--/#services-->
   
    <section id="portfolio">
      <div class="container">
        <div class="row">
          <div class="heading text-center col-sm-12 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Tentang</h2>
            <p>
              Monitoring LPG merupakan solusi keberhasilan implementasi sistem distribusi tertutup LPG 3 Kg di Indonesia. Monitoring LPG mampu memenuhi kebutuhan penataan wilayah penyaluran mulai dari penyalur sampai sub penyalur, dapat berfungsi sebagai Sistem Pendukung Keputusan (SPK) di tingkat SPBE dan penyalur serta dapat juga menjadi mobile apps untuk sistem transaksi di sub penyalur yang berhubungan langsung dengan distribusi LPG 3 Kg yang tepat sasaran kepada pengguna.
            </p>
          </div>
        </div> 
      </div>
    </section>
  </div>
</div>
=======
    </div>
</div>


<!--section id="about-us" class="parallax">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
          <h2>About us</h2>

        </div>
      </div>

    </div>
  </div>
</section><!--/#about-us-->
>>>>>>> a2cde1d455275772a89d818eaa7583102639f76c

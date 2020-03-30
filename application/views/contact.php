<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700"> 
    <link rel="stylesheet" href="<?=base_url()?>assets/publik/fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?=base_url()?>assets/publik/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/publik/css/magnific-popup.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/publik/css/jquery-ui.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/publik/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/publik/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="<?=base_url()?>assets/publik/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="<?=base_url()?>assets/publik/fonts/flaticon/font/flaticon.css">



    <link rel="stylesheet" href="<?=base_url()?>assets/publik/css/aos.css">

    <link rel="stylesheet" href="<?=base_url()?>assets/publik/css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="200">
  
  <!-- <div class="site-wrap"> -->

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar py-3 js-site-navbar site-navbar-target" role="banner" id="site-navbar">

      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li><a href="<?=site_url('home/index')?>" class="nav-link">Home</a></li>
                

                <li><a href="<?=site_url('home/contact')?>" class="nav-link">Contact</a></li>
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>

  

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(<?=base_url()?>assets/publik/images/kantor.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
            <h1 class="text-white font-weight-light text-uppercase font-weight-bold">Contact Us</h1>
            <p class="breadcrumb-custom"><a href="index.html">Home</a> <span class="mx-2">&gt;</span> <span>Contact</span></p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-5">
          
             <form action="<?=site_url(('contact/process'))?>" method="post" class="p-5 bg-white">
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="fname">Nama</label>
                  <input type="text" id="nama" name="nama" class="form-control" required>
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email" name="email" class="form-control" required>
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Subject</label> 
                  <input type="subject" id="subject" name="subject" class="form-control" required>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Pesanan</label> 
                  <textarea name="pesan" id="message" cols="30" rows="7" class="form-control" placeholder="Tuliskan Pesanan Anda Disini..." required></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Kirim Pesanan" name="add" class="btn btn-primary py-2 px-4 text-white">
                </div>
              </div>
            </form>
            
            </div>
            <div class="col-md-6">
            <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Alamat</p>
              <p class="mb-4">JL.KH Achmad Fauzan, No.17 Bangsri Jepara</p>

               <p class="mb-0 font-weight-bold">Telepon</p>
              <p class="mb-4"><a target="_blank" href="https://api.whatsapp.com/send?phone=628122533846?text=aw">+628122533846</a></p>

              <p class="mb-0 font-weight-bold">Alamat Email</p>
              <p class="mb-0"><a href="#">eskasabacomti@gmail.com</a></p>

            </div>
             <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">More Info</h3>
              <p>Untuk pemesanan dan info lebih lanjut silahkan hubungi nomor di atas atau datang langsung ke kantor kami..</p>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
    
    <center>
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-6 mr-auto">
                <h2 class="footer-heading mb-2">Tentang Kami</h2>
                <p>ESKASABA COMTI adalah sebuah unit usaha produksi jurusan Rekayasa Perangkat Lunak SMK N 1 Bangsri yang berdiri sejak tahun 2012. Unit usaha ini dimotori oleh siswa siswi dan dibimbing oleh guru-guru yang kompeten dibidang nya. Visinya adalah mengembangkan semangat kewirausahaan siswa, sedangkan misinya adalah mempraktekkan keterampilan yang dimiliki untuk membuat sebuah produk yang terkait dengan teknologi rekayasa/software.</p>
              </div>
              <div class="col-md-6">
                <h2 class="footer-heading mb-2">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#">Tentang Kami</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
          <div class="col-md-12">
            <div class="border-top pt-5">
          </div>
              <div class="col-md-12">
              <p>
              <small class="block">&copy; <script>document.write(new Date().getFullYear());</script> Rekayasa Perangkat Lunak<br> Designed &amp; Developed by <a href="https://free-template.co/" target="_blank">Rekayasa perangkat lunak</a></small> 
              </p>
              </div>
            </div>
          </div>
        </center>
        </div>
      </div>
    </footer>

  <script src="<?=base_url()?>assets/publik/js/jquery-3.3.1.min.js"></script>
  <script src="<?=base_url()?>assets/publik/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?=base_url()?>assets/publik/js/jquery-ui.js"></script>
  <script src="<?=base_url()?>assets/publik/js/popper.min.js"></script>
  <script src="<?=base_url()?>assets/publik/js/bootstrap.min.js"></script>
  <script src="<?=base_url()?>assets/publik/js/owl.carousel.min.js"></script>
  <script src="<?=base_url()?>assets/publik/js/jquery.stellar.min.js"></script>
  <script src="<?=base_url()?>assets/publik/js/jquery.countdown.min.js"></script>
  <script src="<?=base_url()?>assets/publik/js/jquery.magnific-popup.min.js"></script>
  <script src="<?=base_url()?>assets/publik/js/bootstrap-datepicker.min.js"></script>
  <script src="<?=base_url()?>assets/publik/js/aos.js"></script>

  <script src="<?=base_url()?>assets/publik/js/main.js"></script>
    
  </body>
</html>
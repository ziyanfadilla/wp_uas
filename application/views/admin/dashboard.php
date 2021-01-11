
  <!DOCTYPE html>
  <html>
    <head>
      <title>Daisy Organic</title>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="assets/assets_admin/style.css'">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

  <div class="navbar-fixed">
        <nav class="light-blue lighten-2">
          <div class="container">
          <div class="nav-wrapper">
            <a href="#!" class="brand-logo">MASK FACE </a>
            <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a href="<?= base_url('admin/tentang_saya')?>">Profile</a></li>
              <li><a href="<?= base_url('admin/data_masker')?>">Login</a></li>
            </ul>
          </div>
        </div>
        </nav>
      </div>

      <!-- side nav -->

      <ul class="sidenav" id="mobile-nav">
          
          <li><a href="<?= base_url('admin/tentang_saya')?>">Profile</a></li>
          <li><a href="<?= base_url('admin/data_masker')?>">Login</a></li>
      </ul>
    <!-- slider -->

    <div class="slider">
        <ul class="slides">
          <li>
            <img src="<?= base_url('assets/assets_admin/gambar/p1.jpg')?>"> <!-- random image -->
            <div class="caption center-align">
              <h3>MASK FACE DAISY ORGANIC</h3>
            </div>
          </li>
          <li>
              <img src="<?= base_url('assets/assets_admin/gambar/42.jpg')?>"> <!-- random image -->
              <div class="caption center-align">
                <h3>MASK FACE DAISY ORGANIC</h3>
              </div>
            </li>

        </ul>
    </div>

    <!-- About Us -->

    <section id="about" class="about light-blue lighten-4">
      <div class="container">
        <div class="row">
          <h3 class="center light grey-text text-darken-3">Daisy Organic</h3>
          <div class="col m6 light">
            <h5><b> MASK FACE DAISY ORGANIC</b></h5>
            <blockquote>Daisy Organic adalah brand yang mengeluarkan produk berupa masker organik.
                  Bahan yang digunakan untuk membuat masker ini konon pakai bahan premium lho.
                  Dan, semua bahan yang digunakan sudah memiliki
                  nomor BPOM. Jadi kamu nggak perlu khawatir lagi dengan keamanannya.
                  da 4 varian yang bisa kamu coba.
                  Milk, Green tea, Chocolate, Strawberry
                  masker dari Daisy Organic ini memiliki bentuk bubuk yang halus.
                  Dan, di dalamnya ada
                  kandungan natural rolled oat yang tentu bagus untuk kesehatan kulit wajah kamu.
            </blockquote>
          </div>
          </div>
        </div>
      </div>
    </section>

    <!-- treatmen -->
    
    <!-- boostrap -->
    <section id="portfolio" class="portfolio ight-blue lighten-5">
  <div class="container">
    <h3 class="light center grey-text text-darken-3"><b>Treatmen</b></h3><!--judul -->
    <div class="row">
      <div class="col s12 m4">
  <div class="card">
  <div class="card-image waves-effect waves-block waves-light">
    <img class="activator" src="<?= base_url('assets/assets_admin/gambar/t6.jpg')?>">
  </div>
  <div class="card-content">
    <span class="card-title activator grey-text text-darken-4"><b>Treatmen Daisy</b><i class="material-icons right"></i></span>
    <p><a href="#"></a></p>
  </div>
       </div>
      </div>

      <div class="col s12 m4">
        <div class="card">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="<?= base_url('assets/assets_admin/gambar/t9.jpg')?>">
          </div>
           <div class="card-content">
             <span class="card-title activator grey-text text-darken-4"><b>Treatmen 1</b><i class="material-icons right"></i></span>
             <p><a href="#"></a></p>
            </div>
          </div>
        </div>
        
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="<?= base_url('assets/assets_admin/gambar/t7.jpg')?>">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4"><b>Treatmen 2</b><i class="material-icons right"></i></span>
              <p><a href="#"></a></p>
             </div>
            </div>
          </div>

          <div class="col s12 m4">
            <div class="card">
               <div class="card-image waves-effect waves-block waves-light">
                 <img class="activator" src="<?= base_url('assets/assets_admin/gambar/t8.jpg')?>">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4"><b>Treatmen 3</b><i class="material-icons right"></i></span>
                  <p><a href="#"></a></p>
                </div>
              </div>
            </div>

            <div class="col s12 m4">
              <div class="card">
                 <div class="card-image waves-effect waves-block waves-light">
                   <img class="activator" src="<?= base_url('assets/assets_admin/gambar/t67.jpg')?>">
                  </div>
                  <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4"><b>Treatmen 4</b><i class="material-icons right"></i></span>
                    <p><a href="#"></a></p>
                  </div>
                </div>
              </div>

              <div class="col s12 m4">
                <div class="card">
                   <div class="card-image waves-effect waves-block waves-light">
                     <img class="activator" src="<?= base_url('assets/assets_admin/gambar/t1.jpg')?>">
                    </div>
                    <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4"><b>Treatmen 5</b><i class="material-icons right"></i></span>
                      <p><a href="#"></a></p>
                    </div>
                  </div>
                </div>
    </div>
  </div>
</section>


      <!-- produk -->
      <section id="services" class="services blue lighten-4 text-lighten-3">
        <div class="container">
          <div class="row">
            <h3 class="light center grey-text text-darken-3"><b>Produk</b></h3>
              <section id="portfolio" class="portfolio ight-blue lighten-5">
                <div class="container">
                    <div class="row">

                      <div class="col s12 m4">
                        <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                          <img class="activator" src="<?= base_url('assets/assets_admin/gambar/1.jpg')?>">
                         </div>
                        <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4"><b>Taro</b><i class="material-icons right"></i></span>
                        <p><a href="#"></a></p>
                         </div>
                        </div>
                      </div>

                      <div class="col s12 m4">
                        <div class="card">
                          <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="<?= base_url('assets/assets_admin/gambar/2.jpg')?>">
                          </div>
                          <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4"><b>blue algae</b><i class="material-icons right"></i></span>
                            <p><a href="#"></a></p>
                            </div>
                          </div>
                      </div>
                        
                      <div class="col s12 m4">
                        <div class="card">
                          <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="<?= base_url('assets/assets_admin/gambar/3.jpg')?>">
                            </div>
                            <div class="card-content">
                              <span class="card-title activator grey-text text-darken-4"><b>Mlik</b><i class="material-icons right"></i></span>
                              <p><a href="#"></a></p>
                            </div>                              
                          </div>
                      </div>

                      <div class="col s12 m4">
                        <div class="card">
                          <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="<?= base_url('assets/assets_admin/gambar/4.jpg')?>">
                          </div>
                          <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4"><b>Chocolate</b><i class="material-icons right"></i></span>
                            <p><a href="#"></a></p>
                         </div>
                       </div>                    
                      </div>

                        <div class="col s12 m4">
                          <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                              <img class="activator" src="<?= base_url('assets/assets_admin/gambar/5.jpg')?>">
                            </div>
                            <div class="card-content">
                               <span class="card-title activator grey-text text-darken-4"><b>Green Tea</b><i class="material-icons right"></i></span>
                                <p><a href="#"></a></p>
                            </div>
                         </div>         
                       </div>

                         <div class="col s12 m4">
                           <div class="card">
                              <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="<?= base_url('assets/assets_admin/gambar/7.jpg')?>">
                              </div>
                               <div class="card-content">
                                  <span class="card-title activator grey-text text-darken-4"><b>Strawberry</b><i class="material-icons right"></i></span>
                                  <p><a href="#"></a></p>
                                </div>                                
                              </div>
                            </div>
                         </div>
                    </div>
                </section>
            </div>
         </div>
       </section>

      <!-- contact us -->

      <section id="contact" class="contact blue lighten-4">
        <div class="container">
          <h3 class="light grey-text  text-darken-3 center">Contact Us</h3>
          <div class="row">
            <div class="col m5 s12">
              <div class="card-panel light-blue lighten-2 center white-text ">
                <i class="material-icons">email</i>
                <h5>Contact</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque eligendi corporis commodi vero esse. Dignissimos dicta iure quo, sit eos nemo a dolore excepturi, officia porro optio suscipit voluptatem debitis?</p>
              </div>
                <ul class="collection with-header">
                  <li class="collection-header"><h4>Social Media Office</h4></li>
                  <li class="collection-item">Daisy Organic Detox & Brighten your skin! </li>
                  <li class="collection-item">Jakarta Selatan</li>
                  <li class="collection-item">Indonesia</li>

                </ul>
            </div>

            <div class="col m7 s12">
              <form action="">
                <div class="card-panel">
                  <h5>Please fill out this from</h5>
                  <div class="input-field">
                    <input type="text" name="name" id="name">
                    <label for="name">Name</label>
                  </div>
                  <div class="input-field">
                      <input type="email" name="email" id="email">
                      <label for="email">Email</label>
                    </div>
                    <div class="input-field">
                        <input type="text" name="phone" id="phone">
                        <label for="phone">Phone Number</label>
                      </div>
                      <div class="input-field">
                        <textarea name="message" id="message" class="materialize-textarea"></textarea>
                          <label for="message">Message</label>
                      </div>   
                      <button type="submit" class="btn pink lighten-4">Send</button>  
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

      <!-- footer -->

    <footer class="light-blue lighten-2 darken-text center">
      <h6>Web Proggaming. Copyright 2020.</h6>
    </footer>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <script>
        const sideNav = document.querySelectorAll('.sidenav');
          M.Sidenav.init(sideNav);
        
        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider, {
          indicators: false,
          height:600,
          transition:600,
          interval:3000
        });

        const parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax);

        const materialbox = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(materialbox);
      
      </script>




      <!-- Compiled and minified CSS -->

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
  </html>
        
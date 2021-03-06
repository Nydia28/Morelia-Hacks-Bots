  <!-- Preloader -->
  <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">

  <div id="preloader">
    <div class="loader">
      <svg class="circle-loader" height="50" width="50">
        <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="6" stroke-miterlimit="10" />
      </svg>
    </div>
  </div><!--preloader end-->

  <!-- Main Container -->
  <main id="app" class="main-section">
    <!-- header navigation start -->
    <header id="navigation" class="root-sec white nav">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="nav-inner">
              <nav class="primary-nav">
                <div class="clearfix nav-wrapper">
                  <a href="#home" class="left brand-logo menu-smooth-scroll" data-section="#home"><img src="<?php echo base_url();?>assets/images/logo.png" alt="">
                  </a>
                  <a href="<?php echo base_url();?>" data-activates="mobile-demo" class="button-collapse"><i class="fa fa-bars" aria-hidden="true"></i></a>
                  <ul class="inline-menu side-nav" id="mobile-demo">

                    <!-- Mini Profile // only visible in Tab and Mobile -->
                    <li class="mobile-profile">
                     <div class="profile-inner">
                      <div class="pp-container">
                        <img src="<?php echo base_url();?>assets/images/logo.png" alt="">
                      </div>
                      <h3>Monitor Ciudadano</h3>
                    </div>
                  </li><!-- mini profile end-->

                  <li><a href="<?php echo base_url();?>inicio/publicos"><i class="fa fa-user fa-fw"></i>Servidores Públicos</a>
                  </li>
                  <li><a href="<?php echo base_url();?>inicio/candidatos"><i class="fa fa-file-text fa-fw"></i>Candidatos</a>
                  </li>
                  <li><a href="blog-with-sidebar.html">A cerca de nosotros</a>
                  </li>
                  <li><a href="<?php echo base_url();?>inicio/nosotros">A cerca de nosotros</a>
                  </li>
                  <li><a href="#!" onclick="iniciar_sesion()">Iniciar Sesión</a>
                  </li>
                </ul>

              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- .container end -->
  </header>
  <!-- #header  navigation end -->

  <div id="login" class="modal plr-10">
    <div class="modal-content">
      <div class="row">
        <div class="col l12 center">
          <h5 style="font-size: 24px; color: #000;"><strong style="font-weight: bold; font-size: 32px;">Monitor Ciudadano</strong><br>Iniciar sesión:</h5>
          <div class="divider"></div>     
        </div>
        <div class="col l12">
          
            <div class="group">
              <center><div class="fb-login-button" data-max-rows="1" data-size="large" data-width="205px" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"></div>
                <br><br>
                <div class="g-signin2" data-onsuccess="onSignIn"></div>
                </center>
            </div>

        </div>
      </div>
    </div>
  </div>

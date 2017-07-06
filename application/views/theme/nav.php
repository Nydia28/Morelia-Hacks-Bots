


  <!-- start option panel -->
  <div id="switch">
      <div class="content-switcher">
          <p class="brand-text">Color Options:</p>
          <ul class="header">
              <li><a href="#" onclick="setActiveStyleSheet('color1'); return false;" class="button color switch" style="background-color:#00bcd4"></a></li>
              <li><a href="#" onclick="setActiveStyleSheet('color2'); return false;" class="button color switch" style="background-color:#ff4081"></a></li>
              <li><a href="#" onclick="setActiveStyleSheet('color3'); return false;" class="button color switch" style="background-color:#C043D5"></a></li>
              <li><a href="#" onclick="setActiveStyleSheet('color4'); return false;" class="button color switch" style="background-color:#73D077"></a></li>
              <li><a href="#" onclick="setActiveStyleSheet('color5'); return false;" class="button color switch" style="background-color:#FE7448"></a></li>
              <li><a href="#" onclick="setActiveStyleSheet('color6'); return false;" class="button color switch" style="background-color:#1ABBAC"></a></li>
              <li><a href="#" onclick="setActiveStyleSheet('color7'); return false;" class="button color switch" style="background-color:#EAB82E"></a></li>
              <li><a href="#" onclick="setActiveStyleSheet('color8'); return false;" class="button color switch" style="background-color:#799CAC"></a></li>
          </ul>
          <p class="brand-text">Menu Options:</p>
          <div class="menu-select" title="The menu will display in all devices">
              <input type="radio" id="menu1" name="intelligent-menu">
              <label for="menu1">Fixed</label>
          </div>
          <div class="menu-select" title="The menu will display or hide in all devices depending on scroll">
              <input type="radio" id="menu2" name="intelligent-menu" checked="checked">
              <label for="menu2">Intelligent ( Auto Hide )</label>
          </div>
          <div class="menu-select" title="Fixed menu will apply in non-mobile devices and Intelligent menu will apply in mobile devices">
              <input type="radio" id="menu3" name="intelligent-menu">
              <label for="menu3">Mobile Intelligent</label>
          </div>
          <div id="hide">
              <i class="fa fa-times"></i>
          </div>
      </div>
  </div>
  <div id="show" class="btn-floating waves-effect waves-light btn-large brand-text">
      <i class="fa fa-cog"></i>
  </div>
  <!-- end option panel -->

  <!-- Preloader --> 
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
                  <a href="#home" class="left brand-logo menu-smooth-scroll" data-section="#home"><img src="assets/images/logo.png" alt="">
                  </a>
                  <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                  <ul class="right static-menu">
                    <li class="search-form-li">
                      <a id="initSearchIcon" class=""><i class="mdi-action-search"></i> </a>
                      <div class="search-form-wrap hide">
                        <form action="#" class="">
                          <input type="search" class="search">
                          <button type="submit"><i class="mdi-action-search"></i>
                          </button>
                        </form>
                      </div>
                    </li>
                    <li>
                      <a class="dropdown-button blog-submenu-init" href="#!" data-activates="dropdown1">
                        <i class="mdi-navigation-more-vert right"></i>
                      </a>
                    </li>
                  </ul>
                  <ul class="inline-menu side-nav" id="mobile-demo">

                  <!-- Mini Profile // only visible in Tab and Mobile -->
                    <li class="mobile-profile">
                     <div class="profile-inner">
                        <div class="pp-container">
                            <img src="assets/images/person.jpg" alt="">
                        </div>
                        <h3>John Doe</h3>
                        <h5>Creative UI/UX Expert</h5>
                      </div>
                    </li><!-- mini profile end-->


                    <li><a href="#about" data-section="#about" class="menu-smooth-scroll"><i class="fa fa-user fa-fw"></i>About Me</a>
                    </li>
                    <li><a href="#resume" data-section="#resume" class="menu-smooth-scroll"><i class="fa fa-file-text fa-fw"></i>Resume</a>
                    </li>
                    <li><a href="#portfolio" data-section="#portfolio" class="menu-smooth-scroll"><i class="fa fa-briefcase fa-fw"></i>Portfolio</a>
                    </li>
                    <li><a href="#team" data-section="#team" class="menu-smooth-scroll"><i class="fa fa-users fa-fw"></i>Team</a>
                    </li>
                    <li><a href="#testimonial" data-section="#testimonial" class="menu-smooth-scroll"><i class="fa fa-comments fa-fw"></i>Testimonial</a>
                    </li>
                    <li><a href="#blog" data-section="#blog" class="menu-smooth-scroll"><i class="fa fa-pencil fa-fw"></i>Blog</a>
                    </li>
                    <li><a href="#contact" data-section="#contact" class="menu-smooth-scroll"><i class="fa fa-paper-plane fa-fw"></i>Contact</a>
                    </li>
                  </ul>
                  <ul id="dropdown1" class="inline-menu submenu-ul dropdown-content">
                    <li>Home</li>
                    <li><a href="blog.html">All Blog</a>
                    </li>
                    <li><a href="blog-with-sidebar.html">Blog with Sidebar</a>
                    </li>
                    <li><a href="single.html">Single Blog</a>
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
<!-- Home Section start -->
<section id="home" class="scroll-section root-sec grey lighten-5 home-wrap">
  <div class="sec-overlay">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="home-inner">
            <div class="center-align home-content">
              <h1 class="home-title">Monitor <span>Ciudadano</span></h1>
              <h2 class="home-subtitle">Conoce a los que te representan</h2>
              <div class="col-sm-3 col-md-offset-2">
                <a href="<?php echo base_url();?>inicio/publicos" class="col-sm-12 btn-large brand-bg white-text regular-text"><i class="fa fa-hand-o-down" aria-hidden="true"></i> Servidores Públicos</a>
              </div></a>
              <div class="col-sm-3 col-md-offset-2">
<<<<<<< HEAD
                <a href="#contact" class="col-sm-12 hire-me-btn btn waves-effect waves-light btn-large brand-bg white-text regular-text">Candidatos1 <i class="fa fa-hand-o-down" aria-hidden="true"></i></a>
=======
                <a href="<?php echo base_url();?>inicio/candidatos" class="col-sm-12 btn-large brand-bg white-text regular-text">Candidatos <i class="fa fa-hand-o-down" aria-hidden="true"></i></a>
>>>>>>> a9e50e9f60a89a7c6e4be921f27e5a3135aa9421
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- .container end -->
    <div class="section-call-to-area">
      <div class="container">
        <div class="row">
          <a href="#about" class="btn-floating btn-large button-middle call-to-about section-call-to-btn animated btn-up btn-hidden" data-section="#about">
            <i class="mdi-navigation-expand-more"></i>
          </a>
        </div>
      </div>
      <!-- .container end -->
    </div>
  </div>
</section>
<!-- #home Section end -->

<!-- About Section start -->
<section id="about" class="scroll-section root-sec padd-tb-60 grey lighten-5 about-wrap">
  <div class="container">
    <div class="row">
      <div class="clearfix about-inner">

        <div class="row">
          <div class="col s12">
            <ul class="tabs">
              <li class="tab col s4"><a class="active" href="#infopersonal">Información personal</a></li>
              <li class="tab col s4"><a href="#facebook">Facebook</a></li>
              <li class="tab col s4"><a href="#twitter">Twitter</a></li>
            </ul>
          </div>

          <div id="infopersonal" class="col s12" style="display: block;padding-top: 4%;">
            <!-- about me description -->
            <div class="col-sm-6 col-md-4">
              <div class="person-img wow fadeIn">
                <img class="z-depth-1" src="assets/images/alfonso.jpg" alt="">
              </div>
            </div>
            <div class="col-sm-12 col-md-4">
              <div class="person-about">
                <h3 class="about-subtitle">Alfonso Martínez</h3>
                <p>Presidente Municipal de Morelia</p>
                <p>Descripciòn del candidato.... Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec ipsum massa. Maecenas consectetur vestibulum felis, eu placerat elit luctus in. Ut turpis mi, bibendum ac venenatis in, sollicitudin ultricies odio. Nam vel erat felis. Fusce sapien risus, blandit ut pulvinar sit amet, porttitor vel nunc. Mauris purus mi, porta sit amet pharetra nec, bibendum tincidunt justo.</p>
              </div>
            </div>
            <!-- about me image -->
            <div class="col-sm-6 col-md-4">
              <div class="person-info">
                <h3 class="about-subtitle">Información Personal</h3>
                <h5><span>Nombre:</span> Alfonso</h5>
                <h5><span>Telefono:</span> 54316254316</h5>
                <h5><span>Dirección:</span> Morelia</h5>
                <h5><span>Correo:</span> email@alfonso.com</h5>
                <h5><span>Seguidores:</span> 10,000</h5>
                <h5><span>Siguiendo:</span> 500</h5>
              </div>
              <!-- about me info -->
            </div>
          </div>

          <div id="facebook" class="col s12" style="display: block;padding-top: 4%;">
            <div class="col m6 s12">
              <canvas id="chart_forma_pago" width="350" height="200"></canvas>
            </div>
            <div class="col m6 s12">
              <canvas id="chart_seccion_parcial" width="350" height="200"></canvas>
            </div>
          </div>

          <div id="twitter" class="col s12" style="display: block;padding-top: 4%;">
            <div class="col m6 s12 offset-m3" >
              <canvas id="chart_seccion_total" width="350" height="200"></canvas>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- .container end -->
</section>
<!-- #about Section end -->

<!-- Resume Section start -->
<section id="resume" class="scroll-section ">
  <section id="skill" class="root-sec white skill-wrap">
    <div class="sec-overlay">
      <div class="container">
        <div class="row">
          <div class="clearfix skill-inner">
            <div class="col-sm-12 col-md-3">
              <div class="skill-left">
                <h5 class="title">Los ultimos 30 días</h5>
                <p class="regular-text">A continuación presentamos la interacción en las redes sociales de los seguidores mas comunes del funcionario</p>
              </div>
            </div>
            <div class="col-sm-12 col-md-8 col-md-offset-1" style="margin-top: 10%">
              <canvas id="chart_seccion_total2" width="200" height="100"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- .container end -->
  </section>

  <section id="experience" class="root-sec padd-tb-120 brand-bg experience-wrap">
    <div class="container">
      <div class="row">
        <div class="experience-inner">
          <div class="col-sm-12 col-md-10 card-box-wrap">
            <div class="row">
              <div class="clearfix section-head experience-text">
                <div class="col-sm-12">
                  <h2 class="title">Top 10 Followers</h2>
                  <p class="regular-text">Descubre quienes son los usuarios que más impactan en twitter.</p>
                </div>
              </div>
              <div class="col-lg-12">

                <div class=" tarjetas col-sm-12 z-depth-4">
                  <div class="tarjetitas col-sm-2">
                    <img src="assets/images/person.jpg" alt="" class="circle z-depth-3" style="max-height: 94px;">
                  </div>
                  <div class="tarjetitas col-sm-10">
                    <a class="title-collection" href="#">1.- @juan_perez</a>
                    <p class="text-collection"># de Reteewts<br>
                     # de Me gusta
                   </p>
                 </div>
               </div>

               <div class=" tarjetas col-sm-12 z-depth-4">
                <div class="tarjetitas col-sm-2">
                  <img src="assets/images/person.jpg" alt="" class="circle z-depth-3" style="max-height: 94px;">
                </div>
                <div class="tarjetitas col-sm-10">
                  <a class="title-collection" href="#">2.- @pedro_suarez</a>
                  <p class="text-collection "># de Reteewts<br>
                   # de Me gusta
                 </p>
               </div>
             </div>

             <div class=" tarjetas col-sm-12 z-depth-4">
              <div class="tarjetitas col-sm-2">
                <img src="assets/images/person.jpg" alt="" class="circle z-depth-3" style="max-height: 94px;">
              </div>
              <div class="tarjetitas col-sm-10">
                <a class="title-collection" href="#">3.- @alberto_lopez</a>
                <p class="text-collection"># de Reteewts<br>
                 # de Me gusta
               </p>
             </div>
           </div>

         </div>
       </div>
     </div>
   </div>
 </div>
</div>
</section>

<section id="education" class="root-sec grey lighten-5 padd-tb-120 education-wrap">
  <div class="container">
    <div class="row">
      <div class="education-inner">
        <div class="col-sm-12 col-md-10 card-box-wrap">
          <div class="row">
            <div class="clearfix section-head education-text">
              <div class="col-sm-12">
                <h2 class="title">Top 10 Fans</h2>
                <p class="regular-text">Descubre quienes son los usuarios que más impactan en facebook.</p>
              </div>
            </div>
            <div class="col-lg-12">
                <div class=" tarjetas col-sm-12 z-depth-4">
                  <div class="tarjetitas col-sm-2">
                    <img src="assets/images/person.jpg" alt="" class="circle z-depth-3" style="max-height: 94px;">
                  </div>
                  <div class="tarjetitas col-sm-10">
                    <a class="title-collection" href="#">1.- @juan_perez</a>
                    <p class="text-collection"># de Reacciones<br>
                     # de Comentarios
                   </p>
                 </div>
               </div>

               <div class=" tarjetas col-sm-12 z-depth-4">
                <div class="tarjetitas col-sm-2">
                  <img src="assets/images/person.jpg" alt="" class="circle z-depth-3" style="max-height: 94px;">
                </div>
                <div class="tarjetitas col-sm-10">
                  <a class="title-collection" href="#">2.- @pedro_suarez</a>
                  <p class="text-collection "># de Reacciones<br>
                   # de Comentarios
                 </p>
               </div>
             </div>

             <div class=" tarjetas col-sm-12 z-depth-4">
              <div class="tarjetitas col-sm-2">
                <img src="assets/images/person.jpg" alt="" class="circle z-depth-3" style="max-height: 94px;">
              </div>
              <div class="tarjetitas col-sm-10">
                <a class="title-collection" href="#">3.- @alberto_lopez</a>
                <p class="text-collection"># de Reacciones<br>
                 # de Comentarios
               </p>
             </div>
           </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<!-- #resume Section end -->

<!-- Portfolio Section start -->
<section id="portfolio" class="scroll-section root-sec white portfolio-wrap">
  <div class="padd-tb-120 brand-bg portfolio-top">
    <div class="portfolio-inner">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="title">PORTFOLIO</h2>
            <ul class="inline-menu clearfix portfolio-category" id="portfolio-msnry-sort">
              <li class="active"><a href="#" data-target="*">All</a>
              </li>
              <li><a href="#" data-target=".category-1">Art</a>
              </li>
              <li><a href="#" data-target=".category-2">Accessories</a>
              </li>
              <li><a href="#" data-target=".category-3">Design</a>
              </li>
              <li><a href="#" data-target=".category-4">Fashion</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- .container end -->
  </div>
  <div id="portfolioModal" class="modal white">
    <div class="model-img"></div>
    <div class="modal-content">
      <h2 class="title">Lorem ipsum dolor sit fugit dolore.</h2>
      <p class="m-content">A portfolio is a collection of documents and writing that you assemble in order to demonstrate that you have the appropriate prior.</p>
    </div>

    <div class="modal-footer">
      <a href="#" target="_blank" class="waves-effect btn-flat brand-text modal-action">Live Demo</a>
      <a href="#" class="waves-effect btn-flat brand-text modal-action modal-close">cancel</a>
    </div>
  </div>

  <div class="portfolio-bottom">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <ul class="clearfix protfolio-item" id="protfolio-msnry">

            <!-- Single Portfolio-->
            <li class="single-port-item category-1 category-3">
              <a href="#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="http://placehold.it/650x350" data-title="Your awesome portfolio title" data-content="A portfolio is a collection of documents and writing that you assemble in order to demonstrate that you have the appropriate prior." data-demo-link="#"> <!-- Portfolio pop-up content-->
                <div class="protfolio-image">
                  <img src="images/portfolio/pf1.jpg" alt="portfolio"> <!-- portfolio thumbnail-->
                  <div class="protfolio-content waves-effect waves-block waves-light">
                    <div class="protfolio-content__inner">
                      <h2 class="p-title">item name</h2>
                    </div>
                  </div>
                  <div class="p-overlay"></div>
                </div>
              </a>
            </li>
            <!--/ single portfolio -->

            <!-- Single Portfolio-->
            <li class="single-port-item category-2 category-1">
              <a href="#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="http://placehold.it/650x350" data-title="Your awesome portfolio title" data-content="A portfolio is a collection of documents and writing that you assemble in order to demonstrate that you have the appropriate prior." data-demo-link="#">
                <div class="protfolio-image">
                  <img src="images/portfolio/pf2.jpg" alt="portfolio">
                  <div class="protfolio-content waves-effect waves-block waves-light">
                    <div class="protfolio-content__inner">
                      <h2 class="p-title">item name</h2>
                    </div>
                  </div>
                  <div class="p-overlay"></div>
                </div>
              </a>
            </li>
            <!--/ single portfolio -->

            <!-- Single Portfolio-->
            <li class="single-port-item category-1 category-2">
              <a href="#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="http://placehold.it/650x350" data-title="Your awesome portfolio title" data-content="A portfolio is a collection of documents and writing that you assemble in order to demonstrate that you have the appropriate prior." data-demo-link="#">
                <div class="protfolio-image">
                  <img src="images/portfolio/pf3.jpg" alt="portfolio">
                  <div class="protfolio-content waves-effect waves-block waves-light">
                    <div class="protfolio-content__inner">
                      <h2 class="p-title">item name</h2>
                    </div>
                  </div>
                  <div class="p-overlay"></div>
                </div>
              </a>
            </li>
            <!--/ single portfolio -->

            <!-- Single Portfolio-->
            <li class="single-port-item category-3">
              <a href="#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="http://placehold.it/650x350" data-title="Your awesome portfolio title" data-content="A portfolio is a collection of documents and writing that you assemble in order to demonstrate that you have the appropriate prior." data-demo-link="#">
                <div class="protfolio-image">
                  <img src="images/portfolio/pf4.jpg" alt="portfolio">
                  <div class="protfolio-content waves-effect waves-block waves-light">
                    <div class="protfolio-content__inner">
                      <h2 class="p-title">item name</h2>
                    </div>
                  </div>
                  <div class="p-overlay"></div>
                </div>
              </a>
            </li>
            <!--/ single portfolio -->

            <!-- Single Portfolio-->
            <li class="single-port-item category-1 category-3 category-4">
              <a href="#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="http://placehold.it/650x350" data-title="Your awesome portfolio title" data-content="A portfolio is a collection of documents and writing that you assemble in order to demonstrate that you have the appropriate prior." data-demo-link="#">
                <div class="protfolio-image">
                  <img src="images/portfolio/pf5.jpg" alt="portfolio">
                  <div class="protfolio-content waves-effect waves-block waves-light">
                    <div class="protfolio-content__inner">
                      <h2 class="p-title">item name</h2>
                    </div>
                  </div>
                  <div class="p-overlay"></div>
                </div>
              </a>
            </li>
            <!--/ single portfolio -->

            <!-- Single Portfolio-->
            <li class="single-port-item category-2 category-4">
              <a href="#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="http://placehold.it/650x350" data-title="Your awesome portfolio title" data-content="A portfolio is a collection of documents and writing that you assemble in order to demonstrate that you have the appropriate prior." data-demo-link="#">
                <div class="protfolio-image">
                  <img src="images/portfolio/pf6.jpg" alt="portfolio">
                  <div class="protfolio-content waves-effect waves-block waves-light">
                    <div class="protfolio-content__inner">
                      <h2 class="p-title">item name</h2>
                    </div>
                  </div>
                  <div class="p-overlay"></div>
                </div>
              </a>
            </li>
            <!--/ single portfolio -->

          </ul>
          <!-- portfolio load more button-->
          <a id="portfolio-item-loader" href="#" class="btn-floating btn-large waves-effect waves-light brand-bg"><i class="mdi-content-add"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- #portfolio Section end -->

<!-- Team Section end -->
<section id="team" class="scroll-section root-sec brand-bg padd-tb-120 team-wrap">
  <div class="container">
    <div class="row">
      <div class="clearfix team-inner">
        <div class="col-sm-12 col-md-10 card-box-wrap">
          <div class="row">
            <div class="clearfix section-head team-text">
              <div class="col-sm-12">
                <h2 class="title">our team</h2>
                <p class="regular-text">Our Team combines a unique combination of creativity, experience, knowledge but most of all a shared 'can do' attitude to help clients get the very best support, advice and project management to achieve business goals.</p>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="overflow-hidden">
                <div class="row">
                  <div id="teamSlider" class="clearfix card-element-wrapper">
                    <div class="col-sm-4 single-card-box wow fadeInUpSmall" data-wow-duration=".7s">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                          <div class="card-img-wrap">
                            <img class="activator" src="images/t1.png" alt="">
                          </div>
                        </div>
                        <div class="card-content">
                          <span class="card-title activator brand-text">Jonh Doe<i class="mdi-navigation-more-vert right"></i></span>
                          <p>UX UI Designer</p>
                        </div>
                        <div class="card-reveal">
                          <div class="rev-title-wrap">
                            <span class="card-title activator brand-text">Jonh Doe<i class="mdi-navigation-close right"></i></span>
                            <p>UX UI Designer</p>
                          </div>
                          <p class="rev-content">
                            Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.
                          </p>
                        </div>
                      </div>
                    </div> <!-- single team member -->
                    <div class="col-sm-4 single-card-box wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration=".7s">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                          <div class="card-img-wrap">
                            <img class="activator" src="images/t2.png" alt="">
                          </div>
                        </div>
                        <div class="card-content">
                          <span class="card-title activator brand-text">Letizia Toye<i class="mdi-navigation-more-vert right"></i></span>
                          <p>Front End Developer</p>
                        </div>
                        <div class="card-reveal">
                          <div class="rev-title-wrap">
                            <span class="card-title activator brand-text">Letizia Toye<i class="mdi-navigation-close right"></i></span>
                            <p>Front End Developer</p>
                          </div>
                          <p class="rev-content">
                            Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.
                          </p>
                        </div>
                      </div>
                    </div> <!-- single team member -->
                    <div class="col-sm-4 single-card-box wow fadeInUpSmall" data-wow-delay=".4s" data-wow-duration=".7s">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                          <div class="card-img-wrap">
                            <img class="activator" src="images/t3.png" alt="">
                          </div>
                        </div>
                        <div class="card-content">
                          <span class="card-title activator brand-text">Letizia Toye<i class="mdi-navigation-more-vert right"></i></span>
                          <p>Front End Developer</p>
                        </div>
                        <div class="card-reveal">
                          <div class="rev-title-wrap">
                            <span class="card-title activator brand-text">Letizia Toye<i class="mdi-navigation-close right"></i></span>
                            <p>Front End Developer</p>
                          </div>
                          <p class="rev-content">
                            Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.
                          </p>
                        </div>
                      </div>
                    </div> <!-- single team member -->
                    <div class="col-sm-4 single-card-box">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                          <div class="card-img-wrap">
                            <img class="activator" src="images/t4.png" alt="">
                          </div>
                        </div>
                        <div class="card-content">
                          <span class="card-title activator brand-text">Letizia Toye<i class="mdi-navigation-more-vert right"></i></span>
                          <p>Front End Developer</p>
                        </div>
                        <div class="card-reveal">
                          <div class="rev-title-wrap">
                            <span class="card-title activator brand-text">Letizia Toye<i class="mdi-navigation-close right"></i></span>
                            <p>Front End Developer</p>
                          </div>
                          <p class="rev-content">
                            Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.
                          </p>
                        </div>
                      </div>
                    </div> <!-- single team member -->
                    <div class="col-sm-4 single-card-box">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                          <div class="card-img-wrap">
                            <img class="activator" src="images/t5.png" alt="">
                          </div>
                        </div>
                        <div class="card-content">
                          <span class="card-title activator brand-text">Tandi Battle<i class="mdi-navigation-more-vert right"></i></span>
                          <p>Team Manager</p>
                        </div>
                        <div class="card-reveal">
                          <div class="rev-title-wrap">
                            <span class="card-title activator brand-text">Tandi Battle<i class="mdi-navigation-close right"></i></span>
                            <p>Team Manager</p>
                          </div>
                          <p class="rev-content">
                            Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.
                          </p>
                        </div>
                      </div>
                    </div> <!-- single team member -->
                    <div class="col-sm-4 single-card-box">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                          <div class="card-img-wrap">
                            <img class="activator" src="images/t6.png" alt="">
                          </div>
                        </div>
                        <div class="card-content">
                          <span class="card-title activator brand-text">Tandi Battle<i class="mdi-navigation-more-vert right"></i></span>
                          <p>Team Manager</p>
                        </div>
                        <div class="card-reveal">
                          <div class="rev-title-wrap">
                            <span class="card-title activator brand-text">Tandi Battle<i class="mdi-navigation-close right"></i></span>
                            <p>Team Manager</p>
                          </div>
                          <p class="rev-content">
                            Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.
                          </p>
                        </div>
                      </div>
                    </div> <!-- single team member -->
                  </div> <!-- #teamSlider end -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="btn-wrapp tmu-ctrl">
          <a class="btn-floating waves-effect waves-light btn-large white go go-left"><i class="mdi-navigation-chevron-left brand-text"></i></a>
          <a class="btn-floating waves-effect waves-light btn-large white go go-right"><i class="mdi-navigation-chevron-right brand-text"></i></a>
        </div>
      </div>
    </div>

  </div> <!-- .container -->
</section>
<!-- #team Section end -->

<!-- Funfacts Section end -->
<section id="funfacts" class="root-sec grey lighten-5 funfact-wrap">
  <div class="sec-inner padd-tb-120">
    <div class="container">
      <div class="row">
        <div class="funfact-inner">
          <div class="col-sm-4 funfact-box">
            <div class="center-align card-panel white">
              <div class="feature-box-outer">
                <div class="funfact-box-inner">
                  <div class="clearfix ">
                    <i class="mdi-editor-insert-emoticon"></i>
                    <span class="num countNumb">150</span>
                  </div>
                  <div class="context">Happy clients</div>
                </div>
              </div>
            </div>
          </div> <!-- ./single fun fact box -->
          <div class="col-sm-4 funfact-box">
            <div class="center-align card-panel white">
              <div class="feature-box-outer">
                <div class="funfact-box-inner">
                  <div class="clearfix ">
                    <i class="mdi-action-wallet-travel"></i>
                    <span class="num countNumb">230</span>
                  </div>
                  <div class="context">Project Completed</div>
                </div>
              </div>
            </div>
          </div> <!-- ./single fun fact box -->
          <div class="col-sm-4 funfact-box">
            <div class="center-align card-panel white">
              <div class="feature-box-outer">
                <div class="funfact-box-inner">
                  <div class="clearfix ">
                    <i class="mdi-action-wallet-giftcard"></i>
                    <span class="num countNumb">79</span>
                  </div>
                  <div class="context">Award Won</div>
                </div>
              </div>
            </div>
          </div> <!-- ./single fun fact box -->
        </div>
      </div>

    </div>  <!-- .container end -->
  </div>
</section>
<!-- #funfacts Section end -->

<!-- Testimonial Section end -->
<section id="testimonial" class="scroll-section root-sec brand-bg padd-tb-120 testimonial-wrap">
  <div class="container">
    <div class="row">
      <div class="testimonial-inner">
        <div class="col-sm-12 col-md-10 card-box-wrap">
          <div class="row">
            <div class="clearfix section-head testimonial-text">
              <div class="col-sm-12">
                <h2 class="title">testimonial</h2>
                <p class="regular-text">Aliquam lobortis. Maecenas vestibulum mollis diam. Pellentesque auctor neque nec urna. Nulla sit amet est. Aenean posuere tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus.</p>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="overflow-hidden">
                <div class="row">
                  <div id="testimonialSlider" class="clearfix card-element-wrapper">
                    <div class="col-sm-6 single-card-box wow fadeInUpSmall" data-wow-duration=".7s">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                          <div class="card-img-wrap">
                            <img class="activator" src="images/client5.png" alt="">
                            <p class="saying-about">Amazing theme, amazing code and especially amazing support! I Really love your work.</p>
                          </div>
                        </div>
                        <div class="card-content">
                          <span class="card-title activator brand-text">Jonh Smith -</span>
                          <a href="#">CEO, Apple Inc</a>
                        </div>
                      </div>
                    </div> <!-- ./single testimonial box -->
                    <div class="col-sm-6 single-card-box wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration=".7s">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                          <div class="card-img-wrap">
                            <img class="activator" src="images/client1.png" alt="">
                            <p class="saying-about">Amazing theme, amazing code and especially amazing support! I Really love your work.</p>
                          </div>
                        </div>
                        <div class="card-content">
                          <span class="card-title activator brand-text">Jonh Smith -</span>
                          <a href="#">CEO, Apple Inc</a>
                        </div>
                      </div>
                    </div> <!-- ./single testimonial box -->
                    <div class="col-sm-6 single-card-box">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                          <div class="card-img-wrap">
                            <img class="activator" src="images/client2.png" alt="">
                            <p class="saying-about">Amazing theme, amazing code and especially amazing support ! I Really love your work.</p>
                          </div>
                        </div>
                        <div class="card-content">
                          <span class="card-title activator brand-text">Jonh Smith -</span>
                          <a href="#">CEO, Apple Inc</a>
                        </div>
                      </div>
                    </div> <!-- ./single testimonial box -->
                    <div class="col-sm-6 single-card-box">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                          <div class="card-img-wrap">
                            <img class="activator" src="images/client3.png" alt="">
                            <p class="saying-about">Amazing theme, amazing code and especially amazing support ! I Really love your work.</p>
                          </div>
                        </div>
                        <div class="card-content">
                          <span class="card-title activator brand-text">Jonh Smith -</span>
                          <a href="#">CEO, Apple Inc</a>
                        </div>
                      </div>
                    </div> <!-- ./single testimonial box -->
                    <div class="col-sm-6 single-card-box">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                          <div class="card-img-wrap">
                            <img class="activator" src="images/client4.png" alt="">
                            <p class="saying-about">Amazing theme, amazing code and especially amazing support ! I Really love your work.</p>
                          </div>
                        </div>
                        <div class="card-content">
                          <span class="card-title activator brand-text">Jonh Smith -</span>
                          <a href="#">CEO, Apple Inc</a>
                        </div>
                      </div>
                    </div> <!-- ./single testimonial box -->
                  </div> <!-- #testimonialSlider end -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="btn-wrapp tmo-ctrl">
          <a class="btn-floating waves-effect waves-light btn-large white go go-left"><i class="mdi-navigation-chevron-left brand-text"></i></a>
          <a class="btn-floating waves-effect waves-light btn-large white go go-right"><i class="mdi-navigation-chevron-right brand-text"></i></a>
        </div>
      </div>
    </div>
  </div> <!-- ./container end -->
</section>
<!-- #testimonial Section end -->

<!-- Blog Section end -->
<section id="blog" class="scroll-section root-sec grey lighten-5 padd-tb-120 blog-wrap">
  <div class="container">
    <div class="row">
      <div class="blog-inner">
        <div class="col-sm-12 card-box-wrap">
          <div class="row">
            <div class="clearfix section-head blog-text">
              <div class="col-sm-10">
                <h2 class="title">Blog</h2>
                <p class="regular-text">A Web page that serves as a publicly accessible personal journal for an individual. Typically updated daily, blogs often reflect the personality of the author.</p>
              </div>
            </div>
            <div class="clearfix card-element-wrapper" id="blog-posts">
              <article class="col-sm-6 col-md-4 single-card-box single-post">
                <div class="card wow fadeInUpSmall" data-wow-duration=".7s">
                  <div class="card-image">
                    <div class="card-img-wrap">
                      <div class="blog-post-thumb waves-effect waves-block waves-light">
                        <a href="single.html"><img class="activator" src="images/blog1.jpg" alt="">
                        </a>
                      </div>
                      <div class="post-body">
                        <a href="single.html" class="post-title-link brand-text"><h2 class="post-title">Awesome Post Title</h2></a>
                        <p class="post-content">In consectetuer turpis ut velit. Sed lectus. Ut varius tincidunt libero. Vivamus euismod mauris. Vestibulum fringilla pede sit amet augue. Ut varius tincidunt libero. Pellentesque dapibus hendrerit tortor. </p>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix card-content">
                    <a href="#" class="left js-favorite" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">15</span></a>
                    <a href="single.html" class="brand-text right waves-effect">Read More</a>
                  </div>
                </div>
              </article> <!-- ./single blog post end -->
              <article class="col-sm-6 col-md-4  single-card-box single-post">
                <div class="card wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration=".7s">
                  <div class="card-image">
                    <div class="card-img-wrap">
                      <div class="blog-post-thumb waves-effect waves-block waves-light">
                        <a href="single.html"><img class="activator" src="images/blog2.jpg" alt="">
                        </a>
                      </div>
                      <div class="post-body">
                        <a href="single.html" class="post-title-link brand-text"><h2 class="post-title">An Image Post</h2></a>
                        <p class="post-content">In consectetuer turpis ut velit. Sed lectus. Ut varius tincidunt libero. Vivamus euismod mauris. Vestibulum fringilla pede sit amet augue. Ut varius tincidunt libero. Pellentesque dapibus hendrerit tortor. </p>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix card-content">
                    <a href="#" class="left js-favorite active" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">23</span></a>
                    <a href="single.html" class="brand-text right waves-effect">Read More</a>
                  </div>
                </div>
              </article> <!-- ./single blog post end -->
              <article class="col-sm-6 col-md-4 single-card-box single-post">
                <div class="card wow fadeInUpSmall" data-wow-delay=".4s" data-wow-duration=".7s">
                  <div class="card-image">
                    <div class="card-img-wrap">
                      <div class="blog-post-thumb waves-effect waves-block waves-light">
                        <a href="single.html"><img class="activator" src="images/blog3.jpg" alt="">
                        </a>
                      </div>
                      <div class="post-body">
                        <a href="single.html" class="post-title-link brand-text"><h2 class="post-title">Another Image Post</h2></a>
                        <p class="post-content">In consectetuer turpis ut velit. Sed lectus. Ut varius tincidunt libero. Vivamus euismod mauris. Vestibulum fringilla pede sit amet augue. Ut varius tincidunt libero. Pellentesque dapibus hendrerit tortor. </p>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix card-content">
                    <a href="#" class="left js-favorite" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">17</span></a>
                    <a href="single.html" class="brand-text right waves-effect">Read More</a>
                  </div>
                </div>
              </article> <!-- ./single blog post end -->
            </div>
            <div class="clearfix left-align">
              <div class="col-sm-12">
                <a href="blog.html" class="waves-effect waves-light btn-large load-more">See More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- ./container -->
</section>
<!-- #blog Section end -->

<!-- Contact Section end -->
<section id="contact" class="scroll-section root-sec brand-bg padd-tb-120 contact-wrap">
  <div class="container">
    <div class="row">
      <div class="contact-inner">
        <div class="col-sm-12 card-box-wrap">
          <div class="row">
            <div class="clearfix section-head contact-text">
              <div class="col-sm-12">
                <h2 class="title">Contacto</h2>
                <p class="regular-text">Av. Mariano Otero 1499, Verde Valle, 44550 Guadalajara, Jal.</p>
                <ul class="clearfix contact-info">
                  <li><a href="">01 33 3343 3000</a>
                  </li>
                  <li><a href="">expo@expoguadalajara.mx</a>
                  </li>
                  <li><a href="">expoguadalajara.mx</a>
                  </li>
                </ul>
              </div>
            </div> <!-- contact text end -->

            <div class="clearfix contact-form">

              <!-- Map Start -->
              <div class="col-sm-7">
                <div class="map-wrapper">
                  <div id="map"></div>
                </div>
              </div> <!-- Map end -->

              <!-- Contact Form start -->
              <div class="col-sm-5">
                <div class="clearfix card-panel grey lighten-5 cform-wrapper">
                  <form action="#" id="contactForm" novalidate>
                    <div class="input-field">
                      <input id="contact_name" type="text" name="contactName" class="validate input-box">
                      <label for="contact_name" class="input-label">Nombre</label>
                    </div>
                    <div class="input-field">
                      <input id="email" type="email" name="contactEmail" class="validate input-box">
                      <label for="email" class="input-label">Email</label>
                    </div>
                    <div class="input-field">
                      <input id="subject" type="text" name="contactSubject" class="validate input-box">
                      <label for="subject" class="input-label">Asunto</label>
                    </div>
                    <div class="input-field textarea-input">
                      <textarea id="textarea1" name="contactMessage" class="validate materialize-textarea" style="height: 22px;"></textarea>
                      <label for="textarea1" class="input-label">Mensaje</label>
                    </div>
                    <div class="input-field submit-wrap clearfix">
                      <button type="submit" class="left waves-effect btn-flat brand-text submit-btn">Enviar</button>
                      <div class="right form-loader-area">
                        <svg class="circular size-20" height="20" width="20">
                          <circle class="path" cx="10" cy="10" r="7" fill="none" stroke-width="3" stroke-miterlimit="10" />
                        </svg>
                      </div>
                    </div>
                  </form>
                </div>
              </div> <!-- ./contact form end -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- ./container end -->
  <div class="section-call-to-area">
    <div class="container">
      <div class="row">
        <a href="#home" class="btn-floating btn-large button-middle call-to-home section-call-to-btn animated btn-up btn-hidden" data-section="#home">
          <i class="mdi-navigation-expand-less"></i>
        </a>
      </div>
    </div>
  </div>
</section>
<!-- #contact Section end -->

<script type="text/javascript" src="assets/js/Chart.bundle.js"></script>

<script>
  var ctx = document.getElementById("chart_forma_pago");
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ["Encuesta de servicio"],
      datasets: [{
        label: 'Excelente',
        data: [48],
        backgroundColor: [
        'rgba(75, 192, 192, 0.2)'
        ],
        borderColor: [
        'rgba(75, 192, 192, 1)'
        ],
        borderWidth: 1
      },
      {
        label: 'Bueno',
        data: [60],
        backgroundColor: [
        'rgba(153, 102, 255, 0.2)'
        ],
        borderColor: [
        'rgba(153, 102, 255, 1)'
        ],
        borderWidth: 1
      },
      {
        label: 'Regular',
        data: [4],
        backgroundColor: [
        'rgba(255, 206, 86, 0.2)'
        ],
        borderColor: [
        'rgba(255, 206, 86, 1)'
        ],
        borderWidth: 1
      },
      {
        label: 'Malo',
        data: [10],
        backgroundColor: [
        'rgba(255, 99, 132, 0.2)'
        ],
        borderColor: [
        'rgba(255,99,132,1)'
        ],
        borderWidth: 1
      }
      ]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero:true
          }
        }]
      }
    }
  });

  var cty = document.getElementById("chart_seccion_parcial");

  var data = {
    labels: [
    "U. Orgànico",
    "Bot",
    "Desconocido"
    ],
    datasets: [
    {
      data: [45, 18, 37],
      backgroundColor: [
      "#84D0D0",
      "#FAAF56",
      "#B2B3B7"
      ],
      hoverBackgroundColor: [
      "#0199A4",
      "#FDB916",
      "#4C4D4F"
      ]
    }]
  };

  var myDoughnutChart = new Chart(cty, {
    type: 'doughnut',
    data: data,
    options: {
      animation:{
        animateScale:true
      }
    }
  });

  var ctz = document.getElementById("chart_seccion_total");

  var data = {
    labels: ["Robots en redes sociales"],
    datasets: [
    {
      label: "Bots",
      backgroundColor: [
      'rgba(132, 208, 208, 0.2)'
      ],
      borderColor: [
      'rgba(22, 135, 169, 1)'
      ],
      borderWidth: 1,
      data: [7800],
    } ,

    {
      label: "Peñabots",
      backgroundColor: [
      'rgba(167, 204, 98, 0.2)'
      ],
      borderColor: [
      'rgba(111, 172, 68, 1)'
      ],
      borderWidth: 1,
      data: [1029],
    }
    ]
  };

  var myChart = new Chart(ctz, {
    type: 'bar',
    data: data,
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero:true
          }
        }]
      }
    }
  });


  var ctz2 = document.getElementById("chart_seccion_total2");

  var data2 = {
    labels: [
    "Usuario Orgánico",
    "Desconocido"
    ],
    datasets: [
    {
      data: [78, 37],
      backgroundColor: [
      "#84D0D0",
      "#B2B3B7"
      ],
      hoverBackgroundColor: [
      "#0199A4",
      "#4C4D4F"
      ]
    }]
  };

  var myDoughnutChart = new Chart(ctz2, {
    type: 'doughnut',
    data: data2,
    options: {
      animation:{
        animateScale:true
      }
    }
  });
</script>

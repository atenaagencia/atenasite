@extends('site.layouts.pagetemplate')
@section('conteudo')
    <!-- about me -->
    <div class="w3l-about py-5">
        <div class="container py-lg-3">
            <div class="row about-content mb-lg-5">
                <div class="col-lg-6 pr-md-5">
                    <div class="image-block">
                        <img src="images/me.png" class="img-fluid myphoto" alt="my photo" />
                        <img src="images/cross.png" class="img-fluid pos" alt="dots" />
                    </div>
                </div>
                <div class="col-lg-6 info pl-lg-5 mt-lg-0 mt-5 pt-lg-0 pt-3 align-center">
                    <h4 class="">I’m Alexander Lihiliho</h4>
                    <p class="mt-md-4 mt-3 mb-0"> A Web Developer based in London.
                        I specialize in Branding and Strategy, and am passionate about creating Awesome Portfolio work.
                    </p>
                    <img src="images/signature.png" class="img-fluid signature" width="300px" alt="my photo" />
                    <p class="m-0 mb-2">Alexander Lihiliho</p>
                    <h6>20/10/2000.</h6>
                </div>
            </div>
        </div>
    </div>
    <!-- //about me -->

    <!-- stats -->
   <!--  <section class="w3l-stats py-lg-5 py-4" id="stats">
        <div class="gallery-inner container py-md-5 py-4">
            <div class="row stats-con text-white">
                <div class="col-sm-3 col-6 stats_info counter_grid">
                    <span class="fa fa-lightbulb-o"></span>
                    <p class="counter">645</p>
                    <h4>Projects Done</h4>
                </div>
                <div class="col-sm-3 col-6 stats_info counter_grid1">
                    <span class="fa fa-heart"></span>
                    <p class="counter">563</p>
                    <h4>Satisfied Clients</h4>
                </div>
                <div class="col-sm-3 col-6 stats_info counter_grid mt-sm-0 mt-5">
                    <span class="fa fa-magic"></span>
                    <p class="counter">1145</p>
                    <h4>Awards</h4>
                </div>
                <div class="col-sm-3 col-6 stats_info counter_grid2 mt-sm-0 mt-5">
                    <span class="fa fa-smile-o"></span>
                    <p class="counter">1045</p>
                    <h4>Happy Clients</h4>
                </div>
            </div>
        </div>
    </section> -->
    <!-- //stats -->

    <!-- about my profile -->
    <section class="w3l-about-bottom py-5" id="about">
        <div class="container py-lg-5 py-md-3">
            <div class="row middle-grids">
                <div class="col-lg-7 advantage-grid-info">
                    <div class="advantage_left">
                        <h4>UMA AGÊNCIA DIFERENTE</h4>
                        <p class="">Somos mais que uma agência, somos uma equipe de soluções e
                            resultados completos, onde diferentes talentos se unem
                            conectando ideias, inspirações e conhecimentos para tocar as
                            mentes e os corações de consumidores em todas as suas
                            conexões, plataformas e estações.
                            Atena Agência traz para você os melhores profissionais que
                            usarão seus poderes de cavalheiros cibernéticos como:
                            desenvolvimento web, palestras e treinamentos, marketing e
                            mídias digitais, assessoria de imprensa, design gráfico,
                            campanhas publicitárias, materiais gráfico e planejamento
                          estratégico</p>
                      
                    </div>
                </div>
                <div class="col-lg-5 advantage-grid-info1">
                    <div class="advantage_left1 mt-lg-0 mt-5">
                        <img src="images/about.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //about my profile -->

    {{-- <!-- skills and hobbies -->
    <div class="w3l-skills py-5" id="skills">
        <div class="container py-lg-5 py-md-3">
            <div class="modal-spa">
                <div class="row skills">
                    <div class="col-lg-6 bar-grids bargrids-left">
                        <h4> My Skills </h4>
                        <h6>web design <span> 80% </span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped active bg-primary" style="width: 80%">
                            </div>
                        </div>
                        <h6>ui design & developer <span> 70% </span></h6>
                        <div class="progress  w3-bar-grids">
                            <div class="progress-bar progress-bar-striped active" style="width: 70%">
                            </div>
                        </div>
                        <h6>Javascript<span>90% </span></h6>
                        <div class="progress  w3-bar-grids">
                            <div class="progress-bar progress-bar-striped active" style="width: 90%">
                            </div>
                        </div>
                        <h6>Photoshop <span> 75% </span></h6>
                        <div class="progress  w3-bar-grids prgs-w3-last">
                            <div class="progress-bar progress-bar-striped active" style="width: 75%">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 bar-grids w3-bar-grids mt-lg-0 mt-5">
                        <h4> My Hobbies </h4>
                        <div class="row pl-lg-5 pr-lg-5">
                            <div class="col-4 hobbies-grid1 grid1">
                                <span class="fa fa-codepen bg-secondary"></span>
                                <h5>Coding</h5>
                            </div>
                            <div class="col-4 hobbies-grid1 grid2">
                                <span class="fa fa-hourglass bg-secondary"></span>
                                <h5>Research</h5>
                            </div>
                            <div class="col-4 hobbies-grid1 grid3">
                                <span class="fa fa-camera bg-secondary"></span>
                                <h5>Photography</h5>
                            </div>
                            <div class="col-4 hobbies-grid1 grid4">
                                <span class="fa fa-plane bg-secondary"></span>
                                <h5>Travelling</h5>
                            </div>
                            <div class="col-4 hobbies-grid1 grid5">
                                <span class="fa fa-headphones bg-secondary"></span>
                                <h5>Music</h5>
                            </div>
                            <div class="col-4 hobbies-grid1 grid6">
                                <span class="fa fa-tint bg-secondary"></span>
                                <h5>Thinking</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- //skills and hobbies -->

    <!-- my featured projects -->
    {{-- <section class="w3l-block py-5">
        <div class="container py-lg-3">
            <h3 class="title mb-md-5 mb-4">Featured projects </h3>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 content" data-id="id-1" data-type="cat-item-1">
                    <span class="image-block">
                        <div class="content-overlay"></div>
                        <a class="image-zoom" href="#img">
                            <img src="assets/images/alexandra.jpg" class="img-fluid w3layouts agileits"
                                alt="portfolio-img">
                            <div class="content-details fadeIn-bottom">
                                <h3 class="content-title">This is a title</h3>
                                <p class="content-text">This is a short description</p>
                            </div>
                        </a>
                    </span>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 content mt-sm-0 mt-4" data-id="id-2" data-type="cat-item-2">
                    <span class="image-block">
                        <div class="content-overlay"></div>
                        <a class="image-zoom" href="#img">
                            <img src="assets/images/bench.jpg" class="img-fluid w3layouts agileits" alt="portfolio-img">
                            <div class="content-details fadeIn-bottom">
                                <h3 class="content-title">This is a title</h3>
                                <p class="content-text">This is a short description</p>
                            </div>
                        </a>
                    </span>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 content mt-md-0 mt-4" data-id="id-2" data-type="cat-item-2">
                    <span class="image-block">
                        <div class="content-overlay"></div>
                        <a class="image-zoom" href="#img">
                            <img src="assets/images/alexandra.jpg" class="img-fluid w3layouts agileits"
                                alt="portfolio-img">
                            <div class="content-details fadeIn-bottom">
                                <h3 class="content-title">This is a title</h3>
                                <p class="content-text">This is a short description</p>
                            </div>
                        </a>
                    </span>
                </div>
                <div class="content text-center mt-sm-5 mt-4">
                    <a href="#portfolio" class="btn btn-primary primary-btn-style">View more</a>
                </div>
            </div>
        </div>
    </section>
    <!-- //my featured projects --> --}}
    @endsection
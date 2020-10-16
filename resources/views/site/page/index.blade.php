@extends('site.layouts.template')
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap" rel="stylesheet">
<style>
p#teste {
    color: #777;
    font-size: 22px;
    line-height: 35px;
    font-family: 'Nunito', sans-serif;
}

.text-purple{
  color: purple !important;
}
.raleway-font{
  font-family: 'Raleway', sans-serif;
}
</style>
@section('conteudo')

<section class="p-5 text-center bg-light text-dark">
  <div class="row justify-content-center">
    <div class="col-lg-8 p-5 text-justify">
        <div class="col-lg-10 offset-lg-1">
          <h1 class="mb-5 raleway-font display-4 text-purple text-left">Uma agência diferente.</h1>
          <p class="mt-md-4 mt-3 mb-0 raleway-font text-dark" id="teste">Somos mais que uma agência, somos uma equipe de soluções e
          resultados completos, onde diferentes talentos se unem
          conectando ideias, inspirações e conhecimentos para tocar as
          mentes e os corações de consumidores em todas as suas
          conexões, plataformas e estações. </p><br>
          <p class="mt-md-4 mt-3 mb-0 raleway-font text-dark" id="teste">A <b class="text-purple">Atena Agência</b> traz para você os melhores profissionais que
          usarão seus poderes de cavalheiros cibernéticos como:
          desenvolvimento web, palestras e treinamentos, marketing e
          mídias digitais, assessoria de imprensa, design gráfico,
          campanhas publicitárias, materiais gráfico e planejamento
          estratégico. Entre outros.</p>
          <a href="{{asset('servicos')}}" target="./blank" class="primary-btn-style btn-primary btn mt-lg-5 mt-4 py-4 font-weight-bold raleway-font">Conheça nossos serviços</a>
        </div>
    </div>
    <style>
      .fundo-conteudo{
        background-image: url(images/icon-diferente.png);
        background-repeat: no-repeat;
        background-size: 500px;
        background-position-x: -50px;
        background-position-y: 60px;
      }
    </style>
    <div class="col-lg-4 d-lg-block d-none p-5 fundo-conteudo">
      <div class="conteudo mt-5" style="flex: 1; padding: 180px 0px;">
        {{-- <img src="{{asset('images/icon-diferente.png')}}" class="pt-5"  alt="content-photo"> --}}
      </div>
    </div>
  </div>
</section>

<!-- //w3l-content-photo-5 -->
<section class="w3l-stats py-lg-5 py-4" id="stats">
  <div class="gallery-inner container py-md-5 py-4">
    <div class="row stats-con text-white">
      <div class="col-sm-3 col-6 stats_info counter_grid">
        <span class="fa fa-coffee"></span>
        <p class="counter">6800</p>
        <h4>Café Tomados</h4>
      </div>
      <div class="col-sm-3 col-6 stats_info counter_grid1">
        <span class="fa fa-smile-o"></span>
        <p class="counter">30</p>
        <h4>Clientes Felizes</h4>
      </div>
      <div class="col-sm-3 col-6 stats_info counter_grid mt-sm-0 mt-5">
        <span class="fa fa-list"></span>
        <p class="counter">40</p>
        <h4>Projetos</h4>
      </div>
      <div class="col-sm-3 col-6 stats_info counter_grid2 mt-sm-0 mt-5">
        <span class="fa fa-laptop"></span>
        <p class="counter">2720</p>
        <h4>Horas de Codigo</h4>
      </div>
    </div>
  </div>
</section>


<!-- <section class="w3l-gallery-7 bg-light py-5">
<div class="gallery-7_sur py-lg-5">
  <div class="container">
    <div id="container">
      <div class="galleryContainer">
          <div class="gallery">
            <input type="radio" name="controls" id="c1" checked><img class="galleryImage img-fluid" id="i1"
            src="images/g1.jpg" class="img" alt="">
            <input type="radio" name="controls" id="c2"><img class="galleryImage img-fluid" id="i2"
            src="images/g2.jpg" class="img" alt="">
            <input type="radio" name="controls" id="c3"><img class="galleryImage img-fluid" id="i3"
            src="images/g3.jpg" class="img" alt="">
            <input type="radio" name="controls" id="c4"><img class="galleryImage img-fluid" id="i4"
            src="images/g4.jpg" class="img" alt="">
            <input type="radio" name="controls" id="c5"><img class="galleryImage img-fluid" id="i5"
            src="images/g5.jpg" class="img" alt="">
            <input type="radio" name="controls" id="c6"><img class="galleryImage img-fluid" id="i6"
            src="images/g6.jpg" class="img" alt="">
          </div>
          <div class="thumbnails">
            <label class="thumbnailImage" for="c1"><img src="images/g1.jpg" class="img img-fluid"
              alt=""></label>
            <label class="thumbnailImage" for="c2"><img src="images/g2.jpg" class="img img-fluid"
              alt=""></label>
            <label class="thumbnailImage" for="c3"><img src="images/g3.jpg" class="img img-fluid"
              alt=""></label>
            <label class="thumbnailImage" for="c4"><img src="images/g4.jpg" class="img img-fluid"
              alt=""></label>
            <label class="thumbnailImage" for="c5"><img src="images/g5.jpg" class="img img-fluid"
              alt=""></label>
            <label class="thumbnailImage" for="c6"><img src="images/g6.jpg" class="img img-fluid"
              alt=""></label>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->


<!--     <section class="w3l-blog py-5">
  <div class="container py-lg-5">
    <div class="row">
      <div class="col-lg-3 col-6 pr-md-3 pr-2">
        <div class="img-block">
          <a href="#img">
            <img src="images/iphone1.png" class="img-fluid" alt="image" />
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-6 pl-md-3 pl-2">
        <div class="img-block">
          <a href="#img">
            <img src="images/iphone2.png" class="img-fluid" alt="image" />
          </a>
        </div>
      </div>
      <div class="col-lg-6 mt-lg-0 mt-md-5 mt-4">
        <h3>Sed volutpat eget dui ut tempus init bibendum nunc.</h3>
        <h5 class="mt-3">Fusce fringilla tincidunt laoreet volutpat cras varius sit suscipit.</h5>
        <p class="mt-4 mb-0"> Sed in metus libero. Sed volutpat eget dui ut tempus. Fusce fringilla tincidunt laoreet
          Morbi ac metus vitae diam scelerisque malesuada eget eu mauris. Cras varius lorem ac velit pharetra,
          non scelerisque mi vulputate. Phasellus bibendum suscipit nunc, non semper erat iaculis in. Nulla
          volutpat porttitor magna vel euismod. Aenean sit amet diam nec sem
        amet metus.</p>
        <a href="#blog.html" class="primary-btn-style btn-primary btn mt-lg-5 mt-4">View my project</a>
      </div>
    </div>
  </div>
</section> -->
<!-- //iphone home block -->

<!-- testimonial -->
<!--   <section class="w3l-quote-main">
  <div class="quote py-5">
    <div class="container py-lg-5">
      <div class="row">
        <div class="col-lg-9">
          <h4>" I've worked with some X company for several years and that is the best company in the Market.
            Mauris elementum tortor a nisl
            aliquet fringilla. Donec et risus augue. Proin sit amet maximus dui Vivamus lacinia nisi tempor
          ligula sagittis vehicula."</h4>
        </div>
        <div class="col-lg-3 mt-lg-0 mt-3 text-lg-center tablet-grid">
          <img src="images/client2.jpg" alt="" class="img-fluid" />
          <div>
            <h6 class="mb-0 mt-lg-3">Johnson smith</h6>
            <h5 class="mt-1">- UI/UX Designer </h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
<!-- //testimonial -->

<!-- home page blog-->
<!--   <section class="w3l-blog py-5 bg-light">
  <div class="container py-lg-5 py-md-3">
    <div class="row">
      <div class="col-lg-5">
        <h3>Sed volutpat eget dui ut tempus init.</h3>
        <h5 class="mt-3">Fusce fringilla tincidunt laoreet volutpat cras varius sit </h5>
        <p class="mt-4"> Sed in metus libero. Sed volutpat eget dui ut tempus. Fusce fringilla tincidunt laoreet
          Morbi ac metus vitae diam scelerisque malesuada eget eu mauris. Cras varius lorem ac velit pharetra,
          non scelerisque mi vulputate. Phasellus bibendum suscipit nunc, non semper erat iaculis in. Nulla
          volutpat porttitor magna vel euismod. Aenean sit amet diam nec sem
        amet metus.</p>
      </div>
      <div class="col-lg-7 mt-lg-0 mt-4">
        <div class="img-block">
          <a href="#single">
            <img src="images/g1.jpg" class="img-fluid" alt="image" />
            <span>Modern Ecommerce Website Design</span>
          </a>
        </div>
        <div class="img-block mt-3">
          <a href="#single"> <img src="images/g2.jpg" class="img-fluid" alt="image" />
            <span>Personalized Portfolio work</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section> -->
<!-- //home page blog-->

<!-- freelance hire me -->
<!--  <section class="w3l-grid-quote py-5">
  <div class="container py-lg-3">
    <h6>I'am available for freelance projects.</h6>
    <h3>Let's work together indeed!</h3>
    <a href="contact.html" class="secondary-btn-style btn-secondary btn">Get quotes</a>
    <a href="contact.html" class="btn btn-style text-primary ml-2">Hire me</a>
  </div>
</section> -->
<!-- //freelance hire me -->

<div class="modal fade" id="myModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" style="background-color: transparent; border: none;">

      <!-- Modal Header -->
      {{-- <div class="modal-header">
        
      </div> --}}

      <!-- Modal body -->
      {{-- <div class="modal-body">
        <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
       <a href="atenago"><img src="promos/bannerpromo.png" alt="" style="width:100%; max-width:100%;"></a>
      </div> --}}

      <!-- Modal footer -->
      {{-- <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div> --}}

    </div>
  </div>
</div>
{{-- 
<script>
  $(document).ready(function(){
    $("#myModal").modal();
});
</script> --}}

@endsection

<!doctype html>
<html lang="pt_BR">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Atena Agencia - Full Service | Home</title>

  <!-- google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,700&display=swap" rel="stylesheet">

  <!-- Template CSS -->
  <link rel="stylesheet" href="css/style-starter.css">
  <link rel="stylesheet" href="css/style-novo.css">
</head>

<body>

<style>
.pagination__button:before {
    height: 2px;
    background-color: white;
}
</style>

  <!-- header -->
  <div class="w3l-header" id="home">
    <div class="container">
     @include('site.componentes.nav')
</div>
</div>
<!-- //header -->

<!-- banner slider -->

<div class="w3l-banner-slider">
  <div class="wrapper-container">
    <!-- Container for all sliders, and pagination -->
    <main class="sliders-container">
      <!-- Here will be injected sliders for images, numbers, titles and links -->

      <!-- Simple pagination for the slider -->
      <ul class="pagination">
        <li class="pagination__item"><a class="pagination__button"></a></li>
        <li class="pagination__item"><a class="pagination__button"></a></li>
        <li class="pagination__item"><a class="pagination__button"></a></li>
        <li class="pagination__item"><a class="pagination__button"></a></li>
      </ul>
      <div class="social" data-contador="0">
         <span  class="fa fa-arrow-left left mr-2" style="font-size: 50px;"></span>
          <span  class="fa fa-arrow-right right" style="font-size: 50px;"></span>
       </div>
     </main>
   </div>
 </div>
 <!-- //banner slider -->
@yield('conteudo')
 @include('site.componentes.footer')

</body>
</html>
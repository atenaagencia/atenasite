<nav class="navbar navbar-expand-lg navbar-dark pl-0 pr-0">
    <a class="navbar-brand m-0 text-white" href="/">
      <img src="{{asset('images/atena_white.png')}}" alt="" style="width: 150px;">  
    </a> 
    <!-- <span class="logo">portfolio</span>-->
    <button class="navbar-toggler bg-purple" type="button" data-toggle="collapse" data-target="#navbarNav"
    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active mr-lg-4">
        <a class="nav-link pl-0 pr-0 font-weight-bold" href="/">Home <span
          class="sr-only">(current)</span></a>
        </li>
      
        <li class="nav-item dropdown mr-lg-3">
          <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
        A Atena</a>
        <div class="dropdown-menu text-white" aria-labelledby="navbarDropdown">
          <a class="dropdown-item font-weight-bold" href="{{asset('quemsomos')}}">Quem Somos</a>
          <a class="dropdown-item font-weight-bold" href="{{asset('nossotime')}}">Equipe</a>
        </div>
      </li>
        <li class="nav-item  mr-lg-4">
        <a class="nav-link pl-0 pr-0 font-weight-bold" href="{{asset('servicos')}}">Serviços</a>
        </li>
        <li class="nav-item  mr-lg-4">
          <a class="nav-link pl-0 pr-0 font-weight-bold" href="{{asset('cases')}}">Cases</a>
          </li>
      {{-- <li class="nav-item dropdown mr-lg-3">
        <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
      Serviços</a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item font-weight-bold" href="about.html">Quem Somos</a>
        <a class="dropdown-item font-weight-bold" href="portfolio.html">Equipe</a>
      </div>
    </li> --}}
    <li class="nav-item">
      <a class="nav-link pl-0 pr-0 font-weight-bold" href="#afooter">Contato</a>
    </li>
  </ul>
</div>
</nav>


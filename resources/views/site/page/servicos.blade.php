@extends('site.layouts.pagetemplate')

<style>
.text-purple{
  color: purple !important;
}
.raleway-font{
  font-family: 'Raleway', sans-serif;
}
.bg-purple{
    background-color: purple !important;
}

.card{
    flex: 1 !important;
    display: flex !important;
    flex-direction: column !important;
    min-height: 300px !important;
}
b{
    font-weight: bold !important;
}
</style>

@section('conteudo')
<div class="w3-services py-5 mb-0 pb-0" id="services">
    <div class="container py-lg-3">
        <div class="title-section">
            <!-- <h3 class="main-title-w3 text-lg-center">Nossos Serviços</h3> -->
            <h1 class="mb-4 mt-4 raleway-font display-4 font-weight-bold text-purple text-center">Nossos Serviços</h1><br>
            <div class="row justify-content-center">
                <div class="title-line" style="width: 50%"></div>
            </div>
        </div>
        <div class="w3-services-grids mt-lg-5 mt-4 col-lg-10 offset-lg-1 text-center">
            <div class="text-justify">
                <p class="text-center lead" style="font-size: 20pt; line-height: 1.6;">Os nossos serviços atendem publicos diversificados com estratégias específicas para cada negócio, usando sempre
                as ferramentas mais atuais em nosso desenvolvimento.</p>
            </div>
        </div>
    </div>
</div>

<div class="w3l-open-block-services pb-5 pt-0 mb-0">
    <div class="container py-lg-1 pb-5 pt-0 mb-0">
        <div class="row mt-5 pt-0 pb-5">
            <div class="col-lg-4 col-md-6">
                <div class="card text-center">
                    <div class="icon-holder">
                        <span class="fa fa-laptop service-icon bg-purple" aria-hidden="true"></span>
                    </div>
                    <h4 class="mission">Criação de Websites</h4>
                    <div class="open-description">
                        <p>Trabalhamos com sites profissionais e administráveis sejam eles estáticos ou dinâmicos.</p>
                        <a href="#websites" class="text-primary">Saiba mais</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-md-0 mt-5 pt-md-0 pt-3">
                <div class="card text-center">
                    <div class="icon-holder">
                        <span class="fa fa-caret-square-o-up service-icon bg-purple" aria-hidden="true"></span>
                    </div>
                    <h4 class="mission">Desenvolvimentos de Sistemas e APPs</h4>
                    <div class="open-description">
                        <p>Desenvolvimento de sistemas personalizados e de gestão.</p>
                        <a href="#sistemas" class="text-primary">Saiba mais</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-lg-0 mt-5 pt-lg-0 pt-3">
                <div class="card text-center">
                    <div class="icon-holder">
                        <span class="fa fa-adjust service-icon bg-purple" aria-hidden="true"></span>
                    </div>
                    <h4 class="mission">Assessoria Digital</h4>
                    <div class="open-description">
                        <p>Planejamento periódico de cada midia. Assessorar conteúdo das redes sociais,
                           e acompanhar em tempo real as interações dos usuários.</p>
                        <a href="#assessoria" class="text-primary">Saiba mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="w3-services py-5 bg-light" id="websites">
    <div class="container py-lg-3">
        <div class="title-section">
            <!-- <h3 class="main-title-w3 text-lg-center">Nossos Serviços</h3> -->
            <h1 class="mb-4 mt-4 raleway-font display-4 font-weight-bold text-purple text-center">Criação de Websites</h1><br>
            <div class="row justify-content-center">
                <div class="title-line" style="width: 50%"></div>
            </div>
        </div>
        <div class="w3-services-grids mt-lg-5 mt-4 col-lg-10 offset-lg-1 text-center">
            <div class="text-justify">
                <p class="text-center lead" style="font-size: 20pt; line-height: 1.6;">
                    Usamos tecnologias web atuais para o desenvolvimento de websites dinâmicos, como <b>JavaScript</b> e <b>Jquery</b>, além de ferramentas
                    de apoio à criação, como o <b>Bootstrap 4</b> e a folha de estilos <b>CSS3</b>.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="w3-services py-5 bg-light" id="sistemas">
    <div class="container py-lg-3">
        <div class="title-section">
            <!-- <h3 class="main-title-w3 text-lg-center">Nossos Serviços</h3> -->
            <h1 class="mb-4 mt-4 raleway-font display-4 font-weight-bold text-purple text-center">Desenvolvimentos de Sistemas e APPs</h1><br>
            <div class="row justify-content-center">
                <div class="title-line" style="width: 50%"></div>
            </div>
        </div>
        <div class="w3-services-grids mt-lg-5 mt-4 col-lg-10 offset-lg-1 text-center">
            <div class="text-justify">
                <p class="text-center lead" style="font-size: 20pt; line-height: 1.6;">Os sistemas desenvolvidos por nossos cavaleiros cibernéticos utilizam o framework PHP <b>Laravel</b>, aliados a ferramentas
                de interação como <b>VUE JS</b>, <b>JavaScript</b> e <b>Jquery</b>, além de ferramentas de apoio à criação, como o <b>Bootstrap 4</b> e a folha de estilos <b>CSS3</b>.</p>
            </div>
        </div>
    </div>
</div>

<div class="w3-services py-5 bg-light" id="assessoria">
    <div class="container py-lg-3">
        <div class="title-section">
            <!-- <h3 class="main-title-w3 text-lg-center">Nossos Serviços</h3> -->
            <h1 class="mb-4 mt-4 raleway-font display-4 font-weight-bold text-purple text-center">Assessoria Digital</h1><br>
            <div class="row justify-content-center">
                <div class="title-line" style="width: 50%"></div>
            </div>
        </div>
        <div class="w3-services-grids mt-lg-5 mt-4 col-lg-10 offset-lg-1 text-center">
            <div class="text-justify">
                <p class="text-center lead" style="font-size: 20pt; line-height: 1.6;">Os nossos serviços atendem publicos diversificados com estratégias específicas para cada negócio, usando sempre
                as ferramentas mais atuais em nosso desenvolvimento.</p>
            </div>
        </div>
    </div>
</div>


<style>
    .w3l-open-block-services .card {
        padding: 40px 25px;
        position: relative;
        background: rgba(108, 158, 156, 0.1);
        ;
        border: none;
        transition: .3s;
        -webkit-transition: .3s;
        -moz-transition: .3s;
        -ms-transition: .3s;
        -o-transition: .3s;
        border-radius: 8px;
    }

    .w3l-open-block-services .card:hover {
        background: rgb(63, 2, 63);
        transition: .3s;
        -webkit-transition: .3s;
        -moz-transition: .3s;
        -ms-transition: .3s;
        -o-transition: .3s;
        color: white !important;
    }
    .w3l-open-block-services .text-primary{
        color: rgb(63, 2, 63) !important;
    }
    .w3l-open-block-services .card:hover .open-description .text-primary{
        color: #fff !important;
    }
    .w3l-open-block-services .card:hover h4.mission {
  color: #fff;
}

.w3l-open-block-services .card:hover .open-description p {
  color: #fff;
}

</style>
@endsection
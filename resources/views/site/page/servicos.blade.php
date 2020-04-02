@extends('site.layouts.pagetemplate')

@section('conteudo')
<div class="w3-services py-5" id="services">
    <div class="container py-lg-3">
        <div class="title-section">
            <h3 class="main-title-w3 text-lg-center">Nossos Serviços</h3>
            <div class="title-line">
            </div>
        </div>
        <div class=" w3-services-grids mt-lg-5 mt-4">
            <p class="text-justify">Lorem ipsum dolor sit amet, init sed adipisci ngelit. In a et euismod faucibus quam,
                a sodales er
                osplacerat vitae. Sed pretium fermentum luctus.Cras sodales nisl vitae dolor facilisis dapibus.
                Integer consectetur in velit eget viverra. Quisque vulputate a nisi blandit molestie. Aenean sit
                amet consequat risus, eget egestas est.Nullam eu turpis diam. Ut ac erat vestibulum, laoreet ex
                faucibus, iaculis ex. Donec at dolor volutpat, laoreet nisi. </p>


        </div>
    </div>
</div>
<div class="w3l-open-block-services py-5">
    <div class="container py-lg-3">
        <h3 class="head-title">What I Expert in</h3>
        <div class="row mt-5 pt-3">
            <div class="col-lg-4 col-md-6">
                <div class="card text-center">
                    <div class="icon-holder">
                        <span class="fa fa-laptop service-icon bg-purple" aria-hidden="true"></span>
                    </div>
                    <h4 class="mission">Criação de Websites</h4>
                    <div class="open-description">
                        <p>Trabalhamos com sites profissionais e administráveis sejam eles estáticos ou dinâmicos</p>
                        <a href="#read" class="text-primary">Saiba mais</a>
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
                        <p>Desenvolvimento de sistemas personalizados e de gestão</p>
                        <a href="#read" class="text-primary">Saiba mais</a>
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
                        <p>Planejamento mensal, trimensal ou anual de cada midia. Assessorar conteúdo das redes sociais,
                            acompanhar em tempo real as interações dos usuários</p>
                        <a href="#read" class="text-primary">Saiba mais</a>
                    </div>
                </div>
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
    }
</style>
@endsection
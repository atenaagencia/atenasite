<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="pt_BR">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Atena Agencia - Full Service</title>

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="css/style-starter.css">
    <link rel="stylesheet" href="css/style-novo.css">

</head>

<body>
    <!-- inner page header -->
    <div class="inner-banner" style="background-color: purple !important;">
        <div class="w3l-header inner-w3l-header"   id="home">
            <div class="container" >
                @include('site.componentes.nav')
            </div>
        </div>
    </div>
    @yield('conteudo')
    @include('site.componentes.footer')
   
</body>

</html>

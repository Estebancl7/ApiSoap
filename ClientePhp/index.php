<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/index.css">
    <!--Font awesome-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
   
    <title>Web Services Soap</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-info sticky-top p-3 aria-label">
        <div class="container">
            <a class="navbar-brand" href="index.html" style="color: black;">Web Services SOAP</a>
            <button class="navbar-toggler border-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <ion-icon name="menu-outline"></ion-icon>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item px-2">
                        <a class="nav-link" href="" style="text-align: center;">Inicio </a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link" href="" style="text-align: center;">Nosotros </a>
                    </li>
                    <a href="" class="btn btn-outline-light px-2" style="text-align: center; max-width: 850px;">Ingresa un nombre</a>
                    <a href="" class="btn btn-outline-light px-2 ml-1" style="text-align: center; max-width: 850px;">Verifica un rut</a>

                </ul>
            </div>
        </div>
    </nav>

    <section id="inicio">
        <div class="container">
            <div class="text pt-5 pb-1">
                <h1>
                    <span class="">T</span>
                    <span class="">r</span>
                    <span class="">a</span>
                    <span class="">b</span>
                    <span class="">a</span>
                    <span class="">j</span>
                    <span class="">o</span>
                    <span class="ml-3">1</span>
                </h1>
                <h1 class="divider"></h1>

                <div class="row">
                    <div class="col-6">
                        <h5 class="text-justify mt-4 pb-5 mr-4">A continuaci&oacuten se puede encontrar el desarrollo del trabajo N°1<br> </h5>
                        <div class="mb-2">
                            <a class="mb-5"href="">Ingresa un nombre</a>
                        </div>
                        <br>
                        <div>
                            <a class="mt-5" id="a2" href="">Verifica un rut</a>
                    
                        </div>
                    </div>
                    <div class="col-6 text-center">
                        <img class="" src="/ClientePhp/src/img/Soap.png" alt="" height="280px">
                    </div>
                </div>
            </div>
        </div>
    </section>
   
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
   <script src="https://kit.fontawesome.com/c8152ea011.js" crossorigin="anonymous"></script>
</html>

<?php

ini_set("soap.wsdl_cache_enabled", "0");

//Crear cliente
$cliente = new SoapClient('http://localhost:8080/APISoapRedes/ApiSoapRedes?WSDL');

//Usar metodos creados

$verVerificacion = $cliente-> VerificadorRut([
    "Rut" => 19847464 
])-> return;

if(verVerificacion != 1){
    echo 'Rut ingresado correctamente';
}else{
    echo 'Rut ingresado al else';
}

$Pagototal = $cliente->ProcesarPago([
   "total" =>50,
    "pago" =>100
])->return;

if($Pagototal>=0){
    echo 'Pago primer echo';
}else{
    echo 'Pago 2do echo';
}
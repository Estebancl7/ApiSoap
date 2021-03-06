<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ClientePhp/src/css/index.css">
    <!--Font awesome-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
   
    <title>Web Services Soap</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-info sticky-top p-3 aria-label">
        <div class="container">
            <a class="navbar-brand" href="/ClientePhp/index.php" style="color: black;">Web Services SOAP</a>
            <button class="navbar-toggler border-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <ion-icon name="menu-outline"></ion-icon>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item px-2">
                        <a class="nav-link" href="/ClientePhp/index.php" style="text-align: center;">Inicio </a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link" href="/ClientePhp/src/pages/nosotros.php" style="text-align: center;">Nosotros </a>
                    </li>
                    <a href="/ClientePhp/src/pages/nombre.php" class="btn btn-outline-light px-2" style="text-align: center; max-width: 850px;">Ingresa un nombre</a>

                </ul>
            </div>
        </div>
    </nav>

    <section id="formu">
        <div class="container border border-info bg-info mt-5 py-5 text-center">
            
            <h1 class="text-center">Verificador de Rut</h1>
            <h1 class="divider3 mx-5"></h1>
            <div class="formulario pt-5">
            <!--<a href="src/pages/rut.php" class="btn btn-outline-light px-2 ml-1" style="text-align: center; max-width: 850px;">Verifica un rut</a>
                    -->
                <form action="rut.php" name="formulario1" method="POST" autocomplete="off">    
                    <?php
                        ini_set("soap.wsdl_cache_enabled", "0");
                        $cliente = new SoapClient('http://localhost:8080/APISoapRedes/ApiSoapRedes?WSDL');
                        
                        echo '<input type="text" class="input" name="nombre" id="nombre" placeholder="Ingrese rut">
                            <input class="btn" type="submit" name="enviar" value="Aceptar">';
                        
                        $constante = '<div class="mensaje">';        
                        $constante2 = '</div>';

                        if(isset($_POST['enviar'])){    
                            $rut_ingresado = $_POST['nombre'];
                            $resultado = $cliente->VerificadorRut(["Rut" => $rut_ingresado])->return;
                            if($resultado != 'k' && $resultado != 107 && $resultado != 0){
                                echo $constante .$rut_ingresado .'-' .$resultado .$constante2;
                            }else if ($resultado == 'k' || $resultado == 107){
                                echo $constante .$rut_ingresado. '-' .'k'.$constante2;
                            }else {
                                echo $constante .$rut_ingresado. '-' .'0'.$constante2;
                            }
                        }

                    ?>
                </form>
            </div>
        </div>
    </section>

    <section id="footer">
        <nav class="container-fluid bg-info fixed-bottom p-2 mt-1 aria-label">
            <div class="container">
                <div class="content-center">
                    <div class="row my-1">
                        <div class="col d-flex justify-content-center">
                            <a href="https://github.com/Estebancl7/ApiSoap" class="text-white">
                                <em class="fab fa-github"></em>
                            </a>
                        </div>
                    </div>
                    <h1 class="divider mx-5"></h1>
                    <h4 class="text-center"> Universidad Tecnol??gica Metropolitana | Desarrollado por: Grupo 3</h4>
                </div>
            </div>
        </nav>
    </section>

   
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/c8152ea011.js" crossorigin="anonymous"></script>

</html>

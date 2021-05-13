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
                    <a href="src/" class="btn btn-outline-light px-2" style="text-align: center; max-width: 850px;">Ingresa un nombre</a>

                </ul>
            </div>
        </div>
    </nav>

    <section id="formu">
        <div class="container bg-primary">
            
            <h1>Ingrese los datos solicitados</h1>
            <div class="formulario">
            <!--<a href="src/pages/rut.php" class="btn btn-outline-light px-2 ml-1" style="text-align: center; max-width: 850px;">Verifica un rut</a>
                    -->
                <form action="rut.php" name="formulario1" method="POST" autocomplete="off">    
                    <?php
                        ini_set("soap.wsdl_cache_enabled", "0");
                        $cliente = new SoapClient('http://localhost:8080/APISoapRedes/ApiSoapRedes?WSDL');
                        
                        echo '<input type="text" class="input" name="rut" id="rut" placeholder="Ingrese su rut">
                            <input class="btn" type="submit" name="enviar" value="Verificar">';
                        
                        
                        
                        if(isset($_POST['enviar'])){
                            $rut_ingresado = $_POST['rut'];
                            $resultado = $cliente->VerificadorRut(["Rut" => $rut_ingresado])->return;
                            
                            if($resultado != "J"){
                                echo '<div class="mensaje">' .$rut_ingresado .'-' .$resultado .'</div>';
                            }else{
                                echo 'Rut ingresado al else';
                            }
                        }

                    ?>
                </form>
            </div>
        </div>
    </section>


   
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/c8152ea011.js" crossorigin="anonymous"></script>

</html>

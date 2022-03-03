<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/06139aa066.js" crossorigin="anonymous"></script>
    
    <title>Ejemplo MVC </title>
</head>
<body>
    
    <!--Logo-->
    <div class="container-fluid">
        <h3 class="text-center">Logo</h3>
    </div>

    <!--NavBar-->
    <div class="container-fluid">
        <div class="container">
            <ul class="nav nav-justified py-2 nav-pills">
                
                <li class="nav-item">
                    <a 
                        href="index.php?pagina=registro" 
                        class="nav-link <?php (isset($_GET["pagina"]) && $_GET["pagina"] == "registro") ? print_r("active") : "";  ?>">
                        Registro
                    </a>
                </li>
                <li class="nav-item">
                    <a 
                        href="index.php?pagina=ingreso" 
                        class="nav-link <?php (isset($_GET["pagina"]) && $_GET["pagina"] == "ingreso") ? print_r("active") : "";  ?>">
                        Ingreso
                    </a>
                </li>
                <li class="nav-item">
                    <a 
                        href="index.php?pagina=inicio" 
                        class="nav-link <?php (isset($_GET["pagina"]) && $_GET["pagina"] == "inicio" || !isset($_GET["pagina"])) ? print_r("active") : "";  ?>">
                        Inicio
                    </a>
                </li>
                <li class="nav-item">
                    <a 
                        href="index.php?pagina=salir" 
                        class="nav-link <?php (isset($_GET["pagina"]) && $_GET["pagina"] == "salir") ? print_r("active") : "";  ?>">
                        Salir
                    </a>
                </li>

            </ul>
        </div>
    </div>

    <!--Tabla-->

    <div class="container-fluid mt-5">
        <div class="container">

            <?php
                define("pagesViews", array("registro", "ingreso", "inicio", "salir"));

                #isset determina si una variable esta definida y no es null
                if(isset($_GET["pagina"])){

                    if(in_array($_GET["pagina"], pagesViews)){

                        include "pages/".$_GET["pagina"].".php";

                    }else{
                        include "pages/404.php";
                    }

                }else{

                    include "pages/registro.php";

                }

            ?>

        </div>
    </div>

</body>
</html>
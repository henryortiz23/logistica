<?php
include("encabezado.php");

$_SESSION['pagina'] = basename(__FILE__);
?>

<?php
/*$conect = new conexion();
$query = "INSERT INTO `cargo` (`idcargo`, `cargo`) VALUES (NULL, 'Gerente Financiero');";
$conect->probar($query);*/
?>




    <main class="main col">
        <div class="row justify-content-center align-content-center text-center">
            <div class="columna col-lg-6">
                <h3 style="color: black;">Bienvenido</h3>
                <p>Bienvenido a la pagina principal del proyecto final de </p>
                <hr class="my-2">
                <button class="btn btn-success" type="button">Mas Informacion</button>
            </div>


            <div id="d1" style="display:flex;width:100px;height:50px;backgroud:blue;">Hola</div>
        </div>

    </main>


<?php
include_once '../Conexion/lib_mysql.php';
$rotulo = "AGREGAR";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM proveedor WHERE idProveedor = $id";
    $rotulo = "MODIFICAR";
    bd_conectar();
    $registros = bd_consultar($sql);
    $proveedor = $registros[0];
    unset($registros);
    bd_desconectar();
} else {
    $proveedor = null;
}
?>
<!DOCTYPE html>
<html>
    <link href="../../css/css.css" rel="stylesheet" type="text/css"/>
    <link href="../../css/Intranetregistro.css" rel="stylesheet" type="text/css"/>
    <link href="../../css/estilo.css" rel="stylesheet" type="text/css"/>
    <link href="../../css/responsivo.css" rel="stylesheet" type="text/css"/>
    <body >
    <header>


        <div class="contenedor">

            <h1 >Chernobyl Factory</h1>

            <input type="checkbox" id="menu-bar">
            <label class="fontawesome-align-justify" for="menu-bar"></label>
            <nav class="menu">

                <a href="intranet.php">Regresar a listado</a>
                <a href="../PaginaPrincipal.php">Inicio Intranet</a>
            </nav>
        </div>
    </header>
        <main class="bajo15">
        <form  name="InsUpd" method="POST" action="editar_grabar.php">
            <fieldset style="width: 70%; margin-left: 150px; padding: 20px;">

                <legend ><?= $rotulo ?> PROVEEDOR</legend>
                <input type="text" name="txtId"  value="<?= $proveedor['idProveedor'] ?>"
                       hidden="hidden"/>
                Nombre:<br/>
                <input type="text" name="txtNom" value="<?= $proveedor['nombre'] ?>"
                       placeholder="Ingrese el nombre" required="required"/><br/>
                <br/>Direccion:<br/>
                <input type="text" name="txtSim" value="<?= $proveedor['direccion'] ?>"
                       placeholder="Ingrese la direccion" required="required"/><br/>            
                <br/>
                <br/>Telefono:<br/>
                <input type="text" name="txtTelf" value="<?= $proveedor['telefono'] ?>"
                       placeholder="Ingrese el telefono" required="required"/><br/>
                <br/><br/>
                <br/><input type="submit" name="btnGrabar" value="<?= $rotulo ?>">

            </fieldset>
        </form>

</main>
        <footer style="background: black; color: white; margin-top: 150px;">
            <div class="contenedor">
                <p class="copy">Copyright 2020 &copy; - Sitio de prueba - Aviso legal, politica de privacidad y afiliación.       
                    <br/> Para mayor información visite www.chernobylpage.com.pe.</p>
                <div class="sociales" >
                    <a  class="fontawesome-facebook-sign" href="#"></a>
                    <a class="fontawesome-twitter" href="#"></a>
                    <a class="fontawesome-camera-retro" href="#"></a>
                    <a class="fontawesome-google-plus-sign" href="#"></a>
                </div>
            </div>
        </footer>
    </body>

</html>




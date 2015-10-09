<!doctype html>
<html lang = "en">
<head>
    <link rel="stylesheet" href="../css/miestilo.css" type="text/css" media="screen"/>
     <link rel="stylesheet" href="../bootstrap-3.3.2-dist/css/bootstrap.css" type="text/css" media="screen"/>
<meta charset = "utf-8">

<title>Municipio</title>

<meta name = "description" content = "cotizador">
<meta name = "author" content = " ">
<link href="/tienda/css/miestilo.css" rel="stylesheet" type="text/css"/>
<link href="/tienda/bootstrap-3.3.2-dist/js/bootstrap.js" rel="stylesheet" type="text/js"/>
<link rel = "stylesheet" href = "<?php echo"$base/$css"; ?>">

 
               
<h1> MUNICIPIO</h1>



</head>
<body>
    <div class="art-nav">
        <div class="l"></div>
        <div class="r"></div>
        <ul class="art-menu">
            
            <li>
                <a href="http://localhost:8080/cotizador/index.php/login/logout_ci"><span class="l"><span clas="t"><h2>Cerrar sesion</h2> </span></a>
            </li>
             <li>
                 <a href="http://normiscom.esy.es/tienda/index.php/cliente"><span class="l"><span clas="t"><h2> Clientes</h2> </span></a>
            </li>
             <li>
                 <a href="http://normiscom.esy.es/tienda/index.php/proveedor"><span class="l"><span clas="t"><h2>Proveedores</h2></span></a>
            </li>
        </ul>
        <BR/>
    </div>
    <div id="tablas">
<?php
echo'<div >';
echo '<table border=8>';

    echo '<TR> <br/>';
    echo '<TD width="30">ID_municipio</TD>';
    echo '<TD>NOMBRE MUNICIPIO</TD>';

foreach ($datos as $obj) {
    
   echo '<TR colspan="-1" valign="middle" align="center"><TD width="30">';
    echo $obj->getIdMunicipio();
    echo '</TD><TD>';
    echo $obj->getNombreMunicipio();
    echo '</TD><TD>';

   echo '<button type="button" class="btn btn-xs btn-info"><a href="'.$base.'municipio/delete/'.$obj->getIdMunicipio().'">eliminar</a></button>';
    echo'</TD><TD>';
     echo '<button type="button" class="btn btn-xs btn-info"><a href="'.$base.'municipio/showadd/">agregar</a></button>';
    echo '</TD><TD>';
    echo '<button type="button" class="btn btn-xs btn-info"><a href="'.$base.'municipio/trae/'.$obj->getIdMunicipio().'">modificar</a></button>';
    echo '</TD></TR>';
    
}
echo '</table>';
echo '</div>';
?>
    </div>
    
    
</body>
</html>


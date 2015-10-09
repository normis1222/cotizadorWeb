
<!DOCTYPE HTML>
<html lang="es">

    <head>
        <link rel="stylesheet" href="../css/miestilo.css" type="text/css" media="screen"/>
        <meta charset="UTF-8" />
        
        <title>Modificar usuarios</title>
        <link href="/tienda/css/miestilo.css" rel="stylesheet" type="text/css"/>
    </head>   
    <body>  
         <h1>MODIFICAR CLIENTE</h1>
         <div class="art-nav">
        <div class="l"></div>
        <div class="r"></div>
        <ul class="art-menu">
            
            <li>
                <a href="http://normiscom.esy.es/tienda/index.php/login"><span class="l"><span clas="t"><h2>Cerrar sesion</h2> </span></a>
            </li>
             <li>
                 <a href="http://normiscom.esy.es/tienda/index.php/cliente"><span class="l"><span clas="t"><h2>Clientes</h2> </span></a>
            </li>
             <li>
                 <a href="http://normiscom.esy.es/tienda/index.php/proveedor"><span class="l"><span clas="t"><h2>Proveedores</h2></span></a>
            </li>
        </ul>
    </div> 
        
        <div id="add">
            
        <?php 
           
         foreach ($datos as $obj) {
          echo '<form action="'.$base.'cliente/modificar" method="post">
               <label> ID CLIENTE</label> <br/><input type="hiden" id_Municipio="idMunicipio" name="idMunicipio" value="'.$obj->getIdMunicipio().'"/></br>
                <label> NOMBRE Municipio </label><br/> <input type="text" required aria-required="true"  pattern="[A-Za-z]+" nombre="nombre" name="nombre" value="'.$obj->getNombreMunicipio().'"/></br>
                 
                            
                <input type="submit" name="guardar" value="Guardar"/>
                <button><a href="'.$base.'municipio/consulta">Cancelar</a></button></form>';            
            }            
        ?>
        </div>
    </body>
    
</html>

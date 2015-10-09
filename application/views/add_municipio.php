<form id="municipio" method="post" action="<?php echo $base ?>municipio/insert">
    <link rel="stylesheet" href="../css/miestilo.css" type="text/css" media="screen"/>
    <link href="/tienda/css/miestilo.css" rel="stylesheet" type="text/css"/>
     <h1>AGREGAR MUNICIPIO</h1>
    <div class="art-nav">
        <div class="l"></div>
        <div class="r"></div>
        <ul class="art-menu">
            
            <li class="active">
                <a href="http://normiscom.esy.es/tienda/index.php/login"><span class="l"><span clas="t"><h2>CERRAR SESION</h2> </span></a>
            </li>
             <li>
                 <a href="http://normiscom.esy.es/tienda/index.php/cliente"><span class="l"><span clas="t"><h2>CLIENTES</h2> </span></a>
            </li>
             <li>
                 <a href="http://normiscom.esy.es/tienda/index.php/proveedor"><span class="l"><span clas="t"><h2>PROVEEDORES</h2></span></a>
            </li>
        </ul>
    </div> 
    <body>
       
    <hgroup>
        <h1><?php echo $title_page ?></h1>
    </hgroup>
        <div id="add">
    <ul>
        <li>
            <label for="id"  >ID MUNICIPIO</label>
            <br/>
            
            <input type="text" id="id" name="id"
                   required aria-required="true" pattern="[0-9]+">
        </li>
        <li>
            <label for="nombre">NOMBRE MUNICIPIO:  </label>
            <br/>
            <input type="text" nombre="nombre" name="nombre"
                   required aria-required="true"  pattern="[A-Za-z]+">
        </li>
        </li>
        <li>
            <br/>
            <input type="submit" value="Agregar un municipio">
        </li>
    </ul>
        </div>
    </body>
</form>

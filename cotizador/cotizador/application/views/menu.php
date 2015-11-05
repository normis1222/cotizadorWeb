<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>Papelería Liz - Cotizador</title>

	<!-- Bootstrap Core CSS -->
	<link href="<?php echo base_url(); ?>assets/business_casual/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="<?php echo base_url(); ?>assets/business_casual/css/business-casual.css" rel="stylesheet">

	<!-- Fonts -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
	
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
<style type='text/css'>
body
{
	font-family: Arial;
	font-size: 14px;
}
a {
    color: blue;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
	text-decoration: underline;
}
</style>
</head>
<body>
	<div class="brand">Papelería Liz</div>
	<div class="address-bar">Cotizador Web</div>
	
        <!-- Navigation -->
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Navegar</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                    <a class="navbar-brand" href="<?php echo base_url('menu/customers_management')?>">Papelería Liz</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href='<?php echo site_url('menu/clientes')?>'>Clientes</a>
                        </li>
                        <li>
                            <a href='<?php echo site_url('menu/productos')?>'>Productos</a>
                        </li>
                        <li>
                            <a href='<?php echo site_url('menu/cotizaciones')?>'>Cotizaciones</a>
                        </li>
                        <li>
                            <a href='<?php echo site_url('menu/proveedores')?>'>Proveedores</a>
                        </li>
                        <li>
                            <a href='<?php echo site_url('menu/ordenes')?>'>Ordenes</a>
                        </li>
                        <li>
                            <a href='<?php echo site_url('menu/usuarios')?>'>Usuarios</a>
                        </li>
                        <li>
                            <a href='<?php echo site_url('menu/catusuarios')?>'>Admin</a>
                        </li>
                        <li>
                            <a href='<?php echo site_url('menu/salir')?>'>Salir</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
        </nav>
		
        <div class="container">
            <div class="row">
                <div class="box">
                    <?php echo $output; ?>
                </div>
            </div>
        </div>
		
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p>Papelería Liz - Cotizador Web</p>
                    </div>
                </div>
            </div>
        </footer>

</body>
</html>

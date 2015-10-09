<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Sistema Cotizador</title>
        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url(); ?>assets/bootstrap-3.3.2/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php echo base_url(); ?>assets/css/agency.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/ui-lightness/jquery-ui.css" type="text/css" media="screen"/>

        <!-- Custom Fonts -->
        <link href="<?php echo base_url(); ?>assets/font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    </head>

    <body id="page-top" class="index">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top">Sistema Cotizador</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#clientes">Clientes</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#productos">Productos</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#cotizaciones">Cotizaciones</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#proveedores">Proveedores</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#ordenes">Ordenes</a>
                        </li>

                        <?php if ($this->session->userdata('perfil') == 'administrador') { ?>
                            <li>
                                <a class="page-scroll" href="#usuarios">Usuarios</a>
                            </li>                            
                        <?php } ?>

                        <li>
                            <a class="page-scroll" href="login_controller/logout_ci">Salir</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

        <!-- Header -->
        <header>
            <div class="container">
                <div class="intro-text">
                    <div class="intro-lead-in">Bienvenido</div>
                    <div class="intro-heading">Sistema Cotizador</div>
                    <a href="#inventario" class="page-scroll btn btn-xl">Continuar</a>
                </div>
            </div>
        </header>

        <!-- Clientes -->
        <section id="clientes">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Clientes</h2>
                        <h3 class="section-subheading text-muted">Clientes de papelería Liz.</h3>
                    </div>
                </div>
            </div>
        </section>

        <!-- Productos -->
        <section id="productos" class="bg-light-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Productos</h2>
                        <h3 class="section-subheading text-muted">Productos que papelería Liz ofrece a sus clientes.</h3>
                    </div>
                </div>
            </div>
        </section>

        <!-- Cotizaciones -->
        <section id="cotizaciones">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Cotizaciones</h2>
                        <h3 class="section-subheading text-muted">Alta y seguimiento de cotizaciones.</h3>
                    </div>
                </div>
            </div>
        </section>

        <!-- Proveedores -->
        <section id="proveedores" class="bg-light-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Proveedores</h2>
                        <h3 class="section-subheading text-muted">Provedores de papelería Liz.</h3>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Ordenes de Compra -->
        <section id="ordenes" class="bg-light-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Ordenes de Compra</h2>
                        <h3 class="section-subheading text-muted">Alta y seguimiento de las ordenes de compra.</h3>
                    </div>
                </div>
            </div>
        </section>

        <!-- Usuarios -->
        <?php if ($this->session->userdata('perfil') == 'administrador') { ?>
            <section id="usuarios">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2 class="section-heading">Usuarios</h2>
                            <h3 class="section-subheading text-muted">Control de accesos</h3>
                        </div>
                    </div>

                    <div class="wrapper">
                        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="$('#usuarioModal').modal('show'); $('#accion').val('nuevo')">Nuevo</button>
                        <?php echo $this->table->generate(); ?>
                    </div>
                </div>
            </section>
        
            <?php
            if ($this->session->flashdata('usuario_no_disponible')) {
                ?>
                <div class="alert alert-danger">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <strong>¡Error!</strong> <?= $this->session->flashdata('usuario_no_disponible') ?>
                </div>
                <?php
            }
            ?>
        
        <?php } ?>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <span class="copyright">Sistema Cotizador 2015</span>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Formularios Modales -->

        <!-- Usuario Modal -->
        <div class="portfolio-modal modal fade" id="usuarioModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Usuarios</h2>
                                <p class="item-intro text-muted">Control de Accesos</p>

                                <?php
                                //$perfil = array('name' => 'perfil', 'placeholder' => 'Perfil', 'required' => '', 'class' => 'form-control input-lg clear-field', 'id' => 'tPerfil');
                                $username = array('name' => 'username', 'placeholder' => 'Usuario', 'required' => '', 'class' => 'form-control input-lg clear-field', 'id' => 'tUsuario');
                                $password = array('name' => 'password', 'placeholder' => 'Password', 'required' => '', 'class' => 'form-control input-lg clear-field', 'id' => 'tPassword');
                                //$attributes = array('role' => 'logins');
                                
                                $options = array(
                                                  'administrador'  => 'Administrador',
                                                  'consulta'    => 'Consulta'
                                                );
                                ?>

                                <?= form_open(base_url() . 'main_controller/agregar_usuario') ?>
                                <!--?= form_input($perfil) ?><p><= form_error('perfil') ?></p-->
                                <?= form_dropdown('perfil', $options, 'consulta', 'name="perfil" required class="form-control input-lg clear-field" id="tPerfil"') ?><p><?= form_error('perfil') ?></p>
                                <?= form_input($username) ?><p><?= form_error('username') ?></p>
                                <?= form_input($password) ?><p><?= form_error('password') ?></p>
                                <?= form_hidden('token', $token) ?>

                                <div class="container">
                                    <input type="submit" name="submit" value="Guardar" title="Guardar" class="btn btn-primary"></input>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                                    <input type="hidden" id="accion" name="accion" value="nuevo"></input>
                                    <input type="hidden" id="tId" name="tId" value="" class="clear-field"></input>
                                </div>

                                <?= form_close(); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- jQuery -->
        <script src="<?php echo base_url(); ?>assets/jquery-2.1.3/jquery-2.1.3.min.js"></script>


        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url(); ?>assets/bootstrap-3.3.2/js/bootstrap.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/classie.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/cbpAnimatedHeader.js"></script>

        <!-- Contact Form JavaScript -->
        <script src="<?php echo base_url(); ?>assets/js/jqBootstrapValidation.js"></script>
        <!--script src="<?php echo base_url(); ?>assets/js/contact_me.js"></script-->

        <!-- Custom Theme JavaScript -->
        <script src="<?php echo base_url(); ?>assets/js/agency.js"></script>

        <!-- Datatable JavaScript -->        
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>

        <!-- Creamos usuariosTable JavaScript -->
        <script type="text/javascript">
            $(document).ready(function () {
                var oTable = $('#big_table').dataTable({
                    "bProcessing": false,
                    "bServerSide": true,
                    "sAjaxSource": '<?php echo base_url(); ?>index.php/main_controller/usuarios',
                    "bJQueryUI": true,
                    "bPaginate": false,
                    "sPaginationType": "full_numbers",
                    "iDisplayStart ": 20,
                    "bLengthChange": false,
                    "bInfo": false,
                    "oLanguage": {
                        "sProcessing": "<img src='<?php echo base_url(); ?>assets/img/loader.gif'>"
                    },
                    "fnInitComplete": function () {
                        //oTable.fnAdjustColumnSizing();
                    },
                    'fnServerData': function (sSource, aoData, fnCallback)
                    {
                        $.ajax
                                ({
                                    'dataType': 'json',
                                    'type': 'POST',
                                    'url': sSource,
                                    'data': aoData,
                                    'success': fnCallback
                                });
                    }
                });
            });


            $("#big_table").delegate("tr", "click", function() {
                $("#tId").val($("td:eq(0)", this).text());
                $("#tPerfil").val($("td:eq(1)", this).text());
                $("#tUsuario").val($("td:eq(2)", this).text());
                $("#tPassword").val($("td:eq(3)", this).text());
            });

            
            $('#usuarioModal').on('hidden.bs.modal', function (e) {
                limpiarCampos();
            })
            
            function limpiarCampos() {
                $('.clear-field').val('');
            }
            
            function llenarCampos() {
                var cells = Array.prototype.slice.call(document.getElementById("big_table").getElementsByTagName("td"));
                for(var i in cells){
                    console.log("My contents is \"" + cells[i].innerHTML + "\"");
                }
            }
        </script>
    </body>

</html>

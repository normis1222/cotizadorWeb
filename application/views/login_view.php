<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=1,initial-scale=1,user-scalable=1" />
        <title>Sistema Cotizador</title>
        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bootstrap-3.3.2/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bootstrap-3.3.2/css/bootstrap-theme.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/styles.css" />
        
        <script src="<?php echo base_url(); ?>assets/jquery-2.1.3/jquery-2.1.3.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/bootstrap-3.3.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
        $username = array('name' => 'username', 'placeholder' => 'Usuario', 'required' => '', 'class' => 'form-control input-lg');
        $password = array('name' => 'password', 'placeholder' => 'Password', 'required' => '', 'class' => 'form-control input-lg');
        $submit = array('name' => 'submit', 'value' => 'Iniciar Sesión', 'title' => 'Iniciar sesión', 'class' => 'btn btn-lg btn-primary btn-block');
        $attributes = array('role' => 'login');
        ?>
        <section class="container">
            <section class="login-form">
                <?= form_open(base_url() . 'login_controller/', $attributes) ?>
                <div>
                    <img src="<?php echo base_url(); ?>assets/img/logo.png" width="100" />
                    <h3>Sistema Cotizador</h3>
                </div>
                <br>
                <?= form_input($username) ?><p><?= form_error('username') ?></p>
                <?= form_password($password) ?><p><?= form_error('password') ?></p>
                <?= form_hidden('token', $token) ?>
                <?php
                if ($this->session->flashdata('usuario_incorrecto')) {
                    ?>
                    <div class="alert alert-danger">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong>¡Error!</strong> <?= $this->session->flashdata('usuario_incorrecto') ?>
                    </div>
                    <?php
                }
                ?>
                <?= form_submit($submit) ?>
                <div>
                    <i>powered by <a href="#" class="powered-by">sGloria</a></i>
                </div>
                <?= form_close() ?>
            </section>
        </section>

    </body>
</html>
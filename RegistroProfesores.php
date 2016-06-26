<!doctype html>
<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <?php include 'inc/head_common.php'; ?>
</head>
<body>
<?php include 'inc/header.php'; ?>
<div class="wrapper container-fluid" id="contenido">
    <div class="container">
        <div class="row">
            <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <i>
                            <h3> Registro de docentes </h3>
                        </i>
                    </div>
                    <div class="panel-body">
                        <form id="regis" method="POST">
                            <div id="response"></div>   
                            <div class="input-group input-group-lg">
                            <span class="input-group-addon">
                            <i class="glyphicon glyphicon-user"></i>
                            </span>
                                <input id="Nombre" class="form-control transparent-input" type="text"
                                       placeholder="Nombre completo" required="" autocomplete="off" name="Nombre">
                            </div>
                            <br>
                            <div class="input-group input-group-lg">
                                <span class="input-group-addon">
                                <i class="fa fa-sign-language" aria-hidden="true"></i>
                                </span>
                                <input id="User" class="form-control transparent-input" type="text"
                                       placeholder="Nombre de usuario" required="" autocomplete="off" name="User">
                            </div>
                            <br>
                            <div class="input-group input-group-lg">
                                <span class="input-group-addon">
                                    <i class="fa fa-home" aria-hidden="true"></i>
                                    </span>
                                <input ="Dir" class="form-control transparent-input" type="text"
                                placeholder="Direccion" required="" autocomplete="off" name="Dir">
                            </div>
                            <br>
                            <div class="input-group input-group-lg">
                                <span class="input-group-addon">
                                 <i class="fa fa-mobile" aria-hidden="true"></i>
                                    </span>
                                <input ="Tel" class="form-control transparent-input" type="text"
                                placeholder="Telefono" required="" autocomplete="off" name="Tel">
                            </div>
                            <br>
                            <div class="input-group input-group-lg">
                                <span class="input-group-addon">
                                 <i class="fa fa-building" aria-hidden="true"></i>
                                    </span>
                                <input ="Facultad" class="form-control transparent-input" type="text"
                                placeholder="Facultad de procedencia" required="" autocomplete="off" name="Facultad">
                            </div>
                            <br>
                            <div class="input-group input-group-lg">
                                <span class="input-group-addon">
                                 <i class="fa fa-sort-numeric-asc" aria-hidden="true"></i>
                                    </span>
                                <input ="Mat" class="form-control transparent-input" type="text"
                                placeholder="Matrícula de docente" required="" autocomplete="off" name="Mat">
                            </div>

                            <br>
                            <div class="input-group input-group-lg">
                                <span class="input-group-addon">
                                 <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    </span>
                                <input ="correo" class="form-control transparent-input" type="text"
                                placeholder="Correo eléctronico" required="" autocomplete="off" name="correo">
                            </div>

                            <br>
                            <div class="input-group input-group-lg">
                                <span class="input-group-addon">
                                 <i class="fa fa-key" aria-hidden="true"></i>
                                    </span>
                                <input ="clave" class="form-control transparent-input" type="password"
                                placeholder="Clave de usuario" required="" autocomplete="off" name="clave">
                            </div>
                            <br>
                            <div class="input-group input-group-lg">
                                <span class="input-group-addon">
                                 <i class="fa fa-key" aria-hidden="true"></i>
                                    </span>
                                <input ="confirclave" class="form-control transparent-input" type="password"
                                placeholder="Confirmar clave de usuario" required="" autocomplete="off" name="confirclave">
                            </div>

                            <br>
                            <br>
                            <br>
                            <div class="form-group">
                                <input class="btn btn-success" type="submit" value="Enviar">
                                <a href="./menu_profesores.php">
                                    <input class="btn btn-success" type="submit" value="Regresar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'inc/footer.php'; ?>
<?php include('inc/footer_common.php'); ?>
</body>
</html>
<script>
    var root = './inc/';
</script>
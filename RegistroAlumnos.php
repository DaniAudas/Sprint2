<?php

?>
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
                            <h3> Registro de alumnos </h3>
                        </i>
                    </div>
                    <div class="panel-body">
                        <form id="regis" method="POST">
                            <div id="response"></div>
                            <div class="input-group input-group-lg">
                            <span class="input-group-addon">
                            <i class="glyphicon glyphicon-user"></i>
                            </span>
                                <input id="Nom" class="form-control transparent-input" type="text"
                                       placeholder="Nombre completo" required="" autocomplete="off" name="Nombre">
                            </div>
                            <br>
                            <div class="input-group input-group-lg">
                                <span class="input-group-addon">
                                <i class="fa fa-sign-language" aria-hidden="true"></i>
                                </span>
                                <input id="NomUsuario" class="form-control transparent-input" type="text"
                                       placeholder="Nombre de usuario" required="" autocomplete="off" name="NomUsuario">
                            </div>
                            <br>
                            <div class="input-group input-group-lg">
                                <span class="input-group-addon">
                                    <i class="fa fa-home" aria-hidden="true"></i>
                                    </span>
                                <input ="Direccion" class="form-control transparent-input" type="text"
                                placeholder="Direccion" required="" autocomplete="off" name="Direccion">
                            </div>
                            <br>
                            <div class="input-group input-group-lg">
                                <span class="input-group-addon">
                                 <i class="fa fa-mobile" aria-hidden="true"></i>
                                    </span>
                                <input ="Telefono" class="form-control transparent-input" type="text"
                                placeholder="Telefono" required="" autocomplete="off" name="Telefono">
                            </div>
                            <br>
                            <div class="input-group input-group-lg">
                                <span class="input-group-addon">
                                 <i class="fa fa-building" aria-hidden="true"></i>
                                    </span>
                                <input ="Carrera" class="form-control transparent-input" type="text"
                                placeholder="Carrera" required="" autocomplete="ing.cs" name="Carrera">
                            </div>
                            <br>
                            <div class="input-group input-group-lg">
                                <span class="input-group-addon">
                                 <i class="fa fa-sort-numeric-asc" aria-hidden="true"></i>
                                    </span>
                                <input ="Matricula" class="form-control transparent-input" type="text"
                                placeholder="Matrícula" required="" autocomplete="off" name="Matricula">
                            </div>

                            <br>
                            <div class="input-group input-group-lg">
                                <span class="input-group-addon">
                                 <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    </span>
                                <input ="email" class="form-control transparent-input" type="text"
                                placeholder="email" required="" autocomplete="off" name="email">
                            </div>

                            <br>
                            <div class="input-group input-group-lg">
                                <span class="input-group-addon">
                                 <i class="fa fa-key" aria-hidden="true"></i>
                                    </span>
                                <input ="contraseña" class="form-control transparent-input" type="password"
                                placeholder="contraseña" required="" autocomplete="off" name="contraseña">
                            </div>
                            <br>
                            <div class="input-group input-group-lg">
                                <span class="input-group-addon">
                                 <i class="fa fa-key" aria-hidden="true"></i>
                                    </span>
                                <input ="confircontra" class="form-control transparent-input" type="password"
                                placeholder="Confirmar contraseña" required="" autocomplete="off" name="confircontra">
                            </div>

                            <br>
                            <br>
                            <br>
                            <div class="form-group">
                                <input class="btn btn-success" type="submit" value="Enviar">
                                <a href="./menu_alumnos.php">
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

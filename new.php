<?php
/**
 * Created by PhpStorm.
 * User: Dani
 * Date: 14/06/2016
 * Time: 10:32 AM
 */
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
            <?php $cont = 1; for($i = 0; $i <= 5; $i++){ ?>
                <?php for($j = 0; $j <= 9; $j++){ ?>
            <div class="col-xs-4 col-sm-3 col-md-2 col-lg-1 computer" data-id="computer_<?php echo $cont;?>">
                <a class="thumbnail">
                    <?php echo '<p>'.$cont.'</p><img src="img/gray.png">'; ?>
                </a>
            </div>
            <?php $cont++; }}?>
        </div>
    </div>
    <div id="contextMenu" class="dropdown clearfix">
        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu"
            style="display:block;position:static;margin-bottom:5px;">
            <li><h5 class="headerMenu"></h5></li>
            <li class="divider"></li>
            <li>
                <a tabindex="-1">
                    <div style="display: table">
                        <div class="icon-menu">
                            <img src="img/icon-mini-red.png">
                        </div>
                        <div class="icon-menu-txt">
                            Dañada
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a tabindex="-1">
                    <div style="display: table">
                        <div class="icon-menu">
                            <img src="img/icon-mini-yellow.png">
                        </div>
                        <div class="icon-menu-txt">
                            En reparación
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a tabindex="-1">
                    <div style="display: table">
                        <div class="icon-menu">
                            <img src="img/icon-mini-green.png">
                        </div>
                        <div class="icon-menu-txt">
                            Disponible
                        </div>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</div>
<?php include 'inc/footer.php'; ?>
<?php include('inc/footer_common.php'); ?>
</body>
</html>
<script>
    var root = './inc/';
</script>

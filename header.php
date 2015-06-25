<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php include_once 'function.php'; get_header();
    if(isset($_GET["logout"])){
        logout();
    }
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php out(get_variable("sitename"));?></title>    
        <meta name="viewport" content="width=device-width" />

        <link rel="stylesheet" href="style/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="style/ihover.css">
        <link rel="stylesheet" href="style/bootstrap/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="style/style.css">

        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-ui/jquery-ui.js"></script>
        <script src="style/bootstrap/js/bootstrap.min.js"></script>

        <link rel="apple-touch-icon" sizes="57x57" href="image/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="image/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="image/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="image/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="image/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="image/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="image/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="image/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="image/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="image/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="image/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="image/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="image/favicon-16x16.png">
        <link rel="manifest" href="image/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="image/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">            
    </head>
    <body>
        <div class="container-fluid">
            
                <nav class="navbar navbar-default navbar-fixed-top">
                 <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                      <a class="navbar-brand" href="#">
                          <img alt="Brand" src="image/banner.png" height="100%">
                      </a>
                    </div>                     
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">                          
                        <?php if(is_login()){?>
                            <p class="navbar-text navbar-right">Bienvenido <a href="#" class="navbar-link"><?php echo get_userdata("name");?></a>&nbsp;&nbsp;<a href="?logout=ok" class="navbar-link">Salir</a></p>                            
                        <?php }else{?>
                            <ul class="nav navbar-nav navbar-right">                                    
                                <li><a href="#" class="navbar-link">Iniciar sesión</a></li>
                                <li><a href="#" class="navbar-link">Registrame</a></li>                                    
                            </ul>
                        <?php }?>

                    </div>
                </div>
                </nav>                  
        </div>             
        <div class="container">
        
         
    
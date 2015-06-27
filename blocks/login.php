<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '/../function/fblogin_logic.php'; 

?>
<div id="login_canvas" class="container-fluid">
    <h3>¡Bienvenido!</h3>
    <div id="login_block" class="row">
        <div class="login_part login-mail col-md-6">
            <h4>Ingresar con tu cuenta de correo</h4>
            <form class="form-horizontal">
              <div class="form-group">               
                  <input type="email" class="form-control" id="email" placeholder="E-mail">                
              </div>
              <div class="form-group">
                  <input type="password" class="form-control" id="password" placeholder="Contraseña">            
              </div>
              <div class="form-group" align="center">
                  <button type="submit" class="btn btn-success"><span class="glyphicon" aria-hidden="true"><img src="image/user.png" width="35px"></span> Ingresar</button>                
              </div>
            </form>                
        </div>
        <div class="login_part login-social col-md-6">
            <h4>Cuentas de redes sociales</h4>
            <a id="loginfb" class="btn btn-primary" href="<?php echo $helper->getLoginUrl();  ?>"><span class="glyphicon" aria-hidden="true"><img src="image/object.png" width="35px"></span>Ingresar con Facebook</a>
            <br><br>
            <a id="logingp" class="btn btn-danger" href=""><span class="glyphicon" aria-hidden="true"><img src="image/object.png" width="35px"></span> Ingresar con Google</a>
        </div>
    </div>
</div>
<?php 
    if(!isset($_SESSION['facebook'])){ ?>
        <a id="loginfb" class="btn btn-default" href="<?php echo $helper->getLoginUrl();  ?>">Login FB</a>
    <?php }else{?>
        <h3>Bienvenido</h3>
        <?php print_array($facebookuser);?>
    <?php }?>


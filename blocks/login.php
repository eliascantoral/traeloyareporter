<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '/../function/login_logic.php'; 
?>
<?php 
    if(!isset($_SESSION['facebook'])){ ?>
        <a id="loginfb" class="btn btn-default" href="<?php echo $helper->getLoginUrl();  ?>">Login FB</a>
    <?php }else{?>
        <h3>Bienvenido</h3>
        <?php print_array($facebookuser);?>
    <?php }?>


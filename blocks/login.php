<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '/../function/fblogin_logic.php'; 

?>
        <div class="container-fluid">
            <div id="main-wrapper" class="container-fluid row" align="center">				
                <div id="login_background">
                        <h3>Bienvenido</h3>
                        <p>Por favor, ingrese su usuario y contraseña.</p>
                        <form class="form-horizontal" method="POST" action="https://n95.network-auth.com/splash/login?mauth=MMW4Eodr-yg-NjwKVp8xY9ulCl288vPJoNqeiEVmPWV3Afc4Kidhv2merlaFs4-3DB31wdcHbjtewol251RKPrTKrhcI73C0d33umvkwx45T6ChACk3kJA0cD3UzNzMcAQemsR9m5mkLTKjBSUD2MHZwT0CWOZ9bSLIyHGbaIFqvTRrSbjIZmSRmeHzmlkshGBbCKDtvDI1tE&continue_url=http://www.google.com/">
                          <input type="hidden" name="success_url" value="http://www.google.com/" /> 
                          <div class="form-group">            
                                <div class="col-sm-12">
                                  <input type="text" class="form-control" id="username" name="username" placeholder="Usuario" autofocus>
                                </div>
                          </div>
                          <div class="form-group">            
                                <div class="col-sm-12">
                                  <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
                                </div>
                          </div>          
                          <div class="form-group">
                                <div class="col-sm-12" align='right'>
                                  <button type="submit" class="btn btn-danger">Ingresar</button>
                                </div>
                          </div>
                        </form>
                </div>
</div>
            <script>
                $( document ).ready( function(){
                                 // $( document ).ready( handler )
                    
                    
                }) );
            </script>
            
<style>
    #login_background{
        min-height: 200px;
        height: auto;
        width: 300px;
        padding: 20px;
        color: #FFF !important;
        border-radius: 5px 5px 5px 5px;
        -moz-border-radius: 5px 5px 5px 5px;
        -webkit-border-radius: 5px 5px 5px 5px;
        border: 0px solid #000000;    
        background: rgba(0,0,0,0.7);
        margin-top: 25px;
        margin-left: 50%-150px;
    }    
    
</style>
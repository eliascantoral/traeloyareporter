<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'header.php';
    if(!is_login()){
        include 'login.php';
    }else{
        include 'home.php';
    }
    
include 'footer.php';
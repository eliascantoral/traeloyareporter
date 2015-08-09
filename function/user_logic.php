<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function get_userdata($data){
    if(isset($_SESSION[get_variable("prfx")."_".$data]))
        return $_SESSION[get_variable("prfx")."_".$data];
    return ":(";
}
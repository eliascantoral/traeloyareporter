<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function testconn(){
    include 'backend/backend_mssql.php';
    $backend = new mssqlbackend();
    return $backend->testconn();
}
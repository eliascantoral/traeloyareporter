<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//define('FACEBOOK_SDK_V4_SRC_DIR', 'function/src/Facebook/');
require __DIR__ . '/../function/facebook/autoload.php';

// Make sure to load the Facebook SDK for PHP via composer or manually



use Facebook\FacebookSession;
// add other classes you plan to use, e.g.:
use Facebook\FacebookRequest;
use Facebook\GraphUser;
use Facebook\FacebookRequestException;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookResponse;
use Facebook\GraphObject;


FacebookSession::setDefaultApplication('972032202848757', '991be0043d6e266a8a80bd2357f86bc0');
$helper = new FacebookRedirectLoginHelper('http://localhost/games/quimica/index.php');

try {
  $session = $helper->getSessionFromRedirect();
  if($session){
      $_SESSION['facebook'] = $session->getToken();      
  }
} catch(FacebookRequestException $ex) {
  // When Facebook returns an error
} catch(\Exception $ex) {
  // When validation fails or other local issues
}

if(isset($_SESSION['facebook'])){
    $session = new FacebookSession($_SESSION['facebook']);
// Add `use Facebook\FacebookRequest;` to top of file
    $request = new FacebookRequest($session, 'GET', '/me');
    $response = $request->execute();
    $graphObjectClass = $response->getGraphObject(GraphUser::className()); 
    $facebookuser = $graphObjectClass;
}
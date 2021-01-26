<?php
session_start();
require_once '../functions.php';
$action = getParam('action','');
require '../model/veicoli_usati.php';
$params = $_GET;
if(!empty($_SESSION['message'])){
    $message = $_SESSION['message'];
    $alertType = $_SESSION['success'] ? 'success':'danger';
    $iconType = $_SESSION['success'] ? 'check':'exclamation-triangle';
    require 'view/messageDelete.php';
    unset($_SESSION['message'],$_SESSION['success']);

  }
switch ($action){

    case 'ab_tr':
        
        $data= $_REQUEST;
        $res=abTestride($data);

        echo json_encode($res);
    break;   
   }
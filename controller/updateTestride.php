<?php
session_start();
require_once '../functions.php';
$action = getParam('action','');
require '../model/test_ride.php';
$params = $_GET;
if(!empty($_SESSION['message'])){
    $message = $_SESSION['message'];
    $alertType = $_SESSION['success'] ? 'success':'danger';
    $iconType = $_SESSION['success'] ? 'check':'exclamation-triangle';
    require 'view/messageDelete.php';
    unset($_SESSION['message'],$_SESSION['success']);

  }
switch ($action){

    case 'delete':
        
        unset($params['action']);
        unset($params['id']);
        
        $queryString = http_build_query($params);

        $id= getParam('id', 0);
        $res = delete($id);
        $message = $res ? 'Record Eliminato' : 'Errore Eliminazione Record!';
        $_SESSION['message'] = $message;
        $_SESSION['success'] = $res;
        header('Location:../test_ride.php?'.$queryString);
        break;
    case 'saveTestridefast':
        $data = $_POST;
       // var_dump($pathAlle);
       //die;
        $firma = $data['signCode'];
        $idfirma = $data['id_cliente'];
        $firma = substr($firma,strpos($firma,",")+1);
        $firma = base64_decode($firma);
        $path = $_SERVER['DOCUMENT_ROOT'].$pathAlle.'docs/testride/sign/';        
        $res = saveTestridefast($data); 
        $message = $res ? 'Record Inserito' : 'Errore Inserimento Record!';
        $_SESSION['message'] = $message;
        $_SESSION['success'] = $res;
        //var_dump($res);
        $file = $path.$idfirma.'_sig_cons_tr_'.$res.'.png';
        file_put_contents($file, $firma);
        header('Location:../test_ridePage.php?id='.$res);
    break;
    case 'savePrenotazione':
        $data = $_POST;
        $res=saveTestride($data);
        header('Location:../index.php');
        


    break; 
    
    case 'storeTestride':
        $data = $_POST;
        //var_dump($_POST);die;
        $firma = $_POST['signCode'];
        $id = intval(getParam('id',0));
        if((strlen($firma))<3000){
            $res = storeTestride($data,$id); 
            $message = $res ? 'Record Aggiornato' : 'Errore Aggiornamento Record!';

            //var_dump(strlen($firma));
            //die;
            $_SESSION['message'] = $message;
            $_SESSION['success'] = $res;
            header('Location:../test_ridePage.php?id='.$id);    
        }else{  
        $idfirma = $_POST['id_cliente'];

        $firma = substr($firma,strpos($firma,",")+1);
        $firma = base64_decode($firma);
        //var_dump($firma);die;
        $path = '/docs/testride/sign/';
        
        //var_dump($id);die;
        $res = storeTestride($data,$id); 
        $message = 'Record Aggiornato, Firma Inserita' ;

        //var_dump($res);
        //die;
        $_SESSION['message'] = $message;
        $_SESSION['success'] = $res;
        $file = $path.$idfirma.'_sig_ricons_tr_'.$id.'.png';
        file_put_contents($file, $firma);
        header('Location:../test_ridePage.php?id='.$id);
        }
    break;
    
    case 'getkm':
       $targa = $_REQUEST['id_veicolo'];
       $res= getKM($targa);
        
       echo json_encode($res);
        
    break;    

    case 'getEvent':
      $res = getEvent();   
      echo json_encode($res);
    break;

    case 'checkEvent':

        $data =$_REQUEST;
        $res=checkEvent($data);
        if($res){

            $json= array(
                    'da'=> date("d/m", strtotime($res['data_pren'])),
                    'daora' => date("H:i", strtotime($res['data_pren'])),
                    'a'=> date("d/m", strtotime($res['data_ricons'])),
                    'aora' => date("H:i", strtotime($res['data_ricons'])),
                    'veicolo'=>$res['id_veicolo']


            );
            echo json_encode($json);
        }else{
            echo 0;
        }
        
    break;
   }
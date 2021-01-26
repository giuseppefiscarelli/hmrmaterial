<?php
if(!empty($_SESSION['message'])){
    $message = $_SESSION['message'];
    $alertType = $_SESSION['success'] ? 'success':'danger';
    $iconType = $_SESSION['success'] ? 'check':'exclamation-triangle';
    require 'view/messageDelete.php';
    unset($_SESSION['message'],$_SESSION['success']);

  }
                  
        $orderBy = getParam('orderBy', 'id'); 
        $search2 = getParam('search2','');
        $search3 = getParam('search3','');
        $search4 = getParam('search4', '');
        $search5 = getParam('search5','');
        $search6 = getParam('search6','');
        $to1 = date("Y-m-d");
        $to2 = date("Y-m-d");
          $params =[
            'orderBy' => $orderBy,
            'orderDir'=> $orderDir,
            'recordsPerPage' =>$recordsPerPage,
            'search1' => $search1,
            'search2' => $search2,
            'search3' => $search3,
            'search4' => $search4,
            'search5' => $search5,
            'search6' => $search6,
            'page' => $page
          ];
           // var_dump($params);
          $orderByParams = $orderByNavigatorParams = $params;
          unset($orderByParams['orderBy']);
          unset($orderByParams['orderDir']);
          unset($orderByNavigatorParams['page']);
          $orderByQueryString = http_build_query($orderByParams,'&amp;');
          $navOrderByQueryString = http_build_query($orderByNavigatorParams,'&amp;');

          $totalList= countClienti($params);
          $numPages= ceil($totalList/$recordsPerPage);
          $clienti = getClienti($params);
         //var_dump($clienti);
          require_once 'view/clienti/clienti_list.php';
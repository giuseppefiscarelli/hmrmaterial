<?php
  require_once 'connection.php';

  function verifyLogin($token, $email, $password){
    require_once 'model/user.php';

    $result=[
      'message' => 'Login corretto',
      'success' => true
    ];

    if($token !== $_SESSION['csrf']){

      $result=[
        'message' => 'Token Mismatch',
        'success' => false
      ];

      return $result;
    }

    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    if(!$email){
      $result=[
        'message' => 'Email Errata',
        'success' => false
      ];
      return $result;
    }

    
    if(strlen($password)<6){
      $result=[
        'message' => 'Password Troppo Corta',
        'success' => false
      ];
      return $result;
    }

    $resEmail = getUserbyEmail($email);
    if(!$resEmail){
      $result=[
        'message' => 'User not Found',
        'success' => false
      ];
    return $result;

    }
      
    if(!password_verify($password, $resEmail['password'])){
      $result=[
        'message' => 'Password errata',
        'success' => false
      ];
      return $result;  
    }

    $result['user'] = $resEmail;
    return $result;
  }

  function isUserLoggedin(){

    return $_SESSION['loggedin'] ?? false;
  }

  function getUserLoggedInFullname(){
    return $_SESSION['userData']['username'] ?? '';
  }

  function getUserRole(){
    return $_SESSION['userData']['roletype'] ?? '';
  }

  function getAmbiente(){
    return $_SESSION['userData']['ambiente'] ?? '';
  }
  
  function isUserAdmin(){
    return getUserRole() === 'admin';
  }

  function isUserSuadmin(){
    return getUserRole() === 'suadmin';
  }

  function isUserUser(){
    return getUserRole() === 'user';
  }
  
  function isUserEditor(){
    return getUserRole() === 'editor';
  }


  function getUserLoggedInName(){

    $extName = $_SESSION['userData']['cognome'].' '.$_SESSION['userData']['nome'];
    return $extName ?? '';
  }

  function getUserLoggedEmail(){
    return $_SESSION['userData']['email'] ?? '';
  }

  function getUserLogo(){
    return $_SESSION['userData']['logoazienda'] ?? '';
  }
  

  function getConfig($param, $default = null){

      $config = require 'config.php';

      return array_key_exists($param, $config) ? $config[$param] : $default;
  }

  function getUsers( array $params = []){

      /**
       * @var $conn mysqli
       */

          $conn = $GLOBALS['mysqli'];

          $orderBy = array_key_exists('orderBy', $params) ? $params['orderBy'] : 'id';
          $orderDir = array_key_exists('orderDir', $params) ? $params['orderDir'] : 'ASC';
          $limit = (int)array_key_exists('recordsPerPage', $params) ? $params['recordsPerPage'] : 10;
          $page = (int)array_key_exists('page', $params) ? $params['page'] : 0;
          $start =$limit * ($page -1);
          if($start<0){
            $start = 0;
          }
          $search1 = array_key_exists('search1', $params) ? $params['search1'] : '';
          $search1 = $conn->escape_string($search1);
          if($orderDir !=='ASC' && $orderDir !=='DESC'){
            $orderDir = 'ASC';
          }
          $records = [];

          

          $sql = 'SELECT * FROM users';
          if ($search1){
            $sql .=" WHERE username LIKE '%$search1%' ";
            $sql .=" OR roletype LIKE '%$search1%' ";
          }
          $sql .= " ORDER BY $orderBy $orderDir LIMIT $start, $limit";
          

          $res = $conn->query($sql);
          if($res) {

            while( $row = $res->fetch_assoc()) {
                $records[] = $row;
                
            }

          }

      return $records;

  }
  function statusUsers($status,$user){

    /**
     * @var $conn mysqli
     */

        $conn = $GLOBALS['mysqli'];

               
        $records = [];

        

        $sql = 'UPDATE users SET';
        $sql .= " status = '$status'";
        $sql .=" WHERE username = '$user' ";
          
        

        $res = $conn->query($sql);
        
      
      if($res ){
        $result =  $conn->affected_rows;
        
      }else{
        $result -1;  
      }
    return $result;

  }

  function countUsers( array $params = []){

    /**
     * @var $conn mysqli
     */

        $conn = $GLOBALS['mysqli'];

        $orderBy = array_key_exists('orderBy', $params) ? $params['orderBy'] : 'id';
        $orderDir = array_key_exists('orderDir', $params) ? $params['orderDir'] : 'ASC';
        $limit = (int)array_key_exists('recordsPerPage', $params) ? $params['recordsPerPage'] : 10;
        $search1 = array_key_exists('search1', $params) ? $params['search1'] : '';
        $search1 = $conn->escape_string($search1);
        if($orderDir !=='ASC' && $orderDir !=='DESC'){
          $orderDir = 'ASC';
        }
        $totalUser = 0;

        

        $sql = 'SELECT COUNT(*) as totalUser FROM users';
        if ($search1){
          $sql .=" WHERE username LIKE '%$search1%' ";
          $sql .=" OR roletype LIKE '%$search1%' ";
        }
        

        $res = $conn->query($sql);
        if($res) {

         $row = $res->fetch_assoc();
         $totalUser = $row['totalUser'];
        }

    return $totalUser;

  }
  

  function getParam ($param, $default = null){

    return !empty($_REQUEST[$param])? $_REQUEST[$param]: $default;
  
  }

  function getMenu($ambMenu){

    /**
     * @var $conn mysqli
     */

        $conn = $GLOBALS['mysqli'];

        
        $records = [];

        
        $sql = "SELECT * FROM sidebar WHERE menu = 'main' and ambiente = '$ambMenu' ORDER BY posizione ASC";
        

        $res = $conn->query($sql);
        if($res) {

          while( $row = $res->fetch_assoc()) {
              $records[] = $row;
              
          }

        }

    return $records;

  }
  function getSubMenu1($subParMenu){

    /**
     * @var $conn mysqli
     */

        $conn = $GLOBALS['mysqli'];
      
        
        $records = [];

        
        $sql = "SELECT * FROM sidebar WHERE menu = '$subParMenu' AND sub2 = 0";
        

        $res = $conn->query($sql);
        if($res) {

        while( $row = $res->fetch_assoc()) {
            $records[] = $row;
              
        }

        }

    return $records;

  }
  
  function checkAuthPage($authPage,$authThisPage){

    /**
     * @var $conn mysqli
     */

        $conn = $GLOBALS['mysqli'];

        
        $records = [];

        
        $sql = "SELECT * FROM sidebar WHERE ambiente = '$authPage' AND funzione = '$authThisPage'";
        

        $res = $conn->query($sql);
        if($res) {

          while( $row = $res->fetch_assoc()) {
              $records[] = $row;
              
          }

        }

    return $records;

  }
  
  function tabCodifica($tab,$k,$v){

    /**
     * @var $conn mysqli
     */

    $conn = $GLOBALS['mysqli'];

        
    $des = 0;

    
    $sql = "SELECT descrizione as des FROM tab_codifica WHERE tabella = '$tab' AND campo = '$k' and codifica = '$v'";
    //var_dump($sql);

    $res = $conn->query($sql);
    if($res) {

     $row = $res->fetch_assoc();
     $des = $row['des'];
    }

   return $des;

  }
  function tabDecodifica($tab,$k){

    /**
     * @var $conn mysqli
     */

    $conn = $GLOBALS['mysqli'];

        
    $records = [];

    
    $sql = "SELECT * FROM tab_codifica WHERE tabella = '$tab' AND campo = '$k'";
    //var_dump($sql);

  
    $res = $conn->query($sql);
    if($res) {

      while( $row = $res->fetch_assoc()) {
        $records[] = $row;
            
      }

      }

    return $records;

  }
  function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
  }
  function getComune($id){

    $conn = $GLOBALS['mysqli'];
        $des=0;
        $sql ="SELECT comune as des FROM tab_comuni WHERE codcata = '$id'";
        //echo $sql;
       
            
        $res = $conn->query($sql);
        if($res) {
    
         $row = $res->fetch_assoc();
         $des = $row['des'];
        }
    
       return $des;

  }

  function countNotifiche(){

    /**
     * @var $conn mysqli
     */

    $conn = $GLOBALS['mysqli'];

    $total = 0;
    $user = $_SESSION['userData']['username'];
    

    $sql = "SELECT COUNT(*) as total FROM notifiche  WHERE a = '$user' AND stato = 'N' ";
    //echo $sql;
    

    $res = $conn->query($sql);
    if($res) {

    $row = $res->fetch_assoc();
    $total = $row['total'];
    }

    return $total;


  }
  function getNotifiche(){

    /**
     * @var $conn mysqli
     */

      $conn = $GLOBALS['mysqli'];
    
      
      $records = [];
      $user = $_SESSION['userData']['username'];
      
      $sql = "SELECT * FROM notifiche WHERE a = '$user' AND stato = 'N' ORDER BY id DESC limit 5";
      

      $res = $conn->query($sql);
      if($res) {

      while( $row = $res->fetch_assoc()) {
          $records[] = $row;
            
      }

      }

    return $records;

  }

  function getNomeuser($username){
    /**
   * @var $conn mysqli
   */
        $conn = $GLOBALS['mysqli'];

        $amb = $_SESSION['userData']['ambiente'];
        $az = $_SESSION['userData']['azienda'];
        $fl = $_SESSION['userData']['filiale'];
        $result = [];

        

        $sql = "SELECT * FROM users WHERE username = '$username'";
        
       
        

        $res = $conn->query($sql);
        if($res && $res->num_rows){
            $result = $res->fetch_assoc();
            
        }
    return $result;

  }
 
  
  function getTitle(){

    /**
     * @var $conn mysqli
     */

    $conn = $GLOBALS['mysqli'];

    $funzione = basename($_SERVER['PHP_SELF']);   
    $des = 0;

    
    $sql = "SELECT nome as des FROM sidebar WHERE funzione = '$funzione'";
    //var_dump($sql);

    $res = $conn->query($sql);
    if($res) {

     $row = $res->fetch_assoc();
     $des = $row['des'];
    }

   return $des;

  }

  function getMenuActive($progName,$ambMenu){

    /**
     * @var $conn mysqli
     */

        $conn = $GLOBALS['mysqli'];

        
        $records = [];

        
        $sql = "SELECT * FROM sidebar WHERE funzione = '$progName' and ambiente = '$ambMenu'";
        //var_dump($sql);die;

        $res = $conn->query($sql);
        if($res) {

          while( $row = $res->fetch_assoc()) {
              $records[] = $row;
              
          }

        }

    return $records;

  }
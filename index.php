<?php
session_start();
require_once 'functions.php';
//$pagTitle = getTitle();
if(!isUserLoggedin()){

  header('Location:login.php');
  exit;
}

$authPage = $_SESSION['userData']['ambiente'];
$authThisPage =basename($_SERVER['PHP_SELF']);


require_once 'headerInclude.php';
?>
 <div class="content" style="background-image: url(images/6.jpg);background-size:cover;background-attachment: fixed;">
        <div class="container-fluid">
          <!-- your content here -->
       
 <!--Start Dashboard Content-->	
  

    <?php
    //var_dump($submenu1);
   
   

    
    
	//  if(!isUserSuadmin()){
   //   if(!checkAuthPage($authPage,$authThisPage)){
      
   //     require_once 'view/template/403.php' ;
    //
   //     }
  
   //   }
    //  else{		  
	  
		require_once 'controller/displayHome.php' ;
	  
	 // }	

	?>


        </div>
 </div> 
 <!--End Dashboard Content-->

<?php
    require_once 'view/template/footer.php';
?>

 
 
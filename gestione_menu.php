<?php
session_start();
require_once 'functions.php';

if(!isUserLoggedin()){

  header('Location:login.php');
  exit;
}
require_once 'model/menu.php';
$updateUrl = 'menuUpdate.php';
$deleteUrl = 'controller/updateMenu.php';

require_once 'headerInclude.php';
?>
<div class="content" style="background-image: url(images/6.jpg);background-size:cover;background-attachment: fixed;">
        <div class="container-fluid">
          <!-- your content here -->

    
	   
     </div>

    <?php
    
    $authPage = $_SESSION['userData']['ambiente'];
	  $authThisPage =basename($_SERVER['PHP_SELF']);
	  
	  if(!checkAuthPage($authPage,$authThisPage)){
		
		require_once 'view/403.php' ;
		
	  }else{	  
	  
		require_once 'controller/displayMenu.php' ;
	   
	  }	

	?>


    
 
</div>
 </div> 
 <!--End Dashboard Content-->

<?php
    require_once 'view/template/footer.php';
?>
<script type="text/javascript">
  
</script>


    </body>
</html>    

<?php
session_start();
require_once 'functions.php';
$pagTitle = getTitle();
if(!isUserLoggedin()){

  header('Location:login.php');
  exit;
}
require_once 'model/veicoli_usati.php';
$updateUrl = 'veicoli_usatiUpdate.php';
$deleteUrl = 'controller/updateVeicoli_usati.php';
$pageShowUrl = 'veicoli_usatiPage.php';
$authPage = $_SESSION['userData']['ambiente'];
$authThisPage =basename($_SERVER['PHP_SELF']);
require_once 'headerInclude.php';
?>
<div class="content" style="background-image: url(images/5.jpg);background-size:cover;background-attachment: fixed;">
        <div class="container-fluid">
          <!-- your content here -->
        

    <?php
    
   
	  if(!checkAuthPage($authPage,$authThisPage)){
		
		require_once 'view/403.php' ;
		
	  }else{	  
	  
		require_once 'controller/displayVeicoli_usati.php' ;
	   
	  }	
   // var_dump(basename($_SERVER['PHP_SELF']));
	?>


    
</div>
      </div>   
     
<!--End Dashboard Content-->

<?php
    require_once 'view/template/footer.php';
?>
<script type="text/javascript">

function ab_teride(a,id){
   
 // swal('ok');
   
   if (a.checked) {
   //   if(a = checked){
       check = "S";
       
   //blah blah
}else{
  check = "N";
}

           $.ajax({
         url:'controller/updateVeicoli_usati.php?action=ab_tr',
         type:"POST",
         data: {ab_testride:check,id:id},
             dataType: 'json',
             success:function(response){
               console.log(response)
               if (response ==1){
                 swal('Veicolo Abilitato al test Ride');
               }
               else{
                swal('Veicolo Disabilitato al test Ride');
               }
           
         }  
       });


};
</script>


    </body>
</html>    
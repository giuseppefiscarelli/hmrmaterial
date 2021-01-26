
<?php
session_start();
require_once 'functions.php';
$pagTitle = getTitle();
if(!isUserLoggedin()){

  header('Location:login.php');
  exit;
}
require_once 'model/test_ride.php';
$updateUrl = 'test_rideUpdate.php';
$deleteUrl = 'controller/updateTestride.php';
$pageShowUrl = 'test_ridePage.php';
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
	  
		require_once 'controller/displayTestride.php' ;
	   
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
  function allowNumbersOnly(e){
        code =(e.which) ? e.which : e.keyCode;
  
        if (code >31 && (code< 44 || code > 57 ) ){
            e.preventDefault();
        }
        
    };

   
</script>

<script type="text/javascript">
  function prtPdf() {
   
    $from = $('#from1').val();
    $to = $('#to1').val();
    $type = 'P';
	  var url = 'report/testride/reportlist.php?from='+$from+'&to='+$to+'&type='+$type;
	  window.open(url,"Stampa");
    
   };
   function prtPdf2() {
    
   $from = $('#from2').val();
   $to = $('#to2').val();
   $type = 'E';
   var url = 'report/testride/reportlist.php?from='+$from+'&to='+$to+'&type='+$type;
   window.open(url,"Stampa");
   
  };
  function prtPdf3() {
    
    $from = $('#from2').val();
    $to = $('#to2').val();
    
    $search2 =$('#search2').val();
    $search3 =$('#search3').val();
    $search4 =$('#search4').val();
    $search5 =$('#search5').val();
    $search6 =$('#search6').val();

    $type = 'A';
    var url = 'report/testride/reportlist.php?type=&search2='+$search2+'&search3='+$search3+'&search4='+$search4+'&search5='+$search5+'&search6='+$search6;
    window.open(url,"Stampa");
    
   };
</script>
    </body>
</html>    
<?php
session_start();
require_once 'functions.php';

if(!isUserLoggedin()){

  header('Location:login.php');
  exit;
}
require_once 'model/anagr_cli.php';
$updateUrl = 'anagr_cliUpdate.php';
$deleteUrl = 'controller/updateAnagr_cli.php';
$pageUrl = 'anagr_cliPage.php';

require_once 'headerInclude.php';
?>
<style>

  a:not([href]):not([tabindex]) {
    color: inherit;
    text-decoration: none; }
    a:not([href]):not([tabindex]):hover, a:not([href]):not([tabindex]):focus {
      color: inherit;
      text-decoration: none;
    background-color:lightgray; 
    cursor: pointer;
    box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgb(97 97 97 / 40%);}
    a:not([href]):not([tabindex]):focus {
      outline: 0; }
      .dropdown-menu .dropdown-item:hover, .dropdown-menu .dropdown-item:focus, .dropdown-menu a:hover, .dropdown-menu a:focus, .dropdown-menu a:active {
        box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgb(97 97 97 / 40%);
      background-color: lightgray;
      color: inherit;
      cursor: pointer;
  }
</style>
 <!--Start Dashboard Content-->	
 <div class="content" style="background-image: url(images/6.jpg);background-size:cover;background-attachment: fixed;">
    <div class="container-fluid">
    
	   
     

    <?php
    if(!empty($_SESSION['message'])){
      $message = $_SESSION['message'];
      $alertType = $_SESSION['success'] ? 'success':'danger';
      $iconType = $_SESSION['success'] ? 'check':'exclamation-triangle';
      require 'view/messageDelete.php';
      unset($_SESSION['message'],$_SESSION['success']);
  
    }
    $authPage = $_SESSION['userData']['ambiente'];
	  $authThisPage =basename($_SERVER['PHP_SELF']);
	  
      $id = getParam('id',0);
      $cli = getCliente($id); 
      $cf = $cli['codfiscale'];
      $patente = getPatenteCf($cf);
      $testride = getTestAn($cf);
      $contr =getContrAn( $cf);
              
    
    require_once 'view/clienti/cliente_Page.php';
	   
	 // }	

	?>


    
      
     
<!--End Dashboard Content-->
</div></div> 
<?php
    require_once 'view/template/footer.php';
?>
<script>
    
    function patefront(input) {
            if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
            $('#patfront_pw').attr('src', e.target.result);
            
            }
    
            reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
    }
    function paterear(input) {
            if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
            
            $('#patrear_pw').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
    }
    


</script>
<script>

    function convData(isodata){
        newdata=  new Date(isodata);

        newgiorno=newdata.getDate();
        if(newgiorno<10){
            newgiorno = "0"+newgiorno

        }
        newmese=newdata.getMonth()+1;
        if(newmese<10){
            newmese = "0"+newmese

        }

        newanno=newdata.getFullYear();
        return newgiorno+'/'+newmese+'/'+newanno;


    }
    $(function(){
        $('#upPat').submit(function(event){
            event.preventDefault()
            var formData = new FormData(this);
            $.ajax({
                    url: "controller/updateAnagr_cli.php?action=upPatente",
                    type:"POST",
                    data:formData,
                    dataType: 'json',
                    contentType:false,
                    cache:false,
                    processData:false,
                    success: function(data){
                         $('#modalpatente').modal('toggle')   
                        //console.log(data)
                        console.log(formData.get('data_rilascio'));
                        if(data){
                            alert='<div id="message2"class="alert alert-success" role="alert" style="z-index: 1000;position: fixed;right: 10px;top: 70px;"><i class="fa fa-check-circle" style="color:white;"></i> Dati Patente Aggiornati</div>'   
                                    $( ".container-fluid" ).append(alert);
                                    $(".alert").delay(6000).slideUp(200, function() {
                                        $(this).alert('close');
                                    });


                        data_rilascio=convData(formData.get('data_rilascio'))
                        $('.data_rilascio').html(data_rilascio)  
                        data_scadenza=convData(formData.get('data_scadenza'))
                        $('.data_scadenza').html(data_scadenza)
                        ente_rilascio=formData.get('ente_rilascio')
                        numero_patente=formData.get('numero_patente')
                        tipo_patente=formData.get('tipo_patente')  
                        
                        
                        $('.ente_rilascio').html(ente_rilascio)
                        $('.numero_patente').html(numero_patente)
                        $('.tipo_patente').html(tipo_patente)

                        }else{
                            alert='<div id="message2"class="alert alert-warning" role="alert" style="z-index: 1000;position: fixed;right: 10px;top: 70px;"><i class="fa fa-ban" style="color:white;"></i> Dati Patente Non Aggiornati</div>'   
                                    $( ".container-fluid" ).append(alert);
                                    $(".alert").delay(6000).slideUp(200, function() {
                                        $(this).alert('close');
                                    });


                        }
                    }
                })
            



        });
    })
</script>


    </body>
</html>    

<?php
session_start();
require_once 'functions.php';

if(!isUserLoggedin()){

  header('Location:login.php');
  exit;
}
require_once 'model/veicoli_usati.php';
$updateUrl = 'veicoli_usatiUpdate.php';
$updateCliUrl = 'anagr_cliUpdate.php';
//$deleteUrl = 'controller/updateMenu.php';

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
	  
	  //if(!checkAuthPage($authPage,$authThisPage)){
		
	//	require_once 'view/403.php' ;
	
	 // }else{	  
      //  $testevent = getEvent();
       // var_dump($testevent);
        $id = getParam('id',0);
        
        $action = getParam('action',0);
        /*
            if($id){
                $tr = getTest($id);
                $idCli = $tr['id_cliente'];
                $cli = getClientecf($idCli);
                $patente = getPatente($idCli);
                $idVei = $tr['id_veicolo'];
                $veicolo = getMotoinfo($idVei);
                //var_dump($tr);
            }else{
                $tr =[
                    'id' =>'',
                    'cod_ambiente'=>'',
                    'cod_azienda'=>'',
                    'cod_filiale'=>'',
                    'user_ins' =>'',
                    'data_ins'=>'',
                    'user_mod' =>'',
                    'tipo_anagr'=>'',
                    'ragsociale'=>'',
                    'cognome' =>'',
                    'nome' => '',
                    'luogonasc' => '',
                    'provnasc' => '',
                    'nazionalita' => '',
                    'sesso' => '',
                    'codfiscale' => '',
                    'partitaiva' => '',
                    'indirizzores' => '',
                    'luogores' => '',
                    'provres' => '',
                    'capres' => '',
                    'mail1' => '',
                    'mail2' => '',
                    'tel1' => '',
                    'tel2' => '',
                    'mobile1' => '',
                    'mobile2' => '',
                    'fax' => ''
    
                    
    
                ];
            }*/

            $v = getVeicolo($id);
            $cli = getClientecf($v['id_cliente']);
            $int = getClientecf($v['intestatario']);
           //var_dump($v);
            //var_dump($int);
    require_once 'view/veicoliUsati/veicolo_Page.php';
	   
	 // }	

	?>


    
      
     
<!--End Dashboard Content-->
</div></div> 
<?php
    require_once 'view/template/footer.php';
?>
<script type="text/javascript">
    $(document).ready(function(){
      
      Array.from(document.getElementsByClassName("importi")).forEach(
                  function(element, index, array) {
                  importo=array[index].innerHTML;
                  euro = parseFloat(importo).toLocaleString('it-IT', {style: 'currency', currency: 'EUR'});
                  array[index].innerHTML= euro;
                  }
              );
      
              $('.carousel').carousel({
                interval: false,
              });
      })
</script>

<script type="text/javascript">
	var signaturePad;
	
	var canvas;
	
	$(document).ready(function() 
	{
					//signature pad 1:
			
		//signature pad 1:
			var wrapper = document.getElementById("signature-pad"),
			    clearButton = wrapper.querySelector("[data-action=clear]");
			canvas = wrapper.querySelector("canvas");
			
		//	function resizeCanvas() {
		//	    var ratio =  Math.max(window.devicePixelRatio || 1, 1);
		//	   canvas.width = canvas.offsetWidth * ratio;
		//	    canvas.height = canvas.offsetHeight * ratio;

		//  canvas.getContext("2d").scale(ratio, ratio);
		//	}
			
		//	window.onresize = resizeCanvas;
		//	resizeCanvas();
			
			signaturePad = new SignaturePad(canvas);
			
			clearButton.addEventListener("click", function (event) {
			    signaturePad.clear();
			});
		
	});
	function conferma()
	{
      //$id = $('#id').val();
			var jsignCode = signaturePad.toDataURL();
 		
 			$("#signCode").val(jsignCode); 
      //var url = 'report/testride/cons.php?id='+$id;
	    //window.open(url,"Stampa");
      $id = $('#id').val();
	  var url = 'report/testride/ricons.php?id='+$id;
	  window.open(url,"Stampa");
   };
   function prtPdf() {
    $id = $('#id').val();
	  var url = 'report/testride/cons.php?id='+$id;
	  window.open(url,"Stampa");
  }
  function prtPdf2() {
    $id = $('#id').val();
	  var url = 'report/testride/ricons.php?id='+$id;
	  window.open(url,"Stampa");
  }
  function prtPdf3() {
    $id = $('#id').val();
	  var url = 'report/testride/full.php?id='+$id;
	  window.open(url,"Stampa");
  }
  function btnPdf1() {
    $id = $('#id').val();
	  var url = 'docs/testride/report/'+$id+'_cons.pdf';
	  window.open(url,"Stampa");
  }
  function btnPdf2() {
    $id = $('#id').val();
	  var url = 'docs/testride/report/'+$id+'_ricons.pdf';
	  window.open(url,"Stampa");
  }
  function btnPdf3() {
    $id = $('#id').val();
	  var url = 'docs/testride/report/'+$id+'_full.pdf';
	  window.open(url,"Stampa");
  }
	
				 
			  
	</script>
  <script type="text/javascript">
   daticliente=16
        consensi=17
        firma=17
        veicolo=16
        statoveicolo=17
        durata=17
    	$(function(){
            
            CodiceFiscale.utils.birthplaceFields("#provres", "#luogores");
            $("#provres").val("RM").change();
            setTimeout(()=>$("#luogores").val("H501"), 200);
 
            CodiceFiscale.utils.birthplaceFields("#provnasc", "#luogonasc");
            $("#provnasc").val("RM").change();
            setTimeout(()=>$("#luogonasc").val("H501"), 200);
            $('#cf').click(function(ev){
                
                    ev.preventDefault();
                    let cf = new CodiceFiscale({
                        name : $("#nome").val(),
                        surname : $("#cognome").val(),
                        gender : $("#sesso").val(),
                        birthday : $("#datanasc").val(),
                        birthplace : $("#luogonasc").val()
                    });
                    $("#codfiscale").val(cf.toString());
                    //checkcli(cf.toString());

            });
    
      
      $('#addCli').click(function(e){
            $.validator.messages.required = "Campo Obbligatorio!";
            form = $( "#addformcli" )
            form.validate()
            console.log(form.valid())
            e.preventDefault()
            if(form.valid()){
            var cf = $('#codfiscale').val();
            var fields = $( "#addformcli" ).serializeArray();
            //$("#addformcli").validate();
           //upload foto
                    
                    $.ajax({
                        url: "controller/updateAnagr_cli.php?action=newCli",
                        type:"POST",
                        data: fields,
                        dataType: 'json',
                        cache: false,
                        success: function (data) {
                                if (data) {
                                    $('#modal1').modal('toggle')
                                console.log(data);
                               // UpFoto(data);
                                    alert='<div id="message2"class="alert alert-success" role="alert" style="z-index: 1000;position: fixed;right: 10px;top: 70px;">Nuovo cliente inserito</div>'   
                                    $( ".container-fluid" ).append(alert);
                                    $(".alert").delay(6000).slideUp(200, function() {
                                        $(this).alert('close');
                                    });
                               // getCli(cf)   
                                } else {
                                    alert='<div class="alert alert-danger" role="alert" style="z-index: 1000;position: fixed;right: 10px;top: 70px;">This is a danger alert—check it out!</div>'
                                        $( ".container-fluid" ).append(alert);
                                    }
                                
                        }
                    });
                }
                
      });
      $('#upbtncli').click(function(e){
        swal('okS')
      })
      $( "#autocomplete" ).autocomplete({
           
           minLength: 3,
           source: function( request, response ) {
        
         
               $.ajax({
                   url: "controller/updateAnagr_cli.php?action=autoUser",
                   type: 'post',
                   dataType: 'json',
                   data: {
                   search: request.term
                   },
                   //success: function(data) {
                   //response(data);
                   //},
                   success: function (data) {
                               if (data) {
                               //var data = [{ label: 'No results found.', val: -1}];
                                       response(data);
                                   
                                   
                               } else {
                               var d = [{ label: 'No results found.', val: -1}];
                               response(d);
                                   }
                               
                       }
                       
                   });
           },
             
           select: function (event, ui) {
               $('.id_cliente').html("");
               $('.cognome').html("");
               $('.nome').html("");
               $('.provnasc').html("");
               $('.luogonasc').html("");
               $('.datanasc').html("");
               $('.codfiscale').html("");
               $('.indirizzores').html("");
               $('.provres').html("");
               $('.luogores').html("");
               $('.capres').html("");
               $('.mail1').html("");
               $('.mobile1').html("");



               $('#autocomplete').val("");
               $('#cli_dett').show();
               $('#id_cliente').val(ui.item.codfiscale);
               $('#id_cf').val(ui.item.codfiscale)
               btn = '<i class="fa fa-user"></i> Aggiorna dati Cliente';
               $('#actionCli').val('saveCliente');
               $('#addbtncli,#addCli').html(btn);

               $('#ragsociale').val(ui.item.ragsociale);
               $('#cognome').val(ui.item.cognome);
               $('#nome').val(ui.item.nome);
               $('#datanasc').val(ui.item.datanasc);
               $('#nazionalita').val(ui.item.nazionalita);
               $('#sesso').val(ui.item.sesso).change();
               $('#codfiscale').val(ui.item.codfiscale);
               $('#partitaiva').val(ui.item.partitaiva);
               $('#indirizzores').val(ui.item.indirizzores);
               $('#capres').val(ui.item.capres);
               $('#mail1').val(ui.item.mail1);
               $('#mail2').val(ui.item.mail2);
               $('#tel1').val(ui.item.tel1);
               $('#tel2').val(ui.item.tel2);
               $('#mobile1').val(ui.item.mobile1);
               $('#mobile2').val(ui.item.mobile2);

               
               $("#provres").val(ui.item.provres).change();
               $("#luogores").val(ui.item.luogores);
                getComune(ui.item.luogores,"luogores");
              
             
               $("#provnasc").val(ui.item.provnasc).change();
               $("#luogonasc").val(ui.item.luogonasc)
               getComune(ui.item.luogonasc,"luogonasc");

               $('.id_cliente').html(ui.item.id);
               $('.cognome').html(ui.item.cognome);
               $('.nome').html(ui.item.nome);
               $('.provnasc').html(ui.item.provnasc);
              
               var datanasc = new Date(ui.item.datanasc);
               var newDatanasc = datanasc.getDate()+"/"+(datanasc.getMonth()+1)+"/"+datanasc.getFullYear();
               $('.datanasc').html(newDatanasc);
               $('.codfiscale').html(ui.item.codfiscale);
               $('.indirizzores').html(ui.item.indirizzores);
               $('.provres').html(ui.item.provres);
              
               $('.capres').html(ui.item.capres);
               $('.mail1').html(ui.item.mail1);
               $('.mobile1').html(ui.item.mobile1);
               $('#rowfirma').show();
               $('#upbtncli').show();
               checkCli(ui);
               getPatente(ui.item.id,ui.item.codfiscale);
            
           return false;
         }

       });


    });  
    
</script>
<script>
  function checkCli(ui){
       // console.log(ui);
        checkAna = 1
        checkRes = 1
        checkCon = 1
        luogonasc= $('.luogonasc').html()
        luogores= $('.luogores').html()
        capres = $('.capres').html()
        //console.log(luogonasc)
        if(ui.item.luogonasc.length == 0 || ui.item.provnasc == null ||  ui.item.datanasc == null){

            checkAna = 0;
            $('#checkAna').html('<i aria-hidden="true" class="fa fa-warning" ></i> Dati Anagrafici Incompleti</a>')
            $('#checkAna').removeClass("btn-success").addClass("btn-warning")
        }else{
            $('#checkAna').html('<i aria-hidden="true" class="fa fa-check" ></i> Dati Anagrafici Completi</a>')
            $('#checkAna').removeClass("btn-warning").addClass("btn-success")
        }
        if(capres.length < 5 || luogores==null ||  ui.item.indirizzores == null||ui.item.provres == null){
            checkRes = 0
            $('#checkRes').html('<i aria-hidden="true" class="fa fa-warning" ></i> Dati Residenza Incompleti</a>')
            $('#checkRes').removeClass("btn-success").addClass("btn-warning")


        }else{
            $('#checkRes').html('<i aria-hidden="true" class="fa fa-check" ></i> Dati Residenza Completi</a>')
            $('#checkRes').removeClass("btn-warning").addClass("btn-success")

        }
        if(ui.item.mail1.length == 0||ui.item.mobile1.length == 0){
            checkRes = 0
            $('#checkCon').html('<i aria-hidden="true" class="fa fa-warning" ></i> Dati Contatti Incompleti</a>')
            $('#checkCon').removeClass("btn-success").addClass("btn-warning")


        }else{
            $('#checkCon').html('<i aria-hidden="true" class="fa fa-check" ></i> Dati Contatti Completi</a>')
            $('#checkCon').removeClass("btn-warning").addClass("btn-success")

        }

       
  }
  function getCli(cf){

          
          //console.log(cf)
          $.ajax({
                  url: "controller/updateAnagr_cli.php?action=getCliCf",
                  type:"POST",
                  data: {codfiscale:cf},
                  dataType: 'json',
                  cache: false,
                  success: function (item) {
                    $('#id_cf').val(item.codfiscale)
                          btn = '<i class="fa fa-user"></i> Aggiorna dati Cliente';
                          $('#actionCli').val('saveCliente');
                          $('#addbtncli,#addCli').html(btn);

                          $('#ragsociale').val(item.ragsociale);
                          $('#cognome').val(item.cognome);
                          $('#nome').val(item.nome);
                          $('#datanasc').val(item.datanasc);
                          $('#nazionalita').val(item.nazionalita);
                          $('#sesso').val(item.sesso).change();
                          $('#codfiscale').val(item.codfiscale);
                          $('#partitaiva').val(item.partitaiva);
                          $('#indirizzores').val(item.indirizzores);
                          $('#capres').val(item.capres);
                          $('#mail1').val(item.mail1);
                          $('#mail2').val(item.mail2);
                          $('#tel1').val(item.tel1);
                          $('#tel2').val(item.tel2);
                          $('#mobile1').val(item.mobile1);
                          $('#mobile2').val(item.mobile2);

                          
                          $("#provres").val(item.provres).change();
                          //$("#luogores").val(item.luogores).change();
                          setTimeout(()=>$("#luogores").val(item.luogores), 200);
                          //  getComune(item.luogores,"luogores");
                          
                        
                          $("#provnasc").val(item.provnasc).change();
                          setTimeout(()=>$("#luogonasc").val(item.luogonasc), 200);
                         // getComune(item.luogonasc,"luogonasc");
                         
                          $('.id_cliente').html(item.id);
                          $('.cognome').html(item.cognome);
                          $('.nome').html(item.nome);
                          $('.provnasc').html(item.provnasc);
                          getComune(item.luogonasc,"luogonasc");
                          var datanasc = new Date(item.datanasc);
                          var newDatanasc = datanasc.getDate()+"/"+(datanasc.getMonth()+1)+"/"+datanasc.getFullYear();
                          $('.datanasc').html(newDatanasc);
                          $('.codfiscale').html(item.codfiscale);
                          $('.indirizzores').html(item.indirizzores);
                          $('.provres').html(item.provres);
                          getComune(item.luogores,"luogores");
                          $('.capres').html(item.capres);
                          $('.mail1').html(item.mail1);
                          $('.mobile1').html(item.mobile1);
                          getPatente(item.id,item.codfiscale)
                          
                  }
              });
  }
  function getPatente(id,cf){
        checkPat=0
      /*  $('#checkPat').html('<i aria-hidden="true" class="fa fa-warning" ></i> Dati Patente Non Completi</a>')
        $('#checkPat').removeClass("btn-success").addClass("btn-warning")
        $('#dettPat').hide()*/
    
        $('.data_rilascio').html("")
        $('.data_scadenza').html("")
        $('.ente_rilascio').html("")
        $('.numero_patente').html("")
        $('.tipo_patente').html("")
                $.ajax({
                  url: "controller/updateAnagr_cli.php?action=getPatente",
                    type: 'post',
                    dataType: 'json',
                    data: {
                    id: cf
                    },
                    //success: function(data) {
                    //response(data);
                    //},
                    success: function (data) {
                               console.log(data)
                              
                           if(data){
                               $('#data_rilascio').val(data.data_rilascio)
                               $('#data_scadenza').val(data.data_scadenza)
                               $('#ente_rilascio').val(data.ente_rilascio)
                               $('#numero_patente').val(data.numero_patente)
                               $('#tipo_patente ').val(data.tipo_patente).change()
                               var dataril = new Date(data.data_rilascio);
                               var newDataril = dataril.getDate()+"/"+(dataril.getMonth()+1)+"/"+dataril.getFullYear();
                               var datascad = new Date(data.data_rilascio);
                               var newDatascad = datascad.getDate()+"/"+(datascad.getMonth()+1)+"/"+datascad.getFullYear();
                               $('.data_rilascio').html(newDataril)
                               $('.data_scadenza').html(newDatascad)
                               $('.ente_rilascio').html(data.ente_rilascio)
                               $('.numero_patente').html(data.numero_patente)
                               $('.tipo_patente').html(data.tipo_patente)
                               // checkPatente(data)
                           }else{
                           // validCli() 
                           }  
                           
                                
                        }
                      
                    });
                    

                    //console.log("chech"+checkPat)       
                    front = "docs/CRM/Allegati/patente/"+id+"_patfront.jpg";
                    rear = "docs/CRM/Allegati/patente/"+id+"_patrear.jpg";
                    console.log(front)
                            var response = jQuery.ajax({
                                url: front,
                                type: 'HEAD',
                                async: false
                            }).status;	
                           
                            if(response==200){
                                $('#patfront_pwl,#patrear_pwl').show()
                                $('#patfront_pw,#patfront_pwl').attr("src",front);
                                $('#patrear_pw,#patrear_pwl').attr("src",rear);
                                $('#checkFoto').html('<i aria-hidden="true" class="fa fa-check" ></i> Scansione Patente Presente</a>')
                                $('#checkFoto').removeClass("btn-warning").addClass("btn-success")
                                checkFoto=1

                            }else{
                                $('#patfront_pwl,#patrear_pwl').hide()
                            $('#patfront_pw').attr("src","images/IT_licence_(front).jpg");
                            $('#patrear_pw').attr("src","images/IT_licence_(back).jpg");
                            $('#checkFoto').html('<i aria-hidden="true" class="fa fa-warning" ></i> Scansione Patente Non Presente</a>')
                            $('#checkFoto').removeClass("btn-success").addClass("btn-warning")
                            checkFoto=0


                            }
             

  }
  function getComune(cod,e){
        $.ajax({
                    url: "controller/updateAnagr_cli.php?action=getComune",
                    type: 'post',
                    dataType: 'json',
                    data: {
                    cod: cod
                    },
                    //success: function(data) {
                    //response(data);
                    //},
                    success: function (data) {
                               //console.log(data.comune)
                               if(data){
                              $('.'+e+'').html(data.comune)
                                
                              return data.comune    
                               }
                               else{
                                $('.'+e+'').html(" ")
                               }           
                                    
                                
                        }
                        
                    });

  }

</script>

    </body>
</html>    


<?php
session_start();
require_once 'functions.php';

$pagTitle = 'Test Ride';
if(!isUserLoggedin()){

  header('Location:login.php');
  exit;
}
require_once 'model/test_ride.php';
$updateUrl = 'test_rideUpdate.php';
$updateCliUrl = 'anagr_cliUpdate.php';
//$deleteUrl = 'controller/updateMenu.php';

require_once 'headerInclude.php';
?>
<style>
    .bootstrap-select .dropdown-toggle .filter-option-inner-inner {
    overflow: hidden;
    position: absolute;
        bottom: 10px;
    }
    .form-group .bmd-label-static {
        top: -10px;
        left:14px;
    }
    .btn.btn-link:hover, .btn.btn-link:focus, .btn.btn-link:active, .btn.btn-default.btn-link:hover, .btn.btn-default.btn-link:focus, .btn.btn-default.btn-link:active{
        background-color: transparent;
        color: #000000;
    }
    .btn.btn-link, .btn.btn-default.btn-link {
        background-color: transparent;
        color: #000000;
        box-shadow: none;
    }
    .carousel-item img.wide {
    max-width: 100%;
    max-height: 100%;
    height: auto;
}
</style>


 <!--Start Dashboard Content-->	
  <div class="content" style="background-image: url(images/5.jpg);background-size:cover;background-attachment: fixed;">
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
        $testevent = getEvent();
        //var_dump($testevent);
        $id = getParam('id',0);
        $action = getParam('action',0);
        if($id){
          $tr = getTest($id);
          //var_dump($tr);
        }
       
        $moto = getMoto();
       // var_dump($moto);

        
        
    require_once 'view/testride/formTest_ridePren.php';
	   
	 // }	

	?>


</div></div> 
      
     
<!--End Dashboard Content-->

<?php
    require_once 'view/template/footer.php';
?>
<script>
    $(document).ready(function() {
      md.initFullCalendar();

      <?if($tr['id_cliente']){?>
      
           
          
          id_cliente='<?=$tr['id_cliente']?>'
        
         
               $.ajax({
                   url: "controller/updateAnagr_cli.php?action=getUser",
                   type: 'post',
                   dataType: 'json',
                   data: {
                   search: id_cliente
                   },
                   //success: function(data) {
                   //response(data);
                   //},
                   success: function (data) {
                    
                   
                          $('.id_cliente').html("");
                          $('.cognome').html("");
                          $('.nome').html("ui.item.nome");
                          $('.provnasc').html("ui.item.provnasc");
                          $('.datanasc').html("");
                          $('.codfiscale').html("");
                          $('.indirizzores').html("");
                          $('.provres').html("");
                          $('.capres').html("");
                          $('.mail1').html("");
                          $('.mobile1').html("");



                          $('#autocomplete').val("");
                          $('#cli_dett').show();
                          $('#id_cliente').val(data.id);
                          $('#id_cf').val(data.codfiscale)
                          btn = '<i class="fa fa-user"></i> Aggiorna dati Cliente';
                          $('#actionCli').val('saveCliente');
                          $('#addbtncli,#addCli').html(btn);

                          $('#ragsociale').val(data.ragsociale);
                          $('#cognome').val(data.cognome);
                          $('#nome').val(data.nome);
                          $('#datanasc').val(data.datanasc);
                          $('#nazionalita').val(data.nazionalita);
                          $('#sesso').val(data.sesso).change();
                          $('#codfiscale').val(data.codfiscale);
                          $('#partitaiva').val(data.partitaiva);
                          $('#indirizzores').val(data.indirizzores);
                          $('#capres').val(data.capres);
                          $('#mail1').val(data.mail1);
                          $('#mail2').val(data.mail2);
                          $('#tel1').val(data.tel1);
                          $('#tel2').val(data.tel2);
                          $('#mobile1').val(data.mobile1);
                          $('#mobile2').val(data.mobile2);

                          
                          $("#provres").val(data.provres).change();
                          $("#luogores").val(data.luogores);
                            getComune(data.luogores,"luogores");
                          
                        
                          $("#provnasc").val(data.provnasc).change();
                          $("#luogonasc").val(data.luogonasc)
                          getComune(data.luogonasc,"luogonasc");

                          $('.id_cliente').html(data.id);
                          $('.cognome').html(data.cognome);
                          $('.nome').html(data.nome);
                          $('.provnasc').html(data.provnasc);
                          
                          var datanasc = new Date(data.datanasc);
                          var newDatanasc = datanasc.getDate()+"/"+(datanasc.getMonth()+1)+"/"+datanasc.getFullYear();
                          $('.datanasc').html(newDatanasc);
                          $('.codfiscale').html(data.codfiscale);
                          $('.indirizzores').html(data.indirizzores);
                          $('.provres').html(data.provres);
                          
                          $('.capres').html(data.capres);
                          $('.mail1').html(data.mail1);
                          $('.mobile1').html(data.mobile1);
                          $('#rowfirma').show();
                          checkCliTr(data);
                          getPatente(data.codfiscale,data.id);
                        
                      return false;
         }
        })
        consensi = 0;
        firma = 0;
        veicolo=0;
        statoveicolo=0
        durata=0;
        procedura()
     <?}?>
   
    });
  </script> 
<script>

$('#calendar').fullCalendar({
    defaultView: 'listWeek',
    	monthNames: ['Gennaio','Febbraio','Marzo','Aprile','Maggio','Giugno','Luglio','Agosto','Settembre','Ottobre','Novembre','Dicembre'],
    	monthNamesShort: ['Gen','Feb','Mar','Apr','Mag','Giu','Lug','Ago','Set','Ott','Nov','Dic'],
    	dayNames: ['Domenica','Lunedì','Martedì','Mercoledì','Giovedì','Venerdì','Sabato'],
    	dayNamesShort: ['Dom','Lun','Mar','Mer','gio','Ven','Sab'],
      header: {
        left: 'prev,next, today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
      },
      buttonText:{
          prev:"precedente",
          next:"successivo",
          prevYear:"prev year",
          nextYear:"next year",
          year:"anno",
          today:"oggi",
          month:"mese",
          week:"settimana",
          day:"giorno"},
      //defaultDate: '2020-03-12',
      
      navLinks: true, // can click day/week names to navigate views
      selectable: false,
      selectHelper: true,
      
      select: function(start, end) {
        var title = prompt('Event Title:');
        var eventData;
        if (title) {
          eventData = {
            title: title,
            start: start,
            end: end,
            alert: alert,
            id :id
          };
          $('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
        }
        $('#calendar').fullCalendar('unselect');
      },
      
      businessHours: false,
      businessHours: [{
        // days of week. an array of zero-based day of week integers (0=Sunday)
         
			    dom: [ 1, 2, 3, 4, 5], // Monday - Thursday
          start: '9:00', // a start time (10am in this example)
            end: '13:00' // an end time (6pm in this example)
        },
        {
          // days of week. an array of zero-based day of week integers (0=Sunday)
          
            dom: [ 1, 2, 3, 4, 5], // Monday - Thursday
            start: '14:00', // a start time (10am in this example)
            end: '18:00' // an end time (6pm in this example)
        }
      
      ],
      
      minTime: '08:00:00',
      maxTime: '19:00:00',
      editable: false,
      eventLimit: true, // allow "more" link when too many events
      eventRender: function(event, element) {
                if(event.description == "yes") {
                    element.css('background-color', '#000');
                }
            },
      eventSources: [
        {
          url:'controller/updateTestride.php?action=getEvent',
          method: 'POST',
        }
      ],
      timeFormat: 'H(:mm)', // uppercase H for 24-hour clock
      eventClick: function(info) {
        
        const el = document.createElement('div');
        el.innerHTML = '<a type="button" class="btn btn-success btn-block btn-round m-1" href="test_ridePage.php?id='+info.id+'"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Gestione Test</a>'
        swal({
              title:"Info Evento",
              text: info.alert,
              content: el,
              icon:"info"
            });
        
        
       // $(".swal-modal").css('background-color', '#88040bd1');//Optional changes the color of the sweetalert 
        
        }
    });
        daticliente=16
        consensi=17
        firma=17
        veicolo=16
        statoveicolo=17
        durata=17

            
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
        $("#data_pren").on("change",function (){ 
          datapren = $(this).val()
          $('#calendar').fullCalendar('gotoDate',datapren);
          $('#calendar').fullCalendar('changeView', 'agendaDay');
        });    
        $('#addCli').click(function(e){
            $.validator.messages.required = "Campo Obbligatorio!";
            form = $( "#addformcli" )
            form.validate()
            console.log(form.valid())
            e.preventDefault()
            if(form.valid()){
            
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
                                UpFoto(data);
                                    alert='<div id="message2"class="alert alert-success" role="alert" style="z-index: 1000;position: fixed;right: 10px;top: 70px;">Nuovo cliente inserito</div>'   
                                    $( ".container-fluid" ).append(alert);
                                    $(".alert").delay(6000).slideUp(200, function() {
                                        $(this).alert('close');
                                    });
                                getCli(data)   
                                } else {
                                    alert='<div class="alert alert-danger" role="alert" style="z-index: 1000;position: fixed;right: 10px;top: 70px;">This is a danger alert—check it out!</div>'
                                        $( ".container-fluid" ).append(alert);
                                    }
                                
                        }
                    });
                }
                
        });
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
                $('.nome').html("ui.item.nome");
                $('.provnasc').html("ui.item.provnasc");
                $('.datanasc').html("");
                $('.codfiscale').html("");
                $('.indirizzores').html("");
                $('.provres').html("");
                $('.capres').html("");
                $('.mail1').html("");
                $('.mobile1').html("");



                $('#autocomplete').val("");
                $('#cli_dett').show();
                $('#id_cliente').val(ui.item.id);
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
                checkCli(ui);
                getPatente(ui.item.codfiscale,ui.item.id);
             
            return false;
          }

        });
        $('#id_veicolo').on("change",function(event) {
            $('#rowstato').hide();
                statoveicolo=0
                id_veicolo = $(this).val()
                if(id_veicolo){
                    $('#attVeicolo').html('<i aria-hidden="true" class="fa fa-check" style="color:green;"></i> Scelta Veicolo')
                    veicolo=0
                }
                console.log(id_veicolo)
                $.ajax({
                    url: "controller/updateTestride.php?action=getkm",
                    type: 'post',
                    dataType: 'json',
                    data: {
                    id_veicolo: id_veicolo
                    },
                    
                    success: function (data) {
                             console.log(data);
                              
                           if(data){

                            $('#rowstato').show();
                               $('#km_cons').val(data.km);
                               targa = (data.targa).trim();
                               $('#btn_stat_vei').attr('onclick','getVei(\''+targa+'\');')
                               anomalie = data.presenza_danni;
                               if(anomalie =="S"){

                                $('#anomalia').show();
                                $('#attStato').html('<i aria-hidden="true" class="fa fa-ban" style="color:red;"></i> Verifica Stato Veicolo');
                                statoveicolo=17;
                               }else{
                                $('#anomalia').hide();
                                $('#attStato').html('<i aria-hidden="true" class="fa fa-check" style="color:green;"></i> Verifica Stato Veicolo');
                                statoveicolo=0;
                               }
                           }else{
                            $('#km_cons').val("")
                           }  
                           
                                
                        }
                       
                    });
                    setTimeout(function(){  procedura(); }, 500);
                   
                    console.log("stato"+statoveicolo);
                    

        })
        
        $('input[name*="priv"]').change(function() {
            $("#signbtn").prop('disabled');
            var check1 = $('input[name="priv1"]:checked').val();
            var check2 = $('input[name="priv2"]:checked').val();
            var check3 = $('input[name="priv3"]:checked').val();
            var check4 = $('#priv1a').val();
        
            
            if(check1 == 'A'){
            $('#privrow').removeAttr("style");
            $('#attPrivacy').html('<i aria-hidden="true" class="fa fa-check" style="color:green;"></i> Consensi Privacy');
            consensi=0
            }
            if (check1 =='A' && check2.length > 0  && check3.length > 0 ){
          
          
                $("#signbtn").removeAttr('disabled');
           
           
            }
            

        
            
            if(check1 == 'B'){
            $('#privrow').css({'background-color': 'rgba(255, 0, 0, 0.15)'});
            //$("#signbtn").prop('disabled',true);
            $('#attPrivacy').html('<i aria-hidden="true" class="fa fa-ban" style="color:red;"></i> Consensi Privacy');
            consensi=17
            }
        
            procedura()

        });
        $("#note_pren").on("change",function(event) {

          note=$(this).val()
          if(note.length>0){
            daticliente=0
            $('#attCliente').html('<i aria-hidden="true" class="fa fa-check" style="color:green;"></i> Dati Cliente (Compilazione Pre-Consegna) / Note Prenotazione');
            consensi=0
            $('#attPrivacy').html('<i aria-hidden="true" class="fa fa-check" style="color:green;"></i> Consensi Privacy (Compilazione Pre-Consegna)');
            firma=0
            $('#attFirma').html('<i aria-hidden="true" class="fa fa-check" style="color:green;"></i> Firma Digitale (Compilazione Pre-Consegna)');
            procedura()

          }else{
            consensi=17
            $('#attPrivacy').html('<i aria-hidden="true" class="fa fa-ban" style="color:red;"></i> Consensi Privacy');
            firma=17
            $('#attFirma').html('<i aria-hidden="true" class="fa fa-ban" style="color:red;"></i> Firma Digitale');
            daticliente=16
            $('#attCliente').html('<i aria-hidden="true" class="fa fa-ban" style="color:red;"></i> Dati Cliente / Note Prenotazione');
            procedura()

          }

        })
        $("#data_pren,#ora_pren,#durata_test").on("change",function(event) {
          
          ckveicolo = $('#id_veicolo').val()
          datapren = $('#data_pren').val()
          durata = $('#durata_test').val()
          if(durata==1000){
            $('.lungotermine').show()
            $('#data_ricons').attr('min',datapren);
          }else{
            $('.lungotermine').hide()
          }
          orapren = $('#ora_pren').val()
          if(orapren){
            $('#ora_pren').validate()
          }
          
          $.ajax({
                    url: "controller/updateTestride.php?action=checkEvent",
                    type: 'post',
                    dataType: 'json',
                    data: {id_veicolo:ckveicolo,data_pren:datapren+" "+orapren,durata:durata},
                    //success: function(data) {
                    //response(data);
                    //},
                    success: function (data) {
                      if(data){
                        console.log(data);
                        const el = document.createElement('div');
                        el.innerHTML = 'Il Veicolo <b>'+data.veicolo+'</b> risulta  prenotato<br>dal giorno <b>'+data.da+'</b> alle ore <b>'+data.daora+'</b><br>al giorno <b>'+data.a+'</b> fino alle ore <b>'+data.aora+'</b>'

                        swal({
                                title:"Info Prenotazione",
                                text: "Slot Occupato!",
                                content:el,
                                icon:"info"
                              });

                              $('#attDurata').html('<i aria-hidden="true" class="fa fa-ban" style="color:red;"></i> Tempo previsto Test Ride');
                              durata=17;
                              $('#ck_disp').val("0")
                              $('#span_ck').removeClass('badge-success').addClass('badge-warning')
                              $('#span_ck').text('Selezion Veicolo, Data, Ora e Durata')
                              procedura()
                      }else{
                        $('#attDurata').html('<i aria-hidden="true" class="fa fa-check" style="color:green;"></i> Tempo previsto Test Ride');
                        durata=0;

                        $('#ck_disp').val("1")
                        $('#span_ck').removeClass('badge-warning').addClass('badge-success')
                        $('#span_ck').text('Slot Disponibile')
                        procedura()
                      }
                     

                      
                    }
          })


          if(ckveicolo.length>0&&datapren&&orapren&&durata>0){
            //alert('ok')
           

          }else{
          



          }
          

          
        })


    function procedura(){
        a= daticliente;
        b= consensi
        c= firma
        d= veicolo
        e= statoveicolo
        f= durata

        pren = $('#ck_disp').val();
        console.log("a"+a)
        console.log("consensi"+b)
        console.log("firma"+c)
        console.log("veicolo"+d)
        console.log("statoveicolo"+e)
        console.log("durata"+f)
        proc = 100 - a -b -c-d-e-f
       // console.log("procedurA"+proc)
        a = a+'%'
        $('.procedura').html(proc+'%')
        $('#procedura').css({'width':proc+'%'})
        if(proc == 100&& pren>0){
            $('#procedura').removeClass('progress-bar-warning').addClass("progress-bar-success")
           // alert("procedura terminata")
           $('#saveTest').removeAttr('disabled');
        }
        if(proc<100){
            $("#saveTest").prop('disabled',true);
            $('#procedura').removeClass('progress-bar-success').addClass("progress-bar-warning")
        }

    }
    function checkCli(ui){
       // console.log(ui);
        checkAna = 1
        checkRes = 1
        checkCon = 1
        luogonasc= $('.luogonasc').html()
        luogores= $('.luogores').html()
        capres = $('.capres').html()
        //console.log(luogonasc)
        if(luogonasc == null || ui.item.provnasc == null ||  ui.item.datanasc == null){

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
    function checkCliTr(data){
       // console.log(ui);
        checkAna = 1
        checkRes = 1
        checkCon = 1
        luogonasc= $('.luogonasc').html()
        luogores= $('.luogores').html()
        capres = $('.capres').html()
        //console.log(luogonasc)
        if(luogonasc == null || data.provnasc == null ||  data.datanasc == null){

            checkAna = 0;
            $('#checkAna').html('<i aria-hidden="true" class="fa fa-warning" ></i> Dati Anagrafici Incompleti</a>')
            $('#checkAna').removeClass("btn-success").addClass("btn-warning")
        }else{
            $('#checkAna').html('<i aria-hidden="true" class="fa fa-check" ></i> Dati Anagrafici Completi</a>')
            $('#checkAna').removeClass("btn-warning").addClass("btn-success")
        }
        if(capres.length < 5 || luogores==null ||  data.indirizzores == null||data.provres == null){
            checkRes = 0
            $('#checkRes').html('<i aria-hidden="true" class="fa fa-warning" ></i> Dati Residenza Incompleti</a>')
            $('#checkRes').removeClass("btn-success").addClass("btn-warning")


        }else{
            $('#checkRes').html('<i aria-hidden="true" class="fa fa-check" ></i> Dati Residenza Completi</a>')
            $('#checkRes').removeClass("btn-warning").addClass("btn-success")

        }
        if(data.mail1.length == 0||data.mobile1.length == 0){
            checkRes = 0
            $('#checkCon').html('<i aria-hidden="true" class="fa fa-warning" ></i> Dati Contatti Incompleti</a>')
            $('#checkCon').removeClass("btn-success").addClass("btn-warning")


        }else{
            $('#checkCon').html('<i aria-hidden="true" class="fa fa-check" ></i> Dati Contatti Completi</a>')
            $('#checkCon').removeClass("btn-warning").addClass("btn-success")

        }

       
    }
    
    function getPatente(cf,id){
        checkPat=0
        $('#checkPat').html('<i aria-hidden="true" class="fa fa-warning" ></i> Dati Patente Non Completi</a>')
        $('#checkPat').removeClass("btn-success").addClass("btn-warning")
        $('#dettPat').hide()
    
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
                               //console.log(data)
                              
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
                                checkPatente(data)
                           }else{
                            validCli() 
                           }  
                           
                                
                        }
                      
                    });
                    //console.log("chech"+checkPat)       
                    front = "docs/CRM/Allegati/patente/"+id+"_patfront.jpg";
                    rear = "docs/CRM/Allegati/patente/"+id+"_patrear.jpg";
                    //console.log(front)
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
                              $('.'+e+'').html(data.comune)
                                
                        return data.comune               
                                    
                                
                        }
                        
                    });

    }
 
    function UpFoto(id){
            var patfront = $("#patfront").prop("files")[0];   
            var patrear = $("#patrear").prop("files")[0];   
            var form_data = new FormData();
            form_data.append("patfront", patfront);
            form_data.append("patrear", patrear);
            $.ajax({
                        url: "controller/updateAnagr_cli.php?action=upFoto&id="+id,
                        type:"POST",
                        data: form_data,
                        dataType: 'script',
                        cache: false,
                        contentType: false,
                        processData: false
                    });


    }
    function setFormValidation(id) {
      $(id).validate({
        highlight: function(element) {
          $(element).closest('.form-group').removeClass('has-success').addClass('has-danger');
          $(element).closest('.form-check').removeClass('has-success').addClass('has-danger');
        },
        success: function(element) {
          $(element).closest('.form-group').removeClass('has-danger').addClass('has-success');
          $(element).closest('.form-check').removeClass('has-danger').addClass('has-success');
        },
        errorPlacement: function(error, element) {
          $(element).closest('.form-group').append(error);
        },
      });
    }
    function checkPatente(data){
        console.log(data)
            if(!data.id){

                $('#checkPat').html('<i aria-hidden="true" class="fa fa-warning" ></i> Dati Patente Non Completi</a>')
                                $('#checkPat').removeClass("btn-success").addClass("btn-warning")
                                checkPat=0
                                $('#dettPat').hide()
                }else{
                $('#checkPat').html('<i aria-hidden="true" class="fa fa-check" ></i> Dati Patente Completi</a>')
                $('#checkPat').removeClass("btn-warning").addClass("btn-success")
                $('#dettPat').show()   
                checkPat=1   

        }
        validCli()  
    }
    function validCli(){
        console.log(checkPat)
        console.log(checkAna)
        console.log(checkRes) 
        console.log(checkCon) 
        console.log(checkFoto)
       
        if(checkAna ==1&&checkRes==1&&checkCon==1&&checkPat==1&&checkFoto==1){

            $('#attCliente').html('<i aria-hidden="true" class="fa fa-check" style="color:green;"></i> Dati Cliente')
            daticliente = 0
            
            
        }else{
            $('#attCliente').html('<i aria-hidden="true" class="fa fa-ban" style="color:red;"></i> Dati Cliente')
            daticliente = 16
        }
        procedura()


    }
    function procedura(){
        a= daticliente;
        b= consensi
        c= firma
        d= veicolo
        e= statoveicolo
        f= durata
        console.log("cliente"+a)
        console.log("consensi"+b)
        console.log("firma"+c)
        console.log("veicolo"+d)
        console.log("statoveicolo"+e)
        console.log("durata"+f)
        proc = 100 - a -b -c-d-e-f
        console.log("procedurA"+proc)
        a = a+'%'
        $('.procedura').html(proc+'%')
        $('#procedura').css({'width':proc+'%'})
        if(proc == 100){
            $('#procedura').removeClass('progress-bar-warning').addClass("progress-bar-success")
           // alert("procedura terminata")
           $('#saveTest').removeAttr('disabled');
        }
        if(proc<100){
            $("#saveTest").prop('disabled',true);
            $('#procedura').removeClass('progress-bar-success').addClass("progress-bar-warning")
        }

    }
    function getCli(id){

        $.ajax({
                    url: "controller/updateAnagr_cli.php?action=autoUserID",
                    type: 'post',
                    dataType: 'json',
                    data: {id:id},
                    //success: function(data) {
                    //response(data);
                    //},
                    success: function (event,ui) {
                               console.log('ui'+ui)
                               console.log('event'+event)

                                
                        }
                        
                    });




    }
    function getVei(targa){
        
        $.ajax({
                    url: "controller/updateTestride.php?action=getkm",
                    type: 'post',
                    dataType: 'json',
                    data: {id_veicolo:targa},
                    //success: function(data) {
                    //response(data);
                    //},
                    success: function (data) {
                               console.log(data)
                               $('#modal_targa').text(data.targa); 
                               $('#modal_marca').text(data.marca); 
                               $('#modal_modello').text(data.modello); 
                               $('#modal_km').text(data.km); 


                               if(data.stato_officina==null){
                                   officina= "Non Disponibile";


                               }else{
                                   officina=data.stato_officina;
                               };

                               if(data.presenza_danni==null){
                                  danni="Non Disponibile";
                               }else{
                                   danni = '<span class="badge badge-warning">Presenti</span>';
                               };
                               $('#modal_stato_veicolo').text(officina); 
                               
                               var mod_date = new Date(data.data_mod);
                                var dd = String(mod_date.getDate()).padStart(2, '0');
                                var mm = String(mod_date.getMonth() + 1).padStart(2, '0'); //January is 0!
                                var yyyy = mod_date.getFullYear();

                                mod_date = mm + '/' + dd + '/' + yyyy;
                               $('#modal_mod_date').text(mod_date); 
                               $('#modal_mod_user').text(data.user_mod); 
                               $('#modal_anomalie').html(danni); 

                             
                        }
                        
                    });




    }


    <?php if(isMobile()){?>
        var signaturePad;
	    var canvas; 
    $(document).ready(function() {
      setFormValidation('#RegisterValidation');
     
        //signature pad mobile

       
        var wrapper = document.getElementById("signature-pad"),
		clearButton = wrapper.querySelector("[data-action=clear]");
        canvas = wrapper.querySelector("canvas");
        signaturePad = new SignaturePad(canvas);
		clearButton.addEventListener("click", function (event) {
		signaturePad.clear();
            });
        })
    <?}?>
    $(document).ready(function() {    

        function patfront(input) {
                if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                $('#patfront_pw').attr('src', e.target.result);
                
                }

                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }
        function patrear(input) {
                if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                
                $('#patrear_pw').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }

        $("#patfront").change(function() {
            patfront(this);
        }); 
        $("#patrear").change(function() {
            patrear(this);
        }); 
       
    });


</script>
    </body>
</html>    

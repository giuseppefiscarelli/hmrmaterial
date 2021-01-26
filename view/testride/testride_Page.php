<div class="row">
    <div class="col-12">

        <div class="card" style="background-color: #dee2e68c;"> <!-- main card-->
            <div class="card-header card-header-success card-header-icon" >
                <div class="card-icon" >
                    <i class="fa fa-motorcycle"  style="width: auto;font-size: x-large;"></i>
                </div>
                    <h3 class="card-title">Test Ride #<?=$tr['id']?></h3>        
            </div>
            
            <div class="card-body">
                <div class="row" style="justify-content: flex-end;padding: 10px;">
                    
                    <div class="btn-group">
                        <button type="button" class="btn btn-warning">
                            <i class="fa fa-undo"></i> Indietro
                        </button>
                        
                    </div>
                    <?php
                    if($tr['stato_test']!=='P'){?>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-print "></i> Report
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" onclick="prtPdf()">Stampa Modulo Consegna Veicolo</a>
                            <?php if($tr['data_ricons']){ ?>   
                            <a class="dropdown-item" onclick="prtPdf2()">Stampa Modulo Riconsegna</a>
                           
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" onclick="prtPdf3()">Stampa Report TestRide Integrale</a>
                            <?}?>
                           
                        </div>
                    </div>
                    <?}?>
                    <div class="btn-group">
                        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-cog"></i> Gestione
                        </button>
                        <div class="dropdown-menu">
                            <a href="<?=$updateUrl?>?action=update&id=<?=$tr['id']?>" class="dropdown-item waves-effect waves-light"><i class="fa fa-edit"></i> Modifica Prenotazione</a>
                            
                            
                            <div class="dropdown-divider"></div>
                            <?php
                                if($tr['stato_test']=="P"){?>
                            <a class="dropdown-item waves-effect waves-light" style="<?=$tr['id_cliente']?'':'display:none;'?>" data-toggle="modal" data-target="#modal-consegna"><i class="fa fa-sign-out" aria-hidden="true"></i> Gestione Consegna</a>
                           <?}?>
                            <a style="<?=$tr['data_cons']?'':'display:none'?>;"  class="dropdown-item waves-effect waves-light" data-toggle="modal" data-target="#modal-riconsegna"><i class="fa fa-sign-in" aria-hidden="true"></i> Gestione Riconsegna</a>

                        </div>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger">
                            <i class="fa fa-trash"></i> Elimina
                        </button>
                       
                    </div>
                   
                </div>
                <div class="row">
                    <div class="col-xl-5 col-sm-12">
                        <div class="card ">
                                <div class="card-header card-header-info card-header-icon" >
                                    <div class="card-icon" >
                                        <i class="fa fa-user"  style="font-size: large;"></i>
                                    </div>
                                        <h4 class="card-title">Cliente</h4>
                        
                                </div>
                            <div class="card-body ">
                                <div class="form-group bmd-form-group" style="display:<?=!$cli?'':'none'?>;">
                                    <label class="bmd-label-static">Cerca Cliente</label>
                                    <input type="text" class="form-control"id="autocomplete" name="autocomplete" placeholder="Inserisci / Scansiona Codice Fiscale - Ricerca per Nome/Cognome - Ricerca per Email-cellulare">
                                </div>
                                <div class="form-group bmd-form-group">
                                    <button type="button" id="addbtncli" class="btn btn-info" data-toggle="modal" data-target="#modal1">
                                        <i class="fa <?=!$cli?'fa-user-plus':'fa-refresh'?>"></i> <?=!$cli?'Inserisci nuovo Cliente':'Modifica Dati Cliente'?>
                                    </button>
                                    <button type="button" id="upbtncli" class="btn btn-success"style="display:none;float:right;">
                                        <i class="fa fa-refresh"></i> Salva Modifiche
                                    </button>
                                </div>
                                <div class="table-responsive" id="cli_dett" style="display:<?=!$cli?'none':''?>;">
                                    <table class="table">
                                        
                                        <tbody>
                                            <tr>
                                                <td><div><span class="btn btn-success" style="width: auto;cursor: default;"><i aria-hidden="true" class="fa fa-check" ></i> ID Cliente</a></span></div></td>
                                            
                                                <td style="text-align: right;font-weight: bold;" ><b class="id_cliente"> <?=$cli['id']?></b></td>
                                            </tr>
                                            <tr>
                                                <td><div><span class="btn btn-success" style="width: auto;cursor: default;"><i aria-hidden="true" class="fa fa-check" ></i> Nominativo</a></span></div></td>
                                                
                                                <td style="text-align: right;font-weight: bold;"><b class="cognome"><?=$cli['cognome']?></b>  <b class="nome"><?=$cli['nome']?></b><br> cf <b class="codfiscale"><?=$cli['codfiscale']?></b></td>
                                            </tr>
                                            <tr>
                                                <td><div><span class="btn btn-success" style="width: auto;cursor: default;" id="checkAna"><i aria-hidden="true" class="fa fa-check" ></i> Dati Anagrafici Completi</a></span></div></td>
                                            
                                                <td style="text-align: right;font-weight: bold;">nato a <b class="luogonasc"></b>(<b class="provnasc"></b>)<br>il <b class="datanasc"></b></td>
                                            </tr>
                                            <tr>
                                                <td><div><span class="btn btn-success" style="width: auto;cursor: default;" id="checkRes"><i aria-hidden="true" class="fa fa-check" ></i> Dati Residenza Completi</a></span></div></td>
                                            
                                                <td style="text-align: right;font-weight: bold;"> <b class="indirizzores"></b><br> <b class="capres"></b> -  <b class="luogores"></b> (<b class="provres"></b>)</td>
                                            </tr>
                                            <tr>
                                                <td><div><span class="btn btn-success" style="width: auto;cursor: default;" id="checkCon"><i aria-hidden="true" class="fa fa-check" ></i> Dati Contatti Completi</a></span></div></td>
                                            
                                                <td style="text-align: right;font-weight: bold;">email <b class="mail1"></b><br><b class="mobile1"></b></td>
                                            </tr>
                                            <tr>
                                                <td><div><span class="btn btn-success" style="width:auto;cursor: default;" id="checkPat"><i aria-hidden="true" class="fa fa-check" ></i> Dati Patente Completi</a></span></div></td>
                                                
                                                <td style="text-align: right;font-weight: bold;" ><div id="dettPat">numero <b class="numero_patente"></b> tipo <b class="tipo_patente"></b><br>validità dal <b class="data_rilascio"></b> al <b class="data_scadenza"></b><br>rilasciata da <b class="ente_rilascio"></b></div></td>
                                            </tr>
                                            <tr>
                                                <td><div><span class="btn btn-success" style="width: auto;cursor: default;"id="checkFoto"><i aria-hidden="true" class="fa fa-check" ></i> Scansione Patente Presente</a></span></div></td>
                                                
                                                <td style="text-align: right;font-weight: bold;"><img id="patfront_pwl"src="images/IT_licence_(front).jpg" style="max-height:100px;float" > <img id="patrear_pwl"src="images/IT_licence_(back).jpg" style="max-height:100px;"></td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>

                            </div>    
                        </div>
                    </div> 
                    <div class="col-xl-4 col-12">
                        <div class="card"><!-- card Veicolo -->
                            <div class="card-header card-header-danger card-header-icon">
                                <div class="card-icon">
                                    <i class="fa fa-motorcycle" aria-hidden="true"></i>
                                </div>
                                <h4 class="card-title"> Dati Veicolo</h4>
                            
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>Motoveicolo</td>
                                                <td style="font-weight: bold;text-align: right;"><?=$veicolo['marca']?> <?=$veicolo['modello']?></td>
                                            </tr>
                                            <tr>
                                                <td>targa</td>
                                                <td style="font-weight: bold;text-align: right;"><?=$veicolo['targa']?></td>
                                            </tr>
                                            
                                        </tbody>     
                                    </table>   
                                </div>
                                
                            </div>
                        </div>
                        <div class="card"><!-- card Prenotazione -->
                            <div class="card-header card-header-danger card-header-icon">
                                <div class="card-icon">
                                    <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                </div>
                                <h4 class="card-title"> Dati Prenotazione</h4>
                            
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>Note Prenotazione</td>
                                                <td colspan="2"style="font-weight: bold;text-align: right;"><?=$tr['note_pren']?></td>
                                            </tr>
                                            <tr>
                                                <td>Consulente</td>
                                                
                                                <td colspan="2"style="font-weight: bold;text-align: right;"><?=$tr['user_ins']?></td>
                                            </tr>
                                            <tr>
                                                <td>Data/Ora</td>
                                                
                                                <td colspan="2" style="font-weight: bold;text-align: right;"><?=date("d/m/Y H:i:s",strtotime($tr['data_ins']))?></td>
                                            </tr>
                                            <?php if($tr['data_pren']){ ?>
                                            <tr>    
                                            <td>Consegna Moto</td>    
                                            <td colspan="2">
                                                    <table style="width: -webkit-fill-available;">
                                                        <tr>
                                                            <td style="text-align: right;"><i class="fa fa-calendar"></i> Data/Ora</td>
                                                            <td style="font-weight: bold;text-align: right;"><?=date("d/m/Y H:i:s",strtotime($tr['data_pren']))?></td>
                                                        </tr>
                                                        <tr><td style="text-align: right;"><i class="fa fa-user"></i> Consulente</td><td style="font-weight: bold;text-align: right;"><?=$tr['user_pren']?></td></tr>
                                                       
                                                         <?php if($tr['stato_test']!=='P'){ ?>   
                                                       <tr><td style="text-align: right;"><i class="fa fa-sort-numeric-asc"></i> KM Consegna </td><td style="font-weight: bold;text-align: right;"><?=$tr['km_cons']?></td></tr>
                                                         <? } ?>                                                
                                                     
                                                                                                
                                                    </table>  
                                                    </td>  
                                            </tr>
                                            <? } ?>
                                            <?php if($tr['stato_test']!=='P'){ ?>   
                                            <tr>
                                                <td>Riconsegna Moto</td>
                                                <td colspan="2">
                                                    <table style="width: -webkit-fill-available;">
                                                        <tr>
                                                            <td style="text-align: right;"><i class="fa fa-calendar"></i> Data/Ora </td>
                                                            <td style="font-weight: bold;text-align: right;"><?=date("d/m/Y",strtotime($tr['data_ricons']))?></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: right;"> <i class="fa fa-user"></i> Consulente</td>
                                                            <td style="font-weight: bold;text-align: right;"><?=$tr['user_ricons']?></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: right;"><i class="fa fa-sort-numeric-asc"></i> KM Consegna</td>
                                                            <td style="font-weight: bold;text-align: right;"><?=$tr['km_ricons']?></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: right;"><i class="fa fa-hourglass"></i> Durata</td>
                                                            <td style="font-weight: bold;text-align: right;"><?=$tr['durata_test']?> minuti</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="font-weight: bold;text-align: right;" colspan="2"><?=seconds2human($tr['durata_test'])?></td>
                                                        </tr>
                                                    </table>      
                                                </td>
                                            </tr>
                                            <? } ?>

                                        </tbody>
                                    </table>    
                                </div>
                            </div>
                        </div>
                                
                            
                    </div>
                    <?php
                    if($tr['stato_test']!=='P'){?>
                    <div class="col-xl-3 col-12">
                        <div class="card"><!-- card Report -->
                            <div class="card-header card-header-primary card-header-icon">
                                <div class="card-icon">
                                    <i class="fa fa-print" aria-hidden="true"></i>
                                </div>
                                <h4 class="card-title"> Report</h4>
                            
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>Report Consegna</td>
                                                <td style="font-weight: bold;text-align: right;">
                                                 <?php
                                                    if( file_exists("docs/testride/report/".$tr['id']."_cons.pdf")){?>
                                                    <button type="button"  id="btnPdf1" class="btn btn-danger m-1" onclick="btnPdf1();"> <i aria-hidden="true" class="fa fa-file-pdf-o"></i> </button>
                                                    <? }else{?>
                                                            <button type="button" title="Stampa"  class="btn btn-primary m-1" onclick="prtPdf()"> <i aria-hidden="true" class="fa fa-print"></i> </button>

                                                            <?}?></td>
                                            </tr>
                                             <?php if($tr['data_ricons']){?>           
                                            <tr>
                                                <td>Report Riconsegna</td>
                                                <td style="font-weight: bold;text-align: right;">
                                                 <?php
                                                    if( file_exists("docs/testride/report/".$tr['id']."_ricons.pdf")){?>
                                            <button type="button"  id="btnPdf2" class="btn btn-danger m-1" onclick="btnPdf2();"> <i aria-hidden="true" class="fa fa-file-pdf-o"></i> </button>
                                            
                                            <? }else{?>
                                                            <button type="button" title="Stampa"  class="btn btn-primary m-1" onclick="prtPdf2()"> <i aria-hidden="true" class="fa fa-print"></i> </button>

                                                            <?}?></td>
                                            </tr>
                                            <tr>
                                                <td>Report integrale</td>
                                                <td style="font-weight: bold;text-align: right;">
                                                <?php
                                                        if( file_exists("docs/testride/report/".$tr['id']."_ricons.pdf")){?>
                                                <button type="button"  id="btnPdf2" class="btn btn-danger m-1" onclick="btnPdf2();"> <i aria-hidden="true" class="fa fa-file-pdf-o"></i> </button>
                                                <? }else{?>
                                                            <button type="button" title="Stampa"  class="btn btn-primary m-1" onclick="prtPdf3()"> <i aria-hidden="true" class="fa fa-print"></i> </button>

                                                            <?}?>       
                                                            
                                                          </td>
                                            </tr>

                                                <?}?>
                                        </tbody>     
                                    </table>   
                                </div>
                                
                            </div>
                        </div>
                    </div>  
                    <?}?>                               
                </div>    
                 <!-- end row card body-->

            </div><!-- end card row-->
            <!--modals-->
            <div class="modal fade" id="modal-animation-4" style="display: none;" aria-hidden="true">
                <form id="upform" action="controller/updateTestride.php" method="post"> 
                    <input type="hidden" id="id" name="id" value="<?=$tr['id']?>">
                    <input type="hidden" id="id_cliente" name="id_cliente" value="<?=$cli['id']?>">
                    <input type="hidden" name="action" value ="storeTestride">
                    <input type="hidden" name="signCode" id="signCode" value="">  
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content animated slideInUp">
                            <div class="modal-header">
                                <h5 class="modal-title">Riconsegna moto TestRide</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                    <div class="col-12  ">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">KM</label>
                                            <div class="col-sm-8">
                                            <input type="text" id="km" name="km_ricons" class="form-control" value="<?=$tr['km_ricons']?$tr['km_ricons']:0.0?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12  ">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Data </label>
                                            <div class="col-sm-8">
                                            <input type="date" id="data_ricons" name="data_ricons" class="form-control" required="" value="<?=$tr['data_pren']?date("Y-m-d", strtotime($tr['data_pren'])):''?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12  ">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Ora </label>
                                            <div class="col-sm-8">
                                            <input type="time" id="ora_ricons" name="ora_ricons" required="" class="form-control" value="<?=$tr['data_pren']?date("H:i", strtotime($tr['data_pren'])):''?>">
                                            </div>
                                        </div>
                                    </div> 
                                    <?php
                                        if( file_exists("docs/testride/sign/".$cli['id']."_sig_ricons_tr_".$tr['id'].".png")){

                                        
                                        ?>
                                    <img src="docs/testride/sign/<?=$cli['id']?>_sig_ricons_tr_<?=$tr['id']?>.png" >
                                        <?php }else{ ?>
                                    
                                    <div class="col-12">
                                        <div class="form-group row"  style="height: 300px;">
                                                    
                                                            <div id="signature-pad" class="m-signature-pad" style="width: 450px;height: 200px;">
                                                            <div class="m-signature-pad--body">
                                                                <canvas width="450" height="200"></canvas>
                                                            </div>
                                                            
                                                            <div class="m-signature-pad--footer">
                                                                <div class="description" style="padding-top: 20px;">
                                                                </div>
                                                                <button type="button" class="button btn btn-primary clear" data-action="clear">Pulisci Campo Firma</button>
                                                            </div>
                                                        </div> 
                                            </div>             
                                    </div> 
                                    <?php } ?>       

                                    <div class="col-12  ">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">FotoReport</label>
                                            <div class="col-sm-8">
                                            <input type="file" id="freport" name="freport"  class="" >
                                            <textarea rows="3" class="form-control" id="basic-textarea"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">FotoReport2</label>
                                            <div class="col-sm-8">
                                            <input type="file" id="freport2" name="freport2"  class=""> 
                                            <textarea rows="3" class="form-control" id="basic-textarea"></textarea>                                   </div>
                                        </div>
                                    </div>            
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Chiudi</button>
                                <button type="submit" class="btn btn-success"onclick="conferma();"><i class="fa fa-check-square-o"></i> Conferma Riconsegna</button>
                            </div>
                        </div>
                    </div>
                <form>                        
            </div>
            <div class="modal fade" id="modal-consegna" tabindex="-1" role="dialog" aria-labelledby="modal-consegnaLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Gestione Consegna</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <div class="card">
                                        <div class="card-header card-header-icon card-header-rose">
                                            <div class="card-icon">
                                            <i class="material-icons">language</i>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">Here is the Icon</h4>
                                                The place is close to Barceloneta Beach and bus stop just 2 min by walk and near to "Naviglio" where you can enjoy the main night life in Barcelona...
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                <div class="card">
                                        <div class="card-header card-header-icon card-header-rose">
                                            <div class="card-icon">
                                            <i class="material-icons">language</i>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">Here is the Icon</h4>
                                                The place is close to Barceloneta Beach and bus stop just 2 min by walk and near to "Naviglio" where you can enjoy the main night life in Barcelona...
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal" style="right:10px;">Annulla</button>
                            <button type="button" class="btn btn-success">Salva Modifiche</button>
                        </div>
                           
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1Label" aria-hidden="true"> <!--modal cliente-->
                <div class="modal-dialog modal-lg" style="max-width: 90%;margin-top:auto;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Inserimento Nuovo Cliente</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                            <form enctype="multipart/form-data" id="addformcli" method="post" >
                                <input type="hidden" id="actionCli" value ="storeCliente">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="card  col-xl-4">
                                            <div class="card-header card-header-info card-header-text">
                                                <div class="card-text">
                                                <h4 class="card-title">Dati Anagrafici</h4>
                                                </div>
                                            </div>
                                            <div class="card-body">

                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label">Ragione Sociale</label>
                                                        <div class="col-sm-9">
                                                            <div class="form-group">
                                                            <input class="form-control" oninput="this.value = this.value.toUpperCase()" type="text" id="ragsociale" name="ragsociale"  placeholder="Inserire Ragione Sociale"/>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label">Cognome</label>
                                                        <div class="col-sm-9">
                                                            <div class="form-group">
                                                            <input class="form-control" oninput="this.value = this.value.toUpperCase()" type="text"id="cognome" name="cognome" placeholder="Inserire Cognome" required="true" />
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label">Nome</label>
                                                        <div class="col-sm-9">
                                                            <div class="form-group">
                                                            <input class="form-control" oninput="this.value = this.value.toUpperCase()" type="text" id="nome" name="nome"  placeholder="Inserire Nome"  required="true" />
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="row" style="height: 54px;">
                                                    <label class="col-sm-3 col-form-label">Provincia di Nascita</label>
                                                        <div class="col-sm-9">
                                                            <div class="form-group">
                                                            <select class="form-control "   name="provnasc" id="provnasc" required="true" >

                                                            </select>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="row" style="height: 54px;">
                                                    <label class="col-sm-3 col-form-label">Luogo di Nascita</label>
                                                        <div class="col-sm-9">
                                                            <div class="form-group">
                                                            <select class="form-control " name="luogonasc" id="luogonasc"required="true" >

                                                            </select>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="row" style="height: 54px;">
                                                    <label class="col-sm-3 col-form-label">Data di nascita</label>
                                                        <div class="col-sm-9">
                                                            <div class="form-group">
                                                            <input class="form-control bmd-form-group" type="date" value=""  id="datanasc" name="datanasc" required="true" />
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label">Nazionalità</label>
                                                        <div class="col-sm-5">
                                                            <div class="form-group">
                                                            <input class="form-control "  oninput="this.value = this.value.toUpperCase()" type="text" id="nazionalita" name="nazionalita" required="true" value="I" />
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label">Sesso</label>
                                                        <div class="col-sm-5">
                                                            <div class="form-group">
                                                            <select class="form-control selectpicker" data-style="btn btn-link"id="sesso" name="sesso" required>
                                                                        <option value="">Seleziona</option>
                                                                        <option value="M">Maschio</option>
                                                                        <option value="F">Femmina</option>
                                                            </select>            
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="row" style="height: 54px;">
                                                    <label class="col-sm-3 col-form-label">Codice Fiscale</label>
                                                        <div class="col-sm-5">
                                                            <div class="form-group">
                                                            <input class="form-control"  type="text"id="codfiscale" readonly="readonly" name="codfiscale" required="true" />
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="col-sm-4">
                                                                <button class="btn btn-primary" id="cf"> Calcolo codice</button>
                                                            </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label">partita Iva</label>
                                                        <div class="col-sm-9">
                                                            <div class="form-group">
                                                            <input class="form-control" id="partitaiva" name="partitaiva"type="text" name="required"  />
                                                            </div>
                                                        </div>
                                                </div>
                                            
                                                
                                            </div>
                                        
                                        </div>
                                        <div class="card  col-xl-4">
                                            <div class="card-header card-header-info card-header-text">
                                                <div class="card-text">
                                                <h4 class="card-title">Dati Residenza</h4>
                                                </div>
                                            </div>
                                            <div class="card-body">

                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label">Indirizzo</label>
                                                        <div class="col-sm-9">
                                                            <div class="form-group">
                                                            <input class="form-control" oninput="this.value = this.value.toUpperCase()" type="text" name="indirizzores" id="indirizzores" required="true" placeholder="Inserire Indirizzo"/>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="row" style="height: 54px;">
                                                    <label class="col-sm-3 col-form-label">Provincia</label>
                                                        <div class="col-sm-9">
                                                            <div class="form-group">
                                                                <select class="form-control " name="provres" id="provres" required="true" >

                                                                </select>
                                                            </div>
                                                        </div>
                                                </div>
                                                
                                                <div class="row" style="height: 54px;">
                                                    <label class="col-sm-3 col-form-label">Comune</label>
                                                        <div class="col-sm-9">
                                                            <div class="form-group">
                                                            <select class="form-control"  name="luogores" id="luogores" required="true" ></select>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label">CAP</label>
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                            <input class="form-control" type="text" id="capres" name="capres" maxlength="5" required="true" placeholder="Inserire CAP"/>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label">Email Principale </label>
                                                        <div class="col-sm-9">
                                                            <div class="form-group">
                                                            <input class="form-control" oninput="this.value = this.value.toUpperCase()" type="text" id="mail1" name="mail1" required="true" placeholder="Inserire Email Principale"/>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label">Email Secondaria</label>
                                                        <div class="col-sm-9">
                                                            <div class="form-group">
                                                            <input class="form-control" oninput="this.value = this.value.toUpperCase()" type="text"id="mail2" name="mail2" placeholder="Inserire Email Secondaria"/>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label">Telefono Principale</label>
                                                        <div class="col-sm-9">
                                                            <div class="form-group">
                                                            <input class="form-control" type="text" id="tel1" name="tel1" maxlength="15" placeholder="Inserire Telefono Principale" />
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label">Telefono Secondario</label>
                                                        <div class="col-sm-9">
                                                            <div class="form-group">
                                                            <input class="form-control" type="text" id="tel2" name="tel2" maxlength="15"   placeholder="Inserire Telefono Secondario"/>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label">Cellulare Principale</label>
                                                        <div class="col-sm-9">
                                                            <div class="form-group">
                                                            <input class="form-control" type="text" id="mobile1" name="mobile1" maxlength="15" required="true"  placeholder="Cellulare Principale"/>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label">Cellulare Secondario</label>
                                                        <div class="col-sm-9">
                                                            <div class="form-group">
                                                            <input class="form-control" type="text"  id="mobile2" name="mobile2" maxlength="15"   placeholder="Cellulare Secondario"/>
                                                            </div>
                                                        </div>
                                                </div>
                                            
                                                
                                            </div>
                                        
                                        </div>
                                        <div class="card  col-xl-4">
                                            <div class="card-header card-header-info card-header-text">
                                                <div class="card-text">
                                                <h4 class="card-title">Dati Patente</h4>
                                                </div>
                                            </div>
                                            <div class="card-body">

                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label">Data Rilascio</label>
                                                        <div class="col-sm-9">
                                                            <div class="form-group">
                                                                <input class="form-control" type="date" name="data_rilascio" id="data_rilascio" required="true" value=""/>
                                                            
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label">Data Scadenza</label>
                                                        <div class="col-sm-9">
                                                            <div class="form-group">
                                                            <input class="form-control" type="date" name="data_scadenza" id="data_scadenza" required="true" />
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label">Ente Rilascio</label>
                                                        <div class="col-sm-9">
                                                            <div class="form-group">
                                                            <input class="form-control" oninput="this.value = this.value.toUpperCase()" type="text" name="ente_rilascio" id="ente_rilascio" required="true" />
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label">Numero </label>
                                                        <div class="col-sm-9">
                                                            <div class="form-group">
                                                            <input class="form-control" oninput="this.value = this.value.toUpperCase()" type="text" name="numero_patente" id="numero_patente" required="true" />
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label">Tipo Patente </label>
                                                        <div class="col-sm-5">
                                                            <div class="form-group">
                                                            <select class="form-control selectpicker" data-style="btn btn-link"  name="tipo_patente" id="tipo_patente" required="true" >
                                                                <option value="">Seleziona Tipo patente</option>
                                                                <option value="CIGC">CIGC</option>
                                                                <option value="AM">AM</option>
                                                                <option value="AM-B">AM-B</option>
                                                                <option value="A1">A1</option>
                                                                <option value="A1-B">A1-B</option>
                                                                <option value="A2">A2</option>
                                                                <option value="A2-B">A2-B</option>
                                                                <option value="A">A</option>
                                                                <option value="A-B">A-B</option>
                                                                <option value="B">B</option>
                                                            </select>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="row form-group" style="margin-top:30px;display:none">

                                                    <div class="fileinput fileinput-new text-center col-6 fileinput-exist" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail img-raised">
                                                            
                                                        </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                                                        <div>
                                                            <span class="btn btn-raised btn-round btn-default btn-file">
                                                                <span class="fileinput-new" style="display:block">Seleziona Fronte</span>
                                                                <span class="fileinput-exists">Sostituisci Fronte</span>
                                                            </span>
                                                            <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Rimuovi</a>
                                                        </div>
                                                    </div>

                                                    <div class="fileinput fileinput-new text-center col-6" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail img-raised">
                                                        </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                                                        <div>
                                                            <span class="btn btn-raised btn-round btn-default btn-file">
                                                                <span class="fileinput-new" style="display:block">Seleziona Retro</span>
                                                                <span class="fileinput-exists">Sostituisci Retro</span>
                                                            </span>
                                                            <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Rimuovi</a>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row ">
                                                    <div class="col-xl-6 col-12 ">
                                                        
                                                        <img id="patfront_pw" src="images/upload.png" rel="nofollow" alt="patfront" style="width:100%;">
                                                      
                                                        <input class="form-control"type="file" id="patfront" name="patfront"  accept="image/*" capture required="true"/>
                                                    </div>
                                                    <div class="col-xl-6 col-12 ">
                                                        <img id="patrear_pw"  src="images/upload.png" rel="nofollow" alt="patrear" style="width:100%;">
                                                        <input type="file" class="form-control" type="file" id="patrear"  name="patrear" accept="image/*" value=""capture required="true" />
                                                    </div>

                                                </div>
                                                
                                                
                                            
                                                
                                            </div>

                                        </div>
                                    </div>    
                                </div>
                            </form>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annulla</button>
                                <button type="submit" form="addformcli"id="addCli" class="btn btn-success">Inserisci cliente</button>
                            </div>

                    </div>
                </div>
            </div>

        </div> <!--end main card -->
    </div>
</div>
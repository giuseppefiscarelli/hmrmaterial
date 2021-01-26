<?php

//var_dump($cli);
?>
<div class="row">
    <div class="col-12">

        <div class="card" style="background-color: #dee2e68c;"> <!-- main card-->
            <div class="card-header card-header-info card-header-icon" >
                <div class="card-icon" >
                    <i class="fa fa-user fa-2x"  ></i>
                </div>
                    <h3 class="card-title"><?=$cli['cognome']?> <?=$cli['nome']?> #<?=$cli['id']?></h3> 
                <div style="float:right;">
                    <button type="button" onclick="modcli(<?=$cli['id']?>);" rel="tooltip" class="btn btn-success col-2" style="background-color: blue;" data-original-title="" title="Modifica dati Cliente">
                        <i class="material-icons">edit</i> Modifica dati Cliente
                    </button>
                    <button type="button" onclick="location.href='index.php'" rel="tooltip" class="btn btn-success col-2" data-original-title="" title="Torna alla pagina Home">
                        <i class="material-icons">home</i> Torna a Home
                    </button>
                    <button type="button" onclick="location.href='clienti.php'" rel="tooltip" class="btn btn-warning col-2" data-original-title="" title="Torna alla lista Clienti">
                        <i class="material-icons">list</i> Torna a Clienti
                    </button>
                    <button type="button" onclick="history.back();" rel="tooltip" class="btn btn-primary  col-2" data-original-title="" title="Torna Indietro">
                        <i class="material-icons">reply</i> Indietro
                    </button>
                    <button type="button" onclick="location.href=history.back()" rel="tooltip" class="btn btn-info col-2" data-original-title="" title="Stampa scheda Cliente">
                        <i class="material-icons">print</i> Stampa Scheda cliente
                    </button>
                                               
                    <button type="button" onclick="return swal({title: 'Vuoi Eliminare l\'Anagrafica?',icon: 'warning',button: 'Elimina',})"  href="<?=$deleteUrl?>?<?=$navOrderByQueryString?>&page=<?=$page?>&id=<?=$cli['id']?>&action=delete"rel="tooltip" class="btn btn-danger col-2" data-original-title="" title="">
                        <i class="material-icons">close</i> Elimina Anagrafica
                    </button>
                </div>           
            </div>
            
            <div class="card-body">
                <dic class="row">
                    <div class="col-lg-4 col-12">
                        <div class="card"><!-- card Report -->
                            <div class="card-header card-header-info card-header-icon">
                                <div class="card-icon">
                                    <i class="fa fa-address-book" aria-hidden="true"></i>
                                </div>
                                <h4 class="card-title"> Dati Anagrafici</h4>
                            
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr><td>Cognome</td>
                                                <td style="font-weight: bold;text-align: right;"><?=$cli['cognome']?></td>
                                            </tr>
                                            <tr>
                                                <td>Nome</td>
                                                <td style="font-weight: bold;text-align: right;"><?=$cli['nome']?></td>
                                            </tr>
                                            <tr>
                                                <td>Data di Nascita</td>
                                                <td style="font-weight: bold;text-align: right;"><?=date("d/m/Y",strtotime($cli['datanasc']))?></td>
                                            </tr>
                                            <tr>
                                                <td>Luogo di Nascita</td>
                                                <td style="font-weight: bold;text-align: right;"><?=$cli['user_mod']?getComune($cli['luogonasc']):$cli['luogonasc']?> (<?=$cli['provnasc']?>)</td>
                                            </tr>
                                            <tr>
                                                <td>Nazionalità</td>
                                                <td style="font-weight: bold;text-align: right;"><?=$cli['nazionalita']?></td>
                                            </tr>
                                            <tr>
                                                <td>Sesso</td>
                                                <td style="font-weight: bold;text-align: right;"><?=$cli['sesso']=='M'?'Maschile':''?><?=$cli['sesso']=='F'?'Femminile':''?></td>
                                            </tr>
                                            <tr>
                                                <td>Codice Fiscale</td>
                                                <td style="font-weight: bold;text-align: right;"><?=$cli['codfiscale']?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>        
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="card"><!-- card Report -->
                            <div class="card-header card-header-info card-header-icon">
                                <div class="card-icon">
                                    <i class="fa fa-address-card" aria-hidden="true"></i>
                                </div>
                                <h4 class="card-title"> Contatti</h4>
                            
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr><td><i class="fa fa-address-card"></i> Indirizzo</td>
                                                <td style="font-weight: bold;text-align: right;"><?=$cli['indirizzores']?><br><?=$cli['capres']?> - <?=$cli['user_mod']?getComune($cli['luogores']):$cli['luogores']?> (<?=$cli['provres']?>)</td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa fa-envelope"></i> Pec/email Principale</td>
                                                <td style="font-weight: bold;text-align: right;"><?=$cli['mail1']?></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa fa-envelope-o"></i> eMail Secondaria</td>
                                                <td style="font-weight: bold;text-align: right;"><?=$cli['mail2']?></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa fa-phone"></i> Telefono</td>
                                                <td style="font-weight: bold;text-align: right;"><?=$cli['tel1']?><br><?=$cli['tel2']?></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa fa-mobile"></i> Cellulare</td>
                                                <td style="font-weight: bold;text-align: right;"><?=$cli['mobile1']?><br><?=$cli['mobile2']?></td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>        
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="card"><!-- card Report -->
                            <div class="card-header card-header-info card-header-icon">
                                <div class="card-icon">
                                    <i class="fa fa-tasks" aria-hidden="true"></i>
                                </div>
                                <h4 class="card-title"> Dati Inserimento</h4>
                            
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr><td rowspan="2">Inserimento </td>
                                                <td>Data</td>
                                                <td style="font-weight: bold;text-align: right;"> <?=date("d/m/Y", strtotime($cli['data_ins']))?></td>
                                            </tr>
                                            <tr> 
                                            <td>Utente</td>   
                                            <td style="font-weight: bold;text-align: right;"><?=$cli['user_ins']?></td>
                                            </tr>
                                            <tr>
                                                <td rowspan="2">Ultima modifica</td>
                                                <td>Data</td>
                                                <td style="font-weight: bold;text-align: right;"><?=date("d/m/Y", strtotime($cli['data_mod']))?></td>
                                            </tr>
                                            <tr>
                                                <td>Utente</td>
                                                <td style="font-weight: bold;text-align: right;"><?=$cli['user_mod']?></td>
                                            </tr>
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>        
                            </div>
                        </div>
                    </div>
                
                </dic>


                <div class="row">
                    <div class="card">
                        <div class="card-header card-header-success">
                                    <ul class="nav nav-tabs" data-tabs="tabs">
                                       
                                       
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#patente" data-toggle="tab">Dati Patente</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#testride" data-toggle="tab">Test Ride</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#contratti" data-toggle="tab">Contratti</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#preventivi" data-toggle="tab">Preventivi</a>
                                        </li>
                                       
                                        <li class="nav-item">
                                            <a class="nav-link" href="#allegati" data-toggle="tab">Allegati</a>
                                        </li>
                                    </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="patente">
                                    <div class="row">
                                        <div class="col-lg-4 col-12">
                                            <div class="card"><!-- card Report -->
                                                <div class="card-header card-header-info card-header-icon">
                                                    <div class="card-icon">
                                                        <i class="fa fa-address-book fa-2x" aria-hidden="true"></i>
                                                    </div>
                                                    <h4 class="card-title"> Dati Patente</h4>
                                                
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalpatente">Aggiorna dati Patente</button>
                                                           
                                                            <!-- Modal -->
                                                            <div class="modal fade" id="modalpatente" tabindex="-1" role="dialog" aria-labelledby="modalpatenteLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="modalpatenteLabel">Aggiornamento Dati Patente</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            
                                                                                    <div class="card-header card-header-info card-header-text">
                                                                                        <div class="card-text">
                                                                                        <h4 class="card-title">Dati Patente</h4>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="card-body">
                                                                                        <form enctype="multipart/form-data" id="upPat" method="post">
                                                                                            
                                                                                            <input type="hidden" name="id_cliente" value ="<?=$cli['codfiscale']?>">
                                                                                            <input type="hidden" name="id" value ="<?=$cli['id']?>">
                                                                                            <div class="row">
                                                                                                <div class="col-lg-6 col-12">       
                                                                                                    <div class="row">
                                                                                                        <label class="col-sm-3 col-form-label">Data Rilascio</label>
                                                                                                            <div class="col-sm-9">
                                                                                                                <div class="form-group">
                                                                                                                    <input class="form-control" type="date" name="data_rilascio" id="data_rilascio" required="true" value="<?=$patente['data_rilascio']?>"/>
                                                                                                                
                                                                                                                </div>
                                                                                                            </div>
                                                                                                    </div>
                                                                                                    <div class="row">
                                                                                                        <label class="col-sm-3 col-form-label">Data Scadenza</label>
                                                                                                            <div class="col-sm-9">
                                                                                                                <div class="form-group">
                                                                                                                <input class="form-control" type="date" name="data_scadenza" id="data_scadenza" required="true" value="<?=$patente['data_scadenza']?>"/>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                    </div>
                                                                                                    <div class="row">
                                                                                                        <label class="col-sm-3 col-form-label">Ente Rilascio</label>
                                                                                                            <div class="col-sm-9">
                                                                                                                <div class="form-group">
                                                                                                                <input class="form-control" oninput="this.value = this.value.toUpperCase()" type="text" name="ente_rilascio" id="ente_rilascio" required="true" value="<?=$patente['ente_rilascio']?>" />
                                                                                                                </div>
                                                                                                            </div>
                                                                                                    </div>
                                                                                                    <div class="row">
                                                                                                        <label class="col-sm-3 col-form-label">Numero </label>
                                                                                                            <div class="col-sm-9">
                                                                                                                <div class="form-group">
                                                                                                                <input class="form-control" oninput="this.value = this.value.toUpperCase()" type="text" name="numero_patente" id="numero_patente" required="true" value="<?=$patente['numero_patente']?>" />
                                                                                                                </div>
                                                                                                            </div>
                                                                                                    </div>
                                                                                                    <div class="row">
                                                                                                        <label class="col-sm-3 col-form-label">Tipo Patente </label>
                                                                                                            <div class="col-sm-5">
                                                                                                                <div class="form-group">
                                                                                                                <select class="form-control selectpicker" data-style="btn btn-link"  name="tipo_patente" id="tipo_patente" required="true" >
                                                                                                                <?php if($patente['tipo_patente']){ ?>
																								                    <option value="<?=$patente['tipo_patente']?>" selected> <?=$patente['tipo_patente']?></option>
																						                        <?php } ?>
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
                                                                                                </div>
                                                                                                <div class="col-lg-6 col-12">
                                                                                                    <div class="row">
                                                                                                        <h4>Fronte</h4>
                                                                                                    </div>       
                                                                                        
                                                                                                    <div class="row ">
                                                                                                        <div class="col-xl-6 col-12 ">
                                                                                                            
                                                                                                            <img id="patfront_pw" src="docs/CRM/Allegati/patente/<?=$cli['id']?>_patfront.jpg?<?=strtotime("Y-m-d H:i:s")?>" rel="nofollow" alt="patfront" style="width:100%;">

                                                                                                            <input class="form-control"type="file" id="patfront" onchange="patefront(this);" name="patfront"  accept="image/*" capture >
                                                                                                        </div>
                                                                                                        

                                                                                                    </div>
                                                                                                    <div class="row">
                                                                                                        <h4>Retro</h4>
                                                                                                    </div>
                                                                                        
                                                                                                    <div class="row ">
                                                                                                        <div class="col-xl-6 col-12 ">
                                                                                                            <img id="patrear_pw" src="docs/CRM/Allegati/patente/<?=$cli['id']?>_patrear.jpg?<?=strtotime("Y-m-d H:i:s")?>"" rel="nofollow" alt="patrear" style="width:100%;">
                                                                                                            <input type="file" class="form-control" onchange="paterear(this)" type="file" id="patrear"  name="patrear" accept="image/*" value=""capture  >
                                                                                                        </div>
                                                                                                    
                                                                                                    </div>



                                                                                                </div>

                                                                                            </div>  
                                                                                        </form>
                                                                                                                                                                                                                                                            
                                                                                    </div>

                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                            <button type="submit" form="upPat"class="btn btn-success">Salva modifiche</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="table-responsive">
                                                        <table class="table">

                                                            <tbody>
                                                                <tr><td rowspan="2">Validità</td>
                                                                    <td>Dal</td>
                                                                    <td class="data_rilascio"style="font-weight: bold;text-align: right;"><?=date("d/m/Y", strtotime($patente['data_rilascio']))?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Al</td>
                                                                    <td class="data_scadenza"style="font-weight: bold;text-align: right;"><?=date("d/m/Y", strtotime($patente['data_scadenza']))?></td>
                                                                
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2">Ente rilascio</td>
                                                                    <td class="ente_rilascio"style="font-weight: bold;text-align: right;"><?=$patente['ente_rilascio']?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2">Numero</td>
                                                                    <td class="numero_patente"style="font-weight: bold;text-align: right;"><?=$patente['numero_patente']?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2">Tipo</td>
                                                                    <td class="tipo_patente"style="font-weight: bold;text-align: right;"><?=$patente['tipo_patente']?></td>
                                                                </tr>
                                                            
                                                            
                                                            </tbody>
                                                        </table>
                                                    </div>        
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                
                                                        <?php 
                                                                if(file_exists("docs/CRM/Allegati/patente/".$cli['id']."_patfront.jpg")){?>
                                                                <img alt="placeholder" src="docs/CRM/Allegati/patente/<?=$cli['id']?>_patfront.jpg?<?=strtotime("Y-m-d H:i:s")?>" style="width:100%;">
                                                                
                                                                <?} ?>
                                                </div>
                                                <div class="col-lg-6">
                                                <?php 
                                                                if(file_exists("docs/CRM/Allegati/patente/".$cli['id']."_patrear.jpg")){?>
                                                                <img alt="placeholder" src="docs/CRM/Allegati/patente/<?=$cli['id']?>_patrear.jpg?<?=strtotime("Y-m-d H:i:s")?>" style="width:100%;">
                                                                
                                                                <?} ?>
                                                </div>
                                            </div>
                                        </div>     
                                    </div>
                                    
                                </div>
                                <div class="tab-pane " id="testride">
                                    <div class="row">
                                        <div class="col-lg-8 col-12">
                                            <div class="card"><!-- card Report -->
                                                <div class="card-header card-header-danger card-header-icon">
                                                    <div class="card-icon">
                                                        <i class="fa fa-motorcycle fa-2x" aria-hidden="true"></i>
                                                    </div>
                                                    <h4 class="card-title"> Test Ride</h4>
                                                
                                                </div>
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>Data Test</th>
                                                                    <th>Consulente</th>
                                                                    <th>Veicolo</th>
                                                                    <th>Documenti</th>
                                                                    <th>Questionario</th>
                                                                </tr>        
                                                            </thead>
                                                            <tbody>
                                                                  <?php
                                                                    if($testride){
                                                                        foreach($testride as $tr){?>
                                                                    <tr>
                                                                        <td><?=date("d/m/Y H:i", strtotime($tr['data_pren']))?></td>
                                                                        <td><?=$tr['user_pren']?></td>
                                                                        <td><?=$tr['id_veicolo']?></td>
                                                                        <td></td>
                                                                        <td><?=$tr['stato_questionario']?></td>
                                                                    </tr>

                                                                    <?}
                                                                    }else{?>
                                                                    <tr><td colspan="5">Il cliente non ha effettuato Test Ride</td></tr>
                                                                    <?}?>     
                                                            
                                                            </tbody>            
                                                        </table>
                                                    </div>    
                                                                       
                                                </div>
                                            </div>
                                        </div>
                                    </div>            
                                </div>
                                <div class="tab-pane " id="contratti">
                                    <p>allegati tab</p>
                                </div>
                                <div class="tab-pane " id="preventivi">
                                    <p>allegati tab</p>
                                </div>
                                <div class="tab-pane " id="allegati">
                                    <p>allegati tab</p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>            
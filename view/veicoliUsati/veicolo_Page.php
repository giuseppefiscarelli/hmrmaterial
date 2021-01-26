<div class="row">
    <div class="col-12">

        <div class="card" style="background-color: #dee2e68c;"> <!-- main card-->
            <div class="card-header card-header-danger card-header-icon" >
                <div class="card-icon" >
                    <i class="fa fa-motorcycle fa-2x"  ></i>
                </div>
                    <h3 class="card-title"><?=$v['marca']?> <?=$v['modello']?> - <?=$v['targa']?></h3>        
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4 col-12">
                        <div class="card"><!-- card Report -->
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
                                                <td>Targa</td>
                                                <td><?=$v['targa']?></td>
                                            </tr>
                                            <tr>
                                                <td>Marca</td>
                                                <td><?=$v['marca']?></td>
                                            </tr>
                                            <tr>
                                                <td>Modello</td>
                                                <td><?=$v['modello']?></td>
                                            </tr>
                                            <tr>
                                                <td>Telaio</td>
                                                <td><?=$v['telaio']?></td>
                                            </tr>
                                            <tr>
                                                <td>Immatricolazione</td>
                                                <td><?=date("m/Y",strtotime($v['anno']))?></td>
                                            </tr>
                                            <tr>
                                                <td>Cilindrata</td>
                                                <td><?=$v['cilindrata']?> cc</td>
                                            </tr>
                                            <tr>
                                                <td>KM</td>
                                                <td><?=$v['km']?></td>
                                            </tr>
                                            <tr>
                                                <td>Colore</td>
                                                <td><?=$v['cod_colore']?><br><?=$v['des_colore']?></td>
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
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </div>
                                <h4 class="card-title"> Dati Cliente</h4>
                            
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                        <?php
                                         if($cli){?>
                                            <tr>
                                                <td>Id Cliente</td>
                                                <td><?=$cli['id']?></td>
                                            </tr>
                                            <tr>
                                                <td>Nominativo</td>
                                                <td><b style="font-weight: revert;"><?=$cli['cognome']?> <?=$cli['nome']?></b><br>CF <b style="font-weight: revert;"><?=$cli['codfiscale']?></b></td>
                                            </tr>
                                            <tr>
                                                <td>Dati Anagrafici</td>
                                                <td>nato a <b style="font-weight: revert;"><?=getComune($cli['luogonasc'])?>(<?=$cli['provnasc']?>)</b><br>il <b style="font-weight: revert;"><?=date("d/m/Y", strtotime($cli['datanasc']))?></b></td>
                                            </tr>
                                                <td>Dati residenza</td>
                                                <td><?=$cli['indirizzores']?><br><?=$cli['capres']?> - <?=getComune($cli['luogores'])?> (<?=$cli['provres']?>)</td>
                                            <tr>
                                                <td>Contatti</td>
                                                <td><b style="font-weight: revert;"><?=$cli['mail1']?><br><?=$cli['mobile1']?></b></td>
                                            </tr>
                                         <?}else{?>
                                         <tr> Dati Cliente non Disponibili</tr>    

                                         <?}?>
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
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </div>
                                <h4 class="card-title"> Dati Intestatario</h4>
                            
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                        <?php
                                         if($int){?>
                                            <tr>
                                                <td>Id Cliente</td>
                                                <td><?=$int['id']?></td>
                                            </tr>
                                            <tr>
                                                <td>Nominativo</td>
                                                <td><b style="font-weight: revert;"><?=$int['cognome']?> <?=$int['nome']?></b><br>CF <b style="font-weight: revert;"><?=$int['codfiscale']?></b></td>
                                            </tr>
                                            <tr>
                                                <td>Dati Anagrafici</td>
                                                <td>nato a <b style="font-weight: revert;"><?=getComune($int['luogonasc'])?>(<?=$int['provnasc']?>)</b><br>il <b style="font-weight: revert;"><?=date("d/m/Y", strtotime($int['datanasc']))?></b></td>
                                            </tr>
                                                <td>Dati residenza</td>
                                                <td><?=$int['indirizzores']?><br><?=$int['capres']?> - <?=getComune($int['luogores'])?> (<?=$int['provres']?>)</td>
                                            <tr>
                                                <td>Contatti</td>
                                                <td><b style="font-weight: revert;"><?=$int['mail1']?><br><?=$int['mobile1']?></b></td>
                                            </tr>
                                         <?}else{?>
                                         <tr> Dati Intestatario non Disponibili</tr>    

                                         <?}?>
                                        </tbody>
                                    </table> 
                                </div>       
                            </div>
                        </div>   
                    </div>
                    
                </div>
            </div>        



            </div>   
    </div>
    <div class="col-12">

        <div class="card" style="background-color: #dee2e68c;"> <!-- main card-->
            <div class="card-header card-header-primary card-header-icon" >
                <div class="card-icon" >
                    <i class="fa fa-indent"  ></i>
                </div>
                    <h3 class="card-title">Stato Veicolo</h3>        
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4 col-12">
                        <div class="card"><!-- card Report -->
                            <div class="card-header card-header-danger card-header-icon">
                                <div class="card-icon">
                                    <i class="fa fa-info" aria-hidden="true"></i>
                                </div>
                                <h4 class="card-title"> Info Veicolo</h4>
                            
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                    <tbody>
                                            <tr>
                                                <td>Stato d'uso</td>
                                                <td> <?php
                                                                if($v['stato_permuta']=="P"){?>
                                                                <span class="badge badge-pill badge-warning m-1">Presa in Carico</span>
                                                                <?    }
                                                                if($v['stato_permuta']=="A"){?>
                                                                <span class="badge badge-pill badge-success m-1">Permuta Accettata</span>
                                                                <?}
                                                                if($v['stato_permuta']=="V"){?>
                                                                <span class="badge badge-pill badge-success m-1">Permuta Valutata</span>
                                                                <?}?></td>
                                            </tr>
                                            <tr>
                                                <td>Abilitazione TestRide</td>
                                                <td> <?php
                                                                if($v['ab_testride']=="S"){?>
                                                                <span class="badge badge-pill badge-success m-1">Abilitato</span>
                                                                <?}
                                                                else{?>
                                                                <span class="badge badge-pill badge-warning m-1">Non Abilitato</span>
                                                                <?}
                                                                ?>
                                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Stato Veicolo</td>
                                                <td><?=$v['stato_generale']?'<span class="badge badge-pill badge-info m-1">'.tabCodifica('veicoli','stato_organi',$v['stato_generale']).'</span>':'Non Disponibile'?></td>
                                            </tr>
                                            <tr>
                                                <td>Presenza Anomalie / Danni</td>
                                                <td><?=$v['presenza_anomalie']=="S"?'<span class="badge badge-pill badge-danger m-1">Presenti</span>':'<span class="badge badge-pill badge-success m-1">Non Presenti</span>'?></td>                    
                                            </tr>
                                        </tbody>
                                    </table> 
                                </div>       
                            </div>
                            
                        </div>   
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="card"><!-- card Report -->
                            <div class="card-header card-header-info card-header-icon">
                                <div class="card-icon">
                                    <i class="fa fa-users" aria-hidden="true"></i>
                                </div>
                                <h4 class="card-title"> </h4>
                            
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                    <tbody>
                                            <tr>
                                                <td>Consulente Presa in Carico</td>
                                                <td> <b><?=$v['user_ins']?></b><br>il <b><?=date("d/m/Y H:i",strtotime($v['data_ins']))?></b></td>
                                            </tr>
                                            <tr>
                                                <td>Consulente Valutazione Stima</td>
                                                <td><b><?=$v['user_value']?></b><br> <b><?=$v['data_value']?'il '.date("d/m/Y H:i",strtotime($v['data_value'])):'Valutazione Stima non Presente'?></b></td>
                                            </tr>
                                            <tr>
                                                <td>Consulente Valutazione Stato d'Uso</td>
                                                <td><b><?=$v['user_val']?></b><br> <b><?=$v['data_val']?'il '.date("d/m/Y H:i",strtotime($v['data_val'])):"Valutazione Stato d'uso non Presente"?></b></td>
                                            </tr>
                                            <tr>
                                                <td>Consulente Vendita</td>
                                                <td>a</td>
                                            </tr>
                                        </tbody>
                                    </table> 
                                </div>       
                            </div>
                        </div>    
                    </div>
                    <div class="col-lg-2 col-12">
                        <div class="card"><!-- card Report -->
                            <div class="card-header card-header-danger card-header-icon">
                                <div class="card-icon">
                                    <i class="fa fa-list" aria-hidden="true"></i>
                                </div>
                                <h4 class="card-title"> Documenti</h4>
                            
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                       
                                            <tr>
                                                <td>Libretto</td>
                                                <td> <?php
                                                                            if($v['libretto']=="S"){?>
                                                                            <span class="badge badge-pill badge-success m-1">Presente</span>
                                                                            <?    }
                                                                                if($v['libretto']=="N"||$v['libretto']==NULL){?>
                                                                                <span class="badge badge-pill badge-danger m-1">Non Presente</span>
                                                                            <?}?></td>
                                            </tr>
                                            <tr>
                                                <td>CDP</td>
                                                <td><?php
                                                                            if($v['cdp']=="S"){?>
                                                                            <span class="badge badge-pill badge-success m-1">Presente</span>
                                                                            <?    }
                                                                                if($v['cdp']=="N"||$v['cdp']==NULL){?>
                                                                                <span class="badge badge-pill badge-danger m-1">Non Presente</span>
                                                                            <?}?></td>
                                            </tr>
                                            
                                         
                                        </tbody>
                                    </table> 
                                </div>       
                            </div>
                        </div>   
                    </div>
                    
                </div>
            </div>        



        </div>
    </div>

</div>            
<div class="row">
    <div class="col-12">
        <div class="card card-nav-tabs card-plain">
            <div class="card-header card-header-danger">
                <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                        <ul class="nav nav-tabs" data-tabs="tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#tabe-1"><i class="fa fa-bar-chart"></i> <span class="hidden-xs"> Valutazione</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tabe-2"><i class="fa fa-list"></i> <span class="hidden-xs">Dettaglio</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tabe-3"><i class="fa fa-paperclip"></i> <span class="hidden-xs">Allegati</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tabe-4"><i class="fa fa-cog"></i> <span class="hidden-xs">Procedura Ritiro</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tabe-5"><i class="fa fa-camera"></i> <span class="hidden-xs">Fotogallery</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tabe-6"><i class="fa fa-unlink"></i> <span class="hidden-xs">Anomalie</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tabe-7"><i class="fa fa-calendar"></i> <span class="hidden-xs">Cronologia Veicolo</span></a>
                                    </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-body "style="background-color: #dee2e68c;">
                <div class="tab-content">

                    <div class="tab-pane active" id="tabe-1">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="col-12">
                                        <div class="row">
                                            <button class="btn btn-outline-info  m-1" data-toggle="modal" data-target="#valutazionemodal"><i class="fa fa-refresh" aria-hidden="true"></i> Aggiorna Valutazione</button>
                                        </div> 
                                   
                                                <?php
                                                        if($v['costi_ripristino']>0){?>
                                        <div class="row">           
                                            <div class="col-12 col-lg-6">
                                                <div class="table-responsive ">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>Tipo</th>
                                                                <th>Valutazione</th>
                                                                <th>Note</th>
                                                                <th>Costo</th>
                                                            
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Stato Generale</td>
                                                                <td><?=$v['stato_generale']?tabCodifica('veicoli','stato_organi',$v['stato_generale']):''?></td>
                                                                <td><?=$v['note_generale']?></td>
                                                                <td class="importi"><?=$v['costo_generale']==0?$v['costi_ripristino']-$v['costo_prestazione']:$v['costo_generale']?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Motore</td>
                                                                <td><?=$v['stato_motore']?tabCodifica('veicoli','stato_organi',$v['stato_motore']):''?></td>
                                                                <td><?=$v['note_motore']?></td>
                                                                <td class="importi"><?=$v['costo_motore']?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Cambio</td>
                                                                <td><?=$v['stato_cambio']?tabCodifica('veicoli','stato_organi',$v['stato_cambio']):''?></td>
                                                                <td><?=$v['note_cambio']?></td>
                                                                <td class="importi"><?=$v['costo_cambio']?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Retrotreno</td>
                                                                <td><?=$v['stato_retrotreno']?tabCodifica('veicoli','stato_organi',$v['stato_retrotreno']):''?></td>
                                                                <td><?=$v['note_retrotreno']?></td>
                                                                <td class="importi"><?=$v['costo_retrotreno']?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Freni</td>
                                                                <td><?=$v['stato_freni']?tabCodifica('veicoli','stato_organi',$v['stato_freni']):''?></td>
                                                                <td><?=$v['note_freni']?></td>
                                                                <td class="importi"><?=$v['costo_freni']?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Batteria</td>
                                                                <td><?=$v['stato_batteria']?tabCodifica('veicoli','stato_organi',$v['stato_batteria']):''?></td>
                                                                <td><?=$v['note_batteria']?></td>
                                                                <td class="importi"><?=$v['costo_batteria']?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Strumentazione</td>
                                                                <td><?=$v['stato_strumenti']?tabCodifica('veicoli','stato_organi',$v['stato_strumenti']):''?></td>
                                                                <td><?=$v['note_strumenti']?></td>
                                                                <td class="importi"><?=$v['costo_strumenti']?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Interno</td>
                                                                <td><?=$v['stato_interno']?tabCodifica('veicoli','stato_organi',$v['stato_interno']):''?></td>
                                                                <td><?=$v['note_interno']?></td>
                                                                <td class="importi"><?=$v['costo_interno']?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Usura<br>Pneumatici</td>
                                                                <td><?=$v['stato_pneumatici']?tabCodifica('veicoli','stato_pneumatici',$v['stato_pneumatici']):''?></td>
                                                                <td><?=$v['note_pneumatici']?></td>
                                                                <td class="importi"><?=$v['costo_pneumatici']?></td>
                                                            </tr>
                                                        

                                                        </tbody>
                                                    
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <div class="table-responsive">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>Tipo</th>
                                                                <th>Valutazione</th>
                                                                <th>Note</th>
                                                                <th>Costo</th>
                                                            
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Frizione</td>
                                                                <td><?=$v['stato_frizione']?tabCodifica('veicoli','stato_organi',$v['stato_frizione']):''?></td>
                                                                <td><?=$v['note_frizione']?></td>
                                                                <td class="importi"><?=$v['costo_frizione']?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Sterzo<br>Avantreno</td>
                                                                <td><?=$v['stato_avantreno']?tabCodifica('veicoli','stato_organi',$v['stato_avantreno']):''?></td>
                                                                <td><?=$v['note_avantreno']?></td>
                                                                <td class="importi"><?=$v['costo_avantreno']?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Sospensioni</td>
                                                                <td><?=$v['stato_sosp']?tabCodifica('veicoli','stato_organi',$v['stato_sosp']):''?></td>
                                                                <td><?=$v['note_sosp']?></td>
                                                                <td class="importi"><?=$v['costo_sosp']?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Scarico</td>
                                                                <td><?=$v['stato_scarico']?tabCodifica('veicoli','stato_organi',$v['stato_scarico']):''?></td>
                                                                <td><?=$v['note_scarico']?></td>
                                                                <td class="importi"><?=$v['costo_scarico']?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Gruppi Ottici</td>
                                                                <td><?=$v['stato_fari']?tabCodifica('veicoli','stato_organi',$v['stato_fari']):''?></td>
                                                                <td><?=$v['note_fari']?></td>
                                                                <td class="importi"><?=$v['costo_fari']?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Cerchi<br>Conv-Eq.</td>
                                                                <td><?=$v['stato_ruote']?tabCodifica('veicoli','stato_organi',$v['stato_ruote']):''?></td>
                                                                <td><?=$v['note_ruote']?></td>
                                                                <td class="importi"><?=$v['costo_ruote']?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Esterno</td>
                                                                <td><?=$v['stato_esterno']?tabCodifica('veicoli','stato_organi',$v['stato_esterno']):''?></td>
                                                                <td><?=$v['note_esterno']?></td>
                                                                <td class="importi"><?=$v['costo_esterno']?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Prestazione<br>di servizio</td>
                                                            
                                                                <td colspan="2"><?=$v['note_prestazione']?></td>
                                                                <td class="importi"><?=$v['costo_prestazione']?></td>
                                                            </tr>
                                                        

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                            <?}?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="valutazionemodal" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered" style="min-width: 90%;">
                                <div class="modal-content border-info">
                                <div class="modal-header bg-info">
                                    <h5 class="modal-title text-white">Aggiornamento Valutazione</h5>
                                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <form id="addform" action="controller/updatePermute.php" method="post">   
                                    <input type="hidden" name="id" id="id" value="<?=$v['id']?>">
                                    <input type="hidden" name="costi_ripristino" id="costi_ripristino" value="<?=$v['costi_ripristino']?$v['costi_ripristino']:''?>">
                                    <input type="hidden" name="action" value="upVal"> 
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group row">
                                                <label for="basic-select" class="col-sm-3 col-form-label">Tipo Valutazione</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" id="tipo_valutazione" name="tipo_valutazione">
                                                        <option>Seleziona tipo valutazione</option>
                                                        <option value="A">Dettagliata</option>
                                                        <option value="B">Generica</option>
                                                        
                                                        </select>
                                                </div>
                                            </div>
                                        
                                        
                                        </div>
                                        <?php
                                                $dsta =  tabDecodifica('veicoli','stato_organi');
                                                $dstb =  tabDecodifica('veicoli','stato_pneumatici');
                                            
                                                ?>
                                    
                                    </div>        
                                    <div class="row" id="dettrowb" style="display:none;">
                                        <div class="table-responsive col-6">
                                            <table class="table ">
                                                <thead>
                                                    <tr>
                                                        <th>Tipo</th>
                                                        <th>Valutazione</th>
                                                        <th>Note</th>
                                                        <th style="width:20%">Costo</th>
                                                    
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Costi Ripristino <br>Stato Generale </td>
                                                    <td><select class="form-control form-control-sm" id="stato_generale" name="stato_generaleb"style="background-color: white;">
                                                    <option value="">Seleziona Stato</option>
                                                            <?php
                                                                foreach($dsta as $cod){?>
                                                            <option value="<?=$cod['codifica']?>" <?=$v['stato_generale']==$cod['codifica']?'selected':''?>><?=$cod['descrizione']?></option>

                                                            <? }?>
                                                        </select>
                                                    </td>
                                                    <td><input type="text" class="form-control form-control-sm" lenght="50" style="background-color: white;"id="note_generaleb"name="note_generaleb"value="<?=$v['note_generale']?>"></td>

                                                    <td><input type="number" class="form-control form-control-sm"  max="99999" style="background-color: white;"id="costo_generaleb" name="costo_generale"value="<?=$v['costo_generale']?$v['costo_generale']:0.00?>"></td>
                                                </tr>
                                                <tr>
                                                    <td>Prestazione<br>di Servizio</td>
                                                    
                                                    <td colspan="2"><input type="text" class="form-control form-control-sm" lenght="50" style="background-color: white;"id="note_prestazione2" name="note_prestazione"value="<?=$v['note_prestazione']?>"></td>

                                                    <td><input type="number" class="form-control form-control-sm"  max="99999" style="background-color: white;"id="costo_prestazione2" name="costo_prestazione"value="<?=$v['costo_prestazione']?$v['costo_prestazione']:0.00?>"></td>
                                                </tr>
                                                

                                                </tbody>
                                                </table>
                                            </div>
                                    
                                    </div>    
                                    <div class="row" id="dettrowa" style="display:none;">
                                                
                                            <div class="table-responsive col-6">
                                                <table class="table ">
                                                <thead>
                                                    <tr>
                                                        <th>Tipo</th>
                                                        <th>Valutazione</th>
                                                        <th>Note</th>
                                                        <th style="width:20%">Costo</th>
                                                    
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Motore</td>
                                                    <td><select class="form-control form-control-sm" id="stato_motore" name="stato_motore"style="background-color: white;">
                                                            <option value="">Seleziona Stato</option>
                                                            <?php
                                                                foreach($dsta as $cod){?>
                                                            <option value="<?=$cod['codifica']?>" <?=$v['stato_motore']==$cod['codifica']?'selected':''?>><?=$cod['descrizione']?></option>

                                                            <? }?>
                                                            
                                                        </select>
                                                    </td>
                                                    <td><input type="text" class="form-control form-control-sm" maxlenght="50" style="background-color: white;"id="note_motore" name="note_motore" value="<?=$v['note_motore']?>"></td>
                                                    <td ><input type="number" class="form-control form-control-sm"  max="99999" style="background-color: white;"id="costo_motore"name="costo_motore" value="<?=$v['costo_motore']?$v['costo_motore']:0.00?>"></td>
                                                </tr>
                                                <tr>
                                                    <td>Cambio</td>
                                                    <td><select class="form-control form-control-sm" id="stato_cambio" name="stato_cambio"style="background-color: white;">
                                                            
                                                            <option value="">Seleziona Stato</option>
                                                            <?php
                                                                foreach($dsta as $cod){?>
                                                            <option value="<?=$cod['codifica']?>" <?=$v['stato_cambio']==$cod['codifica']?'selected':''?>><?=$cod['descrizione']?></option>

                                                            <? }?>
                                                        </select>
                                                    </td>
                                                    <td><input type="text" class="form-control form-control-sm" lenght="50" style="background-color: white;"id="note_cambio"name="note_cambio" value="<?=$v['note_cambio']?>"></td>

                                                    <td><input type="number" class="form-control form-control-sm"  max="99999" style="background-color: white;"id="costo_cambio" name="costo_cambio"value="<?=$v['costo_cambio']?$v['costo_cambio']:0.00?>"></td>
                                                </tr>
                                                <tr>
                                                    <td>Retrotreno</td>
                                                    <td><select class="form-control form-control-sm" id="stato_retrotreno" name="stato_retrotreno"style="background-color: white;">
                                                            <option value="">Seleziona Stato</option>
                                                            <?php
                                                                foreach($dsta as $cod){?>
                                                            <option value="<?=$cod['codifica']?>" <?=$v['stato_retrotreno']==$cod['codifica']?'selected':''?>><?=$cod['descrizione']?></option>

                                                            <? }?>
                                                        </select>
                                                    </td>
                                                    <td><input type="text" class="form-control form-control-sm" lenght="50" style="background-color: white;"id="note_retrotreno" name="note_retrotreno" value="<?=$v['note_retrotreno']?>"></td>

                                                    <td><input type="number" class="form-control form-control-sm"  max="99999" style="background-color: white;"id="costo_retrotreno" name="costo_retrotreno"value="<?=$v['costo_retrotreno']?$v['costo_retrotreno']:0.00?>"></td>
                                                </tr>
                                                <tr>
                                                    <td>Freni</td>
                                                    <td><select class="form-control form-control-sm" id="stato_freni" name="stato_freni"style="background-color: white;">
                                                    <option value="">Seleziona Stato</option>
                                                            <?php
                                                                foreach($dsta as $cod){?>
                                                            <option value="<?=$cod['codifica']?>" <?=$v['stato_freni']==$cod['codifica']?'selected':''?>><?=$cod['descrizione']?></option>

                                                            <? }?>
                                                        </select>
                                                    </td>
                                                    <td><input type="text" class="form-control form-control-sm" lenght="50" style="background-color: white;"id="note_freni"name="note_freni" value="<?=$v['note_freni']?>"></td>

                                                    <td><input type="number" class="form-control form-control-sm"  max="99999" style="background-color: white;"id="costo_freni"name="costo_freni" value="<?=$v['costo_freni']?$v['costo_freni']:0.00?>"></td>
                                                </tr>
                                                <tr>
                                                    <td>Batteria</td>
                                                    <td><select class="form-control form-control-sm" id="stato_batteria" name="stato_batteria"style="background-color: white;">
                                                    <option value="">Seleziona Stato</option>
                                                            <?php
                                                                foreach($dsta as $cod){?>
                                                            <option value="<?=$cod['codifica']?>" <?=$v['stato_batteria']==$cod['codifica']?'selected':''?>><?=$cod['descrizione']?></option>

                                                            <? }?>
                                                        </select>
                                                    </td>
                                                    <td><input type="text" class="form-control form-control-sm" lenght="50" style="background-color: white;"id="note_batteria"name="note_batteria" value="<?=$v['note_batteria']?>"></td>

                                                    <td><input type="number" class="form-control form-control-sm"  max="99999" style="background-color: white;"id="costo_batteria" name="costo_batteria"value="<?=$v['costo_batteria']?$v['costo_batteria']:0.00?>"></td>
                                                </tr>
                                                <tr>
                                                    <td>Strumentazione</td>
                                                    <td><select class="form-control form-control-sm" id="stato_strumenti" name="stato_strumenti"style="background-color: white;">
                                                    <option value="">Seleziona Stato</option>
                                                            <?php
                                                                foreach($dsta as $cod){?>
                                                            <option value="<?=$cod['codifica']?>" <?=$v['stato_strumenti']==$cod['codifica']?'selected':''?>><?=$cod['descrizione']?></option>

                                                            <? }?>
                                                        </select>
                                                    </td>
                                                    <td><input type="text" class="form-control form-control-sm" lenght="50" style="background-color: white;"id="note_strumenti" name="note_strumenti"value="<?=$v['note_strumenti']?>"></td>

                                                    <td><input type="number" class="form-control form-control-sm"  max="99999" style="background-color: white;"id="costo_strumenti" name="costo_strumenti" value="<?=$v['costo_strumenti']?$v['costo_strumenti']:0.00?>"></td>
                                                </tr>
                                                <tr>
                                                    <td>Interno</td>
                                                    <td><select class="form-control form-control-sm" id="stato_interno" name="stato_interno" style="background-color: white;">
                                                    <option value="">Seleziona Stato</option>
                                                            <?php
                                                                foreach($dsta as $cod){?>
                                                            <option value="<?=$cod['codifica']?>" <?=$v['stato_interno']==$cod['codifica']?'selected':''?>><?=$cod['descrizione']?></option>

                                                            <? }?>
                                                        </select>
                                                    </td>
                                                    <td><input type="text" class="form-control form-control-sm" lenght="50" style="background-color: white;"id="note_interno" name="note_interno" value="<?=$v['note_interno']?>"></td>

                                                    <td><input type="number" class="form-control form-control-sm"  max="99999" style="background-color: white;"id="costo_interno" name="costo_interno"value="<?=$v['costo_interno']?$v['costo_interno']:0.00?>"></td>
                                                </tr>
                                                <tr>
                                                    <td>Usura<br>Pneumatici</td>
                                                    <td><select class="form-control form-control-sm" id="stato_pneumatici" name="stato_pneumatici"style="background-color: white;">
                                                    <option value="">Seleziona Stato</option>
                                                            <?php
                                                                foreach($dstb as $cob){?>
                                                            <option value="<?=$cob['codifica']?>" <?=$v['stato_pneumatici']==$cob['codifica']?'selected':''?>><?=$cob['descrizione']?></option>

                                                            <? }?>
                                                        </select>
                                                    </td>
                                                    <td><input type="text" class="form-control form-control-sm" lenght="50" style="background-color: white;"id="note_pneumatici" name="note_pneumatici"value="<?=$v['note_pneumatici']?>"></td>

                                                    <td><input type="number" class="form-control form-control-sm"  max="99999" style="background-color: white;"id="costo_pneumatici" name="costo_pneumatici"value="<?=$v['costo_pneumatici']?$v['costo_pneumatici']:0.00?>"></td>
                                                </tr>
                                                

                                                </tbody>
                                            
                                                </table>
                                            </div>
                                            <div class="table-responsive col-6">
                                                <table class="table ">
                                                <thead>
                                                    <tr>
                                                        <th>Tipo</th>
                                                        <th>Valutazione</th>
                                                        <th>Note</th>
                                                        <th style="width:20%">Costo</th>
                                                    
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Frizione</td>
                                                    <td><select class="form-control form-control-sm" id="stato_frizione" name="stato_frizione"style="background-color: white;">
                                                    <option value="">Seleziona Stato</option>
                                                            <?php
                                                                foreach($dsta as $cod){?>
                                                            <option value="<?=$cod['codifica']?>" <?=$v['stato_frizione']==$cod['codifica']?'selected':''?>><?=$cod['descrizione']?></option>

                                                            <? }?>
                                                        </select>
                                                    </td>
                                                    <td><input type="text" class="form-control form-control-sm" lenght="50" style="background-color: white;"id="note_frizione" name="note_frizione"value="<?=$v['note_frizione']?>"></td>

                                                    <td><input type="number" class="form-control form-control-sm"  max="99999" style="background-color: white;"id="costo_frizione" name="costo_frizione"value="<?=$v['costo_frizione']?$v['costo_frizione']:0.00?>"></td>
                                                </tr>
                                                <tr>
                                                    <td>Sterzo<br>Avantreno</td>
                                                    <td><select class="form-control form-control-sm" id="stato_avantreno" name="stato_avantreno"style="background-color: white;">
                                                    <option value="">Seleziona Stato</option>
                                                            <?php
                                                                foreach($dsta as $cod){?>
                                                            <option value="<?=$cod['codifica']?>" <?=$v['stato_avantreno']==$cod['codifica']?'selected':''?>><?=$cod['descrizione']?></option>

                                                            <? }?>
                                                        </select>
                                                    </td>
                                                    <td><input type="text" class="form-control form-control-sm" lenght="50" style="background-color: white;"id="note_avantreno" name="note_avantreno"value="<?=$v['note_avantreno']?>"></td>

                                                    <td><input type="number" class="form-control form-control-sm"  max="99999" style="background-color: white;"id="costo_avantreno" name="costo_avantreno"value="<?=$v['costo_avantreno']?$v['costo_avantreno']:0.00?>"></td>
                                                </tr>
                                                <tr>
                                                    <td>Sospensioni</td>
                                                    <td><select class="form-control form-control-sm" id="stato_sosp" name="stato_sosp"style="background-color: white;">
                                                    <option value="">Seleziona Stato</option>
                                                            <?php
                                                                foreach($dsta as $cod){?>
                                                            <option value="<?=$cod['codifica']?>" <?=$v['stato_sosp']==$cod['codifica']?'selected':''?>><?=$cod['descrizione']?></option>

                                                            <? }?>
                                                        </select>
                                                    </td>
                                                    <td><input type="text" class="form-control form-control-sm" lenght="50" style="background-color: white;"id="note_sosp"name="note_sosp"value="<?=$v['note_sosp']?>"></td>

                                                    <td><input type="number" class="form-control form-control-sm"  max="99999" style="background-color: white;"id="costo_sosp"name="costo_sosp" value="<?=$v['costo_sosp']?$v['costo_sosp']:0.00?>"></td>
                                                </tr>
                                                <tr>
                                                    <td>Scarico</td>
                                                    <td><select class="form-control form-control-sm" id="stato_scarico" name="stato_scarico"style="background-color: white;">
                                                    <option value="">Seleziona Stato</option>
                                                            <?php
                                                                foreach($dsta as $cod){?>
                                                            <option value="<?=$cod['codifica']?>" <?=$v['stato_scarico']==$cod['codifica']?'selected':''?>><?=$cod['descrizione']?></option>

                                                            <? }?>
                                                        </select>
                                                    </td>
                                                    <td><input type="text" class="form-control form-control-sm" lenght="50" style="background-color: white;"id="note_scarico"name="note_scarico"value="<?=$v['note_scarico']?>"></td>

                                                    <td><input type="number" class="form-control form-control-sm"  max="99999" style="background-color: white;"id="costo_scarico" name="costo_scarico" value="<?=$v['costo_scarico']?$v['costo_scarico']:0.00?>"></td>
                                                </tr>
                                                <tr>
                                                    <td>Gruppi Ottici</td>
                                                    <td><select class="form-control form-control-sm" id="stato_fari"name="stato_fari" style="background-color: white;">
                                                    <option value="">Seleziona Stato</option>
                                                            <?php
                                                                foreach($dsta as $cod){?>
                                                            <option value="<?=$cod['codifica']?>" <?=$v['stato_fari']==$cod['codifica']?'selected':''?>><?=$cod['descrizione']?></option>

                                                            <? }?>
                                                        </select>
                                                    </td>
                                                    <td><input type="text" class="form-control form-control-sm" lenght="50" style="background-color: white;"id="note_fari"name="note_fari"value="<?=$v['note_fari']?>"></td>

                                                    <td><input type="number" class="form-control form-control-sm"  max="99999" style="background-color: white;"id="costo_fari" name="costo_fari"value="<?=$v['costo_fari']?$v['costo_fari']:0.00?>"></td>
                                                </tr>
                                                <tr>
                                                    <td>Cerchi<br>Conv-Eq.</td>
                                                    <td><select class="form-control form-control-sm" id="stato_ruote" name="stato_ruote"style="background-color: white;">
                                                    <option value="">Seleziona Stato</option>
                                                            <?php
                                                                foreach($dsta as $cod){?>
                                                            <option value="<?=$cod['codifica']?>" <?=$v['stato_ruote']==$cod['codifica']?'selected':''?>><?=$cod['descrizione']?></option>

                                                            <? }?>
                                                        </select>
                                                    </td>
                                                    <td><input type="text" class="form-control form-control-sm" lenght="50" style="background-color: white;"id="note_ruote"name="note_ruote"value="<?=$v['note_ruote']?>"></td>

                                                    <td><input type="number" class="form-control form-control-sm"  max="99999" style="background-color: white;"id="costo_ruote" name="costo_ruote"value="<?=$v['costo_ruote']?$v['costo_ruote']:0.00?>"></td>
                                                </tr>
                                                <tr>
                                                    <td>Esterno</td>
                                                    <td><select class="form-control form-control-sm" id="stato_esterno" name="stato_esterno"style="background-color: white;">
                                                    <option value="">Seleziona Stato</option>
                                                            <?php
                                                                foreach($dsta as $cod){?>
                                                            <option value="<?=$cod['codifica']?>" <?=$v['stato_esterno']==$cod['codifica']?'selected':''?>><?=$cod['descrizione']?></option>

                                                            <? }?>
                                                        </select>
                                                    </td>
                                                    <td><input type="text" class="form-control form-control-sm" lenght="50" style="background-color: white;"id="note_esterno"name="note_esterno"value="<?=$v['note_esterno']?>"></td>

                                                    <td><input type="number" class="form-control form-control-sm"  max="99999" style="background-color: white;"id="costo_esterno" name="costo_esterno"value="<?=$v['costo_esterno']?$v['costo_esterno']:0.00?>"></td>
                                                </tr>
                                                <tr>
                                                    <td>Stato Generale </td>
                                                    <td><select class="form-control form-control-sm" id="stato_generale2" name="stato_generale"style="background-color: white;">
                                                    <option value="">Seleziona Stato</option>
                                                            <?php
                                                                foreach($dsta as $cod){?>
                                                            <option value="<?=$cod['codifica']?>" <?=$v['stato_generale']==$cod['codifica']?'selected':''?>><?=$cod['descrizione']?></option>

                                                            <? }?>
                                                        </select>
                                                    </td>
                                                    <td colspan="2"><input type="text" class="form-control form-control-sm" lenght="50" style="background-color: white;"id="note_generale2"name="note_generale"value="<?=$v['note_generale']?>"></td>

                                                </tr>
                                                <tr>
                                                    <td>Prestazione<br>di Servizio</td>
                                                    
                                                    <td colspan="2"><input type="text" class="form-control form-control-sm" lenght="50" style="background-color: white;"id="note_prestazione" name="note_prestazione"value="<?=$v['note_prestazione']?>"></td>

                                                    <td><input type="number" class="form-control form-control-sm"  max="99999" style="background-color: white;"id="costo_prestazione" name="costo_prestazione"value="<?=$v['costo_prestazione']?$v['costo_prestazione']:0.00?>"></td>
                                                </tr>
                                                

                                                </tbody>
                                                </table>
                                            </div>
                                                
                                    </div>  
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Annulla</button>
                                    <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> Aggiorna Valutazione</button>
                                </div>
                                </form>   
                                </div>
                            </div>
                        </div>    
                                          
                    </div>

                    <div class="tab-pane"  id="tabe-2">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="col-12">
                                        <div class="row">
                                            <button class="btn btn-outline-info  m-1" data-toggle="modal" data-target="#valutazionemodal"><i class="fa fa-refresh" aria-hidden="true"></i> Aggiorna Dettagli</button>
                                        </div>
                                        <div class="row" style="margin-top:30px;">
                                            <div class="col-12 col-lg-4">
                                                <div class="card"><!-- card Report -->
                                                    <div class="card-header card-header-danger card-header-icon" style="top:15px;padding:15px;">
                                                        <div class="card-icon">
                                                            <i class="fa fa-list" aria-hidden="true"></i>
                                                        </div>
                                                        <h4 class="card-title"> Documenti</h4>
                                                    
                                                    </div>
                                                    <div class="card-body"  style="top:15px;padding:15px;">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Libretto di Circolazione</td>
                                                                        <td> <?php
                                                                            if($v['libretto']=="S"){?>
                                                                            <span class="badge badge-pill badge-success m-1">Presente</span>
                                                                            <?    }
                                                                                if($v['libretto']=="N"||$v['libretto']==NULL){?>
                                                                                <span class="badge badge-pill badge-danger m-1">Non Presente</span>
                                                                            <?}?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Numero Intestatari</td>
                                                                        <td><?=$v['num_inte']?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>CDP</td>
                                                                        <td> <?php
                                                                            if($v['cdp']=="S"){?>
                                                                            <span class="badge badge-pill badge-success m-1">Presente</span>
                                                                            <?    }
                                                                                if($v['cdp']=="N"||$v['cdp']==NULL){?>
                                                                                <span class="badge badge-pill badge-danger m-1">Non Presente</span>
                                                                            <?}?>
                                                                            <br>
                                                                            <?php
                                                                            if($v['firma_cdp']=="S"){?>
                                                                            <span class="badge badge-pill badge-success m-1">Firmato</span>
                                                                            <?    }
                                                                                if($v['firma_cdp']=="N"||$v['firma_cdp']==NULL){?>
                                                                                <span class="badge badge-pill badge-danger m-1">Non Presente/Firmato</span>
                                                                            <?}?>
                                                                            <br>
                                                                            <?php
                                                                            if($v['doc_cdp']=="S"){?>
                                                                            <span class="badge badge-pill badge-success m-1">Documento Presente</span>
                                                                            <?    }
                                                                                if($v['doc_cdp']=="N"||$v['doc_cdp']==NULL){?>
                                                                                <span class="badge badge-pill badge-danger m-1">Non Presente</span>
                                                                            <?}?>
                                                                            
                                                                            
                                                                            </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Fermo Amministrativo</td>
                                                                        <td> <?php
                                                                            if($v['stato_fermo']=="S"){?>
                                                                            <span class="badge badge-pill badge-danger m-1">Presente</span>
                                                                            <?    }
                                                                                if($v['stato_fermo']=="N"||$v['stato_fermo']==NULL){?>
                                                                                <span class="badge badge-pill badge-success m-1">Non Presente</span>
                                                                            <?}?></td>
                                                                    </tr>
                                                                    
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>                
                                            </div>   
                                            <div class="col-12 col-lg-4">
                                                <div class="card"><!-- card Report -->
                                                    <div class="card-header card-header-danger card-header-icon"  style="top:15px;padding:15px;">
                                                        <div class="card-icon">
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </div>
                                                        <h4 class="card-title"> Scadenze</h4>
                                                    
                                                    </div>
                                                    <div class="card-body"  style="top:15px;padding:15px;">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Tassa di Circolazione</td>
                                                                        <td><?php
                                                                            if($v['stato_tassa']=="S"){?>
                                                                            <span class="badge badge-pill badge-success m-1">Presente</span>
                                                                            <br>scade il <?=date("d/m/Y",strtotime($v['data_tassa']))?>
                                                                            <?    }
                                                                                if($v['stato_tassa']=="N"||$v['stato_tassa']==NULL){?>
                                                                                <span class="badge badge-pill badge-danger m-1">Non Presente</span>
                                                                            <?}?>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Data Ultima Revisione</td>
                                                                        <td><?php
                                                                            if($v['data_revisione']=="S"){?>
                                                                            <span class="badge badge-pill badge-success m-1">Presente</span>
                                                                            <br>scade il <?=date("d/m/Y",strtotime($v['data_revisione']))?>
                                                                            <?    }
                                                                                if($v['data_revisione']=="N"||$v['data_revisione']==NULL){?>
                                                                                <span class="badge badge-pill badge-danger m-1">Non Presente</span>
                                                                            <?}?>
                                                                        </td>
                                                                    </tr>                    
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>  
                                            </div>
                                            <div class="col-12 col-lg-4">
                                                <div class="card"><!-- card Report -->
                                                    <div class="card-header card-header-danger card-header-icon"  style="top:15px;padding:15px;">
                                                        <div class="card-icon">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </div>
                                                        <h4 class="card-title"> Accessori</h4>
                                                    
                                                    </div>
                                                    <div class="card-body"  style="top:15px;padding:15px;">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <tbody>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>  
                                            </div>                         
                                        
                                        </div> 
                                    </div> 
                                </div> 
                            </div> 
                        </div>                                    
                       
                                       
                    </div>

                    <div class="tab-pane"  id="tabe-3">
                       
                    </div>

                    <div class="tab-pane"  id="tabe-4">
                        <p>tab 4</p>
                    </div>

                    <div class="tab-pane"  id="tabe-5">
                        <p>tab 5</p>
                    </div>

                    <div class="tab-pane"  id="tabe-6">
                        <p>tab 6</p>
                    </div>

                    <div class="tab-pane"  id="tabe-7">
                        <p>tab 7</p> 
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
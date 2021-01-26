        <div class="row">
            <div class="col-12">
                <div class="card " style="    background-color: #dee2e68c;">
                    <div class="card-header card-header-success card-header-icon" >
                        <div class="card-icon" >
                        <i class="fa fa-motorcycle"  style="width: auto;font-size: x-large;"></i>
                        </div>
                        <h3 class="card-title">Inserimento Test Ride</h3>
                        
                    </div>
                    <div class="card-body ">
                        <div class="row"><!--stato attività-->
                            <div class="col-md-12">
                                <div class="card ">
                                    <div class="card-header card-header-success card-header-icon" >
                                        <div class="card-icon" >
                                            <i class="fa fa-bar-chart"  style="font-size: large;"></i>
                                        </div>
                                            <h4 class="card-title">Stato Attività</h4>
                            
                                    </div>
                                    <div class="card-body ">
                                        <div class="row">
                                            <div class="col-lg-4 col-12">
                                                <p>Procedura Consegna<span class="float-right"><b class="procedura">0%</b></span></p>
                                                <div class="progress progress-line-danger">
                                                    <div class="progress-bar progress-bar-warning" id="procedura"role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: %;">
                                                    
                                                    </div>
                                                </div>

                                            

                                            </div>
                                            <div class="col-lg-4 col-12">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                    
                                                        <tbody>
                                                            <tr>
                                                                <td id="attCliente"><i aria-hidden="true" class="fa fa-ban" style="color:red;"></i> Dati Cliente</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td id="attPrivacy"><i aria-hidden="true" class="fa fa-ban" style="color:red;"></i> Consensi Privacy</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td id="attFirma"><i aria-hidden="true" class="fa fa-ban" style="color:red;"></i> Firma Digitale</td>
                                                                <td></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-12">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                    
                                                        <tbody>
                                                            <tr>
                                                                <td id="attVeicolo"><i aria-hidden="true" class="fa fa-ban" style="color:red;"></i> Scelta veicolo</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td id="attStato"><i aria-hidden="true" class="fa fa-ban" style="color:red;"></i> Verifica Stato Veicolo </td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td id="attDurata"><i aria-hidden="true" class="fa fa-ban" style="color:red;"></i> Tempo previsto Test Ride</td>
                                                                <td></td>
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
                        <div class="row"><!-- body-->
                        
                            <div class="col-xl-6 col-sm-12">
                                <div class="card ">
                                        <div class="card-header card-header-info card-header-icon" >
                                            <div class="card-icon" >
                                                <i class="fa fa-user"  style="font-size: large;"></i>
                                            </div>
                                                <h4 class="card-title">Cliente</h4>
                                
                                        </div>
                                    <div class="card-body ">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-static">Cerca Cliente</label>
                                            <input type="text" class="form-control"id="autocomplete" name="autocomplete" placeholder="Inserisci / Scansiona Codice Fiscale - Ricerca per Nome/Cognome - Ricerca per Email-cellulare">
                                        </div>
                                        <div class="form-group bmd-form-group">
                                            <button type="button" id="addbtncli" class="btn btn-info" data-toggle="modal" data-target="#modal1">
                                            <i class="fa fa-user-plus"></i> Inserisci nuovo Cliente
                                            </button>
                                        </div>
                                        <div class="table-responsive" id="cli_dett" style="display:none;">
                                            <table class="table">
                                                
                                                <tbody>
                                                    <tr>
                                                        <td><div><span class="btn btn-success" style="width: auto;cursor: default;"><i aria-hidden="true" class="fa fa-check" ></i> ID Cliente</a></span></div></td>
                                                    
                                                        <td style="text-align: right;font-weight: bold;" ><b class="id_cliente"></b></td>
                                                    </tr>
                                                    <tr>
                                                        <td><div><span class="btn btn-success" style="width: auto;cursor: default;"><i aria-hidden="true" class="fa fa-check" ></i> Nominativo</a></span></div></td>
                                                        
                                                        <td style="text-align: right;font-weight: bold;"><b class="cognome"></b> <b class="nome"></b><br> cf <b class="codfiscale"></b></td>
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
                            <div class="col-xl-6 col-sm-12">
                                <div class="card ">
                                
                                        <div class="card-header card-header-danger card-header-icon" >
                                            <div class="card-icon" >
                                                <i class="fa fa-motorcycle"  style="font-size: large;"></i>
                                            </div>
                                                <h4 class="card-title">Scelta Veicolo Test Ride</h4>
                                
                                        </div>
                                    <div class="card-body ">
                                        <form enctype="multipart/form-data" id="addform" action="controller/updateTestride.php" method="post">   

                                            <input type="hidden" name="id_cliente" id="id_cliente" value="">
                                            <input type="hidden" name="codfiscale" id="id_cf" value="">
                                            <input type="hidden" id="signCode" name="signCode"value="">
                                            <input type="hidden" name="action" value="saveTestridefast">
                                            <div class="form-row">
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal3">
                                                <i class="fa fa-plus"></i> <i class="fa fa-motorcycle"></i> Inserisci nuovo Veicolo
                                                </button>
                                            </div>

                                            <div class="form-group col-xl-8 bmd-form-group">
                                                <label for="id_veicolo">Motoveicolo</label>
                                                <select class="form-control selectpicker" data-style="btn btn-link" id="id_veicolo" name="id_veicolo">
                                                <option value="">Seleziona un modello</option> 
                                                    <?php
                                                        if($moto){
                                                        foreach ($moto as $m){                              
                                                        
                                                    ?>
                                                
                                                    <option data-content='<span class="badge m-1" style="background-color:<?=$m['colore_tr']?>"><i class="fa fa-motorcycle"></i> </span> <?=$m['marca']?> <?=$m['modello']?> <?=$m['targa']?>' value="<?=$m['targa']?>"> </option>
                                                    <?php 
                                                        }
                                                    } ?>
                                                </select>
                                            </div>

                                            <div class="form-group col-xl-4  bmd-form-group">
                                                <label for="p">KM</label>
                                                <input type="number" class="form-control" style="text-align: center;" id="km_cons" name="km_cons" />
                                            </div>
                                            <div class="form-group col-xl-5 bmd-form-group">
                                                <label for="durata_test">Durata</label>
                                                <select class="form-control selectpicker" data-style="btn btn-link" id="durata_test" name="durata_test">
                                                    <option >Seleziona Durata</option>
                                                
                                                    <option value="30">30 minuti</option>
                                                    <option value="60">1 ora</option>
                                                    <option value="90">1 ora e 1/2</option>
                                                    <option value="120">2 ore</option>
                                                    <option value="800">Intera giornata</option>
                                                    <option value="1000">Lungo Termine</option>
                                                    
                                                
                                                </select>
                                            
                                            </div>
                                            <div id="rowstato" style="display:none;" >        
                                                <hr>
                                                <div class="row" >
                                                
                                                    <div class="col-xl-4 col-12">
                                                        <button type="button" id="btn_stat_vei"class="btn btn-primary" data-toggle="modal" data-target="#modal2">
                                                        <i class="fa fa-list"></i> Stato veicolo
                                                        </button>
                                                    </div>
                                                    <div class="col-xl-8 col-12" id="anomalia" style="display:none;">
                                                        <div class="alert alert-warning">
                                                            
                                                            <span>
                                                            <b> Attenzione - </b> Il Veicolo selezionato presenta Anomalie/Danni</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>    
                                            
                                            <div id="rowfirma" style="display:none;">
                                                <hr>
                                                <div class="row" >
                                            
                                                    <div class="col-xl-4 col-12">
                                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal4">
                                                        <i class="fa fa-pencil"></i> Privacy/Firma
                                                        </button>
                                                    </div>    
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>    
                            </div> 
                             
                        </div>
                        
                    </div>
                    <div class="card-footer " style="justify-content: center;background-color: white;padding: 10px;border-radius: 6px;box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.14);">
                        <button type="submit" form="addform"id="saveTest" disabled class="btn btn-success">Salva Test Ride</button>
                      
                        <button type="button" class="btn btn-danger">Annulla</button>
                        
                    </div>
                </div>
            </div>
        </div>
   





                                                 

            <!--modal-->
            <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1Label" aria-hidden="true"> <!--modal cliente-->
                <div class="modal-dialog modal-lg" style="max-width: 90%;margin-top:auto;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal1title">Inserimento Nuovo Cliente</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                            <form enctype="multipart/form-data" id="addformcli" method="post" >
                                <input type="hidden" id="actionCli" name="actionCli" value ="newCli">
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
                                                            <input class="form-control" oninput="this.value = this.value.toUpperCase()" type="text" id="ragsociale" name="ragsociale"  readonly/>
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
            <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="modal2Label" aria-hidden="true">
                <div class="modal-dialog modal-lg" >
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Stato veicolo</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="table-responsive">
                                        <table class="table" id="veimodaltab">
                                            <tbody>
                                                <tr><td>Targa</td><td id="modal_targa"></td></tr>
                                                <tr><td>Marca</td><td id="modal_marca"></td></tr>
                                                <tr><td>Modello</td><td id="modal_modello"></td></tr>
                                                <tr> <td>KM</td><td id="modal_km"></td></tr>
                                            </tbody> 
                                        </table>
                                    </div>
                                </div>   
                                <div class="col-12 col-lg-6">
                                    <div class="table-responsive">
                                        <table class="table" id="veimodaltab2">
                                            <tbody>
                                                <tr><td>Condizioni Veicolo</td><td id="modal_stato_veicolo"></td></tr>
                                                <tr><td>Ultima verifica</td><td id="modal_mod_date"></td></tr>
                                                <tr><td>Operatore</td><td id="modal_mod_user"></td></tr>
                                                <tr> <td>Presenza Anomalie</td><td  id="modal_anomalie"></td></tr>
                                            </tbody> 
                                        </table>
                                    </div>
                                </div>                                
                            </div> 
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="images/HONDA.png" alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="images/800x400.png" alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100"src="images/800x400.png" alt="Third slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>   
                                </div>
                            </div>         
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annulla</button>
                            <button type="button" class="btn btn-success">Salva Modifiche</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="modal3Label" aria-hidden="true">
                <div class="modal-dialog modal-lg" >
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Inserimento Nuovo Veicolo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="card  col-12">
                                <div class="card-header card-header-danger card-header-text">
                                    <div class="card-text">
                                        <h4 class="card-title">Dati Veicolo</h4>
                                    </div>
                                </div>
                                <div class="card-body">

                                    <div class="row">
                                        <label class="col-sm-4 col-form-label">Targa</label>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <input class="form-control" oninput="this.value = this.value.toUpperCase()" type="text" id="new_targa"/>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-4 col-form-label">Marca</label>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <input class="form-control" oninput="this.value = this.value.toUpperCase()" type="text" id="new_marca"/>
                                                </div>
                                            </div>
                                    </div>

                                    <div class="row">
                                        <label class="col-sm-4 col-form-label">Modello</label>
                                            <div class="col-sm-5">
                                                <div class="form-group">
                                                    <input class="form-control" oninput="this.value = this.value.toUpperCase()" type="text" id="new_modello"/>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-4 col-form-label">Abilitazione Test Ride</label>
                                            <div class="form-check col-sm-5" style="padding-left:15px;">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                  
                                                    <span class="form-check-sign">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-4 col-form-label">Colore Calendario Test Ride</label>
                                            <div class="col-sm-5">
                                                <div class="form-group">
                                                    <select class="form-control selectpicker" data-style="btn btn-link" id="new_colore_tr" name="new_colore_tr">
                                                        <option value="#A0522D" data-content='<span class="badge m-1" style="background-color:#A0522D">sienna</span>'></option>
                                                        <option value="#CD5C5C" data-content='<span class="badge m-1" style="background-color:#CD5C5C">indianred</span>'></option>
                                                        <option value="#FF4500" data-content='<span class="badge m-1" style="background-color:#FF4500">orangered</span>'></option>
                                                        <option value="#008B8B" data-content='<span class="badge m-1" style="background-color:#008B8B">darkcyan</span>'></option>
                                                        <option value="#B8860B" data-content='<span class="badge m-1" style="background-color:#B8860B">darkgoldenrod</span>'></option>
                                                        <option value="#32CD32" data-content='<span class="badge m-1" style="background-color:#32CD32">limegreen</span>'></option>
                                                        <option value="#FFD700" data-content='<span class="badge m-1" style="background-color:#FFD700">gold</span>'></option>
                                                        <option value="#48D1CC" data-content='<span class="badge m-1" style="background-color:#48D1CC">mediumturquoise</span>'></option>
                                                        <option value="#87CEEB" data-content='<span class="badge m-1" style="background-color:#87CEEB">skyblue</span>'></option>
                                                        <option value="#FF69B4" data-content='<span class="badge m-1" style="background-color:#FF69B4">hotpink</span>'></option>
                                                        <option value="#87CEFA" data-content='<span class="badge m-1" style="background-color:#87CEFA">lightskyblue</span>'></option>
                                                        <option value="#6495ED" data-content='<span class="badge m-1" style="background-color:#6495ED">cornflowerblue</span>'></option>
                                                        <option value="#DC143C" data-content='<span class="badge m-1" style="background-color:#DC143C">crimson</span>'></option>
                                                        <option value="#FF8C00" data-content='<span class="badge m-1" style="background-color:#FF8C00">darkorange</span>'></option>
                                                        <option value="#C71585" data-content='<span class="badge m-1" style="background-color:#C71585">mediumvioletred</span>'></option>
                                                    </select>
                                                </div>
                                            </div>
                                    </div> 
                                    <div class="row">
                                        <label class="col-sm-4 col-form-label">KM</label>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <input class="form-control" type="number" id="new_km"/>
                                                </div>
                                            </div>
                                    </div>           
                                </div>
                            </div>
                        </div>        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annulla</button>
                        <button type="button" class="btn btn-success">Inserisci Veicolo</button>
                    </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="modal4Label" aria-hidden="true">
                <div class="modal-dialog modal-lg" style="max-width: 90%;margin-top:auto;">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Consensi Privacy / Acquisizione Firma Digitale</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">

                            <div class="card  col-xl-4 col-12">
                                <div class="card-header card-header-info card-header-text">
                                    <div class="card-text">
                                        <h4 class="card-title">Privacy</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                   
                                            <div class="row">
                                                <a href="#termcondmodal" data-toggle="modal" data-target="#termcondmodal">Termini e Condizioni</a>
                                            </div>
                                            <div class="row">
                                                <table >	
                                                    <tbody>
                                                        <tr>
                                                            <td >Il sottoscritto, in relazione all'informativa ricevuta ai sensi del Regolamento Europeo N. 679/2016 a quanto segue:</TD>
                                                        </tr>
                                                    </tbody>
                                                    </table>

                                            </div>
                                            <div class="row">
                                                <table >
                                                    <tbody id="privrow" style="background-color: rgba(255, 0, 0, 0.15);">
                                                        <tr>
                                                        <td style="text-align:justify;">
                                                            <b>1. Trattamento dei dati personali, riproduzione e pubblicazione immagini personali </b></TD>
                                                                                                                    
                                                                

                                                        </TR>
                                                        <tr>
                                                        <td style="text-align:justify;">
                                                            da parte della Honda Moto Roma S.p.A., Honda Motor Europe Ltd. - Italia, Honda Motor Europe Ltd o Honda
                                                            Italia Industriale S.p.A. e dei soggetti ad essa legati per finalita' legate alla effettuazione e promozione 
                                                            dell'evento a cui si e' inteso partecipare, e per le altre finalita' citate nell'informativa contenuta nel sito ufficiale
                                                            (hondaitalia.com/privacy), in conformita' al Regolamento Europeo N. 679/2016 e s.m..i.</TD>
                                                        </TR>
                                                        <tr>
                                                            <td>
                                                                
                                                                <div class="form-check form-check-radio form-check-inline">
                                                                    <label class="form-check-label">
                                                                        <input class="form-check-input" form="addform" type="radio" name="priv1" id="priv1a" value="A"> Presto il Consenso
                                                                        <span class="circle">
                                                                            <span class="check"></span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-check form-check-radio form-check-inline">
                                                                    <label class="form-check-label">
                                                                        <input class="form-check-input" form="addform" type="radio" name="priv1" id="priv1b" value="B"> Nego il Consenso
                                                                        <span class="circle">
                                                                            <span class="check"></span>
                                                                        </span>
                                                                    </label>
                                                                </div>


                                                            </td>
                                                        <tr>
                                                        <tr>
                                                            <td style="color:black;text-align:center;">Consenso Obbligatorio</td>
                                                        </tr>    
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="row">
                                                <table >
                                                    <tbody>
                                                        <tr>
                                                            <td style="text-align:justify;"><b>2. Comunicazione di promozioni, offerte, eventi ed inviti tramite e-mail</b></TD>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align:justify;">
                                                                                    da parte della Honda Moto Roma S.p.A., Honda Motor Europe Ltd. - Italia, Honda Motor Europe Ltd o
                                                                                    Honda Italia Industriale S.p.A. e dei soggetti ad essa legati,incluse le comunicazioni su programmi
                                                                                    e concorsi, ricerche e analisi di mercato, inviate tramite posta elettronica in conformita' al Regolamento
                                                                                    Europeo N. 679/2016 e s.m.i.</TD>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check form-check-radio form-check-inline">
                                                                    <label class="form-check-label">
                                                                        <input class="form-check-input"form="addform" type="radio" name="priv2" id="priv2a" value="A"> Presto il Consenso
                                                                        <span class="circle">
                                                                            <span class="check"></span>
                                                                        </span>

                                                                    </label>
                                                                    
                                                                </div>
                                                                <div class="form-check form-check-radio form-check-inline">
                                                                    <label class="form-check-label">
                                                                        <input class="form-check-input" form="addform"type="radio" name="priv2" id="priv2b" value="B"> Nego il Consenso
                                                                        <span class="circle">
                                                                            <span class="check"></span>
                                                                        </span>

                                                                    </label>
                                                                    
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tody>
                                                </table>
                                            </div>

                                            <div class="row">
                                            
                                                <table style="margin-bottom: 15px;">	
                                                    <tbody>
                                                        <tr>
                                                        <td style="text-align:justify;">
                                                        <b>3. Comunicazione di promozioni, offerte, eventi ed inviti tramite sms, contatto telefonico e/o posta</b></TD>
                                                                                                                    
                                                                

                                                        </TR>
                                                        <tr>
                                                        <td style="text-align:justify;">
                                                        da parte della Honda Moto Roma S.p.A., Honda Motor Europe Ltd. - Italia, Honda Motor Europe Ltd o Honda Italia
                                                        Industriale S.p.A. e dei soggetti ad essa legati,incluse le comunicazioni su programmi e concorsi, ricerche e 
                                                        analisi di mercato, effettuate via sms, telefono e/o posta in conformita' al Regolamento Europeo N.679/2016 e s.m.i.</TD>

                                                        </TR>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check form-check-radio form-check-inline">
                                                                    <label class="form-check-label">
                                                                        <input class="form-check-input" form="addform"type="radio" name="priv3" id="priv3a" value="A"> Presto il Consenso
                                                                        <span class="circle">
                                                                            <span class="check"></span>
                                                                        </span>

                                                                    </label>
                                                                    
                                                                </div>
                                                                <div class="form-check form-check-radio form-check-inline">
                                                                    <label class="form-check-label">
                                                                        <input class="form-check-input" form="addform"type="radio" name="priv3" id="priv3b" value="B"> Nego il Consenso
                                                                        <span class="circle">
                                                                            <span class="check"></span>
                                                                        </span>

                                                                    </label>
                                                                    
                                                                </div>
                                                            
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        
                                   
                                </div>   
                            </div>

                            <div class="card  col-xl-4 col-12">
                                <div class="card-header card-header-info card-header-text">
                                    <div class="card-text">
                                        <h4 class="card-title">Questionario Consegna</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <table>	
                                            <tbody>
                                                <tr>
                                                    <td style="text-align:justify;">
                                                        <b>1. Come e' venuto a conoscenza del programma eventi Honda?</b></TD>
                                                </tr>
                                                
                                                <tr>
                                                    <td>
                                                        <div class="form-check form-check-radio form-check-inline">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input"form="addform" type="radio" name="quest_tr1" id="quest_tr1a" value="A"> Pubblicità
                                                                <span class="circle">
                                                                    <span class="check"></span>
                                                                </span>
                                                            </label>
                                                        </div>

                                                        <div class="form-check form-check-radio form-check-inline">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" form="addform"type="radio" name="quest_tr1" id="quest_tr1b" value="B"> Internet
                                                                <span class="circle">
                                                                    <span class="check"></span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-radio form-check-inline">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input"form="addform" type="radio" name="quest_tr1" id="quest_tr1c" value="C"> Amici
                                                                <span class="circle">
                                                                    <span class="check"></span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                        
                                                        <div class="form-check form-check-radio form-check-inline">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" form="addform"type="radio" name="quest_tr1" id="quest_tr1d" value="D"> Redazionali
                                                                <span class="circle">
                                                                    <span class="check"></span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-radio form-check-inline">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" form="addform"type="radio" name="quest_tr1" id="quest_tr1e" value="E"> Concessionario Honda
                                                                <span class="circle">
                                                                    <span class="check"></span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                        
                                                        <div class="form-check form-check-radio form-check-inline">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" form="addform"type="radio" name="quest_tr1" id="quest_tr1f" value="F"> Altro
                                                                
                                                                <span class="circle">
                                                                    <span class="check"></span>
                                                                </span>
                                                                
                                                            </label>
                                                            <input type="text"form="addform" name="quest_tr1_text" id="quest_tr1_text"clsss="form-control form-control-sm">
                                                        </div>
                                                    </td>
                                                    
                                                </tr>
                                           
                                                <tr>
                                                    <td style="text-align:justify;"><b>2.Quale modello honda prevede di acquistare?</b></td><td></td>
                                                </tr>    
                                                <tr>
                                                    <td colspan="2">
                                                        <div class="form-group row">
                                                            <div class="col-sm-12">
                                                                <input type="text" maxlength="100"form="addform" name="quest_tr2_text" id="quest_tr2_text" class="form-control form-control-sm">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                    
                                                <tr>
                                                    <td style="text-align:justify;"><b>3.Entro quando??</b></td><td></td>
                                                </tr>
                                                <tr>

                                                    <td colspan="2">
                                                                <div class="form-check form-check-radio form-check-inline">
                                                                    <label class="form-check-label">
                                                                        <input class="form-check-input"form="addform" type="radio" name="quest_tr3" id="quest_tr3a" value="A"> 3 mesi
                                                                        <span class="circle">
                                                                            <span class="check"></span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-check form-check-radio form-check-inline">
                                                                    <label class="form-check-label">
                                                                        <input class="form-check-input"form="addform" type="radio" name="quest_tr3" id="quest_tr3b" value="B"> 6 Mesi
                                                                        <span class="circle">
                                                                            <span class="check"></span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-check form-check-radio form-check-inline">
                                                                    <label class="form-check-label">
                                                                        <input class="form-check-input" form="addform"type="radio" name="quest_tr3" id="quest_tr3c" value="C"> Oltre 6 Mesi
                                                                        <span class="circle">
                                                                            <span class="check"></span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                        
                                                        
                                                    </td>
                                                </tr>
                                        
                                                <tr>
                                                    <td style="text-align:justify;"><b>4. Quali quotidiani legge?</b></td><td></td>
                                                </tr>
                                                <tr>

                                                    <td colspan="2">
                                                        <div class="form-group row">
                                                            <div class="col-sm-12">
                                                                <input type="text" maxlength="100"form="addform"name="quest_tr4" id="quest_tr4" class="form-control form-control-sm">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                        
                                                <tr>
                                                    <td style="text-align:justify;"><b>5. Quali riviste legge?</b></TD><td></td>
                                                </tr>
                                                <tr>

                                                    <td colspan="2">
                                                        <div class="form-group row">
                                                            <div class="col-sm-12">
                                                                <input type="text" maxlength="100"form="addform"name="quest_tr5" id="quest_tr5" class="form-control form-control-sm">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            
                                                <tr>
                                                    <td style="text-align:justify;"><b>6. Quali radio ascolta?</b></TD><td></td>
                                                </tr>
                                                <tr>

                                                    <td colspan="2">
                                                        <div class="form-group row">
                                                            <div class="col-sm-12">
                                                                <input type="text" maxlength="100"form="addform"name="quest_tr6" id="quest_tr6" class="form-control form-control-sm">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            
                                                <tr>
                                                    <td style="text-align:justify;"><b>7. Quale sito visita più di frequente?</b></TD><td></td>
                                                </tr>
                                                <tr>

                                                    <td colspan="2">
                                                        <div class="form-group row">
                                                            <div class="col-sm-12">
                                                                <input type="text"maxlength="100"form="addform"name="quest_tr7" id="quest_tr7" class="form-control form-control-sm">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> 
                                </div>   

                            </div> 

                            <div class="card  col-xl-4 col-12">
                                <div class="card-header card-header-info card-header-text">
                                    <div class="card-text">
                                        <h4 class="card-title">Acquisizione Firma Digitale</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="table-responsive" >
                                            <table class="table">
                                                
                                                <thead class=" text-primary">
                                                    <tr>
                                                        <td>
                                                            Validità firma
                                                        </td>
                                                    </tr>

                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><i class="fa fa-check"></i> Presa visione stato veicolo</td>
                                                    </tr>

                                                    <tr>
                                                        <td><i class="fa fa-check"></i> Consenso Trattamento Dati Personali</td>
                                                    </tr>
                                                    <tr>
                                                        <td><i class="fa fa-check"></i> Presa visione Tipologia e Validità Patente di Guida</td>
                                                    </tr>
                                                    <tr>
                                                        <td><i class="fa fa-check"></i> Assunzione di Responsabilità</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>                    
                                    </div>
                                    <?php
                                        if(isMobile()){?>          
                                    <div class="col-12" style="margin-top:30%">
                                        <div class="form-group row"  style="height: 300px;">
                                                    
                                                        <div id="signature-pad" class="m-signature-pad" style="width: 100%;height: 235px;">
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
                                    <?php  
                                        }else{?>
                                         <div class="card-body">
                                                                    <div class="row">
                                                                        <h4 class="card-title">Acquisizione Firma</h4>
                                                                        </div>
                                                                        <div class="row">
                                                                        <div id="signatureDiv">
                                                                        
                                                                        <img id="signatureImage" src="images/sign.png" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card-footer">
                                                                <input class="btn btn-success"type="button" id="signButton" value="Acquisisci" onClick="tabletDemo()" />

                                                                </div>
                                                                <? }
                                                                    
                                                                    ?>      

                                </div>   

                            </div>  

                        </div>        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annulla</button>
                        <button disabled id="signbtn" onclick="conferma()" type="button" class="btn btn-success">Acquisisci Consensi e firma</button>
                    </div>
                    </div>
                </div>
            </div>
            
            
            <div class="modal fade" id="termcondmodal" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Termini e Condizioni</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table style="color:black;">
                            <tbody>
                            
                            <tr>
                            <td style="text-align:justify;font-size:10px;">
                            chiedo di poter usare in comodato di prova gratuito la moto/scooter HONDA
                                            </td> 
                            </tr>
                            <tr>
                            <td style="text-align:justify;font-size:10px;">
                            di proprieta' della Honda Moto Roma S.p.A. obbligandosi alla riconsegna del suddetto motoveicolo a semplice 
                                                                    richiesta della Honda Moto Roma S.p.A.,	a tal fine dichiaro:</td>

                            </tr>
                            <tr>
                            <td style="text-align:justify;font-size:10px;">
                            1. di aver gia' compiuto la maggiore eta' alla data della firma del presente esonero e di essere in possesso
                                di patente di guida specifica per la guida del mezzo che andro' ad utilizzare;</td>

                            </tr>
                            <tr>
                            <td style="text-align:justify;font-size:10px;">
                                2. di aver preso perfetta conoscenza del Codice della strada e di impegnarmi ad uniformarvisi;</td>
                            </tr>
                            <tr>
                            <td style="text-align:justify;font-size:10px;">
                                3. di aver personalmente constatato lo stato attuale del suddetto motoveicolo (piena efficienza e affidabilita' del mezzo)
                                e di uniformarmi prontamente a tutte le disposizioni e segnalazioni del personale della Honda Moto Roma S.p.A., Honda Motor Europe Ltd. - Italia, 
                                Honda Motor Europe Ltd o Honda Italia Industriale S.p.A. preposto e, considerato quanto precede, il suddetto motoveicolo e' perfettamente idoneo alla 
                                prova che intendo effettuare;</td>
                            </tr>
                            <tr>
                            <td style="text-align:justify;font-size:10px;">
                                4. di assumermi a tale riguardo ogni responsabilita' per la custodia di detto motoveicolo fino alla riconsegna del medesimo, 
                                per gli incidenti e per i conseguenti danni che ne derivassero sia a se stessi ed alle cose di loro proprieta', sia a terzi ed alle cose di terzi, compresi 
                                tra i terzi il pilota e le persone eventualmente trasportate dal suddetto motoveicolo;</td>
                            </tr>
                            <tr>
                            <td style="text-align:justify;font-size:10px;">
                                5. di impegnarmi a manlevare e tenere indenne la Honda Moto Roma S.p.A., Honda Motor Europe Ltd. - Italia, Honda Motor Europe
                                Ltd o Honda Italia Industriale S.p.A. nonch� qualsiasi loro rappresentante, incaricato, funzionario, dipendente o collaboratore, da qualsiasi responsabilita' 
                                comunque connessa o dipendente o conseguente alla prova che il sottoscritto intende effettuare;</td>
                            </tr>
                            <tr>
                            <td style="text-align:justify;font-size:10px;">
                                6. di impegnarmi tassativamente a non cedere il suddetto motoveicolo a persona non autorizzata dalla Honda Moto Roma S.p.A., 
                                Honda Motor Europe Ltd. - Italia, Honda Motor Europe Ltd o Honda Italia Industriale S.p.A. e che comunque non abbia sottoscritto la presente dichiarazione 
                                assumendomi fin d'ora tutte le responsabilita' per qualsiasi sanzione civile, amministrativa, penale, conseguente alla inosservanza di questa norma;</td>
                            </tr>
                            <tr>
                            <td style="text-align:justify;font-size:10px;">
                                7. di impegnarmi a risarcire la Honda Moto Roma S.p.A., Honda Motor Europe Ltd. - Italia, Honda Motor Europe Ltd o 
                                Honda Italia Industriale S.p.A. di tutti i danni da me causati agli impianti e alle persone nonche' ad indennizzare per tutte le spese ed oneri che abbia a 
                                sostenere per qualsiasi motivo di mio interesse;</td>
                            </tr>
                            <tr>
                            <td style="text-align:justify;font-size:10px;">
                                8. di impegnarmi a risarcire, per un valore minimo pari a euro 500,00 la Honda Moto Roma S.p.A., Honda Motor Europe Ltd. - Italia, 
                                Honda Motor Europe Ltd o Honda Italia Industriale S.p.A. di eventuali danni subiti nell'utilizzo del suddetto motoveicolo concesso in comodato gratuito;</td>
                            </tr>
                            <tr>
                            <td style="text-align:justify;font-size:10px;">
                                9.di trovarmi in perfetto stato di salute fisica e psichica.</td>
                            </tr>
                            <tr>
                            <td style="text-align:justify;font-size:10px;">
                                Io sottoscritto confermo espressamente tutto quanto sopra precede ad ogni e qualsiasi effetto di legge.</td>
                            </tr>
                            </tbody>
                        </table>    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark btn-sm" data-dismiss="modal"><i class="fa fa-times"></i> Chiudi</button>
                        
                    </div>
                    </div>
                </div>
            </div>
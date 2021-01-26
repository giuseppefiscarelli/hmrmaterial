<?php
$orderDirClass = $orderDir;
$orderDir = $orderDir === 'ASC' ? 'DESC' : 'ASC';
//$orderBy = 'lisdve';
//var_dump($pageShowUrl);

//var_dump($search1);


?>
<div class="row">
    <div class=col-lg-6>
        <div id="accordion1">
            <div class="card mb-2">
                <div class="card-header">
                    <button class="btn btn-link shadow-none collapsed" data-toggle="collapse" data-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">
                    <i class="fa fa-search"></i> Ricerca
                    </button>
                </div>

                <div id="collapse-1" class="collapse <?=$search1||$search2||$search3||$search4||$search5||$search6||$recordsPerPage?'show':''?>" data-parent="#accordion1" style="">
                    <div class="card-body">
                  
                        <form id="searchForm" method="get" action="<?=$pageUrl?>">
                            <input type="hidden" name="page" id="page" value="<?=$page?>" >
                            

                            <div class="form-group row">
                                <label for="search1" class="col-sm-6 col-form-label">Nominativo </label>
                                <div class="col-sm-6">
                                <input type="text" class="form-control" id="search1" name="search1" value="<?=$search1?>" placeholder="Ricerca per cognome/nome ">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="search2" class="col-sm-6 col-form-label">Codice Fiscale </label>
                                <div class="col-sm-6">
                                <input type="text" class="form-control" id="search2" name="search2" value="<?=$search2?>" placeholder="Ricerca per codice fiscale ">
                                </div>
                            </div>    
                            <div class="form-group row">
                                <div class="col-lg-12 col-12">
                                    <label for="recordsPerPage" class="col-lg-6 col-form-label">Record per Pagina</label>
                                    <select class="selectpicker"  data-style="select-with-transition"   
                                        name="recordsPerPage" 
                                        id="recordsPerPage" 
                                        onchange="document.forms.searchForm.submit()">
                                        <option value="">Seleziona</option>
                                        <?php foreach ($recordsPerPageOptions as $val){ ?>
                                        
                                        <option value="<?=$val?>" <?=$recordsPerPage ==$val?'selected':''?>><?=$val?></option>
                                        <?php }?>
                                     </select>
                                 </div>
                            </div>
                            <div class="form-footer" style="margin-top: 0px;">
                                <button type="button" onclick="location.href='<?=$pageUrl?>'" id="resetBtn" class="btn btn-danger"><i class="fa fa-trash"></i> Reset</button>
                                
                                <button type="submit" onclick="document.forms.searchForm.page.value=1" class="btn btn-success"><i class="fa fa-search"></i> Ricerca</button>
                            </div> 

                        </form>
                    </div>
                </div>
            </div>
        </div>           
    </div>             
</div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                  <i class="fa fa-users fa-2x" aria-hidden="true" style="width:auto;"></i>
                  
                  </div>
                  <h3 class="card-title">Clienti</h3>
                  
                </div>
                <div class="card-body">
                
                
                <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th> <a href="<?=$pageUrl?>?<?=$orderByQueryString ?>&orderBy=id&orderDir=<?=$orderDir?>">NDG</a></th>
                                    <th> <a href="<?=$pageUrl?>?<?=$orderByQueryString ?>&orderBy=cognome&orderDir=<?=$orderDir?>">Cliente</th>
                                    <th>Dati residenza</th>
                                    <th>Dati Anagrafici</th>
                                    <th>contatti</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    if($clienti){
                                        foreach($clienti as $cli){
                                            //$comuneres = getComune($cli['luogores']);
                                            //var_dump($comuneres);
                                            $cli['data_ins'] = date("d/m/Y", strtotime($cli['data_ins']));
                                            ?>
                                    <tr class="altcol1" >
                                            <td style="text-align:right;">ID <b><?=$cli['id']?></b><br>Ins. il <?=$cli['data_ins']?><br>Consulente <b><?=$cli['user_ins']?></b></td>
                                            <td ><a title="Visualizza Scheda Cliente" href="<?=$pageShowUrl?>?id=<?=$cli['id']?>">
                                                        <strong style="font-size:18px;"><?=$cli['cognome']?> <?=$cli['nome']?></strong><br>CF <?=$cli['codfiscale']?> </a></td>
                                            <td><?=$cli['indirizzores']?><br><?=$cli['capres']?> - <?=$cli['user_mod']?getComune($cli['luogores']):$cli['luogores']?> - (<?=$cli['provres']?>)</td>
                                            <td>Nato/a a <?=$cli['user_mod']?getComune($cli['luogonasc']):$cli['luogonasc']?>(<?=$cli['provnasc']?>)<br>il <?=date("d/m/Y", strtotime($cli['datanasc']))?></td>
                                            <td><?=$cli['mail1']?'<i class="fa fa-envelope"></i> '.$cli['mail1']:''  ?>
                                                <?=$cli['mail2']?'<br><i class="fa fa-envelope-o"></i> '.$cli['mail2']:''  ?>
                                                <?=$cli['tel1'] ?'<br><i class="fa fa-phone"></i> '.$cli['tel1'] :''  ?>
                                                <?=$cli['tel2'] ?' - '.$cli['tel2']:''  ?>
                                                <?=$cli['mobile1'] ?'<br><i class="fa fa-mobile"></i> '.$cli['mobile1'] :''  ?>
                                                <?=$cli['mobile2'] ?' - '.$cli['mobile2']:''  ?>

                                            </td>
                                            
                                                <td class="td-actions text-right">
                                                <button type="button" onclick="location.href='<?=$pageShowUrl?>?id=<?=$cli['id']?>'" rel="tooltip" class="btn btn-info" data-original-title="" title="Visualizza Scheda cliente">
                                                    <i class="material-icons">description</i>
                                               </button>
                                               
                                                <button type="button" onclick="return swal({title: 'Vuoi Eliminare l\'Anagrafica?',icon: 'warning',button: 'Elimina',})"  href="<?=$deleteUrl?>?<?=$navOrderByQueryString?>&page=<?=$page?>&id=<?=$cli['id']?>&action=delete"rel="tooltip" class="btn btn-danger" data-original-title="" title="">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </td>
                                            </td>
                                           
                                    </tr>
                                        <?php }
                                    }
                                ?>
                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>  

        
    </div> 
    <?php
    require_once 'view/navigation.php';
?>
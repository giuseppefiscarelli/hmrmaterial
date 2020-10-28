<?php
require_once '../functions.php';
require_once '../connection.php';
        /**
         * @var $conn mysqli
         */
$conn = $GLOBALS['mysqli'];
if(isset($_POST['search'])){
    $search = $_POST['search'];
        
        $sql ="SELECT * FROM anagr_clienti WHERE codfiscale LIKE '%$search%' OR cognome LIKE '%$search%' OR nome LIKE '%$search%'  ";
        //echo $sql;
        $result = $conn->query($sql);
        $response = array();
        while($row = $result->fetch_array() ){
            if (!preg_match('/[0-9]{3}/', $row['luogonasc'])) {
                $comune = $row['luogonasc'];
            } else {
                $comune = getComune($row['luogonasc']);
            }
    
    
            
            
        $response[] = array(
        "value"=>$row['id'],
        "label"=>$row['id'].' - '. $row['cognome'].' '.$row['nome'].' - '.$row['codfiscale'].' - nato/a a '.$comune.' il '.date("d/m/Y", strtotime($row['datanasc'])),
        "ragsociale" =>$row['ragsociale'],
        "nome" =>$row['nome'],
        "cognome" =>$row['cognome'],
        "id" =>$row['id'],
        "codfiscale" =>$row['codfiscale'],
        "partitaiva" =>$row['partitaiva'],
        "datanasc" =>$row['datanasc'],
        "luogonasc" =>$row['luogonasc'],
        "provnasc" =>$row['provnasc'],
        "sesso" =>$row['sesso'],
        "nazionalita" =>$row['nazionalita'],
        "indirizzores" =>$row['indirizzores'],
        "luogores" =>$row['luogores'],
        "provres" =>$row['provres'],
        "capres" =>$row['capres'],
        "mail1" =>$row['mail1'],
        "mail2" =>$row['mail2'],
        "tel1" =>$row['tel1'],
        "tel2" =>$row['tel2'],
        "mobile1" =>$row['mobile1'],
        "mobile2" =>$row['mobile2']
        );

        }

        echo json_encode($response);
        }

        exit;
                
        
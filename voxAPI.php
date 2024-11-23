<?php
$url = "";

$xml = simplexml_load_string(file_get_contents($url));

$data = array_map( fn($realestate) =>  [
    
'card_link' => (string)$realestate->card_link,
'type_id' => (string)$realestate->type_id,
'building' => (string)$realestate->building,
'local_number' => (string)$realestate->local_number,
'status_name' => (string)$realestate->status_name,
'area_usable' => (string)$realestate->area_usable,
'area' => (string)$realestate->area,
'rooms' => (string)$realestate->rooms,
'floor' => (string)$realestate->floor,
'type' => (string)$realestate->type,
], $xml->xpath("//realestate"));
?>

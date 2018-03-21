<?php
function sendFORMData($postThis){
    $ch = curl_init('http://lcase.ottofredriksson.se/carmodels');
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postThis);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json')
    );

    echo $result = curl_exec($ch);
}
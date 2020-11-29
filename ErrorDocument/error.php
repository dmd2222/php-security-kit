<?php

$err = $_GET['err'];
   
//Error code empty?
if( empty($err)==false){

//Help user in every case
    switch ($err) {
        case 404:
            http_response_code(404);
            echo "Site not found!";
            break;
        default:
            http_response_code(500);
            echo "Unknown error!";
            break;
            
            // and so on
    }



}else{
//No error code
http_response_code(500);
echo "Error handling failed! Please consult your webadmin.";
}


$response_code = http_response_code();
echo $response_code;

?>
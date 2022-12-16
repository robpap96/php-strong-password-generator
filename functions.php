<?php
function get_password($length) {
    $alphabet=['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
    $uppercase=['A','B','C','D','E','F','G','H','I','L','M','N','O','P','Q','R','S','T','U','V','Z'];
    $numbers=['0','1','2','3','4','5','6','7','8','9'];
    $symbols=['@','#','§','*','/','&','%',"^",'(',')'];
    $full_chacracters = array_merge($alphabet,$uppercase,$numbers,$symbols );
    

    if(!empty($length)){
        if(!is_numeric($length)) {
            $error = "hai inserito un parametro non valido";
        }
        elseif($length < 8){
            $error = 'la password deve essere lunga almeno 8 caratteri';
        }elseif ($length > 32) {
            $error = 'la password deve essere di massimo 32 caratteri';

        }else {
            $password = "";
            for($i=0; $i<$length; $i++){
                $random_character_index = rand(0, count($full_chacracters) - 1);
                $password .= $full_chacracters[$random_character_index];
            }
        }
    }
    return [
        "password" => $password,
        "error" => $error,
    ];
}
<?php
    $ch=curl_init();

    curl_setopt($ch,CURLOPT_URL,"https://www.google.com");
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch,CURLOPT_HEADER,0);

    $output=curl_exec($ch);

    if($output===FALSE){
        echo"my error".curl_error($ch);
    }

    curl_close($ch);

    print_r($output);
 ?>

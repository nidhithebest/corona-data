<?php
       $service_url = "https://corona.lmao.ninja/countries/india";
       $curl = curl_init($service_url);
       curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
       curl_setopt($curl, CURLOPT_POST, false);
       curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
echo "dollcy";
       $curl_response = curl_exec($curl);
echo "dollu";
      var_dump($curl_response);
     echo "hello dolly"+$curl_response['flag'];  
 curl_close($curl);
?>

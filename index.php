<?php
       $service_url = "https://corona.lmao.ninja/countries/india";
       $curl = curl_init($service_url);
       curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
       curl_setopt($curl, CURLOPT_POST, false);
       curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
       $curl_response = curl_exec($curl);
      var_dump($curl_response);
     echo $curl_response['countryInfo']['flag'];  
 curl_close($curl);
?>
<html>
<body>
     <div><img src="<?php echo $curl_response['countryInfo']['flag']; ?>" ></img></div>  
</body>

</html>

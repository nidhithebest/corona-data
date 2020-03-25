<?php
       $service_url = "https://corona.lmao.ninja/countries/india";
       $curl = curl_init($service_url);
       curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
       curl_setopt($curl, CURLOPT_POST, false);
       curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
       $curl_response = curl_exec($curl);
      
    $jsonObj = json_decode($curl_response);
$countryInfo = "countryInfo";
$flag = "flag";

echo "flaggie "+$jsonObj->$countryInfo->$flag;
 curl_close($curl);
?>
<html>
<body>
     <div><img src="<?php echo $jsonObj->$countryInfo->$flag; ?>" ></img></div>  
</body>

</html>

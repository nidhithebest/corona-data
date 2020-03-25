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
$cases = "cases";
$todayCases ="todayCases";
$deaths= "deaths";
$recovered = "recovered";
$active = "active";


echo $jsonObj->$countryInfo->$flag; 
curl_close($curl);
?>
<html>
<html>
<head>
<title>CORONA COUNT</title>
<style>
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
body{
background-image: url('https://cnet2.cbsistatic.com/img/rmj0S7_tD0BIrxU6Q-bYf_uzGS4=/1092x0/2020/03/06/05798b4a-3fda-4d7d-a10d-390b6ef0366b/gettyimages-1208505324.jpg');
}

tr {
  background: red;
  
}
td{
margin:20px;
padding:20px;
text-align:center;
vertical-align:middle;
font-weight: bold;

}



</style>
</head>
<body>

<div style="text-align:center;"><H1>CORONA COUNT NOW</H1></div>
<div style="margin-top:30px;"><img src="https://raw.githubusercontent.com/NovelCOVID/API/master/assets/flags/in.png" style="width:500px; height:200px;" /></div>

<div style="margin-top:30px;">
<table  align="center">
<tr>
<td>TOTAL CASES</td><td style="color:#fff;"><?php echo $jsonObj->$cases;  ?></td>
</tr>
<tr>
<td>TODAY'S CASES</td><td style="color:#fff;"><?php echo $jsonObj->$todayCases; ?></td>
</tr>
<tr>
<td>DEATHS</td><td style="color:#fff;"><?php echo $jsonObj->$deaths; ?></td>
</tr>
<tr>
<td>RECOVERED</td><td style="color:#fff;"><?php echo $jsonObj->$recovered; ?></td>
</tr>
<tr>
<td>ACTIVE</td><td style="color:#fff;"><?php echo $jsonObj->$active; ?></td>
</tr>

</table>
</div>


</body>
</html>

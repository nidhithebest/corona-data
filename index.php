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
$recovered = "recovered";
$active = "active";
$deaths = "deaths";
$todayDeaths = "todayDeaths";

curl_close($curl);
?>
<html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>CORONA COUNT</title>
<style>
@media screen and (max-width: 481px){

img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
body{
background-image: url('https://cnet2.cbsistatic.com/img/rmj0S7_tD0BIrxU6Q-bYf_uzGS4=/1092x0/2020/03/06/05798b4a-3fda-4d7d-a10d-390b6ef0366b/gettyimages-1208505324.jpg');
 #position: fixed;
  #left: 50%;
  #top: 50%;
  #transform: translate(-50%, -50%);
}

table{
Width:95%;

}

tr {
  


  
}
td{
#margin:20px;
padding:20px;
text-align:center;
vertical-align:middle;
font-weight: bold;

}
}

.green{
background:green;
}

.red{ 

background:red;
}

.blue{ 
background: #FFFF99;
}


</style>
</head>
<body>

<div style="text-align:center;"><H1>CORONA COUNT</H1></div>
<div style="margin-top:30px; text-align:center;"><h3>INDIA<h3></div>

<div style="margin-top:30px;">
<table  align="center">
<tr class="blue">
<td>TOTAL CASES</td><td><?php echo $jsonObj->$cases;  ?></td>
</tr>
<tr class="blue">
<td>TODAY'S CASES</td><td><?php echo $jsonObj->$todayCases; ?></td>
</tr>
<tr class="green">
<td>RECOVERED</td><td><?php echo $jsonObj->$recovered; ?></td>
</tr>
       <tr class="red">
<td>DEATHS</td><td><?php echo $jsonObj->$deaths; ?></td>
</tr>
       <tr class="red">
<td>TODAY'S DEATHS</td><td><?php echo $jsonObj->$todayDeaths; ?></td>
</tr>
<tr class="blue">
<td>ACTIVE</td><td><?php echo $jsonObj->$active; ?></td>
</tr>

</table>
</div>


</body>
</html>

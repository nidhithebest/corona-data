

<?php 

try {
    $restClient = new RestClient();
    $response   = $restClient->get('https://corona.lmao.ninja/countries/india');
    $statusCode = $response->getStatusCode();
    $content    = $response->getContent();
  echo "Total Cases: "+$content['cases'];
} catch(OperationTimedOutException $e) {
    // do something
}

?>

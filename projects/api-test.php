<?php

$response_body = CommonUtil::getHttpResponse("https://api.open-meteo.com/v1/forecast?latitude=35.6785&longitude=139.6823&hourly=temperature_2m&timezone=Asia%2FTokyo", "");
// echo "<pre>";
// var_dump($response_body);
// echo "</pre>";

// echo "<pre>";
// var_dump($response_body->hourly->temperature_2m);
// echo "</pre>";

foreach($response_body->hourly->temperature_2m as $item){
  echo $item;
}

// echo $response_body->hourly->temperature_2m;

?>

<section class="p-api-test">
  <div class="p-api-test__inner">

  </div>
</section>

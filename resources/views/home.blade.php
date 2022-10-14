
<?php

// $curl_handle=curl_init();
// curl_setopt($curl_handle, CURLOPT_URL,'https://gps.brtnusantara.com/dev/trans_semarang/api_v1/getCorridor format=flv');
// curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
// curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Your application name');
// $query = curl_exec($curl_handle);
// curl_close($curl_handle);

$query=file_get_contents('https://gps.brtnusantara.com/dev/trans_semarang/api_v1/getCorridor');
?>
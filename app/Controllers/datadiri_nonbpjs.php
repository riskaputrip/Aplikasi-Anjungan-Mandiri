<?php 
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://103.74.143.59/magang-trisakti/api/getPasien.php?nik=3242432323423432&kd_puskesmas=P5102012201',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;


        return view('datadiri_nonbpjs');

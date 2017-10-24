<?php
include "config.php";

  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'https://api.coinhive.com/stats/site?secret=cKcrVvIKQE2OvG4Uh4uLRvunBLzDVZTY'
  ));
  $result = curl_exec($curl);
  echo $result;
  curl_close($curl);

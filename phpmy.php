<?php
  $curl_handle=curl_init();
  curl_setopt($curl_handle,CURLOPT_URL,'http://127.0.0.1:5000/pull_aborted/');
  curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,2);
  curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1);
  $buffer = curl_exec($curl_handle);
  curl_close($curl_handle);
  if (empty($buffer)){
      print "Nothing returned from url.<p>";
  }
  else{
      print $buffer;
  }
?>
<?php
extract($_POST);
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "http://sample-env.xtfzxnrydy.us-west-1.elasticbeanstalk.com/api/player");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, array('name'=>$name));
$result = curl_exec($curl);
curl_close($curl);
print($result);
?>
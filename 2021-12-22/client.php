<?php
// $url = 'https://randomuser.me/api/?format=csv';

// $users = file_get_contents($url);

// file_put_contents('users.csv', $users, FILE_APPEND );

$ch = curl_init('https://randomuser.me/api/?format=csv');
$fp = fopen('server.php', "w");

curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);

curl_exec($ch);
if(curl_error($ch)) {
    fwrite($fp, curl_error($ch));
}
curl_close($ch);
fclose($fp);




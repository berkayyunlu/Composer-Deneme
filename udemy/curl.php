<?php

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.neyazalim.com/');
//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$source = curl_exec($ch);

//curl_close($ch);

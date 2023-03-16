<?php

$headers = [
    "User-Agent: REST API EXAMPLE",
    "Authorization: token {paste your github token here}",
    "X-GitHub-Api-Version: 2022-11-28"
];

$ch = curl_init();


// Github API must have User agent..

curl_setopt_array($ch,[

    
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_RETURNTRANSFER => true


]);


return $ch;


?>
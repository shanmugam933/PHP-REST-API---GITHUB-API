<?php
        $ch = require "init_curl.php";
        curl_setopt($ch,CURLOPT_URL,"https://api.github.com/user/repos");
        //curl_setopt($ch,CURLOPT_POST,true);
        curl_setopt($ch,CURLOPT_POSTFIELDS, json_encode($_POST));
        $response = curl_exec($ch);

        $data = json_decode($response,true);

        //Checking the status code
          $status_code = curl_getinfo($ch,CURLINFO_RESPONSE_CODE);
 
          if($status_code === 422){
            echo "Invalid data: ";
            print_r($data["errors"]);
            exit;

          }
          
          if($status_code !== 201){
            echo "Unexpected Status code: $status_code";
            var_dump($data);
            exit;
          }
          curl_close($ch);
?>

<?php require"header.html"?>

<h1>New Repository</h1>
<p>Respository created Successfully
          <a href="show.php?full_name=<?=$data["full_name"]?>">Show</a>
</p>

<?php require"footer.html"?>
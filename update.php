<?php
        $full_name = $_POST["full_name"];
        $ch = require "init_curl.php";
        curl_setopt($ch,CURLOPT_URL,"https://api.github.com/repos/{$full_name}");
        //curl_setopt($ch,CURLOPT_POST,true);

        curl_setopt($ch,CURLOPT_CUSTOMREQUEST,"PATCH");
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
          
          if($status_code !== 200){
            echo "Unexpected Status code: $status_code";
            var_dump($data);
            exit;
          }
          curl_close($ch);
?>

<?php require"header.html"?>

<h1>Update Repository</h1>
<p>Respository updated Successfully
          <a href="show.php?full_name=<?=$data["full_name"]?>">Show</a>
</p>

<?php require"footer.html"?>
<?php
try {
        $full_name = $_GET["full_name"];
        $ch = require "init_curl.php";
        curl_setopt($ch,CURLOPT_URL,"https://api.github.com/repos/$full_name");
        //curl_setopt($ch,CURLOPT_POST,true);

        curl_setopt($ch,CURLOPT_CUSTOMREQUEST,"DELETE");
        // curl_setopt($ch,CURLOPT_POSTFIELDS, json_encode($_POST));
        $response = curl_exec($ch);

        $data = json_decode($response,true);

        //Checking the status code
          $status_code = curl_getinfo($ch,CURLINFO_RESPONSE_CODE);

      
          
          if($status_code !== 204){
            echo "Unexpected Status code: $status_code";
            var_dump($data);
            exit;
          }
          curl_close($ch);
        }
        catch(Exception $e) {
          // Show error message to user
          require "header.html";
          echo "<h1>Delete Repository</h1>";
          echo "<p>Error Deleting Repository: " . $e->getMessage() . "</p>";
          echo "<p><a href='index.php'>Go back to home</a></p>";
          require "footer.html";
      }
?>

<?php require"header.html"?>

<h1>Delete Repository</h1>
<p>Respository Deleted Successfully
          <a href="index.php">Show all Respository</a>
</p>

<?php require"footer.html"?>
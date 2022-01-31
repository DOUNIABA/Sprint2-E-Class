<?php
$data=file_get_contents("student.json");
$js=json_decode($data,true)[0];

echo(
   
          $js['Name'].
          $js['Email'].
          $js['phone'].
          $js['email number'].
          $js['Date dadmission']

)

?>


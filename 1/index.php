<?php
$contents = file_get_contents("biodata.json");
$result = json_decode($contents, true);
print_r($result)    
?>
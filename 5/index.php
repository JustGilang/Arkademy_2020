<?php
$nama="9931411132314232";
$id=str_split($nama,3);

for($x=0;$x<count($id);$x++){
	echo $id[$x]."-";
}
?>
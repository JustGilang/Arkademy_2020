<?php

function triangleOne($width)
{
    echo "Triangle 1 : <br><br>";
    if ($width) {
        for ($row = 1; $row <= $width; $row++) {
            for ($col = 1; $col <= $row; $col++) { 
                echo $col ." ";
            }
            echo "<br>";
        }
    } 
}
triangleOne(1);
echo "<br>";

function trangleTwo($width)
	{
        echo "Triangle 5 : <br><br>";
		if ($width) {
			for ($row = 1; $row <= $width; $row++) {
				for ($col = 1; $col <= $row; $col++) { 
					echo $col ." ";
				}
				echo "<br>";
			}
		} 
	}
trangleTwo(5);
echo "<br>";

function trangleThree($width)
	{
        echo "Triangle 3 : <br><br>";
		if ($width) {
			for ($row = 1; $row <= $width; $row++) {
				for ($col = 1; $col <= $row; $col++) { 
					echo $col ." ";
				}
				echo "<br>";
			}
		} 
	}
	trangleThree(3);
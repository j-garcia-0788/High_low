<?php

($argc == 2);

fwrite(STDOUT, 'Enter a starting a number ');
	$starting = trim(fgets(STDIN)); 

fwrite(STDOUT, 'Enter an ending number ');
	$ending = trim(fgets(STDIN));

fwrite(STDOUT, 'Enter incrementation ');
	$count = trim(fgets(STDIN));

for ($i = $starting; $i <= $ending; $i += $count) {
    echo "\$i has a value of {$i}\n";
}
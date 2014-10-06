<?php

($argc == 2);

fwrite(STDOUT, "Enter a minimum a number. \n");
	$starting = trim(fgets(STDIN)); 

fwrite(STDOUT, "Enter an maximum number. \n");
	$ending = trim(fgets(STDIN));

fwrite(STDOUT, 'Enter incrementation. ');
	$count = trim(fgets(STDIN));

for ($i = $starting; $i <= $ending; $i += $count) {
    echo "\$i has a value of {$i}\n";
}
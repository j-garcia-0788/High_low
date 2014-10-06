<?php

($argc == 2);

fwrite(STDOUT, "Enter a minimum a number. \n");
	$starting = trim(fgets(STDIN)); 

fwrite(STDOUT, "Enter an maximum number. \n");
	$ending = trim(fgets(STDIN));

if (!is_numeric($starting) || !is_numeric($ending)){
	fwrite(STDOUT, "Hey! We need a number! \n");
	exit(0);
}

fwrite(STDOUT, "Enter incrementation. \n");
	$count = trim(fgets(STDIN));
if (!is_numeric($count)){
		$count = 1;
}

for ($i = $starting; $i <= $ending; $i += $count) {
    echo "\$i has a value of {$i}\n";
}
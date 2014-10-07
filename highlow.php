<?php

fwrite(STDOUT, 'Guess the number between 1 and 100 ');

$answer = trim(fgets(STDIN));
$rightanswer = (rand(0 , 100));
$count = 1;

while ($answer != $rightanswer){
	
	if ($answer < $rightanswer) {
		fwrite(STDOUT, "Guess higher!" . "\n");
	
	} elseif($answer > $rightanswer) {
		fwrite(STDOUT, "Guess lower!" . "\n");
		
	
	}
	$answer = trim(fgets(STDIN));
	$count++;
}

fwrite(STDOUT, "you're the best" . "\n");
echo "It took you $count times" . "\n";
<?php

fwrite(STDOUT, 'Guess the number between'. ' ' . $argv[1] . ' and ' . $argv[2] . "\n" );

if ($argc == 3) {
	$rightanswer = rand( $argv[1] , $argv[2]);
}

$answer = trim(fgets(STDIN));
$rightanswer = rand($argv[1] , $argv[2]);
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
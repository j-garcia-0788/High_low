<?php

// Write the output
// Notice the space after the ?
fwrite(STDOUT, 'Guess the number between 1 and 100 ');

// Get the input from user
$answer = trim(fgets(STDIN));
$rightanswer = (rand(0 , 100));

// Output the user's name

	while ($answer < $rightanswer || $answer > $rightanswer || $answer == $rightanswer){
		if ($answer < $rightanswer) {
			fwrite(STDOUT, "Guess higher!" . "\n");
			$answer = trim(fgets(STDIN));
		
		}elseif ($answer > $rightanswer) {
			fwrite(STDOUT, "Guess lower!" . "\n");
			$answer = trim(fgets(STDIN));
		}else {
			fwrite(STDOUT, "you're the best" . "\n");
				exit(0);
		}
}
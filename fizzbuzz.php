<?php

$a = 1;

for ($a = 1; $a <= 100; $a++) {
	
if ($a % 3 != 0 && $a % 5 != 0) {
	echo $a . "\n";
} elseif ($a % 3 == 0 && $a % 5 == 0) {
	echo "fizzbuzz\n";
} elseif ($a % 3 == 0) {
	echo "fizz\n";
} elseif ($a % 5 == 0) {
	echo "buzz\n";
	}
}
?>
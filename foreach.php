<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $thing) {
    if (is_int($thing)) {
        echo "{$thing} is a number\n";
    } else if (is_float($thing)) {
        echo "{$thing} is a float\n";
    } else if (is_bool($thing)) {
        echo "\n";
    } else if (is_array($thing)) {
        foreach ($thing as $number) {
        	echo "{$number}\n";
        }	
    } else if (is_null($thing)) {
        echo "\n";
    } else if (is_string($thing)) {
        echo "{$thing} is a string\n";
    }
} foreach ($things as $thing) {
	if (is_bool($thing)) {
        echo "\n";
    } else if (is_scalar($thing)) {
    	echo "{$thing} is scalar\n";
    }
}
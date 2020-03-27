<?php

	$ball = 'purple';
	
	//Coba ubah ke "yellow", "blue", "green", "purple", atau warna lain
	if ($ball == 'blue') {
		$bluebox = $ball;
	} elseif ($ball == 'green') {
		$greenbox = $ball;
	} elseif ($ball == 'purple') {
		$purplebox = $ball;
	} elseif ($ball == 'yellow') {
		$yellowbox = $ball;
	} elseif ($ball == 'purple') {
		$purplebox = $ball;
	} else {
		$colorlessbox = $ball;
	}
	
	echo "blue box : <br>\n";
	echo "green box : $greenbox <br>\n";
	echo "purple box : $purplebox <br>\n";
	echo "yellow box : $yellowbox <br>\n";
	echo "purple box : $purplebox <br>\n";
	echo "colorless box : $colorlessbox <br>\n";
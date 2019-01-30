<?php
/*
* @+================================================================+
* @¦ Modulo Box HTML/Javascript MUCore v1.0.8                       ¦
* @¦ Credits: Thejonyx - https://www.facebook.com/RoboticGames      ¦
* @¦ Credits: Thejonyx - https://jonsanchezr.github.io/cv/          ¦
* @+================================================================+
*/
require( "engine/boxhtml_config.php" );

if ( $n_borders == 0 ) {
	echo '<div>';
} else {
	echo '<div style="border:solid 1px black;
	display:inline-block;">';
}

echo $n_content . '</div>';
/*
* @+================================================================+
* @¦ Modulo Box HTML/Javascript MUCore v1.0.8                       ¦
* @¦ Credits: Thejonyx - https://www.facebook.com/RoboticGames      ¦
* @¦ Credits: Thejonyx - https://jonsanchezr.github.io/cv/          ¦
* @+================================================================+
*/
?>
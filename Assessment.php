<?php
function getCornersCount(string...$shapeName){
	foreach ($shapeName as $value) {
		switch ($value) {
			case "square":
			echo "$value - 4\n";
			break;
			case "circle":
			echo "$value - 0\n";
			break;
			default:
			echo "not defined\n";
		}
	}
}

getCornersCount();

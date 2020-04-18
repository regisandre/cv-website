<?php
function progressBar($level) {
	global $skills_level_novice, $skills_level_intermediate, $skills_level_advanced;
    if($level == "Novice") {
    	echo "<div class='progress'><div class='determinate' style='width: 33%'></div></div>";
    	echo $skills_level_novice;
    } else if($level == "Intermediate") {
    	echo "<div class='progress'><div class='determinate' style='width: 66%'></div></div>";
    	echo $skills_level_intermediate;
    } else if($level == "Advanced") {
    	echo "<div class='progress'><div class='determinate' style='width: 100%'></div></div>";
    	echo $skills_level_advanced;
   	} else {
   		echo "<div class='progress'><div class='determinate' style='width: 0%'></div></div>";
   		echo "Error";
   	}
}
?>
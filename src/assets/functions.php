<?php
// Skills progress bar
function progressBar($level, $percentage) {
	global $skills_level_novice, $skills_level_intermediate, $skills_level_advanced;

  $percentage = str_replace("%", "", $percentage);

  if ($percentage == "") {
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
  } elseif (strlen($percentage) >= 1) {
    echo "<div class='progress'><div class='determinate' style='width: ".$percentage."%'></div></div>";
      echo $level;
  } else {
    echo "<div class='progress'><div class='determinate' style='width: 0%'></div></div>";
      echo "Error";
  }
}
?>
<?php
	$height = 1.74;
	$weight = 45;
	echo "身高：", $height, "公尺<br>";
	echo "體重：". $weight. "公斤<br>"; 
	$bmi = $weight / $height ** 2;
	echo "BMI：" . $bmi . "<br>";
	if ($bmi>24) {
		echo "你的體重有些太重囉！";
	} else if ($bmi>=18.5) {
		echo "你的體重很標準耶！";
	} else {
		echo "你的體重有些太輕了！";
	}
?>


<?php

function random_array($size){
	$arr=[];
	for($i=0; $i<$size; $i++){
		$arr[]=rand(0,100);
	}
	return $arr;
}

function sortArray($arr){
	$arr1=$arr;
	for($i=0;$i<COUNT($arr1); $i++){
		for($j=COUNT($arr1)-1; $j>$i; $j--){
			if($arr1[$i] > $arr1[$j]){
				$temp=$arr1[$i];
				$arr1[$i]=$arr1[$j];
				$arr1[$j]=$temp;
			}
		}
	}
	return $arr1;
}

$randomArr=random_array(5);
var_dump($randomArr);

echo "<br><br>";

$sorted=sortArray($randomArr);
var_dump($sorted);

?>
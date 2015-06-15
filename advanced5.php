<?php

//creates random array based on specified length
function random_array($size){
	$arr=[];
	for($i=0; $i<$size; $i++){
		$arr[]=rand(0,100);
	}
	return $arr;
}

//insert_sort arrays base on the specified index
function insert_sort($arr, $index){
	$arr1=$arr;
	$temp=$arr1[$index];
	for($j=$index; $j>0; $j--){
		$arr1[$j]=$arr1[$j-1];
	}
	$arr1[0]=$temp;
	return $arr1;
}

//generate random array of specified length
$random=random_array(5);
var_dump($random);
echo "<br><br>";


//generate random index within the length of the random_array
$rand_index=rand(0,COUNT($random)-1);
echo 'Random Index = '.$rand_index.'<br>';

//insert_sort the random array base on teh random index
$sorted=insert_sort($random, $rand_index);
var_dump($sorted);

?>
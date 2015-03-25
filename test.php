<?php

$a=array(23,25,26,27,9,8,31,2,13,4,1,9,10,11,12,14,17,21,22,33,34,36,39,41,44,46);

//echo in_array(3,$a);
//print_r($a);


function sortfun($array){
	$length = count($array);
	if($length <=1){
		return  $array;
 	}
	$tag =$array[0];
	$small =array();
	$big =array();
  	for($i=1;$i<$length;$i++){
		if($array[$i]>$tag){
  			$big [] =$array[$i];
	}else{
			$small[] =$array[$i];
	}

  	}
	$big_sort=array();
	$small_sort =array();
	$big_sort =sortfun($big);
	$small_sort =sortfun($small);
	return array_merge($small_sort,array($tag),$big_sort); 
}

print_r(sortfun($a));

?> 
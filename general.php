<?php
function isempty($array){
     foreach($array as $a){
		 if($a==null || $a="")
		 {		 return false;
	 }	 else{
		 return true;}
	 }
}
function sanitise($connect,$arr){
	$newArr = [];
	foreach($arr as $key => $val){
		$val = mysqli_real_escape_string($connect,$val);
	$newArr[$key] = htmlentities($val);}

return $newArr;
}
?>
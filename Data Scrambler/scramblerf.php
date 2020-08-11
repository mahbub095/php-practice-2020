<?php
function displaykey($key){
  //  global $mode;
   // if('key'==$mode){
        printf("value = ' %s' ",$key);
    //}
}

function scramblerData($originalData,$key){
    $original_key = 'abcdefghijklmnopqrstuvwxyz1234567890';
	$data = '';
	$length = strlen($originalData);
	for($i=0;$i<$length;$i++){
		$currentChar = $originalData[$i];
		$position = strpos($original_key,$currentChar);
		if($position !== false){
			$data .= $key[$position];
		}else{
			$data .= $currentChar;
		}
	}
	return $data;
}
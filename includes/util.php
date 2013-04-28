<?php

/** This function sanitizes paramaters ($param) using the specified filter ($sanfilter).
 * $default will be used for the default value if the param doesn't exist in the $_REQUEST
 * Common filters = FILTER_SANITIZE_STRING
*/
function sanParam($param, $sanFilter = false, $default = 0){
	if(array_key_exists($param, $_REQUEST))  { $returnParam=$_REQUEST[$param]; }   else { $returnParam = $default; }
		if($sanFilter){
			$returnParam = filter_var($returnParam, $sanFilter);
		}
	return $returnParam;
}

?>
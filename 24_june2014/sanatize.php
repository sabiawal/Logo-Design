<?php
	function sanitize($input) {
		$input = str_replace("&nbsp;", " ", $input);
		/*if(preg_match("/<script.*?>.*?<\/script>/i",$input)){
			$input = preg_replace("/<script.*?>.*?<\/script>/i"," ",$input);
		}*/
		return mysql_real_escape_string($input);
	}
?>	
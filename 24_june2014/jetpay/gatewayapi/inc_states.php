<?php
function printStateDropdown($sel='',$StateProvinceTwoToFull=NULL)
{
  $output =  "<option value=''>Select A State</option>";
  while(list($abbreviation, $name) = each($StateProvinceTwoToFull)) {
    $output .= "<option value='". $abbreviation ."'".($sel==$abbreviation?' selected':'').
	">". $name ."</option>";
  }
  reset($StateProvinceTwoToFull);
  return($output);
}

function StateProvinceGetFullName($code,$StateProvinceTwoToFull=NULL)
{
    if(strlen($code) == 2) 
    {
        return($StateProvinceTwoToFull[$code]);
    }
    else if( strlen($code) > 2)
    {
        return($code);
    }
    else
    return("");
}

?>

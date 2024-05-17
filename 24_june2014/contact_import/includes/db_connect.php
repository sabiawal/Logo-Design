<?php
		function connection()
		{
		if($_SERVER['HTTP_HOST']=="localhost")
			{
				$db_host = "localhost";
				$db_name = "dollar_50dollar";
				$db_user = "root";
				$db_password = "";
				//define("SITEROOT","http://localhost/50ca");
			}
else
			{
				//$db_host = "localhost";
				//$db_name = "table_admin";
				//$db_user = "table_kancha";
				//$db_password = "kanchi";
				$db_host = "localhost";
				$db_name = "dollar_50dollar";
				//$db_user = "dollar_dollar1";
				//$db_password = "padam";
				$db_user = "dollar_50dl";
				$db_password = "R#:fs45*&fd6^";
				
				define("SITEROOT","http://50dollarlogo.ca");
			}
				mysql_connect($db_host,$db_user,$db_password) or die("error in connection"); 
				mysql_select_db($db_name)or die("Could not connect to database"); 
		}
		
 ?>
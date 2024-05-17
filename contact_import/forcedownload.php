<?php if($_GET['filetype']==1)
    { 
    $csv_output = "Contact Name, Email address\nCustomer service,customers@super-tell-a-friend.com\nContact person,contact@super-tell-a-friend.com\nTest name,name@domain.com\n"; 
	$filename="sample_generic.csv";
	$mime="application/vnd.ms-excel";
	}
	if($_GET['filetype']==2) ///comma text
    { 
    $csv_output = "customers@super-tell-a-friend.com,contact@super-tell-a-friend.com,name@domain.com\n"; 
	$filename="sample_comma.txt";
	$mime="text/plain";
	}
	if($_GET['filetype']==3) //tab text
    { 
    $csv_output = "Contact Name\t Email address\nCustomer service\tcustomers@super-tell-a-friend.com\nContact person\tcontact@super-tell-a-friend.com\nTest name\tname@domain.com\n"; 
	$filename="sample_tab.txt";
	$mime="text/plain";
	}
	header("Content-type: ".$mime); 
	header("Content-Disposition: attachment; filename= ".$filename.";size=".$size_in_bytes);
	print $csv_output;
	exit; 
?>

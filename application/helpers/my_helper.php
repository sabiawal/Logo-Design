<?php
function global_message()
{ 
	$CI = &get_instance();
	if ($CI->session->flashdata('error_message'))
	{ 
		echo global_message_output($CI->session->flashdata('error_message') , 'error_message' ) ; 
	}
	if ($CI->session->flashdata('error_message1'))
	{ 
		echo global_message_output($CI->session->flashdata('error_message1') , 'error_message1' ) ; 
	}
	if ($CI->session->flashdata('success_message'))
	{ 
		echo global_message_output($CI->session->flashdata('success_message') , 'success_message' ) ; 
	}
	if ($CI->session->flashdata('success_message1'))
	{ 
		echo global_message_output($CI->session->flashdata('success_message1') , 'success_message1' ) ; 
	}
	if ($CI->session->flashdata('warning_message'))
	{ 
		echo global_message_output($CI->session->flashdata('warning_message') , 'warning_message' ) ; 
	}
	// this is because to show the error when there is error in the insertion in the database. We cannot use session beaucas it does not support the object as the value. We we used the post data again as the source to conserve the data. 
	if ($CI->input->post('error_message')) 
	{ 
		echo global_message_output($CI->input->post('error_message') , 'error_message' ) ; 
	}     
}
function global_message_output($msg, $var_name)
{ 
	if (is_string($msg))
	{ 
		return    "<div class='".$var_name."' onclick='javascript:$(this).fadeOut(1000)'><span>".$msg."<span><span style='float:right'>x</span></div>"; 		
	}
	else if (is_array($msg))
	{ 
		$message = "<ul class= '".$var_name."' style='list-style:disc' onclick='javascript:$(this).fadeOut(1000)'> "; 
		foreach ($msg as $ms) 
		{ 
			$message .= "<li>" . $ms . "</li>" ; 
		} 
		$message .= "</ul>"; 
		return $message; 
	}  
}
function show_message($msg_type, $msg)
{
	switch($msg_type)
	{
		case 'error_message':
			echo '<div id="message-yellow">
					<table border="0" width="100%" cellpadding="0" cellspacing="0">
					<tr>
						<td class="yellow-left">'.$msg.'</td>
						<td class="yellow-right"><a class="close-yellow"><img src="'.config_item('admin_images').'table/icon_close_yellow.gif"   alt="" /></a></td>
					</tr>
					</table>
				</div>';		
			break;
	}
}
function generateRandom($len=10)
{
	return substr(md5(time().rand(1,999999)), 0, $len);
}
function getExtension($filename){
	$ext = end(explode('.', $filename));
	// 2. The "strrchr" approach
	$ext = substr(strrchr($filename, '.'), 1);
	// 3. The "strrpos" approach
	$ext = substr($filename, strrpos($filename, '.') + 1);
	// 4. The "preg_replace" approach
	$ext = preg_replace('/^.*\.([^.]+)$/D', '$1', $filename);
	return $ext;
}
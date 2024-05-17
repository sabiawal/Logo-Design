<?php
      
      		
	$site = ORDERED_SITE;	
    $file = @$_SESSION['file'];
						 
echo "<table width=\"600\" border=\"12\" align=\"center\"   bordercolor=\"#8AC125\">
  <tr>
    <td><table width=\"590\" border=\"10\" bordercolor=\"#4AB1C4\ bgcolor=\"#FFFFCC\">
      <tr>
        <td colspan=\"2\"><table width=300 border=\"1\" align=\"center\" bordercolor=\"#F5F5F5\" bgcolor=\"#CCCCCC\">
          <tr>
            <td width=112>Site</td>
            <td width=178>".$site."</td>
          </tr>
		  <tr>
            <td>IP</td>
            <td>".$_SERVER['REMOTE_ADDR']."</td>
          </tr>
		  <tr>
            <td>Company Name </td>
            <td>".@$_SESSION['company_name']."</td>
          </tr>
          <tr>
            <td>Contact Name  </td>
            <td>".@$_SESSION['contact_info']."</td>
          </tr>
          <tr>
            <td>Email</td>
            <td>".@$_SESSION['email_id']."</td>
          </tr>
		  <tr>
            <td>Phone </td>
            <td>".@$_SESSION['contact_phone']."</td>
          </tr>
          <tr>
            <td>Time</td>
            <td>".@$_SESSION['best_time']."</td>
          </tr>
          </table></td>
      </tr>
      <tr>
        <td>Web Package </td>
        <td>".@$_SESSION['web_package']."</td>
      </tr>
      <tr>
        <td>Logo Package </td>
        <td>".@$_SESSION['logo_package']."</td>
      </tr>
      <tr>
        <td>Domain Name  </td>
        <td>".@$_SESSION['domain_name']."</td>
		</tr>
	  <tr>
        <td>Idea</td>
        <td>".@$_SESSION['web_idea']."</td>
	  </tr>
      <tr>
        <td>Comment</td>
        <td>".@$_SESSION['comment']."</td>
      </tr>
	  <tr>
        <td>Image</td>
        <td><a href=$file>
<img src='".$file."' height=30 width=30></a></td>
      </tr>
      </table>
    </td>
  	</tr>
	</table>";

					 

?>

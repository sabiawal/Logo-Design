<?php 

//
if(isset($_SESSION['display_name'])){
   $client_name = $_SESSION['display_name']; 
}else{$client_name ='-'; }

$base_url   = base_url();
$site_name  = SITE_NAME;
$team_name  = 'Logo Design Guarantee&trade;';
$image_link = $base_url.'images/client/revision_email_theme1/';

echo '
<table  width="640"  border="0" cellpadding="0" cellspacing="0" bgcolor="#F2F2F4" style="font:normal 13px Arial, Helvetica, sans-serif; color:#000; padding:10px;-webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px;-webkit-box-shadow: 0px 0px 5px rgba(50, 50, 50, 0.75);
-moz-box-shadow:    0px 0px 5px rgba(50, 50, 50, 0.75);
box-shadow:         0px 0px 5px rgba(50, 50, 50, 0.75);" >
  <!-- Heading banner -->
  <tr>
    <td valign="top" height="80"><table width="100%" border="0" cellspacing="0" cellpadding="0" >
        <tr>
          <td ><a href="'.$base_url.'" style="outline:none;"><img src="'.$image_link.'logo.png" width="245" height="80" alt="'.$team_name.'" title="'.$team_name.'" style="border:none; outline:none;" /></a></td>
          <td  valign="top" width="100"><img src="'.$image_link.'banner-'.$site_name.'.png" width="342" height="67" alt="Call Us" title="Call Us"/></td>
        </tr>
        <tr>
            <td>&nbsp;</td><td>&nbsp;</td>
        </tr>
      </table></td>
  </tr>
  <!-- Heading banner ends --> 
  
  <!-- Dear customer starts -->
  <tr >
    <td valign="top" style="margin:0px; padding:0px 0px 15px 0px;" ><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td ><h3 style="font-size:16px">Dear '.$client_name.',</h3>
            <h1 style="font:normal 24px \'Comic Sans MS\', cursive;">Thank you!</h1>
            <p style="font-size:16px;">We really appreciate your feedback on our work.</p>
            <p style="font-size:16px;">We have received the revisions that you want, and our<br />
              designers are starting their work on your project.</p>
            <p style="font-size:16px;">You\'ll be notified via email when your revisions are sent to<br />
              your personal client panel.</p>
            <h3 style="font-size:16px">Sincerely,</h3>
            <p style="font-size:16px;">'.$team_name.'</p></td>
          <td  width="200"><p style="font-family:\'Times New Roman\', Times, serif; font-size:17px; padding-top:10px; line-height:19px;">Any inquiries? Call our<br />
              designers through our<br />
              24/7 toll-free hotline<br />
              seen above.</p>
            <p style="font-family:\'Times New Roman\', Times, serif; line-height:19px; font-size:17px;">Alternatively, you can<br />
              click on the image<br />
              below for 24/7 live chat.<br />
              Contact us!</p>
            <a href="http://messenger.providesupport.com/messenger/pradyumna.html" style="outline:none;"><img src="'.$image_link.'live_support.jpg" alt="Online Live Support" title="Online Live Support"  style="border:none; outline:none;" /></a></td>
        </tr>
      </table></td>
  </tr>
  <!-- Dear customer ends --> 
  
  <!-- Good branding starts -->
  <tr>
    <td valign="top" style="background-color:#002b2a; margin:0px; padding:10px 0px;"><h1 style="text-align:center; font:bold 23px Arial, Helvetica, sans-serif; color:#fff;"> Good branding extends way beyond just having a logo!<br />
        See more than 40 of our new branding services below!</h1></td>
  </tr>
  <!-- Good branding ends --> 
  
  <!-- Design section 1 starts -->
  <tr>
    <td valign="top" height="100%" ><table width="100%" border="0" cellspacing="0" cellpadding="0" style="padding:5px 0px 15px 0px;" >
        <tr>
          <td width="206" valign="top" align="center"><h3 style="color:#00586e; margin:0px; padding:10px 0px; font-size:16px">Logo Designs</h3>
            <img src="'.$image_link.'logo_design_pic.jpg" alt="Logo Designs" title="Logo Designs" /><br />
            <br />
            <a href="'.$base_url.'new44/newpackages.php?pid=19" style="color:#286093; float:left; font-size:14px">Animated/Flash Logo Design</a><br />
            <br />
            <a href="'.$base_url.'new44/newpackages.php?pid=20" style="color:#286093; float:left; font-size:14px">Logo Redesign</a><br />
            <br />
            <a href="'.$base_url.'new44/newpackages.php?pid=21" style="color:#286093; float:left; font-size:14px">Grayscale/Black & White</a></td>
          <td width="206" valign="top" align="center" ><h3 style="color:#00586e; margin:0px; padding:10px 0px; font-size:16px">Email Designs</h3>
            <img src="'.$image_link.'email_designs_pic.jpg" alt="Email Designs" title="Email Designs" /><br />
            <br />
            <a href="'.$base_url.'new44/newpackages.php?pid=22" style="color:#286093; float:left; font-size:14px">Email Newseletter Design</a><br />
            <br />
            <a href="'.$base_url.'new44/newpackages.php?pid=42" style="color:#286093; float:left; font-size:14px">Email Signature Design</a><br />
            <br />
            <a href="'.$base_url.'new44/newpackages.php?pid=23" style="color:#286093; float:left; font-size:14px">Email Template Design</a></td>
          <td width="206" valign="top" align="center" ><h3 style="color:#00586e; margin:0px; padding:10px 0px; font-size:16px">Stationery Designs</h3>
            <img src="'.$image_link.'stationery_designs_pic.jpg" alt="Stationery Designs" title="Stationery Designs" /><br />
            <br />
            <a href="'.$base_url.'new44/newpackages.php?pid=36" style="color:#286093; float:left; font-size:14px">Business Card</a><br />
            <br />
            <a href="'.$base_url.'new44/newpackages.php?pid=39" style="color:#286093; float:left; font-size:14px">Complimentary Slip</a><br />
            <br />
            <a href="'.$base_url.'new44/newpackages.php?pid=35" style="color:#286093; float:left; font-size:14px">Stationery Full</a></td>
        </tr>
      </table></td>
  </tr>
  <!-- Design section 1 ends -->
  
  <tr>
    <td valign="top" height="10" style="background-color:#002b2a; margin: 0px; padding:0px;"></td>
  </tr>
  
  <!-- Design section 2 starts -->
  <tr>
    <td valign="top" height="100%" ><table width="100%" border="0" cellspacing="0" cellpadding="0" style="padding:5px 0px 15px 0px;" >
        <tr>
          <td width="206" valign="top" align="center"><h3 style="color:#00586e; margin:0px; padding:10px 0px; font-size:16px">Website Designs</h3>
            <img src="'.$image_link.'website_designs_pic.jpg" alt="Website Designs" title="Website Designs" /><br />
            <br />
            <a href="'.$base_url.'new44/newpackages.php?pid=25" style="color:#286093; float:left; font-size:14px">Animated Web Banner</a><br />
            <br />
            <a href="'.$base_url.'new44/newpackages.php?pid=41" style="color:#286093; float:left; font-size:14px">Animated Web Header</a><br />
            <br />
            <a href="'.$base_url.'new44/newpackages.php?pid=27" style="color:#286093; float:left; font-size:14px">Favicon Design</a><br />
            <br />
            <a href="'.$base_url.'new44/newpackages.php?pid=26" style="color:#286093; float:left; font-size:14px">Icon/Button Design</a><br />
            <br />
            <a href="'.$base_url.'new44/newpackages.php?pid=24" style="color:#286093; float:left; font-size:14px">Landing Web Page Design</a></td>
          <td width="206" valign="top" align="center" ><h3 style="color:#00586e; margin:0px; padding:10px 0px; font-size:16px">Marketing Designs</h3>
            <img src="'.$image_link.'marketing_designs_pic.jpg" alt="Marketing Designs" title="Marketing Designs" /><br />
            <br />
            <a href="'.$base_url.'new44/newpackages.php?pid=3" style="color:#286093; float:left; font-size:14px">Flyer Design</a><br />
            <br />
            <a href="'.$base_url.'new44/newpackages.php?pid=4" style="color:#286093; float:left; font-size:14px">Poster Design</a><br />
            <br />
            <a href="'.$base_url.'new44/newpackages.php?pid=10" style="color:#286093; float:left; font-size:14px">Post Card Design</a><br />
            <br />
            <a href="'.$base_url.'new44/newpackages.php?pid=2" style="color:#286093; float:left; font-size:14px">Social Media</a></td>
          <td width="206" valign="top" align="center" ><h3 style="color:#00586e; margin:0px; padding:10px 0px; font-size:16px">Letter Designs</h3>
            <img src="'.$image_link.'letter_designs_pic.jpg" alt="Letter Designs" title="Letter Designs" /><br />
            <br />
            <a href="'.$base_url.'new44/newpackages.php?pid=44" style="color:#286093; float:left; font-size:14px">Electronic Letterhead</a><br />
            <br />
            <a href="'.$base_url.'new44/newpackages.php?pid=38" style="color:#286093; float:left; font-size:14px">Envelope Design</a><br />
            <br />
            <a href="'.$base_url.'new44/newpackages.php?pid=40" style="color:#286093; float:left; font-size:14px">Fax Template</a><br />
            <br />
            <a href="'.$base_url.'new44/newpackages.php?pid=37" style="color:#286093; float:left; font-size:14px">Letterhead Design</a><br />
            <br />
            <a href="'.$base_url.'new44/newpackages.php?pid=43" style="color:#286093; float:left; font-size:14px">Notepad Design</a></td>
        </tr>
      </table></td>
  </tr>
  <!-- Design section 2 ends -->
  
  <tr>
    <td valign="top" height="10" style="background-color:#002b2a; margin: 0px; padding:0px;"></td>
  </tr>
  
  <!-- Design section 3 starts -->
  <tr>
    <td valign="top" height="100%" ><table width="100%" border="0" cellspacing="0" cellpadding="0" style="padding:5px 0px 15px 0px;" >
        <tr>
          <td width="206" valign="top" align="center"><h3 style="color:#00586e; margin:0px; padding:10px 0px; font-size:16px">Product Designs</h3>
            <img src="'.$image_link.'product_designs_pic.jpg"alt="" /><br />
            <br />
            <a href="'.$base_url.'new44/newpackages.php?pid=17" style="color:#286093; float:left; font-size:14px">Book Cover</a><br />
            <br />
            <a href="'.$base_url.'new44/newpackages.php?pid=12" style="color:#286093; float:left; font-size:14px">CD/DVD Cover</a><br />
            <br />
            <a href="'.$base_url.'new44/newpackages.php?pid=11" style="color:#286093; float:left; font-size:14px">Product Label</a><br />
            <br />
            <a href="'.$base_url.'new44/newpackages.php?pid=16" style="color:#286093; float:left; font-size:14px">Product Packaging</a></td>
          <td width="206" valign="top" align="center" ><h3 style="color:#00586e; margin:0px; padding:10px 0px; font-size:16px">Business Designs</h3>
            <img src="'.$image_link.'business_designs_pic.jpg"alt="" /><br />
            <br />
            <a href="'.$base_url.'new44/newpackages.php?pid=13" style="color:#286093; float:left; font-size:14px">Catalog Design</a><br />
            <br />
            <a href="'.$base_url.'new44/newpackages.php?pid=15" style="color:#286093; float:left; font-size:14px">Magazine Cover</a><br />
            <br />
            <a href="'.$base_url.'new44/newpackages.php?pid=6" style="color:#286093; float:left; font-size:14px">Membership Card</a><br />
            <br />
            <a href="'.$base_url.'new44/newpackages.php?pid=8" style="color:#286093; float:left; font-size:14px">Menu Design</a></td>
          <td width="206" valign="top" align="center" ><h3 style="color:#00586e; margin:0px; padding:10px 0px; font-size:16px">"Silent" Marketing</h3>
            <img src="'.$image_link.'silent_marketing_pic.jpg"alt="" /><br />
            <br />
            <a href="'.$base_url.'new44/newpackages.php?pid=29" style="color:#286093; float:left; font-size:14px">Bookmark Design</a><br />
            <br />
            <a href="'.$base_url.'new44/newpackages.php?pid=33" style="color:#286093; float:left; font-size:14px">Door Hanger Design</a><br />
            <br />
            <a href="'.$base_url.'new44/newpackages.php?pid=31" style="color:#286093; float:left; font-size:14px">Folder Design</a><br />
            <br />
            <a href="'.$base_url.'new44/newpackages.php?pid=34" style="color:#286093; float:left; font-size:14px">Screensaver/Wallpaper Design</a></td>
        </tr>
      </table></td>
  </tr>
  <!-- Design section 3 ends -->
  
  <tr>
    <td valign="top" height="10" style="background-color:#002b2a; margin: 0px; padding:0px;"></td>
  </tr>
  
  <!-- Design section 4 starts -->
  <tr>
    <td valign="top" height="100%" ><table width="100%" border="0" cellspacing="0" cellpadding="0" style="padding:5px 0px 15px 0px;" >
        <tr>
          <td width="206" valign="top" align="center"><h3 style="color:#00586e; margin:0px; padding:10px 0px; font-size:16px">Presentation Purposes</h3>
            <img src="'.$image_link.'presentation_purpose_pic.jpg" alt="Presentation Purposes" title="Presentation Purposes" /><br />
            <br />
            <a href="'.$base_url.'new44/newpackages.php?pid=14" style="color:#286093; float:left; font-size:14px">Illustrations</a><br />
            <br />
            <a href="'.$base_url.'new44/newpackages.php?pid=7" style="color:#286093; float:left; font-size:14px">PowerPoint Design</a><br />
            <br />
            <a href="'.$base_url.'new44/newpackages.php?pid=1" style="color:#286093; float:left; font-size:14px">Brochure Design</a></td>
          <td width="206" valign="top" align="center" ><h3 style="color:#00586e; margin:0px; padding:10px 0px; font-size:16px">Attracting Strategies</h3>
            <img src="'.$image_link.'attracting_strategies_pic.jpg" alt="Attracting Strategies" title="Attracting Strategies" /><br />
            <br />
            <a href="'.$base_url.'new44/newpackages.php?pid=9" style="color:#286093; float:left; font-size:14px">Bumper Sticker</a><br />
            <br />
            <a href="'.$base_url.'new44/newpackages.php?pid=5" style="color:#286093; float:left; font-size:14px">Invitation Card</a><br />
            <br />
            <a href="'.$base_url.'new44/newpackages.php?pid=18" style="color:#286093; float:left; font-size:14px">Sticker Design</a></td>
          <td width="206" valign="top" align="center" ><h3 style="color:#00586e; margin:0px; padding:10px 0px; font-size:16px">Merchandise Designs</h3>
            <img src="'.$image_link.'marchendise_design_pic.jpg" alt="Merchandise Designs" title="Merchandise Designs" /><br />
            <br />
            <a href="'.$base_url.'new44/newpackages.php?pid=32" style="color:#286093; float:left; font-size:14px">Merchandise Design</a><br />
            <br />
            <a href="'.$base_url.'new44/newpackages.php?pid=30" style="color:#286093; float:left; font-size:14px">Signage Design</a><br />
            <br />
            <a href="'.$base_url.'new44/newpackages.php?pid=28" style="color:#286093; float:left; font-size:14px">T-Shirt Design</a></td>
        </tr>
      </table></td>
  </tr>
  <!-- Design section 4 ends -->
  
  <tr>
    <td valign="top" height="10" style="background-color:#002b2a; margin: 0px; padding:0px;"></td>
  </tr>
  
  <!-- footer starts -->
  <tr>
  <td>
<p style="font-size:16px;">Searching for better ways to advertise your company is a way to gain more<br />
profits. Improve on your company\'s image and branding by using advertisements<br />
with attractive designs, only from '.$team_name.'!</p>

<p style="font-size:16px;">Start improving your business by clicking on any of the services above!<br /><br />
Our friendly staff are here 24/7 at ('.PHONE_NO.') and via chat below.</p><br />

</td>
  </tr>
  
  <tr>
  <td align="center">
  <a href="http://messenger.providesupport.com/messenger/pradyumna.html" style="outline:none;"><img src="'.$image_link.'online_support.jpg" alt="Online Support" title="Online Support" style="border:none; outline:none;" /></a>
  </td>
  </tr>
  <!-- foooter ends -->
</table>
';
<?php  
// test mailbody for reseller signup section with username and password
$mailbody = '
<table width="625" class="aa" style="border:1px solid #cccccc; margin:10px;" >
    <tr>
        <td width="20"></td>
        <td>
            <br />
            Dear '.$_SESSION['fullname'].',<br /><br />
            <font style="font-size:24px;font-family:georgia,arial; color:#006E12">Hello...</font><br /><br />
            Thank you for signing up for our reseller service. <br />
            The following is your username and password:<br /><br />
            <b>Username</b> : '.$_SESSION['username'].'<br />
            <b>Password</b> : '.$_SESSION['password'].'<br /><br />
            Note, for your &ldquo;username&rdquo; you can also use your email address.<br />
            Please save these details for future reference.<br /><br />
            <b>You can log into your reseller account at anytime via this link:</b>  <br /><br />
            <a href="'.site_url('reseller/login').'" alt="" title="">'.site_url('reseller/login').'</a><br /><br />
            Or visit our main site (and click on ”Reseller log in” found at the <br />bottom of the site):  <br /><br />
            <a href="'.base_url().'" alt="" title="">'.base_url().'</a><br /><br /><br />
            <u>How our reseller service works</u>  <br /><br />
            Once you have logged into your reseller account, then you will be<br />able to order any design service we offer as normal, but you will be <br />entitled to 10% off.  <br /><br />
            The 10% will be applied within the pricing in the reseller account.<br /><br /><br />
            The steps in our reseller program can be summed up easily:
            <table width="570px" style="padding:5px 0 0 30px;">
                <tr><td width="20"><img src="'.base_url().'images/bullet.gif" width="16" height="15"  style="margin:0;padding:0;border:none;padding-right:10px;"/></td><td>Log into your reseller account</td></tr>
                <tr><td><img src="'.base_url().'images/bullet.gif" width="16" height="15"  style="margin:0;padding:0;border:none;"/></td><td>Check out our discounted packages within your account.</td></tr>
                <tr><td><img src="'.base_url().'images/bullet.gif" width="16" height="15"  style="margin:0;padding:0;border:none;"/></td><td>Place orders using your clients design requests/briefs.</td></tr>
                <tr><td><img src="'.base_url().'images/bullet.gif" width="16" height="15"  style="margin:0;padding:0;border:none;"/></td><td>Our designers get to work the same day!</td></tr>
                <tr><td><img src="'.base_url().'images/bullet.gif" width="16" height="15"  style="margin:0;padding:0;border:none;"/></td><td>We upload the artwork into your reseller account and <br />notify you by email.</td></tr>
                <tr><td><img src="'.base_url().'images/bullet.gif" width="16" height="15"  style="margin:0;padding:0;border:none;"/></td><td>You forward the outputs via email to your clients.</td></tr>
                <tr><td><img src="'.base_url().'images/bullet.gif" width="16" height="15" alt="bullet" style="margin:0;padding:0;border:none;"/></td><td>The client receives the artwork with no mention of our<br />company Logo Design Guarantee. Simple.</td></tr>
            </table><br /><br />
            <ins>Can&rsquo;t find a design service that you need?</ins><br /><br />
            You can call us and place the order over the phone. We are<br />available 24/7 and have a dedicated reseller phone service. <br /><br /> 
            We usually can give you an instant quote. We aim to process<br />the order with you whenever you are ready.  <br /><br />
            <font style="font-size:24px;font-family:georgia,arial;color:#006E12;">Excited?</font><br />
            Log into your account now, and check out our services <br />and low prices!<br /> <br />
            <a href="'.site_url('reseller/login').'" alt="" title="">'.site_url('reseller').'</a><br /><br /><br />
            <font style="font-size:24px;font-family:georgia,arial;color:#006E12;">With you at every step, </font><br />
            <font style="font-size:20px;font-family:georgia,arial;color:#333">Logo Design Guarantee<br />
            Reseller Services</font><br /><br /><br />
            P.S. Please remember to <ins>save your account details.</ins> <br /><br />
        </td>
        <td width="20"></td>
    </tr>
</table>
';
echo $mailbody;
?>
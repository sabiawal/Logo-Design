<div class="blue-img">
<img src="<?php echo base_url()?>images/blue-banner-<?php echo COUNTRY; ?>.png" alt="Special Offer" title="Special Offer" />
<span class="text-red text-16"><strong><?php 
$today=date("l j M y");
	  $din=date("l");
	   $gate=date("j");
	    $mahina=date("M");
		 $sal=date("y");
       echo "<div class=\"time-red\" >"."Midnight,"." <u>".$din."</u>"." ".$gate." ".$mahina." '".$sal."</div>";
    	?>   
</strong></span>
</div>
<div class="blue-img-link">
<a href="<?php echo site_url('reseller/packages'); ?>">See Our Packages</a>
<a href="<?php echo site_url('reseller/packages'); ?>">Start Your Logo</a>
<a href="<?php echo site_url('reseller/processs'); ?>">How It Works</a><br />
<a href="<?php echo site_url('reseller/portfolio'); ?>">See Our Portfolio</a>
<a href="<?php echo site_url('reseller/charity'); ?>">Read about our charitable work</a>
</div>
<style type="text/css">
.text-16{
	margin-top:-7px;
	left:0px;
	}
</style>
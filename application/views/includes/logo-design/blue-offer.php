<div class="blue-img">

<img src="<?php echo base_url(); ?>assets/images/blue-banner-<?php echo COUNTRY; ?>.png" alt="Special Offer" title="Special Offer" />

<span class="text-red text-16"><strong>

<?php            //

      $today=date("l j M y");

	  $din=date("l");

	   $gate=date("j");

	    $mahina=date("M");

		 $sal=date("y");

       echo "<div class=\"time-red\" >"."Midnight EST,"." <u>".$din."</u>"." ".$gate." ".$mahina." '".$sal."</div>";

    	?> 

        </strong></span>

</div>

<div class="blue-img-link">

<a href="<?php echo site_url('packages'); ?>">See Our Packages</a>

<a href="<?php echo site_url('packages'); ?>">Start Your Logo</a>

<a href="<?php echo site_url('process'); ?>">How It Works</a><br />

<a href="<?php echo site_url('portfolio'); ?>">See Our Portfolio</a>

<a href="<?php echo site_url('charity'); ?>">Read about our charitable work</a>

</div>

<style type="text/css">

.text-16{

	margin-top:-9px;

	left:-2px;

	}

</style>
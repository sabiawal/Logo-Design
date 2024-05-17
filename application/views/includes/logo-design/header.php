<div class="header" style=" min-height: 146px;
    overflow: visible; position: relative;">
    <div class="logo">
    <h1><a href="<?= base_url(); ?>"><img src="<?php echo base_url()?>assets/images/logo.jpg" alt="LogoDesign Guarantee" title="logodesign guarantee" width="418" height="132" /></a></h1>
    </div>
    
    <div class="offer">
    <img src="<?php echo base_url(); ?>assets/images/top_yellow_banner-<?php echo COUNTRY; ?>.png" alt="Special Offer" title="Special Offer" />
       <?php            //
      $today=date("l j M y");
	  $din=date("l");
	   $gate=date("j");
	    $mahina=date("M");
		 $sal=date("y");
       //echo "<div class=\"time-red\" >"."Midnight EST,"." <u>".$din."</u>"." ".$gate." ".$mahina." '".$sal."</div>";
    	?>
        <div class="time-red" >Midnight<?php if(COUNTRY != 'UK'){echo " EST";} ?>, <u><?=$din; ?></u> <?= $gate." ".$mahina." ".$sal; ?></div>    
    </div>
</div>
<style type="text/css">
.time-red{
	left: 215px;
    top: 6px;
	font-size:13px;
	}
</style>
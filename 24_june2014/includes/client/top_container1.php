<script type="text/javascript">
$(document).ready(function(){
	$('#logo_feedback').click(function(){
		window.location.href = "<?php echo base_url();?>client_panel/session_destroy1";
	});
});
</script>
<?php
$data_tables = $this->db->query("select * from notification_count where logo_web_id='".$_SESSION['logoWebId']."'")->result();
$num_rows = count($data_tables);
?>
<div class="top-container">
    <div class="top">
    <div class="menu-top">
        <ul>
            <li class="<?php if($this->router->method == 'index' || $this->router->method == 'home' )echo 'selected'; ?>"><a href="<?= site_url('client_panel/index');?>" >Home</a></li>
            <li class="<?php if($this->router->method == 'logosample')echo 'selected'; ?>"><a href="<?= site_url('client_panel/logosample');?>" >Logo Samples</a></li>
            <li class="<?php if($this->router->method == 'stationary')echo 'selected'; ?>"><a href="<?= site_url('client_panel/stationary');?>" >Stationary Samples</a></li>
            <li class="<?php if($this->router->method == 'clientfinal')echo 'selected'; ?>"><a href="<?= site_url('client_panel/clientfinal');?>" >Final Files</a></li>
            <li class="<?php if($this->router->method == 'moreservices')echo 'selected'; ?>"><a href="<?= site_url('new44/category');?>" >More Services</a></li>
            <li class="<?php if($this->router->method == 'send_to_friends')echo 'selected'; ?>" id="logo_send"><a href="<?= site_url('client_panel/send_to_friends');?>" >LogoVote<sup>TM</sup>  / Send to Friends</a></li>
            <?php if($num_rows>0){?>
            <li class="<?php if($this->router->method == 'logo_vote_feedback')echo 'selected'; ?>" id="logo_feedback"><a href="javascript:void(0);">LogoVote<sup>TM</sup>  / Your Feedbacks <?php 
if($num_rows>0){			
echo "(".$num_rows.")";
}
?></a></li>
<?php }else{?>
<li class="<?php if($this->router->method == 'logo_vote_feedback')echo 'selected'; ?>" id="logo_feedback"><a href="<?= site_url('client_panel/session_destroy1');?>">LogoVote<sup>TM</sup>  / Your Feedbacks</a></li>
<?php } ?>
            <li><a href="<?= site_url('client_panel/logout'); ?>">Log Out</a></li>
            <div style="clear: both;"></div>
        </ul>
    </div>
    </div>
</div>
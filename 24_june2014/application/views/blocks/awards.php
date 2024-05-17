<?php
$base_link = '';
if($this->router->fetch_class() == 'reseller')
{
    //$base_link = site_url('reseller');
    $base_link = base_url().'reseller/';
}
elseif($this->router->fetch_class() == 'reseller_web')
{
    $base_link = base_url().'reseller_web/';
}
elseif($this->router->fetch_class() == 'webdesign')
{
    $base_link = base_url().'web-site-design/webdesigner-limited-sale/';
}
else
{
    $base_link = base_url();
}
?>
<div class="awards">
    <?php if($this->router->fetch_class() != 'webdesign' && $this->router->fetch_class() != 'reseller_web'): ?>
    <div><img src="<?php echo base_url()?>images/side-bar-bg-top.jpg" title="bg-top" /></div>
    <?php endif; ?>
    <div class="awards-text">
        <h1>Awards</h1><br/>
        <h2 class="text-red text-bold"><span style="font-family:Georgia; font-size:14px;"><i><strong>American Design Awards</strong></i></span></h2><br/>
        <p><span class="text-red"><span style="font-family:Calibri; font-size:15px;">The American Design Awards was<br/>
        founded in the year 2000 <br/>
        rewarding <span class="text-bold">excellence in design</span><br/>
        and business.</span> <span class="text-bold" ><a href="<?= $base_link.'adaward.php'; ?>"  style="color:#666;">Read more.</a></span></span></p>
        <h2 class="text-blue text-bold"><span style="font-family:Georgia; font-size:13px;"><i><strong>Summit International Awards</strong></i></span></h2><br/>
        <p><span class="text-blue"><span style="font-family:Calibri; font-size:15px;">Throughout its 13 year history,<br/>
        the Summit organization has<br/>
        established itself as one of the<br/>
        premier arbiters of <span class="text-bold"> communication<br/>
        excellence.</span></span><span class="text-bold"> <a href="<?= $base_link.'saward.php'; ?>"  style="color:#666;">Read more.</a></span></span></p>
        <h2 class="text-dark-red"><span style="font-family:Georgia; font-size:14px;"><i><strong>Red Dot Awards</strong></i></span></h2><br/>        
        <p><span class="text-dark-red"><span style="font-family:Calibri; font-size:15px;">This award ranks among the <br/>
        largest and <span class="text-bold">most renowned <br/>
        design competitions</span> in the world. <br/>
        The Red Dot Design Award <br/>
        attracted almost 6,000 <br/>
        submissions from 52 countries<br/>
        in 2006 alone. </span><span class="text-bold"><a href="<?= $base_link.'rdaward.php'; ?>" style="color:#666;" >Read more.</a></span></span></p>
    </div>
    <?php if($this->router->fetch_class() != 'webdesign' && $this->router->fetch_class() != 'reseller_web'): ?>
    <div><img src="<?php echo base_url()?>images/side-bar-bg-bottom.jpg" title="bg-top" /></div>
    <?php endif; ?>
    
</div>
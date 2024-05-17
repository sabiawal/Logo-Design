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
<div class="charity">
    <?php if($this->router->fetch_class() != 'webdesign' && $this->router->fetch_class() != 'reseller_web'): ?>
    <div><img src="<?php echo base_url()?>images/side-bar-bg-top.jpg" title="bg-top" /></div>
    <?php endif; ?>
<div class="charity-text">
<h1>See our charitable works </h1>
<div align="center"><a href="<?php echo $base_link.'charity.php'; ?>"><img src="<?php echo base_url()?>images/rtdthumb.jpg" alt="RTD" title="RTD" /></a></div><p>&nbsp;</p>
<p>Logo Design Guarantee has designed many logos for leading charities. See some of our logos we have designed for Churches.<br/>
<a href="<?php echo $base_link.'charity.php'?>"  style="color:#666;"><span class="text-bold"> Read more.</span></a></p>
</div>
    <?php if($this->router->fetch_class() != 'webdesign' && $this->router->fetch_class() != 'reseller_web'): ?>
    <div><img src="<?php echo base_url()?>images/side-bar-bg-bottom.jpg" title="bg-top" /></div>
    <?php endif; ?>
</div>
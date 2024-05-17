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
<div class="money-back">
    <?php if($this->router->fetch_class() != 'webdesign' && $this->router->fetch_class() != 'reseller_web'): ?>
    <div><img src="<?php echo base_url()?>images/side-bar-bg-top.jpg" title="bg-top" /></div>
    <?php endif; ?>
    <div class="money-back-text">
    <div align="center"><a href="<?php echo $base_link.'guarantee.php'; ?>"><img src="<?php echo base_url()?>images/guarantee.png" alt="Money Back Guarantee" title="Money Back Guarantee" /></a></div>
        <ul>
        <li>100 % original, custom-made</li>
        <li>No clipart </li>
        <?php if($this->router->method == 'packages'){ echo "<li>24/7 ".COUNTRY." Phone Support</li>";} ?>
        </ul>
    <?php if($this->router->method != 'packages'){  ?>
    <div align="center"><a href="<?php echo $base_link.'packages.php';?>"><img src="<?php echo base_url()?>images/start-logo.jpg" alt="Start My Logo" title="Start My Logo" /></a></div>
    <?php } ?>
    </div>
    <?php if($this->router->fetch_class() != 'webdesign' && $this->router->fetch_class() != 'reseller_web'): ?>
    <div><img src="<?php echo base_url()?>images/side-bar-bg-bottom.jpg" title="bg-top" /></div>
    <?php endif; ?>
</div>
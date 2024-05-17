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
<div class="testimonials">
    <?php if($this->router->fetch_class() != 'webdesign' && $this->router->fetch_class() != 'reseller_web'): ?>
    <div><img src="<?php echo base_url()?>images/side-bar-bg-top.jpg" title="bg-top" /></div>
    <?php endif; ?>
    <div class="testimonials-text">
        <h1>Client testimonials</h1>
        <div align="center"><a href="<?= $base_link.'testimonials.php'; ?>"><img src="<?php echo base_url()?>images/trini.jpg" /></a></div>
        <p>&quot;I was very impressed from the different designs you made and the price for it all! </p>
        <p>You made it very easy to pick from all the awesome designs you made. </p>
        <p>I've used the logo on my trucks and business cards and I still get complements! &quot; <a href="<?php echo $base_link.'casestudy.php'; ?>"><span class="text-underline">Case study</span></a> </p>
        <p>Isaac Gonzalez CEO
        Trini Home Inspection, LLC <a href="http://www.trinihomeinspection.com" target="_blank"><span class="text-green text-underline"> www.trinihomeinspection.com</span></a> </p>
        
        <p><a href="<?= $base_link.'testimonials.php'; ?>"><span class="text-underline">Read over 50 testimonials</span></a></p>
    </div>
    <?php if($this->router->fetch_class() != 'webdesign' && $this->router->fetch_class() != 'reseller_web'): ?>
    <div><img src="<?php echo base_url()?>images/side-bar-bg-bottom.jpg" title="bg-top" /></div>
    <?php endif; ?>
</div>
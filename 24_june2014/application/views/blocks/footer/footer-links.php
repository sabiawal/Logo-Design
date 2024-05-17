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
<?php if($this->router->fetch_class() == 'logodesign' || $this->router->fetch_class() == 'reseller'): ?>
    <div class="list-1">
        <ul>
            <li><a href="<?php echo $base_link.'ourmgmt.php'; ?>">Management team </a></li>
            <li><a href="<?php echo $base_link.'qualitycontrol.php'; ?>">Quality control</a></li>
            <li><a href="<?php echo $base_link.'partnership.php'; ?>">Partnership programmes</a></li>
            <li><a href="<?php echo $base_link.'terms.php'; ?>">Terms and conditions</a></li>
        </ul>
    </div>
    <div class="list-2">
        <ul>
            <li><a href="<?php echo $base_link.'guarantee.php'; ?>">Guarantee</a></li>
            <li><a href="<?php echo $base_link.'privacypolicy.php'; ?>">Privacy policy</a></li>
            <li><a href="<?php echo $base_link.'casestudy.php'; ?>">Sample project</a></li>
            <li><a href="<?php echo $base_link.'portfolio.php'; ?>">View our portfolio </a></li>
        </ul>
    </div>
    <div class="list-3">
        <ul>
            <li><a href="<?php echo $base_link.'faq.php'; ?>">FAQ</a></li>
            <li><a href="<?php echo $base_link.'packages.php'; ?>">See our packages </a></li>
            <li><a href="<?php echo $base_link.'packages.php'; ?>">Start my logo</a></li>
            <li><a href="<?php echo $base_link.'partnership.php'; ?>">Partnership opportunities</a></li>
        </ul>
    </div>
    <div class="list-4">
        <ul>
            <li><a href="<?php echo $base_link.'contact.php'; ?>">Contact us </a></li>
            <li><a href="<?php echo $base_link.'compare.php'; ?>">Compare prices</a></li>
            <li><a href="<?php echo $base_link.'charity.php'; ?>">Our charitable work</a></li>
            <li><a href="<?php echo site_url('reseller/index'); ?>">Reseller Opportunity</a></li>
        </ul>
    </div>
<?php elseif($this->router->fetch_class() == 'webdesign' || $this->router->fetch_class() == 'reseller_web'): ?>
    <div class="list-1">
        <ul>
            <li><a href="<?php echo $base_link.'ourmgmt.php'; ?>">Management team </a></li>
            <li><a href="<?php echo $base_link.'qualitycontrol.php'; ?>">Quality control</a></li>
            <li><a href="<?php echo $base_link.'partnership.php'; ?>">Partnership programmes</a></li>
            <li><a href="<?php echo $base_link.'terms.php'; ?>">Terms and conditions</a></li>
        </ul>
    </div>
    <div class="list-2">
        <ul>
            <li><a href="<?php echo $base_link.'guarantee.php'; ?>">Guarantee</a></li>
            <li><a href="<?php echo $base_link.'privacypolicy.php'; ?>">Privacy policy</a></li>            
            <li><a href="<?php echo $base_link.'portfolio.php'; ?>">View our portfolio </a></li>
            <li><a href="<?php echo $base_link.'faq.php'; ?>">FAQ</a></li>
        </ul>
    </div>
    <div class="list-3">
        <ul>
            
            
            <li><a href="<?php echo $base_link.'index.php'; ?>">Start my Website</a></li>
            <li><a href="<?php echo site_url('new44/category'); ?>" target="_blank">More Services </a></li>
            <li><a href="<?php echo $base_link.'contact.php'; ?>">Contact us </a></li>
            <li><a href="<?php echo $base_link.'index.php'; ?>">Packages</a></li>
        </ul>
    </div>

<?php endif; ?>
<div style="clear:left"></div>
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

<?php if($this->router->fetch_class() == 'reseller' || $this->router->fetch_class() == 'logodesign'): ?>
    <div class="customer-support">
    <div><img src="<?php echo base_url()?>images/side-bar-bg-top.jpg" title="bg-top" /></div>
    <div class="customer-support-text">
        <h1>World recognised customer support</h1>
        <p><strong><span class="text-underline"><a href="<?php echo $base_link.'livehelp.php'; ?>">Online live help</a></span></strong> for any of your queries to your logo order or design at anytime.</p>
        <p><strong><span class="text-underline"><a href="<?php echo $base_link.'freesms.php'; ?>">Free SMS text messages</a></span></strong> to you when we send any logo samples/revisions in efforts to speed up delivery of your final logo. </p>
    </div>
    <div><img src="<?php echo base_url()?>images/side-bar-bg-bottom.jpg" title="bg-top" /></div>
    </div>
<?php else: ?>
    <div class="sidebar-support" align="center">
        <span class="images">
            <img src="<?= base_url().'images/webdesign/lst-'.COUNTRY.'.gif'; ?> " alt="<?= COUNTRY. ' Live Support'; ?>" title="<?= COUNTRY. ' Live Support'; ?>" />
        </span>
        <p><?= PHONE_NO; ?></p>
    </div>
<?php endif; ?>
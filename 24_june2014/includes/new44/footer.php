<div class="footer <?= ($this->router->method == 'category') ? "box-shadow":""; ?>">
<div class="list-1">
<ul>
<li><a href="<?php echo site_url('ourmgmt'); ?>">Management team </a></li>
<li><a href="<?php echo site_url('qualitycontrol'); ?>">Quality control</a></li>
<li><a href="<?php echo site_url('partnership'); ?>">Partnership programmes</a></li>
<li><a href="<?php echo site_url('terms'); ?>">Terms and conditions</a></li>
</ul>
</div>
<div class="list-2">
<ul>
<li><a href="<?php echo site_url('guarantee'); ?>">Guarantee</a></li>
<li><a href="<?php echo site_url('privacypolicy'); ?>">Privacy policy</a></li>
<li><a href="<?php echo site_url('casestudy'); ?>">Sample project</a></li>
<li><a href="<?php echo site_url('portfolio'); ?>">View our portfolio </a></li>
</ul>
</div>
<div class="list-3">
<ul>
<li><a href="<?php echo site_url('faq'); ?>">FAQ</a></li>
<li><a href="<?php echo site_url('packages'); ?>">See our packages </a></li>
<li><a href="<?php echo site_url('packages'); ?>">Start my logo</a></li>
<li><a href="<?php echo site_url('charity'); ?>">Our charitable work</a></li>
</ul>
</div>
<div class="list-4">
<ul>
<li><a href="<?php echo site_url('contact'); ?>">Contact us </a></li>
<li><a href="<?php echo site_url('compare'); ?>">Compare prices</a></li>
<li><a href="<?php echo site_url('casestudy'); ?>">Case study </a></li>
<li><a href="<?php echo site_url('new44/category'); ?>">More Services</a></li>
<!--<li><a href="<?php echo site_url('partnership'); ?>">Partnership opportunities</a></li>-->
</ul>
</div>
<div style="clear:left"></div>
<p>Privacy Policy: We will never share, sell, or rent individual personal information with anyone without your advance permission or unless ordered by a court of law. Information submitted to us is only available to employees managing this information for purposes of contacting you or sending you emails based on your request for information and to contracted service providers for purposes of providing services relating to our communications with you. </p>
<p>Copyright 2003-<?= date('Y')?>. Designated trademarks and brands are the property of their respective owners. The content on the Logo Design Guarantee website is protected under copyright, trademark, patent and other intellectual property rights belonging to Logo Design Guarantee and any unauthorized use of such content may violate such laws.</p>
<p><?php echo SITE_NAME2 ?> is Committed to Producing <i>Award-Winning </i>Logos!</p>
<div align="center">
<?php if(COUNTRY == 'UK' ){ ?>
<!-- START SCANALERT CODE FOR LDG.CO.UK -->
<a target="_blank" href="https://www.mcafeesecure.com/RatingVerify?ref=www.logodesignguarantee.co.uk"><img width="94" height="54" border="0" src="//images.scanalert.com/meter/www.logodesignguarantee.co.uk/13.gif" alt="McAfee SECURE sites help keep you safe from identity theft, credit card fraud, spyware, spam, viruses and online scams" /></a>
<!-- END SCANALERT CODE CODE FOR LDG.CO.UK -->
<?php } elseif( COUNTRY == 'USA') { ?>
<!-- START SCANALERT CODE FOR LDG.COM -->
<a target="_blank" href="https://www.mcafeesecure.com/RatingVerify?ref=www.logodesignguarantee.com"><img width="94" height="54" border="0" src="//images.scanalert.com/meter/www.logodesignguarantee.com/13.gif" alt="McAfee SECURE sites help keep you safe from identity theft, credit card fraud, spyware, spam, viruses and online scams" /></a>
<!-- END SCANALERT CODE LDG.COM  -->
<?php } ?>
</div>
</div>
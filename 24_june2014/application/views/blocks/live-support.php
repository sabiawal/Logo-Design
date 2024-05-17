<div class="live-support">
    <?php if($this->router->fetch_class() != 'webdesign' && $this->router->fetch_class() != 'reseller_web'): ?>
    <div><img src="<?php echo base_url()?>images/side-bar-bg-top.jpg" title="bg-top" /></div>
    <?php endif; ?>
<div class="live-support-text" align="center">
<?php if($_SERVER['REMOTE_ADDR'] != '127.0.0.1'): ?>
<div align="center" style="margin:0 0 10px 0;">
<!-- BEGIN ProvideSupport.com Graphics Chat Button Code -->
<div id="ciz1K7" style="z-index:100;position:absolute"></div>
<div id="scz1K7" style="display:inline; text-align:center;"> </div>
<div id="sdz1K7" style="display:none; text-align:center;"></div>
<script type="text/javascript">var sez1K7=document.createElement("script");sez1K7.type="text/javascript";sez1K7.defer=true;sez1K7.src=(location.protocol.indexOf("https")==0?"https://secure.providesupport.com/image":"http://image.providesupport.com")+"/js/pradyumna/safe-standard.js?ps_h=z1K7\u0026ps_t="+new Date().getTime();document.getElementById("sdz1K7").appendChild(sez1K7)</script>
<noscript>
<div style="display:inline; text-align:center">
<div style="text-align:center">
<a href="http://www.providesupport.com?messenger=pradyumna">Live Support</a></div>
</div></noscript>
<!-- END ProvideSupport.com Graphics Chat Button Code -->
</div>
<?php endif; ?>
<p>Our staff are here to help you now. Click the box above for immediate answers to your queries.</p>
</div>
    <?php if($this->router->fetch_class() != 'webdesign' && $this->router->fetch_class() != 'reseller_web'): ?>
    <div><img src="<?php echo base_url()?>images/side-bar-bg-bottom.jpg" title="bg-top" /></div>
    <?php endif; ?>
</div>
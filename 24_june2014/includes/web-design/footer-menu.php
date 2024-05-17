<?php 
//if(isset($c_id) && $c_id !="")
//{
//    
//}
//else
//{
?>
    <div class="footer-menu" align="center">
        <ul>
            <li><a href="<?php 
            if(COUNTRY == 'UK'){
            echo site_url('web-site-design/webdesigner-limited-sale/index');}
            if(COUNTRY == 'USA'){echo site_url('')."web-site-design/webdesigner-limited-sale/";}
            ?>" title="home">Home</a></li>
            
            <li><a href="<?php 
            if(COUNTRY == 'UK'){
            echo site_url('web-site-design/webdesigner-limited-sale/index');}
            if(COUNTRY == 'USA'){echo site_url('')."web-site-design/webdesigner-limited-sale/";}
            ?>" title="home">Packages</a></li>
            
            <li><a href="<?php 
            if(COUNTRY == 'UK'){
            echo site_url('web-site-design/webdesigner-limited-sale/index');}
            if(COUNTRY == 'USA'){echo site_url('')."web-site-design/webdesigner-limited-sale/";}
            ?>" title="home">Design Process</a></li>
            
            <li><a href="<?php echo site_url('web-site-design/webdesigner-limited-sale/portfolio'); ?>">Portfolio</a></li>
            <li><a href="<?php echo site_url('web-site-design/webdesigner-limited-sale/portfolio'); ?>">Testimonials</a></li>
            <li><a href="<?php echo site_url('web-site-design/webdesigner-limited-sale/faq'); ?>">FAQ</a></li>
            <li><a href="<?php echo site_url('web-site-design/webdesigner-limited-sale/terms'); ?>">Terms &amp; Conditions</a></li>
            <li><a href="<?php echo site_url('web-site-design/webdesigner-limited-sale/privacypolicy'); ?>">Privacy policy</a></li>
            <li><a href="<?php echo site_url('new44/category'); ?>">More Services</a></li>
            <li><a href="<?php echo site_url('web-site-design/webdesigner-limited-sale/contact'); ?>">Contact</a></li>
        
        </ul>
    </div>

<?php //} ?>
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
            echo site_url('reselleropportunity/webdesignindex');}
            if(COUNTRY == 'USA'){echo site_url('')."reselleropportunity/webdesignindex";}
            ?>" title="home">Home</a></li>
            
            <li><a href="<?php 
            if(COUNTRY == 'UK'){
            echo site_url('reselleropportunity/webdesignindex');}
            if(COUNTRY == 'USA'){echo site_url('')."reselleropportunity/webdesignindex";}
            ?>" title="home">Packages</a></li>
            
            <li><a href="<?php 
            if(COUNTRY == 'UK'){
            echo site_url('reselleropportunity/webdesignindex');}
            if(COUNTRY == 'USA'){echo site_url('')."reselleropportunity/webdesignindex";}
            ?>" title="home">Design Process</a></li>
            
            <li><a href="<?php echo site_url('reselleropportunity/webdesignportfolio'); ?>">Portfolio</a></li>
            <li><a href="<?php echo site_url('reselleropportunity/webdesignportfolio'); ?>">Testimonials</a></li>
            <li><a href="<?php echo site_url('reselleropportunity/webfaq'); ?>">FAQ</a></li>
            <li><a href="<?php echo site_url('reselleropportunity/webterms'); ?>">Terms &amp; Conditions</a></li>
            <li><a href="<?php echo site_url('reselleropportunity/webprivacypolicy'); ?>">Privacy policy</a></li>
            <li><a href="<?php echo site_url('reselleropportunity/webdesigncontact'); ?>">Contact</a></li>
        
        </ul>
    </div>

<?php //} ?>
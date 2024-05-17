<?php $this->load->view('includes/header-common'); ?>
        <link href="<?php echo base_url() ?>assets/css/fotorama.css" rel="stylesheet">
        <script src="<?php echo base_url() ?>assets/js/fotorama.js"></script>
        <section class="content">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<section class="port-gray-border-round-box clearfix">
							<div class="logo-sl-cover">
                                <?php
                                if(date('d')<8){    
                                    $portfolio_month = mktime(0,0,0,date("m")-1,date("d"),date("Y"));
                                    $portfolio_date  = trim(date("m Y",$portfolio_month));
                                    $x               = explode(' ',$portfolio_date);    
                                    $mth = $x[0];
                                    $mth = (int)$mth;      
                                    $month = array('','January','February','March','April','May','June','July','August','September','October','November','December');  
                                        if($mth ==12)
                                        $portfolio_date = $month[$mth].' '.(date('Y')-1);
                                        else
                                        $portfolio_date = $month[$mth].' '.(date('Y'));
                                    }
                                    else{$portfolio_date = date("F Y");} 
                                ?>
								<h2>Recent Clients From <?php echo $portfolio_date; ?></h2>
								<div class="logo-slide">
									<div class="logo-stage">
										<div class="fotorama" data-width="1000" data-ratio="1000/295" data-max-width="100%" data-autoplay="5000" data-transition="crossfade" data-loop="true" data-nav="thumbs" data-thumbwidth="230" data-thumbheight="67">
											<img  src="assets/images/logo-portfolio/1.png" alt="portfolio"/>
											<img  src="assets/images/logo-portfolio/2.png" alt="portfolio"/>
											<img  src="assets/images/logo-portfolio/3.png" alt="portfolio"/>
											<img  src="assets/images/logo-portfolio/4.png" alt="portfolio"/>
											<img  src="assets/images/logo-portfolio/1.png" alt="portfolio"/>
											<img  src="assets/images/logo-portfolio/2.png" alt="portfolio"/>
											<img  src="assets/images/logo-portfolio/3.png" alt="portfolio"/>
											<img  src="assets/images/logo-portfolio/4.png" alt="portfolio"/>
										</div>
										<div class="excited-pack">
											<img class="excited" src="assets/images/excited-txt.png" alt="excited ?" />
											<a class="green-btn" href="<?php echo base_url('packages') ?>"><span data-hover="See Our Packages!">See Our Packages!</span></a>
										</div>
									</div>
								</div>
							</div>
						</section>
                        
                        <?php $this->load->view('includes/portfolio_category'); ?>
						<?php //include 'includes/portfolio-part.php' ?>
					</div>
				</div>
			</div>			
		</section>
<?php $this->load->view('includes/footer-common'); ?>
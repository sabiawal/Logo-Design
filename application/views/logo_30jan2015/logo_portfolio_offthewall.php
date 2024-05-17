<?php $this->load->view('includes/header-common'); ?>
        <link href="<?php echo base_url() ?>assets/css/fotorama.css" rel="stylesheet">
        <script src="<?php echo base_url() ?>assets/js/fotorama.js"></script>
        <section class="content">
			<div class="container">
				<div class="row">
					<div class="logo-in-portfolio col-xs-12">
						<section class="port-gray-border-round-box port-gray-border-round-box-alter clearfix">
							<h2>Off The Wall Logo Design</h2>
							<div class="fotorama" data-width="1000" data-ratio="1000/252" data-max-width="100%" data-autoplay="5000" data-transition="crossfade" data-loop="true" data-nav="thumbs" data-thumbwidth="250" data-thumbheight="67">
								<img  src="assets/images/logo-in-portfolio/Off-The-Wall1.jpg" alt="Off-The-Wall1"/>
								<img  src="assets/images/logo-in-portfolio/Off-The-Wall2.jpg" alt="Off-The-Wall1"/>
								<img  src="assets/images/logo-in-portfolio/Off-The-Wall3.jpg" alt="Off-The-Wall1"/>
							</div>
							<a href="<?php echo site_url('industry/logo_portfolio_accounting'); ?>" class="green-btn-port">Next Industry</a>
						</section>
						<?php $this->load->view('includes/portfolio_category'); ?>
					</div>
				</div>
			</div>
			
			
		</section>
<?php $this->load->view('includes/footer-common'); ?>
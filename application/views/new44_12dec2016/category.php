<?php $this->load->view('includes/new44/header-common'); ?>
    <section class="content">
			<div id="banner-bottom-slogan">
				<div class="container">
					<div class="row">
						<div class="col-sm-8 clearfix we-care">
							<h3>We Care About You</h3>
							<div class="we-care-about-you">
								<ul>
									<li>3 <?php echo COUNTRY; ?>  designers (minimum)</li>
									<li><?php echo GUARANTEE_DAYS; ?> day, 100% money back guarantee</li>
									<li>Free unlimited redraws &amp; revisions</li>
								</ul>
								<ul>
									<li>24 Hour revisions turnaround</li>
									<li>Hand-drawn logos</li>
									<li>Personal account manager</li>
								</ul>
							</div>
						</div>
						<div class="col-sm-4 clearfix">
							<div class="trapzoid-box guarantee-box">
								<h3 class="text-center"><a href="<?php echo base_url('packages'); ?>"> See Our Packages</a></h3>
							</div>
						</div>
					</div>
				</div>
			</div>

			<section class="slogan">
				<div class="container">
					<h1 class="text-center">
						What do you want designed?
					</h1>
				</div>
			</section>
			
			<section id="bf-common-body" class="normal-desc-box">
				<div class="container">
					<div class="row">
						<section class="green-vertical-divider clearfix">
							<div class="col-sm-6">
                                <!--  Email package -->
                                <?php                                 
                                $count = 1; 
                                foreach ($email_package->result() as $row):
                                ?>
                                <div class="stack2">
								<?php 
                                    if($count == 1):
                                        echo '<h5>'.$row->categories.'</h5>';
                                        echo '<ul>';
                                    endif;
                                        echo '<li><a href="email-newsletter.php">'.ucfirst(strtolower($row->package_name)).'</a></li>';
                                    
                                $count++;
                                endforeach;
                                ?>
                                    </ul>
								</div>
                                <!--  // Email package -->
                                <!--  Marketing package -->
                                <?php 
                                $count = 1; 
                                foreach ($marketing_package->result() as $row):
                                ?>
                                <div class="stack2">
								<?php 
                                    if($count == 1):
                                        echo '<h5>'.$row->categories.'</h5>';
                                        echo '<ul>';
                                    endif;
                                        echo '<li><a href="email-newsletter.php">'.ucfirst(strtolower($row->package_name)).'</a></li>';
                                    
                                $count++;
                                endforeach;
                                ?>
                                    </ul>
								</div>
                                <!--  // Marketing package -->								
							</div>
							
							<div class="col-sm-6">
								<!--  Logo package -->
                                <?php 
                                $count = 1; 
                                foreach ($logo_package->result() as $row):
                                ?>
                                <div class="stack2">
								<?php 
                                    if($count == 1):
                                        echo '<h5>'.$row->categories.'</h5>';
                                        echo '<ul>';
                                    endif;
                                        echo '<li><a href="email-newsletter.php">'.ucfirst(strtolower($row->package_name)).'</a></li>';
                                    
                                $count++;
                                endforeach;
                                ?>
                                    </ul>
								</div>
                                <!--  // Logo package -->
                                <!--  Merchandise package -->                                
                                <?php 
                                $count = 1; 
                                foreach ($merc_package->result() as $row):
                                ?>
                                <div class="stack2">
								<?php 
                                    if($count == 1):
                                        echo '<h5>'.$row->categories.'</h5>';
                                        echo '<ul>';
                                    endif;
                                        echo '<li><a href="email-newsletter.php">'.ucfirst(strtolower($row->package_name)).'</a></li>';
                                    
                                $count++;
                                endforeach;
                                ?>
                                    </ul>
								</div>
                                <!--  // Merchandise package -->
                                
								<!--  Stationary package -->                                
                                <?php 
                                $count = 1; 
                                foreach ($stationary_package->result() as $row):
                                ?>
                                <div class="stack2">
								<?php 
                                    if($count == 1):
                                        echo '<h5>'.$row->categories.'</h5>';
                                        echo '<ul>';
                                    endif;
                                        echo '<li><a href="email-newsletter.php">'.ucfirst(strtolower($row->package_name)).'</a></li>';
                                    
                                $count++;
                                endforeach;
                                ?>
                                    </ul>
								</div>
                                <!--  // Stationary package -->
								<!--  Web package -->                                
                                <?php 
                                $count = 1; 
                                foreach ($web_package->result() as $row):
                                ?>
                                <div class="stack2">
								<?php 
                                    if($count == 1):
                                        echo '<h5>'.$row->categories.'</h5>';
                                        echo '<ul>';
                                    endif;
                                        echo '<li><a href="email-newsletter.php">'.ucfirst(strtolower($row->package_name)).'</a></li>';
                                    
                                $count++;
                                endforeach;
                                ?>
                                    </ul>
								</div>
                                <!--  // Web package -->
							</div>
						</section>
					</div>
				</div>
			</section>
		</section>
    
    
    
    
    
    
    
    
    
    
    
    
<?php $this->load->view('includes/new44/footer-common'); ?>
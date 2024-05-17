<?php $this->load->view('includes/reseller/header-common'); ?>
<?php
$un = substr(md5(mktime()), 0, 5);
$pw = substr(md5(rand(0, 9)), 0, 5);
?>
<section class="content">
    <div id="banner-bottom-slogan">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 clearfix we-care">
                    <h3>All Packages Include</h3>
                    <div class="we-care-about-you">
                        <ul>
                            <li>3 <?php echo COUNTRY; ?> designers (minimum)</li>
                            <li><?php echo GUARANTEE_DAYS; ?> day, 100% money back guarantee</li>
                            <li>Free, Unlimited Concepts, Redraws &amp; Revisions</li>
                        </ul>
                        <ul>
                            <li>24 hour revisions turnaround</li>
                            <li>Hand-drawn logos</li>
                            <li>Personal account manager</li>
                        </ul>
                    </div>

                </div>
                <div class="col-sm-4 clearfix">
                    <div class="trapzoid-box guarantee-box">
                        <h3 style="padding: 46px 0;" class="text-center trapzoid-extent1">
                            <a href="<?php echo site_url('reseller/compare'); ?>">Learn More About <br /> Our Advantages</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="slogan">
        <div class="container">
            <h1 class="text-center">
                Reseller Service Overview
            </h1>
        </div>
    </section>

    <section id="simple-tab">
        <div class="line"></div>
        <div class="container">
            <div class="row">
                <ul class="col-xs-12 nav nav-tabs">
                    <li class="active"><a href="#packages" data-toggle="tab">Packages</a></li>
                    <li><a href="#compare-us" data-toggle="tab">Compare Us</a></li>
                    <li><a href="#confidentiality" data-toggle="tab">Confidentiality</a></li>
                    <li><a href="#process" data-toggle="tab">Process</a></li>
                    <li><a href="#programme" data-toggle="tab">Programme</a></li>
                    <li><a href="#qualifications" data-toggle="tab">Qualifications</a></li>
                    <?php if (!isset($_SESSION['reseller_id'])): ?>
                        <li id="get_start_active"><a href="#get-started" data-toggle="tab">Get Started</a></li>
                    <?php endif; ?>  
                </ul>
                <div class="clearfix"></div>
                <div class="tab-content clearfix">
                    <div id="packages" class="tab-pane fade in active">
                        <section class="slogan">
                            <div class="container">
                                <h1 class="text-center">
                                    Get your clients' design needs fulfilled,
                                    <br />
                                    and <span class="theme-green-style2-conly"> raise your profits </span> just by Reselling!
                                </h1>
                            </div>
                        </section>
                        <div class="col-sm-12">
                            <h5 class="bf-med-title text-center">
                                Gain additional income, and gain more efficiency in dealing
                                <br />
                                with customers by working with us closely. Our Reselling
                                <br />
                                services are open to you, <strong style="color: #000000;"> wherever you are, 24/7!...</strong>
                            </h5>
                            <div class="normal-desc-box">
                                <p>We at Logo Design Guarantee want to continue helping you out in various ways. And we have decided that one of those ways would be design reselling: Your clients order from you, we do the job for you. It's that simple.</p>
                                <p>No start-up costs, no monthly costs, no contracts.</p>
                                <p>And we do it for low prices, so that you can <strong> boost your profits and your sales </strong> proportionally!...</p>
                                <p style="font-style: italic;">...This is a win-win situation!</p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="green-vertical-divider clearfix">
                            <div class="col-sm-6">
                                <h4 class="green-divider-title">We can help you out, beginners and old-timers alike!</h4>
                                <p>Do you want to start a design business? Or do you already have logo services, and are looking to outsource to others for more efficiency? Or would you simply like to add logo design services to your own repertoire?</p>
                                <p>Whether you're running a design company that is looking to increase work efficiency, or an individual, looking for a way to start a business and make some profit... <span style="font-style: italic;"></span> Whoever you are, we have the perfect opportunity for you to do these, and more!</p>
                                <br />
                                <h4 class="green-divider-title">Your secrets are safe with us.</h4>
                                <p>We also have a <strong>"White Label" service</strong>, meaning your work will remain top secret. Nobody will ever know that you worked with us, because no publicity will be given.</p>
                                <p>You can even call this "under-the-table," but no worries, working with us is perfectly legal.</p>
                                <p>Should you opt to arrange with us for the phone staff add-on, our staff will act and answer like we were actually part of your company.</p>
                                <p>You get your own phone service staff and designer team!</p>
                                <br />
                                <h4 class="green-divider-title">Work with us right away!</h4>
                                <p>Make a better profit and experience our top-rank services! Before you waste any money from lack of proper profit or lack of efficiency, start working with us for your projects!</p>
                                <p>Inquire by giving us a call today! Again, unlike other design companies, we are available to you 24 hours a day, 7 days a week, so don't feel reserved...</p>
                                <p>...We're sure we can provide a customized reseller service for you.</p>
                                <p>...Tell us your personal requests and contact us <span style="text-decoration: underline;">right now!</span></p>
                            </div>

                            <div class="col-sm-6">
                                <h4 class="green-divider-title">Are you currently outsourcing? Why pick us over them?</h4>
                                <p>If you choose to work with us, you get all these unique benefits:</p>
                                <p class="normal-gray-box">We have designers available for contacting by phone or
                                    by live chat or by email for support, 24/7! </p>
                                <p class="normal-gray-box">We respond quickly, within 15 seconds of your call or
                                    chat message!</p>
                                <p class="normal-gray-box">For bigger clients, we can set up phone and sales care, also available 24/7, and have a unique phone number for you, so we can tell if the customer is for your company!</p>
                                <br />
                                <h4 class="green-divider-title">With us, you'll stand above the competition!...</h4>
                                <p>...And make big profits at the same time! We've always prided ourselves with having the lowest prices in the competition. The same stands here, so dealing with us is very simple and cheap!</p>
                            </div>
                        </div>
                    </div>
                    <div id="compare-us" class="tab-pane fade">
                        <section class="slogan">
                            <div class="container">
                                <h1 class="text-center">
                                    You stand to <span class="theme-green-style2-conly"> gain uniquely </span> with the best 
                                    <br />
                                    reseller deals you can find <span class="theme-green-style2-conly"> only here!</span>
                                </h1>
                            </div>
                        </section>

                        <div class="col-sm-12">
                            <h5 class="bf-med-title text-center">
                                There are many companies out there that can offer you
                                <br />
                                reseller deals... But are they up to your standards?
                                <br /><br />
                                Logo Design Guarantee <span class="theme-green-style2-conly"> ensures </span> that you get more than
                                <br />
                                your money's worth!... 
                            </h5>
                            <div class="normal-desc-box">
                                <p>Whether you want to start a business, or to add custom logo design to your services, or you just want to outsource to improve efficiency and save costs, there are a lot of factors to think of.</p>
                                <p>There's a whole bunch of custom design companies out there, and most of them would promise you great quality. Of course, that should be any design company's selling point...</p>
                                <p style="font-style: italic;">...But, we say, that's too mainstream.</p>
                                <p>We at Logo Design Guarantee think beyond just having great quality. No, we think far beyond that, and so we aim to provide you the best of the best, in terms of services, design, customer service, and even with our prices!</p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="green-vertical-divider clearfix">
                            <div class="col-sm-6">
                                <h4 class="green-divider-title">Our processes can beat them all off, from beginning to end</h4>
                                <p>"Two heads are better than one."</p>
                                <p>The above statement implies that it is better to have more people to work cooperatively on a task. While this is true most of the time, there is a limit to the number of people required to be able to brainstorm ideas properly...</p>
                                <p>Some companies will give you just one designer. Too few.</p>
                                <p>Some would give you 10 designers! Too many.</p>
                                <p>We took the perfect mix by giving you 3 in-house designers to work on your project for even our most basic package!</p>
                                <p style="font-style: italic;">But it doesn't end there!</p>
                                <p>We also have an account manager that would oversee your project and check the quality of the logos before we send them over to you. Quality checks are done by us, too!</p>
                                <br />
                                <h4 class="green-divider-title">Track your project anytime</h4>
                                <p>You can talk to our in-house designers via live chat or by giving us a call... and you can reach us, 24/7! Now this is a perk that very few custom design companies can give you...</p>
                                <p style="font-style: italic;">With Logo Design Guarantee, there's no need to be limited by office hours!</p>
                            </div>
                            <div class="col-sm-6">
                                <h4 class="green-divider-title">The best services, the best prices, and the best guarantee</h4>
                                <p>The reasons that you've read above are not the only reasons why you should go with Logo Design Guarantee for reselling logos or other custom designs...</p>
                                <p>It's in our company logo that we give you "The lowest price and the best money back guarantee!" Feel free to compare us to any other design company out there - you won't find any other company that offers better services and prices...</p>
                                <p>Our <strong class="theme-green-style2-conly"> <?php echo GUARANTEE_DAYS; ?>-Day Money Back Guarantee </strong> applies to logo reselling as well, so dealing with us, again, is totally risk-free!</p>
                                <p>If you're looking to deal with the best, most reliable custom design company out there for reselling, look no further!</p>
                                <p>Call us <span style="text-decoration: underline;">right now</span> and experience the world-class customer service that we are known for!</p>
                            </div>
                        </div>

                    </div>
                    <div id="confidentiality" class="tab-pane fade">
                        <section class="slogan">
                            <div class="container">
                                <h1 class="text-center">
                                    Stay and bask in the <span class="theme-green-style2-conly"> spotlight</span>, while
                                    <br />
                                    we help you from behind the shadows!					
                                </h1>
                            </div>
                        </section>
                        <div class="col-sm-12">
                            <h5 class="bf-med-title text-center">
                                Reap the benefits of being partners with us, with our reseller
                                <br />
                                opportunities that can give you <span class="theme-green-style2-conly"> more than just a hefty profit!</span>
                            </h5>
                            <div class="normal-desc-box">
                                <p>We're running a design company here, so we should have portfolios to prove to you that we can do the job, right?</p>
                                <p style="font-style: italic;">...But we'll be missing the whole point!</p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="green-vertical-divider clearfix">
                            <div class="col-sm-6">
                                <h4 class="green-divider-title">What is this all about?</h4>
                                <p>It's all about giving you the best reseller opportunity there is. It's about giving you a <span style="font-style: italic;"> potentially stable additional income generator.</span></p>
                                <p>We have to keep things confidential between us, or else you will lose the trust that you're trying to build up with your customers, whether you're handling a new company or not.</p>
                                <p>Sure, we lose a great opportunity to self-advertise our expertise with the logos that we create, but hey, this isn't about just our company or yours, really...</p>
                                <p style="font-style: italic;">...It's about us both.</p>
                                <br />
                                <h4 class="green-divider-title">The "White Label" service</h4>
                                <p>The designs we'll work on for you will <span style="text-decoration: underline;">not</span> receive our logo watermark that we place in the designs, instead, <span style="font-style: italic;"> we will watermark the images with your own branding!</span></p>
                                <p>We assure you that Logo Design Guarantee's information will never be disclosed to your clients. The client orders from you, you pass that order onto us, and then we work on it!</p>
                                <p>This is how easy it is to outsource to us, and this is how simple it is for you to gain your own profit. Whether you're just planning on adding a design service to your company, or you're starting a custom design company...</p>
                                <p style="font-style: italic;">...Partnering with us might be the best choice you'll ever make in your entire business lifecycle!...</p>
                                <p>Hesitate no longer, and start making profits. You can take the spotlight, while we work for you in the backstage.</p>
                                <p>Start reselling by signing up today.</p>
                            </div>
                            <div class="col-sm-6">
                                <h4 class="green-divider-title">Reap the benefits of our expertise without anyone knowing</h4>
                                <p>We at Logo Design Guarantee specialize in giving you the best logos for your company, among other design packages like websites, etc.</p>
                                <p>We make sure that these designs will fit your clients' style and your preferences. We make sure that the images we give you through the logos we design properly communicate your company's trustworthiness and expertise in your field.</p>
                                <p>Our <?php echo COUNTRY; ?> award-winning in-house designers, whom you can reach via live chat or call, are available to you, 24/7!</p>
                                <p>Also, our <?php echo GUARANTEE_DAYS; ?>-Day Money Back Guarantee is applied, and is arguably the strongest guarantee in the design industry.</p>
                                <p>The point is, when you make a reseller deal with us, you can utilize Logo Design Guarantee's excellent, world-class services and call them your own!</p>
                                <p>It's a no-brainer that you will be able to use the skills of our professional designers for your own profit... But, we can also provide them to you if you need a customer service team that will answer your logo design-related calls for you, 24/7!</p>
                                <p>We will answer those calls meant for you as if we were really working for you.<span style="font-style: italic;"> We'll have a separate toll-free number prepared just for you!</span></p>
                                <p>And if your client requests a refund, you can easily make your client reach us via phone call. And then, request the refund. <span style="font-style: italic;"> To prevent abuse of our guarantee, the client himself will have to make the call.</span></p>
                                <p>Again, this is all under the guise that we are working under your very own company. It's all your credit.</p>
                            </div>
                        </div>
                    </div>
                    <div id="process" class="tab-pane fade">
                        <section class="slogan">
                            <div class="container">
                                <h1 class="text-center">
                                    <span class="theme-green-style2-conly">The Process towards Wealth: </span> the
                                    <br />
                                    Journey with our reseller program.					
                                </h1>
                            </div>
                        </section>
                        <div class="col-sm-12">
                            <h5 class="bf-med-title text-center">
                                <span style="text-decoration: underline;">Start taking action</span> towards wealth building with our
                                <br />
                                reseller program.
                            </h5>
                            <div class="normal-desc-box">
                                <p>Whoever you are as long as you’re interested to earn extra money, Logo Design Guarantee can help you out.</p>
                                <p>We can help established entrepreneurs, working students, stay–at- home moms, regular employees, start-up businesses and many more. All you need is effort, willingness to collaborate with us and to invest some trust into our <strong class="theme-green-style2-conly"><?php echo COUNTRY; ?>-Award winning designers!</strong></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="green-vertical-divider clearfix">
                            <div class="col-sm-6">
                                <h4 class="green-divider-title">The Simple Path towards Success</h4>
                                <p>The steps in our reseller program can be summed up easily:</p>
                                <ul class="tick">
                                    <li>Free sign up for our reseller program!</li>
                                    <li>You'll instantly be given a reseller account to work through.</li>
                                    <li>Check out our discounted packages within your account.</li>
                                    <li>Place orders using your clients design requests/briefs.</li>
                                    <li>Our designers get to work the same day!</li>
                                    <li>We upload the artwork into your reseller account and notify you by email.</li>
                                    <li>You forward the outputs to your clients.</li>
                                    <li>The client receives the artwork with no mention of our company Logo Design Guarantee. Simple.</li>
                                </ul>
                                <p>Our phone staffs are available 24/7 to assist you with your queries.</p>
                                <p>Remember, that our packages normally start at <?php echo CURRENCY . START_LP_P; ?>, but for our reseller program we give you 10% discount and you can sell it for whatever price you wish!</p>
                                <p>Devote your resources into marketing and sales campaigns to get a solid market. Remember, we assist you by popularizing our services under your name to get you loyal clients.</p>
                                <p><span style="font-style: italic;">...No need for complicated knowledge or training</span>, and we're done with the process that repeats itself for each <span style="text-decoration: underline;">customer's orders.</span></p>
                            </div>
                            <div class="col-sm-6">
                                <h4 class="green-divider-title">Our Reseller Program Stands Out</h4>
                                <p>Our reseller program has the following <span style="text-decoration: underline;">unique</span> factors:</p>
                                <ul class="tick">
                                    <li>Free sign up for our reseller program!</li>
                                    <li>You'll instantly be given a reseller account to work through.</li>
                                    <li>Check out our discounted packages within your account.</li>
                                    <li>Place orders using your clients design requests/briefs.</li>
                                    <li>Our designers get to work the same day!</li>
                                    <li>We upload the artwork into your reseller account and notify you by email.</li>
                                    <li>You forward the outputs to your clients.</li>
                                    <li>The client receives the artwork with no mention of our company Logo Design Guarantee. Simple.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="normal-desc-box text-center">
                            <div class="container">
                                <div class="row">
                                    <p>Excited?</p>
                                    <p><span style="text-decoration: underline;">Get started</span> and let's <strong class="theme-green-style2-conly"> begin the journey </strong> together right now!</p>
                                </div>
                            </div>
                        </div>
                        <section class="slogan">
                            <div class="container">
                                <h1 class="text-center">
                                    "Remember, you get a free account
                                    <br />
                                    <span class="theme-green-style2-conly">instantly</span> activated upon sign up that
                                    <br />
                                    you can start using today!"
                                </h1>
                            </div>
                        </section>
                    </div>
                    <div id="programme" class="tab-pane fade">
                        <section class="slogan">
                            <div class="container">
                                <h1 class="text-center">
                                    Get <span class="theme-green-style2-conly"> more clients </span> with the reseller
                                    <br />
                                    program that can <span style="font-style: italic;"> give you what you want!</span>
                                </h1>
                            </div>
                        </section>
                        <div class="col-sm-12">
                            <h5 class="bf-med-title text-center">
                                With customized design and full support, Logo
                                <br />
                                Design Guarantee <span style="text-decoration: underline;">can help you!</span>
                            </h5>
                            <div class="normal-desc-box">
                                <p>The purpose may not be important to some people, but it allows anybody to stay focused and to continue with what they're doing.</p>
                                <p>The same applies in reselling, the purpose is necessary to get the necessary results. By knowing the answer to the "Why" question allows anybody to go on...</p>
                                <p>...and yes you can too. You can get what you want with a reseller program. We allow for customization of all packages (number of samples, etc) and any type of designs that you need.</p>
                                <p>Our in-house staffs can create the designs that your clients need and provide them on–the–dot. In addition, our staffs can be contacted 24/7 via phone/live chat/email.</p>
                                <p>The basics of the programme are that you can focus on marketing and sales, whilst we can focus on customer fulfillment. The economics can also be more favorable to you.</p>
                                <p>Our programme is designed to offer over 50 design services that you can readily order (and indeed you can request any ones we don't currently offer). This allows you to more easily advertise our services to your customers in "quick-fix" fashion so you can drive sales.</p>
                                <p>As long as you are a reseller of our service, then indeed you can offer an identical package to your clients that we indeed offer to our normal customer base. This allow you or your development team to get solid thought–out packages efficiently up in to your marketing streams (like on to your website). We provide web design services so we can even help you with that process.</p>
                            </div>
                            <div class="normal-desc-box no-pad-top no-pad-bottom clearfix">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h4 class="green-divider-title">Specialized support in reselling!</h4>
                                        <p>We have an established department focused only for our reseller side of the business. We have 24/7 sales and support to our reseller department, so that we can set you up efficiently and be there along the journey.</p>
                                        <p>Remember, we ask for no set-up fees, no monthly costs, no contracts, or any obligations along the way. Our programme is designed to be simple, fast and effective for us both.</p>
                                        <p>Even our online "sign-up" process takes about 1 minute and you get instant access to your reseller account to use straight away.</p>
                                        <p>Other design resellers often ask for contracts, and minimum orders.</p>
                                        <p>Further, our prices are the lowest we can find on the internet. And all our design services come with a <?php echo GUARANTEE_DAYS; ?> day money back guarantee.</p>
                                        <p>What are you waiting for? Enjoy the <span style="text-decoration: underline;">earning opportunity</span> reselling can bring you, and <strong><a class="get-start" style="color: #70AC00;" href="javascript:void(0);">sign up</a></strong> today!</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <!--for icon-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="qualifications" class="tab-pane fade">
                        <section class="slogan">
                            <div class="container">
                                <h1 class="text-center">
                                    Sell your <span style="font-style: italic;">branded designs</span> without
                                    <br />
                                    thinking much about the <span class="theme-green-style2-conly">requirements!</span>
                                </h1>
                            </div>
                        </section>
                        <div class="col-sm-12">
                            <h5 class="bf-med-title text-center">
                                As long as you show basic willingness to partner with us, then
                                <br />
                                <span style="text-decoration: underline;">Logo Design Guarantee</span> will provide the designs that your clients need.
                            </h5>
                            <div class="normal-desc-box no-pad-bottom">
                                <p>We hope to help businesses and individuals to gain additional source of profit as long as they can handle honest business.</p>
                                <p>In addition, Logo Design Guarantee will not get involved directly with any reseller's clients out of respect with its reseller.</p>
                                <p>We only move according to instructions and our team will work on the designs accordingly. We basically act as design technicians according to the design instructions sent to us.</p>
                                <p>Indeed, we often only require short design briefs as we have years of experience designing thousands of designs. This allows the process to be quick and easy for you and your customer.</p>
                                <p>We also offer unlimited design revisions, and hence our customer <strong> satisfaction rate is about 98%.</strong></p>
                                <p>Logo Design Guarantee will surely work on any revisions or changes based on what you send to us (via your own account panel or over the phone if you prefer).</p>
                                <p>It's our aim to make you happy with as little frictions as possible so you can focus on marketing and selling, so that hopefully we get more orders outsourced to us. Simple.</p>
                                <p>You can start up by outsourcing maybe a few orders to us. Hopefully, we can show our expertise so as to encourage you to outsource more. For this reason, we require no minimum orders.</p>
                                <p>Start today and test our service. <strong><a class="get-start" style="color: #70AC00;" href="javascript:void(0);">sign up</a></strong> now!</p>
                            </div>
                        </div>
                    </div>
                    <div id="get-started" class="tab-pane fade">
                        <section class="slogan">
                            <div class="container">
                                <h1 class="text-center">
                                    Simple "One page" sign up:
                                </h1>
                                <div class="text-center slogan-tagline-2">
                                    Instant activation of your FREE account!
                                </div>
                            </div>
                        </section>
                        <div class="green-vertical-divider clearfix">
                            <div class="col-sm-6">
                                <img class="img-responsive" src="assets/images/get-started-boy.jpg" alt="get started" />
                                <p class="turn-ideas">
                                    Turn your ideas 
                                    <br />
                                    into reality...
                                </p>
                            </div>
                            <div class="col-sm-6">
                                <div class="col-sm-12">
                                    <div class="col-sm-offset-1 kick-start-box">
                                        <h2>Kick-Start Your Reseller Fun!</h2>
                                        <p>You can get your first project to our designers in less than 2 minutes!</p>
                                        <form class="reseller" action="<?php echo site_url('reseller/okordermid'); ?>" id="reseller_signup" method="post">
                                            <ul>
                                                <li><input class="n required" placeholder="Your full name*" type="text" name="fullname" /></li>
                                                <li><input class="c required" placeholder="Company or organization*" type="text" name="company_name"/></li>
                                                <li><input class="e required" placeholder="Email*" type="text"name="email_id" /></li>
                                                <input id="username" type="hidden" name="username" value="<?= $un; ?>" />
                                                <input type="hidden" name="password" value="<?= $pw; ?>" />
                                            </ul>
                                            <div class="text-center">
                                                <button class="blue-grad-btn" type="submit">Get My Account Now !</button>
                                            </div>
                                        </form>
                                        <!-- Form Validation -->
                                        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.validate.min.js"></script>
                                        <script type="text/javascript">
                                            $('#reseller_signup').validate();
                                        </script>
                                        <!-- /Form Validation -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<?php $this->load->view('includes/reseller/footer-common'); ?>
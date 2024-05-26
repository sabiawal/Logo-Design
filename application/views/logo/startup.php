<?php
$this->load->view('includes/header-common');
?>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<style>
    @font-face {
        font-family: SegoeUISemilight;
        src: url(assets/fonts/segoeuislight/segoeuisl.eot);
        src: url(assets/fonts/segoeuislight/segoeuisl.eot) format('embedded-opentype'), url(assets/fonts/segoeuislight/segoeuisl.woff) format('woff'), url(assets/fonts/segoeuislight/segoeuisl.ttf) format('truetype'), url(assets/fonts/segoeuislight/segoeuisl.svg#SegoeUISemilight) format('svg')
    }
    @font-face {
        font-family: HelveticaNeueRegular;
        src: url(assets/fonts/HelveticaNeue/helveticaneue.eot);
        src: url(assets/fonts/HelveticaNeue/helveticaneue.eot) format('embedded-opentype'), url(assets/fonts/HelveticaNeue/helveticaneue.woff) format('woff'), url(assets/fonts/HelveticaNeue/helveticaneue.ttf) format('truetype'), url(assets/fonts/HelveticaNeue/helveticaneue.svg#HelveticaNeueRegular) format('svg')
    }
    .freeser {
        border: 1px dashed #ff8a00;
    } 
    .freeser a {
        font-size: 17px;
        text-align: center;
    } 
    .delivery a {
        border: none !important;
    } 
</style>

<!-- new css for pacakages -->
<style type="text/css">
    @media(min-width:769px )
    {.mrtbnew .col-md-3
    {padding-left:0px !important;
    padding-right: 5px !important;}
    .mrtbnew .three-pack
    {padding: 26px !important;}
    .newpk a {
    font-size: 16px !important;
    }
    }
    .circle1{

    background: #fedc45 ;
    width: 58px;
    height: 40px;
    position: absolute;
    top: -1em;
    left: 0px;
    line-height: 36px;
    text-align: center;
    color: #000000;
    font-weight: 700;
    /*text-shadow: 2px 2px 2px rgba(150, 150, 150, 1);*/
    }
    .circle span{
    color: #000000;
    font-size: 9px;
    }
    i.fa.fa-star
    {color:#ff8a00;}
    .pack-list ul li {
    border-bottom: 1px solid #e0e0e0 !important;
    }
    .excelh {
    min-height: 1535px;
    }
    @media (min-width: 1200px) and (max-width:1400px ){
    .new-container {
    width: 96%;
    padding-right: 0px;
    padding-left:0px;
    margin-right: auto;
    margin-left: auto;
    }
    .mrtbnew .col-md-3
    {padding-left:0px !important;
    padding-right: 12px !important;
    }
    .mrtbnew .three-pack {

    min-height: 1525px;
    }
    .best-value
    {right: 12px;}}
    @media(min-width: 1401px) and (max-width: 2040px)
    {.new-container {
    width: 75%;
    padding-right: 0px;
    padding-left: 0px;
    margin-right: auto;
    margin-left: auto;
    }
    .best-value
    {right: 9px;}
    .mrtbnew .three-pack {

    min-height: 1453px;
    }
    .mrtbnew .col-md-3
    {padding-left:0px !important;
    padding-right: 9px !important;
    }}

    /* Tooltip custom styles specifically for .hori class */
    .hori .tooltip {
        left: 97px !important; /* Adjusts the tooltip slightly to the left */
        max-width: 300px; /* Sets a maximum width for the tooltip */
        white-space: normal; /* Allows the tooltip to wrap text */
        /* background-color: #fff; */
        color: #333;
        /* border: 1px solid #ccc; */
        padding: 10px;
        border-radius: 4px;
        /* box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); */
    }
    .three-pack .tooltip {
        left: 97px !important; /* Adjusts the tooltip slightly to the left */
        max-width: 300px; /* Sets a maximum width for the tooltip */
        white-space: normal; /* Allows the tooltip to wrap text */
        /* background-color: #fff; */
        color: #333;
        /* border: 1px solid #ccc; */
        padding: 10px;
        border-radius: 4px;
        /* box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); */
    }

    .hori ul {
        list-style: none; /* Remove default list styling */
        padding: 0;
        margin: 0;
    }

    .hori li {
        /* display: flex; */
        padding: 5px 0;
        margin: 5px 0;
    }

    .hori li a img {
        margin-left: 2px; /* Space between text and the image */
        vertical-align: middle; /* Align image vertically center */
    }


    .hori ul li {
    /*border-bottom: 1px solid #e0e0e0;
    min-height: 40px;
    font-family: Arial,"Helvetica Neue",Helvetica,sans-serif !important;
    font-size: 16px !important;
    text-transform: capitalize;
    text-align: left !important;
    border-top: none!important;
    line-height: 2 !important;
    padding: 5px 0px !important;*/
    }
    .pack-list ul li {
    /* font-family: "PT Sans",sans-serif,Arial,Verdana !important; */
    /*font-family: Arial,"Helvetica Neue",Helvetica,sans-serif !important;
    font-size: 16px !important;
    text-transform: capitalize;
    text-align: left !important;
    border-top: none!important;
    min-height: 0 !important;
    line-height: 2 !important;
    padding: 5px 0px !important;*/
    }
    @media (max-width: 768px)
    {.new-container {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    position: relative;}
    .circle1
    {left: 15px;}
    }

    #package-pg-body
    {padding-bottom: 2px;}


    /* CSS to increase the height of the boxes within the specified section */
    /* #package-pg-body .pack-list {
        min-height: 450px; /* Adjust as needed */
    } */

        /* Targeting the first class */
    #package-pg-body .three-pack.mtp {
        /* CSS styles for the first class */
        min-height: 1553px; /* Adjust as needed */
    }

    /* Targeting the third class */
    #package-pg-body .three-pack.excelh {
        /* CSS styles for the third class */
        min-height: 1553px; /* Adjust as needed */
    }

    /* Targeting the third class */
    #package-pg-body .three-pack.three-pack1{
        /* CSS styles for the third class */
        min-height: 1553px; /* Adjust as needed */
    }
    
</style>

<style>
    .tab-new
    {  /*background: #CDCDCD;
      background: -webkit-linear-gradient(#cdcdcd 0%, #e2e2e2 80%, #cdcdcd 100%);
      background: linear-gradient(#cdcdcd 0%, #e2e2e2 80%, #cdcdcd 100%);
      border-top: 1px solid #A8A8A8;
      -webkit-box-shadow: inset 0 1px 0 #e9e9e9, 0 1px 0 #a80329, 0 2px 0 #b81c40, 0 8px 0 #a80329, 0 9px 0 #7b021e, 0 -1px 1px rgba(0, 0, 0, 0.1);
      -moz-box-shadow: inset 0 1px 0 #e9e9e9, 0 1px 0 #a80329, 0 2px 0 #b81c40, 0 8px 0 #a80329, 0 9px 0 #7b021e, 0 -1px 1px rgba(0, 0, 0, 0.1);
      box-shadow: inset 0 1px 0 #e9e9e9, 0 1px 0 #a80329, 0 2px 0 #b81c40, 0 8px 0 #a80329, 0 9px 0 #7b021e, 0 -1px 1px rgba(0, 0, 0, 0.1);
      margin: 0;
      padding: 5px 0;*/
        margin-top: 20px;
        padding: 0 !important;

    }

    .tab-new a {
        padding:10px 30px;
        display:inline-block;
        color:#000;
        /* background: #ff8a00 none repeat scroll 0 0; */

        text-transform:capitalize;
        font-size:20px;
        font-weight:700;
    }

    @font-face {
        font-family: "Walsheim-Bold";
        font-style: normal;
        font-weight: 400;
        src: url("https://img1.wsimg.com/ux/fonts/1.2/eot/w7.eot?#iefix") format("embedded-opentype"), url("https://img1.wsimg.com/ux/fonts/1.2/woff2/w7.woff2") format("woff2"), url("https://img1.wsimg.com/ux/fonts/1.2/woff/w7.woff") format("woff"), url("https://img1.wsimg.com/ux/fonts/1.2/ttf/w7.ttf") format("truetype");
    }


    .new1
    {

        background-color: #fff !important;
    }

    .new2
    {background-color:#fff !important;
    }

    .new3
    {background-color:#fff !important}

    .package-bg {


        background: #f3f3f3 url("assets/images/added/packageb.jpg") no-repeat scroll center top !important ;

    }

    .startup-bg {
        background: #f3f3f3 url("assets/images/added/startup.jpg") no-repeat scroll center top !important ;
    }

    .package-other {
        background: #f3f3f3 url("assets/images/added/other.jpg") no-repeat scroll center top !important;
    }

    .package-logoplusweb {
        background: #f3f3f3 url("assets/images/added/logowebsite.jpg") no-repeat scroll center top   !important;

        -webkit-background-size: ;
        -o-background-size: cover;
        -moz-background-size: cover;
        background-size: cover;
        -webkit-background-size: cover;


    }

    @media screen and (max-width: 1366px) 
    {
        .package-logoplusweb {
            background: #f3f3f3 url("assets/images/added/logowebsite.jpg") no-repeat scroll center top   !important;

            background-size:90% auto !important;
            -o-background-size: 90% auto !important;
            -moz-background-size: 90% auto !important;
            -webkit-background-size: 90% auto !important;
        }

    }
    .package-top {
        background-color: rgba(255, 255, 255,1);
        margin: 50px 15px 15px;
        padding: 10px 20px;
    }
    .green-down
    {height: 10px;
     background-color:#70ac00;}

    .purple-down
    {background-color: #7030A0;height: 10px;}

    .package-top h3 {
        /*  font-family: "PT Sans",sans-serif,Arial,Verdana !important;*/


        font-family: "Walsheim-Bold" !important;
        font-size: 25px;
        font-style: normal;
        font-weight: 400;
        text-transform: uppercase;
        font-size: 29px;
        font-weight: 400 !important;
    }

    .package-top h5 {
        font-family: "PT Sans",sans-serif,Arial,Verdana !important;
        font-size: 19px;
        font-weight: 700 !important;
    }

    .three-pack ul {
    padding-left: 14.5px; /* Adjust padding as needed */
}

    .three-pack ul li {
        padding-left: 0; /* Remove any existing left padding */
        margin-left: -10px; /* Move items to the left */
        border-bottom: 1px solid #e0e0e0 !important;
        font-family: Arial,"Helvetica Neue",Helvetica,sans-serif !important;
        font-size: 16px !important;
        text-transform: lowercase;
        text-align: left !important;
        border-top: none !important;
        min-height: 0 !important;
        line-height: 1.42857143 !important;
        padding: 5px 0 !important;
        margin-bottom: 10px;
    }

    .three-pack h5 {
        color: #000;

        font-size: 25px;text-transform: capitalize;
        font-family: "Walsheim-Bold" !important;
        font-style: normal;
        font-weight: 400;

    }

    .three-pack h5::first-word
    {text-transform:inherit !important;}

    .three-pack p {
        font-family: "PT Sans",sans-serif,Arial,Verdana !important;
        font-size: 16px;
    }

    #package-pg-body {
        background: rgba(0, 0, 0, 0) url("../images/pattern1.jpg") repeat scroll 0 0;
        border-top:none !important;
        margin: 0;
    }
    .pack-list ul li {
        /* font-family: "PT Sans",sans-serif,Arial,Verdana !important;*/
        font-family: Arial,"Helvetica Neue",Helvetica,sans-serif !important;
        font-size: 16px !important;

        text-transform: lowercase;
        text-align: left !important;
        border-top: none!important; 
        min-height: 0 !important;
        line-height: 1.42857143 !important;
        padding:5px 0px !important;
        margin-bottom: 10px;
    }

    .three-pack {

        min-height: 538px;background-color: #fff;
        box-shadow: 4px 4px 0 0 rgba(0, 0, 0, 0.1);
        color: #333;
        margin: 0 0 22px;
        padding: 40px;


        /* -webkit-box-shadow: 4px 4px 0 0 rgba(0,0,0,.1); */

    }

    .pack-list
    {padding-top: 20px;}

    .hori
    {padding-top: 20px;}



    .surge-pac-plus1 {
        color: #333 !important;
        font-family: "PT Sans",sans-serif,Arial,Verdana !important;

        font-size: 18px !important;
        font-weight: 400 !important;
    }
    .blue-down {
        background-color: #01b0f1;
        height: 10px;
    }

    /* Active tab and hovered active tab */
    .nav-tabs > li.active > a, 
    .nav-tabs > li.active > a:hover, 
    .nav-tabs > li.active > a:focus {
        background-color: #fff;
        border-style: solid;
        border-width: 3px;
        border-color: #000; /* Black color */
        color: #000;
        cursor: default;
    }

    /* Default state for inactive tabs */
    .nav-tabs > li > a {
        border: 2px solid #6c757d; /* Dark grey color */
        border-radius: 4px; /* Optional: Adds rounded corners */
        background-color: #fff; /* White color */
        color: #000; /* Black text color */
        transition: border-color 0.3s ease, border-width 0.3s ease; /* Smooth transition for border color and size change */
        margin-right: 2px !important;
    }

    /* Change border color and size on hover */
    .nav-tabs > li > a:hover {
        border-color: #000; /* Black color */
        border-width: 3px; /* Increase border width on hover */
        text-decoration: none; /* Remove underline */
    }

    .new0
    {background:#fff !important
     
    }

    .orange-down
    {height: 10px;
     background-color:#ff8a00 !important ;}

    .delivery.dropdown >  span {
        position: absolute !important;
        right: -17px !important;
        top: 14px !important;
    }

    .info1 {
        border: 0 !important;
        position: absolute;
        width: 0% !important;
        right: -7px !important;
        top: 3px !important;
        font-size: 13px !important;
    }


    .surge-pac-plus1 {
        text-transform:uppercase !important; 
    }

    .starup-casefix h5
    {text-transform:inherit !important;
    }

    .order-pack {
        font-size: 24px !important;
        line-height: 2.2 !important;
        font-family: "Walsheim-Bold" !important;
        font-style: normal;
        font-weight: 400;
        }
            
    .surge-pac-plus-left {
        background: url("assets/images/added/arrow.jpg") no-repeat top center;
        display: inline-block;
        height: 15px;
        width: 15px;
        padding-right: 13px;
    }
    .surge-pac-plus {

        padding-right: 17px;
    }

    .excelh{min-height: 1342px;}

  
</style>

<style>
    .add1 {
        border: 1px solid #d4d4d4;
    } 

    .addcolor {
        background: none repeat scroll 0 0  #01B0F1;
        border: 0 none !important;
        color: #fff !important;
        display: inline-block;
        font-size: 15px !important;
        font-weight: 700;
        margin: 0 auto;
        padding: 4px 8px;
        text-decoration: underline !important;
        width: 31% !important;
        min-height: auto !important;
        text-decoration:none !important;
    } 

    .removecolor{
        text-decoration:none !important;
        background: none repeat scroll 0 0 #f3514c;
        border: 0 none !important;
        color: #fff !important;
        display: inline-block;
        font-size: 15px !important;
        font-weight: 700;
        margin: 0 auto;
        padding: 4px 8px;
        text-decoration: underline !important;
        width: 31% !important;
        min-height: auto !important;
    }

    .hourd
    {background-color:#1fA971;
    } 
    .hourd span {
        color: #fff;
    } 
    /* .three-pack:hover{
        box-shadow: inset 1px 1px 10px 3px #ABABAB;
        -webkit-box-shadow: inset 1px 1px 10px 3px #ABABAB;
        -moz-box-shadow: inset 1px 1px 10px 3px #ABABAB;
        -o-box-shadow: inset 1px 1px 10px 3px #ABABAB;

    }  */
    .oderdisable{
        pointer-events: none;
    }

    .pack-list ul li:first-letter
    {text-transform: uppercase;}

    .hori ul li:first-letter 
    {text-transform: uppercase;}
        .hori ul li {
        border-bottom: 1px solid #e0e0e0;
        min-height: 40px;
        margin-bottom: 10px;

        font-family: Arial,"Helvetica Neue",Helvetica,sans-serif !important;
        font-size: 16px !important;

        text-transform: lowercase;
        text-align: left !important;
        border-top: none!important; 

        line-height: 2 !important;
        padding:5px 0px !important;
    }


    @media(max-width:480px){
        
        .hidden-xsmob{display: none !important;}

        .excelh {
        min-height: 400px !important;
        }
    }
</style>

<style>
	<style>
	#inner-cont-banner img {
		width: 100%;
		height: 600px;
		object-fit: cover !important;
	}
</style>

<style>
	/* General styles for the banner */
	.banner {
		background-color: #fedc45;
		padding: 10px;
		text-align: center;
	}

	.banner-text {
		color: black;
		font-weight: 600;
		font-size: 1.6rem;
	}

	/* Styles for mobile view */
	@media (max-width: 700px) {
		.banner {
			padding: 3px;
		}

		.banner-text {
			font-size: 1.36rem;
		}
	}

	/* Styles for desktop view */
	@media (min-width: 600px) {
		.banner {
			padding: 3px;
		}

		.banner-text {
			font-size: 1.6rem;
		}
	}
</style>

<style>
	/* General styles */
	.information {
		margin: 0 auto;
		padding: 10px;
	}

	.head-list {
		padding-left: 0;
	}

	.info-item {
		color: #222;
		font-size: 1.4rem;
		font-weight: 600;
		margin-top: 25px;
	}

	.info-item a img {
		margin-left: 5px;
	}

	/* Remove margin-top for second info-item */
	.info-item + .info-item {
		margin-top: 0;
	}

	/* Tooltip custom styles */
	.information .tooltip-inner {
		left: -116px !important; /* Adjusts the tooltip slightly to the left */
	}

	/* Styles for mobile view */
	@media (max-width: 767px) {
		.info-item {
			font-size: 1.2rem;
			margin-top: 20px;
		}

		.info-item + .info-item {
			margin-top: 0;
		}

		.info-item a img {
			width: 16px;
			height: 16px;
		}
	}

	/* Styles for desktop view */
	@media (min-width: 768px) {
		.info-item {
			font-size: 1.4rem;
			margin-top: 25px;
		}

		.info-item + .info-item {
			margin-top: 0;
		}

		.info-item a img {
			width: 20px;
			height: 20px;
		}
	}
</style>


<style>
    /* General styles for .percent-off */
    .percent-off {
        background: #FF0000;
        border-bottom: 2px solid #e67c00;
        display: inline-block;
        width: 80%;
        padding: 2px 4px;
        color: #fff;
        text-transform: uppercase;
        font-family: 'Helvetica Neue', sans-serif;
        border-radius: 5px;
        margin-top: 10px;
        display: flex;
        align-items: center;
    }

    .main-text {
        font-size: 50px; /* Large font size for "50" */
        font-weight: bold;
        margin-right: 10px; /* Space between "50" and "% off" */
    }

    .sub-text {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }

    .sub-text .percent {
        font-size: 20px; /* Smaller font size for "%" */
    }

    .sub-text .off {
        font-size: 30px; /* Smaller font size for "off" */
        margin-top: -5px; /* Adjust the spacing between "%" and "off" */
    }

    /* Media query for mobile devices */
    @media (max-width: 768px) {
        .percent-off {
            width: 60%; /* Change the width to 100% for mobile devices */
        }
    }
</style>

<style>
	/* General styles for the small-banner */
	.small-banner {
		background-color: #fedc45;
		padding: 10px;
		text-align: center;
	}

	.small-banner-text {
		color: black;
		font-weight: 600;
		font-size: 1rem;
	}

	/* Styles for mobile view */
	@media (max-width: 700px) {
		.small-banner {
			padding: 1px;
		}

		.small-banner-text {
			font-size: 1.2rem;
		}
	}

	/* Styles for desktop view */
	@media (min-width: 600px) {
		.small-banner {
			padding: 0px;
		}

		.small-banner-text {
			font-size: 1.027rem;
		}
	}

    .small-banner {
            margin-top: 10px; /* Add a gap between the first div and the small banner */
        }
</style>

<style>
    .price-container {
        display: flex;
        align-items: baseline; /* Align currency and price text correctly */
        font-family: 'Helvetica Neue', sans-serif;
        color: #333; /* Adjust text color */
    }

    .price-container h4 {
        font-size: 2rem; /* Adjust the size of the h4 element */
        margin: 0;
        display: flex;
        align-items: baseline;
    }

    .price-container .currency {
        font-size: 2.5rem; /* Smaller font size for the currency */
        align-self: flex-start; /* Align currency to the top */
        margin-right: 2px;
        margin-top: 2.5px;
    }

    .price-container .main_price {
        font-size: 4rem; /* Make the price larger */
        font-weight: bold; /* Make the price bold */
    }

    .save-pack1 {
        font-size: 1.5rem; /* Smaller font size for "WAS" and the regular price */
        margin-left: 10px; /* Add left margin for gap */
        color: #ff8a00;
    }

    .save-pack1 span {
        font-size: 2rem;
        font-weight: bold;
        margin-left: 5px; /* Space between "Was" and regular price */
        color: #ff8a00;
    }

    .save-pack1 .save-cross1 {
        text-decoration: line-through; /* Strikethrough for the regular price */
        margin-right: 1px;
    }

    .price-container {
            margin-top: 10px; /* Add a gap between the first div and the small banner */
        }
</style>

<style>
    .move-right {
        margin-left: 100px; /* Adjust the value as needed */
    }
</style>

<style>
    .move-right1 {
        margin-left: 125px; /* Adjust the value as needed */
    }
</style>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="<?php echo base_url() ?>assets/js/html5shiv.js"></script>
  <script src="<?php echo base_url() ?>assets/js/respond.min.js"></script>
<![endif]-->
<!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->

<section>
	<div class="container" style="padding:0px;">
		<div class="information">
			<div class="col-sm-12 clearfix">
				<ul class="list-unstyled head-list">
					<li class="info-item">UK Hand-Drawn Logos = Higher Quality 
						<a class="test1" data-toggle="tooltip" data-placement="bottom" data-html="true" data-max-width="550px" title="" data-original-title="<span class='tt-head'>Logo Design Guarantee™</span><br/>
						<span class='tt-inner'>All our designers are based in the UK.<br/><br/>
						<ul class='ldg-tooltip'><li class='ldg-bp'>&#10004; All our designers hold graphic design degrees.</li>
						<li class='ldg-bp'>&#10004; We do <u>not</u> outsource any works.</li>
						<li class='ldg-bp'>&#10004; All our logos are hand-drawn, which greatly increases the sophistication of our logos.</li>
						<li class='ldg-bp'>&#10004; We have 16+ yrs experience.</li>
						<li class='ldg-bp'>&#10004; We have served 285,000+ clients.</li></ul><br/>
						<span class='tt-head'>Our competitors:</span><br/><ul class='ldg-tooltip'><li class='ldg-bp2'>&#10004; They often outsource to India, but use London PO 
						Box addresses.</li><li class='ldg-bp2'>&#10004; They use templates and clip-art software, which makes their logos look cheap.</li></ul>"><img src="assets/images/added/silver-info.jpg"> </a>
					</li>
					<li class="info-item">365-Day, 100% Money Back Guarantee
						<a class="test" data-toggle="tooltip" data-placement="bottom" data-html="true" title="" 
						data-max-width="550px" data-original-title="No questions, no interrogations, no fuss – just a whole lot of trust. We guarantee your money back if for any reason you are dissatisfied with our services."><img src="assets/images/added/silver-info.jpg"> </a>
					</li>
				</ul>
				<hr>
			</div>
		</div>
	</div>
</section>

<section id="inner-cont-banner" style="position:relative;">
	<section>
		<div class="banner">
			<h5 class="text-center banner-text">Half-Price Sale Ends Midnight, Friday 10 February ’24 </h5>
		</div>
	</section>
	<div id="mycarousel" class="carousel slide carousel_fade animate_text video_carousel_wrapper" data-ride="carousel" data-interval="8000">
		<!--======= Wrapper For Slides =======-->
		<div class="carousel-inner" role="listbox">

			<!--========= First Slide =========-->


			<div class="item active " data-interval="7000" data-pause="false">
                <img src="assets/images/newslider/logos.jpg">

                <div class="carousel-caption video_carousel_caption">
                    <div class="video_carousel_caption_text">

                        <div class="container" style="padding-right:0px;">

                            <div class="row">
								<div class="col-md-7">
									<div class="banner-caption text-left white-bg-main">
										<div class="banner-caption-head">
											<h2>
                                                Get a Minimum of 6 Samples...
											</h2>
										</div>
										<div class="banner-desc ">
											<ul>
												<li>We offer the most logo samples for the lowest price</li>
												<li> 3 In-House expert designers work on your logo (minimum)</li>
												<li>Get 6 samples for just <del>£50</del> £25!</li>
											</ul>
										</div>
										<br>
										<!-- <a class="button pull-left" href="http://www.logodesignguarantee.co.uk/packages.php">Get Started</a> -->
									</div>
								</div>
								<div class="col-md-5" style="padding-left:0px;">
									<!-- <img style="margin-top: 40px;" id="#banner-img" src="assets/images/slide1.jpeg" alt=""> -->
								</div>
							</div>

                        </div>
                    </div>
                </div>
            </div>

			<div class="item" data-interval="7000" data-pause="false">
                <img src="assets/images/newslider/image2.jpg">
                <div class="carousel-caption video_carousel_caption">
                    <div class="video_carousel_caption_text">

                        <div class="container" style="padding-right:0px;">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="banner-caption text-left white-bg-main">
                                        <div class="banner-caption-head">
                                            <h2>
                                                100% Satisfaction <br />Guaranteed...
                                            </h2>
                                        </div>
                                        <div class="banner-desc ">
                                            <ul>
                                                <li>Free unlimited redraws and revisions</li>
                                                <li>We design in detail for you</li>
                                                <li>You own all design rights</li>
                                            </ul>
                                        </div>
                                        <br>
                                        <!-- <a class="button pull-left" href="http://www.logodesignguarantee.co.uk/packages.php">Get Started</a> -->
                                    </div>
                                </div>
                                <div class="col-md-5" style="padding-left:0px;">
                                    <!-- <img style="margin-top: 40px;" id="#banner-img" src="assets/images/slide1.jpeg" alt=""> -->
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

			<!--    <div class="item " data-interval="16000"  data-pause="hover"> -->
            <div class="item " data-interval="16000">
                <img src="assets/images/newslider/office3.jpg">
                <div class="carousel-caption video_carousel_caption">
                    <div class="video_carousel_caption_text">

                        <div class="container" style="padding-right:0px;">

                            <div class="row">
								<div class="col-md-7">
									<div class="banner-caption text-left white-bg-main">
										<div class="banner-caption-head">
											<h2>
                                                24x7x365 </span>We've Got Your Back...
											</h2>
										</div>
										<div class="banner-desc ">
											<ul>
												<li>24x7x365 UK phone and UK live chat support</li>
												<li>Dedicated project manager</li>
												<li>24 Hour revisions turnaround</li>
											</ul>
										</div>
										<br>
										<!-- <a class="button pull-left" href="http://www.logodesignguarantee.co.uk/packages.php">Get Started</a> -->
									</div>
								</div>
								<div class="col-md-5" style="padding-left:0px;">
									<!-- <img style="margin-top: 40px;" id="#banner-img" src="assets/images/slide1.jpeg" alt=""> -->
								</div>
							</div>

                        </div>
  
                    </div>

                    <div class="embed-responsive  embed-responsive-16by9 embed-packages">


                        <!-- <video class="video_carousel_video" autoplay controls="true" loop="true"  id="playerss">
                            <source src="http://websamplenow.com/30/ldgnew/boy.mp4" type="video/mp4">
                            Your browser does not support HTML5 video.
                        </video> -->
                        <!-- <div class="codegena"><iframe width='500' height='294' src="https://www.youtube.com/embed/aKkH3_vTwXc?&theme=dark&autoplay=1&loop=1&autohide=1&modestbranding=1&fs=0&showinfo=0&rel=0"frameborder="0"></iframe></div> -->
                        <!-- <iframe width='500' height='294' src="https://www.youtube.com/embed/t35t-92RE-4?enablejsapi=1&theme=dark&autohide=1&autoplay=1&loop=0&modestbranding=1&fs=0&playlist=t35t-92RE-4&showinfo=0&rel=0" frameborder="0" id="newplayer"></iframe> -->
                    </div>
                </div>
            </div>

		</div>

		<ol class="carousel-indicators">
			<li data-target="#mycarousel" data-slide-to="0" class="active"></li>
			<li data-target="#mycarousel" data-slide-to="1"></li>
			<li data-target="#mycarousel" data-slide-to="2"></li>

		</ol>
		<!--======= Navigation Buttons =========-->

		<a class="left carousel-control video_carousel_control_left" href="#mycarousel" role="button" data-slide="prev">
			<span class="fas fa-arrow-circle-left video_carousel_control_icons" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>

		<a class="right carousel-control video_carousel_control_right" href="#mycarousel" role="button" data-slide="next">
			<span class="fas fa-arrow-circle-right video_carousel_control_icons" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>

	</div>
</section>

<section id="logo-section">
    <div class="for-mobile">
        <div class="lag1">
            <div class="container" style="padding:0px;">
                <div class="col-sm-6 super-winter-sale clearfix">
                    <h3 class="text-center" style="font-size:1.7rem;">Super Summer Sale</h3>
                    <ul class="text-left" style="margin-top:3px;">
                        <li>• Half-Price on All Packages</li>
                        <li>• <strong style="color:#e0ff35;">FREE</strong> Copyright Certificate worth £50</li>
                        <li>• <strong style="color:#e0ff35;">FREE</strong> Lifetime Alteration to Your Logo worth £50</span></li>
                    </ul>
                    <h4 style="margin-top:4px; color:#fff; font-size:1.8rem;" class="text-center">Ends Midnight, Friday 10 February ’24 </h4>

                    <!--<hgroup>-->
                    <!-- <h4><strong>Free </strong>Copyright Certificate worth <?php echo CURRENCY . LOGO_COPYRIGHT_P; ?></h4>	
							<h4><strong>Free </strong>Lifetime Alteration to Your Logo worth <?php echo CURRENCY . LOGO_ALTERNATION_P; ?></h4>	
							<?php if (SHOW_OFFER_DATE) : ?>
                            <h4><span>Ends: <?php echo $today; ?></span></h4>
                            <?php endif; ?> -->
                    <!--</hgroup>-->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <!-- <div id="banner-bottom-slogan">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 clearfix we-care">
                    <h3>All Packages Include</h3>
                    <div class="we-care-about-you">
                        <ul>
                            <li>3 UK designers (minimum)</li>
                            <li>365 day, 100% money back guarantee</li>
                            <li>Free unlimited redraws &amp; revisions</li>
                            <li>Personal account manager</li>
                        </ul>
                        <ul>
                            <li>24x7 UK phone/UK live chat support</li>
                            <li>Hand-drawn logos</li>
                            
                        </ul>
                    </div> 
                </div>
                <div class="col-sm-3 clearfix">
                    <div class="trapzoid-box about-box">
                        <h3 class="text-center">
                            <a href="<?php echo base_url() ?>compare.php">Learn More About <br /> Our Advantages</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


    <section class="tab-new" id="fixnavi">
        <div class="container">
            <div class="row">
                <div class="c0l-md-12">
                    <ul id="tabs" class=" nav-tabs" data-tabs="tabs">
                        <li class="active" > <a  href="#logos1"  class="new0" data-toggle="tab">Logo Packages</a></li>
                        <li  ><a href="#startupp" class="new1"  data-toggle="tab"   >Logo + <span style="text-transform:none !important;">Start-up</span>  Packages</a> </li>

                        <li>
                            <a href="#logoplusweb"  data-toggle="tab" class="new2" >Logo + Website  Packages</a>
                        </li>

                        <li> <a href="#otherp"   data-toggle="tab" class="new3" >Other  Packages</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <div id="my-tab-content" class="tab-content">

        <section id="logos1" class="tab-pane active fade in">
            <div class="orange-down">
            </div>
            <section class="package-bg" id="package-pg-body">
                <section  style="background:none !important">
                    <div class="new-container" id="logopackages">
                        <div class="row">
                            <div class="col-md-7 package-top">
                                <h3>Honest prices. Exceptional Features.</h3>
                                <h5>The UK&rsquo;s No. 1 specialized design firm for start-ups and small businesses.</h5>
                            </div>
                        </div>
                        <div class="row mrtb mrtbnew">
                            <div class="col-md-3 col-sm-6  ">
                                <div class="three-pack three-pack1">
                                    <h5><?php echo ucwords(strtolower(str_replace('LOGO PACKAGE', '', START_LP))); ?> </h5>
                                    <p>Ideal for personal related logos</p>
                                    <div style="position:relative">
                                        <a id="percent-off" class="percent-off">
                                        <span class="main-text">50%</span>
                                        <span class="sub-text">
                                            <!-- <span class="percent"></span> -->
                                            <span class="off">off</span>
                                        </span>
                                        </a>
                                    </div>
                                    <div class="small-banner">
                                        <span class="text-center small-banner-text">Half-Price Ends Midnight, Friday 10 February ’24</span>
                                    </div>

                                    <div class="price-container">
                                        <h4>
                                            <span class="currency"><?php echo CURRENCY; ?></span>
                                            <span class="main_price"><?php echo (isset($_SESSION['poptions_pack1'])) ? START_LP_P + $_SESSION['poptions_price1'] : START_LP_P; ?></span>
                                        </h4>
                                        <?php if (SHOW_REGULAR_PRICE): ?>
                                            <p class="save-pack1">
                                                <span>Was:</span><span class="save-cross1"><?php echo CURRENCY . START_LP_P_R; ?></span>
                                            </p>
                                        <?php endif; ?>
                                    </div>

                                    <!-- <div class="delivery dropdown freeser newpk">   <a> 6-hour service included, 24/7  <span class="gfree">(FREE)</span></a>                     

                                        <a data-toggle="tooltip" title="We have well-trained in-house designers to ensure design quality is not compromised. This service is available anytime (24/7), and we guarantee all your logos will be given within 6 hours.
                                           "  data-placement='left' class="info1"> <img src="assets/images/added/questionmark.png"></a>             
                                    </div> -->
                                    <div style="position:relative">

                                        <a id="order1" class="order-pack" href="<?php echo base_url() ?>orders/index/1/" >Buy Now</a>
                                    </div>

                                    <div class="hori">
                                        <ul>
                                            <li><strong>6</strong> Custom Made Logos  <a data-toggle="tooltip" title="You will have 6 logo designs to choose from, which are guaranteed to be original and custom-made for you.
                                                                                          "  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a>   </li>
                                            <li><strong>Unlimited</strong> Revisions
                                                <a data-toggle="tooltip" title="There will be no limit to the number of revisions you can make on the logo of your choosing.
                                                   "  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a>  
                                            </li>
                                            <li><strong>Unlimited</strong> Logo Concepts<a data-toggle="tooltip" title="Changed your mind on the whole concept of your logo? No worries. You can always request for new logo concepts to be made just for you, for as many times as you may need, at no additional cost.
                                                                                           "  data-placement='top' ><img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li><strong>Unlimited</strong> Redraws<a data-toggle="tooltip" title="Your choice won’t be limited to your first set of logo samples. You will have the privilege of requesting for a completely new set of samples, free of charge.
                                                                                     "  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li><strong>3</strong> Designers<a data-toggle="tooltip" title="Your project will have not one but 3 designers, who will all contribute to provide you with the perfect designs based on your specifications.
                                                                               "  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <!-- <li><strong>6-hour logo turnaround</strong> <a data-toggle="tooltip" title="Get your logos within 6 hours. You won't find a faster logo service anywhere else! Best of all, this service is available 24/7, so you can order anytime and never worry about missing a cut-off. This 6-hour service only applies to LOGO services on all packages. "  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li> -->
                                            <li><strong>Free</strong> Design Research<a data-toggle="tooltip" title="We will do all the research for you. We make sure that your designs are unique and authentic, and will match perfectly to your specifications.
                                                                                        "  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li><strong>Dedicated</strong> Project Manager<a data-toggle="tooltip" title="Aside from your designers, we will assign a Manager to your project, with the experience and expertise to oversee the designers and their works, and make sure that everything is done with high quality and standards.
                                                                                             "  data-placement='top' ><img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li><strong>Free</strong> Final Logo Files Sent via Email (includes formats for all print and web use)<a data-toggle="tooltip" title="Once your logo has been finalized, we will send you the file via email, including all formats that you can use for printing and the web."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li><strong>Free</strong> Additional Files<a data-toggle="tooltip" title="We provide you with all types of file formats. You need only ask."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li><strong>Free</strong> Complete Ownership to All the Logo Design Samples<a data-toggle="tooltip" title="ALL samples sent to you will automatically be your property, whether you chose it as your final design or not."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li><strong>Free</strong> Assistance with Print Companies<a data-toggle="tooltip" title="If your printing company requires a specific file format, we can send it to you for free."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a> </li>
                                            <li><strong>Free</strong> File Designs that allow Resizing with No Distortion (suitable for professional <br> print)<a data-toggle="tooltip" title="All file formats we send you are suitable for printing in any size. Guaranteed no distortions and/or blurring when adjusted."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a> </li>
                                            <li><strong>3 minute simple</strong> online order form!</li>
                                            <li><strong>We Start Your Designs Today!</strong><br>100% Satisfaction Guaranteed</li>
                                            <li><strong>Free After-Sales Support <br>(For Life!)</strong></li>
                                         <!--    <li><strong>365-Day - 100% No-Risk <br>Money Back Guarantee</strong>.<a data-toggle="tooltip" title="No questions, no interrogations, no fuss;Just a whole lot of trust. We guarantee your money back if for any reason you are dissatisfied with our services."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li> -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6  ">
                                <div class="three-pack three-pack1 mtp ">
                                    <h5><?php echo ucwords(strtolower(str_replace('LOGO PACKAGE', '', SURGE_LP))); ?> </h5>
                                    <p>Good for small businesses</p>

                                    <!-- <h4><?php echo CURRENCY; ?><span class="main_price"><?php echo (isset($_SESSION['poptions_pack4'])) ? SURGE_LP_P + $_SESSION['poptions_price4'] : SURGE_LP_P; ?></span></h4>

                                    <p class="save-pack"> <span class="save-cross"><?php echo CURRENCY . SURGE_LP_P_R ?></span> SAVE 50%</p> -->
                                    <!-- <div class="delivery dropdown freeser newpk">   <a> 6-hour service included, 24/7  <span class="gfree">(FREE)</span></a>                     

                                        <a data-toggle="tooltip" title="We have well-trained in-house designers to ensure design quality is not compromised. This service is available anytime (24/7), and we guarantee all your logos will be given within 6 hours.
                                           "  data-placement='left' class="info1"> <img src="assets/images/added/questionmark.png"></a>             
                                    </div>-->

                                    <div style="position:relative">
                                        <a id="percent-off" class="percent-off">
                                        <span class="main-text">50%</span>
                                        <span class="sub-text">
                                            <!-- <span class="percent"></span> -->
                                            <span class="off">off</span>
                                        </span>
                                        </a>
                                    </div>
                                    <div class="small-banner">
                                        <span class="text-center small-banner-text">Half-Price Ends Midnight, Friday 10 February ’24</span>
                                    </div>

                                    <div class="price-container">
                                        <h4>
                                            <span class="currency"><?php echo CURRENCY; ?></span>
                                            <span class="main_price"><?php echo (isset($_SESSION['poptions_pack4'])) ? SURGE_LP_P + $_SESSION['poptions_price4'] : SURGE_LP_P; ?></span>
                                        </h4>
                                        <?php if (SHOW_REGULAR_PRICE): ?>
                                            <p class="save-pack1">
                                                <span>Was:</span><span class="save-cross1"><?php echo CURRENCY . SURGE_LP_P_R ?></span>
                                            </p>
                                        <?php endif; ?>
                                    </div>
                                    
                                    <div style="position:relative">
                                        <a id="order4" class="order-pack" href="<?php echo base_url() ?>orders/index/4/" >Buy Now</a>
                                    </div>

                                    <div class="hori">
                                        <ul>
                                            <li> <strong>12</strong> Custom Made Logos<a data-toggle="tooltip" title="You will have 12 logo designs to choose from, which are guaranteed to be original and custom-made for you."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li><strong>Unlimited</strong> Revisions<a data-toggle="tooltip" title="There will be no limit to the number of revisions you can make on the logo of your choosing."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li><strong>Unlimited</strong> Logo Concepts<a data-toggle="tooltip" title="Changed your mind on the whole concept of your logo? No worries. You can always request for new logo concepts to be made just for you, for as many times as you may need, at no additional cost."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li><strong>Unlimited</strong> Redraws<a data-toggle="tooltip" title="Your choice won’t be limited to your first set of logo samples. You will have the privilege of requesting for a completely new set of samples, free of charge."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li><strong>6</strong> Designers<a data-toggle="tooltip" title="Your project will have not one, not even 3, but 6 designers, all contributing to provide you with the perfect designs based on your specifications."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <!-- <li><strong>6-hour logo turnaround</strong> <a data-toggle="tooltip" title=" Get your logos within 6 hours. You won't find a faster logo service anywhere else! Best of all, this service is available 24/7, so you can order anytime and never worry about missing a cut-off. This 6-hour service only applies to LOGO services on all packages."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li> -->
                                            <li><strong>Free</strong> Design Research<a data-toggle="tooltip" title=" We will do all the research for you. We make sure that your designs are unique and authentic, and will match perfectly to your specifications."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li><strong>Dedicated</strong> Project Manager<a data-toggle="tooltip" title="Aside from your designers, we will assign a Manager to your project, with the experience and expertise to oversee the designers and their works, and make sure that everything is done with high quality and standards."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li><strong>Free</strong> Final Logo Files Sent via Email (includes formats for all print and web use)<a data-toggle="tooltip" title="Once your logo has been finalized, we will send you the file via email, including all formats that you can use for printing and the web."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li><strong>Free</strong> Additional Files<a data-toggle="tooltip" title="We provide you with all types of file formats. You need only ask."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li><strong>Free</strong> Complete Ownership to All the Logo Design Samples<a data-toggle="tooltip" title="ALL samples sent to you will automatically be your property, whether you chose it as your final design or not."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li><strong>Free</strong> Assistance with Print Companies<a data-toggle="tooltip" title="If your printing company requires a specific file format, we can send it to you for free."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a> </li>
                                            <li><strong>Free</strong> File Designs that allow Resizing with No Distortion (suitable for professional <br> print)<a data-toggle="tooltip" title="All file formats we send you are suitable for printing in any size. Guaranteed no distortions and/or blurring when adjusted."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a> </li>
                                            <li><strong>3 minute simple</strong> online order form!</li>
                                            <li><strong>We Start Your Designs Today!</strong><br>100% Satisfaction Guaranteed</li>
                                            <li><strong>Free After-Sales Support <br>(For Life!)</strong></li>
                                            <!-- <li><strong>365-Day - 100% No-Risk <br>Money Back Guarantee</strong>.<a data-toggle="tooltip" title="No questions, no interrogations, no fuss;Just a whole lot of trust. We guarantee your money back if for any reason you are dissatisfied with our services."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>    -->
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6  ">
                                <!-- <span class="best-value">Best Value</span> -->
                                <div class="three-pack excelh">
                                    <h5><?php echo ucwords(strtolower(str_replace(array('LOGO PACKAGE'), array(''), EXCEL_LP))); ?> </h5>
                                    <p>Great for any small business</p>

                                    <!-- <h4><?php echo CURRENCY; ?><span class="main_price"><?php echo (isset($_SESSION['poptions_pack7'])) ? EXCEL_LP_P + $_SESSION['poptions_price7'] : EXCEL_LP_P; ?></span></h4>
                                    <?php if (SHOW_REGULAR_PRICE): ?>
                                        <p class="save-pack"> <span class="save-cross"><?php echo CURRENCY . EXCEL_LP_P_R ?></span> SAVE 50%</p>
                                    <?php endif; ?> -->
                                    <!-- <div class="delivery dropdown freeser newpk">   <a> 6-hour service included, 24/7  <span class="gfree">(FREE)</span></a>                     

                                        <a data-toggle="tooltip" title="We have well-trained in-house designers to ensure design quality is not compromised. This service is available anytime (24/7), and we guarantee all your logos will be given within 6 hours.
                                           "  data-placement='left' class="info1"> <img src="assets/images/added/questionmark.png"></a>             
                                    </div> -->

                                    <div style="position:relative">
                                        <a id="percent-off" class="percent-off">
                                        <span class="main-text">50%</span>
                                        <span class="sub-text">
                                            <!-- <span class="percent"></span> -->
                                            <span class="off">off</span>
                                        </span>
                                        </a>
                                    </div>
                                    <div class="small-banner">
                                        <span class="text-center small-banner-text">Half-Price Ends Midnight, Friday 10 February ’24</span>
                                    </div>

                                    <div class="price-container">
                                        <h4>
                                            <span class="currency"><?php echo CURRENCY; ?></span>
                                            <span class="main_price"><?php echo (isset($_SESSION['poptions_pack7'])) ? EXCEL_LP_P + $_SESSION['poptions_price7'] : EXCEL_LP_P; ?></span>
                                        </h4>
                                        <?php if (SHOW_REGULAR_PRICE): ?>
                                            <p class="save-pack1">
                                                <span>Was:</span><span class="save-cross1"><?php echo CURRENCY . EXCEL_LP_P_R ?></span>
                                            </p>
                                        <?php endif; ?>
                                    </div>

                                    <div style="position:relative">
                                        <a id="order7" class="order-pack" href="<?php echo base_url(); ?>orders/index/7/" >Buy Now</a>
                                    </div>



                                    <div class="pack-list">
                                        <ul>
                                            <li><span class="surge-pac-plus-left" ></span><strong><span class="surge-pac-plus1">SURGE PACKAGE PLUS</span></strong><a data-toggle="tooltip" title="All the features of our Surge Package, with the additional features below."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li><strong>3</strong> Business Card Designs<a data-toggle="tooltip" title="The perfect way to look professional while advertising your business. We will provide you with 3 custom-made designs to choose from."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li><strong>3</strong> Letterhead Designs<a data-toggle="tooltip" title="Make sure your business letters clearly identify you and your business. Plus, you also get to advertise your brand for free. With this package, you will get 3 additional custom-made letterhead designs at no additional cost."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li><strong>3</strong>  Compliment Slip Designs<a data-toggle="tooltip" title="Compliment Slips also help with branding and advertising. It also puts your business information out there. With this package, you will get 3 custom Compliment Slip designs."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>

                                            <!-- <li><strong>6-hour logo turnaround</strong> <a data-toggle="tooltip" title="Get your logos within 6 hours. You won't find a faster logo service anywhere else! Best of all, this service is available 24/7, so you can order anytime and never worry about missing a cut-off. This 6-hour service only applies to LOGO services on all packages. "  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li> -->


                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 ">
                                <div class="best-value">Best Value
                                </div>
                                <div class="circle1">
                                    <span>NEW</span>
                                </div>
                                <div class="three-pack excelh">
                                    <h5><?php echo ucwords(strtolower(str_replace(array('LOGO PACKAGE'), array(''), ADVANCED_LP))); ?><span style="vertical-align: super;font-size: 18px;  font-family: 'PT Sans',sans-serif,Arial,Verdana !important;
                                        font-weight: 700 !important;">&trade;</span></h5>
                                    <p>No compromises</p>

                                    <!-- <h4><?php echo CURRENCY; ?><span class="main_price"><?php echo ADVANCED_LP_P; ?></span></h4>
                                    <p class="save-pack"> <span class="save-cross"><?php echo CURRENCY . ADVANCED_LP_P_R; ?></span> SAVE 50%</p> -->
                                    <!-- <div class="delivery dropdown freeser newpk">   <a> 6-hour service included, 24/7  <span class="gfree">(FREE)</span></a>
                                    
                                        <a data-toggle="tooltip" title="We have well-trained in-house designers to ensure design quality is not compromised. This service is available anytime (24/7), and we guarantee all your logos will be given within 6 hours.
                                        "  data-placement='left' class="info1"> <img src="assets/images/added/questionmark.png"></a>
                                    </div> -->

                                    <div style="position:relative">
                                        <a id="percent-off" class="percent-off">
                                        <span class="main-text">50%</span>
                                        <span class="sub-text">
                                            <!-- <span class="percent"></span> -->
                                            <span class="off">off</span>
                                        </span>
                                        </a>
                                    </div>
                                    <div class="small-banner">
                                        <span class="text-center small-banner-text">Half-Price Ends Midnight, Friday 10 February ’24</span>
                                    </div>

                                    <div class="price-container">
                                        <h4>
                                            <span class="currency"><?php echo CURRENCY; ?></span>
                                            <span class="main_price"><?php echo ADVANCED_LP_P; ?></span>
                                        </h4>
                                        <?php if (SHOW_REGULAR_PRICE): ?>
                                            <p class="save-pack1">
                                                <span>Was:</span></span><span class="save-cross1"><?php echo CURRENCY . ADVANCED_LP_P_R; ?></span></span>
                                            </p>
                                        <?php endif; ?>
                                    </div>

                                <div style="position:relative">
                                    <a id="order7" class="order-pack" href="<?php echo base_url()?>orders/index/22/" >Buy Now</a>
                                </div>
                                
                                <div class="pack-list">  
                                    <ul>
                                        <li><i class="fa fa-star" aria-hidden="true"></i> <strong>24</strong> Custom Made Logos  <a data-toggle="tooltip" title="You will have 24 logo designs to choose from, which are guaranteed to be original and custom-made for you.
                                        "  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a>
                                    </li>
                                    <li><strong>3</strong> Business Card Designs<a data-toggle="tooltip" title="The perfect way to look professional while advertising your business. We will provide you with 3 custom-made designs to choose from."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                    <li><strong>3</strong> Letterhead Designs<a data-toggle="tooltip" title="Make sure your business letters clearly identify you and your business. Plus, you also get to advertise your brand for free. With this package, you will get 3 additional custom-made letterhead designs at no additional cost."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                    <li><strong>3</strong>  Compliment Slip Designs<a data-toggle="tooltip" title="Compliment Slips also help with branding and advertising. It also puts your business information out there. With this package, you will get 3 custom Compliment Slip designs."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                    <li><span style="color:#ff8a00;">New </span>  Email Signature Design<a data-toggle="tooltip" title="" data-placement="top" data-original-title="Displays at the bottom of your business emails featuring your logo, name and contact info. This makes your emails look far more professional and trust-worthy.
                                        "> <img src="assets/images/added/silver-info.jpg"> </a></li>
                                                <li> Fax Cover Sheet Design<a data-toggle="tooltip" title="" data-placement="top" data-original-title="Ensure your faxes are not lost, and look professional at the same time.  
                                        "> <img src="assets/images/added/silver-info.jpg"> </a></li>
                                    <li><strong>Unlimited</strong> Revisions
                                        <a data-toggle="tooltip" title="There will be no limit to the number of revisions you can make on the logo of your choosing.
                                        "  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a>
                                    </li>
                                    <li><strong>Unlimited</strong> Logo Concepts<a data-toggle="tooltip" title="Changed your mind on the whole concept of your logo? No worries. You can always request for new logo concepts to be made just for you, for as many times as you may need, at no additional cost.
                                    "  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                    <li><strong>Unlimited</strong> Redraws<a data-toggle="tooltip" title="Your choice won't be limited to your first set of logo samples. You will have the privilege of requesting for a completely new set of samples, free of charge.
                                    "  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                    <li><strong>6</strong> Designers<a data-toggle="tooltip" title="Your project will have not one but 6 designers, who will all contribute to provide you with the perfect designs based on your specifications.
                                    "  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                    <!-- <li><strong>6-hour logo turnaround</strong> <a data-toggle="tooltip" title="Get your logos within 6 hours. You won't find a faster logo service anywhere else! Best of all, this service is available 24/7, so you can order anytime and never worry about missing a cut-off. This 6-hour service only applies to LOGO services on all packages. "  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li> -->
                                    <li><strong>Free</strong> Design Research<a data-toggle="tooltip" title="We will do all the research for you. We make sure that your designs are unique and authentic, and will match perfectly to your specifications.
                                    "  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                    <li><strong>Dedicated</strong> Project Manager<a data-toggle="tooltip" title="Aside from your designers, we will assign a Manager to your project, with the experience and expertise to oversee the designers and their works, and make sure that everything is done with high quality and standards.
                                    "  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                    <li><strong>Free</strong> Final Logo Files Sent via Email (includes formats for all print and web use)<a data-toggle="tooltip" title="Once your logo has been finalized, we will send you the file via email, including all formats that you can use for printing and the web."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                    <li><strong>Free</strong> Additional Files<a data-toggle="tooltip" title="We provide you with all types of file formats. You need only ask."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                    <li><strong>Free</strong> Complete Ownership to All the Logo Design Samples<a data-toggle="tooltip" title="ALL samples sent to you will automatically be your property, whether you chose it as your final design or not."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                    <li><strong>Free</strong> Assistance with Print Companies<a data-toggle="tooltip" title="If your printing company requires a specific file format, we can send it to you for free."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a> </li>
                                    <li><strong>Free</strong> File Designs that allow Resizing with No Distortion (suitable for professional <br> print)<a data-toggle="tooltip" title="All file formats we send you are suitable for printing in any size. Guaranteed no distortions and/or blurring when adjusted."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a> </li>
                                    <li><strong>3 minute simple</strong> online order form!</li>
                                    <li><strong>We Start Your Designs Today!</strong><br>100% Satisfaction Guaranteed</li>
                                    <li><strong>Free After-Sales Support <br>(For Life!)</strong></li>
                                    
                                    </ul>
                    
                                    </div>
                                </div>
                            </div>                    
                        </div>
                    </div>
                </section>
            </section>
        </section>

        <!-- start up ends-->
        <section id="startupp" class="tab-pane  fade">
            <div class="green-down">
            </div>
            <section class="package-bg startup-bg"  id="package-pg-body">

                <section  style="background:none !important">
                    <div class="container" id="logopackages">
                        <div class="row">
                            <div class="col-md-10 package-top">
                                <h3>We do more than just design your logo; we help you
                                    set up your Brand completely!
                                </h3>
                                <h5>Find a plan that’s right for you.</h5>
                                <p>When starting a new business, you may find that there’s so much to do and think about.</p>
                                <p>We at <span style="color:#009900;"><strong>Logo Design Guarantee</strong> </span>believe that being a start-up does not mean lesser quality. It means having that rare opportunity to start something special; to create something unique and incredible; to build an amazing BRAND!</p>
                            </div>
                        </div>
                        <div class="row mrtb starup-casefix ">

                            <div class="col-md-4 col-sm-6  ">
                                <div class="three-pack mtp">
                                    <h5><?php echo ucwords(strtolower(str_replace('LOGO PACKAGE', '', START_UP_LP))); ?> </h5>

                                    <h4><?php echo CURRENCY; ?><span class="main_price"><?php echo (isset($_SESSION['poptions_pack8'])) ? START_UP_LP_P + $_SESSION['poptions_price8'] : START_UP_LP_P; ?></span></h4>
                                    <p class="save-pack"> <span class="save-cross"><?php echo CURRENCY . START_UP_LP_P_R ?></span> SAVE 50%</p>
                                    <!-- <div class="delivery dropdown freeser">   <a> 6-hour service included, 24/7  <span class="gfree">(FREE)</span></a>                     

                                        <a data-toggle="tooltip" title="We have well-trained in-house designers to ensure design quality is not compromised. This service is available anytime (24/7), and we guarantee all your logos will be given within 6 hours.
                                           "  data-placement='left' class="info1"> <img src="assets/images/added/questionmark.png"></a>             
                                    </div> -->
                                    <div style="position:relative">
                                        <a id="order8" class="order-pack" href="<?php echo base_url() ?>orders/index/8" >Buy Now</a>
                                    </div>


                                    <div class="pack-list">
                                        <ul>
                                            <li> <strong>6</strong> Custom Made Logos<a data-toggle="tooltip" title="– You will have 6 logo designs to choose from, which are guaranteed to be original and custom-made for you."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li><strong>Unlimited</strong> Revisions<a data-toggle="tooltip" title="There will be no limit to the number of revisions you can make on the logo of your choosing."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a> </li>
                                            <li><strong>Unlimited</strong> Logo Concepts<a data-toggle="tooltip" title="Changed your mind on the whole concept of your logo? No worries. You can always request for new logo concepts to be made just for you, for as many times as you may need, at no additional cost."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a> </li>
                                            <li><strong>Unlimited</strong> Redraws<a data-toggle="tooltip" title="Your choice won’t be limited to your first set of logo samples. You will have the privilege of requesting for a completely new set of samples, free of charge."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li><strong>3</strong> Designers<a data-toggle="tooltip" title="Your project will have not one but 3 designers, who will all contribute to provide you with the perfect designs based on your specifications."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li><strong>3</strong> business card designs<a data-toggle="tooltip" title="The perfect way to look professional while advertising your business. We will provide you with 3 custom-made designs to choose from."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li>                                    <strong>250</strong> business card prints<a data-toggle="tooltip" title="You already have your business card design. Now print it out! This package comes with free 250 print outs for the business card of your choice."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a>
                                            </li>       

                                            <!-- <li><strong>6-hour logo turnaround</strong> <a data-toggle="tooltip" title="Get your logos within 6 hours. You won't find a faster logo service anywhere else! Best of all, this service is available 24/7, so you can order anytime and never worry about missing a cut-off. This 6-hour service only applies to LOGO services on all packages."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li> -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6  ">
                                <div class="three-pack mtp">
                                    <h5><?php echo START_UP_ST_LP; ?></h5>

                                    <h4><?php echo CURRENCY; ?><span class="main_price"><?php echo START_UP_ST_LP_P; ?></span></h4>
                                    <p class="save-pack"> <span class="save-cross">$<?php echo START_UP_ST_LP_P_R; ?></span> SAVE 50%</p>
                                    <!-- <div class="delivery dropdown freeser">   <a> 6-hour service included, 24/7  <span class="gfree">(FREE)</span></a>                     

                                        <a data-toggle="tooltip" title="We have well-trained in-house designers to ensure design quality is not compromised. This service is available anytime (24/7), and we guarantee all your logos will be given within 6 hours.
                                           "  data-placement='left' class="info1"> <img src="assets/images/added/questionmark.png"></a>             
                                    </div>                                 -->
                                    <div style="position:relative">
                                        <a id="order9" class="order-pack" href="<?php echo base_url() ?>orders/index/9" >Buy Now</a>
                                    </div>

                                    <div class="pack-list">
                                        <ul>
                                            <li  >  <span class="surge-pac-plus-left" ></span><strong><span class="surge-pac-plus1">START-UP PACKAGE PLUS </span></strong><a data-toggle="tooltip" title="All the features of our Start-up Package, with the additional features below."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>


                                            <li><strong>3</strong> Letterhead Designs<a data-toggle="tooltip" title="Make sure your business letters clearly identify you and your business. Plus, you also get to advertise your brand for free. With this package, you will get 3 additional custom-made letterhead designs at no additional cost."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li><strong>3</strong>  Compliment Slip Designs<a data-toggle="tooltip" title="Compliment Slips also help with branding and advertising. It also puts your business information out there. With this package, you will get 3 custom Compliment Slip designs."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <!-- <li><strong>6-hour logo turnaround</strong> <a data-toggle="tooltip" title="Get your logos within 6 hours. You won't find a faster logo service anywhere else! Best of all, this service is available 24/7, so you can order anytime and never worry about missing a cut-off. This 6-hour service only applies to LOGO services on all packages."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li> -->

                                            <!--  <li>-</li>
                                             <li>-</li> <li>-</li> -->


                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6  ">
                               <!--  <span class="best-value">Best Value</span> -->
                                <div class="three-pack mtp fmtp">
                                    <h5><?php echo COMPLETE_LP; ?></h5>

                                    <h4><?php echo CURRENCY; ?><span class="main_price"><?php echo COMPLETE_LP_P; ?></span></h4>
                                    <p class="save-pack"> <span class="save-cross"><?php echo CURRENCY . COMPLETE_LP_P_R ?></span> SAVE 50%</p>
                                    <!-- <div class="delivery dropdown freeser">   <a> 6-hour service included, 24/7  <span class="gfree">(FREE)</span></a>                     

                                        <a data-toggle="tooltip" title="We have well-trained in-house designers to ensure design quality is not compromised. This service is available anytime (24/7), and we guarantee all your logos will be given within 6 hours.
                                           "  data-placement='left' class="info1"> <img src="assets/images/added/questionmark.png"></a>             
                                    </div> -->
                                    <div style="position:relative">
                                        <a id="order10" class="order-pack" href="<?php echo base_url() ?>orders/index/10/" >Buy Now</a>
                                    </div>


                                    <div class="pack-list">
                                        <ul>
                                            <li><span class="surge-pac-plus-left" ></span><strong><span class="surge-pac-plus1">START-UP WITH STATIONERY PACKAGE PLUS</span></strong><a data-toggle="tooltip" title="All the features of our Start-up with Stationery Package, with the additional features below."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li> <strong>250</strong> letterhead prints<a data-toggle="tooltip" title="In this package, you don’t just get to choose which design you want for your letterhead, but you will also get 250 print outs at no additional cost."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li><strong>250</strong>  Compliment Slip Prints<a data-toggle="tooltip" title="Why stop with Business Cards and Letterheads? Print out your Compliment Slips as well. You will have 250 free."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <!-- <li><strong>6-hour logo turnaround</strong> <a data-toggle="tooltip" title="Get your logos within 6 hours. You won't find a faster logo service anywhere else! Best of all, this service is available 24/7, so you can order anytime and never worry about missing a cut-off. This 6-hour service only applies to LOGO services on all packages. "  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li> -->
                                            <!--  <li>-</li>
                                             <li>-</li> <li>-</li> -->


                                        </ul>
                                    </div>
                                </div>
                            </div>                    
                        </div>
                    </div>
                </section>
            </section>
            <section class="even-more-pack">
                <div class="container">
                    <div class="row mrtb starup-casefix ">
                        <div class="col-md-4 col-sm-6  ">
                            <div class="three-pack mtp">
                                <h5><?php echo START_UP_LP_WITH_1_PAGE; ?></h5>

                                <h4><?php echo CURRENCY; ?><span class="main_price"><?php echo START_UP_LP_P_WITH_1_PAGE + BUDGET_WP_P; ?></span></h4>
                                <p class="save-pack"> <span class="save-cross"><?php echo CURRENCY . START_UP_LP_P_R_WITH_1_PAGE; ?></span> SAVE 50%</p>
                                <!-- <div class="delivery dropdown freeser">   <a> 6-hour service included, 24/7  <span class="gfree">(FREE)</span></a>                     

                                    <a data-toggle="tooltip" title="We have well-trained in-house designers to ensure design quality is not compromised. This service is available anytime (24/7), and we guarantee all your logos will be given within 6 hours.
                                       "  data-placement='left' class="info1"> <img src="assets/images/added/questionmark.png"></a>             
                                </div> -->
                                <div style="position:relative">
                                    <a id="order11" class="order-pack" href="<?php echo base_url() ?>orders/index/11" >Buy Now</a>
                                </div>


                                <div class="pack-list">
                                    <ul>
                                        <li> <span class="surge-pac-plus"></span><strong><span class="surge-pac-plus1">Start-up PACKAGE PLUS</span></strong><a data-toggle="tooltip" title="All the features of our Start-up Package, with the additional features below."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                        <li><strong>1</strong> page website<a data-toggle="tooltip" title=" Get a simple user-friendly website that showcases your business’s personality and purpose, all in one webpage."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                        <li><strong>1</strong> website design concept<a data-toggle="tooltip" title=" Tell us how you want your website to look like, and we will do it for you."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                        <li>Free hosting<a data-toggle="tooltip" title=" Let us worry about maintaining your website and making it accessible to everyone. "  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                        <li>Free Content Management<a data-toggle="tooltip" title=" Want to make some changes on your website? Just tell us and we will do the work for you."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                        <li>Free Search Engine Optimization<a data-toggle="tooltip" title="We’ll make sure that your website can easily be found on the internet. This way, you have one less thing to worry about when it comes to your business’s visibility and accessibility."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                        <!-- <li><strong>6-hour logo turnaround</strong> <a data-toggle="tooltip" title="Get your logos within 6 hours. You won't find a faster logo service anywhere else! Best of all, this service is available 24/7, so you can order anytime and never worry about missing a cut-off. This 6-hour service only applies to LOGO services on all packages."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li> -->



                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6  ">
                            <div class="three-pack mtp">
                                <h5><?php echo START_UP_LP_6; ?></h5>

                                <h4><?php echo CURRENCY; ?><span class="main_price"><?php echo START_UP_LP_P_WITH_6_PAGE + GOLD_WP_P; ?> </span></h4>
                                <p class="save-pack"> <span class="save-cross"><?php echo CURRENCY . START_UP_LP_P_R_WITH_6_PAGE; ?></span> SAVE 50%</p>
                                <!-- <div class="delivery dropdown freeser">   <a> 6-hour service included, 24/7  <span class="gfree">(FREE)</span></a>                     

                                    <a data-toggle="tooltip" title="We have well-trained in-house designers to ensure design quality is not compromised. This service is available anytime (24/7), and we guarantee all your logos will be given within 6 hours.
                                       "  data-placement='left' class="info1"> <img src="assets/images/added/questionmark.png"></a>             
                                </div> -->
                                <div style="position:relative">
                                    <a id="order12" class="order-pack" href="<?php echo base_url() ?>orders/index/12" >Buy Now</a>
                                </div>


                                <div class="pack-list">
                                    <ul>
                                        <li>  <span class="surge-pac-plus"></span><strong><span class="surge-pac-plus1">Start-up PACKAGE PLUS </span></strong><a data-toggle="tooltip" title="All the features of our Start-up Package, with the additional features below."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                        <li><strong>6 </strong>page website<a data-toggle="tooltip" title="Do you require a larger website with more than one page? Then this is the one for you. A website with up to 6 different pages, for showcasing everything there is to know about your business. "  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                        <li><strong>2</strong> website design concept<a data-toggle="tooltip" title="Tell us how you want your website to look like, and we will do it for you. You may choose from 2 design concepts that we will provide you."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                        <li>Free hosting<a data-toggle="tooltip" title="Let us worry about maintaining your website and making it accessible to everyone. "  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                        <li>Free Content Management<a data-toggle="tooltip" title="Want to make some changes on your website? Just tell us and we will do the work for you."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                        <li>Free Search Engine Optimization<a data-toggle="tooltip" title="We’ll make sure that your website can easily be found on the internet. This way, you have one less thing to worry about when it comes to your business’s visibility and accessibility."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                        <!-- <li><strong>6-hour logo turnaround</strong> <a data-toggle="tooltip" title="Get your logos within 6 hours. You won't find a faster logo service anywhere else! Best of all, this service is available 24/7, so you can order anytime and never worry about missing a cut-off. This 6-hour service only applies to LOGO services on all packages."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li> -->


                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4 col-sm-6  ">
                            <div class="three-pack mtp">
                                <h5><?php echo START_UP_LP_12; ?></h5>

                                <h4><?php echo CURRENCY; ?><span class="main_price"><?php echo START_UP_LP_P_WITH_12_PAGE + ELITE_WP_P; ?> </span></h4>
                                <p class="save-pack"> <span class="save-cross"><?php echo CURRENCY . START_UP_LP_P_R_WITH_12_PAGE; ?></span> SAVE 50%</p>
                                <!-- <div class="delivery dropdown freeser">   <a> 6-hour service included, 24/7  <span class="gfree">(FREE)</span></a>                     

                                    <a data-toggle="tooltip" title="We have well-trained in-house designers to ensure design quality is not compromised. This service is available anytime (24/7), and we guarantee all your logos will be given within 6 hours.
                                       "  data-placement='left' class="info1"> <img src="assets/images/added/questionmark.png"></a>             
                                </div> -->
                                <div style="position:relative">
                                    <a id="order13" class="order-pack" href="<?php echo base_url() ?>orders/index/13" >Buy Now</a>
                                </div>


                                <div class="pack-list">
                                    <ul>
                                        <li>  <span class="surge-pac-plus"></span><strong><span class="surge-pac-plus1">Start-up PACKAGE PLUS </span></strong><a data-toggle="tooltip" title="All the features of our Start-up Package, with the additional features below."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                        <li><strong>12</strong> page website<a data-toggle="tooltip" title="Need a much larger website with more pages? This package offers a website with up to 12 different pages, all for showcasing everything there is to know about your business. "  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                        <li><strong>3</strong> website design concept<a data-toggle="tooltip" title="Tell us how you want your website to look like, and we will do it for you. You may choose from 3 design concepts that we will provide you."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                        <li>Free hosting<a data-toggle="tooltip" title="Let us worry about maintaining your website and making it accessible to everyone. "  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                        <li>Free Content Management<a data-toggle="tooltip" title="Want to make some changes on your website? Just tell us and we will do the work for you."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                        <li>Free Search Engine Optimization<a data-toggle="tooltip" title="We’ll make sure that your website can easily be found on the internet. This way, you have one less thing to worry about when it comes to your business’s visibility and accessibility."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>

                                        <!-- <li><strong>6-hour logo turnaround</strong> <a data-toggle="tooltip" title="Get your logos within 6 hours. You won't find a faster logo service anywhere else! Best of all, this service is available 24/7, so you can order anytime and never worry about missing a cut-off. This 6-hour service only applies to LOGO services on all packages. "  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li> -->

                                    </ul>
                                </div>
                            </div>
                        </div>


                    </div>


                    <div class="row mrtb starup-casefix ">
                        <div class="col-md-4 col-sm-6  ">

                            <div class="three-pack mtp">
                                <h5><?php echo COMPLETE_LP_WITH_12_PAGE; ?></h5>

                                <h4><?php echo CURRENCY; ?><span class="main_price"><?php echo COMPLETE_LP_P_WITH_12_PAGE + ELITE_WP_P; ?></span></h4>
                                <p class="save-pack"> <span class="save-cross"><?php echo CURRENCY . COMPLETE_LP_P_R_WITH_12_PAGE; ?></span> SAVE 50%</p>
                                <!-- <div class="delivery dropdown freeser">   <a> 6-hour service included, 24/7  <span class="gfree">(FREE)</span></a>                     

                                    <a data-toggle="tooltip" title="We have well-trained in-house designers to ensure design quality is not compromised. This service is available anytime (24/7), and we guarantee all your logos will be given within 6 hours.
                                       "  data-placement='left' class="info1"> <img src="assets/images/added/questionmark.png"></a>             
                                </div> -->
                                <div style="position:relative">
                                    <a id="order14" class="order-pack" href="<?php echo base_url() ?>orders/index/14" >Buy Now</a>
                                </div>


                                <div class="pack-list">
                                    <ul>
                                        <li>  <span class="surge-pac-plus"></span><strong><span class="surge-pac-plus1">COMPLETE PACKAGE PLUS </span></strong><a data-toggle="tooltip" title="All the features of our Complete Package, with the additional features below."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>


                                        <li><strong>12</strong> page website<a data-toggle="tooltip" title="Need a much larger website with more pages? This package offers a website with up to 12 different pages, all for showcasing everything there is to know about your business."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                        <li><strong>3</strong> website design concept<a data-toggle="tooltip" title="Tell us how you want your website to look like, and we will do it for you. You may choose from 3 design concepts that we will provide you."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                        <li>Free hosting<a data-toggle="tooltip" title="Let us worry about maintaining your website and making it accessible to everyone. "  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                        <li>Free Content Management<a data-toggle="tooltip" title=" Want to make some changes on your website? Just tell us and we will do the work for you."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                        <li>Free Search Engine Optimization<a data-toggle="tooltip" title=" We’ll make sure that your website can easily be found on the internet. This way, you have one less thing to worry about when it comes to your business’s visibility and accessibility."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                        <!-- <li><strong>6-hour logo turnaround</strong> <a data-toggle="tooltip" title="Get your logos within 6 hours. You won't find a faster logo service anywhere else! Best of all, this service is available 24/7, so you can order anytime and never worry about missing a cut-off. This 6-hour service only applies to LOGO services on all packages."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li> -->

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6  ">  <span class="best-value">Best Seller</span>
                            <div class="three-pack mtp">
                                <h5><?php echo COMPLETE_STAT_AND_6_PAGE; ?></h5>

                                <h4><?php echo CURRENCY; ?><span class="main_price"><?php echo COMPLETE_STAT_AND_6_PAGE_P + GOLD_WP_P; ?></span></h4>
                                <p class="save-pack"> <span class="save-cross"><?php echo CURRENCY . COMPLETE_STAT_AND_6_PAGE_P_R; ?></span> SAVE 50%</p>
                                <!-- <div class="delivery dropdown freeser">   <a> 6-hour service included, 24/7  <span class="gfree">(FREE)</span></a>                     

                                    <a data-toggle="tooltip" title="We have well-trained in-house designers to ensure design quality is not compromised. This service is available anytime (24/7), and we guarantee all your logos will be given within 6 hours.
                                       "  data-placement='left' class="info1"> <img src="assets/images/added/questionmark.png"></a>             
                                </div> -->
                                <div style="position:relative">
                                    <a id="order15" class="order-pack" href="<?php echo base_url() ?>orders/index/15" >Buy Now</a>
                                </div>


                                <div class="pack-list">
                                    <ul>
                                        <li>  <span class="surge-pac-plus"></span><strong><span class="surge-pac-plus1">START-UP WITH STATIONERY PACKAGE PLUS </span></strong><a data-toggle="tooltip" title="All the features of our Start-up with Stationery Package, with the additional features below."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                        <li><strong>6</strong> page website<a data-toggle="tooltip" title="– Do you require a larger website with more than one page? Then this is the one for you. A website with up to 6 different pages, for showcasing everything there is to know about your business."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                        <li><strong>2</strong> website design concept<a data-toggle="tooltip" title="Tell us how you want your website to look like, and we will do it for you. You may choose from 2 design concepts that we will provide you."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                        <li>Free hosting<a data-toggle="tooltip" title="Let us worry about maintaining your website and making it accessible to everyone. "  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                        <li>Free Content Management<a data-toggle="tooltip" title=" Want to make some changes on your website? Just tell us and we will do the work for you."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                        <li>Free Search Engine Optimization<a data-toggle="tooltip" title=" We’ll make sure that your website can easily be found on the internet. This way, you have one less thing to worry about when it comes to your business’s visibility and accessibility."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>

                                        <!-- <li><strong>6-hour logo turnaround</strong> <a data-toggle="tooltip" title="Get your logos within 6 hours. You won't find a faster logo service anywhere else! Best of all, this service is available 24/7, so you can order anytime and never worry about missing a cut-off. This 6-hour service only applies to LOGO services on all packages."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li> -->


                                    </ul>
                                </div>
                            </div>
                        </div>





                    </div>
                </div>
            </section>
        </section>


        <!--  logo plus start up ends-->


        <section id="logoplusweb" class="tab-pane fade">
            <div class="blue-down">
            </div>
            <section class=" package-logoplusweb" id="package-pg-body">
                <section  style="background:none !important">
                    <div class="container" id="logopackages">
                        <div class="row">
                            <div class="col-md-10 package-top ">
                                <h3>Reach customers with your brand wherever they may be!
                                </h3>
                                <h5>The perfect website to suit your needs.</h5>



                                <p>With technology advancing further and further, modern businesses are no longer limited by their location.</p>
                                <p>With <span style="color:#009900;"><strong>Logo Design Guarantee™ </strong></span>helping you out with your logo and website, your identity will reach far and wide, touching your customers no matter where they are!</p>
                                <p>Check below for the best package to suit your needs.
                                </p>
                            </div>
                        </div>
                        <div class="row mrtb ">
                            <div class="col-md-4 col-sm-6  ">
                                <div class="three-pack mtp">
                                    <h5><?php echo bronze; ?></h5>

                                    <h4><?php echo CURRENCY; ?><span class="main_price"><?php echo bronze_P + BUDGET_WP_P; ?></span></h4>
                                    <p class="save-pack"> <span class="save-cross"><?php echo CURRENCY . bronze_P_R; ?></span> SAVE 50%</p>
                                    <!-- <div class="delivery dropdown freeser">   <a> 6-hour service included, 24/7  <span class="gfree">(FREE)</span></a>                     

                                        <a data-toggle="tooltip" title="We have well-trained in-house designers to ensure design quality is not compromised. This service is available anytime (24/7), and we guarantee all your logos will be given within 6 hours.
                                           "  data-placement='left' class="info1"> <img src="assets/images/added/questionmark.png"></a>             
                                    </div> -->
                                    <div style="position:relative">
                                        <a id="order16" class="order-pack" href="<?php echo base_url() ?>orders/index/16" >Buy Now</a>
                                    </div>


                                    <div class="pack-list">
                                        <ul>
                                            <li> <strong>6</strong>  Custom Made Logos <a data-toggle="tooltip" title="You will have 6 logo designs to choose from, which are guaranteed to be original and custom-made for you."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li><strong>Unlimited</strong> Revisions<a data-toggle="tooltip" title="There will be no limit to the number of revisions you can make on the logo of your choosing."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li><strong>Unlimited</strong> Logo Concepts<a data-toggle="tooltip" title="Changed your mind on the whole concept of your logo? No worries. You can always request for new logo concepts to be made just for you, for as many times as you may need, at no additional cost."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li><strong>Unlimited</strong> Redraws<a data-toggle="tooltip" title="Your choice won’t be limited to your first set of logo samples. You will have the privilege of requesting for a completely new set of samples, free of charge."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li><strong>3</strong> Designers<a data-toggle="tooltip" title="Your project will have not one but 3 designers, who will all contribute to provide you with the perfect designs based on your specifications."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>


                                            <li>  <strong>1</strong> page website<a data-toggle="tooltip" title="Get a simple user-friendly website that showcases your business’s personality and purpose, all in one webpage."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li><strong>1</strong> website design concept<a data-toggle="tooltip" title="Tell us how you want your website to look like, and we will do it for you. "  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li>Free hosting<a data-toggle="tooltip" title="Let us worry about maintaining your website and making it accessible to everyone. "  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li>Free Content Management<a data-toggle="tooltip" title="Want to make some changes on your website? Just tell us and we will do the work for you."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li>Free Search Engine Optimization<a data-toggle="tooltip" title="We’ll make sure that your website can easily be found on the internet. This way, you have one less thing to worry about when it comes to your business’s visibility and accessibility."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>

                                            <!-- <li><strong>6-hour logo turnaround</strong> <a data-toggle="tooltip" title="Get your logos within 6 hours. You won't find a faster logo service anywhere else! Best of all, this service is available 24/7, so you can order anytime and never worry about missing a cut-off. This 6-hour service only applies to LOGO services on all packages. "  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li> -->

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6  ">
                                <div class="three-pack mtp">
                                    <h5><?php echo silver; ?></h5>

                                    <h4><?php echo CURRENCY; ?><span class="main_price"><?php echo silver_P + GOLD_WP_P; ?></span></h4>
                                    <p class="save-pack"> <span class="save-cross"><?php echo CURRENCY . silver_P_R; ?></span> SAVE 50%</p>
                                    <!-- <div class="delivery dropdown freeser">   <a> 6-hour service included, 24/7  <span class="gfree">(FREE)</span></a>                     

                                        <a data-toggle="tooltip" title="We have well-trained in-house designers to ensure design quality is not compromised. This service is available anytime (24/7), and we guarantee all your logos will be given within 6 hours.
                                           "  data-placement='left' class="info1"> <img src="assets/images/added/questionmark.png"></a>             
                                    </div>                                 -->
                                    <div style="position:relative">
                                        <a id="order17" class="order-pack" href="<?php echo base_url() ?>orders/index/17" >Buy Now</a>
                                    </div>

                                    <div class="pack-list">
                                        <ul>
                                            <li> <strong>6</strong>  Custom Made Logos <a data-toggle="tooltip" title="You will have 6 logo designs to choose from, which are guaranteed to be original and custom-made for you."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li><strong>Unlimited</strong> Revisions<a data-toggle="tooltip" title="There will be no limit to the number of revisions you can make on the logo of your choosing."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li><strong>Unlimited</strong> Logo Concepts<a data-toggle="tooltip" title="Changed your mind on the whole concept of your logo? No worries. You can always request for new logo concepts to be made just for you, for as many times as you may need, at no additional cost."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li><strong>Unlimited</strong> Redraws<a data-toggle="tooltip" title="Your choice won’t be limited to your first set of logo samples. You will have the privilege of requesting for a completely new set of samples, free of charge."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li><strong>3</strong> Designers<a data-toggle="tooltip" title="Your project will have not one but 3 designers, who will all contribute to provide you with the perfect designs based on your specifications."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>


                                            <li>  <strong>6</strong> page website<a data-toggle="tooltip" title="Do you require a larger website with more than one page? Then this is the one for you. A website with up to 6 different pages, for showcasing everything there is to know about your business.   "  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li><strong>2</strong> website design concept<a data-toggle="tooltip" title="Tell us how you want your website to look like, and we will do it for you. You may choose from 2 design concepts that we will provide you. "  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li>Free hosting<a data-toggle="tooltip" title="Let us worry about maintaining your website and making it accessible to everyone. "  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li>Free Content Management<a data-toggle="tooltip" title="Want to make some changes on your website? Just tell us and we will do the work for you."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li>Free Search Engine Optimization<a data-toggle="tooltip" title="We’ll make sure that your website can easily be found on the internet. This way, you have one less thing to worry about when it comes to your business’s visibility and accessibility."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>

                                            <!-- <li><strong>6-hour logo turnaround</strong> <a data-toggle="tooltip" title="Get your logos within 6 hours. You won't find a faster logo service anywhere else! Best of all, this service is available 24/7, so you can order anytime and never worry about missing a cut-off. This 6-hour service only applies to LOGO services on all packages. "  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li> -->

                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6  ">
                               <!--  <span class="best-value">Best Value</span> -->
                                <div class="three-pack mtp fmtp">
                                    <h5><?php echo gold; ?></h5>

                                    <h4><?php echo CURRENCY; ?><span class="main_price"><?php echo gold_P + ELITE_WP_P; ?></span></h4>
                                    <p class="save-pack"> <span class="save-cross"><?php echo CURRENCY . gold_P_R; ?></span> SAVE 50%</p>
                                    <!-- <div class="delivery dropdown freeser">   <a> 6-hour service included, 24/7  <span class="gfree">(FREE)</span></a>                     

                                        <a data-toggle="tooltip" title="We have well-trained in-house designers to ensure design quality is not compromised. This service is available anytime (24/7), and we guarantee all your logos will be given within 6 hours.
                                           "  data-placement='left' class="info1"> <img src="assets/images/added/questionmark.png"></a>             
                                    </div> -->
                                    <div style="position:relative">
                                        <a id="order18" class="order-pack" href="<?php echo base_url() ?>orders/index/18/" >Buy Now</a>
                                    </div>


                                    <div class="pack-list">
                                        <ul>
                                            <li> <strong>6</strong>  Custom Made Logos <a data-toggle="tooltip" title="You will have 6 logo designs to choose from, which are guaranteed to be original and custom-made for you."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li><strong>Unlimited</strong> Revisions<a data-toggle="tooltip" title="There will be no limit to the number of revisions you can make on the logo of your choosing."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li><strong>Unlimited</strong> Logo Concepts<a data-toggle="tooltip" title="Changed your mind on the whole concept of your logo? No worries. You can always request for new logo concepts to be made just for you, for as many times as you may need, at no additional cost."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li><strong>Unlimited</strong> Redraws<a data-toggle="tooltip" title="Your choice won’t be limited to your first set of logo samples. You will have the privilege of requesting for a completely new set of samples, free of charge."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li><strong>6</strong> Designers<a data-toggle="tooltip" title="Your project will have not one, not even 3, but 6 designers, all contributing to provide you with the perfect designs based on your specifications."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>


                                            <li>  <strong>12</strong> page website<a data-toggle="tooltip" title="Need a much larger website with more pages? This package offers a website with up to 12 different pages, all for showcasing everything there is to know about your business.  "  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li><strong>3</strong> website design concept<a data-toggle="tooltip" title="Tell us how you want your website to look like, and we will do it for you. You may choose from 3 design concepts that we will provide you."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li>Free hosting<a data-toggle="tooltip" title="Let us worry about maintaining your website and making it accessible to everyone. "  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li>Free Content Management<a data-toggle="tooltip" title="Want to make some changes on your website? Just tell us and we will do the work for you."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li>Free Search Engine Optimization<a data-toggle="tooltip" title="We’ll make sure that your website can easily be found on the internet. This way, you have one less thing to worry about when it comes to your business’s visibility and accessibility."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <!-- <li><strong>6-hour logo turnaround</strong> <a data-toggle="tooltip" title="Get your logos within 6 hours. You won't find a faster logo service anywhere else! Best of all, this service is available 24/7, so you can order anytime and never worry about missing a cut-off. This 6-hour service only applies to LOGO services on all packages. "  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li> -->


                                        </ul>
                                    </div>
                                </div>
                            </div>                    
                        </div>
                    </div>
                </section>

            </section>
            <!-- <br><br><br>-->
        </section>



        <!-- logo plus website  ends-->



        <section id="otherp" class="tab-pane fade">
            <div class="purple-down">
            </div>

            <section class="package-bg package-other" id="package-pg-body">
                <section  style="background:none !important">
                    <div class="container" id="logopackages">
                        <div class="row">
                            <div class="col-md-10 package-top">
                                <h3>Branding must be consistent across all your marketing.
                                </h3>
                                <h5>Get a head-start with your marketing.</h5>

                                <p>With us helping you out with your branding, you can spread your brand more easily. With your identity intact everywhere they look, your marketing will be at peak efficiency!</p>


                                <p>You’ll see that <span style="color:#009900;"><strong>Logo Design Guarantee™</strong></span> has all that you need for your branding – and more.</p>
                                <p>Check our packages below!</p>

                            </div>
                        </div>
                        <div class="row mrtb starup-casefix ">
                            <div class="col-md-4 col-sm-6  ">
                                <div class="three-pack mtp">
                                    <h5><?php echo stationery; ?></h5>

                                    <h4><?php echo CURRENCY; ?><span class="main_price"><?php echo stationery_P; ?></span></h4>
                                    <p class="save-pack"> <span class="save-cross"><?php echo CURRENCY . stationery_P_R; ?></span> SAVE 50%</p>
                                    <!--<div class="delivery dropdown">                        
                                       <a class="<?php echo isset($_SESSION['poptions_pack19']) ? "hourd" : '' ?>  service" data-toggle="dropdown" href="javascript:void(0)"> <span class="pack1">24 hour delivery</span><span class="pack2"><?php echo CURRENCY . EXPRESS_DELIVERY_P ?></span>
                                        <span class="pack3">  ON SALE</span><span class="caret"></span></a>
                                    <ul class="dropdown-menu"  >
                                        <li class="old-pack"><a> <span class="pack1">24 hour delivery</span><span class="pack2"><?php echo CURRENCY . EXPRESS_DELIVERY_P ?> <?php if (SHOW_REGULAR_PRICE): ?><span class="old-d"><?php echo CURRENCY . EXPRESS_DELIVERY_P_R ?></span><?php endif; ?>  </span><span class="pack3">  ON SALE  <?php if (SHOW_REGULAR_PRICE): ?><br>SAVE 50% <?php endif; ?> </span></a></li>
                                        <div class="add1">
                                            <li id="19"> 
                                                <a  class="add3 <?php echo isset($_SESSION['poptions_pack19']) ? "removecolor" : 'addcolor' ?>" href="javascript:void(0)" ><?php echo (isset($_SESSION['poptions_pack19'])) ? "Remove" : "Add"; ?></a></li>
                                        </div>  
                                    </ul>
                                         <a data-toggle="tooltip" title="The 24 hour delivery only applies to 
                                                  your logo concepts. All the logo 
                                                  concepts will be given within 24 hours.
                                                  "  data-placement='left' class="info1"> <!--<span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> <img src="assets/images/added/questionmark.png"></a>                     
                                    </div>-->
                                    <div style="position:relative">
                                        <a id="order19" class="order-pack" href="<?php echo base_url() ?>orders/index/19" >Buy Now</a>
                                    </div>


                                    <div class="pack-list">
                                        <ul>
                                            <li> <b>3</b> business card designs <a data-toggle="tooltip" title="The perfect way to look professional while advertising your business. We will provide you with 3 custom-made designs to choose from."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li><b>3</b> letterhead designs<a data-toggle="tooltip" title="Make sure your business letters clearly identify you and your business. Plus, you also get to advertise your brand for free. With this package, you will get 3 additional custom-made letterhead designs at no additional cost."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li><b>3</b> complimentary slip designs <a data-toggle="tooltip" title="Compliment Slips also help with branding and advertising. It also puts your business information out there. With this package, you will get 3 custom Compliment Slip designs."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li><b>250</b> business card prints<a data-toggle="tooltip" title="You already have your business card design. Now print it out! This package comes with free 250 print outs for the business card of your choice."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li><b>250</b> letterhead prints<a data-toggle="tooltip" title="In this package, you don’t just get to choose which design you want for your letterhead, but you will also get 250 print outs at no additional cost."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>


                                            <li>  <b>250 </b> complimentary slip prints<a data-toggle="tooltip" title="Why stop with Business Cards and Letterheads? Print out your Compliment Slips as well. You will have 250 free."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>



                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6  ">
                                <div class="three-pack mtp">
                                    <h5><?php echo stationery_brochure; ?></h5>

                                    <h4><?php echo CURRENCY; ?><span class="main_price"><?php echo stationery_brochure_P; ?></span></h4>
                                    <p class="save-pack"> <span class="save-cross"><?php echo CURRENCY . stationery_brochure_P_R ?></span> SAVE 50%</p>
                                    <!--<div class="delivery dropdown">
                                        <a class="<?php echo isset($_SESSION['poptions_pack20']) ? "hourd" : '' ?>  service" data-toggle="dropdown" href="javascript:void(0)"> <span class="pack1">24 hour delivery</span><span class="pack2"><?php echo CURRENCY . EXPRESS_DELIVERY_P ?></span>
                                        <span class="pack3">  ON SALE</span><span class="caret"></span></a>
                                    <ul class="dropdown-menu"  >
                                        <li class="old-pack"><a> <span class="pack1">24 hour delivery</span><span class="pack2"><?php echo CURRENCY . EXPRESS_DELIVERY_P ?> <?php if (SHOW_REGULAR_PRICE): ?><span class="old-d"><?php echo CURRENCY . EXPRESS_DELIVERY_P_R ?></span><?php endif; ?>  </span><span class="pack3">  ON SALE  <?php if (SHOW_REGULAR_PRICE): ?><br>SAVE 50% <?php endif; ?> </span></a></li>
                                        <div class="add1">
                                            <li id="20"> 
                                                <a  class="add3 <?php echo isset($_SESSION['poptions_pack20']) ? "removecolor" : 'addcolor' ?>" href="javascript:void(0)" ><?php echo (isset($_SESSION['poptions_pack20'])) ? "Remove" : "Add"; ?></a></li>
                                        </div>  
                                    </ul>
                                      <a data-toggle="tooltip" title="The 24 hour delivery only applies to 
                                                   your logo concepts. All the logo 
                                                   concepts will be given within 24 hours.
                                                   "  data-placement='left' class="info1"> <img src="assets/images/added/questionmark.png"></a>      
                                    </div>-->                                
                                    <div style="position:relative">
                                        <a id="order20" class="order-pack" href="<?php echo base_url() ?>orders/index/20" >Buy Now</a>
                                    </div>

                                    <div class="pack-list">
                                        <ul>
                                            <li> <span class="surge-pac-plus-left"></span><strong><span class="surge-pac-plus1">STATIONERY PACKAGE PLUS </span></strong><a data-toggle="tooltip" title="All the features of our Stationery Package, with the additional features below."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li> Brochure design (Tri fold double <br>sided)<a data-toggle="tooltip" title="You will also be given a design for a tri-fold double-sided Brochure, absolutely free!"  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li> Unlimited revisions<a data-toggle="tooltip" title="There will be no limit to the number of revisions you can make on the logo of your choosing."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6  ">
                               <!--  <span class="best-value">Best Value</span> -->
                                <div class="three-pack mtp fmtp">
                                    <h5><?php echo logo_with_animation; ?></h5>

                                    <h4><?php echo CURRENCY; ?><span class="main_price"><?php echo logo_with_animation_P; ?></span></h4>
                                    <p class="save-pack"> <span class="save-cross"><?php echo CURRENCY . logo_with_animation_P_R; ?></span> SAVE 50%</p>
                                    <!--<div class="delivery dropdown">
                                        <a class="<?php echo isset($_SESSION['poptions_pack21']) ? "hourd" : '' ?>  service" data-toggle="dropdown" href="javascript:void(0)"> <span class="pack1">24 hour delivery</span><span class="pack2"><?php echo CURRENCY . EXPRESS_DELIVERY_P ?></span>
                                        <span class="pack3">  ON SALE</span><span class="caret"></span></a>
                                    <ul class="dropdown-menu"  >
                                        <li class="old-pack"><a> <span class="pack1">24 hour delivery</span><span class="pack2"><?php echo CURRENCY . EXPRESS_DELIVERY_P ?> <?php if (SHOW_REGULAR_PRICE): ?><span class="old-d"><?php echo CURRENCY . EXPRESS_DELIVERY_P_R ?></span><?php endif; ?>  </span><span class="pack3">  ON SALE  <?php if (SHOW_REGULAR_PRICE): ?><br>SAVE 50% <?php endif; ?> </span></a></li>
                                        <div class="add1">
                                            <li id="21"> 
                                        <a  class="add3 <?php echo isset($_SESSION['poptions_pack21']) ? "removecolor" : 'addcolor' ?>" href="javascript:void(0)" ><?php echo (isset($_SESSION['poptions_pack21'])) ? "Remove" : "Add"; ?></a></li>
                                        </div>  
                                    </ul>
                                         <a data-toggle="tooltip" title="The 24 hour delivery only applies to 
                                                   your logo concepts. All the logo 
                                                   concepts will be given within 24 hours.
                                                   "  data-placement='left' class="info1"><img src="assets/images/added/questionmark.png"></a>      
                                    </div>-->
                                    <div style="position:relative">
                                        <a id="order21" class="order-pack" href="<?php echo base_url() ?>orders/index/21/" >Buy Now</a>
                                    </div>

                                    <div class="pack-list">
                                        <ul>
                                            <li> <b>6</b> Custom Made Logos<a data-toggle="tooltip" title="You will have 6 logo designs to choose from, which are guaranteed to be original and custom-made for you."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a> </li>
                                            <li><b>3</b> Designers<a data-toggle="tooltip" title="Your project will have not one but 3 designers, who will all contribute to provide you with the perfect designs based on your specifications."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li><b>Unlimited</b>  Logo Concepts<a data-toggle="tooltip" title="Changed your mind on the whole concept of your logo? No worries. You can always request for new logo concepts to be made just for you, for as many times as you may need, at no additional cost."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li><b>Unlimited</b> Revisions<a data-toggle="tooltip" title="There will be no limit to the number of revisions you can make on the logo of your choosing."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li><b>Unlimited</b> Redraws<a data-toggle="tooltip" title="Your choice won’t be limited to your first set of logo samples. You will have the privilege of requesting for a completely new set of samples, free of charge."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>
                                            <li>Animated flash logo version<a data-toggle="tooltip" title="With this package, you get more than just a logo. You also get an animated flash logo that moves and is much more attractive to your potential customers."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li>   
                                            <!-- <li><b>6-hour logo turnaround</b> <a data-toggle="tooltip" title="Get your logos within 6 hours. You won't find a faster logo service anywhere else! Best of all, this service is available 24/7, so you can order anytime and never worry about missing a cut-off. This 6-hour service only applies to LOGO services on all packages."  data-placement='top' > <img src="assets/images/added/silver-info.jpg"> </a></li> -->
                                        </ul>
                                    </div>
                                </div>
                            </div>                    
                        </div>
                    </div>
                </section>
            </section>
        </section>



        <!-- other packages ends-->
    </div>



               <!--  <section id="logo-section"  >
                    <div class="lag1" align="center">
                        <div class="container" id="pack-section" style="padding-top: 30px;">
                            <div class="col-md-6 super-winter-sale col-xs-offset-3 visible-lg visible-md newpack1" >
                                <h3 class="text-center">Super Summer Sale</h3>
                                <hgroup>
                                    <h4><strong>Free </strong>Copyright Certificate worth $100</h4> 
                                    <h4><strong>Free </strong>Lifetime Alteration to Your Logo worth $100</h4>  
                                    <h4><span>Ends: Midnight EST, <span style="text-decoration:underline;">Tuesday</span> 25 Aug &lsquo;15</span></h4>
                                </hgroup>
                            </div>
                            <div class="col-md-6 super-winter-sale visible-xs visible-sm newpack1" >
                                <h3 class="text-center">Super Summer Sale</h3>
                                <hgroup>
                                    <h4><strong>Free </strong>Copyright Certificate worth $100</h4> 
                                    <h4><strong>Free </strong>Lifetime Alteration to Your Logo worth $100</h4>  
                                    <h4><span>Ends: Midnight EST, <span style="text-decoration:underline;">Tuesday</span> 25 Aug &lsquo;15</span></h4>
                                </hgroup>
                            </div>              
                        </div>              
                    </div>
                </section> -->
    <?php $this->load->view('includes/offer-banner'); ?>
    <div class="slogan">
        <div class="container">
            <h1 class="text-center">Shake up your competition with a <span class="theme-green-style"> stunning </span> logo</h1>
        </div>
    </div>
    <section class="slogan">
        <div class="container">
            <h1 class="text-center">
                Just to Reassure You...
            </h1>
            <div class="text-center slogan-tagline silver-col">Here are some advantages you won't find with our competitors</div>
        </div>
    </section>
    <section class="widget1 normal-gray-box clearfix">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <img class="img-responsive" width="260" height="131" src="assets/images/package-network-people-pic.png" alt="Logo Samples" />
                </div>
                <div class="col-sm-8">
                    <div style="padding: 0 0 0 36px;" class="clearfix">
                        <h2>The Most Logo Samples for the Lowest Price</h2>
                        <ul class="width-half tick">
                            <li>A Minimum of <span> 6 </span> Samples</li>
                            <li><span>In-House </span> Designers</li>
                            <li><span>3 </span>  Designers work on your Logo (minimum)</li>
                        </ul>
                        <ul class="width-half thin-arrow">
                            <li>Others Offer Just 1 or 2</li>
                            <li>Others Outsource Your Designs</li>
                            <li>Others Offer Just 1</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="widget1 normal-whitebox clearfix">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h2>Perfectly Hand-Crafted Logos</h2>
                    <ul class="width-half tick">
                        <li>100% <span> Hand-Drawn </span> &amp; Custom Made</li>
                        <li><span>Unlimited </span> Revisions with All Packages</li>
                        <li><span>Unlimited </span> Redraws</li>
                    </ul>
                    <ul class="width-half thin-arrow">
                        <li>Others Use Templates and Clip Art</li>
                        <li>Others Only Offer this with High Prices</li>
                        <li>Others Do Not Offer This</li>
                    </ul>
                </div>
                <div class="col-sm-4 clearfix">
                    <img class="img-responsive" width="260" height="164" src="assets/images/hand-drawn-logo2.png" alt="hand drawn logo" />
                </div>
            </div>
        </div>
    </section>
    <section class="widget1 normal-gray-box clearfix">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 for-desktop">
                    <img class="img-responsive move-right" width="125" height="125" src="assets/images/time--watch1.png" alt="time watch" />
                </div>
                <div class="col-sm-4 for-mobile">
                    <img class="img-responsive move-right1" width="125" height="125" src="assets/images/time--watch1.png" alt="time watch" />
                </div>

                <div class="col-sm-8 for-mobile">
                    <h2>24x7x365 Free Support</h2>
                    <div class="list-container">
                        <ul class="width-half tick">
                            <li>We Offer Support<span> 24x7x365</span></li>
                            <li>We Give You a <span> Dedicated Project Manager</span></li>
                            <li>Your Revisions Will Be Completed in Just <span> 24 Hours</span></li>
                        </ul>
                        <ul class="width-half thin-arrow">
                            <li>Others Usually Offer Support Weekday 9-5</li>
                            <li>Others Do Not Offer This</li><br>
                            <br>
                            <li>Others Take Several Days or Weeks</li>
                        </ul>
                    </div>
                </div>


                <div class="col-sm-8 for-desktop">
                    <h2>24x7x365 Free Support</h2>
                    <div class="list-container">
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="tick">
                                    <li>We Offer Support<span> 24x7x365</span></li>
                                    <li>We Give You a <span> Dedicated Project Manager</span></li>
                                    <li>Your Revisions Will Be Completed in Just <span> 24 Hours</span></li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="thin-arrow">
                                    <li>Others Usually Offer Support Weekday 9-5</li>
                                    <li>Others Do Not Offer This</li>
                                    <li>Others Take Several Days or Weeks</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="widget1 normal-whitebox clearfix">
        <div class="container">
            <!-- <div class="row">
                <div class="col-sm-8">
                    <h2>The Strongest Guarantee</h2>
                    <ul class="width-half tick">
                        <li><span>365 Day, 100% Money Back Guarantee</span></li>
                        <li><span>No </span> Hidden Fees</li>
                        <li>We'll Give You a Refund, <span> No Questions Asked</span></li>
                    </ul>
                    <ul class="width-half thin-arrow">
                        <li>The Best in the Industry, By Far</li>
                        <li>Others Will Surprise You After Placing an Order</li>
                        <li>Others Will Debate Whether You Deserve a Refund</li>
                    </ul>
                </div>
                <div class="col-sm-4 text-center clearfix">
                    <img style="display: inline-block;" class="img-responsive" width="168" height="202" src="assets/images/guarantee-batch.png" alt="100% guarantee" />
                </div>
            </div> -->
        </div>
    </section>
    <!-- <section id="hand-drawn" class="servicehour">
        <div class="container">
            <div class="row">

                <div class="col-sm-4">
                    <img class="img-responsive" src="assets/images/6hour.png" alt="6 Hour Logo Service" />
                </div>
                <div class="col-sm-8">
                       <h3 class="title30">All logos given within 6 hours, FREE.</h3>
                    <h3 class="title30" id="hourlogo"> 6-HOUR Logo Service</h3> 

                    <ul class="dot-bullet">
                        <li>No matter what time you order (24/7), all your logos will be <br>delivered within 6 hours.</li>
                        <li>We provide the fastest logo service worldwide (by far!).</li>
                        <li>This service applies to ALL logo packages.</li>
                        <li>No hidden/additional charges. We promise.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section> -->

    <script type="text/javascript">
        $(document).ready(function () {
            $(".add3").on("click", function () {
            //alert('ok');
                var pack_id = $(this).parent().attr('id');
            //condlose.log(pack_id);
                var check_val = $(this).html();

                var val = 1;
                var selectedElem = $(this);
                $(this).html('Remove');
                if (check_val == "Remove") {
                    val = 0;
                }

                $('#order' + pack_id).addClass('oderdisable');
                $('#loader' + pack_id).show();

               //alert(112);

                //var price = $(this).parent().parent().parent().parent().parent().children('h4').find('.main_price');
                var price = $(this).closest('.three-pack').find('.main_price');
                //console.log($(this).closest('.three-pack').find('.main_price'));
                $.post("<?php echo site_url('orders/save_options') ?>", {'pack_id': pack_id, 'options': val}, function (data) {

                    if (check_val == "Remove") {
                        $(selectedElem).removeClass('removecolor');
                        $(selectedElem).addClass('addcolor');
                        //$(this).parent().parent().parent().prev('a').removeClass('hourd');
                        $(selectedElem).parents('.delivery').find('.service').removeClass('hourd');
                        $(selectedElem).html('Add');
                    }
                    else {
                        $(selectedElem).addClass('removecolor');
                        $(selectedElem).removeClass('addcolor');
                        // $(this).parent().parent().parent().prev('a').addClass('hourd');
                        $(selectedElem).parents('.delivery').find('.service').addClass('hourd');
                    }

                    var current_price = parseInt(price.text());
                    //alert(data); 
                    var opt = eval('(' + data + ')');
                    var opt1 = opt.options_price;
                    var extPrice = parseInt('<?php echo EXPRESS_DELIVERY_P ?>');
                    optPrice = 0;
                    if (opt1) {
                        optPrice = opt1;
                    }
                    if (val == 0) {
                        price.html(current_price - extPrice);
                    }
                    else {
                        price.html(current_price + extPrice);
                    }
                    // 
                    $('#order' + pack_id).removeClass('oderdisable');
                    $('#loader' + pack_id).hide();
                });
            });
        });
    </script>
    <?php $this->load->view('includes/footer-common'); ?>             
</section>
<div class="package-info-box"></div>    
</section>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<!--<script src="<?php echo base_url() ?>assets/js/jquery-migrate-1.2.1.min.js"></script>-->
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<script src="<?php echo base_url() ?>assets/js/modernizr.custom.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>

<script type="text/javascript">
        jQuery(document).ready(function ($) {
            $('#tabs').tab();
        });
</script> 

<script type="text/javascript">
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });

</script>

<script src="<?php echo base_url() ?>assets/js/custom.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.loadmask.min.js"></script>
<!--<script src="https://track.monitis.com/mon_analytics.jsp?v=1" type="text/javascript"></script>-->
<script>
    // $(document).ready(function () {

    //     var offset = 220;
    //     var duration = 500;
    //     $(window).scroll(function () {
    //         if ($(this).scrollTop() > offset) {
    //             $('#toTop').fadeIn(duration);
    //         } else {
    //             $('#toTop').fadeOut(duration);
    //         }
    //     });

        // $("#toTop").click(function () {
            //1 second of animation time
            //html works for FFX but not Chrome
            //body works for Chrome but not FFX
            //This strange selector seems to work universally               
    //         $("html, body").animate({scrollTop: 0}, 1000);
    //     });
    // });
    //Monitis 
    //monitorus_account_number ="883917623";
    //start_mon_counter();    
    //Monitis 

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-23784014-1']);
    _gaq.push(['_trackPageview']);

    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();
</script>
<script type="text/javascript">
  var tag = document.createElement('script');
 
  tag.src = 'https://www.youtube.com/iframe_api';
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

  var player;
   var playersecond;
  function onYouTubeIframeAPIReady() {
    player = new YT.Player('newplayer', {
        // playerVars: { 'autoplay': 0, 'controls': 0 }
        events: {
          'onReady': onPlayerReady,
          'onStateChange': onPlayerStateChange
        }
    });
  }


  function onPlayerReady(event) {
  // event.target.playVideo();
  // $("#video_carousel").carousel('pause');
  //   console.log('working');
  }
  
  function onPlayerStateChange(event) {
// alert(event);
// console.log(event);
// console.log(YT.PlayerState.PLAYING);
     if(event.data== YT.PlayerState.PLAYING) {
       $("#video_carousel").carousel('pause');
       console.log('YT.PlayerState.PLAYING = pause carousel');}// Stop the carousel, if video is playing

     // else {
     //   $("#video_carousel").carousel('cycle');
        // console.log('play carousel'); // Otherwise, start it
    // }


    else if(event.data== YT.PlayerState.ENDED) {
        // player.playVideo(); 
       $("#video_carousel").carousel('next');

       // $(".video_carousel_control_right").trigger('click');
       console.log('play after video ended');}// Stop the carousel, if video is playing
    }

  

   $('#video_carousel').on('slide.bs.carousel', function () {
           console.log("player.stopVideo");
        player.stopVideo();
    });

    $('#video_carousel').on('slid.bs.carousel', function () {
           console.log("player.playVideo");
        player.playVideo();
    });



// ('#video_carousel').on('slid.bs.carousel', function () {
//            console.log("next started");
        
//          });player.stopVideo();


</script>

<script type="text/javascript">
    var t;
    var start = $('#video_carousel').find('.active').attr('data-interval');
    t = setTimeout("$('#video_carousel').carousel({interval: 1000});", start-1000);


    t = setTimeout(function () {
        $('#video_carousel').carousel('next')
    }, start);


    $('.carousel-control.right').on('click', function(){
        clearTimeout(t);   
    });

    $('.carousel-control.left').on('click', function(){
        clearTimeout(t);   
    });
</script>

<!-- <div id="toTop"><img src="<?php echo base_url() ?>assets/images/scroll_top.png" width="30" height="30" class="img-responsive" /></div>   -->    
</body>
<?php //echo "<pre>";print_r($_SESSION);?>
</html>

@extends('dashboard')
@section('content')
<main class="home-form">
<div class="cotainer">
<div class="page-wrapper"><!-- page wrapper -->
		
								<!-- header wrapper -->
			<div class="header-wrapper">
								
<header id="header" class="header-builder header-builder-p">
<div class="porto-block" data-id="5"><style>/* Header Top */
.custom-icon i { font-size: 25px; color: #fff; }
.custom-header-top-nav-background { position: relative;  font-size: 13.86px; letter-spacing: -0.5px; }
.custom-header-top-nav-background>li>span { padding: 5.5px 10px; }
.custom-header-top-nav-background::before { content: ''; position: absolute; top: 0; right: 0; width: 100vw; height: 100%; transform: skewX(-25deg); z-index: 1; background: #f04c23; }
.custom-header-top .row { flex-wrap: nowrap; }
.custom-header-top-nav-background::after { content: ''; position: absolute; top: 7px; right: -7px; width: 100vw; height: 100%; transform: skewX(-25deg); z-index: 0; background: #f79a82; }

@media (min-width: 768px) { 
    .w-md-40pct { width: 40% !important; flex: none; }
    .w-md-60-right { width: 60%; flex: none; max-width: 60%;}
}
@media (min-width: 1200px) {
    .w-xl-100pct { width: 100% !important; max-width: 50%;}
}
/* Header main */
.custom-header-main { border-bottom: 1px solid transparent; }
#header.sticky-header .custom-header-main.change-logo .logo img { transform: none; }
#header.sticky-header .logo { max-width: 162px; }
#header.sticky-header .custom-header-main.sticky { border-bottom-color: rgba(234, 234, 234, 0.5); box-shadow: 0 0 3px rgba(234, 234, 234, 0.5); }
#header .custom-header-main .container, #header.sticky-header .custom-header-main .container { display: block; min-height: 1px; }
.custom-header-main .main-menu { margin-left: auto; }
.custom-btn-style-1 { position: relative; transition: ease transform 300ms; }
.custom-btn-style-1 > a, .wpcf7.custom-btn-style-1 { position: relative; z-index: 1; }
.custom-btn-style-1 a:before, .wpcf7 .custom-btn-style-1::before { content: ''; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: #212529; opacity: 0.7; border-radius: inherit; transform: translate3d(5px, 5px, 0); transition: ease transform 300ms; z-index: -1; }
.custom-btn-style-1:hover { transform: translate3d(2.5px, 2.5px, 0); }
.custom-btn-style-1:hover a:before, .wpcf7 .custom-btn-style-1:hover::before { transform: translate3d(0, 0, 0); }
#header .searchform-popup { margin-right: 0; }
#header .searchform-popup .search-toggle:hover { color: #f04c23; }
#header .searchform-popup .search-toggle { width: auto; }
#header .fa-search::before { content: "\e090"; font-family: simple-line-icons; }
#header .main-menu>li.menu-item { margin-right: 2px; }
.mega-menu .narrow li.menu-item>a { padding-top: 6px; padding-bottom: 6px; }
@media(max-width: 991px) {
    #header .searchform-popup { margin-left: auto; }
    .custom-header-main { padding: 33.5px; }
    #header .custom-header-main.sticky { padding: 23.5px; }
    .w-md-60-right h5 { font-size: 10.2px !important; }
}
@media(max-width: 767px) {
    #header .share-links { margin-left: auto; }
}
@media (max-width: 400px) {
   #header .share-links > a {
       height: 38px;
       line-height: 38px;
       width: 38px;
   }
}</style><div class="vc_row wpb_row top-row custom-header-top z-index-1 position-relative no-padding porto-inner-container"><div class="porto-wrap-container container"><div class="row align-items-center"><div class="w-100 w-md-40pct w-xl-100pct vc_column_container col-md-6"><div class="wpb_wrapper vc_column-inner">
	<div class="wpb_raw_code wpb_content_element wpb_raw_html mb-0 custom-icon" >
		<div class="wpb_wrapper">
			<ul class="d-inline-flex nav nav-pills pr-5 custom-header-top-nav-background m-l-n-xs">
    <li class="nav-item py-2 d-inline-flex z-index-1">
        <span class="d-flex align-items-center p-0">
            <span>
               <i class="fas fa-phone-volume"></i>
            </span>
            <a class="text-color-light text-decoration-none font-weight-semibold text-3-5 ml-2" href="tel:1234567890" data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light">(800) 123-4567</a>
        </span>
        <span class="font-weight-normal align-items-center px-0 d-none d-xl-flex ml-3">
            <span style="line-height: 16px;">
                <i class="animated fadeIn far fa-question-circle"></i>
            </span>
            <a class="text-color-light text-decoration-none font-weight-semibold text-3-5 ml-2" href="mailto:business@portotheme.com" data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light">porto@consulting.com</a>
        </span>
    </li>
</ul>
		</div>
	</div>
</div></div><div class="d-flex align-items-center w-md-60-right w-100 w-xl-100pct vc_column_container col-md-6"><div class="wpb_wrapper vc_column-inner"><h5 style="font-size: 12.6px;color: #212529;line-height: 24px;font-weight:600;letter-spacing:0" class="vc_custom_heading ms-auto mb-0 m-r-md d-none d-md-block align-left">Mon - Sat 9:00am - 6:00pm / Sunday - CLOSED</h5><div class="share-links">		<a target="_blank"  rel="nofollow noopener noreferrer" class="share-facebook" href="#" title="Facebook"></a>
				<a target="_blank"  rel="nofollow noopener noreferrer" class="share-twitter" href="#" title="Twitter"></a>
				<a target="_blank"  rel="nofollow noopener noreferrer" class="share-instagram" href="#" title="Instagram"></a>
		</div></div></div></div></div></div><div class="vc_row wpb_row top-row custom-header-main no-padding header-main porto-inner-container"><div class="porto-wrap-container container"><div class="row align-items-center"><div class="vc_column_container col-md-12"><div class="wpb_wrapper vc_column-inner">		<h1 class="logo">
		<a href="https://www.portotheme.com/wordpress/porto/business-consulting3/" title="Porto Business Consulting 3 - Porto WordPress Demo site"  rel="home">
		<img class="porto-lazyload img-responsive standard-logo retina-logo" width="324" height="66" src="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/porto_placeholders/100x20.jpg" data-oi="//www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/header-logo.png" alt="Porto Business Consulting 3" />	</a>
			</h1>
		<ul id="menu-main-menu" class="main-menu mega-menu"><li id="nav-menu-item-33" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-9 current_page_item active narrow"><a href="https://www.portotheme.com/wordpress/porto/business-consulting3/" class=" current">Home</a></li>
<li id="nav-menu-item-34" class="menu-item menu-item-type-post_type menu-item-object-page narrow"><a href="https://www.portotheme.com/wordpress/porto/business-consulting3/about-us/">About Us</a></li>
<li id="nav-menu-item-35" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children has-sub narrow"><a href="https://www.portotheme.com/wordpress/porto/business-consulting3/services/">Services</a>
<div class="popup"><div class="inner" style=""><ul class="sub-menu">
	<li id="nav-menu-item-36" class="menu-item menu-item-type-post_type menu-item-object-page" data-cols="1"><a href="https://www.portotheme.com/wordpress/porto/business-consulting3/services/sales-marketing/">Sales &#038; Marketing</a></li>
	<li id="nav-menu-item-37" class="menu-item menu-item-type-post_type menu-item-object-page" data-cols="1"><a href="https://www.portotheme.com/wordpress/porto/business-consulting3/services/strategic-planning/">Strategic Planning</a></li>
	<li id="nav-menu-item-38" class="menu-item menu-item-type-post_type menu-item-object-page" data-cols="1"><a href="https://www.portotheme.com/wordpress/porto/business-consulting3/services/operations/">Operations</a></li>
	<li id="nav-menu-item-39" class="menu-item menu-item-type-post_type menu-item-object-page" data-cols="1"><a href="https://www.portotheme.com/wordpress/porto/business-consulting3/services/cost-transformation/">Cost Transformation</a></li>
	<li id="nav-menu-item-40" class="menu-item menu-item-type-post_type menu-item-object-page" data-cols="1"><a href="https://www.portotheme.com/wordpress/porto/business-consulting3/services/digital-marketing/">Digital Marketing</a></li>
	<li id="nav-menu-item-41" class="menu-item menu-item-type-post_type menu-item-object-page" data-cols="1"><a href="https://www.portotheme.com/wordpress/porto/business-consulting3/services/automation/">Automation</a></li>
</ul></div></div>
</li>
<li id="nav-menu-item-42" class="menu-item menu-item-type-post_type menu-item-object-page narrow"><a href="https://www.portotheme.com/wordpress/porto/business-consulting3/cases/">Cases</a></li>
<li id="nav-menu-item-43" class="menu-item menu-item-type-post_type menu-item-object-page narrow"><a href="https://www.portotheme.com/wordpress/porto/business-consulting3/team/">Team</a></li>
<li id="nav-menu-item-44" class="menu-item menu-item-type-post_type menu-item-object-page narrow"><a href="https://www.portotheme.com/wordpress/porto/business-consulting3/blog/">Blog</a></li>
<li id="nav-menu-item-688" class="d-none menu-item menu-item-type-post_type menu-item-object-page narrow"><a href="https://www.portotheme.com/wordpress/porto/business-consulting3/contact-us/">Contact Us</a></li>
</ul><div class="vc_btn3-container  mb-0 custom-btn-style-1 m-r-lg m-l-sm d-none d-lg-block vc_btn3-inline" >
	<a class="vc_btn3 vc_btn3-shape-default wpb_custom_4eba9bcc8f6c36e45e1d476fc3d9024c btn btn-md btn-dark" style="font-size:15.4px; font-weight:600; padding:8px 20px;" href="https://www.portotheme.com/wordpress/porto/business-consulting3/contact-us/" title="About Us">Contact Us</a>	</div>
<div class="searchform-popup search-popup search-popup-left"><a class="search-toggle" href="#"><i class="fas fa-search"></i><span class="search-text">Search</span></a>	<form action="https://www.portotheme.com/wordpress/porto/business-consulting3/" method="get"
		class="searchform">
		<div class="searchform-fields">
			<span class="text"><input name="s" type="text" value="" placeholder="Search&hellip;" autocomplete="off" /></span>
						<span class="button-wrap">
							<button class="btn btn-special" title="Search" type="submit"><i class="fas fa-search"></i></button>
						</span>
		</div>
				<div class="live-search-list"></div>
			</form>
	</div><a aria-label="Mobile Menu" href="#" class="mobile-toggle"><i class="fas fa-bars"></i></a></div></div></div></div></div></div>
<div id="nav-panel">
	<div class="container">
		<div class="mobile-nav-wrap">
		<div class="menu-wrap"><ul id="menu-main-menu-1" class="mobile-menu accordion-menu"><li id="accordion-menu-item-33" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-9 current_page_item active"><a href="https://www.portotheme.com/wordpress/porto/business-consulting3/" class=" current ">Home</a></li>
<li id="accordion-menu-item-34" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.portotheme.com/wordpress/porto/business-consulting3/about-us/">About Us</a></li>
<li id="accordion-menu-item-35" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children has-sub"><a href="https://www.portotheme.com/wordpress/porto/business-consulting3/services/">Services</a>
<span class="arrow"></span><ul class="sub-menu">
	<li id="accordion-menu-item-36" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.portotheme.com/wordpress/porto/business-consulting3/services/sales-marketing/">Sales &#038; Marketing</a></li>
	<li id="accordion-menu-item-37" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.portotheme.com/wordpress/porto/business-consulting3/services/strategic-planning/">Strategic Planning</a></li>
	<li id="accordion-menu-item-38" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.portotheme.com/wordpress/porto/business-consulting3/services/operations/">Operations</a></li>
	<li id="accordion-menu-item-39" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.portotheme.com/wordpress/porto/business-consulting3/services/cost-transformation/">Cost Transformation</a></li>
	<li id="accordion-menu-item-40" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.portotheme.com/wordpress/porto/business-consulting3/services/digital-marketing/">Digital Marketing</a></li>
	<li id="accordion-menu-item-41" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.portotheme.com/wordpress/porto/business-consulting3/services/automation/">Automation</a></li>
</ul>
</li>
<li id="accordion-menu-item-42" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.portotheme.com/wordpress/porto/business-consulting3/cases/">Cases</a></li>
<li id="accordion-menu-item-43" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.portotheme.com/wordpress/porto/business-consulting3/team/">Team</a></li>
<li id="accordion-menu-item-44" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.portotheme.com/wordpress/porto/business-consulting3/blog/">Blog</a></li>
<li id="accordion-menu-item-688" class="d-none menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.portotheme.com/wordpress/porto/business-consulting3/contact-us/">Contact Us</a></li>
</ul></div>		</div>
	</div>
</div>
</header>

							</div>
			<!-- end header wrapper -->
		

</div>
	<div class="wpb_raw_code wpb_content_element wpb_raw_html mb-0 shape-divider shape-divider-reverse h-123 shape-divider-bottom" >
		<div class="wpb_wrapper">
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 123" preserveAspectRatio="none">
							<polygon fill="#F3F3F3" points="0,90 221,60 563,88 931,35 1408,93 1920,41 1920,-1 0,-1 "></polygon>
							<polygon fill="#FFFFFF" points="0,75 219,44 563,72 930,19 1408,77 1920,25 1920,-1 0,-1 "></polygon>
						</svg>
		</div>
	</div>
</div></div></div></div></div><div class="container-fluid">
			<div class="row main-content-wrap">

			<!-- main content -->
			<div class="main-content col-lg-12">

			
	<div id="content" role="main">
				
			<article class="post-9 page type-page status-publish hentry">
				
				<h2 class="entry-title" style="display: none;">Home</h2><span class="vcard" style="display: none;"><span class="fn"><a href="https://www.portotheme.com/wordpress/porto/business-consulting3/author/editor/" title="Posts by John Doe" rel="author">John Doe</a></span></span><span class="updated" style="display:none">2022-05-06T02:47:03+00:00</span>
				<div class="page-content">
					<div data-vc-parallax="1.5" data-vc-parallax-image="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/background-1.jpg" class="vc_row wpb_row row top-row custom-banner-size vc_custom_1612993852459 no-padding vc_row-has-fill vc_general vc_parallax vc_parallax-content-moving"><div class="vc_column_container col-md-12"><div class="wpb_wrapper vc_column-inner"><div class="vc_row wpb_row vc_inner mt-md-3 vc_custom_1613041246740 mx-0"><div class="porto-wrap-container container"><div class="row"><div class="vc_column_container col-md-12"><div class="wpb_wrapper vc_column-inner"><h2 style="font-size: 8.5em;line-height: 1;font-weight:700;letter-spacing:-0.05em" data-appear-animation="fadeInUp" data-appear-animation-delay="250" class="vc_custom_heading pb-2 mb-3 mb-xl-5 custom-text-background ws-nowrap float-xl-end vc_custom_1613822468207 align-left">STRATEGY EXECUTION</h2></div></div><div class="pb-5 pb-xl-0 mb-5 position-static vc_column_container col-md-7 col-xl-5"><div class="wpb_wrapper vc_column-inner"><div class="porto-u-heading mb-3 pb-1 custom-highlight-1  wpb_custom_95aa9a11c17ad45cfabaf210d84ee7cc" data-hspacer="no_spacer" data-halign="left" style="text-align:left" data-appear-animation="fadeInUp" data-appear-animation-delay="500"><div class="porto-u-main-heading"><h2   style="font-weight:600;font-size:1.44375em;line-height:1.4;letter-spacing:normal;">Accelerate Strategy Execution and Consistency in <strong>Revenue Growth!</strong></h2></div></div><p style="font-size: 0.9625em;color: #777777" data-appear-animation="fadeInUp" data-appear-animation-delay="750" class="vc_custom_heading mb-4 align-left">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non.</p><div class="porto-sicon-box custom-scroll-action  wpb_custom_1efe903570d178ff0a9b7bfa5febd3a4 style_1 default-icon" data-appear-animation="fadeInUp" data-appear-animation-delay="1000"><div class="porto-sicon-default"><div class="porto-just-icon-wrapper porto-icon none" style="color:#f04c23;font-size:30px;margin-right:8px;"><i class="Simple-Line-Icons-mouse"></i></div></div><div class="porto-sicon-header"><h3 class="porto-sicon-title" style="font-weight:400;font-size:14px;line-height:26px;letter-spacing:0;color:#f04c23;">Scroll Down</h3></div> <!-- header --></div><!-- porto-sicon-box -->
	<div class="wpb_single_image wpb_content_element vc_align_left   custom-img-pos-1 z-index-n-1 d-none d-md-block" data-appear-animation="fadeInUp" data-appear-animation-delay="1100">
		<div class="wpb_wrapper">
			
			<div class="vc_single_image-wrapper   vc_box_border_grey"><img width="613" height="704" src="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/porto_placeholders/100x114.jpg" data-oi="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/background-woman.png" class="porto-lazyload vc_single_image-img attachment-full" alt="woman" title="background-woman" srcset="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/porto_placeholders/100x114.jpg 100w" data-srcset="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/background-woman.png 613w, https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/background-woman-400x459.png 400w, https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/background-woman-367x421.png 367w" sizes="(max-width: 613px) 100vw, 613px" /></div>
		</div>
	</div>
</div></div></div></div></div><div class="vc_row wpb_row vc_inner row shape-divider shape-divider-bottom"><div class="vc_column_container col-md-12"><div class="wpb_wrapper vc_column-inner">
	<div class="wpb_raw_code wpb_content_element wpb_raw_html shape-divider-horizontal-animation shape-animation-to-left" >
		<div class="wpb_wrapper">
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 212" preserveAspectRatio="none">
    <polygon fill="#F3F3F3" points="0,75 479,161 1357,28 1701,56 1920,26 1920,213 0,212 "></polygon>
    <polygon fill="#FFFFFF" points="0,91 481,177 1358,44 1702,72 1920,42 1920,212 0,212 "></polygon>
</svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 212" preserveAspectRatio="none">
    <polygon fill="#F3F3F3" points="0,75 479,161 1357,28 1701,56 1920,26 1920,213 0,212 "></polygon>
    <polygon fill="#FFFFFF" points="0,91 481,177 1358,44 1702,72 1920,42 1920,212 0,212 "></polygon>
</svg>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 212" preserveAspectRatio="none">
    <polygon fill="#F3F3F3" points="0,75 479,161 1357,28 1701,56 1920,26 1920,213 0,212 "></polygon>
    <polygon fill="#FFFFFF" points="0,91 481,177 1358,44 1702,72 1920,42 1920,212 0,212 "></polygon>
</svg>
		</div>
	</div>
</div></div></div></div></div></div><div class="vc_row wpb_row top-row mt-xl-max-1 vc_custom_1613646081965 porto-inner-container"><div class="porto-wrap-container container"><div class="row"><div class="ms-xl-auto vc_column_container col-md-12 col-xl-7"><div class="wpb_wrapper vc_column-inner"><div class="porto-carousel owl-carousel has-ccols has-ccols-spacing ccols-xl-2 ccols-lg-3 ccols-md-2 ccols-sm-2 ccols-1 custom-carousel-box-shadow-1 custom-dot-type-1 mb-0 wpb_custom_324659f3639fc50e0d07e21da55ccd7b" data-appear-animation="fadeIn" data-appear-animation-delay="300" data-plugin-options="{&quot;stagePadding&quot;:0,&quot;margin&quot;:20,&quot;autoplay&quot;:false,&quot;mouseDrag&quot;:true,&quot;touchDrag&quot;:true,&quot;autoplayTimeout&quot;:5000,&quot;autoplayHoverPause&quot;:false,&quot;items&quot;:2,&quot;lg&quot;:3,&quot;md&quot;:2,&quot;sm&quot;:2,&quot;xs&quot;:1,&quot;nav&quot;:false,&quot;dots&quot;:&quot;yes&quot;,&quot;animateIn&quot;:&quot;&quot;,&quot;animateOut&quot;:&quot;&quot;,&quot;loop&quot;:false,&quot;center&quot;:false,&quot;video&quot;:false,&quot;lazyLoad&quot;:false,&quot;fullscreen&quot;:false}"><div class="porto-ultimate-content-box-container custom-link-hover-effects text-center"><style>#porto_ucb_5716{will-change: box-shadow;box-shadow: none;}</style><div class="porto-ultimate-content-box vc_custom_1613822288831" style="background-color:#ffffff;" data-bg="#ffffff" id="porto_ucb_5716">
	<div class="wpb_raw_code wpb_content_element wpb_raw_html svg-fill-color-primary custom-crooked-line" >
		<div class="wpb_wrapper">
			<svg class="d-block mx-auto" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 74 74" style="enable-background:new 0 0 74 74;" xml:space="preserve" width="75" height="75">
	<path class="st0" fill="#2B3033" d="M71,47.6h-1.1V5H71c1.1,0,2-0.9,2-2s-0.9-2-2-2H3C1.9,1,1,1.9,1,3s0.9,2,2,2h1.1v42.6H3c-1.1,0-2,0.9-2,2
		s0.9,2,2,2h32v4.7L19.4,69.5c-0.8,0.7-1,2-0.2,2.8c0.7,0.8,2,1,2.8,0.2l13.1-11v8.3c0,1.1,0.9,2,2,2s2-0.9,2-2v-8.3l13.1,11
		c0.4,0.3,0.8,0.5,1.3,0.5c0.6,0,1.1-0.2,1.5-0.7c0.7-0.8,0.6-2.1-0.2-2.8L39,56.3v-4.7h32c1.1,0,2-0.9,2-2S72.1,47.6,71,47.6z
		 M8.1,5H66v42.6H8.1V5z"></path>
	<path class="st0" fill="#2B3033" d="M50.1,22.2c-0.6,0.9-0.3,2.2,0.7,2.7c0.3,0.2,0.7,0.3,1,0.3c0.7,0,1.3-0.3,1.7-1l5-8.2c0.3-0.5,0.4-1,0.2-1.5
		c-0.1-0.5-0.5-1-0.9-1.2l-8.2-5C48.7,7.7,47.4,8,46.9,9c-0.6,0.9-0.3,2.2,0.7,2.7l3.9,2.3c-25.4,6.2-33.2,25.2-33.6,26
		c-0.4,1,0.1,2.2,1.1,2.6c0.2,0.1,0.5,0.1,0.7,0.1c0.8,0,1.5-0.5,1.9-1.3c0.3-0.8,7.6-18.1,31.1-23.7L50.1,22.2z"></path>
	<path class="st0" fill="#2B3033" d="M48.9,34.6c0-4.1-3.3-7.4-7.4-7.4s-7.4,3.3-7.4,7.4s3.3,7.4,7.4,7.4S48.9,38.6,48.9,34.6z M38.2,34.6
		c0-1.9,1.5-3.4,3.4-3.4s3.4,1.5,3.4,3.4S43.5,38,41.6,38C39.7,37.9,38.2,36.4,38.2,34.6z"></path>
	<path class="st0" fill="#2B3033" d="M19.7,25.2c1.1,0,2-0.9,2-2v-2.9h2.9c1.1,0,2-0.9,2-2s-0.9-2-2-2h-2.9v-2.9c0-1.1-0.9-2-2-2s-2,0.9-2,2v2.9
		h-2.9c-1.1,0-2,0.9-2,2s0.9,2,2,2h2.9v2.9C17.7,24.3,18.6,25.2,19.7,25.2z"></path>
</svg>
<svg class="d-block mx-auto" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1196.9 92" style="enable-background:new 0 0 1196.9 92;" xml:space="preserve" width="154" height="26">
<g transform="translate(0.000000,92.000000) scale(0.100000,-0.100000)">
	<path d="M1620.4,630l-290-290l-286,286c-250,249-289,285-305,276c-11-6-161-153-334-326L0,169.6l87.8-82.2l85-85L505.4,335l245,245
		l285-285c157-157,289-285,295-285c5,0,138,128,295,285l285,285l290-290l290-290l290,290l290,290l290-290l290-290l290,290l290,290
		l290-290l290-290l291,291l291,291l247-243L5983.3,0.1l85,84l84.4,85.6L5723.4,592l-333,327l-290-289l-290-290l-290,290l-290,290
		l-290-290l-290-290l-290,290l-290,290l-290-290l-290-290l-290,290l-290,290L1620.4,630z"></path>
</g>
<g transform="translate(0.000000,92.000000) scale(0.100000,-0.100000)">
	<path d="M7432.8,630l-290-290l-286,286c-250,249-289,285-305,276c-11-6-161-153-334-326l-405.4-406.4l84.4-84.3l86.5-85.2
		L6317.8,335l245,245l285-285c157-157,289-285,295-285c5,0,138,128,295,285l285,285l290-290l290-290l290,290l290,290l290-290
		l290-290l290,290l290,290l290-290l290-290l291,291l291,291l247-243l343.9-338.9l85,84l88.6,81.4L11535.8,592l-333,327l-290-289
		l-290-290l-290,290l-290,290l-290-290l-290-290l-290,290l-290,290l-290-290l-290-290l-290,290l-290,290L7432.8,630z"></path>
</g>
</svg>
		</div>
	</div>
<h3 style="font-size: 21px;line-height: 42px;text-align: center;font-weight:600;letter-spacing:-0.05em" class="vc_custom_heading text-dark mb-1">Strategic Planning</h3><p style="color: #777777;text-align: center" class="vc_custom_heading pb-1 mb-2">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit.</p><div class="vc_btn3-container  custom-view-more mb-1 vc_btn3-inline" >
	<a class="vc_btn3 vc_btn3-shape-default text-primary bg-transparent b-none  wpb_custom_4eba9bcc8f6c36e45e1d476fc3d9024c vc_btn3-icon-right btn btn-md btn-primary" style="font-size:14px; font-weight:500;" href="https://www.portotheme.com/wordpress/porto/business-consulting3/services/" title="Services">View More <i class="vc_btn3-icon fas fa-long-arrow-alt-right"></i></a>	</div>
</div></div><div class="porto-ultimate-content-box-container custom-link-hover-effects text-center"><style>#porto_ucb_2653{will-change: box-shadow;box-shadow: none;}</style><div class="porto-ultimate-content-box vc_custom_1613822320990" style="background-color:#ffffff;" data-bg="#ffffff" id="porto_ucb_2653">
	<div class="wpb_raw_code wpb_content_element wpb_raw_html svg-fill-color-primary custom-crooked-line" >
		<div class="wpb_wrapper">
			<svg class="d-block mx-auto" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 74 74" style="enable-background:new 0 0 74 74;" xml:space="preserve" width="75" height="75">
	<path fill="#2B3033" d="M72.9,46.2L62,17.7h3.3c1.1,0,2-0.9,2-2s-0.9-2-2-2h-22c-0.6-2-2.3-3.6-4.3-4.3v-5c0-1.1-0.9-2-2-2s-2,0.9-2,2
		v5c-2,0.6-3.6,2.3-4.3,4.3h-22c-1.1,0-2,0.9-2,2s0.9,2,2,2H12L1.1,46.2C1,46.4,1,46.7,1,46.9c0,5.2,1,8.6,3,10.6s4.7,2.2,7.4,2.2
		c0.6,0,1.1,0,1.7,0c1.2,0,2.4,0,3.6,0c3.3,0.1,6.7,0.1,9.1-2.2c2-2,3-5.4,3-10.6c0-0.2,0-0.5-0.1-0.7L17.8,17.7h12.9
		c0.6,2,2.3,3.6,4.3,4.3v45.7H20.8c-1.1,0-2,0.9-2,2s0.9,2,2,2h32.4c1.1,0,2-0.9,2-2s-0.9-2-2-2H39V22c2-0.6,3.6-2.3,4.3-4.3h12.9
		L45.4,46.2c-0.1,0.2-0.1,0.5-0.1,0.7c0,5.2,1,8.6,3,10.6s4.7,2.2,7.4,2.2c0.6,0,1.1,0,1.7,0c1.2,0,2.4,0,3.6,0
		c3.3,0.1,6.7,0.1,9.1-2.2c2-2,3-5.4,3-10.6C73,46.7,73,46.4,72.9,46.2z M14.9,21.3l9,23.6h-18L14.9,21.3z M16.8,55.8
		c-1.2,0-2.6,0-3.8,0c-3.1,0.1-5,0-6.2-1.1c-1-1-1.5-2.9-1.7-5.8h19.6c-0.2,2.9-0.8,4.8-1.7,5.8C21.8,55.8,19.9,55.8,16.8,55.8z
		 M37,18.3c-1.4,0-2.6-1.2-2.6-2.6s1.2-2.6,2.6-2.6l0,0l0,0c1.4,0,2.6,1.2,2.6,2.6S38.4,18.3,37,18.3z M59.1,21.3l9,23.6H50.2
		L59.1,21.3z M61,55.8c-1.2,0-2.6,0-3.8,0c-3.1,0.1-5,0-6.2-1.1c-1-1-1.5-2.9-1.7-5.8h19.6c-0.2,2.9-0.8,4.8-1.7,5.8
		C66.1,55.8,64.1,55.8,61,55.8z"></path>
</svg>
<svg class="d-block mx-auto" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1196.9 92" style="enable-background:new 0 0 1196.9 92;" xml:space="preserve" width="154" height="26">
<g transform="translate(0.000000,92.000000) scale(0.100000,-0.100000)">
	<path d="M1620.4,630l-290-290l-286,286c-250,249-289,285-305,276c-11-6-161-153-334-326L0,169.6l87.8-82.2l85-85L505.4,335l245,245
		l285-285c157-157,289-285,295-285c5,0,138,128,295,285l285,285l290-290l290-290l290,290l290,290l290-290l290-290l290,290l290,290
		l290-290l290-290l291,291l291,291l247-243L5983.3,0.1l85,84l84.4,85.6L5723.4,592l-333,327l-290-289l-290-290l-290,290l-290,290
		l-290-290l-290-290l-290,290l-290,290l-290-290l-290-290l-290,290l-290,290L1620.4,630z"></path>
</g>
<g transform="translate(0.000000,92.000000) scale(0.100000,-0.100000)">
	<path d="M7432.8,630l-290-290l-286,286c-250,249-289,285-305,276c-11-6-161-153-334-326l-405.4-406.4l84.4-84.3l86.5-85.2
		L6317.8,335l245,245l285-285c157-157,289-285,295-285c5,0,138,128,295,285l285,285l290-290l290-290l290,290l290,290l290-290
		l290-290l290,290l290,290l290-290l290-290l291,291l291,291l247-243l343.9-338.9l85,84l88.6,81.4L11535.8,592l-333,327l-290-289
		l-290-290l-290,290l-290,290l-290-290l-290-290l-290,290l-290,290l-290-290l-290-290l-290,290l-290,290L7432.8,630z"></path>
</g>
</svg>
		</div>
	</div>
<h3 style="font-size: 21px;line-height: 42px;text-align: center;font-weight:600;letter-spacing:-0.05em" class="vc_custom_heading text-dark mb-1">Financial Clean-Up</h3><p style="color: #777777;text-align: center" class="vc_custom_heading pb-1 mb-2">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit.</p><div class="vc_btn3-container  custom-view-more mb-1 vc_btn3-inline" >
	<a class="vc_btn3 vc_btn3-shape-default text-primary bg-transparent b-none  wpb_custom_4eba9bcc8f6c36e45e1d476fc3d9024c vc_btn3-icon-right btn btn-md btn-primary" style="font-size:14px; font-weight:500;" href="https://www.portotheme.com/wordpress/porto/business-consulting3/services/" title="Services">View More <i class="vc_btn3-icon fas fa-long-arrow-alt-right"></i></a>	</div>
</div></div><div class="porto-ultimate-content-box-container custom-link-hover-effects text-center"><style>#porto_ucb_8694{will-change: box-shadow;box-shadow: none;}</style><div class="porto-ultimate-content-box vc_custom_1613822330066" style="background-color:#ffffff;" data-bg="#ffffff" id="porto_ucb_8694">
	<div class="wpb_raw_code wpb_content_element wpb_raw_html svg-fill-color-primary custom-crooked-line" >
		<div class="wpb_wrapper">
			<svg class="d-block mx-auto" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 74 74" style="enable-background:new 0 0 74 74;" xml:space="preserve" id="icon_221612990264743" width="75" height="75">
	<path class="st0" fill="#2B3033" d="M71,47.6h-1.1V5H71c1.1,0,2-0.9,2-2s-0.9-2-2-2H3C1.9,1,1,1.9,1,3s0.9,2,2,2h1.1v42.6H3c-1.1,0-2,0.9-2,2
		s0.9,2,2,2h32v4.7L19.4,69.5c-0.8,0.7-1,2-0.2,2.8c0.7,0.8,2,1,2.8,0.2l13.1-11v8.3c0,1.1,0.9,2,2,2s2-0.9,2-2v-8.3l13.1,11
		c0.4,0.3,0.8,0.5,1.3,0.5c0.6,0,1.1-0.2,1.5-0.7c0.7-0.8,0.6-2.1-0.2-2.8L39,56.3v-4.7h32c1.1,0,2-0.9,2-2S72.1,47.6,71,47.6z
		 M8.1,5H66v42.6H8.1V5z"></path>
	<path class="st0" fill="#2B3033" d="M50.1,22.2c-0.6,0.9-0.3,2.2,0.7,2.7c0.3,0.2,0.7,0.3,1,0.3c0.7,0,1.3-0.3,1.7-1l5-8.2c0.3-0.5,0.4-1,0.2-1.5
		c-0.1-0.5-0.5-1-0.9-1.2l-8.2-5C48.7,7.7,47.4,8,46.9,9c-0.6,0.9-0.3,2.2,0.7,2.7l3.9,2.3c-25.4,6.2-33.2,25.2-33.6,26
		c-0.4,1,0.1,2.2,1.1,2.6c0.2,0.1,0.5,0.1,0.7,0.1c0.8,0,1.5-0.5,1.9-1.3c0.3-0.8,7.6-18.1,31.1-23.7L50.1,22.2z"></path>
	<path class="st0" fill="#2B3033" d="M48.9,34.6c0-4.1-3.3-7.4-7.4-7.4s-7.4,3.3-7.4,7.4s3.3,7.4,7.4,7.4S48.9,38.6,48.9,34.6z M38.2,34.6
		c0-1.9,1.5-3.4,3.4-3.4s3.4,1.5,3.4,3.4S43.5,38,41.6,38C39.7,37.9,38.2,36.4,38.2,34.6z"></path>
	<path class="st0" fill="#2B3033" d="M19.7,25.2c1.1,0,2-0.9,2-2v-2.9h2.9c1.1,0,2-0.9,2-2s-0.9-2-2-2h-2.9v-2.9c0-1.1-0.9-2-2-2s-2,0.9-2,2v2.9
		h-2.9c-1.1,0-2,0.9-2,2s0.9,2,2,2h2.9v2.9C17.7,24.3,18.6,25.2,19.7,25.2z"></path>
</svg>
<svg class="d-block mx-auto" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1196.9 92" style="enable-background:new 0 0 1196.9 92;" xml:space="preserve" width="154" height="26">
<g transform="translate(0.000000,92.000000) scale(0.100000,-0.100000)">
	<path d="M1620.4,630l-290-290l-286,286c-250,249-289,285-305,276c-11-6-161-153-334-326L0,169.6l87.8-82.2l85-85L505.4,335l245,245
		l285-285c157-157,289-285,295-285c5,0,138,128,295,285l285,285l290-290l290-290l290,290l290,290l290-290l290-290l290,290l290,290
		l290-290l290-290l291,291l291,291l247-243L5983.3,0.1l85,84l84.4,85.6L5723.4,592l-333,327l-290-289l-290-290l-290,290l-290,290
		l-290-290l-290-290l-290,290l-290,290l-290-290l-290-290l-290,290l-290,290L1620.4,630z"></path>
</g>
<g transform="translate(0.000000,92.000000) scale(0.100000,-0.100000)">
	<path d="M7432.8,630l-290-290l-286,286c-250,249-289,285-305,276c-11-6-161-153-334-326l-405.4-406.4l84.4-84.3l86.5-85.2
		L6317.8,335l245,245l285-285c157-157,289-285,295-285c5,0,138,128,295,285l285,285l290-290l290-290l290,290l290,290l290-290
		l290-290l290,290l290,290l290-290l290-290l291,291l291,291l247-243l343.9-338.9l85,84l88.6,81.4L11535.8,592l-333,327l-290-289
		l-290-290l-290,290l-290,290l-290-290l-290-290l-290,290l-290,290l-290-290l-290-290l-290,290l-290,290L7432.8,630z"></path>
</g>
</svg>
		</div>
	</div>
<h3 style="font-size: 21px;line-height: 42px;text-align: center;font-weight:600;letter-spacing:-0.05em" class="vc_custom_heading text-dark mb-1">Strategic Planning</h3><p style="color: #777777;text-align: center" class="vc_custom_heading pb-1 mb-2">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit.</p><div class="vc_btn3-container  custom-view-more mb-1 vc_btn3-inline" >
	<a class="vc_btn3 vc_btn3-shape-default text-primary bg-transparent b-none  wpb_custom_4eba9bcc8f6c36e45e1d476fc3d9024c vc_btn3-icon-right btn btn-md btn-primary" style="font-size:14px; font-weight:500;" href="https://www.portotheme.com/wordpress/porto/business-consulting3/services/" title="Services">View More <i class="vc_btn3-icon fas fa-long-arrow-alt-right"></i></a>	</div>
</div></div><div class="porto-ultimate-content-box-container custom-link-hover-effects text-center"><style>#porto_ucb_6881{will-change: box-shadow;box-shadow: none;}</style><div class="porto-ultimate-content-box vc_custom_1613822337770" style="background-color:#ffffff;" data-bg="#ffffff" id="porto_ucb_6881">
	<div class="wpb_raw_code wpb_content_element wpb_raw_html svg-fill-color-primary custom-crooked-line" >
		<div class="wpb_wrapper">
			<svg class="d-block mx-auto" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 74 74" style="enable-background:new 0 0 74 74;" xml:space="preserve" width="75" height="75">
	<path fill="#2B3033" d="M72.9,46.2L62,17.7h3.3c1.1,0,2-0.9,2-2s-0.9-2-2-2h-22c-0.6-2-2.3-3.6-4.3-4.3v-5c0-1.1-0.9-2-2-2s-2,0.9-2,2
		v5c-2,0.6-3.6,2.3-4.3,4.3h-22c-1.1,0-2,0.9-2,2s0.9,2,2,2H12L1.1,46.2C1,46.4,1,46.7,1,46.9c0,5.2,1,8.6,3,10.6s4.7,2.2,7.4,2.2
		c0.6,0,1.1,0,1.7,0c1.2,0,2.4,0,3.6,0c3.3,0.1,6.7,0.1,9.1-2.2c2-2,3-5.4,3-10.6c0-0.2,0-0.5-0.1-0.7L17.8,17.7h12.9
		c0.6,2,2.3,3.6,4.3,4.3v45.7H20.8c-1.1,0-2,0.9-2,2s0.9,2,2,2h32.4c1.1,0,2-0.9,2-2s-0.9-2-2-2H39V22c2-0.6,3.6-2.3,4.3-4.3h12.9
		L45.4,46.2c-0.1,0.2-0.1,0.5-0.1,0.7c0,5.2,1,8.6,3,10.6s4.7,2.2,7.4,2.2c0.6,0,1.1,0,1.7,0c1.2,0,2.4,0,3.6,0
		c3.3,0.1,6.7,0.1,9.1-2.2c2-2,3-5.4,3-10.6C73,46.7,73,46.4,72.9,46.2z M14.9,21.3l9,23.6h-18L14.9,21.3z M16.8,55.8
		c-1.2,0-2.6,0-3.8,0c-3.1,0.1-5,0-6.2-1.1c-1-1-1.5-2.9-1.7-5.8h19.6c-0.2,2.9-0.8,4.8-1.7,5.8C21.8,55.8,19.9,55.8,16.8,55.8z
		 M37,18.3c-1.4,0-2.6-1.2-2.6-2.6s1.2-2.6,2.6-2.6l0,0l0,0c1.4,0,2.6,1.2,2.6,2.6S38.4,18.3,37,18.3z M59.1,21.3l9,23.6H50.2
		L59.1,21.3z M61,55.8c-1.2,0-2.6,0-3.8,0c-3.1,0.1-5,0-6.2-1.1c-1-1-1.5-2.9-1.7-5.8h19.6c-0.2,2.9-0.8,4.8-1.7,5.8
		C66.1,55.8,64.1,55.8,61,55.8z"></path>
</svg>
<svg class="d-block mx-auto" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1196.9 92" style="enable-background:new 0 0 1196.9 92;" xml:space="preserve" width="154" height="26">
<g transform="translate(0.000000,92.000000) scale(0.100000,-0.100000)">
	<path d="M1620.4,630l-290-290l-286,286c-250,249-289,285-305,276c-11-6-161-153-334-326L0,169.6l87.8-82.2l85-85L505.4,335l245,245
		l285-285c157-157,289-285,295-285c5,0,138,128,295,285l285,285l290-290l290-290l290,290l290,290l290-290l290-290l290,290l290,290
		l290-290l290-290l291,291l291,291l247-243L5983.3,0.1l85,84l84.4,85.6L5723.4,592l-333,327l-290-289l-290-290l-290,290l-290,290
		l-290-290l-290-290l-290,290l-290,290l-290-290l-290-290l-290,290l-290,290L1620.4,630z"></path>
</g>
<g transform="translate(0.000000,92.000000) scale(0.100000,-0.100000)">
	<path d="M7432.8,630l-290-290l-286,286c-250,249-289,285-305,276c-11-6-161-153-334-326l-405.4-406.4l84.4-84.3l86.5-85.2
		L6317.8,335l245,245l285-285c157-157,289-285,295-285c5,0,138,128,295,285l285,285l290-290l290-290l290,290l290,290l290-290
		l290-290l290,290l290,290l290-290l290-290l291,291l291,291l247-243l343.9-338.9l85,84l88.6,81.4L11535.8,592l-333,327l-290-289
		l-290-290l-290,290l-290,290l-290-290l-290-290l-290,290l-290,290l-290-290l-290-290l-290,290l-290,290L7432.8,630z"></path>
</g>
</svg>
		</div>
	</div>
<h3 style="font-size: 21px;line-height: 42px;text-align: center;font-weight:600;letter-spacing:-0.05em" class="vc_custom_heading text-dark mb-1">Financial Clean-Up</h3><p style="color: #777777;text-align: center" class="vc_custom_heading pb-1 mb-2">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit.</p><div class="vc_btn3-container  custom-view-more mb-1 vc_btn3-inline" >
	<a class="vc_btn3 vc_btn3-shape-default text-primary bg-transparent b-none  wpb_custom_4eba9bcc8f6c36e45e1d476fc3d9024c vc_btn3-icon-right btn btn-md btn-primary" style="font-size:14px; font-weight:500;" href="https://www.portotheme.com/wordpress/porto/business-consulting3/services/" title="Services">View More <i class="vc_btn3-icon fas fa-long-arrow-alt-right"></i></a>	</div>
</div></div></div></div></div></div></div></div><div id="aboutus" class="vc_row wpb_row top-row align-items-xl-center pt-4 mt-5 porto-inner-container"><div class="porto-wrap-container container"><div class="row align-items-center"><div class="mb-5 mb-lg-0 vc_column_container col-md-10 col-lg-6"><div class="wpb_wrapper vc_column-inner"><div class="vc_row wpb_row vc_inner row m-t-n-sm vc_column-gap-20"><div class="custom-height-1 custom-width-1 vc_column_container col-md-6 col-6"><div class="wpb_wrapper vc_column-inner">
	<div class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1614087476138  custom-box-shadow-1 mb-0">
		<div class="wpb_wrapper">
			
			<div class="vc_single_image-wrapper   vc_box_border_grey"><img width="290" height="488" src="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/porto_placeholders/100x168.jpg" data-oi="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/generic-1.jpg" class="porto-lazyload vc_single_image-img attachment-full" alt="generic" title="generic-1" /></div>
		</div>
	</div>
</div></div><div class="custom-width-1 custom-height-2 custom-height-1 vc_column_container col-md-6 col-6"><div class="wpb_wrapper vc_column-inner">
	<div class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1614087493619  mb-4 custom-box-shadow-1">
		<div class="wpb_wrapper">
			
			<div class="vc_single_image-wrapper   vc_box_border_grey"><img width="290" height="218" src="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/porto_placeholders/100x75.jpg" data-oi="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/generic-2.jpg" class="porto-lazyload vc_single_image-img attachment-full" alt="generic" title="generic-2" /></div>
		</div>
	</div>

	<div class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1614087509082  custom-box-shadow-1 mb-0">
		<div class="wpb_wrapper">
			
			<div class="vc_single_image-wrapper   vc_box_border_grey"><img width="291" height="245" src="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/porto_placeholders/100x84.jpg" data-oi="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/generic-3.jpg" class="porto-lazyload vc_single_image-img attachment-full" alt="generic" title="generic-3" /></div>
		</div>
	</div>
</div></div></div></div></div><div class="ps-lg-4 ps-xl-5 m-t-n-sm vc_column_container col-md-12 col-lg-6"><div class="wpb_wrapper vc_column-inner"><h4 style="font-size: 16.8px;line-height: 1.5;letter-spacing:2.5px" data-appear-animation="fadeInUp" data-appear-animation-delay="100" class="vc_custom_heading custom-highlight-1 custom-weight-1 text-primary mb-2 align-left"><strong>ABOUT US</strong></h4><h3 style="font-size: 35px;line-height: 1.3;font-weight:600;letter-spacing:-.05em" data-appear-animation="fadeInUp" data-appear-animation-delay="250" class="vc_custom_heading text-dark mb-4 mb-lg-3 mb-xl-4 align-left">We deliver the most advanced strategies for your business</h3><p style="font-size: 15.4px" data-appear-animation="fadeInUp" data-appear-animation-delay="500" class="vc_custom_heading pb-1 mb-lg-2 mb-xl-4 align-left">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis ultrices non. Cras a elit sit amet leo acun volutpat. Suspendisse hendrerit vehicula leo, vel efficitur fel.</p><div class="vc_row wpb_row vc_inner row pb-2 mb-4 mb-lg-1 mb-xl-4 vc_row-o-content-middle vc_row-flex" data-appear-animation="fadeInUp" data-appear-animation-delay="750"><div class="vc_column_container col-md-5 col-12"><div class="wpb_wrapper vc_column-inner"><div class="porto-sicon-box mb-md-0 mb-4  wpb_custom_1efe903570d178ff0a9b7bfa5febd3a4 style_1 default-icon"><div class="porto-sicon-default"><div id="porto-icon-12825411916290d1c56f750" class="porto-just-icon-wrapper porto-sicon-img" style="font-size: 63px;margin-right:8px;"><img class="porto-lazyload img-icon" alt="icon" src="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/themes/porto/images/lazy.png" data-oi="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/p-icon.jpg" width="63" height="63" /></div></div><div class="porto-sicon-header"><h3 class="porto-sicon-title" style="font-weight:700;font-size:35px;line-height:26px;letter-spacing:0;color:#212529;margin-bottom:8px;">240+</h3><p style="font-weight:700;font-size:14px;line-height:26px;color:#212529;">Satisfied Clients</p></div> <!-- header --></div><!-- porto-sicon-box --></div></div><div class="vc_column_container col-md-7 col-12"><div class="wpb_wrapper vc_column-inner"><p  class="vc_custom_heading mb-0 vc_custom_1651277124657 align-left">Cras a elit sit amet leo accumsan volutpat. Suspendisse.</p></div></div></div><div class="vc_btn3-container  custom-btn-style-1 custom-btn-primary mb-0 vc_btn3-inline" >
	<a  data-appear-animation="fadeInUp"  data-appear-animation-delay="1000" class="vc_btn3 vc_btn3-shape-default wpb_custom_4eba9bcc8f6c36e45e1d476fc3d9024c btn btn-md btn-primary" style="font-size:15.4px; font-weight:600; padding:12px 28px;" href="https://www.portotheme.com/wordpress/porto/business-consulting3/contact-us/" title="Contact Us">Get a Quote</a>	</div>
</div></div></div></div></div><div class="vc_row wpb_row row top-row pt-5 mt-5 mb-4"><div class="vc_column_container col-md-12"><div class="wpb_wrapper vc_column-inner"><div class="porto-carousel owl-carousel has-ccols ccols-xl-7 ccols-lg-5 ccols-md-3 ccols-sm-3 ccols-1 custom-carousel-1 carousel-center-active-item custom-dot-type-1 wpb_custom_c86c2fb53cae9eced42d4b8900a042f3" data-plugin-options="{&quot;stagePadding&quot;:0,&quot;margin&quot;:0,&quot;autoplay&quot;:false,&quot;mouseDrag&quot;:true,&quot;touchDrag&quot;:true,&quot;autoplayTimeout&quot;:5000,&quot;autoplayHoverPause&quot;:false,&quot;items&quot;:7,&quot;lg&quot;:5,&quot;md&quot;:3,&quot;sm&quot;:3,&quot;xs&quot;:1,&quot;nav&quot;:false,&quot;dots&quot;:&quot;yes&quot;,&quot;animateIn&quot;:&quot;fadeInUp&quot;,&quot;animateOut&quot;:&quot;&quot;,&quot;loop&quot;:&quot;yes&quot;,&quot;center&quot;:&quot;yes&quot;,&quot;video&quot;:false,&quot;lazyLoad&quot;:false,&quot;fullscreen&quot;:false}">
	<div class="wpb_single_image wpb_content_element vc_align_center   mw-90">
		<div class="wpb_wrapper">
			
			<div class="vc_single_image-wrapper   vc_box_border_grey"><img width="197" height="117" src="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/porto_placeholders/100x59.jpg" data-oi="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/logo-15.png" class="porto-lazyload vc_single_image-img attachment-full" alt="logo" title="logo-15" /></div>
		</div>
	</div>

	<div class="wpb_single_image wpb_content_element vc_align_center   mw-140">
		<div class="wpb_wrapper">
			
			<div class="vc_single_image-wrapper   vc_box_border_grey"><img width="281" height="77" src="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/porto_placeholders/100x27.jpg" data-oi="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/logo-14.png" class="porto-lazyload vc_single_image-img attachment-full" alt="logo" title="logo-14" /></div>
		</div>
	</div>

	<div class="wpb_single_image wpb_content_element vc_align_center   mw-100">
		<div class="wpb_wrapper">
			
			<div class="vc_single_image-wrapper   vc_box_border_grey"><img width="296" height="115" src="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/porto_placeholders/100x38.jpg" data-oi="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/logo-13.png" class="porto-lazyload vc_single_image-img attachment-full" alt="logo" title="logo-13" /></div>
		</div>
	</div>

	<div class="wpb_single_image wpb_content_element vc_align_center   mw-100">
		<div class="wpb_wrapper">
			
			<div class="vc_single_image-wrapper   vc_box_border_grey"><img width="185" height="71" src="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/porto_placeholders/100x38.jpg" data-oi="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/logo-12.png" class="porto-lazyload vc_single_image-img attachment-full" alt="logo" title="logo-12" /></div>
		</div>
	</div>

	<div class="wpb_single_image wpb_content_element vc_align_center   mw-100">
		<div class="wpb_wrapper">
			
			<div class="vc_single_image-wrapper   vc_box_border_grey"><img width="402" height="126" src="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/porto_placeholders/100x31.jpg" data-oi="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/logo-11.png" class="porto-lazyload vc_single_image-img attachment-full" alt="logo" title="logo-11" srcset="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/porto_placeholders/100x31.jpg 100w" data-srcset="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/logo-11.png 402w, https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/logo-11-400x126.png 400w, https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/logo-11-367x115.png 367w" sizes="(max-width: 402px) 100vw, 402px" /></div>
		</div>
	</div>

	<div class="wpb_single_image wpb_content_element vc_align_center   mw-140">
		<div class="wpb_wrapper">
			
			<div class="vc_single_image-wrapper   vc_box_border_grey"><img width="302" height="34" src="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/porto_placeholders/100x11.jpg" data-oi="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/logo-10.png" class="porto-lazyload vc_single_image-img attachment-full" alt="logo" title="logo-10" /></div>
		</div>
	</div>

	<div class="wpb_single_image wpb_content_element vc_align_center   mw-100">
		<div class="wpb_wrapper">
			
			<div class="vc_single_image-wrapper   vc_box_border_grey"><img width="323" height="84" src="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/porto_placeholders/100x26.jpg" data-oi="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/logo-9.png" class="porto-lazyload vc_single_image-img attachment-full" alt="logo" title="logo-9" /></div>
		</div>
	</div>

	<div class="wpb_single_image wpb_content_element vc_align_center   mw-90">
		<div class="wpb_wrapper">
			
			<div class="vc_single_image-wrapper   vc_box_border_grey"><img width="134" height="71" src="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/porto_placeholders/100x52.jpg" data-oi="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/logo-8.png" class="porto-lazyload vc_single_image-img attachment-full" alt="logo" title="logo-8" /></div>
		</div>
	</div>
</div></div></div></div><div class="vc_row wpb_row top-row position-relative pb-5 vc_custom_1613050388638 vc_row-has-fill porto-inner-container"><div class="porto-wrap-container container"><div class="row"><div class="mx-auto vc_column_container col-md-12 col-xl-10 col-lg-11"><div class="wpb_wrapper vc_column-inner"><h4 style="font-size: 16.8px;line-height: 1.5;text-align: center;letter-spacing:2.5px" data-appear-animation="fadeInUp" data-appear-animation-delay="100" class="vc_custom_heading custom-highlight-1 custom-weight-1 text-primary mb-2 mt-4"><strong>WHAT WE DO</strong></h4><h3 style="font-size: 35px;line-height: 1.3;text-align: center;font-weight:600;letter-spacing:-.05em" data-appear-animation="fadeInUp" data-appear-animation-delay="250" class="vc_custom_heading text-dark mb-3 pb-1">Our Premium Services</h3><p style="font-size: 15.4px;text-align: center" data-appear-animation="fadeInUp" data-appear-animation-delay="500" class="vc_custom_heading m-b-lg">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis ultrices non. Cras a elit sit amet leo acun volutpat. Suspendisse hendrerit vehicula leo, vel efficitur fel.</p></div></div><div class="position-static vc_column_container col-md-6"><div class="wpb_wrapper vc_column-inner">
	<div class="wpb_raw_code wpb_content_element wpb_raw_html shape-divider h-123 mb-0" >
		<div class="wpb_wrapper">
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 123" preserveAspectRatio="none">
    <polygon fill="#F3F3F3" points="0,90 221,60 563,88 931,35 1408,93 1920,41 1920,-1 0,-1 "></polygon>
    <polygon fill="#FFFFFF" points="0,75 219,44 563,72 930,19 1408,77 1920,25 1920,-1 0,-1 "></polygon>
</svg>
		</div>
	</div>
</div></div><div class="text-center vc_column_container col-md-12" data-appear-animation="fadeInUp" data-appear-animation-delay="1000"><div class="wpb_wrapper vc_column-inner"><div class="vc_row wpb_row vc_inner row justify-content-center text-start p-b-sm mb-4 vc_column-gap-20"><div class="custom-service-item custom-link-hover-effects custom-box-shadow-2 m-b-xs p-sm vc_column_container col-md-6 col-lg-4 col-9"><div class="wpb_wrapper vc_column-inner"><a class="porto-sicon-box-link" href="https://www.portotheme.com/wordpress/porto/business-consulting3/services/sales-marketing/" title='Sales &amp; Marketing'><div class="porto-sicon-box svg-fill-color-primary custom-crooked-line mb-0  wpb_custom_1efe903570d178ff0a9b7bfa5febd3a4 style_1 default-icon"><div class="porto-sicon-default"><div id="porto-icon-1850949266290d1c573984" class="porto-just-icon-wrapper porto-sicon-img" style="font-size: 393px;"><img class="porto-lazyload img-icon" alt="service" src="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/porto_placeholders/100x52.jpg" data-oi="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/services-1.jpg" width="393" height="205" /></div></div><div class="porto-sicon-header"><h3 class="porto-sicon-title" style="font-weight:600;font-size:25.2px;line-height:27px;letter-spacing:-0.05em;">Sales &amp; Marketing</h3></div> <!-- header --></div><!-- porto-sicon-box --></a><a class="porto-sicon-box-link" href="https://www.portotheme.com/wordpress/porto/business-consulting3/services/sales-marketing/" title='Sales &amp; Marketing'><div class="porto-sicon-box  vc_custom_1613070190936 mb-0 bg-white  wpb_custom_1efe903570d178ff0a9b7bfa5febd3a4 style_1 heading-right-icon"><div class="porto-sicon-header"><p style="color:#777777;">Cras a elit sit amet leo accumsan. Suspendisse hendrerit.</p></div> <!-- header --><div class="porto-sicon-heading-right" ><div class="porto-just-icon-wrapper porto-icon none" style="color:#f04c23;font-size:35px;"><i class="porto-icon-long-arrow-alt"></i></div></div></div><!-- porto-sicon-box --></a></div></div><div class="custom-service-item custom-link-hover-effects custom-box-shadow-2 m-b-xs p-sm vc_column_container col-md-6 col-lg-4 col-9"><div class="wpb_wrapper vc_column-inner"><a class="porto-sicon-box-link" href="https://www.portotheme.com/wordpress/porto/business-consulting3/services/strategic-planning/" title='Sales &amp; Marketing'><div class="porto-sicon-box svg-fill-color-primary custom-crooked-line mb-0  wpb_custom_1efe903570d178ff0a9b7bfa5febd3a4 style_1 default-icon"><div class="porto-sicon-default"><div id="porto-icon-2871837626290d1c5740a4" class="porto-just-icon-wrapper porto-sicon-img" style="font-size: 393px;"><img class="porto-lazyload img-icon" alt="service" src="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/porto_placeholders/100x52.jpg" data-oi="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/services-2.jpg" width="393" height="205" /></div></div><div class="porto-sicon-header"><h3 class="porto-sicon-title" style="font-weight:600;font-size:25.2px;line-height:27px;letter-spacing:-0.05em;">Strategic Planning</h3></div> <!-- header --></div><!-- porto-sicon-box --></a><a class="porto-sicon-box-link" href="https://www.portotheme.com/wordpress/porto/business-consulting3/services/sales-marketing/" title='Sales &amp; Marketing'><div class="porto-sicon-box  vc_custom_1613070190936 mb-0 bg-white  wpb_custom_1efe903570d178ff0a9b7bfa5febd3a4 style_1 heading-right-icon"><div class="porto-sicon-header"><p style="color:#777777;">Cras a elit sit amet leo accumsan. Suspendisse hendrerit.</p></div> <!-- header --><div class="porto-sicon-heading-right" ><div class="porto-just-icon-wrapper porto-icon none" style="color:#f04c23;font-size:35px;"><i class="porto-icon-long-arrow-alt"></i></div></div></div><!-- porto-sicon-box --></a></div></div><div class="custom-service-item custom-link-hover-effects custom-box-shadow-2 m-b-xs p-sm vc_column_container col-md-6 col-lg-4 col-9"><div class="wpb_wrapper vc_column-inner"><a class="porto-sicon-box-link" href="https://www.portotheme.com/wordpress/porto/business-consulting3/services/operations/" title='Sales &amp; Marketing'><div class="porto-sicon-box svg-fill-color-primary custom-crooked-line mb-0  wpb_custom_1efe903570d178ff0a9b7bfa5febd3a4 style_1 default-icon"><div class="porto-sicon-default"><div id="porto-icon-17100359456290d1c57475b" class="porto-just-icon-wrapper porto-sicon-img" style="font-size: 393px;"><img class="porto-lazyload img-icon" alt="service" src="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/porto_placeholders/100x52.jpg" data-oi="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/services-3.jpg" width="393" height="205" /></div></div><div class="porto-sicon-header"><h3 class="porto-sicon-title" style="font-weight:600;font-size:25.2px;line-height:27px;letter-spacing:-0.05em;">Operations</h3></div> <!-- header --></div><!-- porto-sicon-box --></a><a class="porto-sicon-box-link" href="https://www.portotheme.com/wordpress/porto/business-consulting3/services/sales-marketing/" title='Sales &amp; Marketing'><div class="porto-sicon-box  vc_custom_1613070190936 mb-0 bg-white  wpb_custom_1efe903570d178ff0a9b7bfa5febd3a4 style_1 heading-right-icon"><div class="porto-sicon-header"><p style="color:#777777;">Cras a elit sit amet leo accumsan. Suspendisse hendrerit.</p></div> <!-- header --><div class="porto-sicon-heading-right" ><div class="porto-just-icon-wrapper porto-icon none" style="color:#f04c23;font-size:35px;"><i class="porto-icon-long-arrow-alt"></i></div></div></div><!-- porto-sicon-box --></a></div></div><div class="custom-service-item custom-link-hover-effects custom-box-shadow-2 m-b-xs p-sm vc_column_container col-md-6 col-lg-4 col-9"><div class="wpb_wrapper vc_column-inner"><a class="porto-sicon-box-link" href="https://www.portotheme.com/wordpress/porto/business-consulting3/services/cost-transformation/" title='Sales &amp; Marketing'><div class="porto-sicon-box svg-fill-color-primary custom-crooked-line mb-0  wpb_custom_1efe903570d178ff0a9b7bfa5febd3a4 style_1 default-icon"><div class="porto-sicon-default"><div id="porto-icon-19233325926290d1c574d96" class="porto-just-icon-wrapper porto-sicon-img" style="font-size: 393px;"><img class="porto-lazyload img-icon" alt="service" src="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/porto_placeholders/100x52.jpg" data-oi="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/services-4.jpg" width="393" height="205" /></div></div><div class="porto-sicon-header"><h3 class="porto-sicon-title" style="font-weight:600;font-size:25.2px;line-height:27px;letter-spacing:-0.05em;">Cost Transformation</h3></div> <!-- header --></div><!-- porto-sicon-box --></a><a class="porto-sicon-box-link" href="https://www.portotheme.com/wordpress/porto/business-consulting3/services/sales-marketing/" title='Sales &amp; Marketing'><div class="porto-sicon-box  vc_custom_1613070190936 mb-0 bg-white  wpb_custom_1efe903570d178ff0a9b7bfa5febd3a4 style_1 heading-right-icon"><div class="porto-sicon-header"><p style="color:#777777;">Cras a elit sit amet leo accumsan. Suspendisse hendrerit.</p></div> <!-- header --><div class="porto-sicon-heading-right" ><div class="porto-just-icon-wrapper porto-icon none" style="color:#f04c23;font-size:35px;"><i class="porto-icon-long-arrow-alt"></i></div></div></div><!-- porto-sicon-box --></a></div></div><div class="custom-service-item custom-link-hover-effects custom-box-shadow-2 m-b-xs p-sm vc_column_container col-md-6 col-lg-4 col-9"><div class="wpb_wrapper vc_column-inner"><a class="porto-sicon-box-link" href="https://www.portotheme.com/wordpress/porto/business-consulting3/services/digital-marketing/" title='Sales &amp; Marketing'><div class="porto-sicon-box svg-fill-color-primary custom-crooked-line mb-0  wpb_custom_1efe903570d178ff0a9b7bfa5febd3a4 style_1 default-icon"><div class="porto-sicon-default"><div id="porto-icon-10671121536290d1c57541e" class="porto-just-icon-wrapper porto-sicon-img" style="font-size: 393px;"><img class="porto-lazyload img-icon" alt="service" src="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/porto_placeholders/100x52.jpg" data-oi="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/services-5.jpg" width="393" height="205" /></div></div><div class="porto-sicon-header"><h3 class="porto-sicon-title" style="font-weight:600;font-size:25.2px;line-height:27px;letter-spacing:-0.05em;">Digital Marketing</h3></div> <!-- header --></div><!-- porto-sicon-box --></a><a class="porto-sicon-box-link" href="https://www.portotheme.com/wordpress/porto/business-consulting3/services/sales-marketing/" title='Sales &amp; Marketing'><div class="porto-sicon-box  vc_custom_1613070190936 mb-0 bg-white  wpb_custom_1efe903570d178ff0a9b7bfa5febd3a4 style_1 heading-right-icon"><div class="porto-sicon-header"><p style="color:#777777;">Cras a elit sit amet leo accumsan. Suspendisse hendrerit.</p></div> <!-- header --><div class="porto-sicon-heading-right" ><div class="porto-just-icon-wrapper porto-icon none" style="color:#f04c23;font-size:35px;"><i class="porto-icon-long-arrow-alt"></i></div></div></div><!-- porto-sicon-box --></a></div></div><div class="custom-service-item custom-link-hover-effects custom-box-shadow-2 m-b-xs p-sm vc_column_container col-md-6 col-lg-4 col-9"><div class="wpb_wrapper vc_column-inner"><a class="porto-sicon-box-link" href="https://www.portotheme.com/wordpress/porto/business-consulting3/services/automation/" title='Sales &amp; Marketing'><div class="porto-sicon-box svg-fill-color-primary custom-crooked-line mb-0  wpb_custom_1efe903570d178ff0a9b7bfa5febd3a4 style_1 default-icon"><div class="porto-sicon-default"><div id="porto-icon-10991963956290d1c57602f" class="porto-just-icon-wrapper porto-sicon-img" style="font-size: 393px;"><img class="porto-lazyload img-icon" alt="service" src="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/porto_placeholders/100x52.jpg" data-oi="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/services-6.jpg" width="393" height="205" /></div></div><div class="porto-sicon-header"><h3 class="porto-sicon-title" style="font-weight:600;font-size:25.2px;line-height:27px;letter-spacing:-0.05em;">Automation</h3></div> <!-- header --></div><!-- porto-sicon-box --></a><a class="porto-sicon-box-link" href="https://www.portotheme.com/wordpress/porto/business-consulting3/services/sales-marketing/" title='Sales &amp; Marketing'><div class="porto-sicon-box  vc_custom_1613070190936 mb-0 bg-white  wpb_custom_1efe903570d178ff0a9b7bfa5febd3a4 style_1 heading-right-icon"><div class="porto-sicon-header"><p style="color:#777777;">Cras a elit sit amet leo accumsan. Suspendisse hendrerit.</p></div> <!-- header --><div class="porto-sicon-heading-right" ><div class="porto-just-icon-wrapper porto-icon none" style="color:#f04c23;font-size:35px;"><i class="porto-icon-long-arrow-alt"></i></div></div></div><!-- porto-sicon-box --></a></div></div></div><div class="vc_btn3-container  custom-btn-style-1 custom-btn-primary mb-0 vc_btn3-inline" >
	<a class="vc_btn3 vc_btn3-shape-default wpb_custom_4eba9bcc8f6c36e45e1d476fc3d9024c btn btn-md btn-primary" style="font-size:15.4px; font-weight:600; padding:12px 28px;" href="https://www.portotheme.com/wordpress/porto/business-consulting3/services/" title="Contact Us">All Services</a>	</div>
</div></div></div></div></div><div class="vc_row wpb_row top-row position-relative overflow-hidden custom-banner-size vc_custom_1613388304642 vc_row-has-fill porto-inner-container"><div class="porto-wrap-container container"><div class="row"><div class="position-static pb-5 mb-5 vc_column_container col-md-12"><div class="wpb_wrapper vc_column-inner">
	<div class="wpb_raw_code wpb_content_element wpb_raw_html shape-divider shape-divider-reverse h-102 z-index-3" >
		<div class="wpb_wrapper">
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 102" preserveAspectRatio="none">
    <polygon fill="#F3F3F3" points="0,65 220,35 562,63 931,10 1410,68 1920,16 1920,103 0,103 "></polygon>
    <polygon fill="#EDEDED" points="0,82 219,51 562,78 931,26 1409,83 1920,32 1920,103 0,103 "></polygon>
</svg>
		</div>
	</div>
</div></div><div class="align-self-center vc_column_container col-md-6"><div class="wpb_wrapper vc_column-inner"><h2 style="font-size: 8.5em;line-height: 1;font-weight:700;letter-spacing:-0.05em" data-plugin-float-element data-plugin-options="{&quot;startPos&quot;:&quot;top&quot;,&quot;speed&quot;:&quot;9.6&quot;,&quot;transition&quot;:true,&quot;horizontal&quot;:true,&quot;transitionDuration&quot;:1000}" class="vc_custom_heading position-relative z-index-3 pe-xl-5 me-3 mb-0 d-none d-lg-block custom-text-background ws-nowrap float-xl-end vc_custom_1613822430918 align-left">BENEFITS</h2></div></div><div class="vc_column_container col-md-12 col-lg-6"><div class="wpb_wrapper vc_column-inner"><h4 style="font-size: 16.8px;line-height: 1.5;letter-spacing:2.5px" data-appear-animation="fadeInUp" data-appear-animation-delay="100" class="vc_custom_heading custom-highlight-1 custom-weight-1 text-primary mb-2 align-left"><strong>WHY US</strong></h4><h3 style="font-size: 35px;line-height: 1.3;font-weight:500;letter-spacing:0" data-appear-animation="fadeInUp" data-appear-animation-delay="250" class="vc_custom_heading text-white mb-3 pb-1 align-left">Learn Here The Main Reasons Why You Should Choose Us</h3><p style="font-size: 15.4px" data-appear-animation="fadeInUp" data-appear-animation-delay="500" class="vc_custom_heading pb-1 mb-4 align-left">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis ultrices non.</p><div class="porto-sicon-box pb-1 m-b-sm ps-0 pe-lg-5  wpb_custom_1efe903570d178ff0a9b7bfa5febd3a4 style_1 default-icon" data-appear-animation="fadeInUp" data-appear-animation-delay="750"><div class="porto-sicon-default"><div class="porto-just-icon-wrapper porto-icon advanced" style="color:#ffffff;background:#5a6267;width:48px;height:48px;line-height:48px;border-radius:500px;font-size:16.8px;margin-right:17px;"><i class="fas fa-check"></i></div></div><div class="porto-sicon-header"><h3 class="porto-sicon-title" style="font-weight:400;font-size:15.4px;line-height:24px;letter-spacing:0;color:#777777;">We wil identify where you're getting off-track in all areas and not just</h3></div> <!-- header --></div><!-- porto-sicon-box --><div class="porto-sicon-box pb-1 m-b-sm ps-0 pe-lg-5  wpb_custom_1efe903570d178ff0a9b7bfa5febd3a4 style_1 default-icon" data-appear-animation="fadeInUp" data-appear-animation-delay="1000"><div class="porto-sicon-default"><div class="porto-just-icon-wrapper porto-icon advanced" style="color:#ffffff;background:#5a6267;width:48px;height:48px;line-height:48px;border-radius:500px;font-size:16.8px;margin-right:17px;"><i class="fas fa-check"></i></div></div><div class="porto-sicon-header"><h3 class="porto-sicon-title" style="font-weight:400;font-size:15.4px;line-height:24px;letter-spacing:0;color:#777777;">We create a program that accelerates your strategic execution and growth goals.</h3></div> <!-- header --></div><!-- porto-sicon-box --><div class="porto-sicon-box m-b-sm ps-0 pe-lg-5  wpb_custom_1efe903570d178ff0a9b7bfa5febd3a4 style_1 default-icon" data-appear-animation="fadeInUp" data-appear-animation-delay="1250"><div class="porto-sicon-default"><div class="porto-just-icon-wrapper porto-icon advanced" style="color:#ffffff;background:#5a6267;width:48px;height:48px;line-height:48px;border-radius:500px;font-size:16.8px;margin-right:17px;"><i class="fas fa-check"></i></div></div><div class="porto-sicon-header"><h3 class="porto-sicon-title" style="font-weight:400;font-size:15.4px;line-height:24px;letter-spacing:0;color:#777777;">Consistently hit strategic objectives and revenue targets, and grow, year over year.</h3></div> <!-- header --></div><!-- porto-sicon-box --></div></div><div data-vc-parallax="1.2" data-vc-parallax-image="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/parallax-1.jpg" class="overlay-color-primary custom-overlay d-none d-lg-block vc_column_container col-md-6 vc_general vc_parallax vc_parallax-content-moving"><div class="wpb_wrapper vc_column-inner"></div></div></div></div></div><div class="vc_row wpb_row top-row py-4 my-5 mb-lg-0 my-xl-5 porto-inner-container"><div class="porto-wrap-container container"><div class="row align-items-center"><div class="vc_column_container col-md-12 col-lg-7"><div class="wpb_wrapper vc_column-inner"><h2 style="font-size: 35px;line-height: 1.3;font-weight:600;letter-spacing:-0.05em" class="vc_custom_heading mb-4 align-left">Skills That Make a Meaningful Difference for Your Business</h2><p style="font-size: 15.4px" class="vc_custom_heading pb-3 mb-4 align-left">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis ultrices non. Cras a elit sit amet leo acun volutpat.</p><div class="vc_progress_bar wpb_content_element  mb-4"><div class="progress-label"><span>STRATEGY ACCELERATION</span></div><div class="vc_general vc_single_bar progress progress-sm"><span class="vc_bar progress-bar " data-percentage-value="90" data-value="90" style="background-color:#f04c23;"> <span class="vc_label_units">90%</span></span></div><div class="progress-label"><span>REVENUE GROWTH</span></div><div class="vc_general vc_single_bar progress progress-sm"><span class="vc_bar progress-bar " data-percentage-value="80" data-value="80" style="background-color:#f04c23;"> <span class="vc_label_units">80%</span></span></div><div class="progress-label"><span>FIREWALK SALES</span></div><div class="vc_general vc_single_bar progress progress-sm"><span class="vc_bar progress-bar " data-percentage-value="50" data-value="50" style="background-color:#f04c23;"> <span class="vc_label_units">50%</span></span></div></div></div></div><div class="vc_column_container col-md-12 col-lg-5"><div class="wpb_wrapper vc_column-inner">
	<div class="wpb_single_image wpb_content_element vc_align_center   mb-0">
		<div class="wpb_wrapper">
			
			<div class="vc_single_image-wrapper   vc_box_border_grey"><img width="483" height="271" src="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/porto_placeholders/100x56.jpg" data-oi="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/generic-4.jpg" class="porto-lazyload vc_single_image-img attachment-full" alt="generic" title="generic-4" srcset="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/porto_placeholders/100x56.jpg 100w" data-srcset="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/generic-4.jpg 483w, https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/generic-4-400x224.jpg 400w, https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/generic-4-367x206.jpg 367w" sizes="(max-width: 483px) 100vw, 483px" /></div>
		</div>
	</div>
</div></div></div></div></div><div class="vc_row wpb_row row top-row position-relative pb-5 vc_custom_1613403475479 vc_row-has-fill"><div class="mx-auto vc_column_container col-md-12 col-xl-6 col-lg-11"><div class="wpb_wrapper vc_column-inner"><h4 style="font-size: 16.8px;line-height: 1.5;text-align: center;letter-spacing:2.5px" data-appear-animation="fadeInUp" data-appear-animation-delay="100" class="vc_custom_heading custom-highlight-1 custom-weight-1 text-primary mb-2 mt-4"><strong>THE MEMBERS</strong></h4><h3 style="font-size: 35px;line-height: 1.3;text-align: center;font-weight:600;letter-spacing:-.05em" data-appear-animation="fadeInUp" data-appear-animation-delay="250" class="vc_custom_heading text-dark mb-4">Our Amazing Team</h3><p style="font-size: 15.4px;text-align: center" data-appear-animation="fadeInUp" data-appear-animation-delay="500" class="vc_custom_heading pb-3 mb-4">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis ultrices non. Cras a elit sit amet leo acun volutpat. Suspendisse hendrerit vehicula leo, vel efficitur fel.</p></div></div><div class="position-static vc_column_container col-md-12"><div class="wpb_wrapper vc_column-inner">
	<div class="wpb_raw_code wpb_content_element wpb_raw_html shape-divider h-123 mb-0" >
		<div class="wpb_wrapper">
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 123" preserveAspectRatio="none">
    <polygon fill="#F3F3F3" points="0,90 221,60 563,88 931,35 1408,93 1920,41 1920,-1 0,-1 "></polygon>
    <polygon fill="#FFFFFF" points="0,75 219,44 563,72 930,19 1408,77 1920,25 1920,-1 0,-1 "></polygon>
</svg>
		</div>
	</div>
</div></div><div class="px-0 vc_column_container col-md-12" data-appear-animation="fadeInUp" data-appear-animation-delay="1000"><div class="wpb_wrapper vc_column-inner"><div class="porto-carousel owl-carousel has-ccols has-ccols-spacing ccols-xl-5 ccols-lg-4 ccols-md-3 ccols-sm-2 ccols-1 custom-dot-type-1 mb-0 wpb_custom_324659f3639fc50e0d07e21da55ccd7b" data-plugin-options="{&quot;stagePadding&quot;:0,&quot;margin&quot;:20,&quot;autoplay&quot;:false,&quot;mouseDrag&quot;:true,&quot;touchDrag&quot;:true,&quot;autoplayTimeout&quot;:5000,&quot;autoplayHoverPause&quot;:false,&quot;items&quot;:5,&quot;lg&quot;:4,&quot;md&quot;:3,&quot;sm&quot;:2,&quot;xs&quot;:1,&quot;nav&quot;:false,&quot;dots&quot;:&quot;yes&quot;,&quot;animateIn&quot;:&quot;&quot;,&quot;animateOut&quot;:&quot;&quot;,&quot;loop&quot;:false,&quot;center&quot;:false,&quot;video&quot;:false,&quot;lazyLoad&quot;:false,&quot;fullscreen&quot;:false}"><a class="porto-sicon-box-link" href="https://www.portotheme.com/wordpress/porto/business-consulting3/team/" title='Sales &amp; Marketing'><div class="porto-sicon-box custom-team-pos svg-fill-color-primary custom-crooked-line mb-0 w-100  wpb_custom_1efe903570d178ff0a9b7bfa5febd3a4 style_1 default-icon flex-wrap"><div class="porto-sicon-default"><div id="porto-icon-15187972416290d1c57accf" class="porto-just-icon-wrapper porto-sicon-img" style="font-size: 393px;"><img class="porto-lazyload img-icon" alt="Member Avatar" src="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/porto_placeholders/100x94.jpg" data-oi="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/team-1.jpg" width="352" height="333" /></div></div><div class="porto-sicon-header"><h3 class="porto-sicon-title" style="font-weight:600;font-size:25.2px;line-height:27px;letter-spacing:-0.05em;">member</h3></div> <!-- header --><div class="porto-sicon-description" style="font-weight:400;font-size:15.4px;line-height:26px;color:#777777;">
<h4 class="text-color-hover-primary font-weight-semibold custom-text-member mb-0">John Doe</h4>
<p>CEO and Founder</div> <!-- description --></div><!-- porto-sicon-box --></a><a class="porto-sicon-box-link" href="https://www.portotheme.com/wordpress/porto/business-consulting3/team/" title='Sales &amp; Marketing'><div class="porto-sicon-box custom-team-pos svg-fill-color-primary custom-crooked-line mb-0 w-100  wpb_custom_1efe903570d178ff0a9b7bfa5febd3a4 style_1 default-icon flex-wrap"><div class="porto-sicon-default"><div id="porto-icon-14522420116290d1c57b0e1" class="porto-just-icon-wrapper porto-sicon-img" style="font-size: 393px;"><img class="porto-lazyload img-icon" alt="Member Avatar" src="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/porto_placeholders/100x94.jpg" data-oi="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/team-2.jpg" width="352" height="333" /></div></div><div class="porto-sicon-header"><h3 class="porto-sicon-title" style="font-weight:600;font-size:25.2px;line-height:27px;letter-spacing:-0.05em;">member</h3></div> <!-- header --><div class="porto-sicon-description" style="font-weight:400;font-size:15.4px;line-height:26px;color:#777777;">
<h4 class="text-color-hover-primary font-weight-semibold custom-text-member mb-0">Robert Doe</h4>
<p>CEO and Founder</div> <!-- description --></div><!-- porto-sicon-box --></a><a class="porto-sicon-box-link" href="https://www.portotheme.com/wordpress/porto/business-consulting3/team/" title='Sales &amp; Marketing'><div class="porto-sicon-box custom-team-pos svg-fill-color-primary custom-crooked-line mb-0 w-100  wpb_custom_1efe903570d178ff0a9b7bfa5febd3a4 style_1 default-icon flex-wrap"><div class="porto-sicon-default"><div id="porto-icon-4791149226290d1c57b4d2" class="porto-just-icon-wrapper porto-sicon-img" style="font-size: 393px;"><img class="porto-lazyload img-icon" alt="Member Avatar" src="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/porto_placeholders/100x94.jpg" data-oi="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/team-3.jpg" width="352" height="333" /></div></div><div class="porto-sicon-header"><h3 class="porto-sicon-title" style="font-weight:600;font-size:25.2px;line-height:27px;letter-spacing:-0.05em;">member</h3></div> <!-- header --><div class="porto-sicon-description" style="font-weight:400;font-size:15.4px;line-height:26px;color:#777777;">
<h4 class="text-color-hover-primary font-weight-semibold custom-text-member mb-0">Jessica Doe</h4>
<p>CEO and Founder</div> <!-- description --></div><!-- porto-sicon-box --></a><a class="porto-sicon-box-link" href="https://www.portotheme.com/wordpress/porto/business-consulting3/team/" title='Sales &amp; Marketing'><div class="porto-sicon-box custom-team-pos svg-fill-color-primary custom-crooked-line mb-0 w-100  wpb_custom_1efe903570d178ff0a9b7bfa5febd3a4 style_1 default-icon flex-wrap"><div class="porto-sicon-default"><div id="porto-icon-4103034776290d1c57b907" class="porto-just-icon-wrapper porto-sicon-img" style="font-size: 393px;"><img class="porto-lazyload img-icon" alt="Member Avatar" src="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/porto_placeholders/100x94.jpg" data-oi="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/team-4.jpg" width="352" height="333" /></div></div><div class="porto-sicon-header"><h3 class="porto-sicon-title" style="font-weight:600;font-size:25.2px;line-height:27px;letter-spacing:-0.05em;">member</h3></div> <!-- header --><div class="porto-sicon-description" style="font-weight:400;font-size:15.4px;line-height:26px;color:#777777;">
<h4 class="text-color-hover-primary font-weight-semibold custom-text-member mb-0">Monica Doe</h4>
<p>CEO and Founder</div> <!-- description --></div><!-- porto-sicon-box --></a><a class="porto-sicon-box-link" href="https://www.portotheme.com/wordpress/porto/business-consulting3/team/" title='Sales &amp; Marketing'><div class="porto-sicon-box custom-team-pos svg-fill-color-primary custom-crooked-line mb-0 w-100  wpb_custom_1efe903570d178ff0a9b7bfa5febd3a4 style_1 default-icon flex-wrap"><div class="porto-sicon-default"><div id="porto-icon-2710984106290d1c57bd2f" class="porto-just-icon-wrapper porto-sicon-img" style="font-size: 393px;"><img class="porto-lazyload img-icon" alt="Member Avatar" src="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/porto_placeholders/100x94.jpg" data-oi="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/team-5.jpg" width="352" height="333" /></div></div><div class="porto-sicon-header"><h3 class="porto-sicon-title" style="font-weight:600;font-size:25.2px;line-height:27px;letter-spacing:-0.05em;">member</h3></div> <!-- header --><div class="porto-sicon-description" style="font-weight:400;font-size:15.4px;line-height:26px;color:#777777;">
<h4 class="text-color-hover-primary font-weight-semibold custom-text-member mb-0">Chris Doe</h4>
<p>CEO and Founder</div> <!-- description --></div><!-- porto-sicon-box --></a><a class="porto-sicon-box-link" href="https://www.portotheme.com/wordpress/porto/business-consulting3/team/" title='Sales &amp; Marketing'><div class="porto-sicon-box custom-team-pos svg-fill-color-primary custom-crooked-line mb-0 w-100  wpb_custom_1efe903570d178ff0a9b7bfa5febd3a4 style_1 default-icon flex-wrap"><div class="porto-sicon-default"><div id="porto-icon-12153957026290d1c57bfbe" class="porto-just-icon-wrapper porto-sicon-img" style="font-size: 393px;"><img class="porto-lazyload img-icon" alt="Member Avatar" src="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/porto_placeholders/100x94.jpg" data-oi="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/team-1.jpg" width="352" height="333" /></div></div><div class="porto-sicon-header"><h3 class="porto-sicon-title" style="font-weight:600;font-size:25.2px;line-height:27px;letter-spacing:-0.05em;">member</h3></div> <!-- header --><div class="porto-sicon-description" style="font-weight:400;font-size:15.4px;line-height:26px;color:#777777;">
<h4 class="text-color-hover-primary font-weight-semibold custom-text-member mb-0">John Doe</h4>
<p>CEO and Founder</div> <!-- description --></div><!-- porto-sicon-box --></a></div></div></div></div><div class="vc_row wpb_row top-row position-relative overflow-hidden custom-banner-size vc_custom_1613432962838 vc_row-has-fill porto-inner-container"><div class="porto-wrap-container container"><div class="row"><div class="position-static pb-5 mb-5 vc_column_container col-md-12"><div class="wpb_wrapper vc_column-inner">
	<div class="wpb_raw_code wpb_content_element wpb_raw_html shape-divider shape-divider-reverse h-102 z-index-3" >
		<div class="wpb_wrapper">
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 102" preserveAspectRatio="none">
    <polygon fill="#F3F3F3" points="0,65 220,35 562,63 931,10 1410,68 1920,16 1920,103 0,103 "></polygon>
    <polygon fill="#EDEDED" points="0,82 219,51 562,78 931,26 1409,83 1920,32 1920,103 0,103 "></polygon>
</svg>
		</div>
	</div>
</div></div><div class="py-4 my-2 ms-md-3 ms-lg-0 vc_column_container col-md-7 col-lg-8"><div class="wpb_wrapper vc_column-inner"><h4 style="font-size: 16.8px;line-height: 1.5;letter-spacing:2.5px" data-appear-animation="fadeInUp" data-appear-animation-delay="100" class="vc_custom_heading custom-highlight-1 custom-weight-1 text-primary mb-2 align-left"><strong>GET IN TOUCH</strong></h4><h3 style="font-size: 35px;line-height: 1.3;font-weight:500;letter-spacing:0" data-appear-animation="fadeInUp" data-appear-animation-delay="250" class="vc_custom_heading text-white mb-3 pb-1 align-left">Send Us a Message and Learn More About Our Services</h3><p style="font-size: 15.4px" data-appear-animation="fadeInUp" data-appear-animation-delay="500" class="vc_custom_heading pb-3 mb-4 align-left">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis ultrices non. Cras a elit sit amet.</p><div role="form" class="wpcf7" id="wpcf7-f324-p9-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
<form action="/wordpress/porto/business-consulting3/#wpcf7-f324-p9-o1" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="324" />
<input type="hidden" name="_wpcf7_version" value="5.4.2" />
<input type="hidden" name="_wpcf7_locale" value="en_US" />
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f324-p9-o1" />
<input type="hidden" name="_wpcf7_container_post" value="9" />
<input type="hidden" name="_wpcf7_posted_data_hash" value="" />
</div>
<div class="mb-3">
    <span class="wpcf7-form-control-wrap text-771"><input type="text" name="text-771" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="* Full Name" /></span>
</div>
<div class="mb-3">
    <span class="wpcf7-form-control-wrap email-406"><input type="email" name="email-406" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" aria-required="true" aria-invalid="false" placeholder="* Email Address" /></span>
</div>
<div class="m-b-xl">
    <span class="wpcf7-form-control-wrap textarea-824"><textarea name="textarea-824" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="* Message"></textarea></span>
</div>
<div class="custom-btn-style-1 custom-btn-primary d-inline-block">
    <input type="submit" value="Send Message" class="wpcf7-form-control wpcf7-submit font-weight-semibold btn-primary" />
</div>
<div class="wpcf7-response-output" aria-hidden="true"></div></form></div></div></div><div data-original="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/background-2.jpg?id=318" class="overlay-color-primary custom-overlay custom-contact h-100 d-none d-md-block vc_column_container col-md-6 vc_custom_1613432624467 porto-lazyload"><div class="wpb_wrapper vc_column-inner"></div></div></div></div></div><div data-original="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/background-3.jpg?id=330" class="vc_row wpb_row top-row vc_custom_1613432994797 vc_row-has-fill porto-inner-container porto-lazyload"><div class="porto-wrap-container container"><div class="row"><div class="vc_column_container col-md-12"><div class="wpb_wrapper vc_column-inner"><h4 style="font-size: 16.8px;line-height: 1.5;text-align: center;letter-spacing:2.5px" data-appear-animation="fadeInUp" data-appear-animation-delay="100" class="vc_custom_heading custom-highlight-1 custom-weight-1 text-primary mb-2 pt-4"><strong>TESTIMONIALS</strong></h4><h3 style="font-size: 35px;line-height: 1.3;text-align: center;font-weight:600;letter-spacing:-1.75px" data-appear-animation="fadeInUp" data-appear-animation-delay="250" class="vc_custom_heading text-dark mb-4 pb-3">What People Say</h3></div></div><div class="mx-auto vc_column_container col-md-12 col-lg-11" data-appear-animation="fadeInUp" data-appear-animation-delay="750"><div class="wpb_wrapper vc_column-inner"><div class="porto-carousel owl-carousel has-ccols ccols-1 box-shadow-4 mb-4 bg-white wpb_custom_c86c2fb53cae9eced42d4b8900a042f3 nav-pos-outside nav-style-1" data-plugin-options="{&quot;stagePadding&quot;:0,&quot;margin&quot;:0,&quot;autoplay&quot;:false,&quot;mouseDrag&quot;:true,&quot;touchDrag&quot;:true,&quot;autoplayTimeout&quot;:5000,&quot;autoplayHoverPause&quot;:false,&quot;items&quot;:1,&quot;lg&quot;:1,&quot;md&quot;:1,&quot;sm&quot;:1,&quot;xs&quot;:1,&quot;nav&quot;:&quot;yes&quot;,&quot;dots&quot;:false,&quot;animateIn&quot;:&quot;&quot;,&quot;animateOut&quot;:&quot;&quot;,&quot;loop&quot;:false,&quot;center&quot;:false,&quot;video&quot;:false,&quot;lazyLoad&quot;:false,&quot;fullscreen&quot;:false}"><div class="porto-testimonial wpb_content_element  py-5 px-lg-5 bg-white"><div class="testimonial testimonial-style-6"><blockquote><p>Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis ultrices non. Cras a elit sit amet leo acun volutpat. Suspendisse hendrerit vehicula leo, vel efficitur fel.</p></blockquote><div class="testimonial-arrow-down"></div><div class="testimonial-author"><img class="img-responsive img-circle" src="https://www.portotheme.com/wordpress/porto/wp-content/uploads/images/business-consulting-3/quote.svg" alt="- John Doe"><p><strong>- John Doe</strong><span>Porto Founder</span></p></div></div></div><div class="porto-testimonial wpb_content_element  py-5 px-lg-5 bg-white"><div class="testimonial testimonial-style-6"><blockquote><p>Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis ultrices non. Cras a elit sit amet leo acun volutpat. Suspendisse hendrerit vehicula leo, vel efficitur fel.</p></blockquote><div class="testimonial-arrow-down"></div><div class="testimonial-author"><img class="porto-lazyload img-responsive img-circle" src="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/themes/porto/images/lazy.png" data-oi="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/quote.jpg" alt="- John Smith" width="40" height="40"><p><strong>- John Smith</strong><span>Porto Founder</span></p></div></div></div></div></div></div></div></div></div><div class="vc_row wpb_row top-row py-5 my-4 porto-inner-container"><div class="porto-wrap-container container"><div class="row"><div class="mx-auto vc_column_container col-md-12 col-lg-10"><div class="wpb_wrapper vc_column-inner"><h4 style="font-size: 16.8px;line-height: 1.5;text-align: center;letter-spacing:2.5px" data-appear-animation="fadeInUp" data-appear-animation-delay="100" class="vc_custom_heading custom-highlight-1 custom-weight-1 text-primary mb-2 pt-3"><strong>THE BLOG</strong></h4><h3 style="font-size: 35px;line-height: 1.3;text-align: center;font-weight:600;letter-spacing:-1.75px" data-appear-animation="fadeInUp" data-appear-animation-delay="250" class="vc_custom_heading text-dark mb-4">Our Recent News</h3><p style="font-size: 15.4px;text-align: center" data-appear-animation="fadeInUp" data-appear-animation-delay="750" class="vc_custom_heading pb-3 mb-4">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis ultrices non. Cras a elit sit amet leo acun volutpat. Suspendisse hendrerit vehicula leo, vel efficitur fel.</p></div></div><div class="vc_column_container col-md-12" data-appear-animation="fadeInUp" data-appear-animation-delay="1000"><div class="wpb_wrapper vc_column-inner"><div id="porto-blog-5235" class="porto-blog wpb_content_element  mb-0">		<div class="blog-posts posts-grid blog-posts-date">
			<div class="posts-container row">
		
<article class="post post-grid col-md-6 col-lg-4 post-title-simple post-348 post type-post status-publish format-standard has-post-thumbnail hentry category-animals category-finance category-sports category-videos">
	<div class="grid-box">
			<div class="post-image single">
		<div class="post-slideshow porto-carousel owl-carousel nav-inside nav-inside-center nav-style-2 show-nav-hover has-ccols ccols-1" data-plugin-options='{"nav":true}'>
											<a href="https://www.portotheme.com/wordpress/porto/business-consulting3/2021/02/15/lorem-ipsum-dolor-sit-a-met-consectetur-3/" aria-label="post image">
								<div class="img-thumbnail">
						<img width="393" height="205" src="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/porto_placeholders/100x52.jpg" data-oi="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/blog-1-393x205.jpg" class="porto-lazyload owl-lazy img-responsive" alt="post" srcset="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/porto_placeholders/100x52.jpg 100w" data-srcset="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/blog-1-393x205.jpg 393w, https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/blog-1-367x192.jpg 367w" sizes="(max-width: 393px) 100vw, 393px" />													<span class="zoom" data-src="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/blog-1.jpg" data-title=""><i class="fas fa-search"></i></span>
											</div>
								</a>
								</div>
		
								<div class="post-date"><span class="day">15</span><span class="month">Feb</span><time datetime="2021-02-15">February 15, 2021</time></div>			</div>

		<!-- Post meta before content -->
		<div class="post-meta"><span class="meta-author"><i class="far fa-user"></i>By <a href="https://www.portotheme.com/wordpress/porto/business-consulting3/author/editor/" title="Posts by John Doe" rel="author">John Doe</a></span><span class="meta-cats"><i class="far fa-folder"></i><a href="https://www.portotheme.com/wordpress/porto/business-consulting3/category/videos/animals/" rel="category tag">Animals</a>, <a href="https://www.portotheme.com/wordpress/porto/business-consulting3/category/finance/" rel="category tag">Finance</a>, <a href="https://www.portotheme.com/wordpress/porto/business-consulting3/category/sports/" rel="category tag">Sports</a>, <a href="https://www.portotheme.com/wordpress/porto/business-consulting3/category/videos/" rel="category tag">Videos</a></span><span class="meta-comments"><i class="far fa-comments"></i><a href="https://www.portotheme.com/wordpress/porto/business-consulting3/2021/02/15/lorem-ipsum-dolor-sit-a-met-consectetur-3/#comments" title="Comment on Lorem ipsum dolor sit a met, consectetur">2 Comments</a></span></div>		<div class="post-content">

			<h4 class="entry-title"><a href="https://www.portotheme.com/wordpress/porto/business-consulting3/2021/02/15/lorem-ipsum-dolor-sit-a-met-consectetur-3/">Lorem ipsum dolor sit a met, consectetur</a></h4>
			<span class="vcard" style="display: none;"><span class="fn"><a href="https://www.portotheme.com/wordpress/porto/business-consulting3/author/editor/" title="Posts by John Doe" rel="author">John Doe</a></span></span><span class="updated" style="display:none">2021-02-19T05:02:42+00:00</span><p class="post-excerpt">
Lorem...</p>					</div>
		<!-- Post meta after content -->
				<div class="clearfix">
			<a class="btn btn-xs btn-default text-xs text-uppercase btn-readmore" href="https://www.portotheme.com/wordpress/porto/business-consulting3/2021/02/15/lorem-ipsum-dolor-sit-a-met-consectetur-3/">Read more...</a>
		</div>
	</div>
</article>

<article class="post post-grid col-md-6 col-lg-4 post-title-simple post-345 post type-post status-publish format-standard has-post-thumbnail hentry category-finance category-sports">
	<div class="grid-box">
			<div class="post-image single">
		<div class="post-slideshow porto-carousel owl-carousel nav-inside nav-inside-center nav-style-2 show-nav-hover has-ccols ccols-1" data-plugin-options='{"nav":true}'>
											<a href="https://www.portotheme.com/wordpress/porto/business-consulting3/2021/02/15/lorem-ipsum-dolor-sit-a-met-consectetur-2/" aria-label="post image">
								<div class="img-thumbnail">
						<img width="393" height="205" src="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/porto_placeholders/100x52.jpg" data-oi="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/blog-2-393x205.jpg" class="porto-lazyload owl-lazy img-responsive" alt="post" srcset="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/porto_placeholders/100x52.jpg 100w" data-srcset="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/blog-2-393x205.jpg 393w, https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/blog-2-367x192.jpg 367w" sizes="(max-width: 393px) 100vw, 393px" />													<span class="zoom" data-src="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/blog-2.jpg" data-title=""><i class="fas fa-search"></i></span>
											</div>
								</a>
								</div>
		
								<div class="post-date"><span class="day">15</span><span class="month">Feb</span><time datetime="2021-02-15">February 15, 2021</time></div>			</div>

		<!-- Post meta before content -->
		<div class="post-meta"><span class="meta-author"><i class="far fa-user"></i>By <a href="https://www.portotheme.com/wordpress/porto/business-consulting3/author/editor/" title="Posts by John Doe" rel="author">John Doe</a></span><span class="meta-cats"><i class="far fa-folder"></i><a href="https://www.portotheme.com/wordpress/porto/business-consulting3/category/finance/" rel="category tag">Finance</a>, <a href="https://www.portotheme.com/wordpress/porto/business-consulting3/category/sports/" rel="category tag">Sports</a></span><span class="meta-comments"><i class="far fa-comments"></i><a href="https://www.portotheme.com/wordpress/porto/business-consulting3/2021/02/15/lorem-ipsum-dolor-sit-a-met-consectetur-2/#respond" title="Comment on Lorem ipsum dolor sit a met, consectetur">0 Comments</a></span></div>		<div class="post-content">

			<h4 class="entry-title"><a href="https://www.portotheme.com/wordpress/porto/business-consulting3/2021/02/15/lorem-ipsum-dolor-sit-a-met-consectetur-2/">Lorem ipsum dolor sit a met, consectetur</a></h4>
			<span class="vcard" style="display: none;"><span class="fn"><a href="https://www.portotheme.com/wordpress/porto/business-consulting3/author/editor/" title="Posts by John Doe" rel="author">John Doe</a></span></span><span class="updated" style="display:none">2021-02-19T05:02:02+00:00</span><p class="post-excerpt">
Lorem...</p>					</div>
		<!-- Post meta after content -->
				<div class="clearfix">
			<a class="btn btn-xs btn-default text-xs text-uppercase btn-readmore" href="https://www.portotheme.com/wordpress/porto/business-consulting3/2021/02/15/lorem-ipsum-dolor-sit-a-met-consectetur-2/">Read more...</a>
		</div>
	</div>
</article>

<article class="post post-grid col-md-6 col-lg-4 post-title-simple post-341 post type-post status-publish format-standard has-post-thumbnail hentry category-finance">
	<div class="grid-box">
			<div class="post-image single">
		<div class="post-slideshow porto-carousel owl-carousel nav-inside nav-inside-center nav-style-2 show-nav-hover has-ccols ccols-1" data-plugin-options='{"nav":true}'>
											<a href="https://www.portotheme.com/wordpress/porto/business-consulting3/2021/02/15/lorem-ipsum-dolor-sit-a-met-consectetur/" aria-label="post image">
								<div class="img-thumbnail">
						<img width="393" height="205" src="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/porto_placeholders/100x52.jpg" data-oi="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/blog-3-393x205.jpg" class="porto-lazyload owl-lazy img-responsive" alt="post" srcset="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/porto_placeholders/100x52.jpg 100w" data-srcset="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/blog-3-393x205.jpg 393w, https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/blog-3-367x192.jpg 367w" sizes="(max-width: 393px) 100vw, 393px" />													<span class="zoom" data-src="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/blog-3.jpg" data-title=""><i class="fas fa-search"></i></span>
											</div>
								</a>
								</div>
		
								<div class="post-date"><span class="day">15</span><span class="month">Feb</span><time datetime="2021-02-15">February 15, 2021</time></div>			</div>

		<!-- Post meta before content -->
		<div class="post-meta"><span class="meta-author"><i class="far fa-user"></i>By <a href="https://www.portotheme.com/wordpress/porto/business-consulting3/author/editor/" title="Posts by John Doe" rel="author">John Doe</a></span><span class="meta-cats"><i class="far fa-folder"></i><a href="https://www.portotheme.com/wordpress/porto/business-consulting3/category/finance/" rel="category tag">Finance</a></span><span class="meta-comments"><i class="far fa-comments"></i><a href="https://www.portotheme.com/wordpress/porto/business-consulting3/2021/02/15/lorem-ipsum-dolor-sit-a-met-consectetur/#comments" title="Comment on Lorem ipsum dolor sit a met, consectetur">1 Comment</a></span></div>		<div class="post-content">

			<h4 class="entry-title"><a href="https://www.portotheme.com/wordpress/porto/business-consulting3/2021/02/15/lorem-ipsum-dolor-sit-a-met-consectetur/">Lorem ipsum dolor sit a met, consectetur</a></h4>
			<span class="vcard" style="display: none;"><span class="fn"><a href="https://www.portotheme.com/wordpress/porto/business-consulting3/author/editor/" title="Posts by John Doe" rel="author">John Doe</a></span></span><span class="updated" style="display:none">2021-02-15T14:55:12+00:00</span><p class="post-excerpt">
Lorem...</p>					</div>
		<!-- Post meta after content -->
				<div class="clearfix">
			<a class="btn btn-xs btn-default text-xs text-uppercase btn-readmore" href="https://www.portotheme.com/wordpress/porto/business-consulting3/2021/02/15/lorem-ipsum-dolor-sit-a-met-consectetur/">Read more...</a>
		</div>
	</div>
</article>

	
			</div>
		</div>

	
	
	</div></div></div></div></div></div>
				</div>
			</article>
					
	</div>

		

</div><!-- end main content -->



	</div>
	</div>


		
			
			</div><!-- end main -->

			
			<div class="footer-wrapper">

												<footer id="footer" class="footer footer-builder"><div class="porto-block" data-id="335"><style>.vc_custom_1613423308427{background-color: #454545 !important;}.vc_custom_1624085312711{margin-left: -2px !important;}.vc_custom_1624085400270{margin-left: -3px !important;}.vc_custom_1613425482764{border-top-width: 1px !important;border-top-color: rgba(255,255,255,0.1) !important;border-top-style: solid !important;}.custom-footer-top .vc_column-inner { display: flex; flex-wrap: wrap; align-items: center; }
#footer .link-hover-style-1:not(:hover) { color: #999; }
#footer .list-icons  i { color: #777; }
#footer li { line-height: 24px; }
#footer .share-links a { width: 38px; height: 38px; line-height: 38px; margin-top: 0; margin-bottom: 0; font-size: 14.4px; color: #fff; border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 50%; }
#footer .share-links a:not(:hover) { background-color: transparent; color: #fff; }
footer .porto-sicon-box-link:hover .custom-hover-1 .porto-sicon-description { color: #e6e5e5 !important; transition: color .3s; }
@media(min-width: 992px) {
.w-lg-auto  { width: auto !important; }
}</style><div data-original="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/background-4.jpg?id=336" class="vc_row wpb_row top-row vc_custom_1613423308427 vc_row-has-fill porto-inner-container porto-lazyload"><div class="porto-wrap-container container"><div class="row"><div class="custom-footer-top pt-5 my-3 vc_column_container col-md-12"><div class="wpb_wrapper vc_column-inner"><h3 style="font-size: 34.65px;line-height: 42px;font-weight:600;letter-spacing:0" class="vc_custom_heading mb-0 w-100 w-lg-auto mb-4 mb-lg-0 align-left">Porto Business Consulting Group</h3><div class="vc_btn3-container  custom-btn-style-1 custom-btn-primary ms-lg-auto ms-0 mb-0 vc_btn3-inline" >
	<a class="vc_btn3 vc_btn3-shape-default wpb_custom_4eba9bcc8f6c36e45e1d476fc3d9024c btn btn-md btn-primary" style="font-size:15.12px; font-weight:500; padding:12px 28px;" href="https://www.portotheme.com/wordpress/porto/business-consulting3/contact-us/" title="Contact Us">Contact Us</a>	</div>
<div class="porto-separator   w-100 my-5 pt-3"><hr class="separator-line  align_center solid" style="background-color:rgba(255,255,255,0.1);"></div></div></div><div class="mb-4 mb-lg-0 vc_column_container col-md-12 col-lg-3"><div class="wpb_wrapper vc_column-inner">
	<div class="wpb_single_image wpb_content_element vc_align_left   mb-4" data-appear-animation="fadeIn" data-appear-animation-delay="200">
		<div class="wpb_wrapper">
			
			<a href="https://www.portotheme.com/wordpress/porto/business-consulting3/" target="_self"><div class="vc_single_image-wrapper   vc_box_border_grey"><img width="123" height="33" src="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/porto_placeholders/100x26.jpg" data-oi="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/logo-footer.png" class="porto-lazyload vc_single_image-img attachment-full" alt="logo" title="logo-footer" /></div></a>
		</div>
	</div>
<p style="font-size: 13.86px;color: #999999;line-height: 26px;letter-spacing:0" class="vc_custom_heading align-left">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur fel.</p>
	<div class="wpb_raw_code wpb_content_element wpb_raw_html mb-0" >
		<div class="wpb_wrapper">
			<div class="share-links">		<a target="_blank"  rel="nofollow noopener noreferrer" class="share-facebook" href="#" title="Facebook"></a>
				<a target="_blank"  rel="nofollow noopener noreferrer" class="share-twitter" href="#" title="Twitter"></a>
				<a target="_blank"  rel="nofollow noopener noreferrer" class="share-instagram" href="#" title="Instagram"></a>
		</div>
		</div>
	</div>
</div></div><div class="mb-4 mb-lg-0 vc_column_container col-md-12 col-lg-3"><div class="wpb_wrapper vc_column-inner"><a class="porto-sicon-box-link" href="tel:8001234567"><div class="porto-sicon-box  vc_custom_1624085312711 pt-1 mb-3 custom-hover-1  wpb_custom_1efe903570d178ff0a9b7bfa5febd3a4 style_1 left-icon"><div class="porto-sicon-left"><div class="porto-just-icon-wrapper porto-icon none" style="color:#ffffff;font-size:25px;margin-right:7px;"><i class="porto-icon-callin"></i></div></div><div class="porto-sicon-body"><div class="porto-sicon-description" style="font-weight:600;font-size:13.86px;line-height:24px;color:#ffffff;">(800) 123-4567</div> <!-- description --></div></div><!-- porto-sicon-box --></a><a class="porto-sicon-box-link" href="mailto:porto@consulting.com"><div class="porto-sicon-box mb-3 custom-hover-1  wpb_custom_1efe903570d178ff0a9b7bfa5febd3a4 style_1 left-icon"><div class="porto-sicon-left"><div class="porto-just-icon-wrapper porto-icon none" style="color:#ffffff;font-size:25px;margin-right:7px;"><i class="porto-icon-atmark"></i></div></div><div class="porto-sicon-body"><div class="porto-sicon-description" style="font-weight:600;font-size:13.86px;line-height:24px;color:#ffffff;">porto@consulting.com</div> <!-- description --></div></div><!-- porto-sicon-box --></a><div class="porto-sicon-box  vc_custom_1624085400270 mb-0  wpb_custom_1efe903570d178ff0a9b7bfa5febd3a4 style_1 left-icon"><div class="porto-sicon-left"><div class="porto-just-icon-wrapper porto-icon none" style="color:#ffffff;font-size:25px;margin-right:8px;"><i class="porto-icon-map-location"></i></div></div><div class="porto-sicon-body"><div class="porto-sicon-description" style="font-weight:600;font-size:12.6px;line-height:24px;color:#ffffff;">1234 Street Name, New York, NY 10000, USA</div> <!-- description --></div></div><!-- porto-sicon-box --></div></div><div class="mb-4 mb-lg-0 vc_column_container col-md-12 col-lg-4"><div class="wpb_wrapper vc_column-inner"><div id='wrap_map_6290d1c587049' class='porto-map-wrapper porto-adjust-bottom-margin mb-0' style='height:190px;'><div id='map_6290d1c587049' data-map_override='0' class='porto_google_map wpb_content_element page_margin_top' style='width:100%;height:190px;'></div></div><script>
( function() {
	var porto_init_map = function() {
		( function( $ ) {
			'use strict';
			if (typeof google == 'undefined') {
				return;
			}
			var map_map_6290d1c587049 = null;
			var coordinate_map_6290d1c587049;
			try {
				coordinate_map_6290d1c587049=new google.maps.LatLng(40.75198, -73.96978);
				var isDraggable = $(document).width() > 640 ? true : true;
				var mapOptions = {
					zoom: 14,
					center: coordinate_map_6290d1c587049,
					scaleControl: true,
					streetViewControl: false,
					mapTypeControl: false,
					panControl: false,
					zoomControl: false,
					scrollwheel: true,
					draggable: isDraggable,
					zoomControlOptions: {
						position: google.maps.ControlPosition.RIGHT_BOTTOM
					}, mapTypeControlOptions: {
							mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
						}};var styles = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}];
						var styledMap = new google.maps.StyledMapType(styles,
							{name: "Styled Map"});var map_map_6290d1c587049 = new google.maps.Map(document.getElementById('map_6290d1c587049'),mapOptions);map_map_6290d1c587049.mapTypes.set('map_style', styledMap);
							 map_map_6290d1c587049.setMapTypeId('map_style');
						var x = 'on';
						var marker_map_6290d1c587049 = new google.maps.Marker({
						position: new google.maps.LatLng(40.75198, -73.96978),
						animation:  google.maps.Animation.DROP,
						map: map_map_6290d1c587049,
						icon: 'https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/map-pin.png'
					});
					google.maps.event.addListener(marker_map_6290d1c587049, 'click', toggleBounce);}
			catch(e){};
			google.maps.event.trigger(map_map_6290d1c587049, 'resize');
			$(window).on('resize', function(){
				google.maps.event.trigger(map_map_6290d1c587049, 'resize');
				if(map_map_6290d1c587049!=null) {
					map_map_6290d1c587049.setCenter(coordinate_map_6290d1c587049);
				}
			});
			$('.ui-tabs').on('tabsactivate', function(event, ui) {
			   if($(this).find('.porto-map-wrapper').length > 0)
				{
					setTimeout(function(){
						$(window).trigger('resize');
					},200);
				}
			});
			$('.ui-accordion').on('accordionactivate', function(event, ui) {
				if($(this).find('.porto-map-wrapper').length > 0) {
					setTimeout(function(){
						$(window).trigger('resize');
					},200);
				}
			});
			$(document).on('onPortoModalPopupOpen', function(){
				if($(map_map_6290d1c587049).parents('.porto_modal-content')) {
					setTimeout(function(){
						$(window).trigger('resize');
					},200);
				}
			});
			function toggleBounce() {
				if (marker_map_6290d1c587049.getAnimation() != null) {
					marker_map_6290d1c587049.setAnimation(null);
				} else {
					marker_map_6290d1c587049.setAnimation(google.maps.Animation.BOUNCE);
				}
			}
		} )( window.jQuery );
	};

	if ( window.jQuery ) {
		porto_init_map();
	} else {
		document.addEventListener( 'DOMContentLoaded', porto_init_map );
	}

	window.addEventListener( 'load', function() {
		setTimeout( function() {
			jQuery( window ).trigger( 'resize' );
		}, 200 );
	} );
} )();
</script></div></div><div class="vc_column_container col-md-12 col-lg-2"><div class="wpb_wrapper vc_column-inner"><div class="porto-u-heading  wpb_custom_95aa9a11c17ad45cfabaf210d84ee7cc" data-hspacer="no_spacer" data-halign="left" style="text-align:left"><div class="porto-u-main-heading"><h3   style="font-weight:700;margin-bottom: 14px;font-size:18.9px;line-height:27px;letter-spacing:-0.05em;">Useful Links</h3></div><div class="porto-u-sub-heading" style="color: #999999;">
<ul class="list list-icons list-icons-sm">
 	<li><i class="fas fa-angle-right text-color-default"></i>
<a class="link-hover-style-1 ms-1" href="https://www.portotheme.com/wordpress/porto/business-consulting3/contact-us/"> Contact Us</a></li>
 	<li><i class="fas fa-angle-right text-color-default"></i>
<a class="link-hover-style-1 ms-1" href="https://www.portotheme.com/wordpress/porto/business-consulting3/services/"> Our Services</a></li>
 	<li><i class="fas fa-angle-right text-color-default"></i>
<a class="link-hover-style-1 ms-1" href="#"> Payment Methods</a></li>
 	<li><i class="fas fa-angle-right text-color-default"></i>
<a class="link-hover-style-1 ms-1" href="#"> Services Guide</a></li>
 	<li><i class="fas fa-angle-right text-color-default"></i>
<a class="link-hover-style-1 ms-1" href="#"> FAQs</a></li>
</ul>
</div></div></div></div><div class="vc_column_container col-md-12"><div class="wpb_wrapper vc_column-inner"><p style="font-size: 13.86px;color: #999999;text-align: center" class="vc_custom_heading mb-5 pt-4 mt-5 vc_custom_1613425482764">Porto Business Consulting. © 2022. All Rights Reserved</p></div></div></div></div></div></div></footer>
				
			</div>
					
		
	</div><!-- end wrapper -->
	
<script type="text/html" id="wpb-modifications"></script><script src='https://www.portotheme.com/wordpress/porto/business-consulting3/wp-includes/js/dist/vendor/wp-polyfill.min.js' id='wp-polyfill-js'></script>
<script id='wp-polyfill-js-after'>
( 'fetch' in window ) || document.write( '<script src="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-includes/js/dist/vendor/wp-polyfill-fetch.min.js"></scr' + 'ipt>' );( document.contains ) || document.write( '<script src="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-includes/js/dist/vendor/wp-polyfill-node-contains.min.js"></scr' + 'ipt>' );( window.DOMRect ) || document.write( '<script src="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-includes/js/dist/vendor/wp-polyfill-dom-rect.min.js"></scr' + 'ipt>' );( window.URL && window.URL.prototype && window.URLSearchParams ) || document.write( '<script src="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-includes/js/dist/vendor/wp-polyfill-url.min.js"></scr' + 'ipt>' );( window.FormData && window.FormData.prototype.keys ) || document.write( '<script src="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-includes/js/dist/vendor/wp-polyfill-formdata.min.js"></scr' + 'ipt>' );( Element.prototype.matches && Element.prototype.closest ) || document.write( '<script src="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-includes/js/dist/vendor/wp-polyfill-element-closest.min.js"></scr' + 'ipt>' );( 'objectFit' in document.documentElement.style ) || document.write( '<script src="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-includes/js/dist/vendor/wp-polyfill-object-fit.min.js"></scr' + 'ipt>' );
</script>
<script id='contact-form-7-js-extra'>
var wpcf7 = {"api":{"root":"https:\/\/www.portotheme.com\/wordpress\/porto\/business-consulting3\/wp-json\/","namespace":"contact-form-7\/v1"},"cached":"1"};
</script>
<script src='https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/plugins/contact-form-7/includes/js/index.js' id='contact-form-7-js'></script>
<script src='https://www.portotheme.com/wordpress/porto/business-consulting3/wp-includes/js/jquery/jquery.min.js' id='jquery-core-js'></script>
<script id='porto-live-search-js-extra'>
var porto_live_search = {"nonce":"9d87c612f1"};
</script>
<script src='https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/themes/porto/inc/lib/live-search/live-search.min.js' id='porto-live-search-js'></script>
<script id='wpb_composer_front_js-js-extra'>
var vcData = {"currentTheme":{"slug":"porto"}};
</script>
<script src='https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js' id='wpb_composer_front_js-js'></script>
<script src='https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/themes/porto/js/bootstrap.optimized.min.js' id='bootstrap-js'></script>
<script src='https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/themes/porto/js/libs/jquery.cookie.min.js' id='jquery-cookie-js'></script>
<script src='https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/themes/porto/js/libs/owl.carousel.min.js' id='owl.carousel-js'></script>
<script src='https://www.portotheme.com/wordpress/porto/business-consulting3/wp-includes/js/imagesloaded.min.js' id='imagesloaded-js'></script>
<script async="async" src='https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/themes/porto/js/libs/jquery.magnific-popup.min.js' id='jquery-magnific-popup-js'></script>
<script id='porto-theme-js-extra'>
var js_porto_vars = {"rtl":"","theme_url":"https:\/\/www.portotheme.com\/wordpress\/porto\/business-consulting3\/wp-content\/themes\/porto","ajax_url":"https:\/\/www.portotheme.com\/wordpress\/porto\/business-consulting3\/wp-admin\/admin-ajax.php","change_logo":"1","container_width":"1140","grid_gutter_width":"30","show_sticky_header":"1","show_sticky_header_tablet":"1","show_sticky_header_mobile":"1","ajax_loader_url":"\/\/www.portotheme.com\/wordpress\/porto\/business-consulting3\/wp-content\/themes\/porto\/images\/ajax-loader@2x.gif","category_ajax":"","compare_popup":"","compare_popup_title":"","prdctfltr_ajax":"","slider_loop":"1","slider_autoplay":"1","slider_autoheight":"1","slider_speed":"5000","slider_nav":"","slider_nav_hover":"1","slider_margin":"","slider_dots":"1","slider_animatein":"","slider_animateout":"","product_thumbs_count":"4","product_zoom":"1","product_zoom_mobile":"1","product_image_popup":"1","zoom_type":"inner","zoom_scroll":"1","zoom_lens_size":"200","zoom_lens_shape":"square","zoom_contain_lens":"1","zoom_lens_border":"1","zoom_border_color":"#888888","zoom_border":"0","screen_lg":"1170","mfp_counter":"%curr% of %total%","mfp_img_error":"<a href=\"%url%\">The image<\/a> could not be loaded.","mfp_ajax_error":"<a href=\"%url%\">The content<\/a> could not be loaded.","popup_close":"Close","popup_prev":"Previous","popup_next":"Next","request_error":"The requested content cannot be loaded.<br\/>Please try again later.","loader_text":"Loading...","submenu_back":"Back","porto_nonce":"ac5d8408c1","use_skeleton_screen":[],"user_edit_pages":""};
</script>
<script src='https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/themes/porto/js/theme.min.js' id='porto-theme-js'></script>
<script async="async" src='https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/themes/porto/js/theme-async.min.js' id='porto-theme-async-js'></script>
<script src='https://www.portotheme.com/wordpress/porto/business-consulting3/wp-includes/js/wp-embed.min.js' id='wp-embed-js'></script>
<script src='https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/themes/porto/js/libs/lazyload.min.js' id='lazyload-js'></script>
<script src='https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/plugins/js_composer/assets/lib/bower/skrollr/dist/skrollr.min.js' id='vc_jquery_skrollr_js-js'></script>
<script src='https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/plugins/js_composer/assets/lib/vc_waypoints/vc-waypoints.min.js' id='vc_waypoints-js'></script>
<script src='https://maps.googleapis.com/maps/api/js?language=en' id='googleapis-js'></script>
<script src='https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/plugins/porto-functionality/shortcodes/assets/js/map-loader.min.js' id='porto_shortcodes_map_loader_js-js'></script>
<script>(function($){
    $(".share-links>a, .pagination .page-numbers").attr( "data-cursor-effect-hover", "fit" );
    $(".custom-btn-style-1").attr( "data-cursor-effect-hover", "plus" );
    $(".custom-btn-style-1").attr( "data-cursor-effect-hover-color", "light" );
    $(".custom-scroll-action").on("click", function(){
        window.theme.scrolltoContainer($("#aboutus"));
    });
    $(".custom-crooked-line .porto-sicon-header").append('<div class="crooked-wrapper"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1196.9 92" style="enable-background:new 0 0 1196.9 92;" xml:space="preserve" width="154" height="26"> <g transform="translate(0.000000,92.000000) scale(0.100000,-0.100000)"> <path d="M1620.4,630l-290-290l-286,286c-250,249-289,285-305,276c-11-6-161-153-334-326L0,169.6l87.8-82.2l85-85L505.4,335l245,245 l285-285c157-157,289-285,295-285c5,0,138,128,295,285l285,285l290-290l290-290l290,290l290,290l290-290l290-290l290,290l290,290 l290-290l290-290l291,291l291,291l247-243L5983.3,0.1l85,84l84.4,85.6L5723.4,592l-333,327l-290-289l-290-290l-290,290l-290,290 l-290-290l-290-290l-290,290l-290,290l-290-290l-290-290l-290,290l-290,290L1620.4,630z"></path> </g> <g transform="translate(0.000000,92.000000) scale(0.100000,-0.100000)"> <path d="M7432.8,630l-290-290l-286,286c-250,249-289,285-305,276c-11-6-161-153-334-326l-405.4-406.4l84.4-84.3l86.5-85.2 L6317.8,335l245,245l285-285c157-157,289-285,295-285c5,0,138,128,295,285l285,285l290-290l290-290l290,290l290,290l290-290 l290-290l290,290l290,290l290-290l290-290l291,291l291,291l247-243l343.9-338.9l85,84l88.6,81.4L11535.8,592l-333,327l-290-289 l-290-290l-290,290l-290,290l-290-290l-290-290l-290,290l-290,290l-290-290l-290-290l-290,290l-290,290L7432.8,630z"></path> </g> </svg></div>');
    $(".custom-plugin-readmore-wrapper, .custom-plugin-readmore .vc_column-inner, .custom-plugin-readmore .wpb_wrapper").attr("data-plugin-readmore", "");
    $(".custom-member-item .custom-plugin-readmore .wpb_wrapper").attr("data-plugin-options", '{"maxHeight":160 }');
})(window.jQuery);

// CursorEffect
(function(theme, $) {

	theme = theme || {};
    
	var instanceName = '__cursorEffect';

	var PluginCursorEffect = function($el, opts) {
		return this.initialize($el, opts);
	};
	
	PluginCursorEffect.defaulst = {

	}

	PluginCursorEffect.prototype = {
		initialize: function($el, opts) {
			if ($el.data(instanceName)) {
				return this;
			}

			this.$el = $el;

			this
				.setData()
				.setOptions(opts)
				.build()
				.events();

			return this;
		},

		setData: function() {
			this.$el.data(instanceName, this);

			return this;
		},

		setOptions: function(opts) {
			this.options = $.extend(true, {}, PluginCursorEffect.defaults, opts, {
				wrapper: this.$el
			});

			return this;
		},

		build: function() {
			var self = this;

			// Global Variables for cursor position
			self.clientX = -100;
			self.clientY = -100;

			// Hide Mouse Cursor
			if( self.options.hideMouseCursor ) {
				self.$el.addClass('hide-mouse-cursor');
			}

			// Creates the cursor wrapper node
			var cursorOuter = document.createElement('DIV');
				cursorOuter.className = 'cursor-outer';

			// Creates the cursor inner node
			var cursorInner = document.createElement('DIV');
				cursorInner.className = 'cursor-inner';

			// Custom Cursor Outer Color
			if( self.options.cursorOuterColor ) {
				cursorOuter.style = 'border-color: ' + self.options.cursorOuterColor + ';';
			}

			// Custom Cursor Inner Color
			if( self.options.cursorInnerColor ) {
				cursorInner.style = 'background-color: ' + self.options.cursorInnerColor + ';';
			}

			// Size
			if( self.options.size ) {
				switch ( self.options.size ) {
					case 'small':
						self.$el.addClass( 'cursor-effect-size-small' );
						break;
					
					case 'big':
						self.$el.addClass( 'cursor-effect-size-big' );
						break;
				}
			}

			// Style
			if( self.options.style ) {
				self.$el.addClass( self.options.style );
			}

			// Prepend cursor wrapper node to the body
			document.body.prepend( cursorOuter );

			// Prepend cursor inner node to the body
			document.body.prepend( cursorInner );

			// Loop for render
			var render = function() {
				cursorOuter.style.transform = `translate(${self.clientX}px, ${self.clientY}px)`;
				cursorInner.style.transform = `translate(${self.clientX}px, ${self.clientY}px)`;

				self.loopInside = requestAnimationFrame(render);
			}
			self.loop = requestAnimationFrame(render);

			return this;
		},

		events: function() {
			var self = this,
				$cursorOuter = $('.cursor-outer'),
				$cursorInner = $('.cursor-inner');

			var initialCursorOuterBox    = $cursorOuter[0].getBoundingClientRect(),
				initialCursorOuterRadius = $cursorOuter.css('border-radius');

			// Update Cursor Position
			document.addEventListener('mousemove', function(e){
				if( !self.isStuck ) {
					self.clientX = e.clientX - 20;
					self.clientY = e.clientY - 20;
				}

				$cursorOuter.removeClass('opacity-0');
			});

			self.isStuck = false;
			$('[data-cursor-effect-hover]').on('mouseenter', function(e){

				// Identify Event With Hover Class
				$cursorOuter.addClass('cursor-outer-hover');
				$cursorInner.addClass('cursor-inner-hover');

				// Hover Color
				var hoverColor = $(this).data('cursor-effect-hover-color');
				$cursorOuter.addClass( 'cursor-color-' + hoverColor );
				$cursorInner.addClass( 'cursor-color-' + hoverColor );

				// Effect Types
				switch ( $(this).data('cursor-effect-hover') ) {
					case 'fit':
						var thisBox = $(this)[0].getBoundingClientRect();

						self.clientX = thisBox.x;
						self.clientY = thisBox.y;

						$cursorOuter.css({
							width: thisBox.width,
							height: thisBox.height,
							'border-radius': $(this).css('border-radius')
						}).addClass('cursor-outer-fit');

						$cursorInner.addClass('opacity-0');

						self.isStuck = true;
						break;

					case 'plus':
						$cursorInner.addClass('cursor-inner-plus');
						break;
				}
			});

			$('[data-cursor-effect-hover]').on('mouseleave', function(){
				
				// Identify Event With Hover Class
				$cursorOuter.removeClass('cursor-outer-hover');
				$cursorInner.removeClass('cursor-inner-hover');

				// Remove Color Class
				var hoverColor = $(this).data('cursor-effect-hover-color');
				$cursorOuter.removeClass( 'cursor-color-' + hoverColor );
				$cursorInner.removeClass( 'cursor-color-' + hoverColor );

				// Effect Types
				switch ( $(this).data('cursor-effect-hover') ) {
					case 'fit':
						$cursorOuter.css({
							width: initialCursorOuterBox.width,
							height: initialCursorOuterBox.height,
							'border-radius': initialCursorOuterRadius
						}).removeClass('cursor-outer-fit');

						$cursorInner.removeClass('opacity-0');

						self.isStuck = false;
						break;

					case 'plus':
						$cursorInner.removeClass('cursor-inner-plus');
						break;
				}
			});

			$(window).on('scroll', function(){
				if( $cursorOuter.hasClass('cursor-outer-fit') ) {
					$cursorOuter.addClass('opacity-0').removeClass('cursor-outer-fit');
				}
			});

			return this;
		},

		destroy: function() {
			var self = this;

			self.$el.removeClass('hide-mouse-cursor cursor-effect-size-small cursor-effect-size-big cursor-effect-style-square');		

			cancelAnimationFrame( self.loop );
			cancelAnimationFrame( self.loopInside );

			document.querySelector('.cursor-outer').remove();
			document.querySelector('.cursor-inner').remove();

			self.$el.removeData( instanceName, self );
		}
	};

	// expose to scope
	$.extend(theme, {
		PluginCursorEffect: PluginCursorEffect
	});

	// jquery plugin
	$.fn.themePluginCursorEffect = function(opts) {
		return this.map(function() {
			var $this = $(this);

			if ($this.data(instanceName)) {
				return $this.data(instanceName);
			} else {
				return new PluginCursorEffect($this, opts);
			}

		});
	}

}).apply(this, [window.theme, jQuery]);
// Cursor Effect
(function($) {

	'use strict';

	if ($.isFunction($.fn['themePluginCursorEffect']) && $('body').length ) {
	    $('body').themePluginCursorEffect();
	}

}).apply(this, [jQuery]);

// Read More
(function(theme, $) {

	theme = theme || {};

	var instanceName = '__readmore';

	var PluginReadMore = function($el, opts) {
		return this.initialize($el, opts);
	};

	PluginReadMore.defaults = {
		buttonOpenLabel: 'View More <i class="fas fa-chevron-down text-2 ms-1"></i>',
		buttonCloseLabel: 'View Less <i class="fas fa-chevron-up text-2 ms-1"></i>',
		enableToggle: true,
		maxHeight: 300,
		overlayColor: '#FFF',
		overlayHeight: 100,
		startOpened: false,
		align: 'left'
	};

	PluginReadMore.prototype = {
		initialize: function($el, opts) {
			var self = this;

			this.$el = $el;

			this
				.setData()
				.setOptions(opts)
				.build()
				.events();

			if( self.options.startOpened ) {
				self.options.wrapper.find('.readmore-button-wrapper > button').trigger('click');
			}

			return this;
		},

		setData: function() {
			this.$el.data(instanceName, this);

			return this;
		},

		setOptions: function(opts) {
			this.options = $.extend(true, {}, PluginReadMore.defaults, opts, {
				wrapper: this.$el
			});

			return this;
		},

		build: function() {
			var self = this;

			self.options.wrapper.addClass('position-relative');

			// Overlay
			self.options.wrapper.append( '<div class="readmore-overlay"></div>' );

			// Check if is Safari
			var backgroundCssValue = 'linear-gradient(180deg, rgba(2, 0, 36, 0) 0%, '+ self.options.overlayColor +' 100%)';
			if( $('html').hasClass('safari') ) {
				backgroundCssValue = '-webkit-linear-gradient(top, rgba(2, 0, 36, 0) 0%, '+ self.options.overlayColor +' 100%)'
			}
			
			self.options.wrapper.find('.readmore-overlay').css({
				background: backgroundCssValue,
				position: 'absolute',
				bottom: 0,
				left: 0,
				width: '100%',
				height: self.options.overlayHeight,
				'z-index': 1
			});

			// Read More Button
			self.options.wrapper.find('.readmore-button-wrapper').removeClass('d-none').css({
				position: 'absolute',
				bottom: 0,
				left: 0,
				width: '100%',
				'z-index': 2
			});	

			// Button Label
			self.options.wrapper.find('.readmore-button-wrapper > button').html( self.options.buttonOpenLabel );

			self.options.wrapper.css({
				'height': self.options.maxHeight,
				'overflow-y': 'hidden'
			});

			// Alignment
			switch ( self.options.align ) {
				case 'center':
					self.options.wrapper.find('.readmore-button-wrapper').addClass('text-center');
					break;

				case 'right':
					self.options.wrapper.find('.readmore-button-wrapper').addClass('text-end');
					break;

				case 'left':
				default:
					self.options.wrapper.find('.readmore-button-wrapper').addClass('text-start');
					break;
			}

			return this;

		},

		events: function() {
			var self = this;

			// Read More
			self.readMore = function() {
				self.options.wrapper.find('.readmore-button-wrapper a:not(.readless)').on('click', function(e){
					e.preventDefault();

					var $this = $(this);

					setTimeout(function(){
						self.options.wrapper.animate({
							'height': self.options.wrapper[0].scrollHeight
						}, function(){
							if( !self.options.enableToggle ) {
								$this.fadeOut();
							}

							$this.html( self.options.buttonCloseLabel ).addClass('readless').off('click');

							self.readLess();

							self.options.wrapper.find('.readmore-overlay').fadeOut();
							self.options.wrapper.css({
								'max-height': 'none',
								'overflow': 'visible'
							});

							self.options.wrapper.find('.readmore-button-wrapper').animate({
								bottom: -20
							});
						});
					}, 200);
				});
			}

			// Read Less
			self.readLess = function() {
				self.options.wrapper.find('.readmore-button-wrapper a.readless').on('click', function(e){
					e.preventDefault();

					var $this = $(this);

					// Button
					self.options.wrapper.find('.readmore-button-wrapper').animate({
						bottom: 0
					});

					// Overlay
					self.options.wrapper.find('.readmore-overlay').fadeIn();

					setTimeout(function(){
						self.options.wrapper.height(self.options.wrapper[0].scrollHeight).animate({
							'height': self.options.maxHeight
						}, function(){
							$this.html( self.options.buttonOpenLabel ).removeClass('readless').off('click');

							self.readMore();

							self.options.wrapper.css({
								'overflow': 'hidden'
							});
						});
					}, 200);
				});
			}

			// First Load
			self.readMore();

			return this;
		}
	};

	// expose to scope
	$.extend(theme, {
		PluginReadMore: PluginReadMore
	});

	// jquery plugin
	$.fn.themePluginReadMore = function(opts) {
		return this.map(function() {
			var $this = $(this);

			if ($this.data(instanceName)) {
				return $this.data(instanceName);
			} else {
				return new PluginReadMore($this, $this.data('plugin-options'));
			}

		});
	}

}).apply(this, [window.theme, jQuery]);

// Read More
(function($) {

	'use strict';

	if ($.isFunction($.fn['themePluginReadMore']) && $('[data-plugin-readmore]').length) {
		$( '[data-plugin-readmore]:not(.manual)' ).themePluginReadMore();
	}

}).apply(this, [jQuery]);</script>
</div>
</main>
@endsection
<!DOCTYPE html>
<html>

<head>
	<title>Custom Auth in Laravel</title>
	<link rel="stylesheet" href="../../css/login.css">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
	<meta content="A slick, powerful and clean theme Porto provides an intuitive set of options to help you setup your WordPress site quickly and effectively. Flexibility is key and it has been optimized for SEO and speed. It is also responsive & mobile ready should you choose that option. The Porto theme features include: unlimited colors, widgetized home page, over 600 fonts to choose from, WooCommerce Integration, it is also translation and multilingual ready, step by step documentation, exclusive Porto support forum and a helpful community. Always up-to-date security and many new features are constantly added as the theme evolves." name="description" />

	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link rel="pingback" href="https://www.portotheme.com/wordpress/porto/business-consulting3/xmlrpc.php" />
	<link rel="shortcut icon" href="//www.portotheme.com/wordpress/porto/business-consulting3/wp-content/themes/porto/images/logo/favicon.png" type="image/x-icon" />
	<link rel="apple-touch-icon" href="//www.portotheme.com/wordpress/porto/business-consulting3/wp-content/themes/porto/images/logo/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="120x120" href="//www.portotheme.com/wordpress/porto/business-consulting3/wp-content/themes/porto/images/logo/apple-touch-icon_120x120.png" />
	<link rel="apple-touch-icon" sizes="76x76" href="//www.portotheme.com/wordpress/porto/business-consulting3/wp-content/themes/porto/images/logo/apple-touch-icon_76x76.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="//www.portotheme.com/wordpress/porto/business-consulting3/wp-content/themes/porto/images/logo/apple-touch-icon_152x152.png" />
	<link rel="preload" href="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/themes/porto/fonts/porto-font/porto.woff2" as="font" type="font/woff2" crossorigin />
	<link rel="preload" href="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/themes/porto/fonts/fontawesome_optimized/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin />
	<link rel="preload" href="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/themes/porto/fonts/fontawesome_optimized/fa-regular-400.woff2" as="font" type="font/woff2" crossorigin />
	<link rel="preload" href="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/themes/porto/fonts/fontawesome_optimized/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin />
	<link rel="preload" href="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/themes/porto/fonts/Simple-Line-Icons/Simple-Line-Icons.ttf" as="font" type="font/ttf" crossorigin />
	<title>Porto Business Consulting 3 Porto WordPress Demo site</title>
	<meta name='robots' content='max-image-preview:large' />
	<link rel='dns-prefetch' href='//s.w.org' />
	<link rel="alternate" type="application/rss+xml" title="Porto Business Consulting 3 &raquo; Feed" href="https://www.portotheme.com/wordpress/porto/business-consulting3/feed/" />
	<link rel="alternate" type="application/rss+xml" title="Porto Business Consulting 3 &raquo; Comments Feed" href="https://www.portotheme.com/wordpress/porto/business-consulting3/comments/feed/" />
	<link rel='stylesheet' id='wp-block-library-css' href='https://www.portotheme.com/wordpress/porto/business-consulting3/wp-includes/css/dist/block-library/style.min.css' media='all' />
	<link rel='stylesheet' id='wp-block-library-theme-css' href='https://www.portotheme.com/wordpress/porto/business-consulting3/wp-includes/css/dist/block-library/theme.min.css' media='all' />
	<link rel='stylesheet' id='contact-form-7-css' href='https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/plugins/contact-form-7/includes/css/styles.css' media='all' />
	<link rel='stylesheet' id='porto-css-vars-css' href='https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/porto_styles/theme_css_vars.css' media='all' />
	<link rel='stylesheet' id='js_composer_front-css' href='https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/porto_styles/js_composer.css' media='all' />
	<link rel='stylesheet' id='bootstrap-css' href='https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/porto_styles/bootstrap.css' media='all' />
	<link rel='stylesheet' id='porto-plugins-css' href='https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/themes/porto/css/plugins_optimized.css' media='all' />
	<link rel='stylesheet' id='porto-theme-css' href='https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/themes/porto/css/theme.css' media='all' />
	<link rel='stylesheet' id='porto-shortcodes-css' href='https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/porto_styles/shortcodes.css' media='all' />
	<link rel='stylesheet' id='porto-theme-wpb-css' href='https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/themes/porto/css/theme_wpb.css' media='all' />
	<link rel='stylesheet' id='porto-dynamic-style-css' href='https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/porto_styles/dynamic_style.css' media='all' />
	<link rel='stylesheet' id='porto-type-builder-css' href='https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/plugins/porto-functionality/builders/assets/type-builder.css' media='all' />
	<link rel='stylesheet' id='porto-style-css' href='https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/themes/porto/style.css' media='all' />
	<style id='porto-style-inline-css'>
		.vc_custom_1612993852459 {
			padding-top: 4.6153846154rem !important;
			background-color: #e3e3e3 !important;
		}

		.vc_custom_1613646081965 {
			margin-top: -310px !important;
		}

		.vc_custom_1613050388638 {
			padding-top: 6.9230769231rem !important;
			background-color: #ededed !important;
		}

		.vc_custom_1613388304642 {
			padding-top: 6.9230769231rem !important;
			padding-bottom: 6.9230769231rem !important;
			background-color: #212529 !important;
		}

		.vc_custom_1613403475479 {
			padding-top: 6.9230769231rem !important;
			background-color: #ededed !important;
		}

		.vc_custom_1613432962838 {
			padding-top: 50px !important;
			padding-bottom: 114px !important;
			background-color: #212529 !important;
		}

		.vc_custom_1613432994797 {
			padding-top: 4.6153846154rem !important;
			padding-bottom: 4.6153846154rem !important;
			background-color: #f7f7f7 !important;
			background-position: center !important;
			background-repeat: no-repeat !important;
			background-size: cover !important;
		}

		.vc_custom_1613041246740 {
			padding-bottom: 148px !important;
		}

		.vc_custom_1613822468207 {
			background-image: url(https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/text-background.jpg?id=55) !important;
		}

		.vc_custom_1613822288831 {
			padding-top: 48px !important;
			padding-right: 32px !important;
			padding-bottom: 48px !important;
			padding-left: 32px !important;
		}

		.vc_custom_1613822320990 {
			padding-top: 48px !important;
			padding-right: 32px !important;
			padding-bottom: 48px !important;
			padding-left: 32px !important;
		}

		.vc_custom_1613822330066 {
			padding-top: 48px !important;
			padding-right: 32px !important;
			padding-bottom: 48px !important;
			padding-left: 32px !important;
		}

		.vc_custom_1613822337770 {
			padding-top: 48px !important;
			padding-right: 32px !important;
			padding-bottom: 48px !important;
			padding-left: 32px !important;
		}

		.vc_custom_1614087476138 {
			background-color: #4d4542 !important;
		}

		.vc_custom_1614087493619 {
			background-color: #ac9798 !important;
		}

		.vc_custom_1614087509082 {
			background-color: #fcfcfc !important;
		}

		.vc_custom_1651277124657 {
			border-left-width: 12px !important;
			padding-top: 4px !important;
			padding-right: 16px !important;
			padding-bottom: 8px !important;
			padding-left: 16px !important;
			border-left-color: #f3f3f3 !important;
			border-left-style: solid !important;
		}

		.vc_custom_1613070190936 {
			padding-top: 32px !important;
			padding-right: 24px !important;
			padding-bottom: 32px !important;
			padding-left: 24px !important;
		}

		.vc_custom_1613070190936 {
			padding-top: 32px !important;
			padding-right: 24px !important;
			padding-bottom: 32px !important;
			padding-left: 24px !important;
		}

		.vc_custom_1613070190936 {
			padding-top: 32px !important;
			padding-right: 24px !important;
			padding-bottom: 32px !important;
			padding-left: 24px !important;
		}

		.vc_custom_1613070190936 {
			padding-top: 32px !important;
			padding-right: 24px !important;
			padding-bottom: 32px !important;
			padding-left: 24px !important;
		}

		.vc_custom_1613070190936 {
			padding-top: 32px !important;
			padding-right: 24px !important;
			padding-bottom: 32px !important;
			padding-left: 24px !important;
		}

		.vc_custom_1613070190936 {
			padding-top: 32px !important;
			padding-right: 24px !important;
			padding-bottom: 32px !important;
			padding-left: 24px !important;
		}

		.vc_custom_1613822430918 {
			background-image: url(https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/text-background-2.jpg?id=233) !important;
		}

		.vc_custom_1613432624467 {
			background-position: center !important;
			background-repeat: no-repeat !important;
			background-size: cover !important;
		}

		.side-header-narrow-bar-logo {
			max-width: 170px
		}

		@media (min-width:992px) {}

		.page-top .sort-source {
			position: static;
			text-align: center;
			margin-top: 5px;
			border-width: 0
		}

		.page-top ul.breadcrumb {
			-webkit-justify-content: center;
			-ms-flex-pack: center;
			justify-content: center
		}

		.page-top .page-title {
			font-weight: 700
		}

		@media (min-width:1500px) {

			.left-sidebar.col-lg-3,
			.right-sidebar.col-lg-3 {
				width: 20%
			}

			.main-content.col-lg-9 {
				width: 80%
			}

			.main-content.col-lg-6 {
				width: 60%
			}
		}

		#header .share-links a {
			font-size: 16.8px;
			width: 48px;
			height: 48px;
			box-shadow: none
		}

		#header .search-popup .searchform {
			left: auto;
			right: -1.5rem
		}

		#header .searchform button,
		#header .searchform-popup .search-toggle {
			font-size: 15.4px;
			color: #212529
		}

		input[type="submit"],
		.custom-scroll-action {
			cursor: pointer
		}

		.mobile-menu>.d-none {
			display: block !important
		}

		.opacity-0 {
			opacity: 0 !important
		}

		.cursor-outer {
			position: fixed;
			left: 0;
			top: 0;
			width: 40px;
			height: 40px;
			border: 1px solid #CCC;
			border-radius: 100%;
			pointer-events: none;
			z-index: 9998;
			transition: ease-out all .08s .010s
		}

		.cursor-outer.cursor-outer-fit {
			left: 0 !important;
			top: 0 !important
		}

		.cursor-outer.cursor-color-light {
			border-color: #FFF !important
		}

		.cursor-outer.cursor-color-dark {
			border-color: #212121 !important
		}

		.cursor-inner {
			position: fixed;
			left: 17px;
			top: 17px;
			width: 6px;
			height: 6px;
			background: #CCC;
			border-radius: 100%;
			pointer-events: none;
			z-index: 9999;
			transition: all .08s ease-out
		}

		.cursor-inner.cursor-inner-plus {
			display: flex;
			align-items: center;
			justify-content: center;
			background-color: transparent !important
		}

		.cursor-inner.cursor-inner-plus:before {
			content: '+';
			color: #FFF;
			font-size: 27.2px;
			font-size: 1.7rem
		}

		.cursor-inner.cursor-color-light:not(.cursor-inner-plus) {
			background-color: #FFF !important
		}

		.cursor-inner.cursor-color-light.cursor-inner-plus:before {
			color: #FFF !important
		}

		.cursor-inner.cursor-color-dark:not(.cursor-inner-plus) {
			background-color: #212121 !important
		}

		.cursor-inner.cursor-color-dark.cursor-inner-plus:before {
			color: #212121 !important
		}

		.hide-mouse-cursor {
			cursor: none
		}

		.hide-mouse-cursor a,
		.hide-mouse-cursor button,
		.hide-mouse-cursor input,
		.hide-mouse-cursor textarea,
		.hide-mouse-cursor .mfp-auto-cursor .mfp-content {
			cursor: none !important
		}

		.cursor-effect-size-small .cursor-outer {
			width: 20px;
			height: 20px;
			left: 10px;
			top: 9px
		}

		.cursor-effect-size-small .cursor-inner {
			width: 4px;
			height: 4px;
			left: 18px
		}

		.cursor-effect-size-small .cursor-inner.cursor-inner-plus:before {
			font-size: 1.1rem
		}

		.cursor-effect-size-big .cursor-outer {
			width: 60px;
			height: 60px;
			left: -9px;
			top: -10px
		}

		.cursor-effect-size-big .cursor-inner {
			width: 8px;
			height: 8px
		}

		.cursor-effect-size-big .cursor-inner.cursor-inner-plus:before {
			font-size: 41.6px
		}

		.cursor-effect-style-square .cursor-outer {
			border-radius: 0
		}

		.cursor-effect-style-square .cursor-inner {
			border-radius: 0
		}

		.cursor-inner {
			background-color: #f04c23
		}

		.cursor-inner.cursor-inner-plus:before {
			color: #f04c23
		}

		.cursor-outer {
			border-color: #f04c23
		}

		.home .porto-block-html-content-top {
			display: none
		}

		.z-index-n-1 {
			z-index: -1
		}

		.custom-banner-size {
			font-size: 1rem
		}

		.ws-nowrap {
			white-space: nowrap !important
		}

		.custom-scroll-action .porto-just-icon-wrapper {
			display: flex
		}

		.custom-highlight-1 strong {
			position: relative
		}

		.custom-highlight-1 strong::before {
			content: '';
			position: absolute;
			bottom: 5px;
			left: 0;
			width: 100%;
			border-bottom: 7px solid #f04c23;
			opacity: 0.2;
			z-index: 0
		}

		.custom-img-pos-1 {
			position: absolute;
			top: -4.6153846154rem;
			right: 0
		}

		@media (min-width:992px) {
			.custom-text-background {
				background-repeat: no-repeat;
				background-size: 100%;
				background-position: 20% 30%;
				-webkit-background-clip: text;
				-webkit-text-fill-color: transparent
			}
		}

		@media (max-width:1599px) {
			.custom-text-background {
				font-size: 6.9rem !important
			}
		}

		@media (max-width:1169px) {
			.custom-text-background {
				font-size: 4em !important
			}

			.mt-xl-max-1 {
				margin-top: -210px !important
			}

			.custom-height-1 .vc_column-inner,
			.custom-height-1 .wpb_single_image,
			.custom-height-1 .wpb_wrapper,
			.custom-height-1 .vc_single_image-wrapper,
			.custom-height-1 img {
				height: 100%
			}

			.custom-height-2 .custom-box-shadow-1 {
				height: calc(50% - 12px)
			}

			.custom-width-1 .vc_single_image-wrapper,
			.custom-width-1 img {
				width: 100%
			}
		}

		@media (max-width:991px) {
			.custom-text-background {
				background-image: none !important
			}

			.custom-banner-size {
				font-size: .875rem
			}

			.custom-text-background {
				white-space: normal !important
			}
		}

		@keyframes shapeDividerToLeft {
			from {
				transform: translate3d(0, 0, 0)
			}

			to {
				transform: translate3d(-200%, 0, 0)
			}
		}

		.shape-divider {
			position: absolute;
			top: -1px;
			left: 0;
			width: 100%;
			height: 212px;
			z-index: 1
		}

		.shape-divider.shape-divider-bottom {
			top: auto;
			bottom: -1px
		}

		.shape-divider svg {
			position: absolute;
			top: 0;
			left: 50%;
			height: 100%;
			transform: translate3d(-50%, 0, 0)
		}

		.shape-divider .shape-divider-horizontal-animation {
			position: absolute;
			top: 0;
			left: 0;
			width: 100vw;
			height: 100%;
			animation-duration: 45s;
			animation-iteration-count: infinite;
			animation-timing-function: linear
		}

		.shape-divider .shape-divider-horizontal-animation.shape-animation-to-left {
			animation-name: shapeDividerToLeft
		}

		.shape-divider .shape-divider-horizontal-animation svg {
			width: 100vw;
			left: 0;
			transform: none
		}

		.shape-divider .shape-divider-horizontal-animation.shape-animation-to-left svg:nth-child(2) {
			transform: rotateY(180deg) translate3d(-99.9%, 0, 0)
		}

		.shape-divider .shape-divider-horizontal-animation.shape-animation-to-left svg:nth-child(3) {
			transform: translate3d(199.8%, 0, 0)
		}

		.svg-fill-color-primary svg,
		.svg-fill-color-primary path {
			fill: #f04c23 !important
		}

		.custom-crooked-line {
			display: inline-block;
			width: 77px;
			overflow: hidden
		}

		@keyframes crookedLineAnim {
			from {
				transform: translate3d(0, 0, 0)
			}

			to {
				transform: translate3d(-48%, 0, 0)
			}
		}

		.custom-link-hover-effects:hover .custom-view-more i,
		.custom-link-hover-effects:hover .porto-sicon-heading-right i {
			transform: translate3d(7px, 0, 0)
		}

		.custom-link-hover-effects:hover .custom-crooked-line svg:last-child,
		.custom-team-pos:hover.custom-crooked-line svg:last-child {
			animation-name: crookedLineAnim;
			animation-duration: 2s;
			animation-iteration-count: infinite;
			animation-timing-function: linear
		}

		.custom-carousel-box-shadow-1:before {
			content: '';
			position: absolute;
			top: 50%;
			left: 50%;
			width: 65%;
			height: 0;
			box-shadow: 0 40px 40px 120px rgba(0, 0, 0, 0.03);
			transform: translate3d(-50%, -50%, 0);
			z-index: 0
		}

		.custom-view-more i::before {
			content: "\e8cc";
			font-family: "porto"
		}

		.custom-link-hover-effects .porto-sicon-heading-right i,
		.custom-view-more i {
			display: inline-block !important;
			transition: ease transform 300ms
		}

		.custom-view-more a {
			padding: 0;
			outline: none !important;
			box-shadow: none !important
		}

		.mw-90 {
			max-width: 90px;
			margin: 0 auto
		}

		.mw-140 {
			max-width: 140px;
			margin: 0 auto
		}

		.mw-100 {
			max-width: 100px !important;
			margin: 0 auto
		}

		.custom-carousel-1 .wpb_single_image .wpb_wrapper,
		.custom-carousel-1 .owl-stage {
			display: flex;
			align-items: center
		}

		.custom-dot-type-1 .owl-dots .owl-dot.active>span {
			background: #3e3e3e !important;
			width: 18px
		}

		.custom-dot-type-1 .owl-dots .owl-dot>span {
			background: #9e9e9e !important;
			transition: ease all 300ms
		}

		.custom-dot-type-1 .owl-nav.disabled+.owl-dots {
			margin-top: 30px
		}

		.custom-box-shadow-1 {
			box-shadow: 0 15px 60px -36px rgba(0, 0, 0, 0.45)
		}

		.custom-weight-1 strong {
			font-weight: 500
		}

		.custom-btn-style-1.custom-btn-primary a::before,
		.wpcf7 .custom-btn-style-1.custom-btn-primary::before {
			background: #f04c23
		}

		.wpcf7 form .custom-btn-style-1::before {
			z-index: 0
		}

		.custom-btn-style-1 .wpcf7-spinner {
			position: absolute;
			left: 100%;
			top: 50%;
			transform: translateY(-50%)
		}

		.custom-service-item .custom-crooked-line,
		.custom-crooked-line .porto-sicon-default {
			width: 100%
		}

		.custom-service-item .porto-sicon-img img {
			width: 100%
		}

		.custom-crooked-line.porto-sicon-box {
			position: relative
		}

		.custom-crooked-line .porto-just-icon-wrapper {
			display: flex
		}

		.custom-crooked-line .porto-sicon-default .porto-sicon-img {
			width: 100%;
			margin-right: 0
		}

		.custom-crooked-line .porto-sicon-header {
			position: absolute;
			left: 0;
			bottom: 0;
			padding: 1rem 1.5rem;
			z-index: 3
		}

		.custom-crooked-line .porto-sicon-header .crooked-wrapper {
			display: inline-block;
			width: 77px;
			overflow: hidden
		}

		.custom-crooked-line .porto-sicon-img::before {
			content: ' ';
			position: absolute;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
			z-index: 2;
			background: #212529;
			opacity: 0.8;
			pointer-events: none;
			transition: ease opacity 300ms 100ms
		}

		.h-123 {
			height: 123px
		}

		.custom-box-shadow-2 .vc_column-inner {
			box-shadow: 0 0 21px -5px rgba(0, 0, 0, 0.2)
		}

		@media (max-width:575px) {
			.custom-service-item h3 {
				font-size: 1.1rem !important
			}
		}

		.custom-overlay {
			position: absolute;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
			max-width: 40%;
			height: 180%
		}

		.custom-overlay::before {
			content: ' ';
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			z-index: 2;
			background: #212529;
			opacity: 0;
			pointer-events: none;
			transition: ease opacity 300ms 100ms
		}

		.overlay-color-primary::before {
			opacity: .8;
			background-color: #f04c23
		}

		.h-102 {
			height: 102px
		}

		.shape-divider.shape-divider-reverse {
			transform: rotateX(180deg)
		}

		.z-index-3 {
			z-index: 3
		}

		.vc_label_units {
			position: absolute;
			right: 0;
			bottom: .9rem
		}

		.progress-label span,
		.vc_label_units {
			font-size: 12.6px;
			font-weight: 600;
			color: #212529
		}

		.vc_progress_bar .vc_single_bar.progress.progress-sm,
		.progress.progress-sm {
			height: 5px;
			border-radius: 0;
			background-color: #f7f7f7
		}

		.vc_bar.progress-bar {
			position: static !important;
			border-radius: 0
		}

		.progress+.progress-label {
			position: relative;
			margin-top: 32px
		}

		.progress+.progress-label::before {
			content: '';
			position: absolute;
			top: -8px;
			height: 1px;
			left: 0;
			right: 0;
			background: rgba(0, 0, 0, 0.06)
		}

		.custom-team-pos .porto-sicon-img {
			position: relative
		}

		.custom-team-pos .porto-sicon-img img {
			object-fit: cover
		}

		.custom-team-pos .porto-sicon-img:hover::before {
			opacity: .8
		}

		.custom-team-pos .porto-sicon-img::before {
			opacity: 0
		}

		.custom-team-pos .porto-sicon-header {
			bottom: 117px
		}

		.custom-team-pos .porto-sicon-header h3 {
			text-indent: -9999px
		}

		.custom-team-pos .porto-sicon-description {
			margin-top: 0;
			padding: 32px;
			background: #fff
		}

		.custom-team-pos .porto-sicon-description p {
			margin-bottom: 0
		}

		.custom-text-member {
			font-size: 25.2px;
			line-height: 27px;
			letter-spacing: -.05em
		}

		.text-color-hover-primary:hover {
			color: #f04c23
		}

		.custom-contact {
			max-width: 32%;
			left: auto
		}

		.custom-contact::before {
			opacity: .9
		}

		.wpcf7-form .form-control {
			background: transparent;
			border: none;
			border-bottom: 1px solid #404040;
			line-height: 1.85;
			color: #FFF;
			box-shadow: none;
			font-size: 14px
		}

		.wpcf7-form .form-control::placeholder {
			color: #fff
		}

		.wpcf7-form input[type="submit"] {
			position: relative;
			box-shadow: none;
			outline: none;
			font-size: 15.4px;
			padding: 12px 28px
		}

		.wpcf7-form textarea {
			max-height: 217px
		}

		.home .meta-author,
		.home .meta-comments,
		.home .post-excerpt,
		.home .meta-cats i {
			display: none !important
		}

		.home .meta-cats a {
			font-size: 12.6px;
			font-weight: 600;
			color: #969696;
			letter-spacing: 2px;
			text-transform: uppercase
		}

		.home .grid-box {
			box-shadow: 0 0 21px -5px rgba(0, 0, 0, 0.2)
		}

		.home .post-meta,
		.home .post-content,
		.home .grid-box .clearfix:last-child {
			padding-left: 24px;
			padding-right: 24px
		}

		.home .post-grid {
			padding-left: 10px;
			padding-right: 10px;
			margin-bottom: 24px !important
		}

		.home .posts-container.row {
			margin-right: -10px;
			margin-left: -10px
		}

		.home article.post .post-date {
			right: 14px;
			top: auto;
			bottom: 26px;
			padding: 8px 16px;
			width: auto;
			background: #F04C23;
			transition: transform .3s
		}

		.home article.post:hover .post-date {
			transform: translate3d(2.5px, 2.5px, 0)
		}

		.home article.post .post-date::before {
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background: inherit;
			opacity: 0.7;
			transform: translate3d(5px, 5px, 0);
			transition: ease transform 300ms;
			z-index: -1
		}

		.home article.post:hover .post-date::before {
			transform: translate3d(0, 0, 0)
		}

		.home article.post .post-date .day {
			background: #F04C23;
			color: #fff;
			padding: 0;
			font-size: 1.44375rem;
			font-weight: 600;
			line-height: 1.2
		}

		.home article.post .post-date .month {
			padding: 0 4px;
			line-height: 1.2;
			box-shadow: none;
			font-size: 13.86px;
			font-weight: 600;
			letter-spacing: 2px;
			text-transform: uppercase
		}

		.home .post .img-thumbnail::before {
			content: ' ';
			position: absolute;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
			z-index: 2;
			background: #212529;
			opacity: 0;
			pointer-events: none;
			transition: ease opacity 300ms 100ms
		}

		.home .post .img-thumbnail:hover::before {
			opacity: .8
		}

		.home .post .zoom {
			display: none
		}

		.home .post .post-meta {
			padding-top: 4px;
			margin-bottom: 0
		}

		.home .post .btn-readmore {
			margin-top: -12px;
			padding: 0 0 19px 0;
			border-width: 0;
			background: #fff;
			color: #f04c23;
			font-size: 14px !important;
			font-weight: 500;
			text-transform: capitalize !important
		}

		.home .post .btn-readmore::after {
			content: "\e70b";
			display: inline-block;
			margin-left: 8px;
			vertical-align: middle;
			font-family: porto;
			font-size: 25px;
			transition: ease transform 300ms
		}

		.home .post .entry-title a:hover {
			color: #f04c23
		}

		.home .post:hover .btn-readmore::after {
			transform: translate3d(7px, 0, 0)
		}

		.testimonial.testimonial-style-6 {
			margin-top: 78px;
			margin-bottom: 16px
		}

		.testimonial blockquote p {
			font-family: Poppins, sans-serif;
			font-size: 16.8px !important;
			line-height: 1.8 !important;
			color: #212529
		}

		.testimonial .testimonial-author img {
			position: absolute;
			top: 49px;
			left: 50%;
			transform: translateX(-50%);
			max-width: 40px;
			border-radius: 0
		}

		.testimonial .testimonial-author strong {
			margin-top: 22px;
			font-size: 1.44375rem;
			font-weight: 700;
			letter-spacing: -1px
		}

		.testimonial .testimonial-author span {
			font-size: .875rem;
			font-weight: 400;
			color: #212529
		}

		.box-shadow-4 {
			box-shadow: 0 0 21px -5px rgba(0, 0, 0, 0.2)
		}

		.nav-pos-outside .owl-nav .owl-next::before,
		.nav-pos-outside .owl-nav .owl-prev::before {
			content: "\e70b";
			font-size: 28px
		}

		.nav-pos-outside .owl-nav .owl-prev {
			transform: rotateY(180deg) translateY(-50%)
		}

		.owl-carousel.nav-pos-outside .owl-nav .owl-prev {
			left: -56px
		}

		.owl-carousel.nav-pos-outside .owl-nav .owl-next {
			right: -56px
		}

		@media (min-width:1921px) {
			.shape-divider {
				top: -2px
			}

			.shape-divider svg {
				width: 100%;
				top: 1px
			}

			.shape-divider.shape-divider-bottom {
				bottom: -2px
			}
		}

		@media (min-width:992px) {

			.single-post .main-content.col-lg-9,
			.blog .main-content.col-lg-9,
			.archive.category .main-content.col-lg-9 {
				width: 66.666667%
			}

			.single-post .porto-blog-sidebar,
			.blog .porto-blog-sidebar,
			.archive.category .porto-blog-sidebar {
				width: 33.333333%
			}
		}

		.single-post .main-content-wrap,
		.blog .main-content-wrap,
		.archive.category .main-content-wrap {
			margin-top: 52px
		}

		.single-post .main-content h3 {
			color: #212529
		}

		.sidebar-content {
			padding: 0 16px
		}

		.sidebar-content .widget .widget-title {
			font-size: 1.5em;
			letter-spacing: -.05em;
			margin-bottom: 16px
		}

		.sidebar-content #searchform #s,
		.sidebar-content .widget_search .btn-dark {
			height: 45px;
			font-size: 11.2px
		}

		.sidebar-content .widget+.widget {
			padding-top: 37px
		}

		.widget_recent_entries .post-date {
			line-height: 26px
		}

		.widget_recent_entries>ul li>a,
		.widget_recent_comments>ul li>a {
			font-weight: 700;
			line-height: 19.6px
		}

		.widget_categories>ul li>a {
			font-size: 12.6px;
			font-weight: 400;
			line-height: 20px;
			color: #666
		}

		.porto-blog-sidebar .widget_categories .cat-item a {
			display: inline-block;
			padding: 8px 0 8px 22px !important
		}

		.porto-blog-sidebar .widget_categories .cat-item a::before {
			margin-left: 0;
			font-family: 'Font Awesome 5 Free';
			content: "\f054";
			font-weight: 900;
			position: absolute;
			top: 9px;
			font-size: 0.45rem;
			opacity: 0.7;
			transform: translate3d(-1px, 0, 0);
			left: 12px
		}

		.posts-modern .post .entry-title {
			margin-bottom: .5rem;
			padding-bottom: .25rem;
			font-size: 1.5em;
			font-weight: 700;
			letter-spacing: -.05em;
			line-height: 27px
		}

		.posts-modern .post .post-meta {
			font-size: .8em;
			margin: .5rem 0;
			line-height: 26px;
			order: -1
		}

		.posts-modern .post-content {
			display: flex;
			flex-direction: column
		}

		.posts-modern .post-image,
		.posts-modern .post-image .owl-carousel {
			margin-bottom: .5rem !important
		}

		.post-modern .btn-readmore {
			text-transform: capitalize;
			font-size: 1em;
			font-weight: 500
		}

		.blog-posts .post-modern {
			padding-bottom: .5rem;
			border-bottom-width: 0
		}

		.post-modern .post-excerpt {
			margin-bottom: 8px
		}

		.pagination .page-numbers {
			min-width: 40px;
			height: 40px;
			line-height: 38px;
			font-weight: 400;
			background: #fff;
			border: none;
			font-size: 1rem;
			color: #f04c23;
			border: 1px solid rgba(0, 0, 0, 0.06)
		}

		.pagination .page-numbers:not(.current):hover {
			background-color: #e9ecef;
			border-color: #dee2e6
		}
	</style>
	<link rel="https://api.w.org/" href="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-json/" />
	<link rel="alternate" type="application/json" href="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-json/wp/v2/pages/9" />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.portotheme.com/wordpress/porto/business-consulting3/xmlrpc.php?rsd" />
	<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-includes/wlwmanifest.xml" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
	<meta name="generator" content="WordPress 5.7.6" />
	<link rel="canonical" href="https://www.portotheme.com/wordpress/porto/business-consulting3/" />
	<link rel='shortlink' href='https://www.portotheme.com/wordpress/porto/business-consulting3/' />
	<link rel="alternate" type="application/json+oembed" href="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.portotheme.com%2Fwordpress%2Fporto%2Fbusiness-consulting3%2F" />
	<link rel="alternate" type="text/xml+oembed" href="https://www.portotheme.com/wordpress/porto/business-consulting3/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.portotheme.com%2Fwordpress%2Fporto%2Fbusiness-consulting3%2F&#038;format=xml" />
	<script type="text/javascript">
		WebFontConfig = {
			google: {
				families: ['Poppins:400,500,600,700,800']
			}
		};
		(function(d) {
			var wf = d.createElement('script'),
				s = d.scripts[0];
			wf.src = 'https://www.portotheme.com/wordpress/porto/business-consulting3/wp-content/themes/porto/js/libs/webfont.js';
			wf.async = true;
			s.parentNode.insertBefore(wf, s);
		})(document);
	</script>
	<style>
		.recentcomments a {
			display: inline !important;
			padding: 0 !important;
			margin: 0 !important;
		}
	</style>
	<meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress." />
	<noscript>
		<style>
			.wpb_animate_when_almost_visible {
				opacity: 1;
			}
		</style>
	</noscript>
</head>

<body>
	<nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #e3f2fd;">
		<div class="container">
			<a class="navbar-brand mr-auto" href="#">PositronX</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					@guest
					<li class="nav-item">
						<a class="nav-link" href="{{ route('login') }}">Login</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('register-user') }}">Register</a>
					</li>
					@else
					<li class="nav-item">
						<a class="nav-link" href="{{ route('signout') }}">Logout</a>
					</li>
					@endguest
				</ul>
			</div>
		</div>
	</nav>
	@yield('content')
	<script src="login.js"></script>
</body>

</html>
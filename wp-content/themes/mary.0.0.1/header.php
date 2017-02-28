<!DOCTYPE html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php bloginfo('name');?></title>
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
        	<!--[if lte IE 8]>
				<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/grids-responsive-old-ie-min.css">
			<![endif]-->
			<!--[if gt IE 8]><!-->
				<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/grids-responsive-min.css">
			<!--<![endif]-->
			
	    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/style.css">
        <script src="<?php bloginfo('stylesheet_directory');?>/js/vendor/modernizr-2.6.2.min.js"></script>
        
        <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory');?>/favicon.ico">
        <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
        
  		<?php wp_head(); ?>
    </head>
    
    	<body <?php body_class(); ?>>
        <!--[if lte IE 9]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

		<div class="layout pure-g">



            <div class="header-bar pure-u-1 fixed pull-up stretch-lr dark">

                        <div class="menu-icon pull-left pull-up padding-left-1 pointer fixed top header-fixed fadely">
                            <svg version="1.1" class="pointer icon hamburger" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 200 210" style="enable-background:new 0 0 198.129 210;" xml:space="preserve">
                                <g>
                                    <rect class="top-line" x="0" y="28.026" width="198.129" height="8"/>
                                    <rect class="mid-line" x="0" y="95.23" width="198.129" height="8"/>
                                    <rect class="bot-line" x="0" y="163.525" width="198.129" height="8"/>
                                </g>
                            </svg>          
                            
                            <!--
                            <svg version="1.1" class="pointer icon close" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                                <line id="XMLID_2_" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="3.1" y1="97.6" x2="96.9" y2="3.8"/>
                                <line id="XMLID_3_" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="3.1" y1="3.8" x2="96.9" y2="97.6"/>
                            </svg>
                            -->
                        </div>

                        <a href="<?php bloginfo('url'); ?>" class="link-no-decor pull-right">
                            <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="<?php bloginfo('name'); ?>" />
                        </a>
                    
            </div>
		
			<div class="sidebar pure-u-1 pure-u-md-1-3 pure-u-lg-1-4">
			
				<div class="pure-menu pure-menu-open border border-top-1 margin-top-1">
					<?php 
						$menu_args = array(
							'container' => false
						);
					?>
					<?php wp_nav_menu( $menu_args ); ?>
				</div>
				
			</div><!--/.sidebar-->
    	
    	
    	<div class="content pure-u-1 padding-bottom-2">
    	
    	
    	<!-- end header.php -->
<!DOCTYPE html>
<html lang="en">
    <head>
    
        <meta charset="utf-8">
        <title><?php echo page_title('Page can’t be found'); ?> — <?php echo site_name(); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php echo site_description(); ?>">
        
        <link href="<?php echo theme_url('/css/bootstrap.css'); ?>" rel="stylesheet">
        <link href="<?php echo theme_url('/css/app.css'); ?>" rel="stylesheet">
        <link rel="icon" 
      type="image/png" 
      href="<?php echo theme_url('/sirvofavicon.png'); ?>">
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
              <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

	      <?php if(customised()): ?>
		    <!-- Custom CSS -->
    		<style><?php echo article_css(); ?></style>

    		<!--  Custom Javascript -->
    		<script><?php echo article_js(); ?></script>
		    <?php endif; ?>
	
        <?php if (($color = article_custom_field('link_color')) || ($color = page_custom_field('link_color'))): ?>
        <style>
        .bs-docs-nav .navbar-brand,
        .bs-docs-nav .navbar-nav > li > a {
            font-weight: 500;
            color: <?php echo $color; ?>;
        }
        .bs-docs-nav .navbar-nav > li > a:hover,
        .bs-docs-nav .navbar-nav > .active > a,
        .bs-docs-nav .navbar-nav > .active > a:hover {
            color: <?php echo $color; ?>;
        }
        footer a{
            color:<?php echo $color; ?>;
        }
        
        footer a:hover{
	        color:<?php echo $color; ?>;
        }   
        </style>
        <?php endif; ?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-40613242-4']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
    </head>
    <body>

        <header class="navbar navbar-static-top bs-docs-nav" style="padding-top:15px;padding-bottom:15px;"id="top" role="banner">
            <div class="container">
                <div class="navbar-header">
                
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
      
                    <a href="/" class="navbar-brand">
                    <img style="margin-top:0px;height:50px;width:auto;" src="<?php echo base_url('content/img/headerlogo.png'); ?>"/>
                    </a>
    
                </div>
    
              <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
<!--               <?php if(has_menu_items()): ?>
                <ul class="nav navbar-nav">
                  <?php while(menu_items()): ?>
                    <li <?php echo (menu_active() ? 'class=""' : ''); ?>>
                      <a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>"><?php echo menu_name(); ?></a>
                    </li>
                  <?php endwhile; ?>
                </ul>
              <?php endif; ?> -->
              <ul class="nav navbar-nav navbar-right">
<!--                     <li <?php echo (menu_active() ? 'class=""' : ''); ?>>
                      <a style="color:black"href="http://my.gosirvo.com/login" title="Login">Login</a>
                    </li> -->
                    <li <?php echo (menu_active() ? 'class=""' : ''); ?>>
                      <a style="color:black"href="http://gosirvo.com" title="Register">SIGN UP</a>
                    </li>
              </ul>
              </nav>
            </div>
        </header>
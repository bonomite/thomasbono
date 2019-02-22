<head>

  	<meta charset="utf-8">
  	<meta http-equiv="x-ua-compatible" content="ie=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" shrink-to-fit=no">
  	@php wp_head() @endphp

  	<?php 
  		$pageName = get_the_title();
  		$pageName = strtolower($pageName);

  		//echo $pageName;
	?>
	

	<?php if ($pageName == 'home') { ?>
	    @include('meta.home')
	<?php } else if ($pageName == 'details') { ?>
	    @include('meta.details')
	<?php } else if ($pageName == 'alone') { ?>
	    @include('meta.alone')
	<?php } else if ($pageName == 'sites' || $pageName == 'design' || $pageName == 'motion' || $pageName == 'photography') { ?>
	    @include('meta.projects')
	<?php } else { ?>
	    @include('meta.home')
	<?php } ?>


	<link rel="apple-touch-icon" sizes="180x180" href="/wp-content/themes/thomasbono/dist/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/wp-content/themes/thomasbono/dist/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/wp-content/themes/thomasbono/dist/images/favicon-16x16.png">
	<link rel="manifest" href="/wp-content/themes/thomasbono/dist/images/site.webmanifest">
	<link rel="shortcut icon" href="/wp-content/themes/thomasbono/dist/images/favicon.ico">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-config" content="/wp-content/themes/thomasbono/dist/images/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">


	<!-- Global site tag (gtag.js) - Google Analytics -->
	@include('partials.ga')


	<!-- Hotjar Tracking Code for https://thomasbono.com/ -->
	@include('partials.hotjar')


</head>

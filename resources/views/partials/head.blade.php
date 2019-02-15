<head>

  	<meta charset="utf-8">
  	<meta http-equiv="x-ua-compatible" content="ie=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
	<?php } else { ?>
	    @include('meta.home')
	<?php } ?>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	@include('partials.ga')


	<!-- Hotjar Tracking Code for https://thomasbono.com/ -->
	@include('partials.hotjar')


</head>

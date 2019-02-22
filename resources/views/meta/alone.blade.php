<?php if( have_rows('project',64) ): 

	$id = $_GET['project'];                	
	$rows = get_field('project',64);
	$specific_row = $rows[$id];
	
	$gallery = $specific_row['gallery'];
	$imgIndex = $_GET['index'];		

	?>
	<meta property="og:url"           content="{{'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']}}" />
  	<meta property="og:type"          content="website" />
  	<meta property="og:title"         content="{{$gallery[$imgIndex]['title']}}" />
		<meta property="og:description"   content="{{$gallery[$imgIndex]['description']}}" />
  	<meta property="og:image" 		  content="{{$gallery[$imgIndex]['url']}}" />

  	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@bonomite">
	<meta name="twitter:creator" content="@bonomite">
	<meta name="twitter:title" content="{{$gallery[$imgIndex]['title']}}">
	<meta name="twitter:description" content="{{$gallery[$imgIndex]['description']}}">
	<meta name="twitter:image" content="{{$gallery[$imgIndex]['url']}}">

<?php endif; ?>
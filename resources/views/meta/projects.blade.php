<?php if( have_rows('project',64) ): 

	$id = $_GET['project'];                	
	$rows = get_field('project',64);
	$specific_row = $rows[0];
	
	$type = $specific_row['type'];
	$poster = $specific_row['poster'];
	$title = $specific_row['title'];
	$desc = $specific_row['desc'];
	$gallery = $specific_row['gallery'];


	?>
	<meta property="og:url"           content="{{'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']}}" />
  	<meta property="og:type"          content="website" />
  	<meta property="og:title"         content="{{$title}}" />
	<meta property="og:description"   content="Review this collection by Thomas Bono" />
  	<meta property="og:image" 		  content="{{$gallery[0]['url']}}" />

  	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@bonomite">
	<meta name="twitter:creator" content="@bonomite">
	<meta name="twitter:title" content="{{$title}}">
	<meta name="twitter:description" content="Review this collection by Thomas Bono">
	<meta name="twitter:image" content="{{$gallery[0]['url']}}">
  	

<?php endif; ?>
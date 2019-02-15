<?php if( have_rows('project',64) ): 

	$id = $_GET['project'];                	
	$rows = get_field('project',64);
	$specific_row = $rows[$id];
	
	$type = $specific_row['type'];
	$poster = $specific_row['poster'];
	$title = $specific_row['title'];
	$desc = $specific_row['desc'];
	$gallery = $specific_row['gallery'];


	?>
	<meta property="og:url"           content="{{'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']}}" />
  	<meta property="og:type"          content="website" />
  	<meta property="og:title"         content="{{$title}}" />
		<meta property="og:description"   content="{{$desc}}" />
  	<meta property="og:image" 		  content="{{$gallery[0]['url']}}" />

<?php endif; ?>
{{--
  Template Name: Bono Detail Template
--}}

@extends('layouts.app')

@section('content')
  	
  	@include('bono-modal')

	<div id="details" class="section">
        <div class="container">
            
            <div class="fb-share-button" data-href="https://www.thomasbono.com/details/?id=15&amp;title=yellowstone-national-park#yellowstone_01" data-layout="button" data-size="large" data-mobile-iframe="false"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.thomasbono.com%2Fdetails%2F%3Fid%3D15%26title%3Dyellowstone-national-park%23yellowstone_01&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
            	
            <div class="details">               
            	
                <?php if( have_rows('project',64) ): 

                	$id = $_GET['id']-1;
                	$rows = get_field('project',64);
					$specific_row = $rows[$id];
					
					$type = $specific_row['type'];
					$poster = $specific_row['poster'];
					$title = $specific_row['title'];
					$desc = $specific_row['desc'];
					$tools = $specific_row['tools-list'];
					$link = $specific_row['link'];
					$media = $specific_row['media'];
					$gallery = $specific_row['gallery'];
					$size = array(432,287);




					?>

					<div id="goBackArrow" data-where="{{$type[0]}}">@include('svgs.backButton')</div>

					<div class="row info">
						<div class="cols col-md-6">
							<h1>{{$title}}</h1>
							{!!$desc!!}
							
						</div>
						<div class="cols col-md-6 tech">
							<p class="mb-0">TECHNOLOGIES:</p>
							<div class="bullets">
								{!!$tools!!}
							</div>
						</div>
					</div>

					<?php 
					if( $gallery || $media): ?>
						<div class="masonry-grid">
						<div class="grid-item galleryImage item" style="height: 0; padding: 0;"></div>


							<?php 
						if( !empty($media) ): ?>						
							

							
							<?php foreach( $media as $item ): 

								$gtitle = $item['title'];
								$hash = strtolower(implode('-',explode(" ", $gtitle)));								 
		                        $image = $item['image'];                        
		                        $youtubeID = $item['youtubeID'];
		                        $codepenID = $item['codepenID'];
		                        $weblink = $item['weblink'];			                        
								
								?>

								@if(!empty($weblink))
							        <div id="{{$hash}}" class="grid-item item link">
							        	<a href="{{$weblink}}" target="_blank">
								        	<img src="{{$image}}">
								        	@include('svgs.link')
							        	</a>
							        </div>
							    @elseif (!empty($youtubeID))							        
								    <div id="{{$hash}}" class="grid-item item video">
								    	<div class="videoWrapper">
								    		<iframe src="https://www.youtube.com/embed/{{$youtubeID}}?rel=0&showinfo=0&autohide=1&modestbranding=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								    	</div>
									</div>
							    @elseif (!empty($codepenID))
							        <div id="{{$hash}}" class="grid-item item codepen">
								    	
											<iframe height="402" style="width: 100%;" scrolling="no" title="SVG Morph" src="//codepen.io/bonomite/embed/{{$codepenID}}/?height=402&theme-id=dark&default-tab=result" frameborder="no" allowtransparency="true" allowfullscreen="true">
											  See the Pen <a href='https://codepen.io/bonomite/pen/{{$codepenID}}/'>SVG Morph</a> by Thomas Bono
											  (<a href='https://codepen.io/bonomite'>@bonomite</a>) on <a href='https://codepen.io'>CodePen</a>.
											</iframe>
									</div>
							    @endif
								
								
							<?php endforeach; ?>
							
						<?php endif; ?>


					        <?php foreach( $gallery as $image ): 
					            	$gtitle = $image['title'];
					            	$imgURL = $image['url'];
									$hash = strtolower(implode('-',explode(" ", $gtitle)));	
								?>
						    	<div id="{{$gtitle}}" class="grid-item item galleryImage" data-img="{{$imgURL}}">
					            	<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
					            	<div class="enlarge-icon">@include('svgs.enlarge')</div>
						    	</div>

					        <?php endforeach; ?>
				    	</div>

					<?php endif; ?>

					
					
                        
                <?php endif; ?>
				

            
            </div>
	            
	            
	        
	    </div>
	</div>


@endsection

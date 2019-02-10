{{--
  Template Name: Bono Detail Template
--}}

@extends('layouts.app')

@section('content')
  	
  	@include('bono-modal')

	<div id="details" class="section">
        <div class="container">
            
            
            	
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



					<?php 
					if( $gallery ): ?>
						<div class="masonry-grid">
						<div class="grid-item galleryImage item" style="height: 0; padding: 0;"></div>


							<?php 
						if( !empty($media) ): ?>						
							

							
							<?php foreach( $media as $item ): 

								$title = $item['title'];                        
		                        $image = $item['image'];                        
		                        $youtubeID = $item['youtubeID'];
		                        $codepenID = $item['codepenID'];
		                        $weblink = $item['weblink'];			                        
								//var_dump($item)
								?>

								@if(!empty($weblink))
							        <div class="grid-item item link">
							        	<a href="{{$weblink}}" target="_blank">
								        	<img src="{{$image}}">
								        	@include('svgs.link')
							        	</a>
							        </div>
							    @elseif (!empty($youtubeID))							        
								    <div class="grid-item item video">
								    	<div class="videoWrapper">
								    		<iframe src="https://www.youtube.com/embed/{{$youtubeID}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								    	</div>
									</div>
							    @elseif (!empty($codepenID))
							        <div class="grid-item item codepen">
								    	
											<iframe height="402" style="width: 100%;" scrolling="no" title="SVG Morph" src="//codepen.io/bonomite/embed/{{$codepenID}}/?height=402&theme-id=dark&default-tab=result" frameborder="no" allowtransparency="true" allowfullscreen="true">
											  See the Pen <a href='https://codepen.io/bonomite/pen/{{$codepenID}}/'>SVG Morph</a> by Thomas Bono
											  (<a href='https://codepen.io/bonomite'>@bonomite</a>) on <a href='https://codepen.io'>CodePen</a>.
											</iframe>
									</div>
							    @endif
								
								
							<?php endforeach; ?>
							
						<?php endif; ?>


					        <?php foreach( $gallery as $image ): ?>
					            
						    	<div class="grid-item galleryImage item" data-img="{{$image['url']}}">
					            	<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
						    	</div>

					        <?php endforeach; ?>
				    	</div>

					<?php endif; ?>

					
					
                        
                <?php endif; ?>
				

            
            </div>
	            
	            
	        
	    </div>
	</div>


@endsection

{{--
  Template Name: Bono Detail Template
--}}

@extends('layouts.app')

@section('content')
  

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
					$size = 'full';




					?>

					<!-- <p>title= {{$title}}</p>
					<p>id= {{$id}}</p> -->

					<div id="goBackArrow" data-where="{{$type[0]}}">@include('svgs.backButton')</div>



					<!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/tdxOhLGqTxM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->

					<!-- <iframe height="265" style="width: 100%;" scrolling="no" title="SVG Morph" src="//codepen.io/bonomite/embed/GzORzE/?height=265&theme-id=0&default-tab=html,result" frameborder="no" allowtransparency="true" allowfullscreen="true">
					  See the Pen <a href='https://codepen.io/bonomite/pen/GzORzE/'>SVG Morph</a> by Thomas Bono
					  (<a href='https://codepen.io/bonomite'>@bonomite</a>) on <a href='https://codepen.io'>CodePen</a>.
					</iframe> -->

					


					<!-- if its a LINK or VIDEO or CODEPEN or GALLERY -->
					<?php 
					if( !empty($media) ): ?>						
						<div class="masonry-grid2">

						
						<?php foreach( $media as $item ): 

							$title = $item['title'];                        
	                        $image = $item['image'];                        
	                        $youtubeID = $item['youtubeID'];
	                        $codepenID = $item['codepenID'];
	                        $weblink = $item['weblink'];			                        
							//var_dump($item)
							?>

							@if(!empty($weblink))
						        <p>web link</p>
						    @elseif (!empty($youtubeID))
						        <p>youtube link {{$youtubeID}}</p>
							    <iframe width="560" height="315" src="https://www.youtube.com/embed/{{$youtubeID}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						    @elseif (!empty($codepenID))
						        <p>codepen</p>
						    @endif


							<div> this work? {{$weblink}}</div>
							
						<?php endforeach; ?>
						</div>
					<?php endif; ?>




					<?php 
					if( $gallery ): ?>
						<div class="masonry-grid">

															
								





							

					        <?php foreach( $gallery as $image ): ?>
					            
						    	<div class="grid-item galleryImage item">
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

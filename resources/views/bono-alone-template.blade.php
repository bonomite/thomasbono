{{--
  Template Name: Bono Alone Template
--}}

@extends('layouts.app')

@section('content')
  	
	<div id="alone" class="section">
        <div class="container">
            
            <div class="fb-share-button" data-href="https://thomasbono.com/alone/?project=12&amp;index=2&amp;title=pleasantdale-chateau_7" data-layout="button" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fthomasbono.com%2Falone%2F%3Fproject%3D12%26index%3D2%26title%3Dpleasantdale-chateau_7&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>

            @include('svgs/shareButton')

            <div id="shareButtonHolder">            
            	
            </div>
            	
            <div class="details alone">               
            	
                <?php if( have_rows('project',64) ): 

                	$id = $_GET['project'];                	
                	$rows = get_field('project',64);
					$specific_row = $rows[$id];					
					
					$type = $specific_row['type'];
					//$poster = $specific_row['poster'];
					$title = $specific_row['title'];
					$desc = $specific_row['desc'];
					$tools = $specific_row['tools-list'];
					//$link = $specific_row['link'];
					$gallery = $specific_row['gallery'];
					$imgIndex = $_GET['index'];					
					$size = 'full';

					

					?>

					<div id="goBackArrow" data-where="{{$type[0]}}">@include('svgs.backButton')</div>

					<div class="row info">
						<div class="cols col-md-6">
							<h1>{{$gallery[$imgIndex]['title']}}</h1>
							{{$gallery[$imgIndex]['description']}}
							<h4>{{$title}}</h4>
							
						</div>
						<div class="cols col-md-6 tech">
							<p class="mb-0">TECHNOLOGIES:</p>
							<div class="bullets">
								{!!$tools!!}
							</div>
						</div>
					</div>

					<?php 
					if($gallery): ?>

				    	<div class="aloneImgHolder">
			            	<?php echo wp_get_attachment_image( $gallery[$imgIndex]['ID'], $size ); ?>
				    	</div>					        

					<?php endif; ?>

                <?php endif; ?>
				

            
            </div>
	            
	            
	        
	    </div>
	</div>


@endsection

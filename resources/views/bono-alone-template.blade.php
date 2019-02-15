{{--
  Template Name: Bono Alone Template
--}}

@extends('layouts.app')

@section('content')
  	
	<div id="alone" class="section">
        <div class="container">
            
            

            

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

					$thisURL = urlencode('https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);				    
					?>

					<div id = "shareButtonHolder" class="" data-href="{{$thisURL}}" >
				    		@include('svgs/shareButton')				    		
				  	</div>

					<div id="goBackArrow" data-where="{{$type[0]}}">		@include('svgs.backButton')
					</div>

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

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

					<!-- if its a LINK or VIDEO or CODEPEN or GALLERY -->
					
                        
                <?php endif; ?>
				

            
            </div>
	            
	            
	        
	    </div>
	</div>


@endsection

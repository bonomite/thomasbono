{{--
  Template Name: Bono Template Design
--}}

@extends('layouts.app')

@section('content')
	
	<div id="design-s1" class="section pt-0 design">
        <div class="container">
            
            <h1>Design</h1>
            	
            <div class="row projects">               
            	
                <?php if( have_rows('project') ): 

                    while( have_rows('project') ): the_row(); 

                        $poster = get_sub_field('poster');                        
                        ?>

                        <div class="col-sm-6 col-lg-4">
                            <img class="poster" src="<?php echo $poster; ?>">
                            
                        </div>          
                    

                    <?php endwhile; ?>
                        
                <?php endif; ?>
            </div>
	            
	            
	        
	    </div>
	</div>



  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile

@endsection

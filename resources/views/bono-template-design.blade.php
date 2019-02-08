{{--
  Template Name: Bono Template Design
--}}

@extends('layouts.app')

@section('content')
	
	<div id="portfolio" class="section pt-0 design">
        <div class="container">
            
            <h1>Design sdlkfj</h1>
            	
            <div class="row projects">               
            	
                <?php if( have_rows('project',64) ): 

                    while( have_rows('project',64) ): the_row(); 

                        $type = get_sub_field('type');
                        $poster = get_sub_field('poster');                        
                        $title = get_sub_field('title');                        
                        $link = get_sub_field('link');

                        $urlvar = strtolower(implode('-',explode(" ", $title)));
                        $index = get_row_index();


                        
                        ?>

                        @if(in_array('design', $type))

                        <div class="col-sm-6 col-lg-4">
                            <!-- <img class="poster" src="{{$poster}}"> -->
                            <div class="poster bw" data-index="{{$index}}" data-title="{{$urlvar}}" style="background-image: url({{$poster}});"></div>
                            
                        </div>

                        @endif
                    

                    <?php endwhile; ?>
                        
                <?php endif; ?>
            
            </div>
	            
	            
	        
	    </div>
	</div>

@endsection

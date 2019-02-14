{{--
  Template Name: Bono Projects Template
--}}

@extends('layouts.app')

@section('content')
	<?php 
        $pagename = get_query_var('pagename');
    ?>
	<div id="presentation">

        

        @include('presentations.'.$pagename) 

         
    </div>
    <?php ?>
    <div id="portfolio" class="section pt-0">
        <div class="container">
                        
            	
            <div class="row projects">               
            	
                <?php if( have_rows('project',64) ): 
                        $pagename = get_query_var('pagename');
                    
                    while( have_rows('project',64) ): the_row(); 

                        $type = get_sub_field('type');
                        $poster = get_sub_field('poster');                        
                        $title = get_sub_field('title');                        
                        //$link = get_sub_field('link');

                        $urlvar = strtolower(implode('-',explode(" ", $title)));
                        $index = get_row_index();

                        
                        ?>

                        @if(in_array($pagename, $type))

                        <div class="col-sm-6 col-lg-4">
                            
                            <!-- <img class="poster" src="{{$poster}}"> -->
                            <div class="poster bw" data-index="{{$index}}" data-title="{{$urlvar}}" style="background-image: url({{$poster}});">
                                <div class="title-holder"><h4>{{$title}}</h4></div>
                            </div>
                            
                        </div>

                        @endif
                    

                    <?php endwhile; ?>
                        
                <?php endif; ?>
            
            </div>
	            
	            
	        
	    </div>
	</div>

@endsection

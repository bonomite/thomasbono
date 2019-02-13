{{--
  Template Name: Bono Home Template
--}}

@extends('layouts.app')

@section('content')

  <!-- @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile -->
  <?php $castle = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full');?>
  <div id="castle-hero" style="background-image: url('<?php echo $castle[0]?>');"></div>

  <section id="s1" class="section">
  	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				@php the_field('home-welcome'); @endphp
			</div>
			<div class="col-sm-4 pt-4 pt-sm-0">
				@php the_field('home-contact'); @endphp
			</div>
		</div>
      </div>
  </section>
  

@endsection

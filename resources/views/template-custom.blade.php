{{--
  Template Name: Custom Template
--}}

@extends('layouts.app')

<div class="container custom">
	<div class="row">
		<div class="col-12">
			@section('content')
			  @while(have_posts()) @php the_post() @endphp
			    @include('partials.page-header')
			    @include('partials.content-page')
			  @endwhile
			@endsection
		</div>
	</div>
</div>
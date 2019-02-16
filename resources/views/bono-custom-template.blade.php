{{--
  Template Name: Bono Custom Template
--}}

@extends('layouts.app')

			@section('content')
<div class="container custom">
	<div class="row">
		<div class="col-12">
			  @while(have_posts()) @php the_post() @endphp
			    @include('partials.page-header')
			    @include('partials.content-page')
			  @endwhile
		</div>
	</div>
</div>
			@endsection
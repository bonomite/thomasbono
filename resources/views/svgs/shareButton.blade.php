<?xml version="1.0" encoding="utf-8"?>
<!-- Generator: Adobe Illustrator 23.0.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" id="shareButton" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
<style type="text/css">
	#shareButton .st0{fill:#909090;}
</style>
<g>
	<path class="st0" d="M74.1,83.3c-20,0-39.6,0-59.3,0c0-14.2,0-38.3,0-52.6c4,0,7.8,0,11.6,0c0.7,0,1.6,0,2-0.4c3-2.8,5.9-5.6,9-8.6
		c-0.6,0-1.1-0.1-1.7-0.1c-8.3,0-16.6,0-24.9,0c-3.9,0-5.3,1.5-5.3,5.4c0,16.7,0,43.3,0,60c0,4,1.5,5.5,5.5,5.5
		c22.2,0,44.4,0,66.5,0c4.1,0,5.6-1.5,5.7-5.6c0-7.4,0-24.8,0-32.3c0-0.7-0.1-1.3-0.2-2.4c-2.6,2.1-4.8,4-7.2,5.7
		c-1.3,1-1.9,2.1-1.8,3.8C74.2,65.6,74.1,79.4,74.1,83.3z M66.5,20.6c-10.7,0.1-19.8,3.1-27,10.9c-6.2,6.7-11.9,21.3-10.6,27
		c11.2-20.9,27.7-22.1,37.6-21.2c0,4.7,0,9.5,0,14.8C76.9,44.4,86.8,36.9,97,29.3c-10.2-7.7-20.1-15.2-30.5-23
		C66.5,11.4,66.5,15.9,66.5,20.6z"/>
</g>
</svg>
<div id="shareButtons">
	<div class="row m-0">
		<a target="_blank" class="col-12 p-0" href="https://www.facebook.com/sharer.php?u={{$thisURL}}" title="Share to Facebook">
			<div class=" my-auto socialButton fb">@include('svgs.fb')</div>
		</a>

		<a target="_blank" class="col-12 p-0" href="https://twitter.com/share?url={{$thisURL}}&text={{$title}}" title="Share to Twitter">
			<div class="my-auto socialButton tw">@include('svgs.tw')</div>
		</a>

		<a target="_blank" class="col-12 p-0" href="https://www.linkedin.com/shareArticle?url={{$thisURL}}&title={{$title}}" title="Share to Linked In">
			<div class="my-auto socialButton li">@include('svgs.li')</div>
		</a>

		 <a target="_blank" class="col-12 p-0" href="'mailto:?subject=' . {{$title}} . '&body={{$desc}}: '. {{$thisURL}} .'" title="Share by Email'">
		 	<div class="my-auto socialButton em">@include('svgs.em')</div>
		 </a>

	</div>
</div>

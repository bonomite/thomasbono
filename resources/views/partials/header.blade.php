<header class="banner">
  <!-- <div class="container"> -->
  
    <nav class="navbar">

      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
        <span id="shield" class="navbar-toggler-icon">

          <?php
          $classes = get_body_class(); 
          if (in_array('bono-home-template',$classes)) { ?>
              <img class="logo bw" src="@asset('images/logo_2019_bw.png')">
          <?php } else { ?>
              <img class="logo bw" src="@asset('images/logo_2019_bw_noshadow.png')">              
          <?php } ?>
          
          <img class="logo color" src="@asset('images/logo_2019.png')">

        </span>
      </button>
      
        <!-- <a class="navbar-brand brand" href="{{ home_url('/') }}">logo here</a> -->

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navbar-nav ml-auto']) !!}
          @endif

        </div>


    </nav>
 <!--  </div> -->
</header>
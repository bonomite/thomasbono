<header class="banner">
  
    <nav class="navbar navbar-toggleable-md navbar-expand-md">

      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
          <svg version="1.1" id="menuHB" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 15 15" style="enable-background:new 0 0 15 15;" xml:space="preserve">
            <rect x="0" y="2" width="15" height="1"/>
            <rect x="0" y="7" width="15" height="1"/>
            <rect x="0" y="12" width="15" height="1"/>
          </svg>
          <svg version="1.1" id="menuX" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 15 15" style="enable-background:new 0 0 15 15;" xml:space="preserve">
            <polygon points="13.16,2.55 12.45,1.84 7.5,6.79 2.55,1.84 1.84,2.55 6.79,7.5 1.84,12.45 2.55,13.16 7.5,8.21 12.45,13.16 
            13.16,12.45 8.21,7.5 "/>
          </svg>
        </span>
      </button>
      
      <div class="container">
        <a class="navbar-brand brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navbar-nav ml-auto']) !!}
          @endif

        </div>

      </div>

    </nav>
</header>
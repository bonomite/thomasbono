// import external dependencies
import 'jquery';

import 'bootstrap/dist/js/bootstrap';
import TweenLite, { TweenPlugin, Ease, Power0, Power1, Power2, Power3, Power4, Linear } from 'gsap/TweenLite.js';
import TweenMax from 'gsap/TweenMax';
import TimelineMax from 'gsap/TimelineMax';
import { Back, Elastic, Bounce, RoughEase, SlowMo, SteppedEase, Circ, Expo, Sine, ExpoScaleEase } from 'gsap/EasePack.js';
import ScrollToPlugin from 'gsap/ScrollToPlugin';
window.ScrollMagic = require('scrollmagic/scrollmagic/uncompressed/ScrollMagic');
import 'scrollmagic/scrollmagic/uncompressed/plugins/animation.gsap';
import 'scrollmagic/scrollmagic/uncompressed/plugins/jquery.ScrollMagic';
import 'scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators';

import MobileDetect from 'mobile-detect'; 
import 'js-throttle-debounce/src/js-throttle-debounce';

import {Howl, Howler} from 'howler';
import seeThru from 'seethru';
window.seeThru = require('seethru');

import Masonry from 'masonry-layout';

/*fontAwesome*/
// import { library, dom } from '@fortawesome/fontawesome-svg-core';
// /*add here when using a new icon*/
// import { faTwitterSquare } from '@fortawesome/free-brands-svg-icons/faTwitterSquare';
// library.add(faTwitterSquare);
// import { faLinkedin } from '@fortawesome/free-brands-svg-icons/faLinkedin';
// library.add(faLinkedin);
// import { faEnvelopeSquare } from '@fortawesome/free-solid-svg-icons/faEnvelopeSquare';
// library.add(faEnvelopeSquare);
// import { faGithubSquare } from '@fortawesome/free-brands-svg-icons/faGithubSquare';
// library.add(faGithubSquare);

// dom.watch();
/*fontAwesome*/

// Import everything from autoload
import './autoload/**/*'

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';


let curr_width,
    curr_height,
    curr_innerHeight,
    portrait,
    lt768,
    lt1024,
    isMobile = false,
    $body,
    $html,
    $menu,
    $mainMenu,
    menuOpen = false,
    $toggler,
    $header,
    $skipToContent,
    $footer,
    $isi,
    $isi_inline,
    isi_compress = false,
    isi_compress_buffer,
    $navbar,
    isDown = false, 
    isUp = false,
    mobileBreakPoint = 767,
    $grid,
    $goBackArrow,
    $galleryImage,
    $theModal;

    
const $window = $(window),
      $document = $(document);


let md = new MobileDetect(window.navigator.userAgent);
if(md.mobile() != null){
    isMobile = true;        
}
// console.log('isMobile = '+isMobile);

let debounced = function(){
	resizeCheck();
};

if(!isMobile){
    $window.on('resize',resizeCheck.throttle(500,false));
    $window.on('resize',debounced.debounce(500));
}else{
    $window.on('orientationchange', function() {
        detectOrientation(window.orientation);        
    });
}

function detectOrientation(orientation){
    if ( (orientation == 0 || orientation == 180) ){ // Landscape
        portrait = true;
        //console.log('portrait = true');
    } 
    else if( (orientation == -90 || orientation == 90) ){ // Portrait
        portrait  = false;
        //console.log('portrait = false');
    }
    else {

    }
    resizeCheck();
}

function resizeCheck() {
    //console.log('resized');
    curr_width = $window.width();
    curr_height = $window.height();
    curr_innerHeight = $window.innerHeight();

    lt768 = (curr_width < 768);

    lt1024 = (curr_width < 1024);

    if(menuOpen){
        /*this closes the menu when users resize the browser*/
        $toggler.click();
    }
}


//(function($) {

	$(document).ready(function(){ 	
	    $header = $('body > header');
	    //$footer = $('footer');
	    $body = $('body');    
	    $navbar = $header.find('.navbar');
	    $html = $('html');
	    $menu = $navbar.find('#navbarSupportedContent');
	    $mainMenu = $navbar.find('#menu-main');
	    $toggler = $navbar.find('.navbar-toggler');
	    //$isi = $('#isi');
	    //$isi_inline = $('#isi_inline');
        $grid = $('.masonry-grid');
        $goBackArrow = $('#goBackArrow');
        $galleryImage = $grid.find('.galleryImage');
        $theModal = $('#bonoModalCenter');
	    /*forces ios to refresh and not use page caching when using the browser back and forward buttons */
	    $window.bind('pageshow', function(event) {
	        if (event.originalEvent.persisted) {
	            window.location.reload();
	        }
	    });

	    resizeCheck();

	    initMenu();
	    
	    //initISI();

	    //initHideHeader(headerHeight);

	    /*optional*/
	    //mobileVisualFeedback();

	    /*optional*/
	    //webpSupport();

	    init();


	}); /*end ready*/
//}); /*end function*/


function initMenu(){

	/*hide the home button if touch screen*/
	if(!isMobile){
		$mainMenu.find('.menu-home').css('display','none');

		
	}

    /*mobile menu button*/
    /*add collapsed class to init the button classes */
    $toggler.addClass('collapsed');
    /*makes header full opacity when clicked*/
    $toggler.on('click',function(e){	    	
    	e.preventDefault();
    	e.stopPropagation();
    	if(isMobile){    		    	
	    	if(!$header.hasClass('menuOpen')){
		    	openMenu();
	    	}else{
		    	closeMenu();
	    	}
    	}else{
    		//go home
    		window.location.href = '/';
    	}
    });

    if(!isMobile){initShieldEnter();}
    function initShieldEnter(){
	    $toggler.on('mouseenter.shield',function(e){
	    	if($(this).hasClass('collapsed')){
		    	
		    	openMenu();
	    	}
	    });
	}
	
	function initShieldLeave(){
	    $mainMenu.on('mouseleave.shield',function(e){    		
		    	
		    	closeMenu();
	    	
	    });
	}


    function openMenu(){
    	menuOpen = true;
    	console.log('over');
    	$toggler.off('mouseenter.shield');
    	initShieldLeave();
    	hamburgerAnim.timeScale(1);
    	hamburgerAnim.play();
		$header.addClass('menuOpen');
		$toggler.removeClass('collapsed');
		$menu.css('display','block');		
		$header.css('z-index','1030');		
    	
    	/*gsap animation for displaying the mobile menu (use '-curr_width' to have it come from the left, also adjust the closeMenu instance)*/
    	TweenMax.set($menu,{y:curr_height});
    	TweenMax.to($menu,0.5,{y:0, ease:Sine.easeOut});

    	bodyScroll(false);
    }

    function closeMenu(){
    	menuOpen = false;
    	console.log('out');    	
    	hamburgerAnim.timeScale(0.5);
    	hamburgerAnim.reverse();
		$header.removeClass('menuOpen');
		$toggler.addClass('collapsed');
		$mainMenu.off('mouseleave.shield');
    	
    	TweenMax.to($menu,0.5,{y:curr_height, ease:Sine.easeIn, onComplete:function(){		    		
    		$menu.css('display','none');
    		$header.css('z-index','1000');		    		
			TweenMax.set($menu,{y:0});
			initShieldEnter();
			
    	}});    	

    	bodyScroll(true);
    }

    let hm = $toggler.find('#shield');
    let hm_bw = hm.find('.bw');
    let hm_color = hm.find('.color');
    let hamburgerAnim = new TimelineMax({});
    hamburgerAnim
    .to(hm_bw,0.5,{opacity:0})
    .to(hm_color,0.5,{opacity:1},'-=0.5')
    hamburgerAnim.pause();
    
}



function init(){
	console.log('all set and ready to go.');
    let $poster = $('#portfolio .projects .poster');
    /*set up poster clicks to the details page*/
    if($poster.length){

        $poster.on('click',function(){
            let rowIndex = $(this).attr('data-index');
            let title = $(this).attr('data-title');
            window.open('/details?id='+rowIndex+'&title='+title,'_self');
        });
	   /*remove mouse over and grey scale effects on mobile device*/
        if(isMobile){
    		$poster.removeClass('bw');
    	}
    }

    /*help skip crazy intro animation after back on details page*/
    if (window.performance && window.performance.navigation.type == window.performance.navigation.TYPE_BACK_FORWARD) {
        alert('Got here using the browser "Back" or "Forward" button.');
    }


    /*masonry grid init*/
    setTimeout(function(){
        console.log('grid init');
    if($grid.length){
        /*$grid.masonry({          
          itemSelector: '.grid-item',
          columnWidth: 200,
        });*/

        var grid = document.querySelector('.masonry-grid');
        var msnry = new Masonry( grid, {
            // options...
            columnWidth: '.grid-item',
            itemSelector: '.grid-item',
            percentPosition: true,
        });        

    }
    },1000);


    /*gallery images expand*/
    if($galleryImage.length){
        $galleryImage.on('click',function(){
            console.log('clicking');
            let th = $(this);
            let img = th.attr('data-img');
            fullscreenImage(img);
        })
    }

    function fullscreenImage(url){
        $theModal.find('.modal-body img').attr('src',url);
        $theModal.modal();
    }

    if($goBackArrow.length){
        $goBackArrow.on('click',function(){

            if(document.referrer.split('/')[2]!=location.hostname){
                //User came from other domain or from direct
                window.history.go(-1);
            }else{
                let where = $(this).attr('data-where');
                window.open('/'+where+'/','_self');
            }

            
        });
    }


}


/*helper funcs*/
window.alwaysScrollTo=alwaysScrollTo;
function alwaysScrollTo(speed,elm,buffer,func){                 
    if(buffer == undefined){buffer = 0;}
    let targ = elm.offset().top - ($header.height()+buffer);   
    
    if(func != undefined){
            TweenMax.to(window, speed, {scrollTo:{y:targ, autoKill:false},onComplete:func});
       }else{
            TweenMax.to(window, speed, {scrollTo:{y:targ, autoKill:false}}); 
       }
}
window.bodyScroll=bodyScroll;		
function bodyScroll(bool){    
    if(bool){
        $html.css('overflow','auto');
        $body.css('overflow','auto');
    }else{
        $html.css('overflow','hidden');
        $body.css('overflow','hidden');
    }
}
window.grRange = grRange;
function grRange(min, max, div) {
    let randomNum = Math.floor(Math.random()*(max-min+1))+min;
    return randomNum/div;
}

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());

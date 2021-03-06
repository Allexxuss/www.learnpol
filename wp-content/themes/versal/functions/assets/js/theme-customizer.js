/**
 * This file adds some LIVE to the Theme Customizer live preview. To leverage
 * this, set your custom settings to 'postMessage' and then add your handling
 * here. Your javascript should grab settings from customizer controls, and 
 * then make any necessary changes to the page using jQuery.
 */
( function( $ ) {

	// Update the site title in real time...
	wp.customize( 'blogname', function( value ) {
		value.bind( function( newval ) {
			$( '#site-title a' ).html( newval );
		} );
	} );
	
	//Update the site description in real time...
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( newval ) {
			$( '.site-description' ).html( newval );
		} );
	} );
	
	
	

	
	//BODY
	wp.customize( 'ghost_body', function( value ) {
		value.bind( function( newval ) {
			$('.ghost,a.page-numbers,.nav li ul').css('background-color', newval );
		} );
	} );
	wp.customize( 'border_body', function( value ) {
		value.bind( function( newval ) {
			$('.p-border,.widgetable li,.social-menu a,.taggs a').css('border-color', newval );
		} );
	} );
	wp.customize( 'accent_body', function( value ) {
		value.bind( function( newval ) {
			$('.ribbon,.format-quote .item_inn,.page-numbers.current,li.current a,.flex-direction-nav a,#submit,h2.widget:after,h2.block:after').css('background-color', newval );
			$('.wpm_pop_posts i,.reply a').css('color', newval );
		} );
	} );
	wp.customize( 'accent_body_text', function( value ) {
		value.bind( function( newval ) {
			$('.ribbon,.ribbon a,.ribbon p,a.ribbon,.format-quote,.format-quote a,.page-numbers.current,li.current a,#submit').css('color', newval );
		} );
	} );
	wp.customize( 'link_body', function( value ) {
		value.bind( function( newval ) {
			$('a').css('color', newval );
		} );
	} );
	wp.customize( 'link_body_hover', function( value ) {
		value.bind( function( newval ) {
			$('a:hover').css('color', newval );
		} );
	} );



	//HEADER
	wp.customize( 'bg_header', function( value ) {
		value.bind( function( newval ) {
			$('#header,#curtain').css('background-color', newval );
		} );
	} );
	wp.customize( 'nav_header', function( value ) {
		value.bind( function( newval ) {
			$('.nav li a,li.current-menu-item li a').css('color', newval );
		} );
	} );
	wp.customize( 'link_header', function( value ) {
		value.bind( function( newval ) {
			$('#titles a,#curtain a,#curtain input.s').css('color', newval );
		} );
	} );
	wp.customize( 'text_header', function( value ) {
		value.bind( function( newval ) {
			$('#titles p').css('color', newval );
		} );
	} );
	wp.customize( 'accent_header', function( value ) {
		value.bind( function( newval ) {
			$('#header .searchOpen,.nav li a:hover').css('background-color', newval );
		} );
	} );
	wp.customize( 'accent_header_text', function( value ) {
		value.bind( function( newval ) {
			$('#header .searchOpen,.nav li a:hover').css('color', newval );
		} );
	} );




	//FOOTER
	wp.customize( 'bg_footer', function( value ) {
		value.bind( function( newval ) {
			$('#footer').css('background-color', newval );
		} );
	} );
	wp.customize( 'link_footer', function( value ) {
		value.bind( function( newval ) {
			$('#footer a').css('color', newval );
		} );
	} );
	wp.customize( 'text_footer', function( value ) {
		value.bind( function( newval ) {
			$('#footer,#footer p,#footer input,#footer h2').css('color', newval );
		} );
	} );
	wp.customize( 'border_footer', function( value ) {
		value.bind( function( newval ) {
			$('#footer,#footer .p-border,#copyright').css('border-color', newval );
		} );
	} );



	//Update site background color...
	wp.customize( 'background_color', function( value ) {
		value.bind( function( newval ) {
			$('body,.tab-post-big').css('background-color', newval );
		} );
	} );
	
} )( jQuery );
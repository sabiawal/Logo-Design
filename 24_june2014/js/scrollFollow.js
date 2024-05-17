﻿/**
 * jquery.scrollFollow.js
 * Copyright (c) 2008 Net Perspective (http://kitchen.net-perspective.com/)
 * Licensed under the MIT License (http://www.opensource.org/licenses/mit-license.php)
 * 
 * @author R.A. Ray
 *
 * @projectDescription	jQuery plugin for allowing an element to animate down as the user scrolls the page.
 * 
 * @version 0.3.0
 * 
 * @requires jquery.js (tested with 1.2.6)
 * @requires ui.core.js (tested with 1.6)
 * @requires jquery.easing.js (http://gsgd.co.uk/sandbox/jquery/easing/ - tested with 1.3)
 * @requires jquery.cookie.js (http://www.stilbuero.de/2006/09/17/cookie-plugin-for-jquery/)
 * 
 * @param speed		int - Duration of animation (in milliseconds)
 * 								default: 500
 * @param offset			int - Number of pixels box should remain from top of viewport
 * 								default: 0
 * @param easing		string - Any one of the easing options from the easing plugin - < http://gsgd.co.uk/sandbox/jquery/easing/ > - Use 'linear' for no easing
 * 								default: 'easeOutBack'
 * @param container	string - ID of the containing div
 * 								default: box's immediate parent
 * @param killSwitch	string - ID of the On/Off toggle element
 * 								default: 'killSwitch'
 * @param onText		string - killSwitch text to be displayed if sliding is enabled
 * 								default: 'Turn Slide Off'
 * @param offText		string - killSwitch text to be displayed if sliding is disabled
 * 								default: 'Turn Slide On'
 * @param animate		string - Setting to 'no' enables a non-animated scroll following action
 * 								default: 'yes
 * @param relativeTo	string - Scroll animation can be relative to either the 'top' or 'bottom' of the viewport
 * 								default: 'top'
 */

( function( $ ) {
	
	$.scrollFollow = function ( box, options )
	{ 
		// Convert box into a jQuery object
		box = $( box );
		
		// 'box' is the object to be animated
		var position = box.css( 'position' );
		
		function ani( box, iTop, iBoxOTop, padAdj )
		{		
			// The script runs on every scroll which really means many times during a scroll.
			// We don't want multiple slides to queue up.
			box.dequeue();
					
			var docHeight = parseInt( $( document ).height() );
			var viewportHeight = parseInt( $( window ).height() );	
			var pageScroll =  parseInt( $( document ).scrollTop() );
			var parentTop =  parseInt( cont.offset().top );
			var parentHeight = parseInt( cont.attr( 'offsetHeight' ) );
			var boxTop =  parseInt( box.offset().top );
			var boxHeight = parseInt( box.attr( 'offsetHeight' ) + ( parseInt( box.css( 'marginTop' ) ) || 0 ) + ( parseInt( box.css( 'marginBottom' ) ) || 0 ) );
		
			var aniTop;
			
			// Make sure the user wants the animation to happen
			if ( isActive )
			{
					
				// If the box should animate relative to the top of the window
				if ( options.relativeTo == 'top' )
				{
					
					// Don't animate until the top of the window is close enough to the top of the box
					if ( iBoxOTop >= ( pageScroll + options.offset ) )
					{
						aniTop = iTop;
					}
					else
					{
						aniTop = Math.min( ( Math.max( ( -parentTop ), ( pageScroll - iBoxOTop + iTop ) ) + options.offset ), ( parentHeight - boxHeight - padAdj ) );
					}
					
					
				}
				// If the box should animate relative to the bottom of the window
				else if ( options.relativeTo == 'bottom' )
				{
					aniTop = Math.min( ( pageScroll + viewportHeight - boxHeight - options.offset ), ( parentHeight - boxHeight ) );
				}
				
				// First options is for modern browsers
				if ( options.animate == 'yes' )
				{
					box.animate(
						{
							top: aniTop
						}, options.speed, options.easing
					);
					
				}
				else if ( typeof document.body.style.maxHeight != "undefined" )
				{
					box.css(
						{
							top: options.offset,
							position: 'fixed'
						}
					);
				}
				else
				{
					box.css(
						{
							top: aniTop
						}
					);
				}
			}
		};
		
		// For user-initiated stopping of the slide
		var isActive = true;
		
		if( $.cookie( 'scrollFollowSetting' + box.attr( 'id' ) ) == 'false' )
		{
			var isActive = false;
			
			$( '#' + options.killSwitch ).text( options.offText )
				.toggle( 
					function ()
					{
						isActive = true;
						
						$( this ).text( options.onText );
						
						$.cookie( 'scrollFollowSetting' + box.attr( 'id' ), true, { expires: 365, path: '/'} );
						
						ani( box, initialTop, boxInitialOffsetTop, paddingAdjustment );
					},
					function ()
					{
						isActive = false;
						
						$( this ).text( options.offText );
						
						if( options.animate == 'yes' )
						{
							box.animate(
								{
									top: initialTop
								}, options.speed, options.easing
							);	
						}
						else
						{
							box.css(
								{
									position: position,
									top: initialTop
								}
							);
						}
						
						$.cookie( 'scrollFollowSetting' + box.attr( 'id' ), false, { expires: 365, path: '/'} );
					}
				);
		}
		else
		{
			$( '#' + options.killSwitch ).text( options.onText )
				.toggle( 
					function ()
					{
						isActive = false;
						
						$( this ).text( options.offText );
						
						box.animate(
							{
								top: initialTop
							}, 0
						);	
						
						$.cookie( 'scrollFollowSetting' + box.attr( 'id' ), false, { expires: 365, path: '/'} );
					},
					function ()
					{
						isActive = true;
						
						$( this ).text( options.onText );
						
						$.cookie( 'scrollFollowSetting' + box.attr( 'id' ), true, { expires: 365, path: '/'} );
						
						ani( box, initialTop, boxInitialOffsetTop, paddingAdjustment );
					}
				);
		}
		
		// If no parent ID was specified, and the immediate parent does not have an ID
		// options.container will be undefined. So we need to figure out the parent element.
		var cont;
		
		if ( options.container == '')
		{
			cont = box.parent();
		}
		else
		{
			cont = $( '#' + options.container );
		}
		
		// Finds the defaul positioning of the box.
		var contTop = parseInt( cont.offset().top );
		var boxInitialOffsetTop =  parseInt( box.offset().top );
		var initialTop = parseInt( box.css( 'top' ) ) || 0;
		

		// Hack to fix different treatment of boxes positioned 'absolute' and 'relative'
		var paddingAdjustment;
		if ( box.css( 'position' ) == 'relative' )
		{
			paddingAdjustment = parseInt( cont.css( 'paddingTop' ) ) + parseInt( cont.css( 'paddingBottom' ) );
		}
		else
		{
			paddingAdjustment = 0;
		}
		
		// Animated the box when the page is scrolled.
		$( window ).scroll( function ()
			{
				ani( box, initialTop, boxInitialOffsetTop, paddingAdjustment );
			}
		);

		ani( box, initialTop, boxInitialOffsetTop, paddingAdjustment );
	};
	
	$.fn.scrollFollow = function ( options )
	{
		options = options || {};
		options.relativeTo = options.relativeTo || 'top';
		options.speed = options.speed || 500;
		options.offset = options.offset || 0;
		options.easing = options.easing || 'easeOutBack';
		options.container = options.container || this.parent().attr( 'id' );
		options.killSwitch = options.killSwitch || 'killSwitch';
		options.onText = options.onText || 'Turn Slide Off';
		options.offText = options.offText || 'Turn Slide On';
		options.animate = options.animate || 'yes';
		
		this.each( function() 
			{
				new $.scrollFollow( this, options );
			}
		);
		
		return this;
	};
})( jQuery );


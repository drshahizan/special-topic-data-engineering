/*
	Resuable Functions with Neon Theme
	
	------
	
	Theme by: Laborator - www.laborator.co
	
	Developed by: Arlind Nushi
	Designed by: Art Ramadani
*/

var public_vars = public_vars || {};


// ! Sidebar Menu Options
jQuery.extend(public_vars, {
	sidebarCollapseClass: 'sidebar-collapsed',
	sidebarOnTransitionClass: 'sidebar-is-busy',
	sidebarOnHideTransitionClass: 'sidebar-is-collapsing',
	sidebarOnShowTransitionClass: 'sidebar-is-showing',
	sidebarTransitionTime: 600, // ms
	isRightSidebar: false
});

function show_sidebar_menu(with_animation)
{
	if(isxs())
		return;
		
	if(public_vars.isRightSidebar)
	{
		rb_show_sidebar_menu(with_animation);
		return;
	}
	
	if( ! with_animation)
	{
		public_vars.$pageContainer.removeClass(public_vars.sidebarCollapseClass);
	}
	else
	{
		if(public_vars.$mainMenu.data('is-busy') || ! public_vars.$pageContainer.hasClass(public_vars.sidebarCollapseClass))
			return;
		
		fit_main_content_height();
		
		var current_padding = parseInt(public_vars.$pageContainer.css('padding-left'), 10);
		
		// Check
		public_vars.$pageContainer.removeClass(public_vars.sidebarCollapseClass);
		
		var padding_left     = parseInt(public_vars.$pageContainer.css('padding-left'), 10),
			$span_elements   = public_vars.$mainMenu.find('li a span'),
			$submenus        = public_vars.$mainMenu.find('.has-sub > ul'),
			$search_input    = public_vars.$mainMenu.find('#search .search-input'),
			$search_button   = public_vars.$mainMenu.find('#search button'),
			$logo_env		 = public_vars.$sidebarMenu.find('.logo-env'),
			$collapse_icon	 = $logo_env.find('.sidebar-collapse'),
			$logo			 = $logo_env.find('.logo'),
			$sidebar_ulink	 = public_vars.$sidebarUser.find('span, strong'),
			
			logo_env_padding = parseInt($logo_env.css('padding'), 10);
		
		
		// Return to normal state
		public_vars.$pageContainer.addClass(public_vars.sidebarCollapseClass);
		
		// Showing Class
		setTimeout(function(){ public_vars.$pageContainer.addClass(public_vars.sidebarOnShowTransitionClass); }, 1);
		
		var padding_diff = padding_left - current_padding;
		
		// Start animation
		public_vars.$mainMenu.data('is-busy', true);
		
		public_vars.$pageContainer.addClass(public_vars.sidebarOnTransitionClass);
	
		
		public_vars.$pageContainer.transit({paddingLeft: padding_left}, public_vars.sidebarTransitionTime);	
		public_vars.$sidebarMenu.transit({width: padding_left}, public_vars.sidebarTransitionTime);
		
		$logo_env.transit({padding: logo_env_padding}, public_vars.sidebarTransitionTime);
		

		// Second Phase
		setTimeout(function()
		{
			//public_vars.$pageContainer.removeClass(public_vars.sidebarCollapseClass);
			$logo.css({width: 'auto', height: 'auto'});
			
			TweenMax.set($logo, {css: {scaleY: 0}});
			//TMPTweenMax.set($search_input, {css: {opacity: 0, visibility: 'visible'}});
			
			TweenMax.to($logo, (public_vars.sidebarTransitionTime/2) / 1100, {css: {scaleY: 1}});
			
			//TMP$search_input.transit({opacity: 1}, public_vars.sidebarTransitionTime);
			
			// Third Phase
			setTimeout(function(){
				
				public_vars.$pageContainer.removeClass(public_vars.sidebarCollapseClass);
				
				$submenus.hide().filter('.visible').slideDown('normal', function()
				{
					$submenus.attr('style', '');
				});
				
				public_vars.$pageContainer.removeClass(public_vars.sidebarOnShowTransitionClass);
				
				// Last Phase
				setTimeout(function()
				{	
					// Reset Vars
					public_vars.$pageContainer
					.add(public_vars.$sidebarMenu)
					.add($logo_env)
					.add($logo)
					.add($span_elements)
					.add($submenus)
					.attr('style', '');
					
					public_vars.$pageContainer.removeClass(public_vars.sidebarOnTransitionClass);
					
					public_vars.$mainMenu.data('is-busy', false); // Transition End
					
					
					fit_main_content_height();
					
				}, public_vars.sidebarTransitionTime);
				
				
			}, public_vars.sidebarTransitionTime/2);
			
		}, public_vars.sidebarTransitionTime/2);
	}
}

function hide_sidebar_menu(with_animation)
{
	if(isxs())
		return;
		
	if(public_vars.isRightSidebar)
	{
		rb_hide_sidebar_menu(with_animation);
		return;
	}
		
	if( ! with_animation)
	{
		public_vars.$pageContainer.addClass(public_vars.sidebarCollapseClass);
	}
	else
	{
		if(public_vars.$mainMenu.data('is-busy') || public_vars.$pageContainer.hasClass(public_vars.sidebarCollapseClass))
			return;
		
		fit_main_content_height();
		
		var current_padding = parseInt(public_vars.$pageContainer.css('padding-left'), 10);
		
		// Check
		public_vars.$pageContainer.addClass(public_vars.sidebarCollapseClass);		
		
		var padding_left     = parseInt(public_vars.$pageContainer.css('padding-left'), 10),
			$span_elements   = public_vars.$mainMenu.find('li a span'),
			$submenus        = public_vars.$mainMenu.find('.has-sub > ul'),
			$search_input    = public_vars.$mainMenu.find('#search .search-input'),
			$search_button   = public_vars.$mainMenu.find('#search button'),
			$logo_env		 = public_vars.$sidebarMenu.find('.logo-env'),
			$collapse_icon	 = $logo_env.find('.sidebar-collapse'),
			$logo			 = $logo_env.find('.logo'),
			$sidebar_ulink	 = public_vars.$sidebarUser.find('span, strong'),
			
			logo_env_padding = parseInt($logo_env.css('padding'), 10);
			
		
		// Return to normal state
		public_vars.$pageContainer.removeClass(public_vars.sidebarCollapseClass);
		
		var padding_diff = current_padding - padding_left;
		
		// Start animation (1)
		public_vars.$mainMenu.data('is-busy', true);
		
		
		// Add Classes & Hide Span Elements
		public_vars.$pageContainer.addClass(public_vars.sidebarOnTransitionClass);
		setTimeout(function(){ public_vars.$pageContainer.addClass(public_vars.sidebarOnHideTransitionClass); }, 1);
		
		TweenMax.to($submenus, public_vars.sidebarTransitionTime / 1100, {css: {height: 0}});
		
		//TMP$search_input.transit({opacity: 0}, public_vars.sidebarTransitionTime);
		$search_button.transit({right: padding_diff}, public_vars.sidebarTransitionTime);
		$logo.transit({scale: [1,0], perspective: 300/*, opacity: 0*/}, public_vars.sidebarTransitionTime/2);
		$logo_env.transit({padding: logo_env_padding}, public_vars.sidebarTransitionTime);
		//$collapse_icon.transit({left: -padding_diff+3}, public_vars.sidebarTransitionTime * 5);
		
		if( ! rtl())
		{
			TweenMax.to($collapse_icon, .5, {css: {left: -padding_diff+3}, delay: .1});
		}
		
		public_vars.$pageContainer.transit({paddingLeft: padding_left}, public_vars.sidebarTransitionTime);
		
		TweenMax.set($sidebar_ulink, {css: {opacity: 0}});
		
		
		setTimeout(function()
		{
			// In the end do some stuff
			public_vars.$pageContainer
			.add(public_vars.$sidebarMenu)
			.add($search_input)
			.add($search_button)
			.add($logo_env)
			.add($logo)
			.add($span_elements)
			.add($collapse_icon)
			.add($submenus)
			.add($sidebar_ulink)
			.add(public_vars.$mainMenu)
			.attr('style', '');
			
			public_vars.$pageContainer.addClass(public_vars.sidebarCollapseClass);
			
			public_vars.$mainMenu.data('is-busy', false);
			public_vars.$pageContainer.removeClass(public_vars.sidebarOnTransitionClass).removeClass(public_vars.sidebarOnHideTransitionClass);
			
			fit_main_content_height();
			
		}, public_vars.sidebarTransitionTime);
	}
}

function toggle_sidebar_menu(with_animation)
{
	var open = public_vars.$pageContainer.hasClass(public_vars.sidebarCollapseClass);
	
	if(open)
	{
		show_sidebar_menu(with_animation);
	}
	else
	{
		hide_sidebar_menu(with_animation);
	}
}


// Added on v1.5
function rtl() // checks whether the content is in RTL mode
{
	if(typeof window.isRTL == 'boolean')
		return window.isRTL;
		
	window.isRTL = jQuery("html").get(0).dir == 'rtl' ? true : false;
	
	return window.isRTL;
}

// Right to left Coeficient
function rtlc()
{
	return rtl() ? -1 : 1;
}


// Right sidebar closing methods
function rb_hide_sidebar_menu(with_animation)
{		
	if( ! with_animation)
	{
		public_vars.$pageContainer.addClass(public_vars.sidebarCollapseClass);
	}
	else
	{
		if(public_vars.$mainMenu.data('is-busy') || public_vars.$pageContainer.hasClass(public_vars.sidebarCollapseClass))
			return;
		
		fit_main_content_height();
		
		var current_padding = parseInt(public_vars.$pageContainer.css('padding-left'), 10);
		
		// Check
		public_vars.$pageContainer.addClass(public_vars.sidebarCollapseClass);		
		
		var padding_left     = parseInt(public_vars.$pageContainer.css('padding-left'), 10),
			$span_elements   = public_vars.$mainMenu.find('li a span'),
			$submenus        = public_vars.$mainMenu.find('.has-sub > ul'),
			$search_input    = public_vars.$mainMenu.find('#search .search-input'),
			$search_button   = public_vars.$mainMenu.find('#search button'),
			$logo_env		 = public_vars.$sidebarMenu.find('.logo-env'),
			$collapse_icon	 = $logo_env.find('.sidebar-collapse'),
			$logo			 = $logo_env.find('.logo'),
			$sidebar_ulink	 = public_vars.$sidebarUser.find('span, strong'),
			
			logo_env_padding = parseInt($logo_env.css('padding'), 10);
			
		
		// Return to normal state
		public_vars.$pageContainer.removeClass(public_vars.sidebarCollapseClass);
		
		var padding_diff = current_padding - padding_left;
		
		// Start animation (1)
		public_vars.$mainMenu.data('is-busy', true);
		
		
		// Add Classes & Hide Span Elements
		public_vars.$pageContainer.addClass(public_vars.sidebarOnTransitionClass);
		setTimeout(function(){ public_vars.$pageContainer.addClass(public_vars.sidebarOnHideTransitionClass); }, 1);
		
		TweenMax.to($submenus, public_vars.sidebarTransitionTime / 1100, {css: {height: 0}});
		
		$logo.transit({scale: [1,0], perspective: 300/*, opacity: 0*/}, public_vars.sidebarTransitionTime/2);
		$logo_env.transit({padding: logo_env_padding}, public_vars.sidebarTransitionTime);
		
		
		setTimeout(function()
		{
			public_vars.$pageContainer.addClass('sidebar-collapsing-phase-2');
			
			setTimeout(function()
			{
				public_vars.$mainMenu.data('is-busy', false);
				public_vars.$pageContainer.addClass(public_vars.sidebarCollapseClass);
				public_vars.$pageContainer.removeClass('sidebar-collapsing-phase-2');
				
				console.log(public_vars.sidebarTransitionTime);
				// In the end do some stuff
				public_vars.$pageContainer
				.add(public_vars.$sidebarMenu)
				.add($search_input)
				.add($search_button)
				.add($logo_env)
				.add($logo)
				.add($span_elements)
				.add($collapse_icon)
				.add($submenus)
				.add($sidebar_ulink)
				.add(public_vars.$mainMenu)
				.add($collapse_icon)
				.attr('style', '');
				
				public_vars.$pageContainer.removeClass(public_vars.sidebarOnTransitionClass).removeClass(public_vars.sidebarOnHideTransitionClass);
				
				fit_main_content_height();
				
				
			}, public_vars.sidebarTransitionTime);
			
		}, public_vars.sidebarTransitionTime / 2);
	}
}

function rb_show_sidebar_menu(with_animation)
{	
	if( ! with_animation)
	{
		public_vars.$pageContainer.removeClass(public_vars.sidebarCollapseClass);
	}
	else
	{
		if(public_vars.$mainMenu.data('is-busy') || ! public_vars.$pageContainer.hasClass(public_vars.sidebarCollapseClass))
			return;
		
		fit_main_content_height();
		
		var current_padding = parseInt(public_vars.$pageContainer.css('padding-right'), 10);
		
		// Check
		public_vars.$pageContainer.removeClass(public_vars.sidebarCollapseClass);
		
		var padding_right     = parseInt(public_vars.$pageContainer.css('padding-right'), 10),
			$span_elements   = public_vars.$mainMenu.find('li a span'),
			$submenus        = public_vars.$mainMenu.find('.has-sub > ul'),
			$search_input    = public_vars.$mainMenu.find('#search .search-input'),
			$search_button   = public_vars.$mainMenu.find('#search button'),
			$logo_env		 = public_vars.$sidebarMenu.find('.logo-env'),
			$collapse_icon	 = $logo_env.find('.sidebar-collapse'),
			$logo			 = $logo_env.find('.logo'),
			$sidebar_ulink	 = public_vars.$sidebarUser.find('span, strong'),
			
			logo_env_padding = parseInt($logo_env.css('padding'), 10);
		
		
		// Return to normal state
		public_vars.$pageContainer.addClass(public_vars.sidebarCollapseClass);
		
		// Showing Class
		setTimeout(function(){ public_vars.$pageContainer.addClass(public_vars.sidebarOnShowTransitionClass); }, 1);
		
		var padding_diff = padding_right - current_padding;
		
		// Start animation
		public_vars.$mainMenu.data('is-busy', true);
		
		public_vars.$pageContainer.addClass(public_vars.sidebarOnTransitionClass);
	
		
		public_vars.$pageContainer.transit({paddingRight: padding_right}, public_vars.sidebarTransitionTime);	
		public_vars.$sidebarMenu.transit({width: padding_right}, public_vars.sidebarTransitionTime);
		
		$logo_env.transit({padding: logo_env_padding}, public_vars.sidebarTransitionTime);
		
		// Second Phase
		setTimeout(function()
		{
			public_vars.$pageContainer.removeClass(public_vars.sidebarCollapseClass);
			
			$submenus.hide().filter('.visible').slideDown('normal', function()
			{
				$submenus.attr('style', '');
			});
			
			// Logo Animation
			$logo.css({width: 'auto', height: 'auto'});
			TweenMax.set($logo, {css: {scaleY: 0}});
			
			TweenMax.to($logo, (public_vars.sidebarTransitionTime/2) / 1000, {css: {scaleY: 1}});
			
			setTimeout(function()
			{				
				public_vars.$pageContainer.removeClass(public_vars.sidebarOnTransitionClass);
				public_vars.$pageContainer.removeClass(public_vars.sidebarOnShowTransitionClass);
				
				
				setTimeout(function()
				{
					// Reset Vars
					public_vars.$pageContainer
					.add(public_vars.$sidebarMenu)
					.add($logo_env)
					.add($logo)
					.add($span_elements)
					.add($submenus)
					.add($collapse_icon)
					.attr('style', '');
					
					public_vars.$pageContainer.removeClass(public_vars.sidebarOnTransitionClass);
					
					public_vars.$mainMenu.data('is-busy', false); // Transition End
					
					
					fit_main_content_height();
					
				}, public_vars.sidebarTransitionTime);
					
			}, public_vars.sidebarTransitionTime/2);
				
		}, public_vars.sidebarTransitionTime/2);
	}
}
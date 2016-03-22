S.ready(function(){





	//-----------------------------------------------------------------------------------------Header Events

	s('.section-menu').hover(function(){
		s('.section-nav').addClass('active');
		s('.section-menu').addClass('active');
	}, function(){
		s('.section-nav').removeClass('active');
		s('.section-menu').removeClass('active');
	});

	//---------------Hide the Header on Scrolling Down

	var didScroll;
	var lastScrollTop = 0;
	var delta = 5;
	var navbarHeight = 46;

	window.addEventListener('scroll', function(){
		didScroll = true;
	});

	setInterval(function() {
		if(didScroll){
			hasScrolled();
			didScroll = false;
		}
	}, 250);

	function hasScrolled(){
		st = document.getElementsByTagName('body')[0].scrollTop;
		
		// Make sure they scroll more than delta
		if(Math.abs(lastScrollTop - st) <= delta)
			return;

		var body = document.body,
		html = document.documentElement;

		var docHeight = Math.max( body.scrollHeight, body.offsetHeight, html.clientHeight, html.scrollHeight, html.offsetHeight );

		// If they scrolled down and are past the navbar, add class .nav-up.
	    // This is necessary so you never see what is "behind" the navbar.
	    if (st > lastScrollTop && st > navbarHeight && st > 250){
	        // Scroll Down
	        s('header').removeClass().addClass('nav-up');
	    } else {
	        // Scroll Up
	        if(st + window.innerHeight < docHeight) {
	        	s('header').removeClass().addClass('nav-down');
	        }
	    }
	    
	    lastScrollTop = st;
	}

	//-----------------------------------------------------------------Newsletter popup

	var timeOnPageStart = Date.now();
	var panelShown = getCookie('alreadyShownPanel') == 'true' ? true : false;
	console.log(panelShown);

	// Exit intent
	function addEvent(obj, evt, fn) {
		if (obj.addEventListener) {
			obj.addEventListener(evt, fn, false);
		}
		else if (obj.attachEvent) {
			obj.attachEvent("on" + evt, fn);
		}
	}

	function setCookie(cname, cvalue, exdays) {
		var d = new Date();
		d.setTime(d.getTime() + (exdays*24*60*60*1000));
		var expires = "expires="+d.toUTCString();
		document.cookie = cname + "=" + cvalue + "; " + expires;
	}

	function getCookie(cname) {
		var name = cname + "=";
		var ca = document.cookie.split(';');
		for(var i=0; i<ca.length; i++) {
			var c = ca[i];
			while (c.charAt(0)==' ') c = c.substring(1);
			if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
		}
		return "";
	}
	// Exit intent trigger
	addEvent(document, 'mouseout', function(evt) {
		if (evt.toElement == null && evt.relatedTarget == null && !panelShown && Date.now() - timeOnPageStart > 3000) {
			s('.overlay').addClass('active');
			panelShown = true;
		};
	});


	s('.panel .close').on('click', function(){
		s('.overlay').removeClass('active');
		setCookie('alreadyShownPanel',true,31);
	});

	//-----------------------------------------------------------------Article Collection Height

	//THIS CHUNK OF CODE BELOW IS SOLVED BY SIMPLY ADDING MIN HEIGHT TO ARTICLES
	// var i = 0;

	// s('.collection').each(function(){
	// 	if(window.innerWidth > 800){
	// 		console.log(s(s('.collection').l[i]).selector);

	// 		var maxArtHeight = 0;
	// 		var maxArtHeightPost = 0;

	// 		var numArticles = s(s('.collection').l[i]).l[0].children.length;

	// 		for(var j = 1; j < numArticles; j++){
	// 			var articleHeight = s(s('.collection').l[i]).l[0].children[j].offsetHeight;
	// 			if(articleHeight > maxArtHeight){
	// 				maxArtHeight = articleHeight;
	// 				maxArtHeightPos;
	// 			}
	// 		}

	// 		console.log(s(s(s('.collection').l[i]).selector + ' > .article'));

	// 		s(s(s('.collection').l[i]).selector + ' > .article').css('height',maxArtHeight + 'px');

	// 		i++;
	// 	}
	// });
});
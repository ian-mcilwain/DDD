$(function(){

	// load isotope after imagesLoaded

	$('.grid').imagesLoaded(function(){

		  $('.grid').isotope({
		    itemSelector: '.grid-item',
		    percentPosition: true,
		    masonry: {
		      columnWidth: '.grid-sizer',
		      // gutter: '.gutter-sizer'
		    }
		  });
	});

	$('.clientGrid').imagesLoaded(function(){

		$('.clientGrid').isotope({
		  itemSelector: '.client-grid-item',
		  percentPosition: true,
		  masonry: {
		    columnWidth: '.client-grid-sizer',
		    gutter: '.client-gutter-sizer'
		  }
		});
	});

	$('.galleryGrid').imagesLoaded(function(){
		$('.galleryGrid').isotope({
		  itemSelector: '.gallery-grid-item',
		  percentPosition: true,
		  masonry: {
		    columnWidth: '.gallery-grid-sizer',
		    // gutter: '.gallery-gutter-sizer'
		  }
		});
	});


var winHeight = $(window).height();
var winWidth = $(window).width();

// set the landing background based on device orientation/window size

if (winHeight > winWidth) {
	var backgroundImage =  ['background1.jpg', 'background2.jpg', 'background3.jpg', 'background4.jpg', 'background5.jpg', 'background6.jpg', 'background7.jpg', 'background8.jpg', 'background9.jpg', 'background10.jpg', 'background11.jpg', 'background12.jpg'];
 $('.landing').css({'background-image': 'url(portraitBackgroundImages/' + backgroundImage[Math.floor(Math.random() * backgroundImage.length)] + ')'});
} else {
	var backgroundImage =  ['background1.jpg', 'background2.jpg', 'background3.jpg', 'background4.jpg', 'background5.jpg', 'background6.jpg', 'background7.jpg', 'background8.jpg', 'background9.jpg', 'background10.jpg', 'background11.jpg', 'background12.jpg', 'background13.jpg', 'background14.jpg', 'background15.jpg', 'background16.jpg', 'background17.jpg', 'background18.jpg', 'background19.jpg', 'background20.jpg', 'background21.jpg', 'background22.jpg', 'background23.jpg', 'background24.jpg', 'background25.jpg', 'background26.jpg', 'background27.jpg', 'background28.jpg', 'background29.jpg', 'background30.jpg', 'background31.jpg', 'background32.jpg', 'background33.jpg', 'background34.jpg', 'background35.jpg', 'background36.jpg', 'background37.jpg', 'background38.jpg', 'background39.jpg'];


	
 $('.landing').css({'background-image': 'url(backgroundimages/' + backgroundImage[Math.floor(Math.random() * backgroundImage.length)] + ')'});
}


// set the height of divs to match the viewport


$(".landing").css({"height": (winHeight)});
$(".mainUpper").css({"height": (winHeight)});
$(".mainLower").css({"height": (winHeight)});
$(".projectImageBox").css({"height": (winHeight)});
$(".projectImageBox img").css({"height": (winHeight)});
$(".type-project").css({"height": (winHeight)});
$(".aboutTeam").css({"height": (winHeight)});



if ($(".vimeoBox1 iframe").length) {
	var videoWidth = $('.vimeoBox1').width();
	var videoHeight = videoWidth/16*9;
	$('.vimeoBox1').css({"height": (videoHeight)})
}

if ($(".vimeoBox2 iframe").length) {
	console.log("IFRAME IS PRESENT")
	var videoWidth = $('.vimeoBox2').width();
	var videoHeight = videoWidth/16*9;
	$('.vimeoBox2').css({"height": (videoHeight)})
} 

// make em responsive too

$(window).resize(function(){
	var winHeight = $(window).height();
	var winWidth = $(window).width();
	console.log(winHeight);
	$(".landing").css({"height": (winHeight)});
	$(".mainUpper").css({"height": (winHeight)});
	$(".mainLower").css({"height": (winHeight)});
	$(".projectImageBox").css({"height": (winHeight)});
	$(".projectImageBox img").css({"height": (winHeight)});
	$(".type-project").css({"height": (winHeight)});
	$(".aboutTeam").css({"height": (winHeight)});
	if ($(".vimeoBox1 iframe").length) {
	var videoWidth = $('.vimeoBox1').width();
	var videoHeight = videoWidth/16*9;
	$('.vimeoBox').css({"height": (videoHeight)})
	}
	if ($(".vimeoBox2 iframe").length) {
	var videoWidth2 = $('.vimeoBox2').width();
	var videoHeight2 = videoWidth2/16*9;
	$('.vimeoBox2').css({"height": (videoHeight2)})
	}
});
//

// function to update the site url after landing image scroll so you don't see the landing effect again
updateUrl = function(title, href) {
	document.title = title;
	window.history.pushState(false, title, href);
};
// 


showHamburger = function() {
	$('.hamburger').css('visibility', 'visible');
}

$(window).scroll(function(){
	// "animation" of landing image
	var timeout = window.setTimeout(showHamburger, 400);

	if ($(window).scrollTop() >= 5){
		$(".landing").addClass("landingAnimated");
		$("#landingImage").addClass("landingImageAnimated");
	}
	var navOffset = ($("nav").offset());
	stickTheNav = function() {
		if (navOffset.top == 0) {
			$("nav").addClass("stickyNav");
		}
	};
	stickTheNav();

});


stickyNavVisible = function(){$('nav').addClass('stickyNavVisible');
};
	
if (document.documentElement.clientWidth > 1025) {

$(".landing").click(function(){
	var timeout = window.setTimeout(stickyNavVisible, 400);
});

$(window).scroll((function() {
    var oldNavOffset = {};
    return function(){
        var newNavOffset = ($(window).scrollTop());
        // if scrolling up
        if (newNavOffset < oldNavOffset) {
            // do stuff
            $('.stickyNav').addClass('stickyNavVisible');
            console.log('trigger scroll up')
        }
        oldNavOffset = newNavOffset;
    };
})());

$(window).scroll((function() {
    var oldNavOffset = {};
    return function(){
        var newNavOffset = ($(window).scrollTop());
        // if scrolling down
        if (newNavOffset > oldNavOffset) {
            // do stuff
            $('.stickyNav').removeClass('stickyNavVisible');
            $('.stickyNav').removeClass('navHeight');
            console.log("scrolling down")
        }
        oldNavOffset = newNavOffset;
    };
})());

} else {
	$('.stickyNav').removeClass('navHeight');
};

$('#hamburger').click(function(e){
	e.preventDefault();
	$('.stickyNav').addClass('stickyNavVisible');
});

if ($(".landing")[0]){
    $('.hamburger').css('visibility', 'hidden')
    $("nav").addClass("stickyNav");
    $(window).scroll(function(){
    	updateUrl('DDD HOME', '/home');
    	// ********* CHANGE THE ABOVE FOR PRODUCTION VERSION TO APPOPRIATE URLS *****************
    // var timeout = window.setTimeout(stickyNavVisible, 400);
    })
} else {
    console.log("not landing page")
}

$('nav').click(function(){
	$('.stickyNav').removeClass('stickyNavVisible')
})


$(".landing").click(function(){
	// "animation" of landing image
	$(".landing").addClass("landingAnimated");
	$("#landingImage").addClass("landingImageAnimated");
	updateUrl('DDD HOME', '/home');
	var timeout = window.setTimeout(showHamburger, 400);
	// ********* CHANGE THE ABOVE FOR PRODUCTION VERSION TO APPOPRIATE URLS *****************
});


//hover affect on featured projects on homepage

$(".featuredLink").hover(
	function(){
	$(".mainLower").css("background", "transparent");
	$(this).siblings().css("visibility", "visible");
}, function(){
	$(".mainLower").css("background", "rgba(0, 0, 0, 0.06)")
	$(this).siblings().css("visibility", "hidden");
}

);

//

// Project sorting using isotope

$(".categories").submit(function(e){
	e.preventDefault();
})

$(".grid-itemFilter").submit(function(e){
	e.preventDefault();
	$('.grid').isotope({filter: ".grid-item"})
});

$(".projectsFilter").submit(function(e){
	e.preventDefault();
	$('.grid').isotope({filter: ".typeContent"})
});

$(".strategyFilter").submit(function(e){
	e.preventDefault();
	$('.grid').isotope({filter: ".typeStrategy"})
});

$(".designFilter").submit(function(e){
	e.preventDefault();
	$('.grid').isotope({filter: ".typeDesign"})
});

$(".engagementFilter").submit(function(e){
	e.preventDefault();
	$('.grid').isotope({filter: ".typeEngagement"})
});

// client grid sorting using isotope

$(".client-grid-itemFilter").submit(function(e){
	e.preventDefault();
	$('.clientGrid').isotope({filter: ".client-grid-item"})
});

$(".adventureFilter").submit(function(e){
	e.preventDefault();
	$('.clientGrid').isotope({filter: ".adventure"})
});

$(".environmentFilter").submit(function(e){
	e.preventDefault();
	$('.clientGrid').isotope({filter: ".environment"})
});

$(".equityFilter").submit(function(e){
	e.preventDefault();
	$('.clientGrid').isotope({filter: ".equity"})
});

$(".financialFilter").submit(function(e){
	e.preventDefault();
	$('.clientGrid').isotope({filter: ".financial"})
});

$(".foodFilter").submit(function(e){
	e.preventDefault();
	$('.clientGrid').isotope({filter: ".food"})
});

$(".healthSportFilter").submit(function(e){
	e.preventDefault();
	$('.clientGrid').isotope({filter: ".health-sport"})
});

});

//



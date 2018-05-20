jQuery(document).ready(function(){

 
    jQuery('#sliderActus').owlCarousel({
            
        autoPlay:true,
        slideSpeed : 2000,
        autoplayTimeout:1000,
        autoplayHoverPause:true,		
        loop:true,
        margin:0,
        dots: false,
        nav:true,	 
        navText: ['<i class="fa fa-angle-left fa-lg" aria-hidden="true"></i>','<i class="fa fa-angle-right fa-lg" aria-hidden="true"></i>'],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    });

    jQuery('.realisation-slider-1').owlCarousel({
        slideSpeed: 200,
        loop:true,
        items:1,
        singleItem:true,
        autoPlay: true
    });

    jQuery('.realisation-slider-2').owlCarousel({
        slideSpeed: 200,
        loop:true,
        items:1,
        singleItem:true,
        autoPlay: true,
        animateOut: 'fadeOut'
    });
    
    jQuery('#slider-nav-prev').click(function() {
        jQuery('.realisation-slider-1').trigger('next.owl.carousel');
        jQuery('.realisation-slider-2').trigger('next.owl.carousel');
    });

    jQuery('#slider-nav-next').click(function() {
        jQuery('.realisation-slider-1').trigger('prev.owl.carousel');
        jQuery('.realisation-slider-2').trigger('prev.owl.carousel');
    });

    if(jQuery('#wpcf7-f90-p14-o1').length){
        jQuery('#step-email').show().addClass('active');
        var typed = new Typed('#step-email .typed', {
            stringsElement: '#step-email .source',
            typeSpeed: 50,
            onComplete: function(self) {
                jQuery('.typed-cursor').remove();
                jQuery('#step-email input').focus();
            }
        });
        jQuery('#next-step').click(function(){
            var currenStep = jQuery('.contact-form-step.active');
            currenStep.removeClass('active').fadeOut(700, function(){
                currenStep.next().addClass('active').fadeIn(700);
                if(currenStep.is('#step-subject'))
                    jQuery('#next-step').hide();
            });
        });
    }

	jQuery(window).scroll(function() {

        if (jQuery(window).scrollTop() > 200) {
            
            jQuery('#fixed_header .top_header').addClass("show");
		} else {
            jQuery('#fixed_header .top_header').removeClass("show");
		}  
    });
    
    jQuery('#plus').on("click", "#plusActualites", function() {
        sentData = {
            'action': 'get_actus',
            'pagination': jQuery(".plus").data("pagination"),
            'ifremaining': jQuery(".plus").data("ifremaining"),
            'viewed': jQuery(".plus").data("viewed")
        };
        Actualites_ajax(sentData);
        return false;
    });
    
    function Actualites_ajax(sentData) {
        data = {
            'action': 'get_actus',
            'ifremaining': jQuery(".plus").data("ifremaining"),
        };
        if (!jQuery.isEmptyObject(sentData))
        data = sentData;
        jQuery.ajax({
            url: ajaxurl,
            type: "post",
            data: data,
            beforeSend: function() {
                jQuery("#ajaxloader").show();
                jQuery("#ajaxShadow").show();
            },
            success: function(response) {
                jQuery("#actualitesContent").html(response);
                jQuery('#plus').on("click", "#plusActualites", function() {
                    sentData = {
                        'action': 'get_actus',
                        'pagination': jQuery(".plus").data("pagination"),
                        'ifremaining': jQuery(".plus").data("ifremaining"),
                        'viewed': jQuery(".plus").data("viewed")
                    };
                    Actualites_ajax(sentData);
                    return false;
                });
                jQuery("#ajaxloader").hide();
                jQuery("#ajaxShadow").hide();
            }
        });
    }

    

	jQuery("#type_projet").change(function() {
		Realisation_ajax();
	});
	jQuery("#prestation_select").change(function() {
		Realisation_ajax();
	});
	jQuery("#date_prestations").change(function() {
		Realisation_ajax();
	});
	jQuery('#plus').on("click", "#plusrealisation", function() {
        sentData = {
            'action': 'realisationAction',
			// 'type_projet': jQuery("#type_projet").val(),
			'pagination': jQuery(".plus").data("pagination"),
			'ifremaining': jQuery(".plus").data("ifremaining"),
			'viewed': jQuery(".plus").data("viewed")
		};
		Realisation_ajax(sentData);
		return false;
	});
    
	function Realisation_ajax(sentData) {
        data = {
            'action': 'realisationAction',
			// 'type_projet': jQuery("#type_projet").val(),
			'ifremaining': jQuery(".plus").data("ifremaining"),
		};
		if (!jQuery.isEmptyObject(sentData))
        data = sentData;
		jQuery.ajax({
            url: ajaxurl,
			type: "post",
			data: data,
			beforeSend: function() {
                jQuery("#ajaxloader").show();
				jQuery("#ajaxShadow").show();
			},
			success: function(response) { 
				jQuery("#realisationContent").html(response);
				jQuery('#plus').on("click", "#plusRealisation", function() {
					sentData = {
						'action': 'realisationAction',
						// 'type_projet': jQuery("#type_projet").val(),
						'pagination': jQuery(".plus").data("pagination"),
						'ifremaining': jQuery(".plus").data("ifremaining"),
						'viewed': jQuery(".plus").data("viewed")
					};
					Realisation_ajax(sentData);
					return false;
				});
				jQuery("#ajaxloader").hide();
				jQuery("#ajaxShadow").hide();
			}
		});
	}

});


function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}


function openCity_1(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent_1");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks_1");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
document.getElementById("defaultOpen_1").click();
jQuery(document).ready(function(){

 
    jQuery('#sliderActus').owlCarousel({
            
        autoPlay:true,
        slideSpeed : 2000,
        autoplayTimeout:1000,
        autoplayHoverPause:true,		
        loop:true,
        margin: 30,
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
                console.log(response);
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
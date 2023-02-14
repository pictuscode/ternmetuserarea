$(function(){
setTimeout(function(){	
$('#just_book').owlCarousel({
    loop:false,
    margin:15,
    nav:true,
	navText:['<img src="'+baseurl+'images/site/slider_rgt.png">','<img src="'+baseurl+'images/site/slider_lft.png">'],
    responsive:{
        0:{
            items:1
        },
        600:{
			nav:true,
            items:2
        },
        1000:{
			nav:true,
            items:3,
			
        }
    }
})
$('#exp_slider').owlCarousel({
    loop:false,
    margin:15,
    nav:true,
	navText:['<img src="'+baseurl+'images/site/slider_rgt.png">','<img src="'+baseurl+'images/site/slider_lft.png">'],
    responsive:{
        0:{
            items:1
        },
        600:{
			nav:true,
            items:3
        },
        1000:{
			nav:true,
            items:5,
			
        }
    }
})
$('#hme_slider').owlCarousel({
    loop:false,
    margin:15,
    nav:true,
	navText:['<img src="'+baseurl+'images/site/slider_rgt.png">','<img src="'+baseurl+'images/site/slider_lft.png">'],
    responsive:{
        0:{
            items:1
        },
        600:{
			nav:true,
            items:2
        },
        1000:{
			nav:true,
            items:3,
			
        }
    }
})
$('#dest_slider').owlCarousel({
    loop:false,
    margin:15,
    nav:true,
	navText:['<img src="'+baseurl+'images/site/slider_rgt.png">','<img src="'+baseurl+'images/site/slider_lft.png">'],
    responsive:{
        0:{
            items:1
        },
        600:{
			nav:true,
            items:3
        },
        1000:{
			nav:true,
            items:6,
			
        }
    }
})
$('#food_slider').owlCarousel({
    loop:false,
    margin:15,
    nav:true,
	navText:['<img src="'+baseurl+'images/site/slider_rgt.png">','<img src="'+baseurl+'images/site/slider_lft.png">'],
    responsive:{
        0:{
            items:1
        },
        600:{
			nav:true,
            items:3
        },
        1000:{
			nav:true,
            items:5,
			
        }
    }
})
$('#sports_slider').owlCarousel({
    loop:false,
    margin:15,
    nav:true,
	navText:['<img src="'+baseurl+'images/site/slider_rgt.png">','<img src="'+baseurl+'images/site/slider_lft.png">'],
    responsive:{
        0:{
            items:1
        },
        600:{
			nav:true,
            items:3
        },
        1000:{
			nav:true,
            items:5,
			
        }
    }
})
},2000);
init_map();
function init_map() {
	  autocomplete = new google.maps.places.Autocomplete(
		 (document.getElementById('landing_autocomplete')),
		  { types: ['geocode'] });
		google.maps.event.addListener(autocomplete, 'place_changed', function() {
			var data = $("#landing_autocomplete").serialize();
			return false;
		}
	  );
     
	}
});
$(function() {

  $('input[name="datefilter"]').daterangepicker({
      autoUpdateInput: false,
      locale: {
          cancelLabel: 'Clear'
      }
  });

  $('input[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {
      $(this).val(picker.startDate.format('DD/MM/YYYY') + ' - ' + picker.endDate.format('DD/MM/YYYY'));
  });

  $('input[name="datefilter"]').on('cancel.daterangepicker', function(ev, picker) {
      $(this).val('');
  });

 $('.desktop_search').click(function(){
	 $("#search_form").submit();
 });  
});

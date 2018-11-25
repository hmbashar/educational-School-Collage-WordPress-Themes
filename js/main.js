(function($){
  $("#main_slider").owlCarousel({
 
      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true, 
      // "singleItem:true" is a shortcut for:
      items : 1, 
      itemsDesktop : true,
      itemsDesktopSmall : true,
      itemsTablet: true,
      itemsMobile : true,
	  autoPlay : true,	  
	  navigationText : ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
	  pagination : false,
	  stopOnHover : true,
 
  });

  $("#photos_gallery").owlCarousel({
 
      navigation : false, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true, 
      // "singleItem:true" is a shortcut for:
      items : 1, 
      itemsDesktop : true,
      itemsDesktopSmall : true,
      itemsTablet: true,
      itemsMobile : true,
	  autoPlay : true,	  	 
	  pagination : true,
	  stopOnHover : true,
 
  });
	
  $("#videos_gallery").owlCarousel({
 
      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true, 
      // "singleItem:true" is a shortcut for:
      items : 1, 
      itemsDesktop : true,
      itemsDesktopSmall : true,
      itemsTablet: true,
      itemsMobile : true,
	  autoPlay : true,	  	 
	  pagination : false,
	  navigationText : ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
	  stopOnHover : true,
 
  });
	

})(jQuery);

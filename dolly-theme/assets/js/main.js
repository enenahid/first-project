//alert("Hello");

;(function($){
	$(document).ready(function(){

     var slider = tns({
    container: '.slider',
    speed: 300,
    autoplayTimeout:3000,
    items: 1,
    slideBy: 'page',
    autoplay: true,
    autoHeight:true,
    controls:false,
    nav:false,
    autoplayButtonOutput:false
  
  });
	});
})(jQuery);
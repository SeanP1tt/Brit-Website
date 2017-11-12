console.log("hello");

$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip();

  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#index']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
    
//   $('.nav.navbar-nav > li > a').on('click', function(e) {
//    $('.nav.navbar-nav > li > a').removeClass('active');
//    $(this).addClass('active');
//});    
    
    
    
    console.log("hi");
})


//$(document).ready(function() {
//	// get current URL path and assign 'active' class
//	var pathname = window.location.pathname;
//	$('.nav > li > a[href="'+pathname+'"]').parent().addClass('active');
//    //for children
//    $('ul li a').click(function(){ $('li a').removeClass("active"); $(this).addClass("active"); });
//})


console.log(window.location.href);
console.log("hi");

$(document).ready(function() {
    if ($("#my_audio").get(0) !== undefined){
    $("#my_audio").get(0).play();
    }
});
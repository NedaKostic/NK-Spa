//Preloader
$(window).on('load', function () {
  $('.preloader').fadeOut(800);
})


//Back to top button
$(window).on('scroll', function () {
  if ($(this).scrollTop() > 200)
    $("#btn-back-to-top").fadeIn(500);
  else
    $("#btn-back-to-top").fadeOut(500);

  //Click event to scroll to top
  $("#btn-back-to-top").on('click', function () {
    $("html, body").stop().animate({
      scrollTop: 0
    }, 1400);
  })

})


$(function () {
  // Smooth scroll when anchor link
  $('a').not('.nav-pills a, .footer a').on('click', function () {
    $('html, body').animate({
      scrollTop: $($.attr(this, 'href')).offset().top
    }, 1000);
    return false;
  });

})



//initalize AOS
AOS.init({
  disable: 'mobile',
  once: true
});



//Pills Bootstrap

var triggerTabList = [].slice.call(document.querySelectorAll('.nav-pills a'))
triggerTabList.forEach(function (triggerEl) {
  var tabTrigger = new bootstrap.Tab(triggerEl)

  triggerEl.addEventListener('click', function (event) {
    event.preventDefault()
    tabTrigger.show()
  })
})
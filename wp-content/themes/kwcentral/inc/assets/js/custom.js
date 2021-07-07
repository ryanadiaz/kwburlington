let $ = jQuery;
$(document).ready(function() {
  $('.nav-link').click(function(e) { // disable regular link click for menu items
    e.preventDefault();
  });

  $('a[href*=\\#]:not([href=\\#])').on('click', function() { // smooth scroll to section on menu item click
    let target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.substr(1) +']');
    if (target.length) {
      $('html,body').animate({
          scrollTop: target.offset().top - 100
      }, 1000);
      return false;
    }
  });
});
  
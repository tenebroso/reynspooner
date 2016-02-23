$(document).ready(function() {
var savedData = sessionStorage.getItem('nav');
var footerData = sessionStorage.getItem('footer');

  $('.toolbar-wrapper').html(savedData);
  $('.footer-wrapper').html(footerData);

  if(!sessionStorage.getItem('nav')) {

    $.get( "//www.reynspooner.com/wp-content/themes/reyn/templates/header.php", function(data){})
      .done(function(data) {
        sessionStorage.setItem('nav', data);
      })
      .fail(function(error) {
        console.log(error);
      })
      .always(function() {
        var savedData = sessionStorage.getItem('nav');
        $('.toolbar-wrapper').html(savedData);
      });

  }

  if(!sessionStorage.getItem('footer')) {
    $.get( "//www.reynspooner.com/wp-content/themes/reyn/templates/footer.php", function(footer){})
      .done(function(footer) {
        sessionStorage.setItem('footer', footer);
      })
      .fail(function(error) {
        console.log(error);
      })
      .always(function() {
        var footerData = sessionStorage.getItem('footer');
        $('.footer-wrapper').html(footerData);
      });
  }



  });
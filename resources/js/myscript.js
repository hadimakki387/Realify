$('.dropbtn').each(function() {
    $(this).on('click', function() {
      $(this).next('.dropdown-content').toggle();
    });
    $(this).on('blur', function() {
      $(this).next('.dropdown-content').hide();
    });
  });

  $('.LeftBannerButton').on('click', function() {
    $('.LeftBanner').removeClass('hidden')
  });

$('.CloseLeftBannerButton').on('click', function() {
    $('.LeftBanner').addClass('hidden')
  });
 
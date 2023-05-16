$('.dropbtn').each(function() {
    $(this).on('click', function() {
      $(this).next('.dropdown-content').toggle();
    });
    $(this).on('blur', function() {
      $(this).next('.dropdown-content').hide();
    });
  });

//this is right banner script
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
 
//this is the carousel script
const carousel = document.querySelector('#carousel');
let currentSlide = 0;

document.querySelector('.prevSlide').addEventListener('click', function() {
  currentSlide = (currentSlide + 1) % carousel.children.length;
  carousel.style.transform = `translateX(-${currentSlide * 100}%)`;
});

document.querySelector('.nextSlide').addEventListener('click', function() {
  currentSlide = (currentSlide - 1 + carousel.children.length) % carousel.children.length;
  carousel.style.transform = `translateX(-${currentSlide * 100}%)`;
});

            
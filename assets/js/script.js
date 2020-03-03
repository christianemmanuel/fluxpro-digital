$(document).ready(function() {

  var stickyNavTop = $('.sticky-navbar').offset().top;

  var stickyNav = function(){
  var scrollTop = $(window).scrollTop();

  if (scrollTop > stickyNavTop) { 
    $('.sticky-navbar').addClass('sticky');
  } else {
    $('.sticky-navbar').removeClass('sticky'); 
  }
  };

  stickyNav();

  $(window).scroll(function() {
    stickyNav();
  });
  
  $('.slider-center').slick({
    centerMode: true,
    centerPadding: '100px',
    slidesToShow: 1,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: true,
          centerMode: true,
          centerPadding: '20px',
          slidesToShow: 1
        }
      }
    ]
  });

  $('.tesimonials-detail').slick({
    infinite: false,
    slidesToShow: 3,
    slidesToScroll: 3,
    dots: true,
    arrows: false,
    responsive: [
      {
        breakpoint: 970,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  $('.what-we-do-wrapper').slick({
    infinite: false,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [
      {
        breakpoint: 970,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

});


$(document).ready(function() {
  var filters = $('.portfolio-filter-nav [data-filter-nav]');
  var boxes = $('.portfolio-filter-container [data-filter-card]');

  filters.click(function() {
    
    filters.removeClass('active');
    $(this).addClass('active');

    var filterColor = $(this).attr('data-filter-nav');

    if (filterColor == 'all') {
      boxes.removeClass('active-card').fadeOut(150).promise().done(function() {
        boxes.addClass('active-card').fadeIn(150);
      });
    } else {
      boxes.removeClass('active-card').fadeOut(150).promise().done(function() {
        boxes.filter('[data-filter-card = "' + filterColor + '"]').addClass('active-card').fadeIn(150);
      });
    }
    
    return false;
  });
});
$(document).ready(function() {

  var stickyNavTop = $('.sticky-navbar').offset().top;

  var stickyNav = function(){
  var scrollTop = $(window).scrollTop();

  if (scrollTop > stickyNavTop) { 
    $('body').addClass('sticky');
  } else {
    $('body').removeClass('sticky');
    $('.navbar-list').removeAttr('style');
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
    slidesToShow: 2,
    slidesToScroll: 2,
    dots: false,
    arrows: false,
    responsive: [
      {
        breakpoint: 971,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 481,
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
        breakpoint: 769,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 481,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  $('.process-list').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    dots: false,
    arrows: false,
    responsive: [
      {
        breakpoint: 769,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true,
          autoplay: true
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

  $('.navbar-toggle').click(function() {
    $('.navbar-list').slideToggle('fast');
  });

  // $('#submitForm').click(function() {
  //   $.removeCookie('hide-after-click');
  // });
  
  // setTimeout(function() {
  //   $('.alert').remove();
  // }, 3500);

  // $('#close').click(function() {
  //   if (!$('.alert').is('hide-alert')) {
  //     $('.alert').addClass('hide-alert');

  //     $.cookie('hide-after-click', 'yes', {expires: null });
  //   }
  //   return false;
  // });

  // if ($.cookie('hide-after-click') == 'yes') {
  //   $('.alert').addClass('hide-alert');
  // }

  // $.cookie('hide-after-click', 'yes', {expires: null });
});


$('document').ready(function() {
  $('#doctorSlideshow').owlCarousel({
    nav: true,
    dots: false,
    navText: ["<span class='mai-arrow-back'></span>", "<span class='mai-arrow-forward'></span>"],
    responsive: {
      0: {
        items: 1
      },
      576: {
        items: 2
      },
      992: {
        items: 3
      }
    }
  });
});

$('document').ready(function() {
  $('#memberSlideshow').owlCarousel({
    nav: true,
    dots: false,
    navText: ["<span class='mai-arrow-back'></span>", "<span class='mai-arrow-forward'></span>"],
    // autoplay: true, // Enable auto-scrolling
    // autoplayTimeout: 3000, // Set the timeout between slides (in milliseconds)
    // autoplayHoverPause: true, // Pause auto-scrolling on hover
    // loop: true,
    // startPosition: 0, // Set the starting position to the first item
    // rewind: false, // Prevent rewinding to the beginning after the last item
    responsive: {
      0: {
        items: 1
      },
      576: {
        items: 2
      },
      992: {
        items: 3
      }
    }
  });
});

$('document').ready(function() {
  $("a[data-role='smoothscroll']").click(function(e) {
    e.preventDefault();

    var position = $($(this).attr("href")).offset().top - nav_height;

    $("body, html").animate({
        scrollTop: position
    }, 1000 );
    return false;
  });
});

$('document').ready(function() {
  // Back to top
  var backTop = $(".back-to-top");

  $(window).scroll(function() {
    if($(document).scrollTop() > 400) {
      backTop.css('visibility', 'visible');
    }
    else if($(document).scrollTop() < 400) {
      backTop.css('visibility', 'hidden');
    }
  });

  backTop.click(function() {
    $('html').animate({
      scrollTop: 0
    }, 1000);
    return false;
  });
});


$('document').ready(function() {
  // Tooltips
  $('[data-toggle="tooltip"]').tooltip();

  // Popovers
  $('[data-toggle="popover"]').popover();

  // Page scroll animate
  new WOW().init();
});

// goto form section
function gotoFormSection(sectionId) {
    // Scroll to the desired form section
    var section = document.getElementById(sectionId);
    if (section) {
      section.scrollIntoView({ behavior: 'smooth' });
    }
}

// Generate a random color function
function getRandomColor() {
    const letters = "0123456789ABCDEF";
    let color = "#";
    for (let i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}

// Set the random color as the background for the profile icon
document.addEventListener("DOMContentLoaded", function() {
    const profileIcons = document.querySelectorAll("#random-bg-color");
    if (profileIcons) {
        profileIcons.forEach((profileIcon) => {
            profileIcon.style.backgroundColor = getRandomColor();
        });
    }
});

// Show or hide password
$(document).ready(function() {
    $('.toggle-password').click(function() {
        const targetInputId = $(this).data('target');
        const targetInput = $('#' + targetInputId);
        const passwordFieldType = targetInput.attr('type');
        const toggleIcon = $(this);

        if (passwordFieldType === 'password') {
            targetInput.attr('type', 'text');
            toggleIcon.removeClass('mai-eye-off-outline').addClass('mai-eye-outline');
        } else {
            targetInput.attr('type', 'password');
            toggleIcon.removeClass('mai-eye-outline').addClass('mai-eye-off-outline');
        }
    });
});

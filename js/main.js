$(document).ready(function () {

  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  $(".generate-code-button").click(function (e) {
    e.preventDefault();
    let url = '/generate-iframe?' + $("#form-third").serialize();

    $.ajax({
      url: url,
      method: "get",
      success: function (res) {
        console.log(res);
      },
      error: function (error) {
        console.log(error);
      },

    }).done(function () {
      console.log("done");
    });

  });

  $('.dropdown-button').on('click', function () {
    $('.notification-type-container').slideToggle();
  });

  $('.notification-dropdown-button').on('click', function () {
    $('.notification-container').slideToggle();
  });

  $('.datepicker-dropdown-button').on('click', function () {
    $('.datepicker').slideToggle();
  });

  $('.right-side a').on('click', function () {
    let currentVal = $(this).attr('data-value');
    let drophtml = $('.dropdown-button').text(currentVal);
    $('.notification-type-container').slideUp();
    let currenttype = $('.currentType').val(currentVal);

    // notificatin show js
    if (currentVal === "notification") {
      $('.notification-1').css({
        display: 'flex'
      });
      $('.notification-3').slideUp(0);
      $('.notification-2').slideUp(0);
    } else if (currentVal === "notification-countdown") {
      $('.notification-2').css({
        display: 'flex'
      });
      $('.notification-1').slideUp(0);
      $('.notification-3').slideUp(0);
    } else if (currentVal === "countdown") {
      $('.notification-3').css({
        display: 'flex'
      });
      $('.notification-1').slideUp(0);
      $('.notification-2').slideUp(0);
    }
  });


//  textarea switcher

  $(".notification-buttons a").on('click', function () {
    let thisvalue = $(this).closest('.notification-buttons');
    let current = $(this).data('for');
    $('.form-urls').fadeOut(0);
    $('.form-urls.' + current).fadeIn(300);
    $(".notification-buttons").not(thisvalue).removeClass('active');
    thisvalue.addClass('active');

  });

//

  $('.notification-theme .right-side a').on('click',function () {
    let current = $(this).data('for');

    let drophtml = $('.notification-dropdown-button').text(current);
    $('.notification-container').slideUp();

    if (current === "theme1"){
      $('.notification-1,.notification-2, .notification-3').addClass('yellow-theme');
      $('.notification-1,.notification-2, .notification-3').removeClass('border-radius-theme');
      $('.notification-1,.notification-2, .notification-3').removeClass('new-year-theme');
    } else if (current === "theme2"){
      $('.notification-1,.notification-2, .notification-3').addClass('border-radius-theme');
      $('.notification-1,.notification-2, .notification-3').removeClass('yellow-theme');
      $('.notification-1,.notification-2, .notification-3').removeClass('new-year-theme');
    } else if (current === "theme3") {
      $('.notification-1,.notification-2, .notification-3').addClass('new-year-theme');
      $('.notification-1,.notification-2, .notification-3').removeClass('border-radius-theme');
      $('.notification-1,.notification-2, .notification-3').removeClass('yellow-theme');
    } else if (current === 'theme4'){
      $('.notification-1,.notification-2, .notification-3').removeClass('new-year-theme');
      $('.notification-1,.notification-2, .notification-3').removeClass('border-radius-theme');
      $('.notification-1,.notification-2, .notification-3').removeClass('yellow-theme')
    }


  });


  $('.select-position').on('change',function () {
    let data = $('.select-position option:selected').text();
    console.log(data);
  });

});


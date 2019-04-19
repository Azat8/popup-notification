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

  function countdown(date) {
    console.log(date);
    var $clock = $('#clock'),
        eventTime = moment(date, 'DD-MM-YYYY HH:mm:ss').unix(),
        currentTime = moment().unix(),
        diffTime = eventTime - currentTime,
        duration = moment.duration(diffTime * 1000, 'milliseconds'),
        interval = 1000;

    // if time to countdown
    if(diffTime > 0) {

      // Show clock
      // $clock.show();

      var $d = $('.days')/*.appendTo($clock)*/,
          $h = $('.hrs')/*.appendTo($clock)*/,
          $m = $('.mins')/*.appendTo($clock)*/,
          $s = $('.secs')/*.appendTo($clock)*/;

      console.log($clock);

      setInterval(function(){

        duration = moment.duration(duration.asMilliseconds() - interval, 'milliseconds');
        var d = moment.duration(duration).days(),
            h = moment.duration(duration).hours(),
            m = moment.duration(duration).minutes(),
            s = moment.duration(duration).seconds();

        d = $.trim(d).length === 1 ? '0' + d : d;
        h = $.trim(h).length === 1 ? '0' + h : h;
        m = $.trim(m).length === 1 ? '0' + m : m;
        s = $.trim(s).length === 1 ? '0' + s : s;

        // show how many hours, minutes and seconds are left
        $d.text(d);
        $h.text(h);
        $m.text(m);
        $s.text(s);

      }, interval);

    }
  }

  var obj = {
      expire: false,
      theme: 'new-year-theme',
      type: '.notification-notification-countdown',
      text: '4 people are looking this product now!!!!!!!',
      by: 'Cool designer',
      image:"img/mr-been.jpg",
      countdown: '27-11-2020 08:30:00'
  };

  if(!obj.expire) {
    var $popup = $(obj.type);
    $popup.slideDown();
    $popup.addClass(obj.theme);
    $popup.find('.notification-content p').text(obj.text);
    $popup.find('.notification-name span').text(obj.by);
    $popup.find('.notification-image').css('background-image', 'url('+obj.image+')');

    $('.notification-close-icon').on('click',function () {
      $popup.slideUp();
    });

    if (obj.hasOwnProperty('countdown')) {
      countdown(obj.countdown);
    }
  }
});


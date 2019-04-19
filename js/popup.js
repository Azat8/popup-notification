  var stylesheetUrl = 'css/style.css';

  var obj = {
    expire: false,
    theme: 'new-year-theme',
    type: '.notification-notification-countdown',
    text: '4 people are looking this product now @@@@@@@',
    by: 'Cool designer',
    image:"img/mr-been.jpg",
    countdown: '27-11-2020 08:30:00'
  };

  var markup = '<div class="notification-type notification notification-1 notification-notification">\n' +
      '        <div class="left-side">\n' +
      '            <div class="notification-image" style="background-image: url(\'img/mr-been.jpg\')"></div>\n' +
      '            <div class="notification-content">\n' +
      '                <p>4 people are looking this product now</p>\n' +
      '            </div>\n' +
      '            <div class="notification-close-icon"></div>\n' +
      '            <div class="notification-name">\n' +
      '                <p>by <span>FomoTank</span></p>\n' +
      '            </div>\n' +
      '            <div class="about">\n' +
      '                <h1>about 1 hour ago</h1>\n' +
      '            </div>\n' +
      '        </div>\n' +
      '    </div>\n' +
      '    <div class="notification-type notification notification-2 notification-notification-countdown">\n' +
      '        <div class="left-side">\n' +
      '            <div class="notification-image" style="background-image: url(\'img/mr-been.jpg\')"></div>\n' +
      '            <div class="notification-content">\n' +
      '                <p>4 people are looking this product now</p>\n' +
      '            </div>\n' +
      '            <div class="notification-close-icon"></div>\n' +
      '            <div class="notification-name">\n' +
      '                <p>by <span>FomoTank</span></p>\n' +
      '            </div>\n' +
      '            <div class="days-hours small-size">\n' +
      '                <ul>\n' +
      '                    <li class="days">00</li>\n' +
      '                    <li>Days</li>\n' +
      '                </ul>\n' +
      '                <ul>\n' +
      '                    <li class="hrs">00</li>\n' +
      '                    <li>Hrs</li>\n' +
      '                </ul>\n' +
      '                <ul>\n' +
      '                    <li class="mins">00</li>\n' +
      '                    <li>Mins</li>\n' +
      '                </ul>\n' +
      '                <ul>\n' +
      '                    <li class="secs">00</li>\n' +
      '                    <li>Secs</li>\n' +
      '                </ul>\n' +
      '            </div>\n' +
      '        </div>\n' +
      '    </div>\n' +
      '    <div class="notification-type notification notification-3 notification-countdown">\n' +
      '        <div class="left-side">\n' +
      '            <div class="notification-image" style="background-image: url(\'img/mr-been.jpg\')"></div>\n' +
      '            <div class="notification-close-icon"></div>\n' +
      '            <div class="notification-name">\n' +
      '                <p>by <span>FomoTank</span></p>\n' +
      '            </div>\n' +
      '            <div class="days-hours big-size">\n' +
      '                <ul>\n' +
      '                    <li class="days">00</li>\n' +
      '                    <li>Days</li>\n' +
      '                </ul>\n' +
      '                <ul>\n' +
      '                    <li class="hrs">00</li>\n' +
      '                    <li>Hrs</li>\n' +
      '                </ul>\n' +
      '                <ul>\n' +
      '                    <li class="mins">00</li>\n' +
      '                    <li>Mins</li>\n' +
      '                </ul>\n' +
      '                <ul>\n' +
      '                    <li class="secs">00</li>\n' +
      '                    <li>Secs</li>\n' +
      '                </ul>\n' +
      '            </div>\n' +
      '        </div>\n' +
      '    </div>';

  window.onload = function() {

    var link = document.createElement('link');
    link.rel = 'stylesheet';
    link.href = stylesheetUrl;
    document.head.appendChild(link);
    console.log(link);

    var wrapperId = 'notification_popup';
    var $wrapper = document.createElement('div');
    $wrapper.setAttribute('id', wrapperId);
    document.body.appendChild($wrapper);
    var wr = document.getElementById(wrapperId);
    wr.innerHTML = markup;

    if(!obj.expire) {
      var $popup = document.querySelectorAll('#'+wrapperId + ' ' + obj.type)[0];
      console.log($popup);
      $popup.style.display = 'block';
      $popup.classList.add(obj.theme);
      $popup.querySelectorAll('.notification-content p')[0].innerText = (obj.text);
      $popup.querySelectorAll('.notification-name span')[0].innerText = (obj.by);
      $popup.querySelectorAll('.notification-image')[0].style['background-image'] = 'url('+obj.image+')';

      $popup.querySelectorAll('.notification-close-icon')[0].addEventListener('click', function () {
        $popup.style.display = 'none';
      });

      if (obj.hasOwnProperty('countdown')) {
        countdown(obj.countdown, $popup);
      }
    }
  };

  function countdown(date, $obj) {
    console.log(date);
    var eventTime = moment(date, 'DD-MM-YYYY HH:mm:ss').unix(),
        currentTime = moment().unix(),
        diffTime = eventTime - currentTime,
        duration = moment.duration(diffTime * 1000, 'milliseconds'),
        interval = 1000;

    // if time to countdown
    if(diffTime > 0) {

      // Show clock
      // $clock.show();

      var $d = $obj.querySelectorAll('.days')[0],
          $h = $obj.querySelectorAll('.hrs')[0],
          $m = $obj.querySelectorAll('.mins')[0],
          $s = $obj.querySelectorAll('.secs')[0];

      setInterval(function(){

        duration = moment.duration(duration.asMilliseconds() - interval, 'milliseconds');
        var d = moment.duration(duration).days(),
            h = moment.duration(duration).hours(),
            m = moment.duration(duration).minutes(),
            s = moment.duration(duration).seconds();
        // console.log((d));
        d = (d).toString().trim().length === 1 ? '0' + d : d;
        h = (h).toString().trim().length === 1 ? '0' + h : h;
        m = (m).toString().trim().length === 1 ? '0' + m : m;
        s = (s).toString().trim().length === 1 ? '0' + s : s;

        // show how many hours, minutes and seconds are left
        $d.innerText = (d);
        $h.innerText = (h);
        $m.innerText = (m);
        $s.innerText = (s);

      }, interval);

    }
  }


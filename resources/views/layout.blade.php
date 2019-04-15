<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>1-Home</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <link href="css/select2.min.css" rel="stylesheet" type="text/css"/>
</head>
<body>
@yield('content')
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.js"></script>


<script type="text/javascript">
  (function () {
    var button, list;

    button = $(".dropdown-button");

    list = $(".dropdown-list");

    button.on("click", function () {
      list.toggle();
      return button.toggleClass("active");
    });

    list.children().on("click", function () {
      button.html($(this).html());
      button.css("color", "#72d2ff");
      list.toggle();
      return button.toggleClass("active");
    });

  }).call(this);

</script>
<script>
  $('#name-url').on('input', function () {
    $('#hideImg').hide();
    $('#iframeID').show();
    var site = $('#name-url').val();
    document.getElementsByName('iFrameName')[0].src = site;
  });
</script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jscolor.js"></script>
<script src="js/select2.js"></script>
<script src="js/select2.min.js"></script>
</body>

</html>

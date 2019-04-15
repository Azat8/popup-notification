$(document).ready(function(){

  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  $(".gtm-track").click(function(e){
    e.preventDefault();
    let url =  '/generate-iframe?' + $("#form-third").serialize();

    $.ajax({
      url: url,
      method: "get",
      success: function (res){
        console.log(res);
      },
      error: function (error){
        console.log(error);
      },

    }).done(function() {
      console.log("done");
    });

  });



});
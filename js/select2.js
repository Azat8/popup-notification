$(document).ready(function () {

  $('.select-position').select2({
    minimumResultsForSearch: -1,
    placeholder: 'Select Position',
    allowClear: true,
  });
  $('.show-desktop-mobile').select2({
    minimumResultsForSearch: -1,
    placeholder: 'Show on Desktop/Mobile',
    allowClear: true,
  });

});




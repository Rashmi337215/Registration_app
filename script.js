$(function(){
  // simple submit visual feedback
  $('#regForm').on('submit', function(){
    // disable submit button to prevent double submission
    $(this).find('button[type="submit"]').prop('disabled', true).text('Submitting...');
    // allow normal form submission to PHP (no AJAX required)
    return true;
  });
});
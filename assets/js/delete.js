$('.dbtn').click(function() {
    var userId = $(this).data('user-id');
    
    $.ajax({
      url: 'delete-qrcode.php',
      type: 'POST',
      data: {qr_id: id},
      success: function(result) {
        // Display a success message or refresh the page to update the list of users
      }
    });
  });
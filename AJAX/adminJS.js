$(document).ready(function() {
  $(document).on("click",".delete",function() {
    var playerId = $(this).data('player-id');
    $.ajax({
      type: 'POST',
      url: '../Dashboard/ajaxProcess.php',
      data: { playerId: playerId },
      success: function(response) {
        $('.player').html(response);
      }
    });
  })

  $(document).on("click",".update",function() {
    var Id = $(this).data('player-id');
    var name = $(this).parent().parent('tr').find('.name').text();
    var run = $(this).parent().parent('tr').find('.run').text();
    var ball = $(this).parent().parent('tr').find('.ball').text();
    
    $('#editModal').modal('show');
    $('#editId').val(Id);
    $('#editName').val(name);
    $('#editRun').val(run);
    $('#editBall').val(ball);
  })

  // It implements to edit Player details.
  $('#editForm').submit(function (e) {
    e.preventDefault();
    var id = $('#editId').val();
    var name = $('#editName').val();
    var run = $('#editRun').val();
    var ball = $('#editBall').val();

    $.ajax({
      type: 'POST',
      url: '../Dashboard/editPlayer.php',
      data: {id: id, name: name, run: run, ball: ball},
      success: function (response) {
        $('#editModal').modal('hide');
        $('.player').html(response);
      },
    })
  });
})

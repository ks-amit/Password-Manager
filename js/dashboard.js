$(document).ready(function(){

  $('#showpass').on('mousedown', function(){
    $('.passfield').attr('type', 'text');
  });

  $('#showpass').on('mouseup', function(){
    $('.passfield').attr('type', 'password');
  });

  $('.removebtn').on('click', function(){
    var id1 = $(this).attr('id');
    var url = "remove.php?id=" + id1;
    window.location.href = url;
  });

});
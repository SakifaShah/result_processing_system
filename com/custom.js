$('#button').click(function(){

  var uname= $('#name').val();
  alert(uname);
  /*/$.ajax({
    url : 'validate.php',
    data : 'user=' + uname,
    success:function(data){
      $('#content').html(data);
    }
  });*/
});

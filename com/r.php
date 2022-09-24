<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function()
{
  $('form').submit(function(){
    $.ajax({
      data: $(this).serialize(),
      type: $(this).attr('method'),
      url: $(this).attr('action'),
      success: function(varX)
      {
        $('#get_content').html(varX);
      }
    });
  });
});
</script>
<form action="validate.php" method="post">
  <input type="text" name="fullName"/>
  <input type="submit"/>
</form>
<div id="get_content"></div>

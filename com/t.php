<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript" src="jquery.js"></script>
</head>
<body>
  <form>
    <input type="text" id="name" placeholder="Enter Your Name..."/><br/>
    <input type="button" value="submit" onclick="post();"/>
  </form>
  <div id="result"></div>
  <script type="text/javascript">
  function post()
  {
    var name = $('#name').val();
    $.post('validate.php',{postname:name},
function(data)
{
  console.log(data);
});
  }
  </script>
</body>
</html>

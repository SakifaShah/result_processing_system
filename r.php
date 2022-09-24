<!DOCTYPE html>
<html>
<body>
  <h2 id="title">POST XMLHttpRequest</h2>
  <p id="server"></p>
  <script type="text/jscript">
  const xhr= new XMLHttpRequest();
  var a="kro",b=5;
  xhr.onload = function()
  {
    const server = document.getElementById("server");
    server.innerHTML=this.responseText;
  };
  xhr.open("POST","validate.php");
  xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
  xhr.send("name="+a+"&message="+b);
  </script>
</body>
</html>

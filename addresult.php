<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Horizontal form</h2>
  <form class="form-horizontal" action="/action_page.php">


  <form method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="sel1">Select semester(select one):</label>
  <div class="col-sm-10">
      <select name="state" class="form-control" id="sel1">
        <option>1-1</option>
        <option>1-2</option>
        <option>2-1</option>
        <option>2-2</option>
        <option>3-1</option>
        <option>3-2</option>
        <option>4-1</option>
        <option>4-2</option>
      </select>
 <button type="submit" value="execute">
  </div>
<?php echo $_POST['state'];
echo 5;
?>
    </div>
  </form>






    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Show Courses</button>
      </div>
    </div>
  </form>
</div>
<div class="container">
  <h2>Related courses</h2>

  <table class="table table-striped">
    <thead>
      <tr>
        <th>Coursename</th>
        <th>Coursecode</th>
        <th>Credit</th>
        <th>Obtained marks</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Database</td>
        <td>312</td>
        <td>3</td>
         <td><input type="text"></td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
         <td><input type="text"></td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
        <td><input type="text"></td>
      </tr>
    </tbody>
  </table>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">View Result</button>
    </div>
</div>
</body>
</html>

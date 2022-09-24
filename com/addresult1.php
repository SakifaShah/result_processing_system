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

  <form action="" method="post">
    <label for="sel1">Select list:</label>
    <select class="form-control" id="sel1" name="semester">
        <option value="1-1">1-1</option>
        <option value="1-2">1-2</option>
        <option value="2-1">2-1</option>
        <option value="2-2">2-2</option>
        <option value="3-1">3-1</option>
        <option value="3-2">3-2</option>
        <option value="4-1">4-1</option>
        <option value="4-2">4-2</option>
    </select>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Show Courses</button>
      </div>
</form>
    </div>
  </form>
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
<?php
   ob_start();
   include('get_courses.php');
   $page = ob_get_clean();
   echo $page;
 ?>
</body>
</html>

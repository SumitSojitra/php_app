<?php

  if(isset($_REQUEST['submit'])){
    $name=$_REQUEST['InputName'];
    $course=$_REQUEST['InputCourse'];
    $grid=$_REQUEST['InputGrid'];
    echo $name;
    echo $course;
    echo $grid;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Admin</title>
</head>
<body>
<div class="ms-5"><form>
<div class="col-6">
  <br/>
   <lable for="InputName" class="form-lable"><b>Name</b></lable>
   <input type="text" class="form-control" id="InputName" name="InputName">
  <br/>
   <lable for="InputCourse" class="form-lable"><b>Course</b></lable>
   <input type="text" class="form-control" id="InputCourse" name="InputCourse">
  <br/>
   <lable for="InputGrid" class="form-lable"><b>Grid</b></lable>
   <input type="number" class="form-control" id="InputGrid" name="InputGrid">
   <hr>
  </div>
 
  <a href="homepage.php" button type="submit" class="btn btn-dark" name="submit" value = "submit">Submit</a/button>
</form>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
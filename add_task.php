<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Task</title>
  <!-- Boostrap CSS link -->
  <link rel="stylesheet" href="./bootstrap-5.3.1/dist/css/bootstrap.css">
  <link rel="stylesheet" href="./bootstrap-5.3.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="custom.css">
</head>

<body>
  <nav class="navbar px-2 text-light" style="background-color: orangered;">
    <div class="container-fluid">
      <a class="navbar-brand text-light fs-2" href="./add_task.php">Task Manager</a>
    </div>
  </nav>
  <div class="text-center mx-auto mt-5">
    <h1 style="color: orangered;">Add a task-</h1>
  </div>
  <div class="col-6 mx-auto mt-5 border border-4 p-4 rounded-4">
    <form action="#" method="post">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Task Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="task_name">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Task Description</label>
        <textarea class="form-control" placeholder="Describe your task..." id="floatingTextarea2" style="height: 100px" name="task_desc"></textarea>
      </div>
      <div class="text-center">
        <!-- <a href="" class="btn py-2 text-light">
        Add Task
      </a> -->
        <input type="submit" value="Add Task" class="btn py-2 text-light" name="add">
      </div>
    </form>
  </div>
  <div class="text-center mt-5 fs-3">
    <a href="./view_task.php" class="text-primary">Click here to view the task list...</a>
  </div>
</body>
<!-- Boostrap JS link -->
<script src="./bootstrap-5.3.1/dist/js/bootstrap.bundle.js"></script>
<script src="./bootstrap-5.3.1/dist/js/bootstrap.js"></script>
<script src="./bootstrap-5.3.1/dist/js/bootstrap.min.js"></script>

</html>

<?php
include('./CB/connection.php');
if (isset($_POST['add'])) {
  $task_name = $_POST['task_name'];
  $task_desc = $_POST['task_desc'];

  $sql = "INSERT INTO `task_list` (`id`, `name`, `description`) VALUES (NULL, '$task_name', '$task_desc')";
  $data = mysqli_query($conn, $sql);
  if ($data) {
    $message = "Record inserted";
echo "<script type='text/javascript'>alert('$message');</script>";
  } else {
    echo "ERROR: Hush! Sorry $sql. "
      . mysqli_error($conn);
  }
}
?>
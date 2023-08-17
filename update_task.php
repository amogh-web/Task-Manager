
<?php 
include "./CB/connection.php";
$id = $_GET['id'];
// echo $id;
$sql = "SELECT * FROM `task_list` WHERE `id` = $id";
$result = mysqli_query($conn,$sql); 
$name;
$dis;
foreach($result as $row)
{ 
      $name = $row['name'];
      $dis = $row['description'];
    //  echo "Id is ".$row['id']."<br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update your task</title>
    <link rel="stylesheet" href="custom.css">
    <link rel="stylesheet" href="./bootstrap-5.3.1/dist/css/bootstrap.css">
    <link rel="stylesheet" href="./bootstrap-5.3.1/dist/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
<nav class="navbar px-2 text-light" style="background-color: orangered;">
    <div class="container-fluid">
      <a class="navbar-brand text-light fs-2" href="./add_task.php">Task Manager</a>
    </div>
  </nav>
  <div class="text-center mx-auto mt-5">
    <h1 style="color: orangered;">Update task-</h1>
  </div>
  <div class="col-6 mx-auto mt-5 border border-4 p-4 rounded-4">
    <form action="./CB/update.php?id=<?=$id?>" method="POST">
    <div class="mb-3">
        <input type="hidden" class="form-control" id="task_id" placeholder="" name="task_id">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Task Name</label>
        <input type="text" class="form-control" id="task_name" placeholder="" name="task_name" value="<?=$name?>">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Task Description</label>
        <textarea class="form-control" placeholder="Describe your task..." id="task_desc" style="height: 100px" name="task_desc"><?=$dis?></textarea>
      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-primary py-2 text-light">
        Update Task
      </button>
      </div>
    </form>
  </div>

  <script src="./bootstrap-5.3.1/dist/js/bootstrap.bundle.js"></script>
  <script src="./bootstrap-5.3.1/dist/js/bootstrap.js"></script>
  <script src="./bootstrap-5.3.1/dist/js/bootstrap.min.js"></script>
  <script language="JavaScript" src="https://code.jquery.com/jquery-1.11.1.min.js" type="text/javascript"></script>
  <script language="JavaScript" src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js" type="text/javascript"></script>
  <script language="JavaScript" src="https://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>
</body>
</html>
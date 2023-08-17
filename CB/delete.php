<?php
include 'connection.php';
$id = $_GET['id'];
echo $id;
if(isset($_REQUEST['id'])){
$sql = "DELETE FROM `task_list` WHERE `id` = $id";
$result = mysqli_query($conn,$sql);
if($result){
//      $message = "Record inserted";
// echo "<script type='text/javascript'>alert('$message');</script>";
header("Location:../view_task.php");
echo "Task Removed!";
}else{
    echo "failed to romove";
}
}
?>
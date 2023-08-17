<?php
include 'connection.php';
$id = $_GET['id'];
$task_name = $_POST['task_name'];
$task_desc = $_POST['task_desc'];
$sql = "UPDATE `task_list` SET `name` = '$task_name', `description` ='$task_desc' WHERE `id` = $id";
$result = mysqli_query($conn,$sql); 
if($result){
    echo "<script>";
    echo "alert('Record Updated!')";
    echo"</script>";
    header("location:../view_task.php");
}
else{
}
?>
<?php
include('./CB/connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Task</title>
    <link rel="stylesheet" href="custom.css">
    <link rel="stylesheet" href="./bootstrap-5.3.1/dist/css/bootstrap.css">
    <link rel="stylesheet" href="./bootstrap-5.3.1/dist/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->


    <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">
</head>

<body>
  </div>
    <nav class="navbar px-2 text-light" style="background-color: orangered;">
        <div class="container-fluid">
            <a class="navbar-brand text-light fs-1 text-left" href="./add_task.php">Task Manager</a>
        </div>
    </nav>
    <div class="container">
        <div class="row mt-5">
            <h1 class="text-center" style="color: orangered;">Manage your tasks-</h1>
        </div>
        <div class="row mt-5">

            <div class="col-md-12">

                <table id="datatable" class="table table-striped table-bordered mt-4" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Task Name</th>
                            <th>Description</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>

                    <tfoot>
                        <tr>
                            <th>Task Name</th>
                            <th>Description</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </tfoot>

                    <tbody>
                        <?php
                        $sql = "SELECT `id`,`name`,`description` FROM `task_list` ";
                        $result = mysqli_query($conn, $sql);
                        $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
                        // print_r($rows);
                        foreach ($rows as $row) {
                            $row['id'];
                           $row["name"];
                            $row["description"];
                        ?>

                        <tr>
                                <td><?= $row["name"] ?></td>
                                <td><?= $row["description"] ?></td>
                                <td class="">
                                        <a href="./update_task.php?id=<?=$row['id']?>" class="btn btn-primary" name="update">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                                            </svg>
                                        </a>
                                </td>
                                <td>
                                        <a href="./CB/delete.php?id=<?=$row['id']?>" class="btn btn-danger">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                                    </svg>
                                </a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>

                <div class="text-center mt-5 fs-1">
                    <a href="./add_task.php" class="text-primary">Click here to add task.</a>
                </div>
</body>

<script>
    $(document).ready(function() {
        $('#datatable').dataTable();

        $("[data-toggle=tooltip]").tooltip();

    });
</script>
<script src="./bootstrap-5.3.1/dist/js/bootstrap.bundle.js"></script>
<script src="./bootstrap-5.3.1/dist/js/bootstrap.js"></script>
<script src="./bootstrap-5.3.1/dist/js/bootstrap.min.js"></script>
<script language="JavaScript" src="https://code.jquery.com/jquery-1.11.1.min.js" type="text/javascript"></script>
<script language="JavaScript" src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script language="JavaScript" src="https://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>

</html>
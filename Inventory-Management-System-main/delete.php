<?php

include("database/db_conection.php");
$delete_id=$_GET['del'];
$delete_query="delete  from employees WHERE emp_no='$delete_id'";//delete query
$run=mysqli_query($dbcon,$delete_query);
if($run)
{
//js function to open in the same window
    echo "<script>window.open('view_users.php?deleted=user has been deleted','_self')</script>";
}

?>
<?php
// Include constants.php file here
include('config/constants.php');
// 1. get the Id of admin to be deleted 
$id = $_GET['id'];
// 2. create SQL Query to Delete Admin 
$sql = "DELETE FROM tbl_admin WHERE id=$id";

// Execute the Query 
$res = mysqli_query($conn, $sql);

// Check whether the query executed successfully or not 
if ($res == TRUE) {
  // echo "Admin Deleted";
  // Create a Session Variable to Display Message
  $_SESSION['delete'] = "<div class='success'>Admin Deleted Successfully.</div>";
  // Redirect to Manager admin Page
  header("location:" . SITEURL . 'admin/manager-admin.php');
} else {
  // Failed to delete Admin
  // echo "Failed to Delete Admin";
  $_SESSION['delete'] = "<div class= 'error'>Failed to Deleted Admin. Try Again Later.</div>";
  header("location:" . SITEURL . 'admin/manager-admin.php');
}
  // 3. Redirect to manager admin page with message (success/error)

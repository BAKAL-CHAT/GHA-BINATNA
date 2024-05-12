<?php
include('db.php');

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  
  // Perform delete operation
  $delete_query = "DELETE FROM bb WHERE id = $id";
  mysqli_query($con, $delete_query);
}
?>

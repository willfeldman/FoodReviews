<?php 
  include '../DAOs/ReviewDAO.php';
  
  $database_connection = new ReviewDAO();

  $database_connection->deleteReview($_GET['review']);
  
  header("Location: ../ReviewsList.php");
?>
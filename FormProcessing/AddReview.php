<?php 
  include '../DAOs/ReviewDAO.php';
  
  $database_connection = new ReviewDAO();

  $database_connection->createReview(new Review(null, $_POST['content'], $_POST['rating'], $_POST['dor'], $_POST['user_id'], $_POST['location_id'], $_POST['food_id']));
  
  header("Location: ../ReviewsList.php");
?>
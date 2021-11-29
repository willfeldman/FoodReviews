<?php 
  include '../DAOs/FoodDAO.php';
  
  $database_connection = new FoodDAO();

  $database_connection->deleteFood($_GET['food']);
  
  header("Location: ../FoodsList.php");
?>
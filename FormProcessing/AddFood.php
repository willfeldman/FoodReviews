<?php 
  include '../DAOs/FoodDAO.php';
  
  $database_connection = new FoodDAO();

  $database_connection->createFood(new Food(null, $_POST['name']));
  
  header("Location: ../FoodsList.php");
?>
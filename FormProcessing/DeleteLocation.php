<?php 
  include '../DAOs/LocationDAO.php';
  
  $database_connection = new LocationDAO();

  $database_connection->deleteLocation($_GET['location']);
  
  header("Location: ../LocationsList.php");
?>
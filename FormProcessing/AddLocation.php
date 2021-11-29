<?php 
  include '../DAOs/LocationDAO.php';
  
  $database_connection = new LocationDAO();

  $database_connection->createLocation(new Location(null, $_POST['name'], $_POST['address']));
  
  header("Location: ../LocationsList.php");
?>
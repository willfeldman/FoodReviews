<?php 
  include '../DAOs/LocationDAO.php';
  
  $database_connection = new LocationDAO();

  $database_connection->updateLocation($_GET['location'], new Location(null, $_POST['name'], $_POST['address']));
  
  header("Location: ../LocationsList.php");
?>
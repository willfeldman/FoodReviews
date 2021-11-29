<?php 
  include '../DAOs/UserDAO.php';
  
  $database_connection = new UserDAO();

  $database_connection->deleteUser($_GET['user']);
  
  header("Location: ../UsersList.php");
?>
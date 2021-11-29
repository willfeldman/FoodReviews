<?php 
  include '../DAOs/UserDAO.php';
  
  $database_connection = new UserDAO();

  $database_connection->updateUser($_GET['user'], new User(null, $_POST['firstname'], $_POST['lastname'], $_POST['username'], $_POST['password'], $_POST['email'], $_POST['dob']));
  
  header("Location: ../UsersList.php");
?>
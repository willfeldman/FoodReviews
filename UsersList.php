<?php include 'DAOs/UserDAO.php';?>
<?php
    $database_connection = new UserDAO();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Food Reviews</title>
    </head>
    <body style="padding: 20px;">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Data</a></li>
                <li class="breadcrumb-item active" aria-current="page">Users</li>
            </ol>
        </nav>
        <div>
            <h1>Users</h1>
            <hr>
            <ul class="list-group">
                <?php 
                    foreach ($database_connection->findAllUsers() as $user) {
                        echo "<li class='list-group-item'><b>First name</b>: ". $user->getFirstName() . ", <b>Last name</b>: " . $user->getLastName() . ", <b>Username</b>: " . $user->getUsername() . ", <b>Password</b>: " . $user->getPassword() . ", <b>Email</b>: " . $user->getEmail() . ", <b>DOB</b>: " . substr($user->getDOB(), 0, 10) . "<a href=EditUserForm.php?user='" . $user->getId() . "'><button type='button' class='btn btn-link link-danger'>Edit</button></a>" . "<a href=ReviewsByUser.php?user=" . $user->getId() . "><button type='button' class='btn btn-link'>View " . $user->getFirstName() . "'s Reviews</button></a>" . "</li>";
                    }
                ?>
            </ul>
            <br>
            <a href="AddUserForm.php"><button type="button" class="btn btn-primary">Create</button></a>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
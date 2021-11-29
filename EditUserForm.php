<?php include 'DAOs/UserDAO.php';?>
<?php
    $database_connection = new UserDAO();
    $user = $database_connection->findUserById($_GET['user']);
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
                <li class="breadcrumb-item"><a href="UsersList.php">View all users</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit User #<?php echo $user->getId() ?></li>
            </ol>
        </nav>
        <h1>Edit User @<?php echo $user->getUsername() ?> <a href="FormProcessing/DeleteUser.php?user=<?php echo $user->getId() ?>"><button type="button" class="btn btn-danger">Delete user</button></a></h1>
        <hr>
        <div>
            <form action="FormProcessing/UpdateUser.php?user=<?php echo $user->getId() ?>" method="post">
                <div class="row g-3 align-items-center">
                    <input type="firstname" id="firstname" name="firstname" value="<?php echo $user->getFirstName() ?>" placeholder="First name" class="form-control">
                </div>
                <br>
                <div class="row g-3 align-items-center">
                    <input type="lastname" id="lastname" name="lastname" value="<?php echo $user->getLastName() ?>" placeholder="Last name" class="form-control">
                </div>
                <br>
                <div class="row g-3 align-items-center">
                    <input type="username" id="username" name="username" value="<?php echo $user->getUsername() ?>" placeholder="Username" class="form-control">
                </div>
                <br>
                <div class="row g-3 align-items-center">
                    <input type="text" id="password" name="password" value="<?php echo $user->getPassword() ?>" placeholder="Password" class="form-control">
                </div>
                <br>
                <div class="row g-3 align-items-center">
                    <input type="email" id="email" name="email" value="<?php echo $user->getEmail() ?>" placeholder="Email" class="form-control">
                </div>
                <br>
                <div class="row g-3 align-items-center">
                    <input type="dob" id="dob" name="dob" value="<?php echo $user->getDOB() ?>" placeholder="DOB (ex: 2002-03-21)" class="form-control">
                </div>
                <br>
                <div class="row g-3 align-items-center">
                    <input class="btn btn-success btn-md px-3" id="submit" type="submit" value="Update">
                </div>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
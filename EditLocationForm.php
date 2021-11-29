<?php include 'DAOs/LocationDAO.php';?>
<?php
    $database_connection = new LocationDAO();
    $location = $database_connection->findLocationById($_GET['location']);
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
                <li class="breadcrumb-item"><a href="LocationsList.php">Locations</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Location #<?php echo $location->getId() ?></li>
            </ol>
        </nav>
        <div class="alert alert-dark alert-dismissible fade show" role="alert">
            Want to create a new location instead? <a href="AddLocationForm.php" class="alert-link">Go here</a>!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <h1>Edit <?php echo $location->getName() ?> <a href="FormProcessing/DeleteLocation.php?location=<?php echo $location->getId() ?>"><button type="button" class="btn btn-danger">Delete location</button></a></h1>
        <hr>
        <div>
            <form action="FormProcessing/UpdateLocation.php?location=<?php echo $location->getId() ?>" method="post">
                <div class="row g-3 align-items-center">
                    <input type="name" id="name" name="name" value="<?php echo $location->getName() ?>" placeholder="Name" class="form-control">
                </div>
                <br>
                <div class="row g-3 align-items-center">
                    <input type="address" id="address" name="address" value="<?php echo $location->getAddress() ?>" placeholder="Address" class="form-control">
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
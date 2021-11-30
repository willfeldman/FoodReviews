<?php include 'DAOs/ReviewDAO.php';?>
<?php
    $database_connection = new ReviewDAO();
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
                <li class="breadcrumb-item"><a href="ReviewsList.php">Reviews</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add new review</li>
            </ol>
        </nav>
        <h1>Add new review</h1>
        <hr>
        <div>
            <form action="FormProcessing/AddReview.php" method="post">
                <div class="row g-3 align-items-center">
                    <input type="textbox" id="content" name="content" placeholder="Content" class="form-control">
                </div>
                <br>
                <div class="row g-3 align-items-center">
                    <select class="form-select form-control" id="rating" name="rating">
                        <option value="ONE">ONE</option>
                        <option value="TWO">TWO</option>
                        <option value="THREE">THREE</option>
                        <option value="FOUR">FOUR</option>
                        <option value="FIVE">FIVE</option>
                    </select>
                </div>
                <br>
                <div class="row g-3 align-items-center">
                    <input type="text" id="dor" name="dor" placeholder="Date of review" class="form-control">
                </div>
                <br>
                <div class="row g-3 align-items-center">
                    <input type="text" id="user_id" name="user_id" placeholder="User" class="form-control">
                </div>
                <br>
                <div class="row g-3 align-items-center">
                    <input type="text" id="location_id" name="location_id" placeholder="Location" class="form-control">
                </div>
                <br>
                <div class="row g-3 align-items-center">
                    <input type="text" id="food_id" name="food_id" placeholder="Food" class="form-control">
                </div>
                <br>
                <div class="row g-3 align-items-center">
                    <input class="btn btn-success btn-md px-3" id="submit" type="submit" value="Add">
                </div>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
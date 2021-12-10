<?php include 'DAOs/ReviewDAO.php';?>
<?php
    $review_connection = new ReviewDAO();
    $review = $review_connection->findReviewById($_GET['review']);
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
                <li class="breadcrumb-item active" aria-current="page">Edit Review #<?php echo $review->getId() ?></li>
            </ol>
        </nav>
        <div class="alert alert-dark alert-dismissible fade show" role="alert">
            Want to create a new review instead? <a href="AddReviewForm.php" class="alert-link">Go here</a>!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <h1>Edit Review #<?php echo $review->getId() ?> <a href="FormProcessing/DeleteReview.php?review=<?php echo $review->getId() ?>"><button type="button" class="btn btn-danger">Delete review</button></a></h1>
        <hr>
        <div>
            <form action="FormProcessing/UpdateReview.php?review=<?php echo $review->getId() ?>" method="post">
                <div class="row g-3 align-items-center">
                    <input type="textbox" id="content" name="content" value="<?php echo $review->getContent() ?>" placeholder="Content" class="form-control">
                </div>
                <br>
                <div class="row g-3 align-items-center">
                    <select class="form-select form-control" id="rating" name="rating">
                        <option selected value="<?php echo $review->getRating() ?>"><?php echo $review->getRating() ?></option>
                        <option value="ONE">ONE</option>
                        <option value="TWO">TWO</option>
                        <option value="THREE">THREE</option>
                        <option value="FOUR">FOUR</option>
                        <option value="FIVE">FIVE</option>
                    </select>
                </div>
                <br>
                <div class="row g-3 align-items-center">
                    <input type="text" id="dor" name="dor" value="<?php echo $review->getDOR() ?>" placeholder="Date of review" class="form-control">
                </div>
                <br>
                <div class="row g-3 align-items-center">
                    <input type="text" id="user_id" name="user_id" value="<?php echo $review->getUserId() ?>" placeholder="User ID" class="form-control">
                </div>
                <?php
                    echo "<p><a href=EditUserForm.php?user=" . $review->getUserId() . ">Edit " . $review_connection->findReviewerName($review->getUserId()) . "</a></p>"
                ?>
                <div class="row g-3 align-items-center">
                    <input type="text" id="location_id" name="location_id" value="<?php echo $review->getLocationId() ?>" placeholder="Location ID" class="form-control">
                </div>
                <?php
                    echo "<p><a href=EditLocationForm.php?location=" . $review->getLocationId() . ">Edit " . $review_connection->findReviewLocation($review->getLocationId()) . "</a></p>"
                ?>
                <div class="row g-3 align-items-center">
                    <input type="text" id="food_id" name="food_id" value="<?php echo $review->getFoodId() ?>" placeholder="Food ID" class="form-control">
                </div>
                <?php
                    echo "<p><a href=EditFoodForm.php?food=" . $review->getFoodId() . ">Edit " . $review_connection->findReviewFood($review->getFoodId()) . "</a></p>"
                ?>
                <br>
                <div class="row g-3 align-items-center">
                    <input class="btn btn-success btn-md px-3" id="submit" type="submit" value="Update">
                </div>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
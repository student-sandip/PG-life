<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome | PG Life</title>

    <?php
    include "includes/head_link.php";
    ?>
    <link href="css/home.css" rel="stylesheet" />
</head>

<body>
    <?php
    include "includes/header.php";
    ?>

    <div class="banner-container">
        <h2 class="white pb-3">Happiness Of Living</h2>

        <form id="search-from" action="property_list.php" method="GET">
            <div class="input-group city-search">
                <input type="text" class="form-control" placeholder="Enter your city to search for PGs"/>
                <div class="input-group-append">
                    <botton type="submit" class="btn btn-secondary">
                        <i class="fas fa-search"></i>
                    </botton>
                </div>
            </div>
        </form>
    </div>

    <div class="page-container">
        <h1 class="city-heading">
            Major Cities
        </h1>
        <div class="row">
            <div class="city-card-container col-md">
                <a href="property_list.php?city=Delhi">
                    <div class="city-card rounded-circle">
                        <img src="img/delhi.png" class="city-img">
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="property_list.php?city=Mumbai">
                    <div class="city-card rounded-circle">
                        <img src="img/mumbai.png" class="city-img">
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="property_list.php?city=Bangalore">
                    <div class="city-card rounded-circle">
                        <img src="img/bangalore.png" class="city-img">
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="property_list.php?city=Chennai">
                    <div class="city-card rounded-circle">
                        <img src="img/chennai.png" class="city-img">
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="property_list.php?city=Hyderabad">
                    <div class="city-card rounded-circle">
                        <img src="img/hyderabad.png" class="city-img">
                    </div>
                </a>
            </div>
        </div>
    </div>
    
<?php
    include "includes/sign_model.php";
    include "includes/login_model.php";
    include "includes/footer.php";
    ?>

</body>
</html>
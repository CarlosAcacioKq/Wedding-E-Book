<?php include ("./conn/conn.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Guest e-book</title>

    <!-- Style CSS -->
    <link rel="stylesheet" href="./assets/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand ml-3" href="">Wedding Guest e-book</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="guest-form.php">Add Guest</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="guest-list.php">Guest List</a>
                </li>
            </ul>
        </div>
    </nav>
    
    <div class="main"> 

        <div class="form-container">

            <img src="../assets/images/form.png" alt="" height="100px">

            <form action="../endpoint/add-guest.php" method="POST">
                <div class="form-header">
                    <img src="../assets/images/pngwing.com (3).png" alt="">
                    <h1 class="text-center">Wedding Guest e-Book</h1>
                </div>
                <h3>About you</h3>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="name">Your name:</label>
                    <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="relationship">Relationship to the groom/bride:</label>
                    <input type="text" class="form-control" id="relationship" name="relationship">
                    </div>
                </div>
                <div class="form-group">
                    <label for="message">Message for the couple:</label>
                    <textarea class="form-control" id="message" name="message" rows="5"></textarea>
                </div>
                <h3>Your Prediction</h3>
                <div class="form-row">

                    <div class="form-group col-md-6">
                    <label for="firstChild">Year of first child:</label>
                    <input type="text" class="form-control" id="firstChild" name="first_child">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="numberChildren">Number of children after 5 yrs:</label>
                    <input type="text" class="form-control" id="numberChildren" name="number_of_child">
                    </div>
                </div>
                <button type="submit" class="btn btn-dark">Submit</button>
            </form>
        </div>

    </div>


    <!-- Script JS -->
    <script src="../assets/script.js"></script>
</body>
</html>
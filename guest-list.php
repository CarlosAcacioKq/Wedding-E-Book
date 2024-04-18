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
                <li class="nav-item">
                    <a class="nav-link" href="guest-form.php">Add Guest</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="guest-list.php">Guest List</a>
                </li>
            </ul>
        </div>
    </nav>
    
    <div class="main"> 

        <div class="list-container">

            <div class="float-right">
                <button type="button" class="btn btn-danger float-right" onclick="deleteAll()"><img src="https://img.icons8.com/?size=256&id=42858&format=png" alt="" width="20px" style="margin-top:-2px"> Delete All</button>
            </div>

            <div class="card-container">
                <?php 
                
                $stmt = $conn->prepare("SELECT * FROM tbl_guest");
                $stmt->execute();

                $result = $stmt->fetchAll();

                foreach ($result as $row) {
                    $guestID = $row["tbl_guest_id"];
                    $name = $row["name"];
                    $relationship = $row["relationship"];
                    $message = $row["message"];
                    $firstChild = $row["first_child"];
                    $numberChildren = $row["number_of_child"];
                    ?>
                    
                    <div class="card">
                        <div class="card-body">
                            <input type="text" value="<?= $guestID ?>" id="<?= $guestID ?>" hidden>
                            <h3 class="card-title" id="name-<?= $guestID ?>"><?= $name ?></h3>
                            <h5 class="card-subtitle mb-2 text-muted" id="relationship-<?= $guestID ?>"><?= $relationship ?></h5>
                            <h5>Message:</h5>
                            <p class="card-text" id="message-<?= $guestID ?>"><?= $message ?></p>

                            <h5>Prediction</h5>
                            <h6>Year of First Child: <span  id="firstChild-<?= $guestID ?>"><?= $firstChild ?></span></h6>
                            <h6>Number of Childer after 5 years: <span id="numberChilder-<?= $guestID ?>"><?= $numberChildren ?></span></h6>
                        </div>
                    </div>
                    
                    <?php
                }
                
                
                ?>    
            </div>

    </div>


    <!-- Script JS -->
    <script src="../assets/script.js"></script>
</body>
</html>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>SCP Subject Files</title>
  </head>

  <body class="container">
    <!-- Including the connection to database -->
    <?php include 'connection.php'; ?>

    <!-- SCP Logo -->
    <div class="text-center">
        <a class="logo-link" href="index.php"><img class="img-fluid"src="images/scp-logo.jpg" alt="SCP Logo"></a>
    </div>

    <!-- Navigation Container -->
    <div class="container">
        <nav class="navbar rounded navbar-expand-lg navbar-dark bg-dark">
            <!-- Title on nav bar -->
            <a class="navbar-brand" href="index.php">Home</a>
            <!-- Toggle for smaller screens -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navigation items -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">   
                    <!-- Drop down for the subject files              -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Subject Files
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <!-- Access the items in the database and printing them all to the dropdown -->
                            <?php foreach($result as $menu_item): ?>
                            <a class="dropdown-item" href="index.php?subject='<?php echo $menu_item['item_no']; ?>'">
                                <?php echo $menu_item['item_no']; ?>
                            </a>
                            <?php endforeach; ?>
                    </li>
                    <!-- Button for adding new subject -->
                    <li class="nav-item active">
                        <!-- Accessing the insert page when selected -->
                        <a class="nav-link" href="insert.php">Enter New Subject<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>            
        </nav>
    </div>
  
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>

</html>
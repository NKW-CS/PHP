<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta information -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="HOME" />
    <meta name="description" content="hotel mania record keeping sheet">
    <title>HOTEL MANIA RECORD</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon" />
    <!-- External CSS -->
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <!--CSS styles.css-->
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" ></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" >
</head>
<body>
  <!-- <?php
    //Include the header
    include('includes/header.php');
    ?>-->
    <header>
        <nav class="navbar bg-light">
            <div class="container-fluid">
                <div class="containers">
                    <a class="navbar-brand" href="index.php"><img src="../images/favicon.png" alt="header logo"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="navbar-collapse" id="navbarSupportedContent">
                    <ul class="toogle-navbar-options">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">HOME</a></li>
                        <li class="nav-item"><a class="nav-link" href="view.php">VIEW RECORD</a></li>
                    </ul>
                </div>
            </div>
        </nav>
         <div class="logo"><h1>HOTEL MANIA</h1>
        </div>
    </header>
    <section class="masthead">
        <h1>Guest Information</h1>
    </section>
    <main class="container">
        <section class="form-row ">
            <form action="add.php" method="POST" class="form-horizontal">

               <p> <label for="guests">Number of Guests</label>
                <input type="number" name="guests" id="guests" class="input" placeholder="Number of Guests" required></p>

                <p> <label for="checkin">Check-In Time</label>
                <input type="time" name="checkin" id="checkin" class="input" placeholder= "Check-in Time" required></p>

                <p> <label for="checkout">Check-Out Time</label>
                <input type="time" name="checkout" id="checkout"class="input"  placeholder= "Check-out Time" required></p>

                <p> <label for="name">Registered Guest Name</label>
                <input type="text" name="name" id="name" class="input" placeholder= "Guest name" required></p>

                <p><label for="room">Room Number</label>
                <input type="text" name="room" id="room"class="input"  placeholder= "Room number" required></p>

                <p> <button type="submit" class="submit-message">Submit</button></p>

            </form>
        </section>
    </main>
</body>
<?php
//Including the footer
include ('includes/footer.php');
?>
<footer>
      <small>  &copy; 2023 Hotel Mania. All rights reserved.</small>
    </footer>
</html>
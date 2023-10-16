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
    <main>
        <?php
         include_once ('validate.php');
         include_once ('database.php');

         $valid= new Validate();
         if(!empty($_POST['Submit'])){
            $Guestnum = $_POST['guests'];
            $chekIn = $_POST['checkin'];
            $registeredname = $_POST['name'];
            $roomnum = $_POST['room'];

            $msg = $valid->checkEmpty($_POST, array('guests', 'checkin', 'checkout','name','room' ));
            $checkroomno = $valid->validRoomNumber($_POST['room'];);
            $checkguestno = $valid->validguest($_POST['guests']);
            $checktime = $valid->validTime($_POST['checkin']);
            

            if($msg!=null){
                echo $msg;
                echo "<a href='javascript:self.history.back();'>Go Back</a>";
            } elseif(!$checkroomno){
                echo '<p>Please provide a valid Room Number.</p>';
                echo "<a href='javascript:self.history.back();'>Go Back</a>";
            } elseif(!$checkguestno){
                echo '<p>Please allow the specified guests only</p>';
                echo "<a href='javascript:self.history.back();'>Go Back</a>";
            }elseof(!$checktime){
                echo '<p>Please allow the specified Time Range only</p>';
                echo "<a href='javascript:self.history.back();'>Go Back</a>";
            }else{
                $result=$database->execute("INSERT INTO phpusers(room,guests,checktime,name) VALUES (' $Guestnum','$chekIn','$registeredname','$roomnum')"); 
                if($result){
                    echo "<p>Data added successfully.</p>";
                    echo "<a href='view.php'>VIEW RECORD</a>";
                }
            }

    
         }
        ?>
</main>
</body>
</html>
<?php
 include '../controller/session.php';
$ibc = new Dbc;

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>SIPM</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Agency HTML Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="SIPM">
    <meta name="generator" content="SIPM">
  
    <!-- favicon -->
    <link href="../images/favicon.png" rel="shortcut icon">
  
    <!-- 
    Essential stylesheets
    =====================================-->
    <link href="../plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="../plugins/bootstrap/bootstrap-slider.css" rel="stylesheet">
    <link href="../plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../plugins/slick/slick.css" rel="stylesheet">
    <link href="../plugins/slick/slick-theme.css" rel="stylesheet">
    <link href="../plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/chat.css" rel="stylesheet">
</head>
<body>

    <div class="wrapper">
        <section class="chat-area">
          <header>
            <?php 
                if(isset($_GET['id'])){

                  $result = $ibc->viewSinglePPP($_GET['id']);
                  if($result){
                    foreach($result as $reuls){
                        
                    }
                  }
                }
                    
                    
                
            ?>
            <!-- <a href="#" class="back-icon"><i class="fa fa-arrow-left"></i></a> -->
            <img src="<?= $reuls['sipmUser_ProfileImg']; ?>" alt="">
            <div class="details">
              <span><?= $reuls['sipmUser_FirstName']. " " . $reuls['sipmUser_SecondName'] ?></span>
              <p></p>
            </div>
          </header>
          
          <div class="chat-box">
    
          </div>
          <form action="" class="typing-area">
            <input type="text" class="incoming_id" name="incoming_id" value="<?= $reuls['unique_id']; ?>" hidden>
            <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
            <button><i class="fa fa-telegram"></i></button>
          </form>
        </section>
      </div>
    


<script src="../plugins/jquery/jquery.min.js"></script>
<script src="../plugins/bootstrap/popper.min.js"></script>
<script src="../plugins/bootstrap/bootstrap.min.js"></script>
<script src="../plugins/bootstrap/bootstrap-slider.js"></script>
<script src="../plugins/tether/js/tether.min.js"></script>
<script src="../plugins/raty/jquery.raty-fa.js"></script>
<script src="../plugins/slick/slick.min.js"></script>
<script src="../plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
<script src="../plugins/google-map/map.js" defer></script>

<script src="../js/script.js"></script>
<script src="../js/chat.js"></script>
</body>
</html>
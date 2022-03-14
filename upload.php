<?php

   session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOTA</title>
    <!-- rnder all elements normally -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- main template css file -->
    <link rel="stylesheet" href="css/upload.css">
</head>
<body>
<h1 class="message"> <?php print ($_SESSION['msg']); ?> </h1>
<div class="section">
      <div class="container">
            <div class="upload">
               <button class="back" onclick="window.location.href='index.php'"> Return to Home Page </button>    
            </div> 
      </div>
</div>
</body>
</html>
<?php
   session_start(); 
   if(isset($_FILES['uploaded_file'])){
      $_SESSION['msg'] = "";
      $_SESSION['file'] = '';
      $file_name = $_FILES['uploaded_file']['name'];
      $file_size =$_FILES['uploaded_file']['size'];
      $file_tmp =$_FILES['uploaded_file']['tmp_name'];
      $file_type=$_FILES['uploaded_file']['type'];
      $tmp = explode('.',$_FILES['uploaded_file']['name']);
      $file_ext=strtolower(end($tmp));
      
      $extensions= array("txt","hex");
      
      // errors during uploadimg file

      if(in_array($file_ext,$extensions)=== false){
         $_SESSION['msg']="extension not allowed, please choose a txt or hex file.";
         header("location: upload.php");
      }
      
     /* if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      } */
      
      if($_SESSION['msg']==""){
         if(move_uploaded_file($file_tmp,"uploads/".$file_name)){
             $_SESSION['file'] = "uploads/" . $file_name;
             $_SESSION['msg'] = "File was uploaded successefully";
             header("location: script.php?status=on");
         }
      }
   }
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
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- header starts -->
    <div class="parent">
        <div class="container">
            <h1>FOTA</h1>
        </div>
        <hr class="line">
        <hr class="line1">
    </div>
    <!-- header ends-->
    <div class="section">
        <div class="container1">
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
                <div class="parent-div">
                    <button class="btn-upload">Choose file</button>
                    <input type="file" name="uploaded_file" />
                </div>
                <div class="upload">
                    <input class="submit" type="submit" value="upload">    
                </div> 
            </form> 
        </div>
    </div>
</body>
</html>
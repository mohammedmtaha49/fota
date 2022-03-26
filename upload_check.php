<?php
   session_start(); 
   if ($_SERVER['REQUEST_METHOD'] == "POST")
   {
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

   }
   else
   {
       echo "error try again";
   }
?>
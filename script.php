<?php

    session_start();

    $file = fopen("uploads/status.txt", "w");
    
    if ($_GET['status'] == 'on')
    {
        $source = $_SESSION['file'];
        $target = "uploads/name.txt";

        if (copy($source, $target))
        {
            fwrite($file, "1");
            fclose($file);
            header("location: upload.php");
        }
        else
        {
            echo "error try again";
        }

    }
    else if ($_GET['status'] == 'off')
    {
        fwrite($file, "0");
        fclose($file);
    }

?>
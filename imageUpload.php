<?php  
  
session_start();  
require('db_config.php');  
  
if(isset($_POST) && !empty($_FILES['image']['name']) && !empty($_POST['title'])){  
    
    $name = $_FILES['image']['name'];  
    
    list($txt, $ext) = explode(".", $name);  
    $image_name = time().".".$ext;  
    $tmp = $_FILES['image']['tmp_name'];  
   
    if(move_uploaded_file($tmp, 'uploads/'.$image_name)){  
  
        $sql = "INSERT INTO image_gallery (title, image) VALUES ('".$_POST['title']."', '".$image_name."')";  
        $mysqli->query($sql); 
        echo '<script language="javascript">';
        echo 'alert("Uploading of image is successfully.")';
        echo '</script>';
        $_SESSION['success'] = 'Uploading of image is successfully.';  
        header("Location: https://".$_SERVER['HTTP_HOST']."/gallery.php");  
    }else{  
        echo '<script language="javascript">';
        echo 'alert("Uploading of image is failed")';
        echo '</script>';
        $_SESSION['error'] = 'Uploading of image is failed';  
        header("Location: https://".$_SERVER['HTTP_HOST']."/gallery.php");   
    }  
}else{  
    echo '<script language="javascript">';
    echo 'alert("Uploading of image is failed")';
    echo '</script>';
    $_SESSION['error'] = 'Please Select Image or Write title';  
    header("Location: https://".$_SERVER['HTTP_HOST']."/gallery.php"); 
}  
  
?>

<?php  
  
  session_start();  
  require('db_config.php');  

  if(isset($_POST) && !empty($_POST['id'])){  
    
          $sql = "DELETE FROM image_gallery WHERE id = ".$_POST['id'];  
          $mysqli->query($sql);  
    
          $_SESSION['success'] = 'Deletion of image is successfully.';  
          header("Location: https://".$_SERVER['HTTP_HOST']."/gallery.php");  
  }else{  
      $_SESSION['error'] = 'Please Select Image or Write title';  
      header("Location: https://".$_SERVER['HTTP_HOST']."/gallery.php");   
  }  
    
  ?>  
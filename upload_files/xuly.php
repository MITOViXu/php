<?php
  // Biến toàn cục chứa cả phương thức POST và GET
  if(!empty($_SERVER)){
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";
  }   

  $result = move_uploaded_file($_FILES['mtoan_upload']['tmp_name'], 'D:\Xampp\htdocs\php_methodical_learning\upload_files\uploads'.'\\'.$_FILES['mtoan_upload']['name'] );
  var_dump( $result );

?>
<!-- 
  Validate form Client: Thẻ HTML 5, JS.
  Validate form Server: php.
-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div style="width: 50%; display:inline-block;">
    <iframe width="100%" height="500px" src="https://www.youtube.com/embed/-OCVaPOl8uE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  </div>  
  <div style="display:inline-block; vertical-align: top; padding: 20px;">
    
<?php
  if(isset($_POST)){
    $errors = [];
    // Bắt lỗi fullname
    if(!isset($_POST["fullname"])){
      $errors["fullname"]["required"] = "Bắt buộc phải có họ tên";
    }
    else{
      if(strlen($_POST["fullname"]) < 5){
        $errors["fullname"]["min_length"] = "Họ tên phải lớn hơn hoặc bằng 5 ký tự";
      }
      
    }
    // Bắt lỗi email
    if(empty($_POST["email"])){
      $errors["email"]["required"] = "Bắt buộc phải điền Email";
    }
    else{
      if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
        $errors["email"]["validate"] = "Email không đúng định dạng";
      }
    }
    if(empty($errors)){
      echo "<p style='color: green; font-weight: bolder;'>Validate thành công và không có lỗi</p>";
    }
    else{
      echo "<p style='color: red;'>Có lỗi xảy ra</p>";
    }
  }
?>
<form action="" method="post">
  <p>Họ tên: 
    <input type="text" name="fullname" placeholder="Họ tên"> <br>
    <?php echo !empty($errors["fullname"]["required"]) ? "<p style='color: red;'>".$errors["fullname"]["required"]."</p> <br>" : ''  ?> 
    <?php echo !empty($errors["fullname"]["min_length"]) ? "<p style='color: red;'>".$errors["fullname"]["min_length"]."</p> <br>" : ''  ?> 
  </p>
  <p>Email: 
    <input type="text" name="email" placeholder="Email"> <br>
    <?php echo !empty($errors["email"]["required"]) ? "<p style='color: red;'>".$errors["email"]["required"]."</p> <br>" : ''  ?> 
    <?php echo !empty($errors["email"]["validate"]) ? "<p style='color: red;'>".$errors["email"]["validate"]."</p> <br>" : ''  ?> 
  </p>
  <input type="submit" value="Gửi" /> <br> <br>
</form>
  </div>
</body>
</html>



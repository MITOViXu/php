<img src="./assets/post.jpg" alt="" style="width: 40%; display: inline-block">
<div style="display:inline-block; vertical-align: top;">
  <!-- action chuyen huong  -->
  <form action="" method="post">
    <input type="text" name="fullname" placeholder="Họ tên"> <br> <br>
    <input type="text" name="email" placeholder="Email"> <br> <br>
    <input type="submit" value="Gửi" /> <br> <br>
  </form>
  <?php
    echo "<pre>";
    print_r($_POST);
    echo "</pre>"; 
    echo"<br>";
    echo"<br>";
    foreach($_POST as $key => $value) {
      echo"". $key .": ". $value ."<br>";
     }
    echo"<br>";
  ?>
</div>

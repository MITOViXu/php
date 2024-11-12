<div style="width: 50%; display:inline-block;">
<iframe width="100%" height="500px" src="https://www.youtube.com/watch?v=tPtTib70_vs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  <img src="./assets/cookie.jpg" alt="" style="width: 100%;">
  <img src="./assets/cookie_work.jpg" alt="" style="width: 100%;">
  <img src="./assets/cookie_setup.jpg" alt="" style="width: 100%;">
  <img src="./assets/cookie_delete.jpg" alt="" style="width: 100%;">
</div>
<div style="display:inline-block; vertical-align: top;">
  <?php
    // Set cookie
    if(empty($_COOKIE["user"]) || empty($_COOKIE["course"])){
      setcookie(
        // name
        "user",
        // value
        "mtoan", 
        // expire
        time() + 86400 , 
        // path
        "/", 
        // domain
        "", 
        // secure
        false,
        // httponly
        true
        
      );
      setcookie("course","Học lập trình php");
    }
    // Doc cookie
    if (isset($_COOKIE["user"]) && isset($_COOKIE["course"])) {
      echo "Cookie user: ".$_COOKIE["user"];
      echo "<br>";
      echo "Cookie course: ".$_COOKIE["course"];
    }
    if(isset($_COOKIE)){
      setcookie(
        // name
        "user",
        // value
        "mtoan", 
        // expire
        time() - 60 , 
        // path
        "/", 
        // domain
        "", 
        // secure
        false,
        // httponly
        true
        
      );
    }
  ?>
</div>

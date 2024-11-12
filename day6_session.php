<div style="width: 50%; display:inline-block;">
  <iframe width="100%" height="500px" src="https://www.youtube.com/embed/p-84Foa2GAg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  <img src="./assets/session.jpg" alt="" style="width: 100%;">
  <img src="./assets/session_work.jpg" alt="" style="width: 100%;">
  <img src="./assets/session_initial.jpg" alt="" style="width: 100%;">
  <img src="./assets/session_path.jpg" alt="" style="width: 100%;">
</div>
<div style="display:inline-block; vertical-align: top;">
  <?php 
    session_start();
    // Khởi tạo session
    $_SESSION['username'] = 'mtoan';
    $_SESSION['user'] = 'Wordpress';
    
    echo'<pre>';
    print_r( $_SESSION['username']);
    echo'</pre>';
    
    echo'<pre>';
    print_r( $_SESSION['user']);
    echo'</pre>';
    echo '<br>';
    echo'Sau khi chỉnh sửa';
    $_SESSION['username'] = 'mtoansecond';
    echo'<pre>';
    print_r( $_SESSION['username']);
    echo'</pre>';

    // Xóa 1 session
    unset($_SESSION['username']);
    
    // Xóa nhiều session
    session_destroy(); 

  ?>  
</div>

<?php 
  // echo "<pre>";
  // print_r($_GET);
  // echo "</pre>";
  echo isset($_GET["action"]) ? "<br> action: ".$_GET["action"]." <br> <br>" : "";
  foreach ($_GET as $key => $value) {
    echo "Key: " . htmlspecialchars($key) . " | Value: " . htmlspecialchars($value) . "<br>";
  }
?>
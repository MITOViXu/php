<?php
    require_once "connect.php";
    $sql = "select * from sinhvien";
    try {
        $statement = $con -> prepare($sql);
        $statement -> execute();
        $data = $statement -> fetchAll(PDO::FETCH_ASSOC);
        echo"<pre>";
        print_r($data) ;
        echo"<pre>";
    }
    catch (Exception $e) {
        echo "<div style='color: red;'>";
        echo "<br>". $e->getMessage() ."<br>";
        echo "<br>File: ". $e->getFile() ."<br>";
        echo "<br>Line: ". $e->getLine() ."<br>";
        echo "</div>";
    }


?>
<?php
    require_once "connect.php";
    $sql = "delete from sinhvien where id = ? ";
    try {
        $statement = $con->prepare($sql);
        // $statement -> bindParam(':fullname', $fullname);
        // $statement -> bindParam(':age', $age);
        // $statement -> bindParam(':id_subject', $id_subject);
        $id = 7;
        $data = [$id];
        $deleteStatus = $statement -> execute($data);
        // var_dump($insertStatus);
        if($deleteStatus) echo"<br> <h4 style='color: green;'>Delete thành công</h4>";
    }
    catch (Exception $e) {
        echo "<div style='color: red;'>";
        echo "<br>". $e->getMessage() ."<br>";
        echo "<br>File: ". $e->getFile() ."<br>";
        echo "<br>Line: ". $e->getLine() ."<br>";
        echo "</div>";
    }


?>
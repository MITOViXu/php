<?php
    require_once "connect.php";
    $sql = "UPDATE sinhvien set fullname = :fullname, age = :age where id = 7 ";
    try {
        $statement = $con->prepare($sql);

        $fullname = "Minh Thuận";
        $age = 15;

        // $statement -> bindParam(':fullname', $fullname);
        // $statement -> bindParam(':age', $age);
        // $statement -> bindParam(':id_subject', $id_subject);
        $data = [
            "fullname" => $fullname,
            "age" => $age,
        ];
        $insertStatus = $statement -> execute($data);
        // var_dump($insertStatus);
        if($insertStatus) echo"<br> <h4 style='color: green;'>Update thành công</h4>";
    }
    catch (Exception $e) {
        echo "<div style='color: red;'>";
        echo "<br>". $e->getMessage() ."<br>";
        echo "<br>File: ". $e->getFile() ."<br>";
        echo "<br>Line: ". $e->getLine() ."<br>";
        echo "</div>";
    }


?>
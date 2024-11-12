<?php
    require_once "connect.php";
    $sql = "INSERT InTO sinhvien(fullname, age, id_subject) values (:fullname, :age, :id_subject)";
    try {
        $statement = $con->prepare($sql);

        $fullname = "Thuận";
        $age = 15;
        $id_subject = 2;

        // $statement -> bindParam(':fullname', $fullname);
        // $statement -> bindParam(':age', $age);
        // $statement -> bindParam(':id_subject', $id_subject);
        $data = [
            "fullname" => $fullname,
            "age" => $age,
            "id_subject" => $id_subject
        ];
        $insertStatus = $statement -> execute($data);
        var_dump($insertStatus);
    }
    catch (Exception $e) {
        echo "<div style='color: red;'>";
        echo "<br>". $e->getMessage() ."<br>";
        echo "<br>File: ". $e->getFile() ."<br>";
        echo "<br>Line: ". $e->getLine() ."<br>";
        echo "</div>";
    }


?>
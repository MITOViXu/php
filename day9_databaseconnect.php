<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <div style="width: 48%; display:inline-block; text-align: center;">
            <h4>Database connect</h4>
            <iframe width="100%" height="500px" src="https://www.youtube.com/embed/WdlKojbG1Xo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <img src="./assets/class_object.png" alt="" style="width: 100%;">
        </div>
        <div style="display:inline-block; padding:0; vertical-align: top; width:50%;">
            <?php 
                // Thong tin ket noi   
                const _HOST = 'localhost';               
                const _DB = 'mtoan_123';           
                const _USER = 'root';
                const _PASS = '';       
                try {
                    if(class_exists('PDO')) {
                        $dsn = 'mysql:dbname='._DB.';'._HOST;
                        $con = new PDO($dsn, _USER, _PASS);
                        echo'Nếu kết nối thành công sẽ hiện ra: object(PDO)#1 (0) { } <br><br>';
                        echo"<h4 style='color: green; font-weight: bold; margin-left: 20px;'> Success: ";
                        var_dump( $con );
                        echo'<h4>';
                    }
                }
                catch (Exception $e) {
                    echo '<div style="color: red; padding: 5px 15px; border: 1px solid red; white-space: pre-wrap; word-wrap: break-word; overflow-wrap: break-word;">';
                    echo $e;
                    echo '</div>';
                    die();
                }
            ?>  
            <h4>Source</h4>
            <p style="border: 1px solid black; padding: 10px 20px; width:100%;">
                &lt;?php <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;// Thong tin ket noi<br>  
                    &nbsp;&nbsp;&nbsp;&nbsp;const _HOST = 'localhost';<br>               
                    &nbsp;&nbsp;&nbsp;&nbsp;const _DB = 'mtoan_123';<br>           
                    &nbsp;&nbsp;&nbsp;&nbsp;const _USER = 'root';<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;const _PASS = '';<br>       
                    &nbsp;&nbsp;&nbsp;&nbsp;try {<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(class_exists('PDO')) {<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// $con = new PDO();<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// echo'Nếu kết nối thành công sẽ hiện ra: object(PDO)#1 (0) { } &lt;br&gt; ';<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// var_dump( $con );<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;catch (Exception $e) {<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "Có lỗi";<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                ?&gt;
            </p>
        </div>
    </div>
    
</body>
</html>


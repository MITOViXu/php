<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <div style="width: 50%; display:inline-block; text-align: center;">
            <h4>Class và Object</h4>
            <iframe width="100%" height="500px" src="https://www.youtube.com/embed/LNGTKog4jS0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <img src="./assets/class_object.png" alt="" style="width: 100%;">
        </div>
        <div style="display:inline-block; vertical-align: top;">
            <?php 
                class MyClass {
                    public function show (){
                        echo "<div style='padding: 20px 50px;'>";
                        echo "<h4 style='color: darkblue; font-weight:bold'>Đây là hàm trong class</h4>";
                        echo "</div>";
                    }
                }
                $bien = new MyClass();
                $bien->show();
            ?>  
        </div>
    </div>
    <hr>
    <div>
        <div style="width: 50%; display:inline-block; text-align: center;">
            <h4>Class và Object</h4>
            <iframe width="100%" height="500px" src="https://www.youtube.com/embed/bybXZDiaquE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        <div style="display:inline-block; vertical-align: top;">
            <?php 
                try {
                    $bien->show2();
                }
                catch (Error $e) {
                    echo "<h4 style='display: inline-block;'>". $e->getMessage() ."</h4><br>";
                }
                echo"Có lỗi nhưng vẫn chạy bình thường";
            ?>  
        </div>
    </div>
</body>
</html>


<!-- Các hàm xử lý liên quan đến CSDL -->
<?php
require_once "connect.php";

// Kiểm tra hằng số có tồn tại hay không 
// Nếu truy cập thẳng bằng http://localhost/php/Practice/manager_users/modules/auth/register.php sẽ bị access denied...
// Nếu chèn vào từ  
if(!defined('_CODE')) die('Access denied...');

function querry($sql, $data=[], $check=false)
{
    global $con;
    $ketqua = false;
    try {
        if($con){
            $statement = $con->prepare($sql);
    
            if(!empty($data)){
                $ketqua = $statement -> execute($data);
            }
            
            else{
                $ketqua = $statement -> execute();
            }
            // var_dump($ketqua);
        }else{echo'NULL';}
        
    }
    catch (Exception $e) {
        echo "<div style='color: red;'>";
        echo "<br>". $e->getMessage() ."<br>";
        echo "<br>File: ". $e->getFile() ."<br>";
        echo "<br>Line: ". $e->getLine() ."<br>";
        echo "</div>";
        die();
    }

    if($check) return $statement;

    return $ketqua;
}

function insert($table, $data)
{
    // Lấy mảng index key
    $key = array_keys($data);
    // Nối các mảng lại với nhau cách nhau bởi dấu ,
    $truong = implode(',', $key);
    $valuetb = ':'.implode(',:', $key);

    //  the command is: INSERT INTO users(fullname, email, phone) VAUES (:fullname ,:email ,:phone )

    $sql = 'INSERT INTO '.$table.'('.$truong.')'.'VALUES('.$valuetb.')';

    $kq = querry($sql, $data);
    return $kq;
}

// Hàm update   
function update($table, $data, $condition='')
{
    $update = '';

    foreach($data  as $key => $value){
        $update .= ''.$key.'= :'.$key.',';
    }

    // Xóa dấu phẩy ở cuối cùng đi
    // Nếu không xóa sẽ thừa dấu phẩy như bên dưới
    // UPDATE sinhvien set fullname = :fullname, age = :age, where id = 7
    $update = trim($update,',');
    // Nếu có điểu kiện sẽ là : UPDATE sinhvien set fullname = :fullname, age = :age where id = 7
    if(!empty($condition)) $sql = "UPDATE ". $table." SET ".$update." WHERE ".$condition;
    // Nếu KHÔNG có điểu kiện sẽ là : UPDATE sinhvien set fullname = :fullname, age = :age
    else $sql = "UPDATE ". $table." SET ".$update;
    // Gọi hàm query ở trên
    // Vô được hàm query rồi thì kết quả là
    // $statement = $con->prepare($sql);
    // Tương đương $statement = $con->prepare(UPDATE sinhvien set fullname = :fullname, age = :age);
    // Sau đó: $ketqua = $statement -> execute($data);
    // Tương đương: $ketqua = $statement -> execute([
    //                                                  'fullname'=> 'PNhung',
    //                                                  'email'=> 'nhung@gmail.com',
    //                                                  'phone'=> '0123456787',
    //                                              ];);
    $kq = querry($sql, $data);

    return $kq;
}

function delete($table, $condition= '')
{
    
    if(empty($condition)) $sql="DELETE FROM ".$table;
    
    else $sql="DELETE FROM ".$table." WHERE ".$condition;

    $kq = querry($sql);

    return $kq;
}

// Lấy nhiều dòng dữ liệu
function getRaw($sql){

    // Nếu là true thì sẽ trả về data dữ liệu query được
    $kq = querry($sql, '', true);
    
    if(is_object($kq)) $dataFetch = $kq -> fetchAll(PDO::FETCH_ASSOC);
    
    return $dataFetch;
}

// Lấy 1 dòng dữ liệu
function oneRaw($sql){

    // Nếu là true thì sẽ trả về data dữ liệu query được
    $kq = querry($sql, '', true);

    if(is_object($kq)) $dataFetch = $kq -> fetch(PDO::FETCH_ASSOC);
    
    return $dataFetch;
}

// Đếm số dòng dữ liệu
function getRow($sql){

    // Nếu là true thì sẽ trả về data dữ liệu query được
    $kq = querry($sql, '', true);

    if(!empty($kq)) return $kq -> rowCount();
}

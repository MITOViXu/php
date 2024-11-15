<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .responsive-div {
            display: inline-block;
            vertical-align: top;
            padding: 0;
        }
        .left-div {
            width: 48%;
        }
        .right-div {
            width: 50%;
        }
        .display-horizon{
            display: none;
        }
        .display-title{
            display: none;
        }
        @media (max-width: 768px) {
            .responsive-div{
                width: 100%;
                display: block;
                text-align: left;
            }
            .display-horizon{
                display: block;
                border: 1px solid grey;
                margin: 50px 0;
            }
            .display-title{
                display: inline-block;
                margin: 10px 0px 10px 200px;
                border: 1px solid black;
                padding: 10px 50px;
            }
        }
    </style>
</head>
<body>
    <!-- CHAPTER 1 -->
    <div>
        <div class="responsive-div left-div" style=" text-align: center;">
        <h4>Cách triển khai</h4>
        <iframe width="100%" height="500px" src="https://www.youtube.com/embed/Zm4pvYh0M1c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <h4>Router</h4>
        <iframe width="100%" height="500px" src="https://www.youtube.com/embed/LRy7wxFFyHU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <h4>Router part 2</h4>
        <iframe width="100%" height="500px" src="https://www.youtube.com/embed/sw6hq4El0xE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <h4>Bootstrap</h4>
        <iframe width="100%" height="500px" src="https://www.youtube.com/embed/Y-oNEVT8EH0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <h4>Bootstrap 2 </h4>
        <iframe width="100%" height="500px" src="https://www.youtube.com/embed/gGZhsZefW9I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <h4>Xây dựng giao diện Login bằng Bootstrap </h4>
        <iframe width="100%" height="500px" src="https://www.youtube.com/embed/vpSjXSzGreU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <h4>Xây dựng giao diện Register bằng Bootstrap</h4>
        <iframe width="100%" height="500px" src="https://www.youtube.com/embed/cqGfDlxVyRs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        
        </div>
        <hr class="display-horizon">
        <h3 class="display-title">
            Introduction side
        </h3>
        <div class="responsive-div right-div" style=" padding:0; vertical-align: top;">
            <h1>Thực hành xây dựng chức năng quản lí người dùng</h1>
            <img src="" alt="">
            <h2>Phần 1: Xác thực truy cập - User</h2>
            <ul>
                <li>Đăng nhập</li>
                <li>Đăng ký</li>
                <li>Đăng xuất</li>
                <li>Quên mật khẩu</li>
                <li>Kích hoạt tài khoản</li>
            </ul>
            <h2>Phần 2: Quản lí người dùng - Admin</h2>
            <ul>
                <li>Kiểm tra người dùng đăng nhập</li>
                <li>Thêm người dùng</li>
                <li>Sửa và xóa người dùng</li>
                <li>Hiển thị số users</li>
                <li>Phân trang</li>
                <li>Tìm kiếm, lọc dữ liệu</li>
            </ul>

            <h2>Thiết kế database:</h2>
            <ul>
                <li style="font-weight: bold;">Bảng user</li>
                <ul>
                    <li>id - primary key (int)</li>
                    <li>fullname (varchar (100))</li>
                    <li>email (varchar (100))</li>
                    <li>phone (varchar (20))</li>
                    <li>password (varchar (50))</li>
                    <li>forgotToken (varchar (100))</li>
                    <li>activeToken (varchar (100))</li>
                    <li>create_at (datetime)</li>
                    <li>update_at (datetime)</li>
                </ul>
                <br>
                <li style="font-weight: bold;">Bảng loginToken</li>
                <ul>
                    <li>id - primary key (int)</li>
                    <li>user_Id (int)</li>
                    <li>token varchar(100)</li>
                    <li>create_at (datetime)</li>
                </ul>
            </ul>
        </div>
    </div>
    
    <hr>

    <!-- CHAPTER 2 -->
    <div>
        <div class="responsive-div left-div" style=" text-align: center;">
            <h4>Cách triển khai</h4>
            <h4>Viết hàm thao tác với Database Phần 1 (Insert)</h4>
            <iframe width="100%" height="500px" src="https://www.youtube.com/embed/8g46bwPMpkQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <h4>Viết hàm thao tác với Database Phần 2 (Update)</h4>
            <iframe width="100%" height="500px" src="https://www.youtube.com/embed/GbA3Eyo4V4I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <h4>Viết hàm thao tác với Database Phần 3 (Delete & Select)</h4>
            <iframe width="100%" height="500px" src="https://www.youtube.com/embed/HAFY5DL3aM0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        <hr class="display-horizon">
        <h3 class="display-title">
            Instruction side
        </h3>
        <div class="responsive-div right-div" style=" padding:0; vertical-align: top;">
            <h1>CRUD</h1>
            <h4>Ở phần này chúng ta tập trung vào việc xây dựng luồng xử lý create read update delete tương tác với database, chưa động đến phần xử lý kết hợp giao diện </h4>
        </div>
    </div>

    <hr>

    <!-- CHAPTER 3 -->
    <div>
        <div class="responsive-div left-div" style=" text-align: center;">
            <h4>Cách triển khai</h4>
            <h4>Viết các hàm xử lý Session</h4>
            <iframe width="100%" height="500px" src="https://www.youtube.com/embed/Pg4M6kUB5oE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        <hr class="display-horizon">
        <h3 class="display-title">
            Instruction side
        </h3>
        <div class="responsive-div right-div" style=" padding:0; vertical-align: top;">
            <h1>SESSION</h1>
            <h4>Ở phần này chúng ta tập trung vào việc xây dựng Session cho trang web, xử dụng trong việc ghi nhớ người dùng đăng nhập, Shopping cart, form data, flash message</h4>
        </div>
    </div>
    
    <!-- CHAPTER 4 -->
    <div>
        <div class="responsive-div left-div" style=" text-align: center;">
            <h4>Cách triển khai</h4>
            <h4>Xây dựng hàm gửi mail trong PHP</h4>
            <iframe width="100%" height="500px" src="https://www.youtube.com/embed/mf95wFS89tQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <h4>Clone source <a href="https://github.com/PHPMailer/PHPMailer" target="_blank">code</a>.</h3>
        </div>
        <hr class="display-horizon">
        <h3 class="display-title">
            Instruction side
        </h3>
        <div class="responsive-div right-div" style=" padding:0; vertical-align: top;">
            <h1>Mailer</h1>
            <h4>Do các trinh duyệt web đã chặn gửi mail nên ta dùng source code như hướng dẫn.</h4>
        </div>
    </div>
</body>
</html>



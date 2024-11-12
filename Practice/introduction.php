<h1>Thực hành xây dựng chức năng quản lí người dùng</h1>
<h2>Phần 1: Xác thực truy cập</h2>
<ul>
    <li>Đăng nhập</li>
    <li>Đăng ký</li>
    <li>Đăng xuất</li>
    <li>Quên mật khẩu</li>
    <li>Kích hoạt tài khoản</li>
</ul>
<h2>Phần 2: Quản lí người dùng</h2>
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
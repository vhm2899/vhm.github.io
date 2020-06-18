<?php
include("db_connect.php");
if (isset($_POST["submitdn"])) {
    // lấy thông tin người dùng
    $username = $_POST["name"];
    $password = $_POST["password"];
    if ($username == "" || $password =="") {
        echo "username hoặc password bạn không được để trống!";
        
    }else{
        $sql = "select * from users where name = '$username' and pass = '$password' ";
        $query = mysqli_query($connection,$sql);
        $num_rows = mysqli_num_rows($query);
        if ($num_rows==0) {
            
            echo "Tên đăng nhập hoặc mật khẩu không đúng !";			
        }else{
            
            echo "CHÚC MỪNG BẠN ĐÃ ĐĂNG NHẬP THÀNH CÔNG";
         
        }
}
}
if(isset($_POST['submitdk'])){
    $name=mysqli_real_escape_string($connection,$_POST['name']);
    $password=mysqli_real_escape_string($connection,$_POST['password']);
    $sql="INSERT INTO users(name,pass) VALUES(
    '$name','$password')";
    $query=mysqli_query($connection,$sql);
    
    if ($connection->query($sql) === true) {
        echo "Thêm dữ liệu thành công";
    }
    }
    if(isset($_POST['timkiem'])){
        $search=$_POST['search'];
        $sql="SELECT * from users where ID='$search'";
         echo $sql;
         
        $query=mysqli_query($connection,$sql);
        
       
       if ($query) {
        // Hàm `mysql_fetch_row()` sẽ chỉ fetch dữ liệu một record mỗi lần được gọi
        // do đó cần sử dụng vòng lặp While để lặp qua toàn bộ dữ liệu trên bảng posts
        while ($row=mysqli_fetch_row($query)) {
            printf ("<br>Id: %s, Name: %s, Pass: %s<br>",$row[0],$row[1], $row[2]);
        }
    
        // Máy tính sẽ lưu kết quả từ việc truy vấn dữ liệu bảng
        // Do đó chúng ta nên giải phóng bộ nhớ sau khi hoàn tất đọc dữ liệu
        mysqli_free_result($query);
    }
        if ($connection->query($sql) === true) {
            echo "Thêm dữ liệu thành công";
        }
        }


?>
<?php $connection->close(); ?>
<a href="formLogin.php">Quay lại</a>
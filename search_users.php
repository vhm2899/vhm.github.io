<?php

include("db_connect.php"); // xem "db_connect.php" ở dưới
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
</head>
<body>
    <fieldset>
    <h1>Search</h1> 
    <form action="search_users.php" method="POST">
        <input type="text" name="search"></input>
        <button type="submit" name="timkiem">Search</button>
    </form>
    </fieldset>
    
</body>
</html>

<?php
if(isset($_POST['timkiem'])){
    $search=$_POST['search'];
    $sql="SELECT * from users where ID='$search'";
  // $sql = "SELECT * FROM tbl_user WHERE username='". $_POST['username'] . "' AND password = '" .$_POST['password'] ."'";
     echo $sql;
     
    $query=mysqli_query($connection,$sql);
    //echo $query;

    if ($query) {
       
    // Hàm `mysql_fetch_row()` sẽ chỉ fetch dữ liệu một record mỗi lần được gọi
//     // do đó cần sử dụng vòng lặp While để lặp qua toàn bộ dữ liệu trên bảng posts
    while ($row=mysqli_fetch_row($query)) {
        printf ("<br>Id: %s, Name: %s, Pass: %s<br>",$row[0],$row[1], $row[2]);
    }

//     // Máy tính sẽ lưu kết quả từ việc truy vấn dữ liệu bảng
//     // Do đó chúng ta nên giải phóng bộ nhớ sau khi hoàn tất đọc dữ liệu
   mysqli_free_result($query);

    if ($connection->query($sql) === true) {
        echo "Thêm dữ liệu thành công";
    }
     }
}
?>

<a href="/">Quay lại</a>

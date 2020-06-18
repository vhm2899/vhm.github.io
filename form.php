





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello Hồng</h1>
    <form action="" method="get">
        <label>Tài khoản</label>
        <br/>
        <input type="text" name="name"/>
        <br/>
        <label>Pass</label>
        <br/>
        <input type="password" name="password"/>
        <br/>
        <br/>
        
        <button type="submit" name='submit'>Gửi</button>
    </form>
    <?php
        include("db_connect.php");
        if(isset($_POST['submit'])){
        $name=mysqli_real_escape_string($connection,$_POST['name']);
        $password=mysqli_real_escape_string($connection,$_POST['password']);
        $sql="INSERT INTO information(name,pass) VALUES(
        '$name','$password')";
        $query=mysqli_query($connection,$sql);
        echo $sql;
        if ($connection->query($sql) === TRUE) {
            echo "Thêm dữ liệu thành công";
        
        }
    }
    if(isset($_POST['submit'])){
        $name=mysqli_real_escape_string($connection,$_POST['name']);
        $password=mysqli_real_escape_string($connection,$_POST['password']);
        $sql="INSERT INTO information(name,pass) VALUES(
        '$name','$password')";
        $query=mysqli_query($connection,$sql);
        echo $sql;
        if ($connection->query($sql) === TRUE) {
            echo "Thêm dữ liệu thành công";
        
        }
    }
    ?>
    
</body>
</html>
<!-- <?php if (isset($_POST["timkiem"])): ?>
    <div style="color: brown;">Tên người dùng không được trống!</div>
    <div>Vui lòng nhập tên người dùng.</div>
    <?php else: ?>
    <?php
    $id = $_POST["search"];
    $sql = "SELECT * FROM information WHERE id = 'id'";
    $result = $connection->query($sql);
    ?>

    <?php if ($result->num_rows > 0): ?>
        <table border=1>
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Username</td>
                    <td>Pass</td>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_object()): ?>
                    <tr>
                        <td><?= $row->id; ?></td>
                        <td><?= $row->username; ?></td>
                        <td><?= $row->password; ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    <?php else: ?>
       <div style="color: brown">Không tìm thấy người dùng với tên đăng nhập tìm kiếm</div>
    <?php endif; ?>
<?php endif; ?> -->
<?php $connection->close(); ?>
<a href="/">Quay lại</a>
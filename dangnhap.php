<?php
session_start();
include("db_connect.php");
	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
	if (isset($_POST["btn_submit"])) {
		// lấy thông tin người dùng
		$username = $_POST["username"];
		$password = $_POST["password"];
		//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
		//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
		//$username = strip_tags($username);
	//	$username = addslashes($username);
///$password = strip_tags($password);
	//	$password = addslashes($password);
		if ($username == "" || $password =="") {
			
            header('Location: header.php');
            echo "username hoặc password bạn không được để trống!";
		}else{
			
			$sql = "select * from users where name = '$username' and pass = '$password' ";
			$query = mysqli_query($connection,$sql);
			$num_rows = mysqli_num_rows($query);
			if ($num_rows==0) {
				header('Location: header.php');
				echo "Tên đăng nhập hoặc mật khẩu không đúng !";			
			}else{
				//tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $username;
				echo "CHÚC MỪNG BẠN ĐÃ ĐĂNG NHẬP THÀNH CÔNG";
				//header('Location: https://btln2atbm.000webhostapp.com/dangnhap.php',true,301);
				
				
				//die();
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
              // header('Location: https://minh9982.000webhostapp.com/login.php');
			}
		}
	}
?>
<?php
    include '../Connect.php';

    $response = array();

		if(isset($_POST["register"])){
			$Username = $_POST["Username"]? $_POST['Username']: '';
			$Password = $_POST["Password"]? $_POST['Password']: '';
			$Password2 = $_POST["Password2"]? $_POST['Password2']: '';
			//kiểm tra xem 2 mật khẩu có giống nhau hay không:
			if($Password != $Password2){
				//setcookie("error", "Đăng ký không thành công!", time()+1, "/","", 0);
                $response['message'] = "error";
                $response['message'] = "Đăng ký không thành công!";
			}
			else{
				$Password = md5($Password);
                $sql = "INSERT INTO 'login' (Username, 'Password') VALUES ('$Username', '$Password')";
            //    $data = mysqli_query($conn, $sql);

				//setcookie("success", "Đăng ký thành công!", time()+1, "/","", 0);
                $response['message'] = "success";
                $response['message'] = "Đăng ký thành công!";
			}
		}

        echo json_encode($response);
	?>
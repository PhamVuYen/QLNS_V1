<?php 

    include '../Connect.php';

    $response = array();

		if(isset($_POST["dangnhap"])){
			$Usename = $_POST["Usename"]? $_POST['Usename']: '';
			$Password = $_POST["Password"]? $_POST['Password']: '';

            $sql = "SELECT * from 'login' where Usename = '$Usename' and 'Password' = '$Password' ";
			$data = mysqli_query($conn, $sql);
			if($data==1){
				$_SESSION["loged"] = true;
				//setcookie("success", "Đăng nhập thành công!", time()+1, "/","", 0);
                $response['message'] = "success";
                $response['message'] = "Đăng nhập thành công!";
			}
			else{
				//setcookie("error", "Đăng nhập không thành công!", time()+1, "/","", 0);
                $response['message'] = "error";
                $response['message'] = "Đăng nhập không thành công!";
			}
			}
			
		
        echo json_encode($response);
	?>
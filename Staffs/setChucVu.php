<?php
    include 'Connect.php';

    $response = array();
   
    if($_SERVER['REQUEST_METHOD']=='POST'){
      $MaPB = isset($_POST['MaPB']) ? $_POST['MaPB']: '';

         $query = "UPDATE nhanvien SET ChucVu = 'Nhân viên' WHERE MaPB = '$MaPB' ";
            if($conn->query($query) == TRUE){
                 $response['message'] = "done";
            }else{
                $response['message'] = "error";
            }
     }else{
        $response['error'] = true;
        $response['message'] = "Invalid Request"; 
     }

     echo json_encode($response);
?>
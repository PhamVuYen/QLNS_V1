<?php
    include 'Connect.php';

    $response = array();
   
    if($_SERVER['REQUEST_METHOD']=='POST'){
         $query = "UPDATE nhanvien SET ChucVu = 'Nhân viên'  ";
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
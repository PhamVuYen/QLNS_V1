<?php
    include 'Connect.php';

    $response = array();
   
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $ChucVu = isset($_POST['ChucVu']) ? $_POST['ChucVu']: '';
        $MaNV = isset($_POST['MaNV']) ? $_POST['MaNV']: '';
       
        
        if(isset($_POST['MaNV']) && isset($_POST['ChucVu']) ){

            $query = "UPDATE nhanvien SET ChucVu = '$ChucVu' WHERE MaNV = '$MaNV' ";
            if($conn->query($query) == TRUE){
                 $response['message'] = "done";
            }else{
                $response['message'] = "error";
            }
        
        }else{
            $response['error'] = true;
            $response['message'] = "Required fields are missing";
        }

     }else{
        $response['error'] = true;
        $response['message'] = "Invalid Request"; 
     }

     echo json_encode($response);
?>
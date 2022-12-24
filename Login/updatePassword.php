<?php

include '../Connect.php';
include '../Staffs/Staff.php';

$response = array();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $MaNV = isset($_POST['MaNV']) ? $_POST['MaNV'] : '';
        $Password = isset($_POST['Password']) ? $_POST['Password'] : '';

        if(isset($_POST['MaNV']) && isset($_POST['Password'])){
            $sql = "UPDATE nhanvien SET Password = '$Password' WHERE MaNV = '$MaNV' ";

            if($conn->query($sql) == TRUE){
            $response['message'] = 'done';
            }else{
                $response['message'] = 'error';

            }
        }
     
    }
echo json_encode($response);

?>

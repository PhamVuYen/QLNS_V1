<?php
    include '../Connect.php';
    include 'Department.php';

    $response = array();
   
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $MaNV = isset($_POST['MaPB']) ? $_POST['MaNV']: '';
        
        if(isset($_POST['MaPB'])){

            $query = "DELETE FROM phongban WHERE MaPB = '$MaNV' ";
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
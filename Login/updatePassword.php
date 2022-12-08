<?php
    include '../Connect.php';
    
    $response = array();
   
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $Password = isset($_POST['Password']) ? $_POST['Password']: '';
        $MaNV = isset($_POST['MaNV']) ? $_POST['MaNV']: '';
       
        
        if(isset($_POST['MaNV']) && isset($_POST['Password']) ){

            $query = "UPDATE nhanvien SET Password = '$Password' WHERE MaNV = '$MaNV' ";
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

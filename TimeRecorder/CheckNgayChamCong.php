<?php
    include '../Connect.php';

    $response = array();
   
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $MaNV = isset($_POST['MaNV']) ? $_POST['MaNV']: '';
        $GioDen = isset($_POST['GioDen']) ? $_POST['GioDen']: '';
        $Ngay = isset($_POST['Ngay']) ? $_POST['Ngay']: '';

        if(isset($_POST['MaNV']) && isset($_POST['GioDen']) && isset($_POST['Ngay'])  ){

            $query = "SELECT GioDen WHERE MaNV = '$MaNV' AND Ngay = '$Ngay' ";
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
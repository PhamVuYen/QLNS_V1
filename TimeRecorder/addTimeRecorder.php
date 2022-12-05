<?php
    include '../Connect.php';
    include 'Time_Recorder.php';

    $response = array();
   
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $MaNV = isset($_POST['MaNV']) ? $_POST['MaNV']: '';
        $MaCViec = isset($_POST['NgayCong']) ? $_POST['NgayCong']: '';
        $TenCViec = isset($_POST['NgayDiMuon']) ? $_POST['NgayDiMuon']: '';
        
        if(isset($_POST['MaNV']) && isset($_POST['NgayCong']) && isset($_POST['NgayDiMuon']) ){

            $query = "INSERT INTO bangchamcong (MaNV, NgayCong, NgayDiMuon) 
                        VALUES ('$MaNV', '$NgayCong', '$NgayDiMuon')";
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
<?php
    include '../Connect.php';
    include 'Time_Recorder.php';

    $response = array();
   
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $MaNV = isset($_POST['MaNV']) ? $_POST['MaNV']: '';
        $MaCViec = isset($_POST['NgayCong']) ? $_POST['NgayCong']: '';
        $TenCViec = isset($_POST['NgayDiMuon']) ? $_POST['NgayDiMuon']: '';
        $Thang = isset($_POST['Thang']) ? $_POST['Thang']: '';

        if(isset($_POST['MaNV']) && isset($_POST['NgayCong']) && isset($_POST['NgayDiMuon']) && isset($_POST['Thang'])  ){

            $query = "INSERT INTO bangchamcong (MaNV, NgayCong, NgayDiMuon, Thang) 
                        VALUES ('$MaNV', '$NgayCong', '$NgayDiMuon', '$Thang')";
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
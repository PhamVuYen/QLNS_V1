<?php
    include '../Connect.php';
    include 'Time_Recorder.php';

    $response = array();
    $query = "SELECT * FROM bangchamcong";
    $data = mysqli_query($conn, $query);

       while ($row = mysqli_fetch_assoc($data)){
        array_push($response, new TimeRecorder(
            $row['MaNV'], 
            $row['NgayCong'], 
            $row['NgayDiMuon'], 
            $row['Thang']
        ));
       }
    echo json_encode($response);
?>
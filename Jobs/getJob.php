<?php
    include '../Connect.php';
    include 'Job.php';

    $response = array();
    $query = "SELECT * FROM congviec";
    $data = mysqli_query($conn, $query);

       while ($row = mysqli_fetch_assoc($data)){
        array_push($response, new CongViec(
            $row['MaNV'], 
            $row['MaCViec'], 
            $row['TenCViec'], 
            $row['DealineCV'], 
            $row['CreateBy'], 
            $row['CreateDate'], 
            $row['AsignedTo']
        ));
       }
    echo json_encode($response);
?>
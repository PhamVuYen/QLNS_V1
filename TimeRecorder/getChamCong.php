<?php
    include '../Connect.php';

    $response = array();
    $query = "SELECT * FROM bangchamcongngay";
    $data = mysqli_query($conn, $query);

       while ($row = mysqli_fetch_assoc($data)){
        array_push($response, new TimeRecorder(
            $row['MaNV'], 
            $row['GioDen'], 
            $row['GioVe'], 
            $row['Thang']
        ));
       }

    class TimeRecorder{
        public $MaNV;
        public $GioDen;
        public $GioVe;
        public $Thang;
        function __construct($MaNV, $GioDen, $GioVe, $Thang)
        {
            $this->MaNV = $MaNV;
            $this->GioDen = $GioDen;
            $this->GioVe = $GioVe;
            $this->Thang = $Thang;
        }
    }
    echo json_encode($response);
?>
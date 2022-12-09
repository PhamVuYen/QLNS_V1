<?php
    class TimeRecorder{
        public $MaNV;
        public $NgayCong;
        public $NgayDiMuon;
        public $Thang;
        function __construct($MaNV, $NgayCong, $NgayDiMuon, $Thang)
        {
            $this->MaNV = $MaNV;
            $this->NgayCong = $NgayCong;
            $this->NgayDiMuon = $NgayDiMuon;
            $this->Thang = $Thang;
        }
    }
?>
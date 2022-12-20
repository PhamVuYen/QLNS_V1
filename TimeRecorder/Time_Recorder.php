<?php
    class TimeRecorder{
        public $MaNV;
        public $NgayCong;
        public $NgayDiMuon;
        public $PhutDiMuon;

        public $Thang;
        function __construct($MaNV, $NgayCong, $NgayDiMuon,$PhutDiMuon, $Thang)
        {
            $this->MaNV = $MaNV;
            $this->NgayCong = $NgayCong;
            $this->NgayDiMuon = $NgayDiMuon;
            $this->PhutDiMuon = $PhutDiMuon;
            $this->Thang = $Thang;
        }
    }
?>
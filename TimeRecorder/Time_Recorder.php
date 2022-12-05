<?php
    class TimeRecorder{
        public $MaNV;
        public $NgayCong;
        public $NgayDiMuon;
        function __construct($MaNV, $NgayCong, $NgayDiMuon)
        {
            $this->MaNV = $MaNV;
            $this->NgayCong = $NgayCong;
            $this->NgayDiMuon = $NgayDiMuon;
        }
    }
?>
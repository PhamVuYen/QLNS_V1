<?php
    
    class CongViec{
        public $MaNV;
        public $MaCViec;
        public $TenCViec;
        public $DealineCV;
      //  public $CreateBy;
        public $CreateDate;
      //  public $AsignedTo;
        public $Condition;

        function __construct($MaNV, $MaCViec, $TenCViec, $DealineCV,  $CreateDate, $Condition)
        {
            $this ->MaNV = $MaNV;
            $this ->MaCViec = $MaCViec;
            $this ->TenCViec = $TenCViec;
            $this ->DealineCV = $DealineCV;
           // $this ->CreateBy = $CreateBy;
            $this ->CreateDate = $CreateDate;
           // $this ->AsignedTo = $AsignedTo;
            $this ->Condition = $Condition;
        }
    }

?>
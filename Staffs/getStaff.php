<?php
    include '../Connect.php';
    include 'Staff.php';

    $response = array();
    $query = "SELECT * FROM nhanvien";
    $data = mysqli_query($conn, $query);

       while ($row = mysqli_fetch_assoc($data)){
        array_push($response, new NhanVien(
            $row['MaNV'], 
            $row['TenNV'], 
            $row['NgaySinh'], 
            $row['DiaChi'], 
            $row['GioiTinh'], 
            $row['Phone'], 
            $row['Email'], 
            $row['SoCMND'], 
            $row['SoTk'], 
            $row['MaPB'], 
            $row['MucLuong'], 
            $row['ChucVu'],
            $row['Password']
        ));
       }

    echo json_encode($response);
?>
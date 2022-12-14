<?php
    include '../Connect.php';
    include 'Job.php';

    $response = array();
    if($_SERVER['REQUEST_METHOD']=='POST'){
      $MaCViec = isset($_POST['MaCViec']) ? $_POST['MaCViec']: '';
<<<<<<< HEAD
        $Status = isset($_POST['Status']) ? $_POST['Status']: '';
=======
      $Status = isset($_POST['Status']) ? $_POST['Status']: '';
>>>>>>> 942ec4570a218621918dc435a9dd5bf983c2a882

      if(isset($_POST['MaCViec']) && isset($_POST['Status'])){

          $query = "UPDATE congviec SET Status = '$Status'  WHERE MaCViec= '$MaCViec' ";
      
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


<?php

header("Access-Control-Allow-Origin: *");

if(isset($_REQUEST['item'])){
  echo "in the getstationery";

   $con= mysqli_connect("localhost","root","","cambeep");

    if($con){ 
      echo "in the get Stationery";
   
   // session_start();
   // $user = $_SESSION['username'];
    $user = "Bhebhe";
    $date  = date('Y/m/d H:i:s');
    $item = $_REQUEST['item'];
    $quantity = $_REQUEST['quantity'];
    $approver = $_REQUEST['approver'];
    echo "approver ".$approver;
    $status ="pending";
    $date2 = $_REQUEST['date'];
    echo $date2 ;
   

    $sql2 = "SELECT * FROM stationery WHERE item_name LIKE '%$item%'";
   
    $result2 = mysqli_query($con, $sql2);

    if($result2){

          $row = mysqli_fetch_assoc($result2);
          $item_id = $row['id'];
         

      $sql = "INSERT INTO stationery_out(item_id, request_date, quantity, request_by, collection_by, collection_date, approver,approval_status, request_status) VALUES ('$item_id','$date','$quantity','$user','$user','$date2','$approver','no','sent')";
      $result = mysqli_query($con, $sql);  


    if($result){
      return "successful";
    }
   }
  }
 }


/*  $con= mysqli_connect("localhost","root","","cambeep");
  $sql = "INSERT INTO stationery_out(item_id, request_date, quantity, request_by, collection_by, collection_date, approver,approval_status, request_status) VALUES ('10','3/3/5','20','bhebhe','bhebhe','2/8/8','anythin','no','sent')";
      $result = mysqli_query($con, $sql);  
      var_dump( $result);*/
 ?>


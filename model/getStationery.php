

<?php

header("Access-Control-Allow-Origin: *");
//echo "in the sendEquip php file";

if(isset($_REQUEST['item'])){

   $con= mysqli_connect("localhost","root","","cambeep");

    if($con){ 
   
   // session_start();
   // $user = $_SESSION['username'];
    $user = "Bhebhe";
    $date  = date('Y/m/d H:i:s');
    $item = $_REQUEST['item'];
    $quantity = $_REQUEST['quantity'];
    $status ="pending";
   

    $sql2 = "SELECT * FROM stationery WHERE item_name LIKE '%$item%'";
    //$sql2 = "SELECT * FROM stationery";
    $result2 = mysqli_query($con, $sql2);

    if($result2){

          $row = mysqli_fetch_assoc($result2);
          $item_id = $row['id'];
         

      $sql = "INSERT INTO stationery_out(item_id, request_date, quantity, request_by, collection_by) VALUES ('$item_id','$date','$quantity','$user','$user')";
      $result = mysqli_query($con, $sql);  


    if($result){
      return "successful";
    }
   }
  }
 }
 ?>




<?php
header("Access-Control-Allow-Origin: *");
echo "in the sendSupport php file";

if(isset($_REQUEST['message'])){
   $con= mysqli_connect("localhost","root","","cambeep");
    if($con){
        #echo "connected to db";
    session_start();
    #$requester = $_SESSION['username'];
   # echo $requester;
    $requester ="Caro";
    $date  = date('Y/m/d H:i:s');
    echo $date;
    $message = $_REQUEST['message'];
    $status = $_REQUEST['status'];


    #$sql1 = "INSERT INTO user_support(sender) VALUES ('$requester')";
    #$result1 =mysqli_query($con, $sql1);

    #$sql2 = "SELECT id from user_support WHERE sender = '$requester'";
    #$result2 = mysqli_query($con, $sql2);


    #if($result2){
       # echo "in the result2";
          #$row = mysqli_fetch_assoc($result2);
          #$service_id = $row['id'];
          #echo "$service_id";
          $state ="pending";


     
     $Sql = "INSERT INTO user_support(date,sender, message, status, state) VALUES ('$date','$requester','$message','$status','$state')";
    $result = mysqli_query($con, $Sql);  

   
    #if (mysqli_num_rows($result)>0 ) {
    if($result){
      echo "successful";
     }
    }
  # }
  }

 ?>

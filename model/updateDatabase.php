

<?php

header("Access-Control-Allow-Origin: *");
//echo "in the updateDatabase php file";

if(isset($_REQUEST['id'])){
   $con= mysqli_connect("localhost","root","","cambeep");
    if($con){ 
      echo "connected";
      echo $_REQUEST['page'];
   
      //if($_REQUEST['page']=="stationery"){
      // if(strcmp($_REQUEST['page'], 'stationery')==0){
         echo "in the stationery if";
         $id = $_REQUEST['id'];
         echo $id;
         $status ="viewed";
         $sql = "UPDATE stationery SET state = '$status', WHERE id = '$id'";
         $result = mysqli_query($con, $sql);  

    if($result){
      echo "successful";
      return "successful";
   // }
   }
  }
 }
 ?>


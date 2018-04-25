


<script type="text/javascript" src="../Controller/controlScript.js"></script> 
<?php
//header("Access-Control-Allow-Origin: *");
 

//CONNECTING TO THE DATABASE
function getdb(){
$servername = "localhost";
$username = "root";
$password = "";
$db = "cambeep";
//echo "called getDB";
 
try {
  
    $conn = mysqli_connect($servername, $username, $password, $db);
  
    }

catch(exception $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    return $conn;
}



function loadstationery() {
  echo "in the load stationery function";
    $con= getdb();
    $Sql ="Select * from stationery";
    $result = mysqli_query($con, $Sql); 


    if (mysqli_num_rows($result)>0 ) {
       while($row = mysqli_fetch_assoc($result)){  
            echo "<option value=".$row['item_name']. "></option>";
        }
    }
}




 function loadEquipment($item) {
  echo "in the load equipment function";
    $con= getdb();
    $Sql ="Select item_id, item_name,specs from equipment where item_name = '$item'";
    $result = mysqli_query($con, $Sql); 


    if (mysqli_num_rows($result)>0 ) {
       while($row = mysqli_fetch_assoc($result)){  
            echo "<option value=".$row['specs']. "></option>";
        }
    }
}


// Function to get the IT support reports 
function get_all_requests(){
  
    $con = getdb();
    $Sql = "SELECT * FROM user_support";
    $result = mysqli_query($con, $Sql);  

   
    if (mysqli_num_rows($result)>0 ) {

    	  echo "<div class='table-responsive'>
    	  			<table id='myTable' class='table table-striped table-bordered'>
                         <thead>
                          <th>Date</th>
                          <th>Requester</th>
                          <th>Message</th>
                          <th>Status</th>
                          <th>State</th>
                          <th>Viewed</th>
                          <th>Respond</th>
                        </tr></thead><tbody>";
    
 
           echo "<tbody>"; 
           $row_id = 0; 
      while($row = mysqli_fetch_assoc($result)){ 
         $row_id =  $row_id+1;
       echo "<tr id= '$row_id'>
             <td>" . $row['date'] .
             "</td><td>" . $row['sender'] .
             "</td><td>" . $row['message'] .
              "</td><td>" . $row['status']. 
              "</td><td>" . $row['state']. 
              "</td>
              <td>";
          echo'
              <form name="view" method="GET" action = "">
               <button name="done" type="submit" id= $row_id onclick="removeRow('.$row_id.')">Done</button> 
               </form>';

              ?>
               
              <script type="text/javascript" src="../Controller/controlScript.js"></script> 
              
               <?php  
                 echo "</td>";
                 echo "<td>";
                 ?>

                <form name="respond" method="GET" action = "viewedUpdate.php">
               <button name="respond" type="submit" id="doneBtn" onclick="cancelRequest()" >Respond</button> 
               </form>
               <?php  
                echo "</td>";

}
echo "</tbody>";
mysqli_close($con);                         
     echo "</table></div>";
     
}
 else {
     echo "you have no records";
}
}


// Function to view all the stationery requests
function get_all_stationery_requests(){
  
    $con = getdb();
    $Sql = "SELECT * FROM stationery_out";
    $result = mysqli_query($con, $Sql);  

   
    if (mysqli_num_rows($result)>0 ) {

    	  echo "<div class='table-responsive'>
    	  			<table id='myTable' class='table table-striped table-bordered'>
                         <thead>
                          <th>Date</th>
                          <th>By</th>
                          <th>Quantity</th>
                          <th>Collection_by</th>
                          <th>Rem</th>
                          <th>Clear</th>
                        </tr></thead><tbody>";
    
 
           echo "<tbody>";  
            while($row = mysqli_fetch_assoc($result)){   
        echo "<tr>
                   <td>" . $row['request_date'] .
              "</td><td>" . $row['request_by'] .
              "</td><td>" . $row['quantity'] .
              "</td><td>" . $row['collection_by'] .
              "</td>
              <td>";

               echo'
           
                            <a class="edit" onclick="getUpdateId(this.id)" id="'.$row['id'].'" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>

                            <a class="delete" onclick="getId(this.id)" id="'.$row['id'].'"data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>';

             /* ?>

              <form name="rem" method="GET" action = "rem.php">
               <input  name="rem" id="rem" type="text" tabindex="1"  required>
               </form>

               <?php  
                 echo "</td>";
                 echo "<td>";
                 ?>

                <form name="clear" method="GET" action = "clear.php">
               <button name="clear" type="submit" id="'.$row['id'].' onclick="clear()" >Clear</button> 
               </form>
               <?php */ 
                echo "</td>";

}
echo "</tbody>";
mysqli_close($con);                         
     echo "</table></div>";
     
}
 else {
     echo "you have no records";
}
}


function getStationeryStatus(){
   $user = $_SESSION['username'];
  // $user = "Bhebhe";
   $count = 0;

    $con = getdb();

    $Sql = "SELECT * FROM stationery_out where request_by = '$user' and request_status = 'sent'";
    $result = mysqli_query($con, $Sql);  

   
    if (mysqli_num_rows($result)>0 ) {

        echo "<div class='table-responsive'>
              <table id='myTable' class='table table-striped table-bordered'>
                          <thead>
                          <th>  </th>
                          <th>Date</th>
                          <th>Status</th>
                           <th>Approver</th>
                          <th>Approved</th>
                        
                        </tr></thead><tbody>";
    
 
           echo "<tbody>";  
            while($row = mysqli_fetch_assoc($result)){  
            $count  = $count + 1; 
            echo "<tr>
                   <td>" . $count .
              "</td><td>" . $row['request_date'] .
              "</td><td>" . $row['request_status'] .
               "</td><td>" . $row['approver'] .
              "</td><td>" . $row['approval_status'] .
              "</td>";
            

}
echo "</tbody>";
mysqli_close($con);                         
     echo "</table></div>";
     
}
 else {
     echo "You have no pending requests";
}



}

function getUserStationeryStatus(){
   // $user = $_SESSION['username'];
   $user = "Bhebhe";
   $count = 0;

    $con = getdb();

    $Sql = "SELECT * FROM stationery_out where request_by = '$user'";
    $result = mysqli_query($con, $Sql);  

   
    if (mysqli_num_rows($result)>0 ) {

        echo "<div class='table-responsive'>
              <table id='myTable' class='table table-striped table-bordered'>
                          <thead>
                          <th>  </th>
                          <th>Date</th>
                          <th>Status</th>
                           <th>Approver</th>
                          <th>Approved</th>
                        
                        </tr></thead><tbody>";
    
 
           echo "<tbody>";  
            while($row = mysqli_fetch_assoc($result)){  
            $count  = $count + 1; 
            echo "<tr>
                   <td>" . $count .
              "</td><td>" . $row['request_date'] .
              "</td><td>" . $row['request_status'] .
               "</td><td>" . $row['approver'] .
              "</td><td>" . $row['approval_status'] .
              "</td>";
            

}
echo "</tbody>";
mysqli_close($con);                         
     echo "</table></div>";
     
}
 else {
     echo "you have no records";
}

}







?>

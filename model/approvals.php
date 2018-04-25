<?php

Require('supportFunctions.php');

//function load_stationery_table(){

   // session_start();
    $user = $_SESSION['username'];
    echo  $user;
  
    $con = getdb();

    if($con){

      echo "successfully connected";
    }
    $Sql = "SELECT * FROM stationery_out WHERE collection_by ='$user'";
    $result = mysqli_query($con, $Sql);  


     if (mysqli_num_rows($result)>0 ) {
    echo "<table class='table table-striped table-hover'>
                <thead>
                    <tr>
            <th>
              <span class='custom-checkbox'>
                <input type='checkbox' id='selectAll'>
                <label for='selectAll'></label>
              </span>
            </th>
                        <th>Request By</th>
                        <th>Quantity</th>
                        <th>Collection Date</th>
                        <th>Approve?</th>
                    </tr>
                </thead><tbody>";


        while($row = mysqli_fetch_assoc($result)){ 

           echo" <tr>

                        <td>".$row['request_by'].
                        "</td><td>".$row['quantity'].
                        "</td><td>".$row['collection_date'].
                        "</td><td>";

                        echo'
           
                            <a class="edit" onclick="getUpdateId(this.id)" id="'.$row['id'].'" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>

                            <a class="delete" onclick="getId(this.id)" id="'.$row['id'].'"data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>';
              }
              echo "</tbody></table>";
    // }
  }


    ?>
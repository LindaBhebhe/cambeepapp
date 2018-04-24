<?php
if(!empty($_GET['id'])){
    //DB details
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'cambeep';


    
    //Create connection and select DB
    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    
    if ($db->connect_error) {
        die("Unable to connect database: " . $db->connect_error);
    }

     // $user = $_SESSION['username'];
    $user = "Bhebhe"; 
    
    //get content from database
    $query = $db->query $Sql = "SELECT * FROM stationery_out where request_by = '$user '";);
    
    if($query->num_rows > 0){
        $Data = $query->fetch_assoc();
        echo '<h4>'.$Data['date'].'</h4>';
        echo '<p>'.$Data['request_status'].'</p>';
    }else{
        echo 'Content not found....';
    }
}else{
    echo 'Content not found....';
}
?>
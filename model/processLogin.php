<?php
header("Access-Control-Allow-Origin: *");
//echo "in the login php file";

if(isset($_REQUEST['name'])){
   $con= mysqli_connect("localhost","root","","cambeep");
    if($con){
        //echo "connected to db";
        $username= $_REQUEST["name"];
        $password= $_REQUEST["password"];
        //echo $username; 

        //$sql ="SELECT * FROM user WHERE username='$username'";
        $sql ="SELECT * FROM user WHERE username LIKE '%$username%'";
       
        //if ($username) {
           // echo "successfully got username";

       // }
        
        
        $result=mysqli_query($con,$sql);
        if($result){
           // echo "got some db results";
            $row =mysqli_fetch_assoc($result);
            $username=$row['username'];
             //echo "username is";
            //echo '$username';
            $passwd = $row['password'];
           // $role = $row['category'];
            //echo $role;

            if($username){
            //if(password_verify($password, $passwd)){ 
           
                // if(strcmp($role, 'IT Admin')==0){
                //     echo "successful1";
                // }
                // if (strcmp($role, 'NO Staff')==0){
                //     echo "successful2";
                // }
                // if (strcmp($role, 'Admin')==0){
                //     echo "successful3";
                // }
                echo "successful";

                session_start();
                $_SESSION['username']= $row['username'];
                $_SESSION['password']=  $row['password']; 
               // echo     $_SESSION['username']; 
                
             }
           else {
                echo " error getting the password";
             }    
        }
        else{
            echo "No db results found";
        } 
    }
    else{
        echo "failed to establish connection";
    }
}
    ?>

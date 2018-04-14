<?php 
/* *
*@author Linda Bhebhe
* User class
*/
 include( "supportFunctions.php")
class user{

//Method to retrive a user for verification on the database
	function get_user($name){
		$sql = "select * from user where username = '$name'";
		return $this-> ($sql)
	}



	

}



?>

<?php 
/* *
*@author Linda Bhebhe
* Test Class
*/
include "user.php";
class test extends PHPUnit_Framework_testCase{

//Method to retrive a user for verification on the database
	public function test_get_user(){
		$user1 = new user();
		$this->AssertTrue($user1->getUser($));
		
	}
}



?>

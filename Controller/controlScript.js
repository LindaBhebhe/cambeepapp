

function validateloginjs(){

	//get username input and error message 
	var username = document.getElementById('username');
	var username_error = document.getElementById("username_error");
    var checked = true;

    //get password input and error message
	var password = document.getElementById('password');	
	var password_error = document.getElementById("password_error");

	//validating username 
	//check if the username input is empty
	if(username.value === "")
	{    
		 checked = false;
	    username_error.innerHTML = "Enter username";
	}
	

	//validating password
	//check if the password input is empty
	if (password.value === "")
	{
		 checked = false;
	    password_error.innerHTML = "Enter password";
	}
	

	if (checked ==true){
		loginAsUser();
		return true;
	}else{
		return false;
	}

	//function fail(){
	//password_error.innerHTML = "Wrong password";
	
    //}
}

function loginAsUser(){
	
	
	var usern= document.getElementById('username').value;
	var pass= document.getElementById('password').value;


	if (window.XMLHttpRequest) {
				xhttp = new XMLHttpRequest();
				} else {
			
				xhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
				  alert(this.readyState);				
					if (this.responseText == "code1"){
                        window.location.href = "ITadminHome.php";
                     }
                     else if(this.responseText == "code2") {
                  
                     	window.location.href = "generalHome.php";
                     }
                      else if(this.responseText == "code3") {
                     	window.location.href = "adminHome.php";
                     }

                }
        };    

           	  
		  xhttp.open("GET", "http://localhost:81/cambeep/model/cambeeplogin.php?username="+usern+"&password="+pass, true);		  
		  xhttp.send();
		}

//******************************************************************************




//*************************IT Support*****************************************
//function to validate the support form
function validateSupportForm(){
	//alert("in the validate form");
	//console.log("in the validate method");

	//get username input and error message 
	var message = document.getElementById('message');
	//console.log(message);
	var message_error = document.getElementById("message_error");
    var checked = true;

    //get password input and error message
	//var requester = document.getElementById('requestBy');	
	//var request_error = document.getElementById("request_error");

	var status = document.getElementById('status');	
	var status_error = document.getElementById("status_error");

	//validating username 
	//check if the username input is empty
	alert(message.value);
	if(message.value === "")
	{    
		 checked = false;
	    message_error.innerHTML = "Enter username";
	}


	if (status.value === "") //fix this
	{
		 checked = false;
         message_error.innerHTML = "Select status";
	}
	

	if (checked ==true){
		alert("here1");
		requestSupport();
		return true;
	}else{
		alert("Checked is false");
		return false;
	}
	
}

function requestSupport(){
	alert("in the requestSupport function");
	//console.log("in the send form function ");
	//console.log("in the loginAsUser function");
	var msg= document.getElementById('message').value;
	//var req= document.getElementById('requester').value;
	var status= document.getElementById('status').value;

	console.log(msg);
	//console.log(req);

	if (window.XMLHttpRequest) {
				xhttp = new XMLHttpRequest();
				} else {
			
				xhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xhttp.onreadystatechange = function() {
                 console.log("in the on readyState");
				if (this.readyState == 4 && this.status == 200) {
				  //direct based on who logged in 					
					if (this.responseText == "successful"){
                        //window.location.href = "ITadminHome.html";
                        alert("Request sent to IT");
                     }

                }
        };
          

          //call the send to the php file on the server 
		 // xhttp.open("GET", "https://watchmeorg.000webhostapp.com/cambeeplogin.php?username="+usern+"&password="+pass, true);		  
		  xhttp.open("GET", "http://localhost:81/cambeep/model/sendSupport.php?message="+msg+"&status="+status, true);		  
		  xhttp.send();
		}

//***************************************************************************************************************



//************************************Request Equipment*********************************************************
function validateEquipmentForm(){
	alert("successfully requested");
	//console.log("in the validate method");

	//get username input and error message 
	var item = document.getElementById('item');
	console.log(item);
	var item_error = document.getElementById("item_error");
    var checked = true;

    //get password input and error message
	var quantity = document.getElementById('quantity');	
	var quantity_error = document.getElementById("quantity_error");

	var collectionDate = document.getElementById('collectionDate');	
	var collectionDate_error = document.getElementById("collectionDate_error");

	var returnDate = document.getElementById('returnDate');	
	var returnDate_error = document.getElementById("returnDate_error");

	//validating username 
	//check if the username input is empty
	if(item.value === "")
	{    
		 checked = false;
	    item_error.innerHTML = "select Item";
	}

	
	if (quantity.value === "")
	{
		 checked = false;
         request_error.innerHTML = "Enter quantity";
	}

	if (collectionDate.value === "") 
	{
		 checked = false;
         collectionDate_error.innerHTML = "Select date";
	}

	if (returnDate.value === "") 
	{
		 checked = false;
         returnDate_error.innerHTML = "Select date";
	}

	if (checked ==true){
	    requestEquipment();
		return true;
	}else{
		return false;
	}
}


function requestEquipment(){
    var item = document.getElementById('item');

	var quantity = document.getElementById('quantity');	

	var returnDate = document.getElementById('returnDate');	

	var collectionDate = document.getElementById('collectionDate');	
	
	if (window.XMLHttpRequest) {
				xhttp = new XMLHttpRequest();
				} else {
			
				xhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xhttp.onreadystatechange = function() {
                 console.log("in the on readyState");
				if (this.readyState == 4 && this.status == 200) {				
					if (this.responseText == "successful"){
						alert("successfully requested");
                        //window.location.href = "ITadminHome.html";
                     }
                    
                }
        };
          

          //call the send to the php file on the server 
		 // xhttp.open("GET", "https://watchmeorg.000webhostapp.com/cambeeplogin.php?username="+usern+"&password="+pass, true);		  
		  xhttp.open("GET", "http://localhost:81/cambeep/model/getEquipment.php?item="+item+"&quantity="+quantity+"&returnDate="+returnDate+"&collectionDate="+collectionDate, true);		  
		  xhttp.send();
		}
//*******************************************************************************************************************


//*******************************************Stationery*************************************************************



	function validateStationeryForm(){
		alert("in the validate stationery");



	var item = document.getElementById('item');
	//var item = document.getElementById("item").options[document.getElementById("item").selectedIndex].value;

    var checked = true;

    //get password input and error message
	var quantity = document.getElementById('quantity');	

	var approver = document.getElementById('approver');	

	var date = document.getElementById('date');	
	
	//check if the username input is empty
	if(item === '')
	{    

		 checked = false;
	    //item_error.innerHTML = "select Item";
	}

	
	if (quantity === '')
	{
		 checked = false;
        // request_error.innerHTML = "Enter quantity";
	}

	if (approver === '')
	{
		 checked = false;
         //request_error.innerHTML = "Select approver";
	}

	if (date=== '')
	{
		 checked = false;
         //request_error.innerHTML = "Select collection date";
	}

	if (checked ==true){
	   requestStationery();
		//return true;
	}else{
		return false;
	}
}


function requestStationery(){

    var item = document.getElementById('item').value;
    	alert("requesting item" + item );

	var quantity = document.getElementById('quantity').value;	
	    alert("requesting quantity" + quantity);


	var approver = document.getElementById('approver').value;
	alert("requesting approver" + approver);	

	var date = document.getElementById('dt').value;
	alert("requesting date" + date);	
	
	if (window.XMLHttpRequest) {
				xhttp = new XMLHttpRequest();
				} else {
			
				xhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xhttp.onreadystatechange = function() {
                 console.log("in the on readyState");
				if (this.readyState == 4 && this.status == 200) {				
					if (this.responseText == "successful"){
						alert("Request Successful");
                       
                     }
                    
                }
        };
          

          //call the send to the php file on the server 
		 // xhttp.open("GET", "https://watchmeorg.000webhostapp.com/cambeeplogin.php?username="+usern+"&password="+pass, true);		  
		  xhttp.open("GET", "http://localhost:81/cambeep/model/getStationery.php?item="+item+"&quantity="+quantity+"&approver="+approver+"&date="+date, true);		  
		  xhttp.send();
		}
		//**************************************************************************************************


		//*********************************************Other functions*************************************
		 
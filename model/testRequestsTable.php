<!DOCTYPE html>
<html>
<head>

		<title>test table </title>
</head>
<body>

	<div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
          <table cellspacing="0" cellpadding="0" border="0" style="width:100%; ">
        <tr>
            <td>
                <div style=" height:600px; overflow:auto;">

                  <table cellspacing='0' cellpadding='1' border'1' id="myTable" >

                <thead style='background-color: ; display: block;'>
                  <tr style= 'color:black;' >
                        
                    <th>Date</th>
                    <th>Requester </th>
                    <th>Message</th>
                    <th>Status</th>
                    <th>Viewed</th>
                    <th>Respond</th>
                    </tr>
                    </thead>
                <?php
                    Require('../model/supportFunctions.php');
                    
                  ?>
                </table>
              </div>

            </td>
          </tr>
         </table>

            <?php
               Require 'functions.php';
               get_all_records();
            ?>
           
            </div>
          </div>
          </div>	
					
</body>
</html> 
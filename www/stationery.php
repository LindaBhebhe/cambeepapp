<!doctype HTML>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue-deep_purple.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link href="fonts/fontello/css/fontello.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/bootstrap-offset-right.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Material Design Login Template</title>
    <style>
        .mdl-textfield__label {
            margin-bottom: 0;
            color: #d7dbdc;
            font-weight: normal;
        }
        
        .mdl-textfield--floating-label.is-focused .mdl-textfield__label,
        .mdl-textfield--floating-label.is-dirty .mdl-textfield__label {
            text-transform: uppercase
        }
        
        .has-feedback label~.form-control-feedback {
            top: 15px;
        }
        
        .mdl-textfield {
            width: 100%;
        }
        
        .mdl-checkbox__label {
            cursor: text;
            font-size: 13px;
            float: left;
            color: #b0b3b4;
            font-weight: normal;
        }
        
        .mdl-checkbox__box-outline {
            border: 1px solid #b0b3b4;
        }
        
        .mdl-textfield__input {
            border: none;
            border-bottom: 1px solid rgba(0, 0, 0, .12);
            display: block;
            font-size: 16px;
            margin: 0;
            padding: 4px 0;
            width: 100%;
            background: 0 0;
            text-align: left;
            color: inherit;
            font-weight: bold;
        }
        
        .mdl-switch__label {
            float: left;
            font-weight: normal;
            color: #b0b3b4;
            font-size: 14px;
        }
    </style>
</head>

<body>


   <!--  <?php
      //Require('../model/getStationery.php');                  
    ?> -->

    <script type="text/javascript" src="../Controller/controlScript.js"></script>

    <div class="container">
        <div class="center-block">
            <div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-12 col-xs-12 no-padding" style="z-index:1">
                <!-- Slider -->

                <div class="mlt-carousel">
                    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img class="img-responsive center-block" src="img/stationery.jpg" alt="step1" style="border-radius: 50%; margin-top: 150px" height="150" width="150">
                                <div class="item-content">
                                   <p> <a  href="stationery.php"><b>Stationery</b></a></p>
                                    <p> <a  href="support.php"><b>Support</b></a></p>
                                    <p> <a  href="equipment.php"><b>Equipment</b></a></p>
                                    <p> <a  href="login.php"><b>Logout</b></a></p>
                                </div>
                            </div>
                            <div class="item">
                                <img class="img-responsive center-block" src="img/stationery.jpg" alt="step1" style="border-radius: 50%; margin-top: 150px" height="150" width="150">
                                <div class="item-content">
                                      <p> <a  href="stationery.php"><b>Stationery</b></a></p>
                                    <p> <a  href="support.php"><b>Support</b></a></p>
                                    <p> <a  href="equipment.php"><b>Equipment</b></a></p>
                                    <p> <a  href="login.php"><b>Logout</b></a></p>
                                </div>
                            </div>
                            <div class="item">
                                <img class="img-responsive center-block" src="img/stationery.jpg" alt="step3" style="border-radius: 50%; margin-top: 150px" height="150" width="150">
                                <div class="item-content">
                                    <p> <a  href="stationery.php"><b>Stationery</b></a></p>
                                    <p> <a  href="support.php"><b>Support</b></a></p>
                                    <p> <a  href="equipment.php"><b>Equipment</b></a></p>
                                    <p> <a  href="login.php"><b>Logout</b></a></p>
                                </div>
                            </div>
                        </div>
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                    </div>
                    <!--mlt-carousel-->
                </div>
                <!-- Slider -->
            </div>
            <!-- Login -->

            <div class="col-lg-6 col-lg-offset-right-1 col-md-6 col-md-offset-right-1 col-sm-12 col-xs-12 no-padding">
                <div class="mlt-content">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#register" data-toggle="tab">Request</a></li>
                        <li><a href="#login" data-toggle="tab">Status</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade in active" id="register">
                            <!--register form-->

                            <form form data-feedback='{"success": "fa-check", "error": "fa-times"}'>
                                <div class="col-lg-10 col-lg-offset-1 col-lg-offset-right-1 col-md-10 col-md-offset-1 col-md-offset-right-1 col-sm-12 col-xs-12 pull-right ">

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-group has-feedback">
                                        <!-- <input type="text" name="item" id="item" class="mdl-textfield__input" />
                                        <label class="mdl-textfield__label " for="fullName "> Select Item2</label>
                                        <span class="form-control-feedback" aria-hidden="true" id="fname1"></span> -->

                                        <label>Item name</label>
                              <select id="item" name="item " style=" max-width: 350px;
    min-width: 350px;
    width: 350px !important;" required>
                                
                               <?php
            
                              $con= mysqli_connect("localhost","root","","cambeep");
                             $Sql = "SELECT * FROM stationery";
                            $result = mysqli_query($con, $Sql);  
            
                              while($row = mysqli_fetch_assoc($result)){ 
                             $value=$row["item_name"];
                             echo "<option>
                                   $value
                           </option>";
            
                           }
                
                            ?>


                              </select>
                                    </div>
                                    <!--
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input " type="text" id="fullName ">
                                        <label class="mdl-textfield__label " for="fullName ">Full Name</label>
                                    </div>-->

                                     <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-group has-feedback">
                                     <label>Quantity</label>
                                     
                                        <input type="number" name ="quantity" id="quantity"  style=" max-width: 370px;
                                            min-width: 370px;
                                            width: 370px !important;" >
                                        
                                    </div>




                                    <!-- <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label "> -->
                                         <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-group has-feedback">
                                        <!-- <input type="text" name="item" id="item" class="mdl-textfield__input" />
                                        <label class="mdl-textfield__label " for="fullName "> Select Item2</label>
                                        <span class="form-control-feedback" aria-hidden="true" id="fname1"></span> -->

                                        <label>Approver</label>
                              <select id="approver" name="approver " style=" max-width: 360px;
    min-width: 360px;
    width: 360px !important;" 
                              required>
                                
                               <?php
            
                              $con= mysqli_connect("localhost","root","","cambeep");
                             $Sql = "SELECT * FROM approver";
                            $result = mysqli_query($con, $Sql);  
            
                              while($row = mysqli_fetch_assoc($result)){ 
                             $value=$row["name"];
                             echo "<option>
                                   $value
                           </option>";
            
                           }
                
                            ?>


                              </select>
                                    </div>



                                       <!--  <input class="mdl-textfield__input " type="text " id="approver " name = "approver">
                                        <label class="mdl-textfield__label " for="emailAddress ">Approver</label> -->
                                

                                     <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-group has-feedback">

                                     collect on:
                                        <input class="mdl-textfield__input " input type="date" name="dt" id="dt"  > 
                                     
                                    </div>

                                    <button class="btn lt-register-btn " formaction="# " id="submit" onclick="return validateStationeryForm()" >Send<i class="icon-right pull-right "></i></button>
                                </div>
                            </form>
                            <!--register form-->
                        </div>
                      
                         <div class="tab-pane fade" id="login">
                            <!--login form-->
                           <?php
                            Require('../model/supportFunctions.php');
                         getStationeryStatus();
                         ?>
                            <!-- <form>

                                <div class="col-lg-10 col-lg-offset-1 col-lg-offset-right-1 col-md-10 col-md-offset-1 col-md-offset-right-1 col-sm-12 col-xs-12 pull-right ">
                                    <button class="btn lt-register-btn">Pending requests <i class="icon-right "></i></button>
                                </div>

                                <div class="col-lg-10 col-lg-offset-1 col-lg-offset-right-1 col-md-10 col-md-offset-1 col-md-offset-right-1 col-sm-12 col-xs-12 pull-right ">
                                    <button class="btn lt-register-btn">All Requests <i class="icon-right "></i></button>
                                </div>
                            </form> -->
                            <!--login form-->
                        </div>















                      
                          
                                                                   <!-- Modal -->
                <!-- <div class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialog">
        
           Modal content
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
              <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          
        </div>
      </div> -->
        <!-- Modal content-->




                        </div>
                    </div>
                </div>
                <!--Login-->
            </div>
            <!--center-block-->
        </div>
        <!--container-->
    </div>







    <script src="node_modules/jquery/dist/jquery.min.js "></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js "></script>
    <script src="libs/mdl/material.min.js "></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js "></script>

    <script>
        //Google analytics.
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-79865537-1', 'auto');
        ga('send', 'pageview');
    </script>

    <script>
        //Form validation.
        $('form').validate({
            rules: {
                fname: {
                    minlength: 3,
                    maxlength: 15,
                }
            },
            errorPlacement: function(error, element) {},
            highlight: function(element) {
                var id_attr = "#" + $(element).attr("id") + "1";
                $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
                $(id_attr).removeClass('icon-ok-circled2').addClass('icon-cancel-circled2');
            },
            unhighlight: function(element) {
                var id_attr = "#" + $(element).attr("id") + "1";
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
                $(id_attr).removeClass('icon-cancel-circled2').addClass('icon-ok-circled2');
            },
        });
    </script>

</body>

</html>
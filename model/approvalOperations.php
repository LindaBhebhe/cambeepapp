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
                              
                            </div>
                            <div class="item">
                                <img class="img-responsive center-block" src="img/bell.jpg" alt="step1" style="border-radius: 50%; margin-top: 150px" height="150" width="150">
                               
                            </div>
                            <div class="item">
                                <img class="img-responsive center-block" src="img/stationery.jpg" alt="step1" style="border-radius: 50%; margin-top: 150px" height="150" width="150">
                                
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
                   
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade in active" id="register">

                         <?php
                            Include('../model/approvals.php');
                        
                         ?>
                       
                        </div>
                      
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
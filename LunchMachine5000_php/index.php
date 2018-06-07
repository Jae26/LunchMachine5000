
<!--Lunchin' FrontPage HTML-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ravfla Picker "Lunch Machine 5000"</title>
    <link rel="shortcut icon" type="image/x-icon" href="k-logo.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="Lunchin_style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
        .wrapper {
            max-width: 100%;
            /*width: 650px;
            margin: 0 auto;*/
        }
        /*.page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;*/
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
<div class="wrapper">
    <header class="header-container">
        <img class="logo" src="img/Kuulogo.png" alt="Kuuasema Logo">
        <!--<div class="logo" >
            <img src="img/Kuulogo.png" alt="Kuuasema Logo">
        </div>-->          
    </header>    
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">                    
                        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
                            <!--<body>-->
                            <script>
                               $(document).ready(function() {
                                  $("#getrestaurant").click(function(event){
                                      $.get('getrestaurant.php',function(return_data){
                                      $("#display").html(return_data);
                                  });
                                 });
                               });
                            </script>
                            <br>
                        <div class="text-center" id="display"></div>
                    <div class="text-center">
                        <input type="button" class="btn btn-lg btn-danger" id="getrestaurant" value="Pick a restaurant">
                    </div>
                </div>
            </div>        
        </div>

        <div class="toFormContainer">
            <div id="clicker">
                <a class="form-enter" href="create.php"><p>Click to Enter Restaurants</p></a>
            </div>
            <div>
                <a class="form-enter" href="list.php"><p id="show-all">Show all restaurants</p></a> <!--"btn pull-right"-->
            </div>
        </div>    
    <footer class="footer">
        <div class="container">
            <div class="text-center">
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary active">
                        <input type="radio" name="options" id="option1" autocomplete="off" checked> Visits today
                    </label>
                        <label class="btn btn-secondary">
                            <input type="radio" name="options" id="option2" autocomplete="off"> Visits total
                        </label>
                </div>
                    <br>
                    <span class="text-muted">00000000</span>
            </div>
        </div>
    </footer>
</div>
</body>
</html>
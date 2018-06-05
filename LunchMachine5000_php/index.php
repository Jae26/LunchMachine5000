<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/x-icon" href="k-logo.png">
    <title>Lunch Machine</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Restaurants</h2>
                        <a href="create.php" class="btn btn-success pull-right">Add new restaurant</a>
                        <a href="list.php" class="btn  pull-right">Show all restaurants</a>
                    </div>
                        <script src="//ajax.googleapis.com/ajax/libs/
                            jquery/1.8.1/jquery.min.js">
                            </script>
                            <body>
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
                            <div id="display" ></div>
                            <div class="text-center">
                                <input type="button" class="btn btn-lg btn-danger" id="getrestaurant" value="Pick a restaurant">
                            </div>
                      
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
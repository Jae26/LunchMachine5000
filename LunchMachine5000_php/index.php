<!--Lunchin' FrontPage HTML-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Rafla Picker "Lunch Machine 5000"</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/k-logo.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="Lunchin_style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
            
            
        });
    </script>
</head>
<body>
    <div id="wrapper">
        <header id="menu-primary" class="menu">
        <!--Begin Drop Menu-->	
            <div class="menu-container">
                <div id="menu-toggle-primary" class="containerT" onclick="openNav()"> <!--onclick="myFunction(this)">-->
                    <div id="barMenu">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>              
                        <!--<div id="myDropdown" class="dropdown-content-hide">
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
                                <div class="bar1a"></div>
                                <div class="bar2a"></div>
                                <div class="bar3a"></div>
                            </a>
                            <div id="myAdd">
                                <a class="form-enter" href="create.php">Add</a>
                            </div>       
                            <a id="myEdit" class="form-enter" href="list.php">Edit</a>
                        </div>-->
                    </div>
                </div>
            </div>
            <div id="myDropdown" class="dropdown-content-hide"> <!--id="mySidenav" class="sidenav">-->
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
                    <div class="bar1a"></div>
                    <div class="bar2a"></div>
                    <div class="bar3a"></div>
                </a>
                <!--&times;</a>-->            
                <div id="myAdd">
                    <a class="form-enter" href="create.php">Add</a>
                </div>          
                    <a id="myEdit" class="form-enter" href="list.php">Edit</a>
            </div>
        <script >
            function openNav() {
                document.getElementById("myDropdown").style.width = "25%";            
            }
            function closeNav() {
                document.getElementById("myDropdown").style.width = "0";
            }
        </script>
        <!--End Drop Menu-->
        </header>            
        <div id="container-fluidF" class="container-fluid">
            <div class="row">
                <div class="col-md-12">                    
                        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
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
            
            <!--<div id="logoArea">
                
            </div>-->
        <footer class="footer">			
            <div class="logo">
                <img src="img/Kuulogo.png" alt="Kuuasema Logo">
            </div>			
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


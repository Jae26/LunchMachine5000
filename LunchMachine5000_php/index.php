<!--Lunchin' FrontPage HTML-->
<?php 
session_start();
include 'count_total.php';
$clickcount = mysqli_fetch_row(mysqli_query($link, "SELECT clickcounter FROM counter"));
?>
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
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
            
            
        });
    </script>
</head>
<body>
<div class="wrapper">
    <header class="header-container">
        <div class="logo">
        </div>
        
    <!--Begin Drop Menu-->
	
	
    <div class="containerT" onclick="openNav()"> <!--onclick="myFunction(this)">-->
      <div class="bar1"></div>
      <div class="bar2"></div>
      <div class="bar3"></div>

      <!--<div id="myDropdown" class="dropdown-content hide">
        <div id="myAdd">
            <a class="form-enter" href="create.php">Add</a><br>
        </div>
            <a id="myEdit" class="form-enter" href="list.php">Edit</a>
      </div>-->
    </div>

    <!--<script type="text/javascript">
        function myFunction(x){
             x.classList.toggle("change");
             document.getElementById('myDropdown').classList.toggle("hide");
            }
    </script>-->
	
	
		<div id="myDropdown" class="dropdown-content-hide"> <!--id="mySidenav" class="sidenav">-->
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		 
		 <div id="myAdd">
            <a class="form-enter" href="create.php">Add</a>
		</div>          
			
			<a id="myEdit" class="form-enter" href="list.php">Edit</a>
			
		</div>
		
		</div>
		
			<!--<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>-->
		
	<script>
		function openNav() {
			document.getElementById("myDropdown").style.width = "35%";
			document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
		}

		function closeNav() {
			document.getElementById("myDropdown").style.width = "0";
			document.body.style.backgroundColor = "white";
		}
	</script>
	
	
	
    <!--End Drop Menu-->
    </header><!--End Header-->
        
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
		
		<div id="logoArea">
			
		</div>
    <footer class="footer">			
		<div class="logo">
			<img src="img/Kuulogo.png" alt="Kuuasema Logo">
		</div>			
        <div class="container">
            <div class="text-center">
 <div class="text-center">
                <input type="checkbox" checked data-toggle="toggle" data-on="Total visits: <br><?php print "$count[0]"; ?>" data-off="Clicked:<br><?php print "$clickcount[0]"; ?>" data-onstyle="default" data-offstyle="default">
            </div>
            </div>
        </div>
    </footer>
</div>
</body>
</html>


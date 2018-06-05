<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
                    <?php
                    // Include config file with the database details.
                    require_once '../config.php';
                    
                    // Try to make an query from a databes
                    $sql = "SELECT * FROM restaurants ORDER BY RAND() LIMIT 1";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>Name</th>";
                                        //echo "<th>Address</th>";
                                        //echo "<th>Website</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";;
                                        echo "<td>" . $row['name'] . "</td>";
                                        //echo "<td>" . $row['address'] . "</td>";
                                        //echo "<td>" . $row['website'] . "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set from the memory.
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No restaurants found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
                    // This closes the mysql connection.
                    mysqli_close($link);
                    ?>

                    <button onclick="choose()" id="select" class="btn btn-lg btn-danger">Pick a restaurant</button>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
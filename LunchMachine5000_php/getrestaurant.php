                    <?php

                    // Include config file with the database details.
                    require_once '../config.php';
                    Include 'visitorcount.php';     
                    // Try to make an query from a database
                    $sql = "SELECT * FROM restaurants ORDER BY RAND() LIMIT 1";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_array($result)){
                            echo "<a href=". $row['website'] .">". $row['name'] ."</a>";
                        }
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
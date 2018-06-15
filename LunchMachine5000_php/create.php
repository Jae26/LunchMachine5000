<?php
// Include config file
require_once '../config.php';
 
// Define variables and initialize with empty values
$name = $website = "";
$name_err = $website_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter the restaurant name.";
    }  else{
        $name = $input_name;
    }
    
    
    // Validate website
    $input_website = trim($_POST["website"]);
    if(empty($input_website)){
        $website_err = "Please enter the website address.";     
    } else{
        $website = $input_website;
    }
    
    // Check input errors before inserting in database
    if(empty($name_err) && empty($website_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO restaurants (name, website) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_name, $param_website);
            
            // Set parameters
            $param_name = $name;
            $param_website = $website;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Restaurant Entry</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="k-logo.png">    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="Lunchin_style.css">
    <style type="text/css">
        .wrapper{
            max-width: 100%;
            /*width: 500px;*/
            margin: 0 auto;
            max-height: 100%;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Add restaurant</h2>
                    </div>
                    <div id="fullForm">
                        <p id="fill-formA">Please fill this form and submit to add a restaurant to the database.</p>                 
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="rest-fieldsF" class="rest-fields <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                                <label>Restaurant Name</label>
                                <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                                <span class="help-block"><?php echo $name_err;?></span>
                        </div>                     
                        <div class="rest-fieldsF" class="rest-fields <?php echo (!empty($website_err)) ? 'has-error' : ''; ?>">
                                <label>Website</label>
                                <p>Address should be the menu link and in format <b>http://</b>www.restaurant.fi<br>Remember http:// and <u id="cautionF"> don't use slash at the end</u></p>
                                <input type="text" name="website" class="form-control" value="<?php echo $website; ?>">
                                <span class="help-block"><?php echo $website_err;?></span>
                        </div>
                            <input type="submit" class="btn btn-primary" value="Submit">
                            <a href="index.php" class="btn btn-default" id="myCancel">Cancel</a>
                        </form>
                    </div>    
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
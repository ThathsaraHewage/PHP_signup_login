<!-- simple signup and login using php and html -->

<?php
        //start the session
        session_start();

        include("connection.php");
        include("functions.php");
    
        //check if the user is login
        $user_data = check_login($con);
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auth </title>
</head>
<body>
    <a href = "logout.php">Logout</a>
    <h1>Welcome</h1>
    <h3>This is the home page</h3>
    <br/>
    Hello,<?php echo $user_data['user_name']; ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
</head>

<body>
    <!-- Instructions: Use PHP to display only one of the div depending on the value of the boolean! -->
    
    <?php
    // A boolean to check if the user is logged in
    $loggedIn = false;
    ?>

    <?php
    if ($loggedIn == true) {
    ?>
    <!-- Display this content only if the user is logged in -->
    <div>You are logged in! Now you can see your personal sensitive data.</div>
    <?php
    } else {
    ?>
    <!-- Display this content only if the user is not logged in -->
    <div>Please log in or sign up to access your account</div>
    <?php
    }
    ?>

</body>

</html>

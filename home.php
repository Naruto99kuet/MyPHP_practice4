<?php
    include_once 'dbh.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>


<body>

    <form action="sign_up.php" method="POST">
        <input type="text" name="first" placeholder="First Name">
        <br>
        <input type="text" name="last" placeholder="Last Name">
        <br>
        <input type="text" name="email" placeholder="Email">
        <br>
        <input type="text" name="uid" placeholder="Username">
        <br>
        <input type="password" name="pwd" placeholder="Password">
        <br>
        <button type = "submit" name="submit">Sign up</button>
    </form>

<?php

    /*
    $data = "Admin";
    //created a template
    $sql = "SELECT * FROM users WHERE user_uid=?;";
    //create  a prepared statement
    $stmt = mysqli_stmt_init($conn);
    //prepare the prepared statement
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "SQL statement failed<br>";
    }
    else {
        //bind parameters to the placeholder
        mysqli_stmt_bind_param($stmt, "s", $data);
        //run parameters inside database
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        while($row = mysqli_fetch_assoc($result)) {
            echo $row['user_uid']."<br>";
        }
    }
    */

?>



</body>





</html>


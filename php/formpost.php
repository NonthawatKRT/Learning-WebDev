<?php

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Test</title>
</head>
<body>
    <h2>Sending Form Data</h2>
    <form action="formpost.php" method="POST">
        Name: <input type="text" name="name">
        <br>
        <br>
        E-mail: <input type="text" name="email">
        <br>
        <br>
        password: <input type="password" name="password">
        <br>
        <br>
        <input type="submit">
        <br>
        <br>
    </form>
</body>
</html>

<?php

    if(isset($name) && isset($email) && isset($password)){
        echo "<h2>Form is submitted</h2>";
        echo "Name: $name";
        echo "<br>";
        echo "E-mail: $email";
        echo "<br>";
        echo "Password: $password";
    }
    else{
        echo "No data Please fill out the form";
    }

?>
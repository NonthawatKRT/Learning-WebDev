<!DOCTYPE html>
<html>
<head>
    <title>PHP Test</title>
</head>

<body>
    <h3>Using PHP WITH HTML</h3>
    <?php
        echo "Hello World!";
        echo "<br>";
        echo "This is the message from PHP";
        echo "<br>";
        $sum = 50+19;
        echo "<br>";
        echo "50 + 19 = $sum";


        date_default_timezone_set('Asia/Bangkok');
        $time = date("d/m/Y");
        echo "<br>";
        echo "<br>";
        echo "Today is $time";
        echo "<br>";
        echo "Time is " . date("h:i:s");
        echo "<br>";
    ?>
</body>
</html>
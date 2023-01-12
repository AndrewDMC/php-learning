<!-- Hello World HTML -->
<!DOCTYPE html>
<html>

<head>
    <title>Hello World</title>
</head>

<body>
    <h1>PHP File</h1>
    <?php
        ini_set('display_errors', 1);
        
        $servername = "localhost";
        $username = "username";
        $password = "password";

        // Create connection
        $conn = new mysqli($servername, $username, $password);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";
    ?>
</body>

</html>
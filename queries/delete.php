<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete</title>
</head>
<body>
    <?php
    $id = "";
    require ('connection.php');
    session_start();
    if (isset ($_REQUEST['id'])) {
        $id = $_REQUEST['id'];
    }
    $sql = "DELETE FROM TEST_GPS WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    ?>
    <form action="post">
        <label for="id">ID</label>
        <input type="post" name="id">
        <input type="submit" value="Delete">
    </form>
</body>
</html>
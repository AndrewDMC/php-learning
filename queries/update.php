<!DOCTYPE html>
<html>
<head>
    <title>Queries</title>
</head>
<body>
    <?php 
        require('db.php');
    ?>

    <div>
        <form method="POST" action="makeUpdate.php">
            <select name="idToUpd">
            <?php
                $fields = $con->query("SELECT * FROM TEST_GPS");

                if ($fields->num_rows > 0) {
                    while ($row = $fields->fetch_assoc()) {
                        echo "<option>".$row["id"]."</option>";
                    }
                }
            ?>
            </select>

            <button>Submit</button>
        </form>
    </div>
</body>
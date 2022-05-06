<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise6</title>
</head>
    <body>
        <p>Select User from Drop Down Menu</p>
        <form action="viewUserPosts.php" method="POST">
        <?php
        
            $mysqli = new mysqli("mysql.eecs.ku.edu", "b704k889", "ho3Phug4", "b704k889");
            
            /* check connection */
            if ($mysqli->connect_errno) {
                printf("Connect failed: %s\n", $mysqli->connect_error);
                exit();
            }
            
            $query = "SELECT * FROM USERS";
            
            if ($result = $mysqli->query($query)) {
                echo "<label for='users'>Select User: </label>";
                echo "<select name='users' id='users'>";
                while ($row = mysqli_fetch_array($result)) {
                    $id = $row["user_id"];
                    echo "<option value=$id>".$id."</option>";
                }
                echo "</select><br><br>";
            }
        ?>
        <button id = "submit">Show Posts</button>
        </form>
            
    </body>
</html>
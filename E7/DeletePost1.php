<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excerise 7</title>
</head>
<<body>
    <p>Select the posts you'd like to remove</p>
    <form action="DeletePost.php" method="POST">
    <?php
        
        $mysqli = new mysqli("mysql.eecs.ku.edu", "b704k889", "ho3Phug4", "b704k889");

        /* check connection */
        if ($mysqli->connect_errno) {
          printf("Connect failed: %s\n", $mysqli->connect_error);
          exit();
        }
        
        $query = "SELECT * FROM POSTS";
        
        if ($result = $mysqli->query($query)) {
            echo "<table border = 1>";
            echo "<tr><th>Posts</th><th>Contents</th><th>Remove?</th></tr>";
            while ($row = mysqli_fetch_array($result)) {
                $content = $row["content"];
                $id = $row["author_id"];
                $post = $row["post_id"];
                echo "<tr>
                    <td>".$id."</td>
                    <td>".$content."</td>
                    <td><input type='checkbox' name='ids[]' value='$post' ></td>
                </tr>";
            }
            echo "</table><br>";
        }
    ?>
    <button id = "delete">Delete Selected Posts</button>
    </form>
        
    </body>
</html>
<?php
    $mysqli = new mysqli("mysql.eecs.ku.edu", "b704k889", "ho3Phug4", "b704k889");

    /* check connection */
    if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
    }
    foreach ($_POST['ids'] as $delete) {
        $sql = "DELETE FROM POSTS WHERE post_id = '$delete'";
        if ($result = $mysqli->query($sql)) {
            echo "<p>Post ID: ".$delete." Removed </p>";
        }
    }
?>
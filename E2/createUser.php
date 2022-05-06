<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "b704k889", "ho3Phug4", "b704k889");
/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
exit();
}


$user = $_POST["username"];
if($user == ''){
    $query = "INSERT INTO USERS(user_id) VALUES (NULL)";
} else {
    $query = "INSERT INTO USERS(user_id) VALUES ('$user')";
}

if ($result = $mysqli->query($query)) { 
    echo "<p>User added</p>";
}  else {
    echo "<p>User not added</p>";
}
$mysqli->close();
?>
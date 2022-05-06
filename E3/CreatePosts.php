<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "b704k889", "ho3Phug4", "b704k889");

if ($mysqli->connect_errno) { 
    printf("Connect failed: %s\n", $mysqli->connect_error); 
    exit(); 
} 

$user = $_POST["user"];
$post = $_POST["post"];

if($post == ""){
    $query = "INSERT INTO POSTS(content, author_id) VALUES (NULL,'$user')";
} else {    
    $query = "INSERT INTO POSTS(content, author_id) VALUES ('$post','$user')";
}

if ($result = $mysqli->query($query)) { 
    echo "<p>Content Posted</p>";
}  else {
    echo "<p>Content Not Posted</p>";
}
?>

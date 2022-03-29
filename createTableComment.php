<?php
include("connectDatabase.php");
$sql = "CREATE TABLE Comment (
    commentId int unsigned auto_increment,
    userName VARCHAR(30) not null unique,
    userEmail VARCHAR(255) not null,
    userComment VARCHAR(255) not null,
    userCommentTime datetime DEFAULT null,
    facilityId int unsigned,
    PRIMARY KEY (commentId),
    FOREIGN KEY (facilityId) REFERENCES facility(facilityId)
)";

if ($conn->query($sql))
    echo("Table created successfully");
else
    echo("Error: " . $conn->error);
?>
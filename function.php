<?php include "db.php"; ?>
<?php

function createRow() {
    global $connection;
    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
    
    
    $query = "INSERT INTO user(username, password)";
    $query .= "VALUES ('$username', '$password')";
    
    $result = mysqli_query($connection, $query);
    
    if(!$result) {
        dir('Query Failed' . mysqli_error());
    } else {
        echo "Record Create";
    }
}}
function showAllData() {
    global $connection;
    $query = "SELECT * FROM user";

$result = mysqli_query($connection, $query);

if(!$result) {
    dir('Query Failed' . mysqli_error());
}

while($row = mysqli_fetch_assoc($result)){
    $id = $row['id'];
    echo "<option value='$id'>$id</option>";
}
}

function Updatetable() {
    if(isset($_POST['submit'])){
    global $connection;
    $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        $query = "UPDATE user SET username = '$username', password = '$password' WHERE id = $id";

        $result = mysqli_query($connection, $query);
        if(!$result) {
            die("Query Failed". mysqli_error($connection));
        }else {
            echo "Record Updated";
        }
}}

function deleteRow() {
    if(isset($_POST['submit'])){
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "DELETE FROM user WHERE id = $id";

        $result = mysqli_query($connection, $query);
        if(!$result) {
            die("Query Failed". mysqli_error($connection));
        }else {
            echo "Record Deleted";
        }
}}


function readRows() {
    global $connection;
    
    $query = "SELECT * FROM user";

    $result = mysqli_query($connection, $query);

    if(!$result) {
        dir('Query Failed' . mysqli_error());
    }

    while($row = mysqli_fetch_assoc($result)) {
        print_r($row);
     }
}
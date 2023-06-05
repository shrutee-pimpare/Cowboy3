<?php
 $conn = mysqli_connect("localhost","root","","loginregisterdb");

 if (mysqli_connect_error()) {
     echo "Error: ".mysqli_connect_error();
     exit;
 }
 
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];

$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    // echo "Registration successful!";
    echo "<script>window.location.href = 'index.html';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
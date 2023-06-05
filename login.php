<?php
 $conn = mysqli_connect("localhost","root","","loginregisterdb");

 if (mysqli_connect_error()) {
     echo "Error: ".mysqli_connect_error();
     exit;
 }
 
 $email = $_POST["email"];
 $password = $_POST["password"];

 $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
 $result = $conn->query($sql);

if ($result->num_rows == 1) {
    // echo "login successful!";
    header("Location: main.html");
} else {
    // echo "Error: " . $sql . "<br>" . $conn->error;
    echo "<script>alert('Invalid credentials. Please try again, if dont have an account, thgen please Register yourself by navigationg to Register link!.');</script>";
    echo "<script>window.location.href = 'index.html';</script>";
}

$conn->close();

?>
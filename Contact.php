<!-- <?php
//  $conn = mysqli_connect("localhost","root","","loginregisterdb");

//  if (mysqli_connect_error()) {
//      echo "Error: ".mysqli_connect_error();
//      exit;
//  }
  
//  $firstname = $_POST["firstname"];
// $lastname = $_POST["lastname"];
// $email = $_POST["email"];
// $bicycle = $_POST["bicycle"];
// $phone = $_POST["phone"];
// $region = $_POST["region"];

// $sql = "INSERT INTO contact (firstname, lastname, email, bicycle, phone, region) VALUES ('$firstname', '$lastname', '$email', '$bicycle', '$phone', '$region')";



// if ($conn->query($sql) === TRUE) {
//     // header("Location: thanks.html?name=" . urlencode($firstname));
//     // echo "Thanks for contacting us";
//     echo "<script>window.location.href = 'Thanks.html';</script>";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();

//  ?> -->
<?php
$conn = mysqli_connect("localhost", "root", "", "loginregisterdb");

if (mysqli_connect_error()) {
    echo "Error: " . mysqli_connect_error();
    exit;
}

$firstname = isset($_POST["firstname"]) ? $_POST["firstname"] : "x";
$lastname = isset($_POST["lastname"]) ? $_POST["lastname"] : "y";
$email = isset($_POST["email"]) ? $_POST["email"] : "a";
$bicycle = isset($_POST["bicycle"]) ? $_POST["bicycle"] : "z";
$phone = isset($_POST["phone"]) ? $_POST["phone"] : "1";
$region = isset($_POST["region"]) ? $_POST["region"] : "c";

$stmt = $conn->prepare("INSERT INTO contact (firstname, lastname, email, bicycle, phone, region) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $firstname, $lastname, $email, $bicycle, $phone, $region);

if ($stmt->execute()) {
    // echo "<script>window.location.href = 'Thanks.php?name=" . urlencode($firstname) . "';</script>";
    $bicycleLink = ""; // Initialize the bicycle website link variable

    // Assign the appropriate website link based on the selected bicycle
    if ($bicycle === "Mountain Bike") {
        $bicycleLink = "https://www.outdoors91.com/mountain-bikes?gad=1&gclid=CjwKCAjw36GjBhAkEiwAKwIWyaibrwgmzHscm9nXAHnjeD59LbriZrbZ3HoGEVu88a5Se-q9spo1uBoCGagQAvD_BwE";
    } elseif ($bicycle === "Road Bike") {
        $bicycleLink = "https://giantindia.com/collections/all-bikes?utm_source=GOOGPD&utm_medium=COMPTNKW&gclid=CjwKCAjw36GjBhAkEiwAKwIWyevc57yqfAk0rNNcHd6xLibqHeG39Hj2Jyjbva2LG0_WaGgwmHMITxoCOm4QAvD_BwE";
    } elseif ($bicycle === "City Bike") {
        $bicycleLink = "https://www.trackandtrail.in/cycles/city-bikes";
    } elseif($bicycle === "Hybrid Bike"){
        $bicycleLink = "https://www.firefoxbikes.com/bicycles/hybrid_bikes/?utm_source=google&utm_medium=cpc&utm_campaign=Hybrid+Pmax&gclid=CjwKCAjw36GjBhAkEiwAKwIWybG_R5OGgh5sHy0ZIB_vZPQ427xSsWuvx1__fbAZ3Gg0NRFedwxm4BoCLhcQAvD_BwE";
    } elseif($bicycle === "Trail Bike"){
        $bicycleLink = "https://www.trekbikes.com/in/en_IN/bikes/mountain-bikes/trail-mountain-bikes/c/B330/";
    } elseif($bicycle === "Enduro Bike"){
        $bicycleLink = "https://www.canyon.com/en-in/mountain-bikes/enduro-bikes/";
    } elseif($bicycle === "Fat Bike"){
        $bicycleLink = "https://www.outdoors91.com/fat-tyre-bikes";
    } elseif($bicycle === "Cross-Country Bike"){
        $bicycleLink = "https://www.trekbikes.com/in/en_IN/bikes/mountain-bikes/cross-country-mountain-bikes/c/B310/";
    } elseif($bicycle === "Downhill Bike"){
        $bicycleLink = "https://www.amazon.in/Mongoose-Bootr-27-5-Bicycle-Medium/dp/B07CB721B2";
    }


    header("Location: Thanks.php?name=" . urlencode($firstname) . "&bicycle=" . urlencode($bicycle) . "&bicycleLink=" . urlencode($bicycleLink));
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
